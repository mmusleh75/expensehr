
            function updateTextArea(el) {
                  
                 var id = $(el).attr('name');

                 if(id == 'sun')
                 {
                    var allVals1 = 0;
                         $('input[name="sun"]').each(function() {

                           if($(this).is(":checked")){
                                allVals1 = allVals1 + parseInt($(this).val());
                                }
                         });
                            $('#total_sun').text(allVals1);
                 }

                 if(id == 'mo')
                 {
                    var allVals2 = 0;
                         $('input[name="mo"]').each(function() {
                           if($(this).is(":checked")){
                                allVals2 = allVals2 + parseInt($(this).val());
                                }
                         });
                            $('#total_mon').text(allVals2);

                 }

                 if(id == 'tus')
                 {
                    var allVals3 = 0;
                         $('input[name="tus"]').each(function() {
                           if($(this).is(":checked")){
                                allVals3 = allVals3 + parseInt($(this).val());
                                }
                         });
                            $('#total_tus').text(allVals3);

                 }

                 if(id == 'we')
                 {
                    var allVals4 = 0;
                         $('input[name="we"]').each(function() {
                           if($(this).is(":checked")){
                                allVals4 = allVals4 + parseInt($(this).val());
                                }
                         });
                            $('#total_we').text(allVals4);

                 }

                 if(id == 'th')
                 {
                    var allVals5 = 0;
                         $('input[name="th"]').each(function() {
                           if($(this).is(":checked")){
                                allVals5 = allVals5 + parseInt($(this).val());
                                }
                         });
                            $('#total_th').text(allVals5);

                 }

                 if(id == 'fr')
                 {
                    var allVals6 = 0;
                         $('input[name="fr"]').each(function() {
                           if($(this).is(":checked")){
                                allVals6 = allVals6 + parseInt($(this).val());
                                }
                         });
                            $('#total_fr').text(allVals6);

                 }

                 if(id == 'st')
                 {
                    var allVals7 = 0;
                         $('input[name="st"]').each(function() {
                           if($(this).is(":checked")){
                                allVals7 = allVals7 + parseInt($(this).val());
                                }
                         });
                            $('#total_st').text(allVals7);

                 }
                    var total_per = 0;
                           var su =  $('#total_sun').text();
                           var mo =  $('#total_mon').text();                          
                           var tu =  $('#total_tus').text();
                           var we =  $('#total_we').text();
                           var th =  $('#total_th').text();
                           var fr =  $('#total_fr').text();
                           var st =  $('#total_st').text();

                           total_per += parseInt(su) + parseInt(mo) + parseInt(tu) + parseInt(we) +parseInt(th) + parseInt(fr) + parseInt(st);

                            $('#total_per').val(total_per);
              }    
                        