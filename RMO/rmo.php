<!-- <?php

include '../admin/connect.php';
session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    #$name = filter_var($name);
    $pass = sha1($_POST['pass']);
   # $pass = filter_var($pass);

    $select_admin = $conn->prepare("SELECT * FROM `rmo` WHERE name = ? AND password = ?");
    $select_admin->execute([$name,$pass]); 
    
    if($select_admin->rowCount() > 0){
        $fetch_admin_id = $select_admin->fetch(PDO::FETCH_ASSOC);
        $_SESSION['admin_id'] = $fetch_admin_id['id'];
        #$message[] = 'working';
        header('location:dashboard.php');
        
    }
    else {
        $message[] = 'incorrect user or pass! ';
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="../css/admin.css">

</head>

<body>
   

<?php

    if (isset($message)) {
        foreach($message as $message){
            echo'
            <div class="message">
            <span>'.$message.'</span>
            <i class = "fas fa-times" onclick = "this.parentElement.remove();"></i>
        </div>';
        }
    }
?>


    <section class="form-container">
    <form action="" method="POST">
        <h3>login now</h3>
        <p>default username =<span>admin</span> & password =<span>111</span></p>
    <input type="text" class="box" name="name" maxlength="20" required placeholder="enter your username" oninput="this.value = this.value.replace(/\s\g,'')">
    <input type="password" class="box" name="pass" maxlength="20" required placeholder="enter your password" oninput="this.value = this.value.replace(/\s\g,'')">
 <input type="submit" name="submit"  value="login" class="btn ">
</form>

    </section>
</body>
</html> -->