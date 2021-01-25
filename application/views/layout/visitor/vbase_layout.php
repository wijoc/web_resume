<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>assets/visitor/images/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

        <title><?php if($title){ echo $title; } ?></title>

        <!-- CSS and Script goes here -->
        <?php if($head_load){ echo $head_load; } ?>
    </head>
    <body>
        <!-- Navigation -->
        <?php if($navbar){ echo $navbar; } ?>

        <!-- Page Content -->
        <section class="section-wrapper">
            <div class="container">
                <!-- Content -->
                <?php if($content){ echo $content; } ?>
            </div>
        </section>

        <!-- CSS and Script goes here -->
        <?php if($foot_load){ echo $foot_load; } ?>

    </body>
</html>
