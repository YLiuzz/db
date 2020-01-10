//no.1
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
//no.2
$(document).on('click','#send_record',function(){
    $.ajax({
        type:"POST",
        url:"api.php",
        dataType:"json",
        data:{
            op:"order",
            id_number:$('#data-id-number').val(),
            buy_day:$('#data-order-date').val(),
            predict_day:$('#data-pre-date').val(),
            real_day:$('#data-real-data').val(),
            order_name:$('#data-goods-name').val(),
            unit:$('#data-unit').val(),
            quantity:$('#data-quantity').val(),
            unit_price:$('#data-single-price').val(),
            price:$('#data-order-price').val(),
            supplier_name:$('#data-supplier-name').val(), 
            supplier_id:$('#data-supplier-number').val(), 
              
            
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
//no.3
$(document).on('click','#send_purchase',function(){
    $.ajax({
        type:"POST",
        url:"api.php",
        dataType:"json",
        data:{
            op:"purchase",
            supplier_number:"#data-supplier-name",
            supplier_name:$('#data-supplier-number').val(),
            supplier_boss:$('#data-supplier-person').val(),
            product_name:$('#data-goods-name').val(),
            product_quantity:$('#data-goods-quantity').val(),
            product_unit:$('#data-goods-unit').val(),
            product_price:$('#data-goods-price').val(),
            sub_total:$('#data-result').val(),
            postion:$('#data-stock-location').val(), 
            spec:$('#data-specs').val(),
            p_date:$('#data-pay-stats').val(),
            
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
// no.4
$(document).on('click','#send_collection',function(){
    $.ajax({
        type:"POST",
        url:"api.php",
        dataType:"json",
        data:{
            op:"collection",
            id_number:$('#data-name').val(),
            order_name:$('#data-id-number').val(),
            revenue:$('#data-expect-number').val(),
            dead_line:$('#data-expect-date').val(),
            uncollected:$('#data-need-price').val(),
             
            
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
// no.1-1
$(document).on('click','#search',function(){
    $.ajax({
        type:"POST",
        url:"api.php",
        dataType:"json",
        data:{
            op:"collection",
            id_number:$('#data-name').val(), 
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