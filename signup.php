<?php
include('db.php');
// session_start();

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
</head>

<body>
    <form action="" method="post">
        <h1>Sign Up Here:</h1>
        <br><br>
        <label>Email</label>
        <br><br>
        <input type="Email" name="uname">
        <br><br>
        <label>Password</label>
        <br><br>
        <input type="password" name="psw">
        <br><br>

        <input type="submit" name="signup" value="click me to signup">
    </form>

    <?php
    include('db.php');

    if
    (isset($_POST['signup'])) {
        $username = $_POST['uname'];
        $password = $_POST['psw'];

        $chk = "select * from signup where email = '$username'";
        $runchk = mysqli_query($con, $chk); // go button 
    
        $totalrow = mysqli_num_rows($runchk); // for checking number of rows
    
        if ($totalrow) {
            echo "user already exists";
        } else {
            $query = "INSERT INTO signup (email,password)VALUES('$username','$password')";

            $run = mysqli_query($con, $query); // ye go ka button
    
            if ($run) {
                echo "user created";
            } else {
                echo "error";
            }
        }

    }



    ?>


</body>

</html>