<div class="container">
    <div class="topHeader">
        <a href="<?php print base_path(); ?>" class="pull-left logo"><img src="<?php print base_path() . path_to_theme(); ?>/images/logo.png" alt="RSA" class="img-responsive" /></a>
        <div class="pull-right">
            <div class="navbar" role="navigation">
                <div class="top-search text-right">
<!--                    <span class="lang"><a href="#">Ar</a> | <a href="#">En</a></span> -->
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
                        <?php 
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
<p>&nbsp;</p>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1><?php print $title; ?></h1>
            <?php print render($page['content']); ?>
        </div>
    </div>
</div>
<!-- Footer 2 -->
<?php include 'footer.php';?>