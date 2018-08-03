//document.getElementById("loginBox").style.display = "none";
function logClick()
{
	location.href='index.php?mode=login';

}
window.onload = function(){
	var loginBtn = document.getElementById("loginBtn");
	var regLink = document.getElementById("regLink");
	var loginBox = document.getElementById("loginBox");
	var sub = document.getElementById("sub");

	var formPurpose;
	function showForm(formPurpose)
	{
		sub.style.display = "block";
		loginBtn.style.display = "none";
		regLink.style.display = "none";
	}
}
