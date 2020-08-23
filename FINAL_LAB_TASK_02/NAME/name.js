

function validateName()
{
   var name=document.Forms["nameForm"]["Name"].value;

   if (name == "")
   {  
      alert("**Name Required**");
      return false;
   }
   else if((name.charAt(0)<='A' || name.charAt(0)>='Z') && (name.charAt(0) <='a'|| name.charAt(0)>='z'))
	{
		alert("**Name must start with a letter**");
		return false;
	}
	else if(name.split("").length<2)
	{
		alert("**Name must contain at least two words**");
		return false;
	}
	else
	{ 
		return true;
	}

}