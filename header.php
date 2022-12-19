<!DOCTYPE html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php bloginfo('name') ?></title>
        <meta name="keywords" content="Fustanella Farm, Fustanella, fustanella, fustanellafarm, Fustanellafarm">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="app">
        <?php
            $args = [
                'var1' => 'test',
                'var2' => 'asdasdas'
            ]
        ?>
          <?php view('common.navbar', $args); ?>