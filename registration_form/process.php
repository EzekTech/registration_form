<?php
      require "header.php";
?>

<?php
      if(isset($_POST["submit"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $uname = $_POST["uname"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $pass = $_POST["pass"];
        $confirm_pass = $_POST["cpass"];

        if($pass !== $confirm_pass){
            exit("<p> Password is different</p><a href='register.php'></a>");
        }

        $cryptic_pass = md5($pass);
     

        $user_exist = mysqli_query($connect,"SELECT * FROM customers WHERE email ='$email'");

        if(mysqli_num_rows($user_exist)){
          exit ("<p>Email already exist</p><a href='login.php'>Click to login</a>");
        } 
    
        $user_exist1 = mysqli_query($connect,"SELECT * FROM customers WHERE username ='$uname'");

        if(mysqli_num_rows($user_exist1)){
          exit ("<p>Username already exist</p><a href='login.php'>Click to login</a>");
        } 
    
        $insert_user = mysqli_query($connect, "INSERT INTO customers(firstname,lastname,username,email,gender,password) VALUES ('$fname','$lname','$uname','$email','$gender','$cryptic_pass' )" );

        if($insert_user){
            header("Location: all_users.php ");
        }
     }




?>