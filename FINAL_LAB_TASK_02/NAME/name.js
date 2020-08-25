

function validateName()
{
	var name = document.getElementById("Name").value;

   if (name == "")
   {  
      alert("Please enter name first");
      return false;
   }
   else if((name.charAt(0) <= 'a' || name.charAt(0) >= 'z') && (name.charAt(0) <= 'A' || name.charAt(0) >= 'Z'))
	{
		alert("Name must start with a letter");
		return false;
	}
	else if(name.split(" ").length<2)
	{
		alert("Name must contain at least two words");
		return false;
	}
	else
	{ 
		return true;
	}

}
