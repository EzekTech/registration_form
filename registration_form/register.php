<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
      
   <?php
       include "header.php"
   ?>
   <form method="post" action="process.php" >
        <label>Firstname:</label>
        <input type="text" name="fname" required><br><br>

        <label>Lastname:</label>
        <input type="text" name="lname" required><br><br>

        <label>Username:</label>
        <input type="text" name="uname" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label >Gender:</label>
        <select name="gender">
            <option>...</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
        </select><br><br>
        
        <label>Password:</label>
        <input type="password" name="pass" required><br><br>

        <label>Confirm password:</label>
        <input type="password" name="cpass" required><br><br>

        <input type="submit" value="submit" name="submit">


   </form>
</body>
</html>