function validateGender()
{
	var gender = document.forms["genderForm"]["gender"].value;
	if (gender==" ") 
	{
		alert("At least one of them has to be selected");
		return false;
	}
	else
	{ 
		return true;
	}
}