<?php
    session_start();
        
    
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie"lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7"  class="ie"lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8"  class="ie"lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html id="ie9"  class="ie"lang="en-US">
<![endif]-->
<!--[if gt IE 9]>
<html class="ie"lang="en-US">
<![endif]-->

<!-- This doesn't work but i prefer to leave it here... maybe in the future the MS will support it... i hope... -->
<!--[if IE 10]>
<html id="ie10"  class="ie"lang="en-US">
<![endif]-->


<!--[if !IE]>
<html lang="en-US">
<![endif]-->

<!-- START HEAD -->
<head>
    <meta charset="UTF-8" />

    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />



    <title>FolkFlow</title>

    <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
    <!-- BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
    <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- [favicon] end -->

    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png" />

    <link rel='stylesheet' id='thickbox-css'  href='js/thickbox/thickbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='featurestab-css'  href='css/featurestab.css' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7CMuli%7CDroid+Sans%7CArbutus+Slab%7CAbel&#038;ver=3.5.1' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css'  href='css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='ahortcodes-css'  href='css/shortcodes.css' type='text/css' media='all' />
    <link rel='stylesheet' id='portfolios-libra-css'  href='portfolios/libra/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='colorbox-css'  href='css/colorbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-css'  href='css/custom.css' type='text/css' media='all' />
    

    <style type="text/css">
        body { background-color: #ffffff; background-image: url('images/bg-pattern.png'); background-repeat: repeat; background-position: top left; background-attachment: scroll;
             }
    </style>

    <script type='text/javascript' src='js/jquery/jquery.js'></script>


