$(function() {

    window.select_num   ;
    window.count = 1 ;
    

$('.form_date').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0,
        pickerPosition : "top-left"
	
    });
	
	
$(".rooms-count").change(function(){
	
	var val = $(".rooms-count").val();
	$(".aa").remove();
	

	
	for( var num = 1 ; num < val ; num ++ ){	
		
		var redda =  '<div class="aa"><div class="col-md-4 "><br><div class="center">Room '+(num+1)+'<br></div></div>' ;
		redda +=	'<div class="col-md-4 col-xm-12">Adults';
		redda +=  '<select id="3" name="adult'+(num+1)+'"  class="soflow adult-class search-room" value="<?php echo $_SESSION["adult"] ?>">';	
	//	redda +=	'<option value="" selected><?php echo $_SESSION["'+adult+'"] ?></option>';
         redda +=           '<option value="1">1</option>';
         redda +=           '<option value="2">2</option>';
         redda +=          '<option value="3">3</option></select></div>';
				
		redda +=     '<div class="col-md-4 col-xm-12" >Children<select id="4" name="child'+(num+1)+'" class="soflow child-class search-room">';
	//	redda +=			'<option value="<?php echo $_SESSION["'+child+'"] ?>" selected><?php echo $_SESSION["'+child+'"] ?></option>' ;
		redda +=			'<option value="0">0</option>' ;
         redda +=           '<option value="1">1</option>' ;
        redda +=            '<option value="2">2</option>' ;
        redda +=            '<option value="3">3</option></select></div></div>' ;
		
		$(".room-count-list").append(redda);
			
				
	} 
	
});	
	

	/* rm search ajax */
	
	 $(".search-room").on("change" ,function(){  
		 var arrival = $("#1").val();
		var departure = $("#2").val();
		 var adult = $("#3").val();
		 var child = $("#4").val();
		 
		 
		 var did = $(this).data("id");
		 var value = $(this).val();
		if( did == 1){			
			arrival = value;
		}
	 	 
		 else if( did == 2){			
			departure = value;
		}
		 
		 else if( did == 3){			
			adult = value;
		}
		 
		 else if( did == 4){			
			child = value;
		}
		 

		 	$(".room_details").hide();
           if(value != '')  
           {  
                $.ajax({  
                     url:"functions/selectroom_ajax.php",  
                     method:"post", 
					 data:({arrival:arrival,departure:departure,adult:adult,child:child}),  
                     dataType:"text",  
                     success:function(data) 
                     {  
                          $('#rm-search-detail').html(data).hide().fadeIn(1000);;  
                     }  
                });  
           }  
           else  
           {  
                $('#rm-search-detail').html('');                 
           }  
      });  
	
    
    
    $(document).on("click",".sr-button",function(){
        
        window.select_num = $(".rooms-count").val(); 
 
         var name = $(this).closest(".bb").find(".rm_name").val() ;
        var bed = $(this).closest(".bb").find(".rm_bed").val() ;
		var id =  $(this).closest(".bb").find(".rm_id").val() ;
        var view =  $(this).closest(".bb").find(".view").val() ;
        	
        
        if(name != '' && bed != '')  
           {  
                $.ajax({  
                     url:"functions/selected-rooms_ajax.php",  
                     method:"post", 
					 data:({name:name,bed:bed,count:window.count,rmid:id,view:view,number:window.select_num}),  
                     dataType:"text",  
                     success:function(data)
                     {  
                          if(window.select_num <= 1){
                            $("#selected-room").empty();
                                }
						  
						 
                         $(".select_room_header").removeClass("hidden");
                          $('#selected-room').append(data); 
						 
						 
                         
                         
                     }  
                }); 
              
			  
			   	if( window.count == window.select_num){	
				//	window.location = "payment.php" ;
					setTimeout( function () { 
						$('#sr_form').submit();
						}, 300);
					
					}
				
                window.count++
	
           }  
           else  
           {  
                $('#selected-room').html(''); 
               
           } 

      });

	
	/* termes and condition  */
	
	
	$('#terms').change(function(){
    $('#payment_btn').prop('disabled', !this.checked);
			});
	
	
	/* Loading gif */
	
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	
	/* Contact us */
	
	$("#contact_form").submit(function(){
		
		 $.ajax({  
                     url:$(this).attr('action'),  
                     method:"post", 
					 data:$('#contact_form').serialize(),                      
                     success:function(data)
                     {  
                         $("#contact-modal").modal("show");
						 
                     }  
			 
                }); 
		
		return false;
	});

	
	/* amenities */

	
	$('.amenities').hover(function(){        
		$(this).addClass('amenities-shadow');
		$(this).animate({ height:'+310px', width:'+310px' });	
	}, function(){
    	$(this).removeClass('amenities-shadow');
   		$(this).animate({ height:'+300px', width:'+300px' });
	});
	
	
	
	$(".amenities").on('click', function(){ 	
		
		
		var id = $(this).find(".amenities_id").val();
		
   		
		 $.ajax({  
                     url:"functions/amenities_ajax.php",  
                     method:"post", 
					 data:({id:id}),   
			 	     dataType:"text",	
                     success:function(data)
                     {  
			 			$('#amanities-modal').append(data); 
                        $('#amenities'+id+'').modal("show");
						 
                     }  
			 
                }); 
		
		
		
	});
	
	
	
	
	
	
	
	/* about us slider */
	
	var jssor_1_options = {
              $AutoPlay: true,
              $Idle: 2000,
              $CaptionSliderOptions: {
             	 $Class: $JssorCaptionSlideo$,
                $Transitions: {$Duration:1200,$Opacity:2},
                $Breaks: [
                  [{d:2000,b:1000}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
	
	
	
	
	
	
	

});

