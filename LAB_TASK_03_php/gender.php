<html>
<head>
	<title>GENDER</title>
</head>
<body>
     
   <form>

    Gender: <br>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  
  <br><br>
  <input type="submit" name="submit" value="Submit">  
<?php
$gender="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
      if (empty($_POST["gender"])) 
      {
            echo "Gender is required";
      }
       else
       {
            echo $gender;
       }

}
?>

   </form>

</body>
</html>