<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=WEBSITE_TITLE?></title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?=ASSETS.THEME?>css/bootstrap.min.css">

    <link rel="stylesheet" href="<?=ASSETS.THEME?>css/bootstrap-icons.css">

    <link rel="stylesheet" href="<?=ASSETS.THEME?>css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?=ASSETS.THEME?>css/owl.theme.default.min.css">

    <link href="<?=ASSETS.THEME?>css/templatemo-pod-talk.css" rel="stylesheet">

    <!--

TemplateMo 584 Pod Talk

https://templatemo.com/tm-584-pod-talk

-->
</head>
<body>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand me-lg-5 me-0" href="index.html">
                <h4 class="text-white">PAP-2022/2023</h4>
                    <img src="<?=ASSETS.THEME?>images/Logoitel.jpg" class="logo-image img-fluid" alt="templatemo pod talk">
                </a>

                <form action="#" method="get" class="custom-form search-form flex-fill me-3" role="search">
                    <div class="input-group input-group-lg">
                        <!--
                        <input name="search" type="search" class="form-control" id="search" placeholder="Search Podcast"
                            aria-label="Search">

                        <button type="submit" class="form-control" id="submit">
                            <i class="bi-search"></i>
                        </button>
-->
                        
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <?php if(isset($data['user_data'])):?>
                        <li class="nav-item">
                            <a class="nav-link active"><?=$data['user_data']->name?></a>
                        </li>
                        <?php endif;?>

                        <li class="nav-item">
                            <a class="nav-link<?=$page_title == "Home"? "" : ""?>" href="<?=ROOT?>">Página principal</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?=$page_title == "Percentagens"? "active" : ""?>" href="<?=ROOT?>percentagens_votos">Percentagens de Votos</a>
                        </li>
                       
                        <!--
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="listing-page.html">Listing Page</a></li>

                                <li><a class="dropdown-item" href="detail-page.html">Detail Page</a></li>
                            </ul>
                        </li>
                        -->
                        <?php if(isset($data['user_data'])):?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=ROOT?>logout">Sair</a>
                        </li>
                        <?php else:?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=ROOT?>login">LOGIN</a>
                            </li>
                        <?php endif;?>
                    </ul>
                    
                    <?php if(isset($data['user_data']) && $data['user_data']->rank == "admin"):?>
                        <div class="ms-4">
                            <a href="<?=ROOT?>admin" class="btn custom-btn custom-border-btn smoothscroll">Entrar</a>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </nav>