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
    }
    else
    {
        header("Location:Login.php");
    }
    //session ends
    $sessuname = $_SESSION['uname'];
    $sql = "SELECT * FROM registration WHERE uname = '$sessuname'";
    $dbdata = getdata($sql);
    foreach ($dbdata as $key => $value) {
        $name = $value['name'];
        $email = $value['email'];
        $gender = $value['gender'];
        $dob = $value['dob'];
    }
 ?>
<!DOCTYPE html>
<html>

<head>
    <title>Veiw profile</title>
</head>

<body>
    <table width="1000px" border="1" cellpadding="0" cellspacing="0" align="center">
        <tr height="70px">
            <td colspan="2" align="right">
                <span">Logout is as <a href="dashboard.php"><?php echo $_SESSION['uname'] ?></a></span>
                <a href="login.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td width="250px" style="padding: 0px 10px" align="top">
                <strong>
                    <p style="border-bottom: 1px solid black; padding: 10px 0">Account</p>
                </strong>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profile.php">Veiw Profile</a></li>
                    <li><a href="edit profile.php">Edit Profile</a></li>
                    <li><a href="picture.php">Change Profile picture</a></li>
                    <li><a href="change_password.php">Change Password</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </td>
            <td align="left" style="padding: 10px">
                <fieldset style="width: 720px;">
                    <legend>Profile</legend>
                    <table>
                        <tr>
                            <td style="width: 500px">
                                <p>Name : <?php echo $name; ?></p>
                                <p>Email : <?php echo $email; ?></p>
                                <p>Gender : <?php echo $gender; ?></p>
                            </td>
                            <td align="center">
                                <img width="100px" src="pc.jpg">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Date of Birth : <?php echo $dob ?></p>
                            </td>
                            <td align="center">
                                <a href="picture.php">change</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="edit profile.php">Edit Profile</a></td>
                        </tr>
                    </table>
                </fieldset>
            </td>
        </tr>
        <tr height="30px">
            <td colspan="2" align="center">Copyright@ 2017</td>
        </tr>
    </table>
</body>

</html>