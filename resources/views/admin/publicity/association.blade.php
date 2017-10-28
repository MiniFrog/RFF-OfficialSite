@extends('admin.main')

@section('position', '协会概况 -> 关于无协')

@section('content')
<div>
    <form id="dataform">
    <label>协会简介</label>
    <textarea name="intro" rows="10">{{is_null($results)?'':$results->intro}}</textarea>
    <label>上传协会简介图片</label>
    <div>
        <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
        <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
        <input style="display: none" name="introimgpath" value="{{is_null($results)?'':$results->introimgpath}}"/>
    </div>
    <br/><br/>
    <label>品牌活动</label>
    <textarea name="activity" rows="10">{{is_null($results)?'':$results->activity}}</textarea>
    <div>
        <div style="float: left">
            <label>上传品牌活动图片1&nbsp;&nbsp;</label>
            <div>
                <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                <input style="display: none" name="actimgpathf" value="{{is_null($results)?'':$results->actimgpathf}}"/>
            </div>
        </div>
        <div style="float: left">
            <label>&nbsp;&nbsp;&nbsp;上传品牌活动图片2</label>
            <div>
                <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                <input style="display: none" name="actimgpaths" value="{{is_null($results)?'':$results->actimgpaths}}"/>
            </div>
        </div>
    </div>
    </form>
    <br/>
    <div>
        <button type="button" class="btn btn-primary btn-submit" id="subm" onclick="sendData()">提交</button>
        {{--<button type="button" class="btn btn-primary btn-review" id="prev" onclick="sendData(this)">预览</button>--}}
    </div>
</div>

@endsection