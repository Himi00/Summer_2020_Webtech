<?php 
    require_once 'dbconnect.php';
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
    //session ends
    if (isset($_POST['update'])) {
        $pass = $_POST['pass'];
        $newpass = $_POST['newpass'];
        $repass = $_POST['repass'];
        if (empty($pass) || empty($newpass) || empty($repass)) {
           $mess = "Fill the blanks";
        }else{
            $sqll = "SELECT password FROM registration WHERE uname = '$sess'";
            $dbpass = getdata($sqll);
            foreach ($dbpass as $key => $value) {
              $oldpass = $value['password'];
            if ($pass == $oldpass) {
                if ($newpass == $repass) {
                    $spass="UPDATE `registration` SET `password`='$newpass' WHERE `uname` = '$sess'";
                    execute($spass);
                    header("Location:login.php");
                }else{
                    $mess = "password doesn't match";
                }
            }else{
                $mess = "password incorrect";
            }
            }
        }
    }
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
        <h2 style="color:red"><?php if (isset($mess)) {
                 echo $mess;
            } ?></h2>
        <input type="submit" value="Update" name="update">
    </form>
</fieldset>
</body>
</html>