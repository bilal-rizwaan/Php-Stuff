<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Calculator In Php</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="love">
        <input type="text" name="bird">
        <input type="submit" name="find">
    </form>

    <?php
    if(isset($_POST['find'])){
        $love = $_POST['love'];
        $bird = $_POST['bird'];
        $ran = rand(1,100);
        echo $love . ' + ' . $bird .' = '. $ran.'%';
    }
    ?>
</body>
</html>