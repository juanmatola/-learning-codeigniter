<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst($page) ?> - <?php echo $site_name ?></title>
    <meta name="description" content="<?php echo $site_description?>">
    <!-- General CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <!-- Page CSS -->
    <?php   foreach ($stylesheets as $sheet) { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/<?php echo $sheet ?>.css">
    <?php   }   ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <!-- NAVBAR DE BOOTSTRAP -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/"><?php echo $site_logo ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item <?php if($page === "home"){ echo "active";} ?>">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                    <li class="nav-item <?php if($page === "porfolio"){ echo "active";} ?>">
                        <a class="nav-link" href="/portfolio">Portfolio</a>
                    </li>
                    
                    <li class="nav-item <?php if($page === "contacto"){ echo "active";} ?>">
                        <a class="nav-link" href="/contacto" tabindex="-1" aria-disabled="true">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
