<?php
session_start();

if($_SESSION['login'] != true){
    header('Location ./login.php');
    exit();
}

$say = "Hello " . $_SESSION['username_login'];
?>

<html>
    <body>
        <h1><?= $say ?></h1>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label >File :
                <input type="file" name="upload_file"> 
            </label>    
            <input type="submit" value="upload">
        </form>

        <?php 
        
        $files = scandir("files");
        for($a = 2; $a < count($files); $a++){
    
        ?>
        <p>
            <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
        </p>
        <?php
}
        ?>
    </body>

     <script type="text/javascript">
        function Alert() {
        var answer = confirm ("Apakah yakin Logout?")
        if (answer)
            window.location="./logout.php";
        }
    </script>

    <a href="javascript:Alert();">Logout</a>
</html>

