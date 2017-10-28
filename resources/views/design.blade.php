<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>趣味焊工大赛</title>
    <script src="https://cdn.bootcss.com/vue/2.4.4/vue.min.js"></script>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/quwei.css') }}">
</head>

<body style="background: rgba(200,230,255,1);">
<div class="content top10">
	
	<div class="container text-center">
    	<h1>趣味焊工大赛</h1>
    	<h4>报名页面</h4>
    </div>

	<div class="container top10">
    	<form id="formform">
			<div class="form-group">
				<label for="teamming">队名：</label>
    			<input type="text" class="form-control" id="teamming" maxlength="10" placeholder="上限10字" v-model="profile['teamming']">
			</div>
			<div class="form-group">
      			 <label for="havehuiyuan">队伍中是否有无协会员</label> <input type="checkbox" id="havehuiyuan" v-model="profile['havehuiyuan']">
  			</div>
		
			<div class="form-group">
				<label>队伍人数：@{{members}}</label>
				
				<div class="btn-group" role="group">
						<button type="button" class="btn btn-default" v-on:click="changemembers(1)">1</button>
						<button type="button" class="btn btn-default" v-on:click="changemembers(2)">2</button>
						<button type="button" class="btn btn-default" v-on:click="changemembers(3)">3</button>
				</div>

				<div class="list-group top5">
 					<a href="#" class="list-group-item active" onclick="return false;" v-on:click="editprofile(1)">
    					<h4 class="list-group-item-heading">队长:@{{profile.member1name}}</h4>
  					</a>
  					<a href="#" class="list-group-item " onclick="return false;" v-if="members>=2" v-on:click="editprofile(2)">
    					<h4 class="list-group-item-heading">队员:@{{profile.member2name}}</h4>
  					</a>
  					<a href="#" class="list-group-item " onclick="return false;" v-if="members>=3" v-on:click="editprofile(3)">
    					<h4 class="list-group-item-heading">队员:@{{profile.member3name}}</h4>
  					</a>

  					
				</div>
			</div>
		</form>
				<button class="btn btn-primary center-block" v-on:click="submitquwei">
					提
					交
				</button>
    	
    </div>
	<div class="xmodal" v-show="modalshow" >
		<div class="xmodal-data" id="changedata">
			<div class="form-group">
				<label for="changename">姓名：</label>
    			<input type="text" class="form-control input-sm" maxlength="20" id="changename" v-model="changename">
			</div>
			<div class="form-group">
				<label for="changexueyuan">学院：</label>
    			<input type="text" class="form-control input-sm" maxlength="20" id="changexueyuan" v-model="changexueyuan">
			</div>
			<div class="row form-group">
				<div class="col-xs-6">
					<label for="changeclass">班级：</label>
	    			<input type="text" class="form-control input-sm" maxlength="20" id="changeclass" v-model="changeclass">
				</div>
				<div class="col-xs-6">
					<label for="changesushe">宿舍：</label>
	    			<input type="text" class="form-control input-sm" maxlength="20" id="changesushe" v-model="changesushe">
				</div>
			</div>
			<div class="form-group">
				<label for="changeQQ">QQ号：</label>
    			<input type="text" class="form-control input-sm" maxlength="12" id="changeQQ" v-model="changeQQ">
			</div>
			<div class="form-group">
				<label for="changedianhua">手机：</label>
    			<input type="text" class="form-control input-sm" maxlength="11" id="changedianhua" v-model="changedianhua">
			</div>
			<button class="btn btn-primary" v-on:click="saveprofile()">
				确
				认
			</button>
			<h5 style="margin-left: 5px; display:inline;">
				@{{profileerror}}
			</h5>
		</div>
		<div class="xmodal-overlay" v-on:click="changemodalstat(false)">
		</div>
	</div>

</div>
</body>
<script type="text/javascript" src="{{ URL::asset('js/design.js') }}"></script>
</html>