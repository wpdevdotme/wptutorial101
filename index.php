<?php
/**
 * wp-tutorial-101 - Index File
 * @author Adrian S. (https://www.amsquared.co.uk/)
 * @version 1.0
 */

include_once 'db.php';

global $Tutorials; $i=1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="WordPress Tutorial 101"/>
    <meta name="author" content="Adrian S."/>

    <title>WP Tutorial 101 | Get you know to WordPress</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700" rel="stylesheet" type="text/css">

    <link href="css/round-about.css" rel="stylesheet"/>
    <link href="css/custom.css" rel="stylesheet"/>

    <link rel="icon" href="images/favicon.png" type="image/png"/>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png"/>
</head>

<body>

<?php include_once 'navbar.php'; ?>

<div class="container container-home">

    <div class="row" id="tutorials-list">

        <div class="col-lg-12">
            <h2 class="page-header">The Tutorials <small><em>click on images below to watch the videos</em></small></h2>
        </div>

        <?php foreach ($Tutorials as $tut): ?>
        <div class="col-lg-4 col-sm-4 tutorial-listing">
            <p class="align-center">
                <a href="tutorial.php?tut=<?php echo $i; ?>" target="_blank">
                    <img class="img-circle img-responsive img-number" src="images/numbers/<?php echo $i; ?>.jpg"/>
                    <img class="img-circle img-responsive img-preview" src="images/previews/<?php echo $tut[2]; ?>">
                </a>
            </p>
            <h3 class="align-center"><a href="tutorial.php?tut=<?php echo $i; ?>" target="_blank"><?php echo $tut[0]; ?></a></h3>
            <p><?php echo $tut[3]; $i++; ?></p>
        </div>
        <?php endforeach; ?>

    </div>

    <div class="row" id="about-this">

        <div class="col-lg-12">
            <h2 class="page-header">About <small><em>some words on this project</em></small></h2>
            <p>
                This website is a collection of tutorials from different parts of the web, filtered and tailored in a compelling way by the <a href="http://wpdev.me/team/">WPDev team </a>;
                starting from the level of the complete beginner up to advanced WordPress internals and core settings, with the main aim to help people like you,
                to get to know WordPress.
            </p>
            <p>
                You can use it to learn about the <a href="http://wordpress.org/" target="_blank">WordPress CMS</a> at your own pace,
                or help your non-techie friends and/or clients make the first steps inside this beautiful publishing platform.
            </p>
            <p>
                Fell free to <a href="#share-tutorials-site">share</a>, discuss and <a href="#github-repo">post your opinion/suggestion</a>.
            </p>
            <p id="share-tutorials-site"> Share this awesome tutorials site with your friends: <br/></p>
            <div class="share-buttons">
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://wptutorial101.wpdev.me/" data-text="learn wordpress administration today" data-via="wpdevdotme" data-dnt="true">Tweet</a>
                &nbsp;&nbsp;&nbsp;
                <div class="fb-like" data-href="http://wptutorial101.wpdev.me/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                &nbsp;&nbsp;&nbsp;
                <div class="g-plusone" data-annotation="inline" data-width="200"></div>
            </div>
        </div>

    </div>

    <hr>

    <div class="row" id="credits">

        <div class="col-lg-12">
            <h2 class="page-header">Credits <small><em>people who made this possible</em></small></h2>
            <ul style="list-style-type: none; padding-left: 0px;">
                <li>Thanks to <a href="http://ma.tt/" target="_blank">Matthew Mullenweg</a>  for creating WordPress</li>
                <li>Thanks to <a href="http://markdotto.com/" target="_blank">Mark Otto</a> and <a href="http://byfat.xxx/" target="_blank">Jacob Thornton</a>  for creating Bootstrap</li>
                <li>Thanks to <a href="http://ejohn.org/" target="_blank">John Resig</a> for creating jQuery</li>
                <li>Thanks to <a href="http://torvalds-family.blogspot.ro/" target="_blank">Linus Torvalds</a>  for creating Git and to <a href="http://tom.preston-werner.com/" target="_blank">Tom Preston-Werner</a> , <a href="http://errtheblog.com/" target="_blank">Chris Wanstrath and PJ Hyett</a> for creating GitHub</li>
                <li>Thanks to <a href="https://twitter.com/timberners_lee" target="_blank">Tim Berners-Lee</a>  for inventing the World Wide Web</li>
                <li>&nbsp;</li>
                <li>Thanks to <a href="http://wp.tutsplus.com/author/shawn/" target="_blank">Shawn Hesketh</a> for publishing the WordPress 101 tutorial series </li>
                <li>Thanks to <a href="http://wpdev.me/team/" target="_blank">the WPDev team</a> for polishing and maintaining this project </li>
                <li>&nbsp;</li>
                <li>Thanks to <em>You</em> for taking your time to unfold this web page. We hope you enjoyed it and it will help you climb new peaks.</li>
            </ul>

        </div>

    </div>

    <div class="row" id="contact">

        <div class="col-lg-12">
            <h2 class="page-header">Contact <small><em>get in touch</em></small></h2>
            <p>
                If you have suggestions, or want to send us a message regarding this project email us at <a href="mailto:support@wpdev.me" class="mail-link">support@wpdev.me</a>.<br/>
                If you'd like to submit a pull request or you noticed a bug somewhere on a page, you're more then welcome to <a href="https://github.com/wpdevdotme/wptutorial101/issues" target="_blank">submit an issue</a>.
            </p>
        </div>

    </div>

</div> <!-- /container -->

<footer>
    <div class="container container-home">
        <div class="row">
            <div class="col-lg-12">
                <p class="align-center">This is a copy-free website, distributed under the terms of <a href="https://www.gnu.org/licenses/gpl-2.0.html" target="_blank">GPL v2</a>.</p>
                <p class="align-center"><small>feel free to copy, distribute it and make it yours</small></p>
                <p class="align-center bottom-logos">
                    <img src="images/wordpress-logo-32-blue.png"/>
                    <img src="images/logos/stock-xchng-logo.png"/>
                    <img src="images/logos/html5logo.png"/>
                    <img src="images/logos/css3logo.png"/>
                    <img src="images/logos/boostrap_logo.png"/>
                    <img src="images/logos/wpdevlogo.png"/>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=182604888607128";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<script type="text/javascript">
    (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
</script>
<!-- JavaScript -->
</body>
</html>