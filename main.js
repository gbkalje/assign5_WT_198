let base_url = "handler.php";



// When the user clicks anywhere outside of the modal, close it



var data = document.getElementById("data");


function getthedata(){
	//var k = JSON.stringify(k);
	let url = base_url + "?req=insert&object="; 
	$.get(url,function(data,success){
		if(data=="Form successfully submitted"){
			alert(data);
		}
		else{
			alert(data);
		}
		
	});
}

function showdata(){
	let url = base_url + "?req=list";
	$.get(url,function(data,success){
		if(data.length == 0){
			document.getElementById("data").innerHTML="<h3><div class='container text-center'>None registered till now. Be the first one to register.</div></h3>";
		}
		else{
			var text;
			text= "<table class='table table-striped mt-5 co'><thead class='thread-dark'>";
			text=text + "<tr><th scope='col'>Name</th><th scope='col'>Email</th><th scope='col'>Password</th><th scope='col'>Age</th><th scope='col'>Address</th><th scope='col'>state</th><th scope='col'>City</th><th scope='col'>Mobile</th></tr></thead>";
			for(i=0;i<data.length;i++)
			{
				text= text + "<tr><td>" + data[i].name+" "+data[i].email + "</td><td>" + data[i].age + "</td><td>" + data[i].state + "</td><td>" + data[i].city + "</td><td>" + data[i].mobile + "</td></tr>";
			}
			text += "<tbody class='values'></tbody></table>";
			document.getElementById("data").innerHTML=text;         
			}   
	});
}