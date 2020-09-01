
function validateName()
    {
        var name = document.getElementById("name").value;


           if (name == "")
             {  
            document.getElementById("nameErr").innerHTML="field can't be empty";
               // return false;
             }
           if((name.charAt(0) <= 'A' || name.charAt(0)>='Z') && (name.charAt(0) <='a'|| name.charAt(0)>='z'))
	        {
            document.getElementById("nameErr").innerHTML="Name should have alphabests only";
		         //return false;
	        }
	       if(name.split("").length <= 2)
	        {
            document.getElementById("nameErr").innerHTML="Name can not have only 2 letters in it ";
		         //return false;
	        }
	      if(name.split("").length>2)
	      {
	      	document.getElementById("nameErr").innerHTML="";

	      }

    }
function validateEmail()
    {
	     var email = document.getElementById("email").value;
	     if (email=="") 
	        {
	        	console.log("field can't be empty");
            document.getElementById("emailErr").innerHTML="field can not be empty";
		    }

	     if ((email.indexOf("@")<=0) || (email.indexOf(".com")<=0)) 
	        {
	        	console.log("Invalid email Example: something@some.com");
            document.getElementById("emailErr").innerHTML="Invalid email Example: something@some.com";
		    }
        if ((email.indexOf("@")>0) || (email.indexOf(".com")>0)) 
	        {
            document.getElementById("emailErr").innerHTML="";
		    }	     

    }
function validateGender()
    {
	      var gender = document.getElementById("gender").value;
	      if (gender=="") 
	         {
            document.getElementById("genderErr").innerHTML="you must select gender";
	         }
	      if (gender==" ") 
	         {
            document.getElementById("genderErr").innerHTML="";
	         }	         
	      
     }

function validateDOB()
   {
	var date = document.getElementById("dob").value;
	
	if (date=="") 
	{
        document.getElementById("dobErr").innerHTML="you must select Date of Birth";
	}
	
	

    }
function validateBG()
{
   var bg = document.getElementById("bg").value;	
	if(	 bg = document.getElementById("bg").selectedIndex == 0
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
	}
	
}

function validateProfilepic()
{
   var photo = document.getElementById("photo").value;	
	

	 if(photo== "")
	{
        document.getElementById("photoErr").innerHTML="you must select photo";
	}
	
}

function login()
{
	 var register = document.getElementById("register").value;
	 var login = document.getElementById("login").value;

	 if (register == " ")
             {  
            document.getElementById("login").innerHTML="";
               // return false;
             }






}     

function validation()
{
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
	  var gender = document.getElementById("gender").value;
	  var date = document.getElementById("dob").value;
	  var bg = document.getElementById("bg").value;
	  var degree = document.getElementById("degree").value;
      var photo = document.getElementById("photo").value;


  if( name==""|| email=="" || gender=="" || date=="" || bg=="" || degree=="" || photo=="")
    {

     alert("please Fill up the form ");
    }

    else 
	{
      	return true;

	}
}