</head>
<!-- END HEAD -->
<!-- START BODY -->
        <?php
            include "navbar.php";
        ?>
                        <!-- END TOPBAR LOGIN -->
                    </div>
                </div>
            </div>
        </div>
         <!-- END TOP BAR -->

    <!-- START HEADER -->
    <div id="header" class="group margin-bottom">

        <div class="group container">
            <div class="row" id="logo-headersidebar-container">
                <!-- START LOGO -->
                <div id="logo" class="span6 group">
                    <a id="logo-img" href="index.php" title="FolkFlow">
                        <img src="images/folkflow.png" title="FolkFlow" alt="FolkFlow" />
                    </a>
                        <p id='tagline'> Feel the flow...</p>
                </div>
                <!-- END LOGO -->

                <!-- START HEADER SIDEBAR -->
                <div id="header-sidebar" class="span6 group">
                    <div class="widget-first widget header-text-image">
                        <div class="text-image" style="text-align:left">
                            <img src="images/phone1.png" alt="CUSTOMER SUPPORT" />
                        </div>

                        <div class="text-content">
                            <h3>CUSTOMER SUPPORT</h3>
                            <p>+355 69 87 65 432</p>
                        </div>
                    </div>

                    <div class="widget-last widget widget_text">
                         <div class="textwidget">
                            <div class="socials-default-small facebook-small default">
                                <a href="https://www.facebook.com/FolkFlow-2018812448399002/?modal=admin_todo_tour " class="socials-default-small default facebook" >facebook</a>
                            </div>
                            
                            <div class="socials-default-small twitter-small default">
                                <a href="https://twitter.com/FOLKFLOW1?lang=de" class="socials-default-small default twitter" >twitter</a>
                            </div>

                            <div class="socials-default-small pinterest-small default">
                                <a href="https://www.instagram.com/folkflow1/" class="socials-default-small default instagram" >instagram</a>

                            </div>
                         </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER -->

    <!-- SLOGAN -->
    <div class="slogan">
        <h2>Search of Partituren</h2>      
    </div>
        
    <!-- START PRIMARY -->
    <div id="primary" class="sidebar-no">
    <div class="container group">
        <div class="row">
            <!-- START CONTENT -->
            <div id="content-page" class="span12 content group">
                <div class="page type-page status-publish group">
            
                <script>
                jQuery(document).ready(function($){
                    $('.sidebar').remove();
                    
                    if( !$('#primary').hasClass('sidebar-no') ) {
                        $('#primary').removeClass().addClass('sidebar-no');
                        $('.content').removeClass('span9').addClass('span12');
                    }
                    
                });
                </script>

               <!-- <div class="row">
                    <div class="portfolio-libra span12 margin-bottom">
                        <div class="row">   
                            <!-- portfolio image/slider -->
                            <!--<div class="span5">
                                <h2 class="work-title"></h2>

                                <div class="work-thumbnail span5">
                                    <div class="picture_overlay">
                                        <img width="437" height="261" src="images/portfolios/piggie810-437x261.jpg" class="attachment-thumb_medium_portfolio_libra" alt="piggie8">

                                        <div class="overlay">
                                            <div style="margin-top: -18.5px; margin-left: -18.5px;"><p>
                                                <a href="images/portfolios/piggie810.jpg" rel="lightbox_libra" class="cboxElement">
                                                    <img src="images/icons/zoom.png" alt="Open Lightbox"></a>
                                            </p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- portfolio thumbnails -->
                           <!-- <div class="work-projects span3">
                                <div class="row">
                                    <h2>Other projects</h2>
                                    <ul>
                                        <li class="span1">
                                            <a href="#">
                                                <img width="60" height="60" src="images/portfolios/piggie810-60x60.jpg" class="attachment-thumb_small_portfolio_libra" alt="piggie8" />                 
                                            </a>
                                        </li>
                                    
                                        <li class="span1">
                                            <a href="#">
                                               <img width="60" height="60" src="images/portfolios/01176-60x60.jpg" class="attachment-thumb_small_portfolio_libra" alt="0117" />             
                                            </a>
                                        </li>
                                    
                                        <li class="span1">
                                            <a href="#">
                                                <img width="60" height="60" src="images/portfolios/009-60x60.jpg" class="attachment-thumb_small_portfolio_libra" alt="009" />       
                                            </a>
                                        </li>
                                    
                                        <li class="span1">
                                            <a href="#">
                                                <img width="60" height="60" src="images/portfolios/0041-60x60.jpg" class="attachment-thumb_small_portfolio_libra" alt="004" />          
                                            </a>
                                        </li>
                                    
                                        <li class="span1">
                                            <a href="#">
                                                <img width="60" height="60" src="images/portfolios/007-60x60.jpg" class="attachment-thumb_small_portfolio_libra" alt="007" />       
                                            </a>
                                        </li>
                                    
                                        <li class="span1">
                                            <a href="#">
                                                <img width="60" height="60" src="images/portfolios/0051-60x60.jpg" class="attachment-thumb_small_portfolio_libra" alt="005" />      
                                            </a>
                                        </li>
                                    
                                        <li class="span1">
                                            <a href="#">
                                                <img width="60" height="60" src="images/portfolios/0067-60x60.jpg" class="attachment-thumb_small_portfolio_libra" alt="006" />      
                                            </a>
                                        </li>
                                    
                                        <li class="span1">
                                            <a href="#">
                                                <img width="60" height="60" src="images/portfolios/00219-60x60.jpg" class="attachment-thumb_small_portfolio_libra" alt="002" />         
                                            </a>
                                        </li>
                                    
                                       <li class="span1">
                                            <a href="#">
                                               <img width="60" height="60" src="images/portfolios/00318-60x60.jpg" class="attachment-thumb_small_portfolio_libra" alt="003" />          
                                            </a>
                                       </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- portfolio content -->
                           <!-- <div class="work-content-wrapper span4">

                                <h2>Project description</h2>

                                <div class="work-content">
                                    <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, at cursus urna nisl et ipsum. Donec dapibus lacus nec sapien faucibus eget suscipit lorem mattis.</p>
                                    <p>Donec non mauris ac nulla consectetur pretium sit amet rhoncus neque. Maecenas aliquet, diam sed rhoncus vestibulum, sem lacus ultrices est, eu hendrerit tortor nulla in dui. Suspendisse enim purus, euismod interdum viverra eget, ultricies eu est.</p>
                                </div>

                            </div>
                            <div class="clear"></div>
                            
                            <!-- portfolio meta -->
                           <!-- <div class="work-meta span12">
                                <ul>
                                    <li class="categories">
                                        <span><img src="images/portfolios/categories.png" alt="categories"></span><strong>Categories: </strong>Logo
                                        Design, Web Design
                                    </li>
                                    <li class="customer">
                                        <span><img src="images/portfolios/customer.png" alt="customer"></span><strong>Customer: </strong>Fly
                                        Pigg! - <a href="http://www.google.com">google.com</a></li>
                                    <li class="skills">
                                        <span><img src="images/portfolios/project.png" alt="skills"></span><strong>Project</strong>:
                                        business card, prints, website
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <!-- START COMMENTS -->
            <!--<div id="comments"></div>
            <!-- END COMMENTS -->
        <!--</div>-->
        <!-- END CONTENT -->

        <!-- START EXTRA CONTENT -->
        <!-- END EXTRA CONTENT -->
        <!-- </div>
      </div>
   </div>-->
   <legend>Search here</legend>
    
    <label class="col-md-4 control-label" for="categorie">Category</label>  
          <div class="col-md-4">
                      <select class="form-control" id="selection" name="categorie">
                      <?php
                        foreach($result1 as $row){
                            ?>
                        <option value="<?php echo $row['idK'] ?>"><?php echo $row['name']?></option>
                        <?php
                        };
                        ?>
                    </select> 
          </div>   <form action="searchofproducts.php" method="GET">        
        <input type="text" class="form-control" name="key" placeholder="Search ..." style="width:150px">
        <input type="submit" name="submit" value="Go"/></input>
    
    </form>


    
   <?php
        require_once "dbconnect.php";
			$emri = $_GET['key'];
                                

                                if (isset($_GET['submit'])){
                         
                                $sql = "SELECT titel, beschreibung, komponist, preis, pngPfad, demoPfad FROM partituren WHERE titel LIKE '%$emri%' OR komponist LIKE '%$emri%'";

                                $sth = $dbh->prepare($sql);
                                $sth->execute();
                                $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($result as $row){
                                

			
   ?>
   
   <table border = "1">        
        <tr> 
            <td width="12%"> </td> 
            <td width="68%"> </td> 
            <td width="20%"> </td> 
        </tr>       
        <tr> 
            <td rowspan="5" valign="top"><img src="<?php echo $row['pngPfad'];?>" width="500px" height="400px"></td> 
        </tr>       
        <tr>
            <td><?php echo " &nbsp";?> Title: <?php echo $row['titel'];?></td>
        </tr>           
        <tr>
            <td><?php echo " &nbsp";?> Price:<?php echo "$ ".$row['preis'];?></td>
            <td></td>
            <td>
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">

            <!-- Identify your business so that you can collect the payments. -->
            <input type="hidden" name="business" value="pjetrododani@gmail.com">

            <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="add" value="1">

            <!-- Specify details about the item that buyers will purchase. -->
            <input type="hidden" name="item_name" value="<?php echo $row['titel'] ?>">
            <input type="hidden" name="amount" value="<?php echo $row['preis'] ?>">
            <input type="hidden" name="currency_code" value="EUR">

            <!-- Display the payment button. -->
            <input type="image" name="submit" src="images/paypal.png" alt="Add to Cart">
            <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
            </form>
            </td>
        </tr>
        <tr> 
            <td><?php echo " &nbsp";?> Komponist:<?php echo $row['komponist'];?></td> 
            <td></td>
            <td>
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="pjetrododani@gmail.com">

    <!-- Specify a PayPal shopping cart View Cart button. -->
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="display" value="1">

    <!-- Display the View Cart button. -->
    <input type="image" name="submit" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_viewcart_113x26.png" alt="Add to Cart">
    <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    </form>
            </td>
        </tr>
        <tr> 
            <td><?php echo " &nbsp";?> Summary: <?php echo $row['beschreibung'];?></td> 
        </tr>
        <tr>
        <td></td>
            <td><?php echo " &nbsp";?> Category:<?php echo $row['name']?></td> 
        </tr>  
		<tr>
        <td></td>
            <td><?php echo " &nbsp";?> <audio controls>
    <source src="<?php echo $row['demoPfad'] ?>" type="audio/mp3"></div>
  </audio></td> 
        </tr>    		
         
    </table></br></br></br>
    

        
        


    <!-- END PRIMARY -->
<?php
								} 
								if(!$result){
									echo "<div class='alert alert-danger'>No Results Found!!!</div>";
								}
					}
                
                
