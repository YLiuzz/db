$(document).on('click','#sendmail',function(){
    var chk_code = $('#chk_code').val();
    if(chk_code == ''){
        alert('請輸入驗證碼');
        $('.admin_ver').focus();
    }else if(chk_code != Zcode){
        alert('驗證碼錯誤，請重新輸入');
        createCode();
        $('#chk_code').focus(); 
    }else{
        $.ajax({
            type:"POST",
            url:"user-admin/api/api.php",
            dataType:"json",
            data:{
                op:"profile",
                company:$('#data-company').val(),
                name:$('#data-name').val(),
                phone:$('#data-tel').val(),
                email:$('#data-email').val(),
                addr:$('#data-address :selected').val(),
                url:$('#data-url').val(),
                budget:$('#data-budget').val(), 
                text:$('#data-text').val()
            },
            success:function(data){
                if(data.msg=='success'){
                    alert('送出成功');
                    location.reload();
                }else{
                    alert(data.msg);
                    createCode();
                }
            },
            error:function(jqXHR){
                alert('送出失敗');
                createCode();
            }
        });
    }
});