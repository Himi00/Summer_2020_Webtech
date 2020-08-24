function validateEmail()
{
	var email = document.forms["emailForm"]["Email"].value;
	if (email==" ") 
	{
		alert("Email Required");
		return false;
	}
	if ((email.indexOf("@")<0) || (email.indexOf(".com")<0)) 
	{
		alert("Email invalid");
		return false;
	}
	else
	{ 
		return true;
	}
}