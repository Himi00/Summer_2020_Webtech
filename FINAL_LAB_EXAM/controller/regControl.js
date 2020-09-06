function validateName()
    {
        var name = document.getElementById("name").value;


           if (name =="")
             {  
            document.getElementById("nameErr").innerHTML="field can't be empty";
               // return false;
             }
           else if((name.charAt(0) <= 'A' || name.charAt(0)>='Z') && (name.charAt(0) <='a'|| name.charAt(0)>='z'))
	        {
            document.getElementById("nameErr").innerHTML="Name should have alphabests only";
		         //return false;
	        }
	       else if(name.split("").length <= 2)
	        {
            document.getElementById("nameErr").innerHTML="Name can not have only 2 letters in it ";
		         //return false;
	        }
	      else if(name.split("").length>2)
	      {
	      	document.getElementById("nameErr").innerHTML="";

	      }

    }

function validateNumber()
    {
	     var number = document.getElementById("number").value;
	     if (number=="") 
	        {
	        	//console.log("field can't be empty");
            document.getElementById("numErr").innerHTML="field can not be empty";
		    }

	     else if (number<11)  
	        {
	        	
            document.getElementById("numErr").innerHTML="Invalid number";
		    }
        else if (number=11)  
	        {
	        	
            document.getElementById("numErr").innerHTML="";
		    }     

    }


function validateuID()
   {
	var uid = document.getElementById("uid").value;
	
	if (uid=="") 
	{
        document.getElementById("uidErr").innerHTML="Enter an ID";
	}
   }	    

function validatePass()
    {
	     var Password = document.getElementById("Password").value;
	     var Confirm_Password = document.getElementById("Confirm_Password").value;

	     if (Password != Confirm_Password )
	     {
	     	document.getElementById("passErr").innerHTML="Password does not match";
	     	document.getElementById("passErr1").innerHTML="Password does not match";

	     }
	     else if (Password = Confirm_Password )
	     {
	     	document.getElementById("passErr").innerHTML="";
	     	document.getElementById("passErr1").innerHTML="";

	     }
    }    


function validation()
{
      var name = document.getElementById("name").value;
	  var number = document.getElementById("number").value;
	  var uid = document.getElementById("uid").value;
      var Password = document.getElementById("Password").value;
	  var Confirm_Password = document.getElementById("Confirm_Password").value;


	  
    if( name==""|| number=="" || uid=="" || Password=="" || Confirm_Password=="" )
    {
      alert("please Fill up the form ");
    }




}

