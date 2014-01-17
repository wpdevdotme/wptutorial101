<?php
/**
 * wp-tutorial-101 - Tutorial Page
 * @author Adrian S. (https://www.amsquared.co.uk/)
 * @version 1.0
 */

include_once 'db.php'; global $Tutorials; $i=0;

function embed_video($url){
    if( strpos($url, 'blip.tv') > 0 ){ //embed blip.tv
        return '<iframe class="video" src="' . $url . '?autoStart=true" width="600" height="276" frameborder="0" allowfullscreen></iframe>';
    }

    if( strpos($url, 'youtube.com') > 0 ){ //embed youtube.com
        return '<iframe width="640" height="360" src="' . $url . '" frameborder="0" allowfullscreen></iframe>';
    }
}

$otut_id = intval($_GET['tut']); $tut_id= $otut_id -1;

if( isset( $Tutorials[$tut_id] ) ){
    $tutorial = $Tutorials[$tut_id];

    $next_class = isset($Tutorials[$tut_id+1]) ? '' : 'disabled';
    $prev_class = isset($Tutorials[$tut_id-1]) ? '' : 'disabled';

    $prev_name = isset($Tutorials[$tut_id-1]) ? ucwords( $Tutorials[$tut_id-1][0] ) : '';
    $next_name = isset($Tutorials[$tut_id+1]) ?  ucwords( $Tutorials[$tut_id+1][0] ) : '';

}
else {
    include_once '404.php'; exit;
}

?>
<!DOCTYPE html>
<html class="full" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="WordPress Tutorial 101, <?php echo $tutorial[0]; ?>"/>
    <meta name="author" content="Adrian S."/>

    <title><?php echo $tutorial[0]; ?> | WP Tutorial 101</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700" rel="stylesheet" type="text/css"/>

    <link href="css/full.css" rel="stylesheet"/>
    <link href="css/custom.css" rel="stylesheet"/>

    <link rel="icon" href="images/favicon.png" type="image/png"/>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png"/>
</head>

<body class="single-tutorial">

<a id="menu-toggle" href="#" class="btn btn-default btn-md toggle">
    <i class="fa fa-align-justify"></i> Open menu
</a>

<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" title="back to all the tutorials">WP Tutorial 101</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-branded">
                <li class="separator"><a>/</a></li>
                <li><a><?php echo ucwords( $tutorial[0] ); ?></a></li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li class="<?php echo $prev_class; ?>">
                    <a href="tutorial.php?tut=<?php echo $otut_id-1; ?>" title="<?php echo $prev_name; ?>">&larr; Previous</a>
                </li>
                <li>
                    <a href="#" onclick="window.location.reload();" title="reload tutorial"><span class="fa fa-refresh"></span></a>
                </li>
                <li class="<?php echo $next_class; ?>">
                    <a href="tutorial.php?tut=<?php echo $otut_id+1; ?>" title="<?php echo $next_name; ?>">Next &rarr;</a>
                </li>
                <li><a href="#" class="close-menu">X Close menu</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page content goes here -->
<div class="tutorial-show" id="tutorialMainVideo">
    <?php echo embed_video( $tutorial[1] ); ?>
</div>
<!-- Page content goes here -->

<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function(){ $('#menu-toggle, .close-menu').click(function(){ $('.navbar').slideToggle(350); }); });
</script>
<!-- JavaScript -->

</body>
</html>