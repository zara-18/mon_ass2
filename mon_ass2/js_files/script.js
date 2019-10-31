$(document).ready(function(){
		
   	
		Usertable();

		$(document).on('click', '#addstdnt', function(){
			if ($('#firstname').val()=="" || $('#lastname').val()=="" || $('#email').val()=="" || $('#age').val()==""){
				alert('Please input your data');
			}
			else{
			$firstname=$('#firstname').val();
			$lastname=$('#lastname').val();	
			$email=$('#email').val();
			$age=$('#age').val();
				$.ajax({
					type: "POST",
					url: "insert.php",
					data: {
						firstname: $firstname,
						lastname: $lastname,
						email: $email,
						age: $age,
						add: 1,
					},
					success: function(){
						Usertable();
					}
				});
			}
		});
		
		$(document).on('click', '.delete', function(){
			$id=$(this).val();
			
				$.ajax({
					type: "POST",
					url: "del.php",
					data: {
						id: $id,
						del: 1,
					},
					success: function(){
						Usertable();
					}
				});
		});

		
		
 $(document).on('click', '#btn_delete', function(){
   var multi = [];
   $(':checkbox:checked').each(function(i){
   multi[i] = $(this).val();
   });
   console.log(multi);
   if(multi.length === 0) 
   {
    alert("Please Select atleast one checkbox");
   }
   else{
    $.ajax({
	
					type: "POST",
					url: "multi_del.php",
					data: {
						multi : multi,
						del: 1,
					},
				
					success: function(){
						Usertable();
					
					}
					
					
				});
			}
		});
		
		
		 
      $(document).on('click', '.column_sort', function(){  
           var getSortHeading = $(this);
			var getNextSortOrder = getSortHeading.attr('id');
			
			var splitID = getNextSortOrder.split('-');
			
			var splitIDName = splitID[0];
			var splitOrder = splitID[1];
			
			
			var getColumnName = getSortHeading.text();
           $.ajax({  
                  
                type:"POST", 
				url: "sort.php",
                data:{'column':getColumnName,'sortOrder':splitOrder},
						
                success: function(response){
					if(splitOrder == 'asc')
					{
						getSortHeading.attr('id',splitIDName+'-desc');
					}
					else
					{
						getSortHeading.attr('id',splitIDName+'-asc');
					}	
						$("#valuestable tr:not(:first)").remove();
 
						$("#valuestable").append(response);
						
					}  
				
           });
    });  
 });  
	
	
	function Usertable(){
		$.ajax({
			url: 'table.php',
			type: 'POST',
			data:{
				show: 1
			},
			success: function(response){
				$('#valuestable').html(response);
			}
		});
	}