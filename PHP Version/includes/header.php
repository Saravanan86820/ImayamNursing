<?php
// includes/header.php
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en" class="geist_9c6cb61b-module__8NX9hq__variable enriqueta_be48197e-module__oJEyeW__variable">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/index.css" data-precedence="next">
    <link rel="stylesheet" href="./assets/css/booking.css" data-precedence="next">
    <link rel="stylesheet" href="./assets/css/footer.css" data-precedence="next">
    
    <?php if ($currentPage === 'index'): ?>
        <link rel="stylesheet" href="./assets/css/journey.css" data-precedence="next">
        <link rel="stylesheet" href="./assets/css/contact.css" data-precedence="next">
        <link rel="stylesheet" href="./assets/css/aboutus.css" data-precedence="next">
        <link rel="stylesheet" href="./assets/css/doctor.css" data-precedence="next">
    <?php elseif ($currentPage === 'ourservies'): ?>
        <link rel="stylesheet" href="./assets/css/service.css" data-precedence="next">
        <link rel="stylesheet" href="./assets/css/cta.css" data-precedence="next">
        <link rel="stylesheet" href="./assets/css/contact.css" data-precedence="next">
    <?php elseif ($currentPage === 'contact'): ?>
        <link rel="stylesheet" href="./assets/css/contact.css" data-precedence="next">
    <?php elseif ($currentPage === 'aboutus'): ?>
        <link rel="stylesheet" href="./assets/css/service.css" data-precedence="next">
        <link rel="stylesheet" href="./assets/css/cta.css" data-precedence="next">
        <link rel="stylesheet" href="./assets/css/contact.css" data-precedence="next">
        <link rel="stylesheet" href="./assets/css/aboutus.css" data-precedence="next">
    <?php elseif ($currentPage === 'doctor' || $currentPage === 'doctor-profile'): ?>
        <link rel="stylesheet" href="./assets/css/doctor.css" data-precedence="next">
    <?php endif; ?>

    <meta name="next-size-adjust" content="">
    <title>Imayam Nursing — Healing Begins at Home</title>
    <meta name="description" content="Professional home nursing, elderly care, patient attendants, physiotherapy, and doctor home visits delivered at your doorstep across India.">
    <link rel="icon" href="./assets/images/favicon.png" sizes="256x256" type="image/x-icon">
</head>

<body>
    <header class="navbar-wrapper">
        <div class="navbar-container">
            <a class="navbar-logo" href="./">
                <img alt="Imayam Nursing Logo" width="250" height="80" decoding="async" data-nimg="1" style="color:transparent" src="./assets/images/logo/logo.png">
            </a>
            <ul class="navbar-menu">
                <li><a class="<?= $currentPage === 'ourservies' ? 'active' : '' ?>" href="./ourservies.php">Our Services</a></li>
                <li><a class="<?= $currentPage === 'aboutus' ? 'active' : '' ?>" href="./aboutus.php">About Us</a></li>
                <li><a class="<?= $currentPage === 'contact' ? 'active' : '' ?>" href="./contact.php">Contact Us</a></li>
            </ul>
            <div class="navbar-right">
                <button type="button" class="js-book-btn book-btn">
                    <span>Book Now</span>
                    <span class="arrow-circle">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
                        </svg>
                    </span>
                </button>
                <button class="hamburger" aria-label="Open menu" aria-expanded="false">
                    <span></span><span></span><span></span>
                </button>
            </div>
            <ul class="mobile-menu">
                <li><a class="<?= $currentPage === 'ourservies' ? 'active' : '' ?>" href="./ourservies.php">Our Services</a></li>
                <li><a class="<?= $currentPage === 'aboutus' ? 'active' : '' ?>" href="./aboutus.php">About Us</a></li>
                <li><a class="<?= $currentPage === 'contact' ? 'active' : '' ?>" href="./contact.php">Contact Us</a></li>
                <li class="mobile-menu-book">
                    <button type="button" class="js-book-btn book-btn">
                        <span>Book Now</span>
                        <span class="arrow-circle">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
                            </svg>
                        </span>
                    </button>
                </li>
            </ul>
        </div>
    </header>
    <main></main>