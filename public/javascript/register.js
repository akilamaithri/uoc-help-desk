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


/*.................. Complain ..................*/

function openForm() {
  document.getElementById("comp_container").style.display = "block"; 
}

function closeForm() {
  document.getElementById("comp_container").style.display = "none";
}

//------------------------ Ask friend-----------------

function askFriend() {
  document.getElementById("ask_friend").style.display = "block"; 
}

function closeFriend() {
  document.getElementById("ask_friend").style.display = "none";
}

//------------------------ Forward Complain-----------------

function forwardTo() {
  document.getElementById("forwardTo").style.display = "block"; 
}

function closeFriend() {
  document.getElementById("forwardTo").style.display = "none";
}


/*.................. Inquiries ..................*/
function openinq(evt, InqName) 
{
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

	document.getElementById("defaultOpen").click();


//---------------Animate Count-------------------

function animateValue(obj, start, end, duration) 
{
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) 
	{
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

