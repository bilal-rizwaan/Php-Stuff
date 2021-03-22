<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Calculator In Php</title>
</head>
<body>
        <form method="post">
            <input type="text" name="love">
            <input type="text" name="bird">
            <input type="submit" name="find">
        </form>

        <?php
        if(isset($_POST['submit'])){
            $love = $_POST['love'];
            $bird = $_POST['bird'];
            $ran = rand();
            echo $love . + . $bird '=' $rand;
        }
        ?>
</body>
</html>