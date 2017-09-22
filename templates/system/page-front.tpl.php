<?php
/**
 * @file
 * Displays a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $css: An array of CSS files for the current page.
 * - $directory: The directory the theme is located in, e.g. themes/garland or
 *   themes/garland/minelli.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Page metadata:
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   element.
 * - $head: Markup for the HEAD element (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $body_classes: A set of CSS classes for the BODY tag. This contains flags
 *   indicating the current layout (multiple columns, single column), the
 *   current path, whether the user is logged in, and so on.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled in
 *   theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $mission: The text of the site mission, empty when display has been
 *   disabled in theme settings.
 *
 * Navigation:
 * - $search_box: HTML to display the search box, empty if search has been
 *   disabled.
 * - $primary_links (array): An array containing primary navigation links for
 *   the site, if they have been configured.
 * - $secondary_links (array): An array containing secondary navigation links
 *   for the site, if they have been configured.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $left: The HTML for the left sidebar.
 * - $breadcrumb: The breadcrumb trail for the current page.
 * - $title: The page title, for use in the actual HTML content.
 * - $help: Dynamic help text, mostly for admin pages.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - $content: The main content of the current Drupal page.
 * - $right: The HTML for the right sidebar.
 * - $node: The node object, if there is an automatically-loaded node associated
 *   with the page, and the node ID is the second argument in the page's path
 *   (e.g. node/12345 and node/12345/revisions, but not comment/reply/12345).
 *
 * Footer/closing data:
 * - $feed_icons: A string of all feed icons for the current page.
 * - $footer_message: The footer message as defined in the admin settings.
 * - $footer : The footer region.
 * - $closure: Final closing markup from any modules that have altered the page.
 *   This variable should always be output last, after all other dynamic
 *   content.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
    <head>
        <?php print $head; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title><?php print $head_title; ?></title>
            <?php print $styles; ?>
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"></link>
            <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet"></link>
            <?php print $scripts; ?>
            <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?></script>
    </head>
    <body class="<?php print $body_classes; ?>">

        <header>
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="social-media pull-left">
                                <ul class="ul-div">
                                    <li>
                                        <a href="https://www.facebook.com/sobellrhodes?fref=ts"><span class="fa fa-facebook-square facebook" aria-hidden="true"></span></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/SobellRhodesLLP"><span class="fa fa-twitter-square twitter" aria-hidden="true"></span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/sobell-rhodes-llp"><span class="fa fa-linkedin-square linkedin" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- /col -->
                        <div class="col-sm-8">
                            <div class="contact pull-right">
                                <ul class="ul-div hidden-xs">
                                    <li>
                                        <span class="fa fa-phone phone" aria-hidden="true"></span><a href="tel:<?php print $company_phone ?>"><?php print $company_phone ?></a>
                                    </li>
                                    <li>
                                        <span class="fa fa-envelope-o mail" aria-hidden="true"></span><a href="mailto:<?php print $site_mail ?>"><?php print $site_mail ?></a>
                                    </li>
                                </ul>
                                <ul class="ul-div visible-xs">
                                    <li>
                                        <a href="tel:<?php print $company_phone ?>"><span class="fa fa-phone phone" aria-hidden="true"></span></a>
                                    </li>
                                    <li>
                                        <a href="mailto:<?php print $site_mail ?>"><span class="fa fa-envelope-o mail" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- /col -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div><!-- /top-header -->


            <div class="main-navbar container">
                <div class="row">
                    <nav class="navbar navbar-default">

                        <div class="desk-nav hidden-xs">
                            <div class="navbar-header">
                                <?php if (!empty($logo)) { ?>
                                    <a href="<?php print $front_page; ?>" title="<?php
                                    print t($site_name);
                                    ;
                                    ?>" rel="home" id="logo" class="img-responsive logo">
                                        <img src="<?php print $logo; ?>" alt="<?php print t($site_name); ?>" />
                                    </a>
                                <?php } ?>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <div id="navigation" class="menu <?php
                                if (!empty($primary_links)) {
                                    print "withprimary";
                                }
                                ?> ">
                                         <?php if (!empty($primary_links)): ?>
                                        <div id="primary" class="clear-block">
                                            <?php print theme('links', $primary_links, array('class' => 'links primary-links')); ?>
                                        </div>
                                    <?php endif; ?>

                                </div> <!-- /navigation -->

                            </div>
                        </div>

                        <div class="mob-nav visible-xs">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">


                                <!-- header-logo -->
                                <div id="logo" class="logo">
                                    <?php if (!empty($logo)) { ?>
                                        <a href="<?php print $front_page; ?>" title="<?php print t($site_name); ?>" rel="home" class="logo-link">
                                            <img src="<?php print $logo; ?>" alt="<?php print t($site_name); ?>" />
                                        </a>
                                    <?php } ?>

                                </div>
                                <!-- /header-logo -->

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span> 
                                </button>

                            </div>
                            <!-- Collection of nav links and other content for toggling -->
                            <div id="navbarCollapse" class="collapse navbar-collapse">
                                <?php print theme('links', $primary_links, array('class' => 'links primary-links nav navbar-nav')); ?>

                            </div>
                        </div>
                    </nav>	
                </div>
            </div>

        </header>



        <div id="page" class="container">


            <div id="container" class="clear-block">
                <?php if (!empty($left)): ?>
                    <div id="sidebar-left" class="column sidebar download">
                        <?php print $left; ?>
                    </div> <!-- /sidebar-left -->
                <?php endif; ?>

                <div id="main" class="column"><div id="main-squeeze">
                        <?php if (!empty($breadcrumb)): ?><div id="breadcrumb"><?php print $breadcrumb; ?></div><?php endif; ?>
                        <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>

                        <div id="content">
                            <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                            <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
                            <?php
                            if (!empty($messages)): print $messages;
                            endif;
                            ?>
                            <?php
                            if (!empty($help)): print $help;
                            endif;
                            ?>
                            <div id="content-content" class="clear-block">
                                <?php print $content; ?>
                            </div> <!-- /content-content -->
                            <?php print $feed_icons; ?>
                        </div> <!-- /content -->

                    </div></div> <!-- /main-squeeze /main -->

                <?php if (!empty($right)): ?>
                    <div id="sidebar-right" class="column sidebar">
                        <?php print $right; ?>
                    </div> <!-- /sidebar-right -->
                <?php endif; ?>

            </div> <!-- /container -->



        </div> <!-- /page -->

        <footer class="footer-wrapper" >
            <div class="container">

                <div class="row">
                    <div class="col-md-8 col-sm-12 ">

                        <?php if (!empty($secondary_links)): ?>
                            <div id="secondary" class="clear-block">
                                <?php print theme('links', $secondary_links, array('class' => 'links secondary-links ul-div')); ?>
                            </div>
                        <?php endif; ?>   


                        <?php
                        if (!empty($footer)) {
                            print $footer;
                        }
                        ?>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="social-media">
                            <ul class="text-center list-inline">
                                <li>
                                    <a href="https://www.facebook.com/sobellrhodes?fref=ts"><span class="fa fa-2x fa-facebook-square facebook" aria-hidden="true"></span></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/SobellRhodesLLP"><span class="fa fa-2x fa-twitter-square twitter" aria-hidden="true"></span></a>
                                </li>
                                <li>
                                    <a href="http://www.youtube.com/user/SobellRhodesLLP"><span class="fa fa-2x fa-youtube-square youtube" aria-hidden="true"></span></a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/107252012201297601658/posts"><span class="fa fa-2x fa-google-plus-square google-plus" aria-hidden="true"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo">
                            <img src="http://www.dev.sobellrhodes.gridhosted.co.uk/wp-content/themes/sobellrhodes/resources/img/logo-white.png" alt=""/>
                        </div>
                        <div class="developer">
                            <p class="text-center">Designed and Developed by <br> <a href="http://vanillaactive.com" target="_blank" >Vanilla Active</a></p>
                        </div>
                    </div>
                </div><!-- /footer -->
            </div>
            <div class="copyright text-center">
                <div class="container">
                    <?php print $footer_message; ?>
                </div>
            </div>


        </footer> <!-- /footer-wrapper -->

        <?php print $closure; ?>
        <a href="#" class="scrollToTop"></a>
    </body>
</html>
