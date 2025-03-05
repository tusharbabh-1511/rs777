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
    <link rel="shortcut icon" href="<?= IMAGE_URL ?>favicon.jpeg" type="image">
    <link rel="icon" href="<?= IMAGE_URL ?>favicon.jpeg" type="image/x-icon">
    <link rel="canonical" href="index.php">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "<?php echo SITE_DOMAIN_NAME; ?>",
            "alternateName": "<?= SITE_DIAPLAY_NAME ?>",
            "url": "<?= SITE_URL ?>",
            "logo": "<?= IMAGE_URL ?>logo.jpeg"
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
        .loader {
        text-align: center;
        vertical-align: middle;
        position: relative;
        display: flex;
        /* background: white; */
        padding: 50px;
        /* box-shadow: 0px 40px 60px -20px rgba(0, 0, 0, 0.2); */
        }

        .loader span {
        display: block;
        width: 10px;
        height: 10px;
        background: #eee;
        border-radius: 50%;
        margin: 0 5px;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
        }

        .loader span:nth-child(1) {
        background:#ffc107;
        }

        .loader span:nth-child(2) {
        background:#ffc107;
        }

        .loader span:nth-child(3) {
        background: #ffc107;
        }

        .loader span:nth-child(4) {
        background: #ffc107;
        }

        .loader span:nth-child(5) {
        background:#ffc107;
        }

        .loader span:not(:last-child) {
        animation: animate 1.5s linear infinite;
        }

        @keyframes animate {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(15px);
        }
        }

        .loader span:last-child {
        animation: jump 1.5s ease-in-out infinite;
        }

        @keyframes jump {
        0% {
            transform: translate(0, 0);
        }
        10% {
            transform: translate(10px, -10px);
        }
        20% {
            transform: translate(20px, 10px);
        }
        30% {
            transform: translate(30px, -50px);
        }
        70% {
            transform: translate(-150px, -50px);
        }
        80% {
            transform: translate(-140px, 10px);
        }
        90% {
            transform: translate(-130px, -10px);
        }
        100% {
            transform: translate(-120px, 0);
        }
        }
        .carousel-inner img {
            width: 100%; /* Ensures images take full width */
            height: 500px; /* Default height for desktop */
            object-fit: cover; /* Prevents distortion, crops the image to fit */
            filter: brightness(60%); 
        }

        /* Tablet View */
        @media (max-width: 768px) {
            .carousel-inner img {
                height: 350px; /* Adjust height for tablets */
            }
        }

        /* Mobile View */
        @media (max-width: 480px) {
            .carousel-inner img {
                height: 250px; /* Adjust height for mobile */
            }
        }

        .btn-store {
        color: #fab028;
        min-width: 254px;
        padding: 12px 20px !important;
        border:solid 1px #fab028 !important;
        margin-top: 10px;
        }

        .btn-store:focus, 
        .btn-store:hover {
        color: #ffffff !important;
        background-color: #fab028 ;
        border-color: #fab028 !important;
        }

        .btn-store .btn-label, 
        .btn-store .btn-caption {
        display: block;
        text-align: left;
        line-height: 1;
        }

        .btn-store .btn-caption {
        font-size: 24px;
        }

    </style>

</head>
<body id="top" data-spy="scroll" data-target="#navbar-spy" class="position-relative loaded">

<!-- start of header -->
<header class="header-nav position-relative bg-light-gray">
    <div class="container">
        <nav class="navbar navbar-expand-xl navbar-light px-0">
            <a class="navbar-brand p-0" href="index.php"><img class="img-fluid" src="<?= IMAGE_URL ?>logo.jpeg" width="120" alt="<?php SITE_DOMAIN_NAME ?>"></a>
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
