/**
 * Created by 罟宁 on 2017/5/20.
 */

/*//用来存取数据的类
var addData = (function(){
    var data = {};

    return{
        get_data : function(){
            return data;
        },
        set_data : function(name, val){
            data[name] = val;
        }
    };
});

var forms = new addData();
//每次有改变均将改变值写入forms中
function tChange(elem){
    forms.set_data($(elem).attr("name"), $(elem).val());
}*/

//点击提交/预览则向服务端发送提交请求
function sendData(){
    var data = getdata();
    $.ajax({
        url : window.location.href + "/up",
        type : "POST",
        data : data,
        processData : false,
        contentType : false,
        success : function(data){
            if(data.state == true){
                location.reload(true);
            }else{
                alert("request failed");
            }
        },
        error : function(xhr){
            console.log(xhr);
        }
    });
}

function getdata(){
    var data = new FormData(document.getElementById("dataform"));
    return data;
}

function deleteEle(btn){
    if($(btn).next().val() == ""){
        $(btn).parent().parent().remove();
    }else{
        $.ajax({
            url : window.location.href + "/del",
            type : "POST",
            data : {'id' : $(btn).next().val()},
            success : function(data){
                console.log(data);
                if(data.state == true){
                    $(btn).parent().parent().remove();
                }else{
                    alert("request failed");
                }
            },
            error : function(xhr){
                console.log(xhr);
            }
        });
    }

}