<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Menu Test</title>

    <!-- Apply Responsive Menu CSS -->
    <link href="css/responsive-menu.css" rel="stylesheet">

    <!-- Unessential CSS - Just here to make this sample page prettier -->
    
    <link href="css/styles.css" rel="stylesheet">

    <!-- Load modernizr or html5shiv -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="../lib/html5shiv/html5shiv.js"></script>-->

    <!-- Load jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="lib/jquery-legacy/jquery.js"><\/script>')</script>

    <!-- Load Responsive Menu -->
    <script src="js/responsive-menu.js" type="text/javascript"></script>

    <!-- Setup Responsive Menu -->
    <script>
        jQuery(function ($) {
            var menu = $('.rm-nav').rMenu({

                // Optional Settings

                /**
                 * Minimum width for expanded layout in pixels - String
                 * The media query in css file should be changed to match this
                 * Must be in pixels and include px units if not using Modernizr.
                 * @default '769px'
                 */
                minWidth: '960px',

                /**
                 * The opening and closing speed of the menus in milliseconds
                 * @default 400
                 */
                //transitionSpeed: 400,

                /**
                 * The jQuery easing function - used with jQuery transitions
                 * @default 'swing'
                 * @options 'swing', 'linear'
                 */
                //jqueryEasing: 'swing',

                /**
                 * The CSS3 transitions easing function - used with CSS3 transitions
                 * @default 'ease'
                 */
                //css3Easing: 'ease',

                /**
                 * Use button as toggle link - instead of text
                 * @default true
                 */
                //toggleBtnBool: true,

                /**
                 * The Toggle Link selector
                 * @default '.rm-toggle'
                 */
                //toggleSel: '.rm-toggle',


                /**
                 * The menu/sub-menu selector
                 * @default 'ul'
                 */
                //menuSel: 'ul',

                /**
                 * The menu items selector
                 * @default 'li'
                 */
                //menuItemsSel: 'li',

                /**
                 * The class the plugin adds to the container of the nav element
                 * @default 'rm-container'
                 */
                //containerClass: 'rm-container',

                /**
                 * The class the plugin adds to the nav element
                 * @default 'rm-nav'
                 */
                //navElementClass: 'rm-nav',

                /**
                 * The class the plugin adds to the top menu element
                 * @default 'rm-top-menu'
                 */
                //topMenuClass: 'rm-top-menu',

                /**
                 * The class applied to menu items that contain a sub-menu
                 * @default 'rm-parent'
                 */
                //parentClass: 'rm-parent',

                /**
                 * The class applied to container element to trigger expanded layout
                 * @default 'rm-layout-expanded'
                 */
                //expandedClass: 'rm-layout-expanded',

                /**
                 * The class applied to container element to trigger contracted layout
                 * @default 'rm-layout-contracted'
                 */
                //contractedClass: 'rm-layout-contracted',

                /**
                 * Use CSS3 animation/transitions class name
                 * @default 'rm-css-animate'
                 * Do not use animation/transitions: ''
                 */
                //animateClass: 'rm-css-animate',

                /**
                 * Force GPU Acceleration class name
                 * @default 'rm-accelerate'
                 * Do not force: ''
                 */
                //accelerateClass: 'rm-accelerate',

                /**
                 * Use development mode - outputs information to html element on test page
                 * Must uncomment appropriate if statements in the jQuery code
                 * @default false
                 */
                //developmentMode: false

            });
        });
    </script>
</head>
<body>

    <header>
        <div class="wrapper">
            <div class="brand">
                <p><a href="#" class="logo">samoningi</a></p>
            </div>

            <!-- START Responsive Menu HTML -->
            <div class="rm-container">
                <a class="rm-toggle rm-button rm-nojs" href="#">Menu</a>

                <nav class="rm-nav rm-nojs rm-lighten">
                   
                                    <ul>
                                        <li><a href="#">Sub Sub Item 1</a></li>
                                        <li><a href="#">Sub Sub Item 2</a></li>
                                        <li><a href="#">Sub Sub Item 2</a></li>
                                        <li><a href="#">Sub Sub Item 2</a></li>
                                     
                                    </ul>
                               
                </nav>
            </div><!-- .rm-container -->
            <!-- End Responsive Menu HTML -->
        </div><!-- .wrapper -->
    </header>
  
</body>
</html>