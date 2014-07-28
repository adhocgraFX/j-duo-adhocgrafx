<?php defined( '_JEXEC' ) or die; 

// variables
$doc = JFactory::getDocument(); 
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// load sheets and scripts
$doc->addStyleSheet($tpath.'/css/j-template.css');

?>

<!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
    <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Fira+Sans:300,300i,400,400i,500,500i,700,700i">
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