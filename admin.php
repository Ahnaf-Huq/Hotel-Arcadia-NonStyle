<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            background-color: #cce6ff;
            padding: 5px;
        }
    </style>
</head>

<body>
    <table border="2px solid black" width="100%" class="navbar" style="background-color: #99ceff;">
        <tr>
            <th style="font-size: large;"><b>HOTEL PRADADISE</b></th>
            <th><a href="index.php">Home</a></th>
            <th><a href="rooms-suites.php">Rooms</a></th>
            <th><a href="dining.php">Dining</a></th>
            <th><a href="login.php">Login</a></th>
            <th><a href="contact-us.php">Contact Us</a></th>
        </tr>
    </table>

    <h1>Admin Control Panel</h1>
    <br>
    <br>

    <table width="100%">
        <tr>
            <td>
                <table width="540px" height: "138px">
                    <tr>
                        <td colspan="3">
                            <p style="font-size:18px;">Employee Managment</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 146px; height:76px; text-align:center; font-size:15px;font-weight:bold;background-color: #9B71BD; "> <a href="./Admin panel//employeemanagment/addemployee.php" style="text-decoration: none;"> Add Employee </a> </td>
                        <td style="width: 146px; height:76px; text-align:center; font-size:15px;font-weight:bold;background-color: #9B71BD; "><a href="./Admin panel//employeemanagment/modifyemployee.php" style="text-decoration: none;"> Modify Employee info </a> </td>
                        <td style="width: 146px; height:76px; text-align:center; font-size:15px;font-weight:bold;background-color: #9B71BD; "><a href="./Admin panel//employeemanagment/deleteemployee.php" style="text-decoration: none;"> Delete Employee</a> </td>
                    </tr>
                </table>
            </td>
            <td>
                <table width="540px" height: "138px">
                    <tr>
                        <td colspan="3">
                            <p style="font-size:18px;">Room Managment</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 146px; height:76px; text-align:center; font-size:15px;font-weight:bold;background-color: #24AEFC; "><a href="./Admin panel/addemployee.php" style="text-decoration: none;"> Add A room </a></td>
                        <td style="width: 146px; height:76px; text-align:center; font-size:15px;font-weight:bold;background-color: #24AEFC; "><a href="./Admin panel/addemployee.php" style="text-decoration: none;"> Modify room info </a></td>
                        <td style="width: 146px; height:76px; text-align:center; font-size:15px;font-weight:bold;background-color: #24AEFC; "><a href="./Admin panel/addemployee.php" style="text-decoration: none;"> Delete room form site </a></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td>
                <table width="540px" height: "138px">
                    <tr>
                        <td colspan="3">
                            <p style="font-size:18px;">Room Managment</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 146px; height:76px; text-align:center; font-size:15px;font-weight:bold;background-color: #BD8871; "><a href="./Admin panel/addemployee.php" style="text-decoration: none;"> Add New Facility </a></td>
                        <td style="width: 146px; height:76px; text-align:center; font-size:15px;font-weight:bold;background-color: #BD8871; "><a href="./Admin panel/addemployee.php" style="text-decoration: none;"> Modify facility</a></td>
                        <td style="width: 146px; height:76px; text-align:center; font-size:15px;font-weight:bold;background-color: #BD8871; "><a href="./Admin panel/addemployee.php" style="text-decoration: none;"> Remove facility </a></td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>


    <br><br><br><br><br><br><br>


    <footer style="background-color: #0066cc;">
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