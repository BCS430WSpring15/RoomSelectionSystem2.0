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
		    dataType: "json",
		    url: "functions.php",
		    data: { funct: funct, username: username, password: password },
		    success: function(data) {
		      console.log(data);
		    },error: function(XMLHttpRequest, textStatus, errorThrown) { 
		        alert("Status: " + textStatus);
		        alert("Error: " + errorThrown); 
		    }
		  });
		  return false;
	})

	$('#houAppBtn').click(function(){
		alert( "Success" );
		var funct = "HOUSINGAPPLICATION";
		var emergcontact = $("#emergcontact").val();
		var emergcontactphone = $("#emergcontactphone").val();
		var roommatepreference = $("#roommatepreference").val();
		var smoker = $("input[type='radio'][name='smoker']:checked").val();
		var riser = $("input[type='radio'][name='riser']:checked").val();
		var sleep = $("input[type='radio'][name='sleep']:checked").val();
		var quietly = $("input[type='radio'][name='quietly']:checked").val();
		var consider = $("input[type='radio'][name='consider']:checked").val();
		var medicalconcerns = $("#medicalconcerns").val();
		var studentsignature = $("#studentsignature").val();
		var studentsignaturedate = $("#studentsignaturedate").val();
		var releaseinfo = "0";
		if ($("input[type='checkbox'][name='releaseinfo']").is(":checked")){
			releaseinfo = "1";
		}
		var guardiansignature = $("#guardiansignature").val();
		var guardiansignaturedate = $("#guardiansignaturedate").val();
		$.ajax({
		    type: "POST",
		    dataType: "json",
		    url: "functions.php",
		    data: { funct: funct, emergcontact: emergcontact, emergcontactphone: emergcontactphone,
		    roommatepreference: roommatepreference, roommatepreference: roommatepreference,
			smoker: smoker, riser: riser, sleep: sleep, quietly: quietly, consider: consider,
			medicalconcerns: medicalconcerns, studentsignature: studentsignature,
			studentsignaturedate: studentsignaturedate, releaseinfo: releaseinfo,
			guardiansignature: guardiansignature, guardiansignaturedate: guardiansignaturedate},
		    success: function(data) {
		      console.log(data);
		      console.log(data["returnCode"]);
		      console.log(data["message"]);
		    },error: function(data) {
		        console.log(data);
		    }  
		  });
		  return false;
		/*var emergcontact = $("#emergcontact").val();
		var emergcontact = $("#emergcontact").val();
		alert( emergcontact );*/

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