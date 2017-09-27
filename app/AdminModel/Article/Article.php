<?php
/**
 * Created by PhpStorm.
 * User: guning
 * Date: 2017/9/10
 * Time: 17:03
 */
namespace App\AdminModel\Article;

use App\AdminModel\xhdt\Report;
use Illuminate\Support\Facades\Storage;

class Article {
    public function getApiData($id){
        $report = new Report();
        $res = $report->select('title')->where('id', '=', $id)->first();

        if ($res->count() == 0) {
            return array();
        }

        $filename = $id . ".txt";
        if (Storage::disk('uploadHtml')->exists($filename)) {
            $file = Storage::disk('uploadHtml')->get($filename);
        } else {
            $file = '';
        }

        return array(
            'title' => $res['title'],
            'content' => $file
        );
    }
}