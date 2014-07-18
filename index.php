<?php 
    session_start();
    require_once 'phpscripts/helpers.php';
    $errors = isset( $_SESSION['errors']) ? $_SESSION['errors'] : array();
    $fields = isset( $_SESSION['fields']) ? $_SESSION['fields'] : array();
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MyFolio</title>
        <meta name="description" content="Myfolio: single page portfolio for my friend Dexter" />
        <meta name="keywords" content="portfolio, iugo digital, single page" />
        <meta name="author" content="Chinara James" />
        <link rel="shortcut icon" href="../favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="resources/css/style.css">
        <script src="resources/js/modernizr.custom.js"></script>

    </head>
    <body class="spmenu-push" id="top">
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- ICONS -->
          <?php include 'phpscripts/includes/svg.php'; ?>
          <!-- ICONS -->
        <div class="top">

            <header class="site-header" id="site-header">
                <a href="#home" class="logo" data-scroll><h1 class="logotype">my<span class="logo-color">folio</span></h1></a>
                <nav class="nav-collapse">
                    <ul>
                      <li class="active"><a href="#home" data-scroll>Home</a></li>
                      <li><a href="#about" data-scroll>About</a></li>
                      <li><a href="#services" data-scroll>Services</a></li>
                      <li><a href="#work" data-scroll>My Work</a></li>
                      <li><a href="#contact" data-scroll>Contact Me</a></li>
                    </ul>
                </nav>
            </header>
            <!-- end header -->
        </div>
        <!-- end top -->
        
        <div class="hero" id="home">
            <div class="word-block">
                <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur</h2>
                <h1 class="title">incididunt bore</h1>
                <p class="tagline">Lorem ipsum dolor sit amet</p>
                
            </div>
            <div class="readmore">
                <a href="#" class="btn btn--primary btn--hard btn--full">Know More</a>
            </div>
            
            
        </div>
        <!-- end hero -->

        <section class="section-padding" id="about">
            <div class="container">
                <h1 class="section-title">About Me</h1>
                <p class="section-intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim <span class="highlight">ad minim veniam,quis nostrud exercitation ullamco</span> laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="tp-wrap carousel">
                    <div class="grid grid--full tp">
                        <div class="grid__item  one-quarter desk--one-quarter">
                            <div class="talking-points">
                                <div class="talking-points__image image--center">
                                  <svg viewBox="0 0 32 32">
                                    <g filter="">
                                      <use xlink:href="#light-bulb"></use>
                                    </g>
                                  </svg>
                                </div>
                                <h4 class="talking-points__title">Title goes here</h4>
                                <p class="talking-points__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, voluptate suscipit.</p>
                            </div>
                        </div><!--
                        --><div class="grid__item  one-quarter desk--one-quarter">
                            <div class="talking-points">
                                <div class="talking-points__image image--center">
                                  <svg viewBox="0 0 32 32">
                                    <g filter="">
                                      <use xlink:href="#edit"></use>
                                    </g>
                                  </svg>
                                </div>
                                <h4 class="talking-points__title">Title goes here</h4>
                                <p class="talking-points__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, voluptate suscipit.</p>
                            </div>
                        </div><!--
                        --><div class="grid__item  one-quarter desk--one-quarter">
                            <div class="talking-points">
                                <div class="talking-points__image image--center">
                                  <svg viewBox="0 0 32 32">
                                    <g filter="">
                                      <use xlink:href="#gear"></use>
                                    </g>
                                  </svg>
                                </div>
                                <h4 class="talking-points__title">Title goes here</h4>
                                <p class="talking-points__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, voluptate suscipit.</p>
                            </div>
                        </div><!--
                        --><div class="grid__item  one-quarter desk--one-quarter">
                            <div class="talking-points last">
                                <div class="talking-points__image image--center">
                                  <svg viewBox="0 0 32 32">
                                    <g filter="">
                                      <use xlink:href="#laptop"></use>
                                    </g>
                                  </svg>
                                </div>
                                <h4 class="talking-points__title">Title goes here</h4>
                                <p class="talking-points__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, voluptate suscipit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tp-wrap -->
                
            </div>
            <!-- end container -->
        </section>
        <!-- end about -->
        
        <section id="services">
           <div class="services-listing">
                <div class="inner">
                    <h1 class="section-title">Services</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium,  repellat asperiores aperiam adipisci temporibus reiciendis tenetur.</p>

                    <div class="grid">
                        <div class="grid__item desk--one-half">
                            <div class="talking-points__image">
                              <svg viewBox="0 0 32 32">
                                <g filter="">
                                  <use xlink:href="#globe"></use>
                                </g>
                              </svg>
                            </div>
                            <h4>Title goes here</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, voluptate suscipit.</p>
                        </div><!--
                        --><div class="grid__item desk--one-half">
                            <div class="talking-points__image">
                              <svg viewBox="0 0 32 32">
                                <g filter="">
                                  <use xlink:href="#search1"></use>
                                </g>
                              </svg>
                            </div>
                            <h4>Title goes here</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, voluptate suscipit.</p>
                        </div><!--
                        --><div class="grid__item desk--one-half">
                            <div class="talking-points__image">
                              <svg viewBox="0 0 32 32">
                                <g filter="">
                                  <use xlink:href="#alarm-clock"></use>
                                </g>
                              </svg>
                            </div>
                            <h4>Title goes here</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, voluptate suscipit.</p>
                        </div><!--
                        --><div class="grid__item desk--one-half">
                            <div class="talking-points__image">
                              <svg viewBox="0 0 32 32">
                                <g filter="">
                                  <use xlink:href="#graph"></use>
                                </g>
                              </svg>
                            </div>
                            <h4>Title goes here</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, voluptate suscipit.</p>
                        </div>
                    </div>
                </div>    
            </div>
            <!-- end service-listing -->
            
        </section>
        <!-- end services -->
        
        <section class="section-padding" id="work">
            <h1 class="section-title">My Work</h1>
            <p class="section-intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor</p>
            
            <div class="portfolio-wrapper carousel">
                <ul class="portfolio fadeIn grid grid--full">
                    <li class="portfolio__item grid__item desk--one-quarter">
                        
                        <figure>
                            <img class="portfolio__img" src="resources/imgs/portfolio/shades.jpg" alt="">

                            <figcaption>
                                <h3>Title goes here</h3>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sed, repellat.</span>
                                <a href="#" class="btn">Take a look</a>
                            </figcaption>
                        </figure>                       
                    </li><!--
                    --><li class="portfolio__item grid__item desk--one-quarter">
                            
                            <figure>
                                <img class="portfolio__img" src="resources/imgs/portfolio/frozen.jpg" alt="">

                                <figcaption>
                                    <h3>Title goes here</h3>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sed, repellat.</span>
                                    <a href="#" class="btn">Take a look</a>
                                </figcaption>
                            </figure> 
                        </li><!--
                    --><li class="portfolio__item grid__item desk--one-quarter">
                            
                            <figure>
                                <img class="portfolio__img" src="resources/imgs/portfolio/speed.jpg" alt="">

                                <figcaption>
                                    <h3>Title goes here</h3>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sed, repellat.</span>
                                    <a href="#" class="btn">Take a look</a>
                                </figcaption>
                            </figure> 
                        </li><!--
                    --><li class="portfolio__item grid__item desk--one-quarter">
                            
                            <figure>
                                <img class="portfolio__img" src="resources/imgs/portfolio/geese.jpg" alt="">

                                <figcaption>
                                    <h3>Title goes here</h3>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sed, repellat.</span>
                                    <a href="#" class="btn">Take a look</a>
                                </figcaption>
                            </figure> 
                        </li><!--
                    --><li class="portfolio__item grid__item desk--one-quarter">
                            
                            <figure>
                                <img class="portfolio__img" src="resources/imgs/portfolio/healthy.jpg" alt="">

                                <figcaption>
                                    <h3>Title goes here</h3>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sed, repellat.</span>
                                    <a href="#" class="btn">Take a look</a>
                                </figcaption>
                            </figure> 
                        </li><!--
                    --><li class="portfolio__item grid__item desk--one-quarter">
                            
                            <figure>
                                <img class="portfolio__img" src="resources/imgs/portfolio/cute.jpg" alt="">

                                <figcaption>
                                    <h3>Title goes here</h3>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sed, repellat.</span>
                                    <a href="#" class="btn">Take a look</a>
                                </figcaption>
                            </figure> 
                        </li><!--
                    --><li class="portfolio__item grid__item desk--one-quarter">
                            
                            <figure>
                                <img class="portfolio__img" src="resources/imgs/portfolio/hair.jpg" alt="">

                                <figcaption>
                                    <h3>Title goes here</h3>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sed, repellat.</span>
                                    <a href="#" class="btn">Take a look</a>
                                </figcaption>
                            </figure> 
                        </li><!--
                    --><li class="portfolio__item grid__item desk--one-quarter">
                            
                            <figure>
                                <img class="portfolio__img" src="resources/imgs/portfolio/urban.jpg" alt="">

                                <figcaption>
                                    <h3>Title goes here</h3>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sed, repellat.</span>
                                    <a href="#" class="btn">Take a look</a>
                                </figcaption>
                            </figure> 
                        </li>
                </ul>
            </div>
        <!-- end portfolio-wrapper carousel -->
        </section>
        <!-- end work -->
        
        <section class="section-padding" id="contact">
            <h1 class="section-title">Contact Me</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor</p>

            <?php if(!empty( $errors )): ?>
                <div class="form-errors">
                    <ul>
                        <li><?php echo implode('</li><li>', $errors); ?></li>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="contact-form">
                <form action="phpscripts/mail.php" method="post" id="contact-form" novalidate>
                    <ul class="form-fields">
                        <li>
                            <label for="fullname">Name</label>
                            <input type="text" class="text-input" name="fullname" id="fullname" <?php echo isset( $fields['name']) ? 'value="' . e($fields['name']) . '"' : '' ?> placeholder="NAME" tabindex="1" minlength="2" required>
                        </li>
                        <li>
                            <label for="email">Email</label>
                            <input type="email" class="text-input" name="email" id="email" <?php echo isset( $fields['name']) ? 'value="' . e($fields['email']) . '"' : '' ?> placeholder="EMAIL ADDRESS" tabindex="2" required>
                        </li>
                        <li>
                            <label for="message">Message</label>
                            <textarea type="text" class="text-input" name="message" id="message" placeholder="MESSAGE" tabindex="3" required><?php echo isset( $fields['name']) ?  e($fields['message'])  : '' ?></textarea>

                        </li>
                    </ul>
                    <div class="btn--long btn--block">
                        <button type="submit" class="btn btn--primary btn--hard btn--full">Submit</button>
                    </div>
                    
                </form>
            </div>
        </section>
        <!-- end contact -->
            
        <footer class="site-footer">
            <small class="copyright">&copy;myfolio</small>
        </footer>
            

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <!-- /*<script data-main="resources/js/main" src="vendors/requirejs/require.js"></script>*/ -->
        <script src="resources/js/min/toucheffects.min.js"></script>
        <script src="resources/js/responsive-nav.js"></script>
        <script src="resources/js/fastclick.js"></script>
        <script src="resources/js/scroll.js"></script>
        <script src="resources/js/fixed-responsive-nav.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