?>

    <!-- START FOOTER -->
    <?php
    include "footer.php";
    ?>
    <!-- END FOOTER -->

    <!-- START COPYRIGHT -->
    <div id="copyright">
        <div class="container">
            <div class="row">

                    <p>
                      <center> <font face="Bedrock" size="3"</font>&COPY FolkFlow </center>
                    </p>
                
                <div class="right span6">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- END COPYRIGHT -->

    <div class="wrapper-border"></div>

    </div>
<!-- END WRAPPER -->

</div>
<!-- END BG SHADOW -->

<script type='text/javascript' src='js/comment-reply.min.js'></script>
<script type='text/javascript' src='js/underscore.min.js'></script>
<script type='text/javascript' src='js/jquery/jquery.masonry.min.js'></script>
<script type='text/javascript' src='sliders/polaroid/js/jquery.polaroid.js'></script>
<script type='text/javascript' src='js/jquery.colorbox-min.js'></script>
<script type='text/javascript' src='js/jquery.easing.js'></script>
<script type='text/javascript' src='js/jquery.carouFredSel-6.1.0-packed.js'></script>
<script type='text/javascript' src='js/jQuery.BlackAndWhite.js'></script>
<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
<script type='text/javascript' src='sliders/polaroid/js/jquery.transform-0.8.0.min.js'></script>
<script type='text/javascript' src='sliders/polaroid/js/jquery.preloader.js'></script>
<script type='text/javascript' src='js/responsive.js'></script>
<script type='text/javascript' src='js/mobilemenu.js'></script>
<script type='text/javascript' src='js/jquery.superfish.js'></script>
<script type='text/javascript' src='js/jquery.placeholder.js'></script>
<script type='text/javascript' src='js/contact.js'></script>
<script type='text/javascript' src='js/jquery.tipsy.js'></script>
<script type='text/javascript' src='js/jquery.cycle.min.js'></script>
<script type='text/javascript' src='js/shortcodes.js'></script>
<script type='text/javascript' src='js/jquery.custom.js'></script>

</body>
<!-- END BODY -->
</html>