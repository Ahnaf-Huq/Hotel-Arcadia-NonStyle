<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<style>
body{
    background-color:#cce6ff;
}

</style>

<body>

    <table border="2px solid black" width="100%">
        <tr>
            <th style="font-size: large;"><b>HOTEL PRADADISE</b></th>
            <td><a href="index.php">Home</a></td>
            <td><a href="rooms-suites.php">Rooms</a></td>
            <td><a href="dining.php">Dining</a></td>
            <td><a href="#">Login</a></td>
            <td><a href="contact-us.php">Contact Us</a></td>
        </tr>
    </table>
    <br>
    <form action="" method="post">
    <table  border="2px solid black" width="100%" style="background-color:  #cceeff;" >
    <tr>
    <th rowspan="2">Enter Login Credentials</th>
    <td><label for="usermail">Email:</label></td>
    <td><input width="100%" type="email" name="usermail" id="usermail" placeholder="yourname@yourmail.com" ></td>
    </tr>
    <tr>
    <td><label for="userpass">Password:</label></td>
    <td><input width="100%" type="password" name="usermail" id="userpass" placeholder="yabc@#$" ></td>
    </tr>
    <tr>
    <th colspan="3" style="background-color: red;" ><button style="font-size: 15px;" type="submit">Login</button></th>
    </tr>
    <tr>
    <td><a href="#">Forget Passwrod?</a></td>
    <td colspan="2" >Don't have an account........<a href="registration.php">Singup?</a></td>
    
    </tr>
    </table>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>

    <footer style="background-color: wheat;">
        <table style="background-color: none; border:5px">
            <tr>
                <td>
                    <b>Copyright © Acradian Software Inc. 2021</b>
                </td>
                <td>
                    <a href="#">About Us</a>
                    <br>
                    <br>
                </td>
                <td>
                    <a href="#">Terms and condition</a>
                    <br>
                    <br>
                </td>
                <td>
                    <a href="#">Privacy Policy</a>
                    <br>
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. At molestie metus volutpat nec egestas proin nibh. Tincidunt diam in neque, sed egestas.
                </td>

            </tr>

        </table>


    </footer>

    
    



   
  

</body>

</html>