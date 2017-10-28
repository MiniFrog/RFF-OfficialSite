<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Design;
use App\Http\Requests;
class Designcon extends Controller
{
    public function submit() {
  		if(true) {
      		$data = $_POST;
          //dd($_POST);
      		$checkteamming= Design::where('teamming',$data['teamming'])->count();
      		if($checkteamming){
      			echo "teamming dup";
      			die;
      		}

      		$quwei=new Design;
      		$quwei->teamming=$data['teamming'];
      		if($data['havehuiyuan']=="true")
            $quwei->havehuiyuan="是";
      		else 
            $quwei->havehuiyuan="否";

      		$quwei->member1name=$data['member1name'];
      		$quwei->member1xueyuan=$data['member1xueyuan'];
     		  $quwei->member1class=$data['member1class'];
      		$quwei->member1sushe=$data['member1sushe'];
      		$quwei->member1QQ=$data['member1QQ'];
      		$quwei->member1dianhua=$data['member1dianhua'];
      		$quwei->member2name=$data['member2name'];
      		$quwei->member2xueyuan=$data['member2xueyuan'];
      		$quwei->member2class=$data['member2class'];
      		$quwei->member2sushe=$data['member2sushe'];
      		$quwei->member2QQ=$data['member2QQ'];
      		$quwei->member2dianhua=$data['member2dianhua'];
      		$quwei->member3name=$data['member3name'];
      		$quwei->member3xueyuan=$data['member3xueyuan'];
      		$quwei->member3class=$data['member3class'];
      		$quwei->member3sushe=$data['member3sushe'];
      		$quwei->member3QQ=$data['member3QQ'];
      		$quwei->member3dianhua=$data['member3dianhua'];
      		$quwei->save();
      		echo ("ZEXAL!!!");
      		die;
    	}
  	}
}