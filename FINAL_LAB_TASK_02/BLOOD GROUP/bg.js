function validateBG()
{
	var bg = document.forms["bgForm"]["bg"].value;
	
	if(bg == "") 
	{
		alert("At least one of them has to be selected");
		return false;
	}
	else
	{ 
		return true;
	}
}