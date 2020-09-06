function validateName()
    {
        var name = document.getElementById("name").value;


           if (name =="")
             {  
            document.getElementById("nameErr").innerHTML="field can't be empty";
               // return false;
             }
           if (name ==" ")
             {  
            document.getElementById("nameErr").innerHTML="";
               // return false;
             }          

    }

function validatePass()
    {
	     var Password = document.getElementById("Password").value;

	     if (Password =="")
	     {
	     	document.getElementById("passErr").innerHTML="field can not be empty";

	     }
	     else if (Password =" " )
	     {
	     	document.getElementById("passErr").innerHTML="";

	     }
    }        

function validation()
{
      var name = document.getElementById("name").value;
      var Password = document.getElementById("Password").value;

	  
    if( name=="" || Password=="" )
    {

     alert("please Fill up the form ");
    }
    else 
	{
      	return true;

	}

}    