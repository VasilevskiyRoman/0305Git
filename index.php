<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center ;">Add employee</h1>
    <div style="text-align:center ; border: 2px black solid; width:50%; height:fit-content; margin-left:25%">
    
    <form action="connect.php">
        <h2 style="margin-left: 40px;">First Name</h2>
        <input type="text" name="fname" style="margin-left: 40px; font-size:xx-large; width:40%; margin-top:-10px">
        <br><br>
        <h2 style="margin-left: 40px;">Last name</h2>
        <input type="text" name="lname" style="margin-left: 40px; font-size:xx-large; width:40%; margin-top:-10px">
        <br><br>
        <h2 style="margin-left: 40px;">Gender</h2>
        <select size="1" name="gender" style="margin-left: 40px; font-size:xx-large; width:40%; margin-top:-10px">
            <option selected value="M">Male</option>
            <option value="F">Female</option>
        </select>
        <br><br>
        <h2 style="margin-left: 40px;">Hire Date</h2>
        <input type="date" name="hiredate" style="margin-left: 40px; font-size:xx-large; width:40%; margin-top:-10px">
        <br><br>
        <input style="font-size:xx-large;" type="submit">
        <br><br><br>
    </form>
    </div>
    
</body>
</html>