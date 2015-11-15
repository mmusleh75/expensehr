
function myFunction(id,day) {
    var loc_id = $('#'+id).val();
    var day = day;
        $.ajax({
            type:'POST',
            url:'getLocation',
            data:{id:loc_id},
            dataType:'json',

        }).done(function(data) { 
            if(id == 'mySelect1'){
                
            $('#loc1').text(data[4]);
            
            for(var i=1;i<=3;i++){
                 var flip = $('span[name='+day+i+']').attr('flip');

                        if(flip == 1){
                          
                          $('span[name='+day+i+']').removeClass( "btn-success" );
                          $('span[name='+day+i+']').addClass( "btn-warning" );
                          $('span[name='+day+i+']').attr('flip',0);
                     } 


                $('span[name='+day+i+']').attr('value',data[i]);
                $('span[name='+day+i+']').text(data[i]);


            }
               
                var total = $('input[name='+"total_"+day+']').val();
                var last_total_per = $('#total_per').val();
                var new_total_per = parseFloat(last_total_per) - parseFloat(total); 
               
                $('#total_per').val(new_total_per);
                $('input[name='+"total_"+day+']').val(0);
                $('#total_'+day).text(0);
              
              if($('span[name='+day+"1"+']').attr('value') == 0) {
                
                    for(var i=1;i<=3;i++){
                          $('span[name='+day+i+']').addClass( "disabled" );
                        }
                  } else {
                    for(var i=1;i<=3;i++){
                          $('span[name='+day+i+']').removeClass( "disabled" );
                      }
                  } 
 

            } else if (id == 'mySelect2'){
                
            $('#loc2').text(data[4]);
            
            for(var i=1;i<=3;i++){
                 var flip = $('span[name='+day+i+']').attr('flip');

                        if(flip == 1){
                          
                          $('span[name='+day+i+']').removeClass( "btn-success" );
                          $('span[name='+day+i+']').addClass( "btn-warning" );
                          $('span[name='+day+i+']').attr('flip',0);
                     } 
               
                $('span[name='+day+i+']').attr('value',data[i]);
                $('span[name='+day+i+']').text(data[i]);


            }
                var total = $('input[name='+"total_"+day+']').val();
                var last_total_per = $('#total_per').val();
                var new_total_per = parseFloat(last_total_per) - parseFloat(total); 
               
                $('#total_per').val(new_total_per);
                $('input[name='+"total_"+day+']').val(0);
                $('#total_'+day).text(0);

              if($('span[name='+day+"1"+']').attr('value') == 0) {
                
                    for(var i=1;i<=3;i++){
                          $('span[name='+day+i+']').addClass( "disabled" );
                        }
                  } else {
                    for(var i=1;i<=3;i++){
                          $('span[name='+day+i+']').removeClass( "disabled" );
                      }
                  } 

            } else if (id == 'mySelect3'){
                
            $('#loc3').text(data[4]);
            
            for(var i=1;i<=3;i++){
                 var flip = $('span[name='+day+i+']').attr('flip');

                        if(flip == 1){
                          
                          $('span[name='+day+i+']').removeClass( "btn-success" );
                          $('span[name='+day+i+']').addClass( "btn-warning" );
                          $('span[name='+day+i+']').attr('flip',0);
                     } 
               
                $('span[name='+day+i+']').attr('value',data[i]);
                $('span[name='+day+i+']').text(data[i]);


            }
                var total = $('input[name='+"total_"+day+']').val();
                var last_total_per = $('#total_per').val();
                var new_total_per = parseFloat(last_total_per) - parseFloat(total); 
               
                $('#total_per').val(new_total_per);
                $('input[name='+"total_"+day+']').val(0);
                $('#total_'+day).text(0);

              if($('span[name='+day+"1"+']').attr('value') == 0) {
                
                    for(var i=1;i<=3;i++){
                          $('span[name='+day+i+']').addClass( "disabled" );
                        }
                  } else {
                    for(var i=1;i<=3;i++){
                          $('span[name='+day+i+']').removeClass( "disabled" );
                      }
                  } 

            } else if (id == 'mySelect4'){
                
            $('#loc4').text(data[4]);
            
            for(var i=1;i<=3;i++){
                 var flip = $('span[name='+day+i+']').attr('flip');

                        if(flip == 1){
                          
                          $('span[name='+day+i+']').removeClass( "btn-success" );
                          $('span[name='+day+i+']').addClass( "btn-warning" );
                          $('span[name='+day+i+']').attr('flip',0);
                     } 
               
                $('span[name='+day+i+']').attr('value',data[i]);
                $('span[name='+day+i+']').text(data[i]);


            }
                var total = $('input[name='+"total_"+day+']').val();
                var last_total_per = $('#total_per').val();
                var new_total_per = parseFloat(last_total_per) - parseFloat(total); 
               
                $('#total_per').val(new_total_per);
                $('input[name='+"total_"+day+']').val(0);
                $('#total_'+day).text(0);
             
              if($('span[name='+day+"1"+']').attr('value') == 0) {
                
                    for(var i=1;i<=3;i++){
                          $('span[name='+day+i+']').addClass( "disabled" );
                        }
                  } else {
                    for(var i=1;i<=3;i++){
                          $('span[name='+day+i+']').removeClass( "disabled" );
                      }
                  } 


            } else if (id == 'mySelect5'){
                
            $('#loc5').text(data[4]);
            
            for(var i=1;i<=3;i++){
                 var flip = $('span[name='+day+i+']').attr('flip');

                        if(flip == 1){
                          
                          $('span[name='+day+i+']').removeClass( "btn-success" );
                          $('span[name='+day+i+']').addClass( "btn-warning" );
                          $('span[name='+day+i+']').attr('flip',0);
                     } 
               
                $('span[name='+day+i+']').attr('value',data[i]);
                $('span[name='+day+i+']').text(data[i]);


            }
                var total = $('input[name='+"total_"+day+']').val();
                var last_total_per = $('#total_per').val();
                var new_total_per = parseFloat(last_total_per) - parseFloat(total); 
               
                $('#total_per').val(new_total_per);
                $('input[name='+"total_"+day+']').val(0);
                $('#total_'+day).text(0);

              if($('span[name='+day+"1"+']').attr('value') == 0) {
                
                    for(var i=1;i<=3;i++){
                          $('span[name='+day+i+']').addClass( "disabled" );
                        }
                  } else {
                    for(var i=1;i<=3;i++){
                          $('span[name='+day+i+']').removeClass( "disabled" );
                      }
                  } 

            } else if (id == 'mySelect6'){
                
            $('#loc6').text(data[4]);
            
            for(var i=1;i<=3;i++){
                 var flip = $('span[name='+day+i+']').attr('flip');

                        if(flip == 1){
                          
                          $('span[name='+day+i+']').removeClass( "btn-success" );
                          $('span[name='+day+i+']').addClass( "btn-warning" );
                          $('span[name='+day+i+']').attr('flip',0);
                     } 
               
                $('span[name='+day+i+']').attr('value',data[i]);
                $('span[name='+day+i+']').text(data[i]);


            }
                var total = $('input[name='+"total_"+day+']').val();
                var last_total_per = $('#total_per').val();
                var new_total_per = parseFloat(last_total_per) - parseFloat(total); 
               
                $('#total_per').val(new_total_per);
                $('input[name='+"total_"+day+']').val(0);
                $('#total_'+day).text(0);
             
              if($('span[name='+day+"1"+']').attr('value') == 0) {
                
                    for(var i=1;i<=3;i++){
                          $('span[name='+day+i+']').addClass( "disabled" );
                        }
                  } else {
                    for(var i=1;i<=3;i++){
                          $('span[name='+day+i+']').removeClass( "disabled" );
                      }
                  } 

            } else if (id == 'mySelect7'){
                
               
            $('#loc7').text(data[4]);
            
            for(var i=1;i<=3;i++){
                 var flip = $('span[name='+day+i+']').attr('flip');

                        if(flip == 1){
                          
                          $('span[name='+day+i+']').removeClass( "btn-success" );
                          $('span[name='+day+i+']').addClass( "btn-warning" );
                          $('span[name='+day+i+']').attr('flip',0);
                     } 
               
                $('span[name='+day+i+']').attr('value',data[i]);
                $('span[name='+day+i+']').text(data[i]);


            }
                var total = $('input[name='+"total_"+day+']').val();
                var last_total_per = $('#total_per').val();
                var new_total_per = parseFloat(last_total_per) - parseFloat(total); 
               
                $('#total_per').val(new_total_per);
                $('input[name='+"total_"+day+']').val(0);
                $('#total_'+day).text(0);

              if($('span[name='+day+"1"+']').attr('value') == 0) {
                
                    for(var i=1;i<=3;i++){
                          $('span[name='+day+i+']').addClass( "disabled" );
                        }
                  } else {
                    for(var i=1;i<=3;i++){
                          $('span[name='+day+i+']').removeClass( "disabled" );
                      }
                  } 

            }



        });
         return false;

}
