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
    
    //session ends
 ?>
<!DOCTYPE html>
<html>

<head>
    <title>Logged in Dashboard</title>
</head>

<body>
    <table width="1000px" border="1" cellpadding="0" cellspacing="0" align="center">
        <tr height = "50px">
            <td colspan="2" align="right">
                <span">Logout is as <a href="dashboard.php"><?php echo $_SESSION['uname'] ?></a></span>
                <a href="login.php">Logout</a>
            </td>
        </tr>
        <tr height = "120px">
            <td width="250px" style="padding: 0px 10px">
                <strong><p style="border-bottom: 1px solid black; padding: 10px 0">Account</p></strong>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profile.php">Veiw Profile</a></li>
                    <li><a href="edit profile.php">Edit Profile</a></li>
                    <li><a href="picture.php">Change Profile picture</a></li>
                    <li><a href="change_password.php">Change Password</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
                <td style="padding-left: 10px">Welcome  <?php echo $_SESSION['name']; ?> </td>
 
        <tr height = "30px">
        	<td colspan="2" align="center">Copyright@ 2017</td>
        </tr>
    </table>
</body>

</html>