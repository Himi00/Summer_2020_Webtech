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
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        if (empty($name) || empty($email) || empty($gender)  || empty($dob)) {
            $mess = "Required All Field";
        }else{
            $sql = "UPDATE `registration` SET `name`='$name',`email`= '$email',`gender`='$gender',`dob`='$dob' WHERE `uname` = '$sessuname'";
            execute($sql);
            header("location:profile.php");
        }
    }
 ?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit profile</title>
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }

        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }

        strong {
            color: red;
        }
    </style>
</head>

<body>
    <table width="1000px" border="1" cellpadding="0" cellspacing="0" align="center">
        <tr height="50px">
            <td colspan="2" align="right">
                <p style="display: inline-block;">Logged in as <?php echo $sessuname; ?> | </p>
                <a href="login.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td width="150px" style="padding: 0px 10px" align="top">
                <b>
                    <p style="border-bottom: 1px solid black; padding: 10px 0">Account</p>
                </b>
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
                <fieldset>
                    <legend>EDIT PROFILE</legend>
                    <table>
                        <tr>
                            <td>
                                <form method="post" action="">
                                    <br />
                                    <table width="100%" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>Name</td>
                                            <td>:</td>
                                            <td><input name="name" type="text" value="<?php echo $name; ?>"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <hr />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>
                                                <input name="email" type="text" value="<?php echo $email; ?>">
                                                <abbr title="hint: sample@example.com"><b>i</b></abbr>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <hr />
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td colspan="3">
                                                <fieldset>
                                                    <legend>Gender</legend>
                                                    <input id="male" type="radio" name="gender" value="Male"<?php if($gender=="Male") echo"checked"; ?> >Male
                                                    <input id="female" type="radio" name="gender" value="Female"<?php if($gender=="Female") echo"checked"; ?> >Female
                                                    <input id="other" type="radio" name="gender" value="Other"<?php if($gender=="Other") echo"checked"; ?> >Other
                                                </fieldset>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <hr />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <fieldset>
                                                    <legend>Date of Birth</legend>
                                                    <input type="text" name="dob" value="<?php echo $dob;?>" size="10px"><strong style="color: black"> </strong>
                                                    <font size="2"><i>(dd/mm/yyyy)</i></font>
                                                </fieldset>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    <hr />
                                    <br/>
                                    <input name="update" type="submit" value="Update">
                                </form>
                            </td>
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