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