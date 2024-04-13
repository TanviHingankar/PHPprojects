<?php

if(isset($_POST["resetbtn"]))
{
    $connect = mysqli_connect("localhost","root","","project4");

    $un = $_POST["username"];
    $mob = $_POST["mobile"];

    $qry = "SELECT * FROM `user` WHERE username = '$un' AND mobile = '$mob'";

    $result = mysqli_query($connect, $qry);
    $data = mysqli_fetch_assoc($result);
    $id = $data["id"];

    $row = mysqli_num_rows($result);

    if($row>0)
    {
        $pwd = randomPassword();

        $qry = "UPDATE `user` SET `password`='$pwd' WHERE id = '$id'";

        $result = mysqli_query($connect, $qry);
    }
    else
    {
        echo "Invalid Username or Mobile Number";
    }


}
    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container{
            font-size: 20px;
            

        }

            #btn{
                size: 30px
            }



        .c6{
          padding-left : 500px;
          padding-top : 20px;
            background: lightgrey;
          border: 5px solid black;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6 c6">
    <form method="post">
        <table cellspacing="30">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mobile NO</td>
                <td><input type="tel" name="mobile"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button id="btn" name="resetbtn">Reset Password</button></td>
            </tr>
            <tr>
                <td colspan="2">Password- <font color="red"><?php echo $pwd ?></font>, kindly copy password, password changed</td>
            </tr>
        </table>
    </form>
    </div>
    <div class="col-md-3">

    </div>
    </div>
    </div>
</body>
</html>