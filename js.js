$(document).on('click','#send',function(){
        $.ajax({
            type:"POST",
            url:"api.php",
            dataType:"json",
            data:{
                op:"profile",
                name:$('#data-name').val(),
                id_name:$('#data-id-number').val(),
                phone:$('#data-phone').val(),
                addr:$('#data-address').val(),
                age:$('#data-age').val(),
                date:$('#data-input-date').val(),
                job:$('#data-job').val(),
                pay:$('#data-pay-stats').val(), 
                
            },
            success:function(data){
                if(data.msg=='success'){
                    alert('送出成功');
                    location.reload();
                }else{
                    alert(data.msg);
                    
                }
            },
            error:function(jqXHR){
                alert('送出失敗');
                
            }
        });
});