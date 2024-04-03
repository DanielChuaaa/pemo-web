<?php
session_start();

$error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == 'cuy' && $_POST['password'] == "1") {
        $_SESSION['login'] = true;
        $_SESSION['username_login'] = 'cuy';
        header('Location: ./member.php');
        exit();
    } else {
        $error = "Login Gagal";
    }
}
?>

<body>
    <h1>Login</h1>
    <?php
    if($error != ""){
        echo "<p>$error</p>";
    }
    ?>
    <form action="login.php" method="post">
        <label> First Name :
            <input type="text" name="username">
        </label>
        <br>
        <label> Last Name :
            <input type="password" name="password">
        </label>
        <br>
        <input type="submit" value="login">
    </form>
</body>

