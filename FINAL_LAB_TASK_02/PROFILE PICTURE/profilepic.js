function validateProfilepic()
{
	var name = document.forms["profileForm"]["name"].value;
	var picture = document.forms["profileForm"]["photo"].value;
	
	if(name== "") 
	{
		alert("Name Required");
		return false;
	}
	else if(picture== "")
	{
		alert("Picture Required");
	}
	else
	{ 
		return true;
	}
}