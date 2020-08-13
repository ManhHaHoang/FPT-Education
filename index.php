<?php
$v = time();
?>
<!DOCTYPE html>
<html lang="vi" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link type="image/x-icon" rel="shortcut icon" sizes="16x16" href="images/favicon.png"/>
    <link rel="stylesheet" type="text/css"  href="templates/css/guide.css?v=<?= $v ?>"/>
    <link rel="stylesheet" type="text/css"  href="templates/css/style.css?v=<?= $v ?>"/>
    <link rel="stylesheet" type="text/css"  href="templates/css/slide.css?v=<?= $v ?>"/>
    <link rel="stylesheet" type="text/css"  href="templates/css/responsive.css?v=<?= $v ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
    <title>Education</title>
</head>
<body id="main-body">
    <?php include 'include/header.php'; ?>
    <?php include 'include/banner.php'; ?>
    <?php include 'include/study.php'; ?>
    <?php include 'include/about-us.php'; ?>
    <?php include 'include/choose-us.php'; ?>
    <?php include 'include/degrees.php'; ?>
    <?php include 'include/program.php'; ?>
    <?php include 'include/scholarship.php'; ?>
    <?php include 'include/transfer.php'; ?>
    <?php include 'include/campus.php'; ?>
    <?php include 'include/footer.php'; ?>
</body>
</html>
