<?php defined( '_JEXEC' ) or die; 

/**
 * @copyright	JDuo responsive template © 2014 adhocgraFX / Johannes Hock - All Rights Reserved.
 * @license		GNU/GPL
**/

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// get template params
$title = $this->params->get('title');
$logo = $this->params->get('logo');
$logotitle = $this->params->get('logotitle');
$textresizer = $this->params->get('textresizer');
$linkpad = $this->params->get('linkpad');

// Add Joomla! JavaScript Framework
JHtml::_('bootstrap.framework');

// Add current user information
$user = JFactory::getUser();

// template css
$doc->addStyleSheet($tpath.'/css/j-template.css');

// modernizr mit html5-shiv must be in the head
$doc->addScript($tpath.'/js/modernizr-2.8.2.min.js');

?>

<!doctype html>

<!-- modernizr -->
<!--[if IEMobile]> <html lang="<?php echo $this->language; ?>" class="iemobile"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $this->language; ?>" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $this->language; ?>" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $this->language; ?>" class="no-js" xmlns="http://www.w3.org/1999/html"><!--<![endif]-->

<head>

    <jdoc:include type="head" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- typekit fonts -->
    <script type="text/javascript" src="//use.typekit.net/zdh2try.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!-- Bildverkleinerung über mobify cdn -->
    <script>!function(a,b,c,d,e){function g(a,c,d,e){var f=b.getElementsByTagName("script")[0];a.src=e,a.id=c,a.setAttribute("class",d),f.parentNode.insertBefore(a,f)}a.Mobify={points:[+new Date]};var f=/((; )|#|&|^)mobify=(\d)/.exec(location.hash+"; "+b.cookie);if(f&&f[3]){if(!+f[3])return}else if(!c())return;b.write('<plaintext style="display:none">'),setTimeout(function(){var c=a.Mobify=a.Mobify||{};c.capturing=!0;var f=b.createElement("script"),h="mobify",i=function(){var c=new Date;c.setTime(c.getTime()+3e5),b.cookie="mobify=0; expires="+c.toGMTString()+"; path=/",a.location=a.location.href};f.onload=function(){if(e)if("string"==typeof e){var c=b.createElement("script");c.onerror=i,g(c,"main-executable",h,mainUrl)}else a.Mobify.mainExecutable=e.toString(),e()},f.onerror=i,g(f,"mobify-js",h,d)})}(window,document,function(){var a=/webkit|msie\s10|(firefox)[\/\s](\d+)|(opera)[\s\S]*version[\/\s](\d+)|3ds/i.exec(navigator.userAgent);return a?a[1]&&+a[2]<4?!1:a[3]&&+a[4]<11?!1:!0:!1},
            // path to mobify.js
            "//cdn.mobify.com/mobifyjs/build/mobify-2.0.0.min.js",
            // calls to APIs go here
            function() {
                var capturing = window.Mobify && window.Mobify.capturing || false;
                if (capturing) {
                    Mobify.Capture.init(function(capture){
                        var capturedDoc = capture.capturedDoc;
                        var images = capturedDoc.querySelectorAll("img, picture");
                        Mobify.ResizeImages.resize(images);
                        // Render source DOM to document
                        capture.renderCapturedDoc();
                    });
                }
            });
    </script>

    <link rel="shortcut icon" href="<?php echo $tpath; ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
    <!-- Win8 tile 144x144 -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $tpath; ?>/images/tile-icon.png">

    <!-- load css options -->
    <?php include_once ('css/j-template.css.php'); ?>

</head>
  
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?> sidebar-push">

<div class="wrapper block-group">

    <header role="banner">
        <button id="showLeftPush"></button>
        <div class="logo-text">
            <a href="<?php echo $this->baseurl ?>">
                <h1><?php echo htmlspecialchars($title); ?></h1>
            </a>
        </div>
        <button id="showRightPush"></button>
    </header>

    <nav class="sidebar" id="sidebar-s1" role="navigation">
        <div class="logo-image">
            <?php if ($logo): ?>
                <a href="<?php echo $this->baseurl ?>">
                    <img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo htmlspecialchars($logotitle); ?>" />
                </a>
            <?php endif; ?>
        </div>
        <jdoc:include type="modules" name="nav" />
    </nav>

    <div class="wrapper-layout">

        <?php if ($this->countModules('slideshow')): ?>
            <section class="rslides_container hide-on-mobile" role="complementary">
                <jdoc:include type="modules" name="slideshow" />
            </section>
        <?php endif; ?>

        <?php if ($this->countModules('top_row')): ?>
            <section class="top" role="complementary">
                <jdoc:include type="modules" name="top_row" style="jduo" />
            </section>
        <?php endif; ?>

        <section class="wrapper-push">

            <div class="main" role="main">
                <jdoc:include type="message" />

                <?php if ($this->countModules('breadcrumbs')): ?>
                    <div class="breadcrumbs-pad" role="navigation">
                        <jdoc:include type="modules" name="breadcrumbs" />
                    </div>
                <?php endif; ?>

                <jdoc:include type="component" />
            </div>

            <aside class="sidebar" id="sidebar-s2" role="complementary">
                <div class="search-pad">
                    <?php if ($this->countModules('search')): ?>
                        <jdoc:include type="modules" name="search" style="jduo"  />
                    <?php endif; ?>
                </div>

                <?php if ($this->countModules('sidebar')): ?>
                    <jdoc:include type="modules" name="sidebar" style="jduo"  />
                <?php endif; ?>

                <?php if ($textresizer == 1): ?>
                    <div class="textresizer-pad">
                        <ul class="textresizer" id="textsizer-embed">
                            <li><a href="#nogo" class="small-text" title="small"><span class="icon-angle-down"></span><p hidden>small</p></a></li>
                            <li><a href="#nogo" class="default-text" title="default"><span class="icon-text-height"></span><p hidden>default</p></a></li>
                            <li><a href="#nogo" class="large-text" title="large"><span class="icon-angle-up"></span><p hidden>large</p></a></li>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if ($linkpad == 1): ?>
                    <div class="link-pad">
                        <ul>
                            <li><a href="https://plus.google.com/u/0/111658539092346200948/posts/p/pub" target="_blank" title="google plus"><span class="icon-google-plus-square"></span><p hidden>google plu</p></a></li>
                            <li><a href="https://twitter.com/adhocgraFX" target="_blank" title="twitter"><span class="icon-twitter"></span><p hidden>twitter</p></a></li>
                            <li><a href="https://github.com/adhocgraFX" target="_blank" title="github"><span class="icon-github"></span><p hidden>github</p></a></li>
                            <li><a href="http://kunstimunterricht.de" target="_blank" title="Kunst im Unterricht"><span class="icon-external-link"></span><p hidden>Kunst im Unterricht</p></a></li>
                        </ul>
                    </div>
                <?php endif; ?>
            </aside>
        </section>

        <?php if ($this->countModules('bottom_row')): ?>
            <section class="bottom" role="complementary">
                <jdoc:include type="modules" name="bottom_row" style="jduo" />
            </section>
        <?php endif; ?>

    </div>

    <?php if ($this->countModules('footer')): ?>
        <footer role="contentinfo">
            <jdoc:include type="modules" name="footer" style="jduo" />
        </footer>
    <?php endif; ?>

    <a href="#" class="go-top"><span class="icon-chevron-up"></span><p hidden>Top</p></a>
</div>

<jdoc:include type="modules" name="debug" />

<!--  load plugin scripts -->
<script type="text/javascript" src="<?php echo $tpath.'/js/template.js.php';?>"></script>

<!-- load plugin options -->
<?php include_once ('js/plugin.js.php'); ?>

</body>

</html>
