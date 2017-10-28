/**
 * Created by guning on 2017/9/2.
 */
/**
 * 新的ajax封装方法,后面的你们有时间把之前那个(deal.js)去掉放到这来
 * @param url
 * @param data
 * @param successFun
 */
function newAjax(type, url, data, successFun) {
    $.ajax({
        url : url,
        type : (type === 1) ? "POST" : "GET",
        data : data,
        processData : false,
        contentType : false,
        success : function(data){
            if(data === 'true'){
                successFun(data);
            }else{
                alert("request failed");
            }
        },
        error : function(xhr){
            console.log(xhr);
        }
    });
}