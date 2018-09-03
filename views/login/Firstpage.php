<?php
/**
 * Header View
 */
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $GLOBALS['config']['project-name']; ?></title>
    <link href="assets/css/css/fontawesome-all.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>
    <div class="bg"></div>
        <h1>Dagen tot eerste <i></i>Instuif!</h1>
        <h3 id="Timer"></h3>
        <div id="buttons">
          <button type="submit" class="btn btn-primary button">Inloggen</button>
        <a href="./index.php?controller=kids&action=create"><button  type="submit" class="btn btn-primary button">Kind Inschrijven</button></a>  
        </div>
        <?php include 'form.php'; ?>
    </body>
</html>
<script src="assets/js/main.js"></script>
