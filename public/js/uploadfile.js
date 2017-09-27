/**
 * Created by 罟宁 on 2017/5/2.
 */
//depend on jquery

function uploadfile(thisfile){
    //this.id = thisfile.id;
    this.file = $(thisfile)[0].files[0];
    this.re = /^image\/.*$/;
    this.formdata = new FormData();

    var deal = function(){
        if (this.file == null) {
            return;
        }
        if (this.re.test(this.file.type)){
            this.formdata.append('pic', this.file);
            //this.formdata.append('page', this.id);
        }else{
            alert("文件类型不符合");
        }
    };

    var upload = function(){
        $.ajax({
            url : '/common/upload',
            type : 'POST',
            data : this.formdata,
            cache : false,
            processData: false,
            contentType: false,
            success : function(data){
                console.log(data);
                switch (data.state){
                    case 'success':
                        $(thisfile).next().attr('value', data.picPath);
                        alert('upload file success');
                        break;
                    case 'fail':
                        alert(data.errMes);
                        break;
                    default:
                        console.log('未登录或者权限不够');
                }
            },
            error : function(xhr){
                console.log(xhr);
            }
        });
    };
    deal();
    upload();
}