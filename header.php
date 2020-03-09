<!doctype html>
<html lang="en">

<head>
    <?php $home = get_template_directory_uri(); ?>
    <title> <?php wp_title(); ?> </title>
    
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="<?= $home ?>/assets/css/main.css?<?= date('hsmdm') ?>">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Josefin+Sans:400,700,700i,400i,600i,600,300i,300">
    <?php wp_head(); ?>

</head>

<body>