<html>
<head>
	<title></title>
</head>
<body>
     <h4>blood group</h4>
   <form>

  <select name="">        
              <option value="">A+</option>        
              <option value="">A-</option>        
              <option value="">B+</option>        
              <option value="">B+</option>        
              <option value="">AB+</option>         
              <option value="">AB+</option>         
              <option value="">O+</option>        
              <option value="">O-</option>      
            </select>   <br>

   <input type="submit" name="submit" value="Submit">  
<?php

$blood="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
      if (empty($_POST["blood"])) 
      {
            echo "blood group must be selected ";
      }
       else
       {
         echo $blood; ?>
       }

}

?>
    </form>

</body>
</html>
