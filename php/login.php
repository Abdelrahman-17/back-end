<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
</head>
<body>
     <form action = "login.php" method="POST">
        username <input type = "text" placeholder="username" name="username" required><br>
        phone <input type = "text" placeholder="phone" name="phone" required><br>
        email <input type = "email" placeholder="email" name="email" required><br>
        password <input type = "password" placeholder="password" name="password" required><br>
        <input type="submit"  value="sign in" name="sign in"><br>
     </form>

     <?php
        if(isset($_POST["sign in"])){
            $username = $_POST["username"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $password = $_POST["password"];
        

        $conn = new mysqli("localhost","root","","login");
        $stmt = $conn->prepare("insert into ussers values(?,?,?,?);");
        $stmt->bind_param("siss",$username,$phone,$email,$password);
        $stmt->execute();
        echo "Done";

        }

        ?>

</body>
</html>