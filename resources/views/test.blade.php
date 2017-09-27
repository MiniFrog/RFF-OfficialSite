<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form id="form">
    <input type="text" name="schedule[]"/>

    <form id="form">
        <input type="text" name="schedule[]"/>
        <input type="text" name="schedule[]"/>
        <button id="submit">提交</button>
    </form>
</form>
</body>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

    $("#submit").click(function(){
        var form = new FormData(document.getElementById("form"));
        console.log(form);
        $.ajax({
            url : '/',
            type : 'POST',
            data : form,
            cache : false,
            processData: false,
            contentType: false,
            success : function(data){
                console.log(data);
            },
            error : function(xhr){
                console.log(xhr);
            }
        });
    });

</script>
</html>