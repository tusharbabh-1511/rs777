<?php include_once('include/config.php'); ?>
<!DOCTYPE html>
<html lang="en-IN">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title><?= SITE_DOMAIN_NAME ?> | Original & Official Website | <?= SITE_DOMAIN_NAME ?> </title>
    <meta name="description"
          content="<?= SITE_DOMAIN_NAME ?> Is Most Trusted Online Satta Matka App Where You Can Play Matka Games And Win Jackpots In Satta Industry <?= SITE_DIAPLAY_NAME ?> Is Most Trusted And Reputed Gaming Platform Where Players Play There Favorite Game Without And Fear Or Worries <?= SITE_DOMAIN_NAME ?> Is Brand Since 2001"/>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <link rel="stylesheet" href="<?= PLUGIN_URL ?>bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= PLUGIN_URL ?>themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?= PLUGIN_URL ?>slick/slick.css">
    <link rel="stylesheet" href="<?= PLUGIN_URL ?>slick/slick-theme.css">
    <link rel="stylesheet" href="<?= PLUGIN_URL ?>aos/aos.css">

    <!-- Main Stylesheet -->
    <link href="<?= CSS_URL ?>st.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="<?= IMAGE_URL ?>favicon.png" type="image">
    <link rel="icon" href="<?= IMAGE_URL ?>favicon.png" type="image/x-icon">
    <link rel="canonical" href="index.html">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "<?php echo SITE_DOMAIN_NAME; ?>",
            "alternateName": "<?= SITE_DIAPLAY_NAME ?>",
            "url": "<?= SITE_URL ?>",
            "logo": "<?= IMAGE_URL ?>logo.svg"
        }
    </script>
    
    <!-- Plugins Needed for the Project -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/aos/aos.js"></script>

    <!-- Main Script -->
    <script src="js/s.js"></script>

    <style>
        .highlight{
            color: #DE5246;
        }
    </style>

</head>
<body id="top" data-spy="scroll" data-target="#navbar-spy" class="position-relative loaded">

<!-- start of header -->
<header class="header-nav position-relative bg-light-gray">
    <div class="container">
        <nav class="navbar navbar-expand-xl navbar-light px-0">
            <a class="navbar-brand p-0" href="index.php"><img class="img-fluid" src="<?= IMAGE_URL ?>logo.svg" alt="<?php SITE_DOMAIN_NAME ?>"></a>
            <!-- logo -->

            <button class="navbar-toggler bg-white rounded-0 p-0" type="button" data-toggle="collapse"
                    data-target="#navlinks" aria-controls="navlinks" aria-expanded="false"
                    aria-label="Toggle navigation">
                <svg class="nav-toggle-icon" viewBox="0 0 100 100" width="40" onclick="this.classList.toggle('active')">
                    <path class="line top"
                          d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20"/>
                    <path class="line middle" d="m 70,50 h -40"/>
                    <path class="line bottom"
                          d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20"/>
                </svg>
            </button>
            <!-- mobile-nav control button -->

            <div class="collapse navbar-collapse" id="navlinks">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="charts.php">Charts</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="jodiChartDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Jodi Charts</a>
                        <div class="dropdown-menu" aria-labelledby="jodiChartDropDown" id="navBarJodiChartLink">
                            <!-- dynamically menu added here -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="panaChartDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pana Charts</a>
                        <div class="dropdown-menu" aria-labelledby="panaChartDropDown" id="navBarPanaChartLink">
                            <!-- dynamically menu added here -->
                        </div>
                    </li>
                </ul>
            </div>
            <!-- nav links -->
        </nav>
    </div>
</header>
<!-- end of header -->