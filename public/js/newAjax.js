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
    var xhr = new XMLHttpRequest();
    var readyChange = function(){
        if (xhr.readyState==4 && xhr.status==200) {
            successFun(xhr.responseText);
        }
    }
    xhr.onreadystatechange = readyChange;
    if(type == 1) {
        xhr.open("POST", url, true);
        xhr.send(data);
    } else {
        xhr.open("GET", url, true);
        xhr.send();
    }

}