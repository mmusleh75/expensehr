
            function updateTextArea(el,i) {
                 var id = $(el).attr('name');

                 if(id == 'sun'+i)
                 {
                    var allVals1 = 0;
                      var flip = $('span[name='+id+']').attr('flip');

                   if(flip == 0){
                          $('span[name='+id+']').removeClass( "btn-warning" );
                          $('span[name='+id+']').addClass( "btn-success" );
                          $('span[name='+id+']').attr('flip',1);

                           var allVals1 = $('span[name='+id+']').attr('value');
                           $('input[name='+id+']').val(allVals1);
                           var last = $('#total_sun').text();
                           var total = parseInt(last) + parseInt(allVals1);
                           $('#total_sun').text(total);
                           $('input[name="total_sun"]').val(total);
                     } else

                        if(flip == 1){
                          
                          $('span[name='+id+']').removeClass( "btn-success" );
                          $('span[name='+id+']').addClass( "btn-warning" );
                          $('span[name='+id+']').attr('flip',0);
                           var allVals1 = $('span[name='+id+']').attr('value');
                           $('input[name='+id+']').val(0);
                           var last = $('#total_sun').text();
                           var total = parseInt(last) - parseInt(allVals1);
                           $('#total_sun').text(total);
                           $('input[name="total_sun"]').val(total);
                     } 

  }


                 if(id == 'mon'+i)
                 {
                    var allVals1 = 0;
                      var flip = $('span[name='+id+']').attr('flip');

                   if(flip == 0){
                          $('span[name='+id+']').removeClass( "btn-warning" );
                          $('span[name='+id+']').addClass( "btn-success" );
                          $('span[name='+id+']').attr('flip',1);
                           var allVals1 = $('span[name='+id+']').attr('value');
                           $('input[name='+id+']').val(allVals1);
                           var last = $('#total_mon').text();
                           var total = parseInt(last) + parseInt(allVals1);
                           $('#total_mon').text(total);
                           $('input[name="total_mon"]').val(total); 

                    } else

                        if(flip == 1){
                          
                          $('span[name='+id+']').removeClass( "btn-success" );
                          $('span[name='+id+']').addClass( "btn-warning" );
                          $('span[name='+id+']').attr('flip',0);
                           var allVals1 = $('span[name='+id+']').attr('value');
                           $('input[name='+id+']').val(0);
                           var last = $('#total_mon').text();
                           var total = parseInt(last) - parseInt(allVals1);
                           $('#total_mon').text(total);
                           $('input[name="total_mon"]').val(total);
                     } 

  }

                 if(id == 'tus'+i)
                 {
                    var allVals1 = 0;
                      var flip = $('span[name='+id+']').attr('flip');

                   if(flip == 0){
                          $('span[name='+id+']').removeClass( "btn-warning" );
                          $('span[name='+id+']').addClass( "btn-success" );
                          $('span[name='+id+']').attr('flip',1);
                           var allVals1 = $('span[name='+id+']').attr('value');
                           $('input[name='+id+']').val(allVals1);
                           var last = $('#total_tus').text();
                           var total = parseInt(last) + parseInt(allVals1);
                           $('#total_tus').text(total);
                           $('input[name="total_tus"]').val(total);

                     } else

                        if(flip == 1){
                          
                          $('span[name='+id+']').removeClass( "btn-success" );
                          $('span[name='+id+']').addClass( "btn-warning" );
                          $('span[name='+id+']').attr('flip',0);
                           var allVals1 = $('span[name='+id+']').attr('value');
                           $('input[name='+id+']').val(0);
                           var last = $('#total_tus').text();
                           var total = parseInt(last) - parseInt(allVals1);
                           $('#total_tus').text(total);
                           $('input[name="total_tus"]').val(total);                     
                        } 

  }

                 if(id == 'wen'+i)
                 {
                    var allVals1 = 0;
                      var flip = $('span[name='+id+']').attr('flip');

                   if(flip == 0){
                          $('span[name='+id+']').removeClass( "btn-warning" );
                          $('span[name='+id+']').addClass( "btn-success" );
                          $('span[name='+id+']').attr('flip',1);
                           var allVals1 = $('span[name='+id+']').attr('value');
                           $('input[name='+id+']').val(allVals1);
                           var last = $('#total_wen').text();
                           var total = parseInt(last) + parseInt(allVals1);
                           $('#total_wen').text(total);
                           $('input[name="total_wen"]').val(total);

                     } else

                        if(flip == 1){
                          
                          $('span[name='+id+']').removeClass( "btn-success" );
                          $('span[name='+id+']').addClass( "btn-warning" );
                          $('span[name='+id+']').attr('flip',0);
                           var allVals1 = $('span[name='+id+']').attr('value');
                           $('input[name='+id+']').val(0);
                           var last = $('#total_wen').text();
                           var total = parseInt(last) - parseInt(allVals1);
                           $('#total_wen').text(total);
                           $('input[name="total_wen"]').val(total);

                     } 

  }


                 if(id == 'the'+i)
                 {
                    var allVals1 = 0;
                      var flip = $('span[name='+id+']').attr('flip');

                   if(flip == 0){
                          $('span[name='+id+']').removeClass( "btn-warning" );
                          $('span[name='+id+']').addClass( "btn-success" );
                          $('span[name='+id+']').attr('flip',1);
                           var allVals1 = $('span[name='+id+']').attr('value');
                           $('input[name='+id+']').val(allVals1);
                           var last = $('#total_the').text();
                           var total = parseInt(last) + parseInt(allVals1);
                           $('#total_the').text(total);
                           $('input[name="total_the"]').val(total);

                     } else

                        if(flip == 1){
                          
                          $('span[name='+id+']').removeClass( "btn-success" );
                          $('span[name='+id+']').addClass( "btn-warning" );
                          $('span[name='+id+']').attr('flip',0);
                           var allVals1 = $('span[name='+id+']').attr('value');
                           $('input[name='+id+']').val(0);
                           var last = $('#total_the').text();
                           var total = parseInt(last) - parseInt(allVals1);
                           $('#total_the').text(total);
                           $('input[name="total_the"]').val(total);

                     } 

  }


                 if(id == 'fri'+i)
                 {
                    var allVals1 = 0;
                      var flip = $('span[name='+id+']').attr('flip');

                   if(flip == 0){
                          $('span[name='+id+']').removeClass( "btn-warning" );
                          $('span[name='+id+']').addClass( "btn-success" );
                          $('span[name='+id+']').attr('flip',1);
                           var allVals1 = $('span[name='+id+']').attr('value');
                           $('input[name='+id+']').val(allVals1);
                           var last = $('#total_fri').text();
                           var total = parseInt(last) + parseInt(allVals1);
                           $('#total_fri').text(total);
                           $('input[name="total_fri"]').val(total);
                     } else

                        if(flip == 1){
                          
                          $('span[name='+id+']').removeClass( "btn-success" );
                          $('span[name='+id+']').addClass( "btn-warning" );
                          $('span[name='+id+']').attr('flip',0);
                           var allVals1 = $('span[name='+id+']').attr('value');
                           $('input[name='+id+']').val(0);
                           var last = $('#total_fri').text();
                           var total = parseInt(last) - parseInt(allVals1);
                           $('#total_fri').text(total);
                           $('input[name="total_fri"]').val(total);

                     } 

  }


                 if(id == 'sat'+i)
                 {
                    var allVals1 = 0;
                      var flip = $('span[name='+id+']').attr('flip');

                   if(flip == 0){
                          $('span[name='+id+']').removeClass( "btn-warning" );
                          $('span[name='+id+']').addClass( "btn-success" );
                          $('span[name='+id+']').attr('flip',1);
                           var allVals1 = $('span[name='+id+']').attr('value');
                           $('input[name='+id+']').val(allVals1);
                           var last = $('#total_sat').text();
                           var total = parseInt(last) + parseInt(allVals1);
                           $('#total_sat').text(total);
                           $('input[name="total_sat"]').val(total);
                     } else

                        if(flip == 1){
                          
                          $('span[name='+id+']').removeClass( "btn-success" );
                          $('span[name='+id+']').addClass( "btn-warning" );
                          $('span[name='+id+']').attr('flip',0);
                           var allVals1 = $('span[name='+id+']').attr('value');
                           $('input[name='+id+']').val(0);
                           var last = $('#total_sat').text();
                           $('#total_sat').text(parseInt(last) - parseInt(allVals1));
                     } 

  }

                    var total_per = 0;

                           var su =  $('#total_sun').text();
                           var mo =  $('#total_mon').text();                          
                           var tu =  $('#total_tus').text();
                           var we =  $('#total_wen').text();
                           var th =  $('#total_the').text();
                           var fr =  $('#total_fri').text();
                           var st =  $('#total_sat').text();

                           total_per += parseInt(su) + parseInt(mo) + parseInt(tu) + parseInt(we) +parseInt(th) + parseInt(fr) + parseInt(st);
                            $('#total_per').val(total_per);
              };

            function billable(el,i) {
                 var id = $(el).attr('name');
                
                 if(id == 'b'+i)
                 {
                      var flip = $('span[name='+id+']').attr('flip');

                   if(flip == 0){
                          $('span[name='+id+']').removeClass( "btn-danger" );
                          $('span[name='+id+']').addClass( "btn-success" );
                          $('span[name='+id+']').attr('flip',1);
                          $('input[name='+id+']').val(1);
                          $('span[name='+id+']').text('YES');
                     } else

                        if(flip == 1){
                          $('span[name='+id+']').removeClass( "btn-success" );
                          $('span[name='+id+']').addClass( "btn-danger" );
                          $('span[name='+id+']').attr('flip',0);
                          $('input[name='+id+']').val(0);
                          $('span[name='+id+']').text('NO');
                     } 

  }

}

