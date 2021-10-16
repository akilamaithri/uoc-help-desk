$(document).ready(function() {
	
	$("#signup").click(function() {
		$("#first").slideUp("slow", function(){
			$("#second").slideDown("slow");
		});
	});

	$("#signin").click(function() {
		$("#second").slideUp("slow", function(){
			$("#first").slideDown("slow");
		});
	});


});


function openForm() {
  document.getElementById("complainBox").style.display = "block"; 
}

function closeForm() {
  document.getElementById("complainBox").style.display = "none";
}

/*.................. Inquiries ..................*/

function openinq(evt, InqName) {
	// Declare all variables
	var i, inquirycontent, inquirylink;
  
	// Get all elements with class="inquirycontent" and hide them
	inquirycontent = document.getElementsByClassName("inquirycontent");
	for (i = 0; i < inquirycontent.length; i++) {
		inquirycontent[i].style.display = "none";
	}
  
	// Get all elements with class="inquirylink" and remove the class "active"
	inquirylink = document.getElementsByClassName("inquirylink");
	for (i = 0; i < inquirylink.length; i++) {
		inquirylink[i].className = inquirylink[i].className.replace(" active", "");
	}
  
	document.getElementById(InqName).style.display = "block";
	evt.currentTarget.className += " active";
  }

  

