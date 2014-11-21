<div class="container">
    <div class="topHeader">
        <a href="<?php print base_path(); ?>" class="pull-left logo"><img src="<?php print base_path() . path_to_theme(); ?>/images/logo.png" alt="RSA" class="img-responsive" /></a>
        <div class="pull-right">
            <div class="navbar" role="navigation">
                <div class="top-search text-right">
<!--                    <span class="lang"><a href="/ar">Ar</a> | <a href="">En</a></span> -->
                    <?php print render($page['header']); ?>
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
                        <!--<ul>
                            <li><a href="#">Products & Services</a>
                                <ul>
                                    <li><a href="#">Overview</a></li>
                                    <li><a href="#">Personal Insurance</a></li>
                                    <li><a href="#">Commercial Insurance</a></li>
                                    <li><a href="#">Risk Management and Claims</a></li>
                                </ul>
                            </li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>-->
                        <?php //print theme('links', array('links'=>$main_menu,'attributes' => array('class' => array(''))));
                            $main_menu = variable_get('menu_main_links_source', 'main-menu');
                            $tree = menu_tree($main_menu);
                            print drupal_render($tree);
                        ?>
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
                    //print render($page['navigation']);
                    ?>
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
<div id="slider1">
    <div class="prev-pane"><a class="btn btn-info btn-lg prev" href="#"><img src="<?php print base_path() . path_to_theme(); ?>/images/prev-icon.png" alt="" /></a></div>
    <div class="viewport">
        <ul class="overview">
            <li>
                <div class="box-item cp-grey">
                    <div class="box-item-title">&nbsp;</div>
                    <div class="box-item-body">
                        <div class="rate" style="font-size:3.2em;">
                            Personal Insurance
                        </div>
                    </div>
                    <a href="/products-and-services/personal-insurance" class="btn btn-primary btn-lg">More Information</a>
                </div>
            </li>
            <li>
                <div class="box-item cp-red">
                    <div class="box-item-title">&nbsp;</div>
                    <div class="box-item-body">
                        <div class="rate" style="font-size:3.2em;">
                            Home Insurance
                        </div>
                    </div>
                    <a href="/products-and-services/home-insurance" class="btn btn-primary btn-lg">More Information</a>
                </div>
            </li>
            <li>
                <div class="box-item cp-magenta">
                    <div class="box-item-title">&nbsp;</div>
                    <div class="box-item-body">
                        <div class="rate" style="font-size:3.2em;">
                           Motor Insurance
                        </div>
                    </div>
                    <a href="/products-and-services/motor-insurance" class="btn btn-primary btn-lg">More Information</a>
                </div>
            </li>
            <li>
                <div class="box-item cp-purpal-rain">
                    <div class="box-item-title">&nbsp;</div>
                    <div class="box-item-body">
                        <div class="rate" style="font-size:3.2em;">
                            Commercial Insurance
                        </div>
                    </div>
                    <a href="/products-and-services/commercial-insurance" class="btn btn-primary btn-lg">More Information</a>
                </div>
            </li>
            <li>
                <div class="box-item cp-deep-purpal">
                    <div class="box-item-title">&nbsp;</div>
                    <div class="box-item-body">
                        <div class="rate" style="font-size:3.2em;">
                           Marine Insurance
                        </div>
                    </div>
                    <a href="/products-and-services/marine-insurance" class="btn btn-primary btn-lg">More Information</a>
                </div>
            </li>
			<li>
                <div class="box-item cp-deep-purpal">
                    <div class="box-item-title">&nbsp;</div>
                    <div class="box-item-body">
                        <div class="rate" style="font-size:3.2em;">
                           Medical Insurance
                        </div>
                    </div>
                    <a href="/products-and-services/medical-insurance" class="btn btn-primary btn-lg">More Information</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="next-pane"><a class="btn btn-info btn-lg next" href="#"><img src="<?php print base_path() . path_to_theme(); ?>/images/next-icon.png" alt="" /></a></div>	
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-2 col-sm-3 text-center home-box1">
            <h2 class="deep-purple">Serving our <br /> customers well</h2>
            <p class="box-desc">
                Customers are the lifeblood of our business. Find out
                about some of the ways we're putting customers
                at the heart of everything we do.
            </p>

            <a href="#" class="btn btn-info btn-lg">
                Find out More
            </a>

        </div>
        <div class="col-lg-offset-2 col-sm-4 text-center home-box2">
            <h2 class="deep-purple">Corporate responsibility<br /> report 2013</h2>
            <p class="box-desc-2">
                <br />
                Read about our five-year corporate responsbility strategy <br /> 
                <strong>"Making things better together"</strong> 
            </p>

            <a href="#" class="btn btn-info btn-lg">
                Find out More
            </a>
        </div>
    </div>
    <div class="row">
        <p>&nbsp;</p>
        <?php //print render($page['content']); ?>
    </div>
</div>
<!-- Footer 2 -->
<?php include 'footer.php';?>