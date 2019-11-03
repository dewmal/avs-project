
jQuery(document).ready(function(){
	
	jQuery(document).on("click", ".deleteUser", function(){
		var userId = $(this).data("userid"),
			hitURL = baseURL + "deleteUser",
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to delete this user ?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { userId : userId } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { alert("User successfully deleted"); }
				else if(data.status = false) { alert("User deletion failed"); }
				else { alert("Access denied..!"); }
			});
		}
	});


	//Delete Draft Project
	jQuery(document).on("click", ".deleteDraftProject", function(){
		//console.log('Hello');
		var projectId = $(this).data("projectid"),
			hitURL = baseURL + "deleteDraftProject",
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to delete this draft project ?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { projectId : projectId } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { alert("Project successfully deleted"); }
				
				//else if(data.status = false) { alert("Project deletion failed"); }
				//else { alert("Access denied..!"); }
			});
		}
	});


	// Delete Submitted Project
	jQuery(document).on("click", ".deleteProject", function(){
		var projectId = $(this).data("projectid"),
			hitURL = baseURL + "deleteProject",
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to delete this project ?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { projectId : projectId } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { alert("Project successfully deleted"); }
				
				//else if(data.status = false) { alert("Project deletion failed"); }
				//else { alert("Access denied..!"); }
			});
		}
	});
	
	
	jQuery(document).on("click", ".searchList", function(){
		
	});
	
});
