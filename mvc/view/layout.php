<?php 
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost/phpp3/">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["page"] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">

    <?php  $css = "./public/css/". $data["page"] .".css" ?>
    <link rel="stylesheet" href= <?php echo $css ?>>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/9fefcd7f07.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <?php 
            if(!isset($_SESSION["idAccount"]))
                require "./mvc/view/header2.php";
            else if($_SESSION["role"] == "admin") require "./mvc/view/headerAdmin.php";
            else require "./mvc/view/header1.php";
            ?>
    </header>
   

    <main>
        
        <?php require_once "./mvc/view/page/".$data["page"].".php"?>
    </main>
    <?php require "./mvc/view/footer.php"; ?>


</body>
</html>