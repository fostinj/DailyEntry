<?php
include 'db_connect.php';
if(isset($_POST["register"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $password=$_POST["password"];
    $sql="insert into `register`(`name`,`email`,`mobile`,`password`)values('$name','$email','$mobile','$password')";
    $result=mysqli_query($db,$sql);
}
?>
<DOCTYPE!>
    <html>
    <head>
        <title>Registration</title>
    </head>
        <body>
            <h1>Registration</h1>
        <form action="#" method="post">
            <table>
            <tr>
                <td>
                    Name:</td>
                <td>
                    <input type="name" name="name" placeholder="Name" required>
                </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                    <input type="email" name="email" placeholder="Email" required>
                    </td>
                </tr>
                <tr>
                <td>
                    Mobile:</td>
                    <td>
                    <input type="mobile" name="mobile" placeholder="Mobile Number" required>
                    </td>
                </tr>
                <tr>
                <td>
                    Password:</td>
                    <td>
                    <input type="password" name="password" placeholder="password" required>
                    </td>
                </tr>
                <td></td>
                <td>
                    <input type="submit" name="register" value="Register">
                    <input type="submit" name="cancel" value="Cancel">
                </td>
                <tr><td><a href="login.php">Already registered!</a></td></tr>
            </table>
            </form>
        </body>
    </html>