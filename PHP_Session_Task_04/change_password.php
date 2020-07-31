<?php 
    //session starts
    session_start();
    if (isset($_SESSION['uname'])) {
         if (time()-$_SESSION['last_time']>600) //10 min inactive thakle logout automatic
        {
            session_unset();
            session_destroy();
            header("Location:login.php");
        }
        else
        {
            $_SESSION['last_time']=time();
        }
    }else
    {
        header("Location:Login.php");
    }
    $sess = $_SESSION['uname'];
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
</head>
<body>
    <fieldset>
    <legend><b>CHANGE PASSWORD</b></legend>
    <form method="post">
        <table>
            <tr>
                <td><font size="3">Current Password</font></td>
                <td>:</td>
                <td><input type="password" name="pass"></td>
                <td></td>
            </tr>
            <tr>
                <td><font size="3" color="green">New Password</font></td>
                <td>:</td>
                <td><input type="password" name="newpass"></td>
                <td></td>
            </tr>
            <tr>
                <td><font size="3" color="red">Retype New Password</font></td>
                <td>:</td>
                <td><input type="password" name="repass"></td>
                <td></td>
            </tr>
        </table>
        <hr />
        <input type="submit" value="Update" name="update">
    </form>
</fieldset>
</body>
</html>