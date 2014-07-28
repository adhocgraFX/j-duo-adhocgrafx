<?php
header('Content-type: text/css');

// get template params
$brandcolor = $this->params->get('brandcolor');
$maxwidth = $this->params->get('maxwidth');
$basefontsize = $this->params->get('basefontsize');
$bodybackground = $this->params->get('bodybackground');

?>

<style type="text/css">

    html {
        font-size: <?php echo $basefontsize;?>%;
    }

    h1 {
        color: <?php echo $brandcolor;?> !important;
    }

    @media screen and (min-width: 48em){

        <?php if ($bodybackground): ?>
            body {
                background: url(<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($bodybackground);?>) center top no-repeat fixed;
                background-size: cover;
            }
        <?php endif; ?>

        .wrapper-push {
            max-width: <?php echo $maxwidth;?>em;
        }

    }

</style>