  
$(window).load(function()  {
	

 
    $('#customer_table').DataTable();	
	$('#inventory_table').DataTable();
    $('#reservation_table').DataTable();

	
	
	$(".edit-reservation").on('click',function(){
		
		var id = $(this).data("reservation");
		
		
		$.ajax({  
                     url:"AdminPanel/functions/reservation_ajax.php",  
                     method:"post", 					
					 data: ({id:id}),  
					  success:function(data)
                     {  
                      
						var info = JSON.parse(data);
						
						  $("#res-id").val(info[0]);
						  $("#res-arrival").val(info[1]);
						  $("#res-departure").val(info[2]);
						  $("#res-adults").val(info[3]);
						  $("#res-child").val(info[4]);
						 if(info[5] == 'confirm'){
							 $("#res-status").val("confrm");
						 }
						 else if(info[5] == 'pending'){
							 $("#res-status").val("pending");
						 }
						  else if(info[5] == 'cleared'){
							 $("#res-status").val("cleared");
						 }
						  						 
						 $("#reservation-modal").modal("show") ;
						 
                     }  
			 
                }); 
			
		
	});
	
	
//	update reservation
	
	$("#update-reservation").on('click',function(){

	    
		$.ajax({  
                     url:"AdminPanel/functions/reservation_ajax_update.php",  
                     method:"post", 					
					 data: $('#edit-reservation').serialize(),  
					  success:function(data)
                     {  
                      
					 $('#customer_table').datatable().fnDestroy();					
					 $('#customer_table').DataTable();
					 }
			 
                }); 
			
		
	});
	
	
	
	
});
