

function validateName()
{
   var name=document.nameForm.Name.value;

   if (name=empty)
   {  
      document.getElementById("error").innerHTML="**Name can not be empty**";
      return false;
   }
else {return true;}





}