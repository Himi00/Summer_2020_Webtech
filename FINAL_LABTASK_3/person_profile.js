
function validateName()
    {
        var name = document.getElementById("name").value;


           if (name == "")
             {  
            document.getElementById("nameErr").innerHTML="field can't be empty";
                return false;
             }
          else if((name.charAt(0) <= 'A' || name.charAt(0)>='Z') && (name.charAt(0) <='a'|| name.charAt(0)>='z'))
	        {
            document.getElementById("nameErr").innerHTML="Name should have alphabests only";
		         return false;
	        }
	      else if(name.split("").length =< 2)
	        {
            document.getElementById("nameErr").innerHTML="Name can not have only 2 letters in it ";
		         return false;
	        }
	      else
	        { 
		        return true;
	        }

    }
function validateEmail()
    {
	     var name = document.getElementById("email").value;
	     if (email=="") 
	        {
            document.getElementById("emailErr").innerHTML="field can't be empty";
		        return false;
	        }
	     if ((email.indexOf("@")=<0) || (email.indexOf(".com")=<0)) 
	        {
            document.getElementById("emailErr").innerHTML="Invalid email Example: something@some.com";
		        return false;
	        }
	     else
	        { 
		        return true;
	        }

    }
function validateGender()
    {
	      var name = document.getElementById("gender").value;
	      if (gender==" ") 
	         {
            document.getElementById("genderErr").innerHTML="you must select gender";
		         return false;
	         }
	      else
	         { 
		         return true;
	         }

     }

function validateDOB()
   {
	var date = document.getElementById("dob").value;
	
	if (date=="") 
	{
        document.getElementById("dobErr").innerHTML="you must select Date of Birth";
		return false;
	}
	
	else
	{ 
		return true;
	}

    }
function validateBG()
{
   var bg = document.getElementById("bg").value;	
	if(	var date = document.getElementById("dob").selectedIndex == 0;
) 
	{
        document.getElementById("bgErr").innerHTML="you must select Blood Group";
	}
	else
	{ 
		return true;
	}
}
function validateDegree()
{
   var degree = document.getElementById("degree").value;	
	if (degree=="") 
	{
		alert("At least one of them has to be selected");
		return false;
	}
	else
	{ 
		return true;
	}
}

function validateProfilepic()
{
   var photo = document.getElementById("photo").value;	
	

	 if(photo== "")
	{
		alert("Picture Required");
	}
	else
	{ 
		return true;
	}
}

function validation()
{

if( validateName()==empty || validateEmail()== empty || validateGender()== empty || validateDOB()==empty 
    || validateBG()==empty || validateDegree()==empty || validateProfilepic()==empty)
    {
     alert("please Fill up the form ");
    }
    else 
	{
      	return true;

	}
}
