<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CompetitionEntryRequest;
use App\CompetitionMember;
use App\CompetitionTeam;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Writers\LaravelExcelWriter;
use Maatwebsite\Excel\Classes\LaravelExcelWorksheet;

class Competition extends Controller
{

    public function __construct()
    {}

    public function register(CompetitionEntryRequest $request)
    {
        if ($request->input('member') != null) {
            $memberNumber = count($request->input('member'));
        } else {
            $memberNumber = 0;
        }
        $attribute = $request->all();
        // 进行插入
        $team = CompetitionTeam::create([
            'team_name' => $attribute['teamName'],
            'slogen' => $attribute['slogen']
        ]);
        $leader = new CompetitionMember([
            'is_leader' => true,
            'name' => $attribute['leader']['name'],
            'phone' => $attribute['leader']['phone'],
            'qq' => $attribute['leader']['qq']
        ]);
        $team->competitionMember()->save($leader);
        for ($i = 0; $i < $memberNumber; $i ++) {
            $member = new CompetitionMember([
                'is_leader' => false,
                'name' => $attribute['member'][$i]['name'],
                'phone' => $attribute['member'][$i]['phone'],
                'qq' => $attribute['member'][$i]['qq']
            ]);
            $team->competitionMember()->save($member);
        }
        return response()->json(TRUE);
    }

    public function export()
    {
        $teams = CompetitionTeam::with('CompetitionMember')->get();
//         foreach ($teams as $team) {
//             echo $team->competitionMember[0];
//         }
//         exit();
        Excel::create('联赛报名', function (LaravelExcelWriter $excel) use ($teams) {
            $excel->setTitle('报名情况');
            $excel->setCreator('Meatwebsite');
            $excel->setCompany('SCUT-Rfa');
            $excel->setDescription('报名数据库导出');
            $excel->sheet('参赛队伍', function (LaravelExcelWorksheet $sheet) use ($teams) {
                $start = 2;
                $end = 4;
                $team_number = 1;
                $sheet->setWidth('A', 5);
                $sheet->setWidth('C', 20);
                $sheet->setWidth('D', 12);
                $sheet->setWidth('E', 13);
                $sheet->setHeight(1, 30);
                $sheet->setValueOfCell('编号', 'A', 1);
                $sheet->setValueOfCell('队伍名', 'B', 1);
                $sheet->setValueOfCell('队伍成员', 'C', 1);
                $sheet->setValueOfCell('电话号码', 'D', 1);
                $sheet->setValueOfCell('qq号', 'E', 1);
                $sheet->setHorizontalCentered(true);
                $sheet->setVerticalCentered(true);
                foreach ($teams as $team) {
                    $sheet->mergeCells("B$start:B$end")->setValueOfCell($team->team_name, 'B', $start);
                    $sheet->mergeCells("A$start:A$end")->setValueOfCell($team_number, 'A', $start);
                    foreach (range(0, count($team->competitionMember) - 1) as $number) {
                        $sheet->setValueOfCell($team->competitionMember[$number]->name, 'C', $start + $number);
                        $sheet->setValueOfCell($team->competitionMember[$number]->phone, 'D', $start + $number);
                        $sheet->setValueOfCell($team->competitionMember[$number]->qq, 'E', $start + $number);
                    }
                    $team_number ++;
                    $start += 3;
                    $end += 3;
                }
            });
        })->download('xlsx');
    }
}

