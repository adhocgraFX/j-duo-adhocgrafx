<?php defined( '_JEXEC' ) or die; 

// variables
$doc = JFactory::getDocument(); 
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// Add JavaScript Frameworks
// JHtml::_('bootstrap.framework');

// load sheets and scripts
$doc->addStyleSheet($tpath.'/css/j-template.css');
?>

<!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
    <!-- typekit fonts -->
    <script type="text/javascript" src="//use.typekit.net/zdh2try.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/print.css" type="text/css" media="print"/>
    <jdoc:include type="head" />
</head>

<body id="print">

<header>
    <div class="logo-text">
        <h1>adhocgraFX | Fotografien</h1>
    </div>
</header>
<div class="main">
    <jdoc:include type="message" />
    <jdoc:include type="component" />
</div>
<footer>
    <p style="color:white">JDuo | 2014 | adhocgraFX | &copy; | alle Rechte vorbehalten</p>
</footer>

</body>

</html>