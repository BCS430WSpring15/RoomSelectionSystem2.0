$(function(){ 
	$('#loginBtn').click(function(){
		//alert( "Success" );
		var funct = "VALUSER";
		var username = $("#username").val();
		var password = $("#password").val();
		//alert( funct+"&"+username+"&"+password );
		console.log(username);
		$.ajax({
		    type: "POST",
		    url: "functions.php",
		    data: { funct: funct, username: username, password: password },
		    success: function(data) {
		      alert( data );
		      console.log(data);
		    }
		  });
		  return false;
	})

	$('#houAppBtn').click(function(){
		alert( "Success" );
		
	})
})


/*function myFunction(){
	var posterGender = document.getElementById("username").value;
	alert( posterGender );
}


function myFunction(){
	var posterGender = $('#username').val();
	alert( posterGender );
}*/