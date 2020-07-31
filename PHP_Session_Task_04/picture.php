<!DOCTYPE html>
<html>

<head>
    <title>Profile Picture</title>
    <style>

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }

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
                
                <a href="logout.php">Logout</a>
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
                    <legend>PROFILE PICTURE</legend>
                    <table>
                        <tr>
                            <td>
                         
                                    <br />
                                    <table cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td colspan="4">
                                                <img width="80px" src="pc.jpg">
                                                <input type="file" name="photo"><br>
                                            </td>
                                        </tr>
                                    </table>
                                    <hr />
                               

                                    <input name="submit" type="submit" value="Submit">
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