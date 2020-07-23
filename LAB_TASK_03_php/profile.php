<html>
<head>
	<title></title>
</head>
<body>
     <h4>blood group</h4>
   <form>
   
 <td>Photo</td>            
          <td><input type="file" name=""> <br><br></td>           
          <td></td>         
        </tr>         
        <tr height="50px">          
          <td colspan="3" align="center"> </td>         
        </tr>         
        <tr height="50px">          
          <td colspan="3" align="right">
            <input type="Submit" name="" value="Submit">        
            <input type="Reset" name="" value="Reset">
             </td>         
        </tr> 
<?php

$profile="";
$Photo="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
      if (empty($_POST["photo"])) 
      {
            echo "photo required ";
      }
       else
       {
            echo $blood;
       }

}



?>

   </form>

</body>
</html>