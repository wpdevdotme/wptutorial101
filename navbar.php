<?php
/**
 * wp-tutorial-101 - Navbar file
 * @author Adrian S. (https://www.amsquared.co.uk/)
 * @version 1.0
 */

?>
<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">WP Tutorial 101</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#tutorials-list">Tutorials</a></li>
                <li><a href="#about-this">About</a></li>
                <li><a href="#credits">Credits</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>