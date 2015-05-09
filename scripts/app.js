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
		    },error: function(data) { 
		        console.log(data);
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

	$('#begHouAppBtn').click(function(){
		var funct = "BEGININGHOUSINGAPPLICATION";
		var major = $("#major").val();
		var class_status = $("#class_status").val();
		var name = $("#name").val();
		var RAM_ID = $("#RAM_ID").val();
		var address_street = $("#address_street").val();
		var cell_phone = $("#cell_phone").val();
		var address_state = $("#address_state").val();
		var home_phone = $("#home_phone").val();
		var birthdate = $("#birthdate").val();
		var gender = $("input[type='radio'][name='gender']:checked").val();
		var email = $("#email").val();
		var age = $("#age").val();
		var password = $("#password").val();
		var confirmPass = $("#confirmPass").val();
		var securityQuestionID = $("#secQuest").val();
		var securityQuestionAnswer = $("#secQueAns").val();
		console.log(funct);
		$.ajax({
		    type: "POST",
		    dataType: "json",
		    url: "functions.php",
		    data: { funct: funct, major: major, class_status: class_status, name: name,
		    RAM_ID: RAM_ID, address_street: address_street, cell_phone: cell_phone, 
		    address_state: address_state, home_phone: home_phone, birthdate: birthdate, 
		    gender: gender, email: email, age: age, password: password, securityQuestionID: securityQuestionID, securityQuestionAnswer: securityQuestionAnswer },
		    success: function(data) {
		      console.log(data);
		    },error: function(data) { 
		        console.log(data);
		    }
		 });
		return false;
	})

	$('#rooSelForBtn').click(function(){
		alert( "Success" );
		var funct = "ROOMSELECTIONFORM";
		var isproxyoption = "0";
		if ($("input[type='checkbox'][name='isproxyoption']").is(":checked")){
			isproxyoption = "1";
		}
		var proxysignature = $("#proxysignature").val();
		var proxysignaturedate = $("#proxysignaturedate").val();
		var roomrep = $("#roomrep").val();
		var preferencei = $("#preferencei").val();
		var rommatei = $("#rommatei").val();
		var suite = $("#suite").val();
		var grouprepname = $("#grouprepname").val();
		var room1 = $("#room1").val();
		var name1 = $("#name1").val();
		var signature1 = $("#signature1").val();
		var room2 = $("#room2").val();
		var name2 = $("#name2").val();
		var signature2 = $("#signature2").val();
		var room3 = $("#room3").val();
		var name3 = $("#name3").val();
		var signature3 = $("#signature3").val();
		var room4 = $("#room4").val();
		var name4 = $("#name4").val();
		var signature4 = $("#signature4").val();
		var room5 = $("#room5").val();
		var name5 = $("#name5").val();
		var signature5 = $("#signature5").val();
		var room6 = $("#room6").val();
		var name6 = $("#name6").val();
		var signature6 = $("#signature6").val();
		console.log(funct);
		$.ajax({
		    type: "POST",
		    dataType: "json",
		    url: "functions.php",
		    data: { funct: funct, isproxyoption: isproxyoption, proxysignature: proxysignature, 
		    proxysignaturedate: proxysignaturedate, roomrep: roomrep, preferencei: preferencei,
		    rommatei: rommatei, suite: suite, grouprepname: grouprepname, room1: room1,
		    name1: name1, signature1: signature1, room2: room2, name2: name2, signature2: signature2,
			room3: room3, name3: name3, signature3: signature3, room3: room3, name3: name3,
			signature3: signature3, room4: room4, name4: name4, signature4: signature4,
			room5: room5, name5: name5, signature5: signature5,
			room6: room6, name6: name6, signature6: signature6 },
		    success: function(data) {
		      console.log(data);
		    },error: function(data) { 
		        console.log(data);
		    }
		  });
		  return false;
	})

	$('#buildingSelect').change(function(){
		var buildingID = $("#buildingSelect").val();
		var funct = "RETRIEVEFLOORS";
		if(buildingID != "-1"){
			$.ajax({
		    type: "POST",
		    dataType: "json",
		    url: "functions.php",
		    data: { funct: funct, buildingID: buildingID },
		    success: function(data) {
		      $('#floorSelect').prop('disabled', false);
		      $('#suiteSelect').prop('disabled', true);
		      $('#roomSelect').prop('disabled', true);
		      var numberOfRooms = data["numberOfRooms"];
		      $('#floorSelect').empty();
		      $('#floorSelect').append('<option value="-1">---SELECT---</option>');
		      for(var i = 1; i <= numberOfRooms; i++){
		      	$('#floorSelect').append('<option value="'+i+'">'+i+'</option>');
		      }
		    },error: function(data) { 
		        console.log(data);
		    }
		  });
		  return false;
		}
	})

	$('#floorSelect').change(function(){
		var buildingID = $("#buildingSelect").val();
		var floorNumber = $("#floorSelect").val();
		var funct = "RETRIEVESUITES";
		if(floorNumber != "-1"){
			$.ajax({
		    type: "POST",
		    dataType: "json",
		    url: "functions.php",
		    data: { funct: funct, buildingID: buildingID, floorNumber: floorNumber },
		    success: function(data) {
		      $('#suiteSelect').prop('disabled', false);
		      $('#roomSelect').prop('disabled', true);
		      if(data.length > 0){
		      	$('#suiteSelect').empty();
		      	$('#suiteSelect').append('<option value="-1">---SELECT---</option>');
		      	$.each(data.suites, function(key,val){
			        $('#suiteSelect').append('<option value="'+key+'">'+val+'</option>');
			    });
		      }
		    },error: function(data) { 
		        console.log(data);
		    }
		  });
		  return false;
		}
	})

	$('#suiteSelect').change(function(){
		var buildingID = $("#buildingSelect").val();
		var floorNumber = $("#floorSelect").val();
		var suiteType = $("#suiteSelect").val();
		var funct = "RETRIEVEROOMS";
		if(suiteType != "-1"){
			$.ajax({
		    type: "POST",
		    dataType: "json",
		    url: "functions.php",
		    data: { funct: funct, buildingID: buildingID, floorNumber: floorNumber, suiteType: suiteType },
		    success: function(data) {
		      console.log(data);
		      $('#roomSelect').prop('disabled', false);
		      if(data.length > 0){
		      	$('#roomSelect').empty();
		      	$('#roomSelect').append('<option value="-1">---SELECT---</option>');
		      	$.each(data.rooms, function(key,val){
			        $('#roomSelect').append('<option value="'+key+'">'+val+'</option>');
			    });
		      }
		    },error: function(data) { 
		        console.log(data);
		    }
		  });
		  return false;
		}
	})
	$('#roomSelect').change(function(){
		var buildingID = $("#buildingSelect").val();
		var floorNumber = $("#floorSelect").val();
		var suiteType = $("#suiteSelect").val();
		var roomNumber = $('#roomSelect').val();

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