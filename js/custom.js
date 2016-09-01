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
	var num = 0;
	$(".aa").remove();
	
	
	
	var redda =  '<div class="aa"><div class="col-md-4 "><br><div class="center">Room 1<br></div></div>' ;
		redda +=	'<div class="col-md-4 col-xm-12">Adults';
		redda +=  '<select id="3" name="adult"  class="soflow search-room" value="<?php echo $_SESSION["adult"] ?>">';	
	//	redda +=	'<option value="" selected><?php echo $_SESSION["'+adult+'"] ?></option>';
         redda +=           '<option value="1">1</option>';
         redda +=           '<option value="2">2</option>';
         redda +=          '<option value="3">3</option></select></div>';
				
		redda +=     '<div class="col-md-4 col-xm-12" >Children<select id="4" name="child" class="soflow search-room">';
	//	redda +=			'<option value="<?php echo $_SESSION["'+child+'"] ?>" selected><?php echo $_SESSION["'+child+'"] ?></option>' ;
		redda +=			'<option value="0">0</option>' ;
         redda +=           '<option value="1">1</option>' ;
        redda +=            '<option value="2">2</option>' ;
        redda +=            '<option value="3">3</option></select></div></div>' ;
	
	
	
	
	
	
	while( num < val-1 ){
		var div = '<div class="row"><div class="col-md-4 aa"><br><span>Room ' +  (num+2)  + ' </span></div><div class="col-md-4 col-xm-12">Adults<br><select name="adult"  class="soflow"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></div><div class="col-md-4 col-xm-12">Children<br><select name="child" class="soflow"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></div></div>';
				$(".room-count-list").append(redda);
				num++;
	} 
	
});	
	

	/* rm search ajax */
	
	 $(".search-room").on("change" ,function(){  
		 var arrival = $("#1").val();
		var departure = $("#2").val();
		 var adult = $("#3").val();
		 var child = $("#4").val();
		 
		 var did = $(this).attr("id");
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
        
   
        
        if(name != '' && bed != '')  
           {  
                $.ajax({  
                     url:"functions/selected-rooms_ajax.php",  
                     method:"post", 
					 data:({name:name,bed:bed,count:window.count}),  
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
					window.location = "payment.php" ;}
				
                window.count++
	
           }  
           else  
           {  
                $('#selected-room').html(''); 
               
           } 

      });

});


