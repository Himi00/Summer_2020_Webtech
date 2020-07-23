<html>
<head>
	<title></title>
</head>
<body>
     <h4>degree</h4>
   <form>

   <input type="checkbox" name="degree" value="" > SSC          
   <input type="checkbox" name="degree" value="" > HSC        
   <input type="checkbox" name="degree" value="" > BSc        
   <input type="checkbox" name="degree" value="" > MSc     <br>

   <input type="submit" name="submit" value="Submit">  
<?php

$degree="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
      if (empty($_POST["degree"])) 
      {
            echo "degree is required";
      }
       else
       {
            echo $degree;
       }

}



?>

   </form>

</body>
</html>