function validateDegree()
{
	var degree = document.forms["degreeForm"]["degree"].value;
	if (degree==" ") 
	{
		alert("At least one of them has to be selected");
		return false;
	}
	else
	{ 
		return true;
	}
}