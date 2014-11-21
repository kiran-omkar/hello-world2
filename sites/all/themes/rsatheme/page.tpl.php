<div class="container">
    <div class="topHeader">
        <a href="<?php print base_path(); ?>" class="pull-left logo"><img src="<?php print base_path() . path_to_theme(); ?>/images/logo.png" alt="RSA" class="img-responsive" /></a>
        <div class="pull-right">
            <div class="navbar" role="navigation">
                <div class="top-search text-right">
                    <span class="lang"><a href="#">Ar</a> | <a href="#">En</a></span> 
                    <span class="search"><input type="search" placeholder="Search..."  /></span>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".res-main-menu">
                        <img src="<?php print base_path() . path_to_theme(); ?>/images/menu-icon.jpg" alt="MENU" />
                    </button>
                    <div class="res-main-menu cp-purpal-rain collapse">
                        <div class="top-menu-header">
                            <img src="<?php print base_path() . path_to_theme(); ?>/images/white-logo.png" alt="" />
                            <a href="#" class="close-menu" data-toggle="collapse" data-target=".res-main-menu" title="close">X close</a>
                        </div>
                        <ul>
                            <li><a href="#">Products & Services</a>
                                <ul>
                                    <li><a href="#">Overview</a></li>
                                    <li><a href="#">Personal Insurance</a></li>
                                    <li><a href="#">Commercial Insurance</a></li>
                                    <li><a href="#">Risk Management and Claims</a></li>
                                </ul>
                            </li>
                            <li><a href="/about-us">About us</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="/careers">Careers</a></li>
                            <li><a href="/contact-us">Contact</a></li>
                        </ul>
                        
                        <div class="small-heading">Connect with us</div>
                        <ul>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">LinkedIn</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Skype</a></li>
                        </ul>
                        <ul class="footer">
                            <li><a href="#">Terms & conditions</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Accessibility</a></li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-collapse collapse">
                    <!--<ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Products & Services <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Overview</a></li>
                                <li><a href="#">Personal Insurance</a></li>
                                <li><a href="#">Commercial Insurance</a></li>
                                <li><a href="#">Risk Management and Claims</a></li>
                            </ul>
                        </li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Media</a></li>
                        <li><a href="#">Careers</a></li>
                        <li class="last"><a href="#">Contact</a></li>
                    </ul>-->
                    <?php
                    $main_menu = variable_get('menu_main_links_source', 'main-menu');
                    $tree = menu_tree($main_menu);
                    print drupal_render($tree);

                    //print theme('links', array('links'=>$main_menu,'attributes' => array('class' => array('nav navbar-nav')))); ?>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<!-- slider -->
<div class="header">
    <img src="<?php print base_path() . path_to_theme(); ?>/images/slide1.jpg" alt="RSA" class="img-responsive" />
</div>
<!-- Scrolling Boxes -->

<div class="container">
    <div class="row">
        <p>&nbsp;</p>
        <div class="col-lg-12">
            <?php print render($page['content']); ?>
        </div>
    </div>
</div>
<!-- Footer 2 -->
<div class="footer2">
    <div class="container">
        <div class="col-sm-6">
            <h3>Products and Services</h3>
            <ul class="col-sm-5">
                <li><a href="/products-and-services/overview">Overview</a></li>
                <li><a href="/products-and-services/personal-insurances">Personal Insurance</a></li>
                <li><a href="/products-and-services/home-insurances">Home Insurance</a></li>
                <li><a href="/node/11">Motor Insurance</a></li>
                <li><a href="/node/12">Personal Accident Insurance</a></li>
                <li><a href="#">Yacht and Pleasure Craft Insurance</a></li>
            </ul>
            <ul class="col-sm-7">
                <li><a href="#">Commercial Insurance</a></li>
                <li><a href="#">Material Damage And Business Interruption Insurance</a></li>
                <li><a href="#">Workmen's Compensation Insurance</a></li>
                <li><a href="#">Public And Product Liability Insurance</a></li>
                <li><a href="#">Marine Insurance</a></li>
                <li><a href="#">Medical Insurance</a></li>
                <li><a href="#">Employee Dishonesty And Money Insurance</a></li>
                <li><a href="#">Risk Management and Claims</a></li>
            </ul>
        </div>
        <div class="col-sm-6">
            <h3>About RSA</h3>
            <ul class="col-sm-6">
                <li><a href="#">RSA in Saudi Arabia</a></li>
                <li><a href="#">International Perspective</a></li>
                <li><a href="#">Clear Customer Proposition</a></li>
                <li><a href="#">Product Strength</a></li>
                <li><a href="#">Financial Strength</a></li>
            </ul>
            <ul class="col-sm-6">
                <li><a href="#">Embracing Localisation</a></li>
                <li><a href="#">Employer of Choice</a></li>
                <li><a href="#">Business Principles and Commitments</a></li>
                <li><a href="#">Principles</a></li>
                <li><a href="#">Commitments</a></li>
                <li>Media</li>
                <li><a href="#">Group news</a></li>
                <li><a href="#">Local news</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Common Footer -->
<div class="footer">
    <div class="container">
        <p class="text-center ft-links">
            <a href="#">Contact us</a>   | <a href="#">Sitemap</a>   | <a href="#">Links</a>   | <a href="#">Accessibility</a>   | <a href="#">Privacy policy</a>   | <a href="#">Terms & Conditions</a>  
        </p>

        <p class="text-center sm">
            <a href="#" target="_blank"><img src="<?php print base_path() . path_to_theme(); ?>/images/twitter.png" alt="twitter" /> follow us</a> | <a href="#" target="_blank"><img src="<?php print base_path() . path_to_theme(); ?>/images/linkedin.png" alt="linkedin" /> join us</a>
        </p>

        <p class="copyrights">
            &copy; Al Alamiya for Cooperative Insurance Company. All rights reserved.
        </p>
    </div>
</div>