function validation()
{  

 function validateName()
    {
         var name=document.Forms["name"].value;

           if (name == "")
             {  
                alert("**Name Required**");
                return false;
             }
          else if((name.charAt(0) <= 'A' || name.charAt(0)>='Z') && (name.charAt(0) <='a'|| name.charAt(0)>='z'))
	        {
		         alert("**Name must start with a letter**");
		         return false;
	        }
	      else if(name.split("").length < 2)
	        {
		         alert("**Name must contain at least two words**");
		         return false;
	        }
	      else
	        { 
		        return true;
	        }

    }
    function validateEmail()
    {
	     var email = document.forms["email"].value;
	     if (email==" ") 
	        {
	          	alert("Email Required");
		        return false;
	        }
	     if ((email.indexOf("@")=<0) || (email.indexOf(".com")=<0)) 
	        {
		        alert("Email invalid");
		        return false;
	        }
	     else
	        { 
		        return true;
	        }

    }
    function validateGender()
    {
	     var gender = document.forms["gender"].value;
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
}