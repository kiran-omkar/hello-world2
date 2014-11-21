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
			<?php print theme('links', array('links'=>$main_menu,'attributes' => array('class' => array(''))));
//                        $main_menu = variable_get('menu_main_links_source', 'main-menu');
//                        $tree = menu_tree($main_menu);
//                        print drupal_render($tree);
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
					/*$main_menu = variable_get('menu_main_links_source', 'main-menu');
					$tree = menu_tree($main_menu);
					print drupal_render($tree);*/
					
					print theme('links', array('links'=>$main_menu,'attributes' => array('class' => array('nav navbar-nav')))); ?>
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

<!-- Content Body -->
    <div class="container">
        <div class="row infocust">
            <div class="col-lg-offset-2 col-sm-3 text-center home-box1">
                <h2 class="deep-purple">Serving our
                    <br />
                    customers well</h2>
                <p class="box-desc">
                    Customers are the lifeblood of our business. Find out
                      about some of the ways we're putting customers
                      at the heart of everything we do.
                </p>

                <button class="btn btn-info btn-lg">
                    Find out More
                </button>

            </div>
            <div class="col-lg-offset-2 col-sm-4 text-center home-box2">
                <h2 class="deep-purple">Corporate responsibility<br />
                    report 2013</h2>
                <p class="box-desc-2">
                    <br />
                    Read about our five-year corporate responsbility strategy
                    <br />
                    <strong>"Making things better together"</strong>
                </p>

                <button class="btn btn-info btn-lg">
                    Find out More
                </button>

            </div>
        </div>
        <div class="row">
            <p>&nbsp;</p>
        </div>
    </div>

    <div class="std cp-turquoise">

        <div class="container">

            <h1>Did you know we cover all this as standard?</h1>

            <div class="col-sm-4 prd-features">
                <div class="col-sm-3">
                    <div class="icon">
                        <img src="<?php print base_path() . path_to_theme(); ?>/images/ic-car.png" alt="" class="img-responsive" />
                    </div>
                </div>
                <div class="col-sm-9 contents">
                    <div class="title font-md">SR75,000 cover</div>
                    <div>Accidental collision or overturning</div>
                </div>
            </div>

            <div class="col-sm-4 prd-features">
                <div class="col-sm-3">
                    <div class="icon">
                        <img src="<?php print base_path() . path_to_theme(); ?>/images/ic-umberlla.png" alt="" class="img-responsive" />
                    </div>
                </div>
                <div class="col-sm-9 contents">
                    <div class="title font-md">SR75,000 cover</div>
                    <div>Accidental collision or overturning</div>
                </div>
            </div>

            <div class="col-sm-4 prd-features">
                <div class="col-sm-3">
                    <div class="icon">
                        <img src="<?php print base_path() . path_to_theme(); ?>/images/ic-sheild.png" alt="" class="img-responsive" />
                    </div>
                </div>
                <div class="col-sm-9 contents">
                    <div class="title font-md">SR75,000 cover</div>
                    <div>Accidental collision or overturning</div>
                </div>
            </div>

            <div class="col-sm-4 prd-features">
                <div class="col-sm-3">
                    <div class="icon">
                        <img src="<?php print base_path() . path_to_theme(); ?>/images/ic-check.png" alt="" class="img-responsive" />
                    </div>
                </div>
                <div class="col-sm-9 contents">
                    <div class="title font-md">SR75,000 cover</div>
                    <div>Accidental collision or overturning</div>
                </div>
            </div>

            <div class="col-sm-4 prd-features">
                <div class="col-sm-3">
                    <div class="icon">
                        <img src="<?php print base_path() . path_to_theme(); ?>/images/ic-way.png" alt="" class="img-responsive" />
                    </div>
                </div>
                <div class="col-sm-9 contents">
                    <div class="title font-md">SR75,000 cover</div>
                    <div>Accidental collision or overturning</div>
                </div>
            </div>

            <div class="col-sm-4 prd-features">
                <div class="col-sm-3">
                    <div class="icon">
                        <img src="<?php print base_path() . path_to_theme(); ?>/images/ic-home.png" alt="" class="img-responsive" />
                    </div>
                </div>
                <div class="col-sm-9 contents">
                    <div class="title font-md">SR75,000 cover</div>
                    <div>Accidental collision or overturning</div>
                </div>
            </div>

            <div class="quote text-center">
                <a href="#" class="btn btn-purpal btn-lg font-md">Get a car insurance quote</a>
            </div>

        </div>

    </div>


    <div class="prd container">
        <div class="col-lg-6" id="car">
            <h1 class="core-purple">Car Insurance</h1>

            <div class="col-lg-9 desc">
                Looking for cheaper car insurance?<br />
                You can pay as little as SAR163 a year
for car insurance

            </div>
            <div class="clearfix"></div>

            <ul class="prd-features list-unstyled"> 
                <li><i class="glyphicon glyphicon-ok core-purple"></i>FREE courtesy car as standard</li>
                <li><i class="glyphicon glyphicon-ok core-purple"></i>Up to 20% off your car insurance</li>
                <li><i class="glyphicon glyphicon-ok core-purple"></i>More then UK-based call centres</li>
                <li><i class="glyphicon glyphicon-ok core-purple"></i>24 hour windscreen cover</li>
            </ul>

            <a href="#" class="btn btn-info btn-lg font-md btnquote">Get a car insurance quote</a>

            <div class="prd-col-footer-links">

                <a href="#" class="font-md links">Find out more</a> <a href="#" class="font-md links">View all products</a>
            </div>

        </div>
        <div class="prd-images col-lg-6">
            <img src="<?php print base_path() . path_to_theme(); ?>/images/prd1.jpg" class="img1" alt="" />
            <img src="<?php print base_path() . path_to_theme(); ?>/images/prd2.jpg" class="img2" alt="" />
            <img src="<?php print base_path() . path_to_theme(); ?>/images/prd3.jpg" class="img3" alt="" />

        </div>
    </div>
    <!-- Footer 2 -->
    <div class="footer2 prd-footer2">
        <div class="container">
            <div class="col-sm-6 profoot">
                <h3>Products and Services</h3>

                <ul class="col-sm-5">
                    <li><a href="#">Overview</a></li>
                    <li><a href="#">Personal Insurance</a></li>
                    <li><a href="#">Home Insurance</a></li>
                    <li><a href="#">Motor Insurance</a></li>
                    <li><a href="#">Personal Accident Insurance</a></li>
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
    <div class="footer prd-footer">
        <div class="container">
            <p class="text-center ft-links">
                <a href="#">Contact us</a>   | <a href="#">Sitemap</a>   | <a href="#">Links</a>   | <a href="#">Accessibility</a>   | <a href="#">Privacy policy</a>   | <a href="#">Terms & Conditions</a>
            </p>

            <p class="text-center sm">
                <a href="#" target="_blank">
                    <img src="<?php print base_path() . path_to_theme(); ?>/images/twitter.png" alt="twitter" />
                    follow us</a> | <a href="#" target="_blank">
                        <img src="<?php print base_path() . path_to_theme(); ?>/images/linkedin.png" alt="linkedin" />
                        join us</a>
            </p>

            <p class="copyrights">
                &copy; Al Alamiya for Cooperative Insurance Company. All rights reserved.
            </p>
        </div>
    </div>
    <div class="clearfix"></div>