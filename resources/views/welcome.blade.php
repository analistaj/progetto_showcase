<!DOCTYPE html>
<html lang="it">
     <head>
     <title>Studio B - Ingegneria civile</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/square_shape.png">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/font-awesome.css">
        <!-- la riga seguente è lo script per font awesome -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">   
     <link rel="stylesheet" href="css/owl.carousel.css" > 
     <script src="js/jquery.js"></script>    
     <script src="js/jquery-migrate-1.2.1.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/script.js"></script>
     <script src="search/search.js"></script>        
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/owl.carousel.js"></script>      
     <script src="js/superfish.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>    
     <script src="js/sForm.js"></script>
     <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
        <link href='//fonts.googleapis.com/css?family=Asap:400' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Asap:700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
        </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
        <script>
            $(document).ready(function(){
                $("#owl").owlCarousel({
                    items : 9,
                    itemsDesktop : [1299, 9],
                    itemsTablet: [995, 6],
                    itemsTabletSmall: [767, 4],
                    itemsMobile : [479, 3],
                    lazyLoad : true,
                    pagination: false,
                    navigation : true
                });
                $("#owl-1").owlCarousel({
                    items : 3,
                    itemsDesktop : [1299, 3],
                    itemsTablet: [995, 3],
                    itemsTabletSmall: [767, 1],
                    itemsMobile : [479, 1],
                    lazyLoad : true,
                    pagination: true,
                    navigation : false
                });
                /*accordion*/
                (function($) {
                var allTriggers = $('.accordion > dt');
                var allPanels = $('.accordion > dd').hide();
                $('.accordion > dt > a').click(function() {
                         allPanels.slideUp();
                         $(this).parent().next().slideDown();
                         return false;
                });
                $('.accordion > dt').first().addClass('active');
                $('.accordion > dd').first().show();
                $('.accordion > dt > span.toggle').click(function() {
                    $this = $(this);
                    $target =  $this.parent().next();
                    if(!$target.hasClass('active')){
                       allPanels.removeClass('active').slideUp();
                       $target.addClass('active').slideDown();
                    }
                    $trigger =  $this.parent();
                    if(!$trigger.hasClass('active')){
                       allTriggers.removeClass('active');
                       $trigger.addClass('active');
                    }
                  return false;
                });
                })(jQuery);
                /*Back to Top*/
                $().UItoTop({ easingType: 'easeOutQuart' });
             });
        </script>
     </head>
<body id="top">

<!--============================== HEADER =================================-->

<header id="header">
    <div class="top_border">
        <div class="container">
            <div class="row">
                <div class="grid_4">
                    <h1><a href="index.html"><img src="images/logo.png" alt="logo Studio B"></a></h1>
                </div>
                <div class="grid_4">
                    <div class="search_box">
                        <form id="search" action="search.php" method="GET">
                            <input type="text" name="s" value="Search" onfocus="if (this.value == 'Search') {this.value=''}" onBlur="if (this.value == '') {this.value='Search'}">
                            <a onClick="document.getElementById('search').submit()"><img src="images/search_btn.png" alt="search"></a>
                            <div class="clear"></div>      
                        </form>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="tel">contatto rapido
                       <div class="phone">
                          <i class="fa fa-phone"></i>
                           +39 000 000 0000
                       </div>
                       <span>&nbsp;</span>
                       <a href="#"><i class="fa fa-envelope-o">
                        </i>
                        info@studiob
                        </a>
                    </div>
                    <ul class="socials">
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li> 
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>                       
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul> 
                </div>
            </div>
        </div>
    </div>
    <div class="menu_bg">
        <div class="container">
            <div class="row">
                <div class="grid_9">
                    <nav>
                        <ul class="sf-menu sf-js-enabled sf-arrows">
                            <li class="current">
                              <a href="chisiamo">CHI SIAMO</a>
                            </li>
                            <li><a href="servizi">I NOSTRI SERVIZI</a>
                            </li>
                            <li class>
                            <a href="progetti" class="sf-with-ul">PROGETTI</a>
                                <ul style="display: none;">
                                    <li><a href="#">PROGETTI RECENTI</a></li>
                                    <li><a href="progetti" class="sf-with-ul">TUTTI I PROGETTI</a>
                                        <ul style="display: none;">
                                            <li><a href="progetti-ristrutturazione">Ristrutturazione</a></li>
                                            <li><a href="progetti-calcolo-strutturale">Calcolo Strutturale</a></li>
                                            <li><a href="progetti-risparmio-energetico">Risparmio Energetico</a></li>
                                        </ul>
                                    </li>
                               </ul>
                            </li>
                            <li><a href="contatti">DOVE SIAMO</a></li>
                            <li><a href="index-5.html">BLOG</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="grid_3">
                    <ul class="top_links">
                        <li><a href="#">login</a></li>
                        <li><a href="#">aiuto</a></li>
                        <li><a href="#">newsletter</a></li>
                    </ul>
                </div>
            </div>           
        </div>
    </div>
</header>

<!--================================ CONTENT ================================-->

<div id="content">
    <div class="banner">
        <div class="container">
            <div class="row">    
                <div class="grid_12">
                    <div class="caption">
                        <h2>STUDIO B</h2>
                        <p>Studio B is the leading industrial company providing capabilities to effectively execute major industrial projects throughout a diversified marketplace, while maintaining a competitive structure regionally across the area.</p>
                        <a href="#" class="link">chi siamo</a>
                    </div>       
                </div>    
            </div>  
        </div>
    </div>
    <div class="caption2">
        <div class="container">
            <div class="row">    
                <div class="grid_12">
                    <i class="fa fa-bullhorn"></i>
                    <p>Le novità del settore, direttamente dal nostro blog</p>
                    <a href="#">approfondisci<i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
<div class="bg1 p95">
    <div class="container">
        <div class="row">   
            <div class="grid_12">
                <div class="intro">
                    <h2>Soluzioni ingegneristiche<br>per l'abitare</h2>
                    <h4>L'innovazione ingegneristica è alla base del vivere. We provide innovative and cost-effective industrial solutions. We build appliances, lighting, power systems and other products that help millions of homes, offices, factories and retail facilities around the world work better.</h4>
                    <div>
                        <a href="#" class="link">leggi tutto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
       <div class="banner1">
         <div class="p83">
           <div class="container">
             <div class="row">     
                
                <div class="grid_12 center">
                  <h2 class="col7">Progetti recenti</h2>
                    <div id="owl-1" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                      <div class="owl-wrapper-outer">
                        <div class="owl-wrapper" style="width: 9360px; left: 0px; display: block;">
	                          
    <!-- ============== Tre img con animazione centrale  -->
    
	                          <div class="owl-item" style="width: 390px;">
		                       <div class="item">
		                         <div class="thumb1">
		                           <img src="images/page1_img1.jpg" alt="">
		                           <div>
		                             <a href="#">Quisque nulla Vestibulum</a>
		                           </div>
		                         </div>
		                        </div>
		                       </div>
		                       
		                       <div class="owl-item" style="width: 390px;">
		                       <div class="item">
		                         <div class="thumb1">
		                           <img src="images/page1_img1.jpg" alt="">
		                           <div>
		                             <a href="#">Quisque nulla Vestibulum</a>
		                           </div>
		                         </div>
		                        </div>
		                       </div>
		                       
		                       <div class="owl-item" style="width: 390px;">
		                       <div class="item">
		                         <div class="thumb1">
		                           <img src="images/page1_img1.jpg" alt="">
		                           <div>
		                             <a href="#">Quisque nulla Vestibulum</a>
		                           </div>
		                         </div>
		                        </div>
		                       </div>
		                       
     <!-- =================ALTRE IMG
                       
                    <div class="owl-item" style="width: 390px;">
                      <div class="item">
                        <div class="thumb1">
                                 <img src="images/page1_img3.jpg" alt="">
	                            <div>
	                             <a href="#">primis in faucibus orci lu</a>
	                            </div>
                        </div>
                       </div>
                      </div> 
            ==================================================== -->
                  
                  
                </div>
              </div>
              
		              <div class="owl-controls clickable">
		                <div class="owl-pagination">
			              <div class="owl-page active">
			                 <span class=""></span>
			              </div>
			              <div class="owl-page">
			                 <span class=""></span>
			              </div>
			              <div class="owl-page">
			                 <span class=""></span>
			              </div>
			              <div class="owl-page">
			                <span class=""></span>
			              </div>
		                 </div>
                        </div>
             </div>                              
            </div>
           </div>
          </div>
         </div>
        </div>
        
        
<div class="bg1 p95">
    <div class="container">
        <div class="row">
            <div class="grid_4">
                <h3>What we do</h3>
                    <dl class="accordion">
                        <dt><a href="#"><span>quid pro quo hic escorol</span><i class="fa fa-plus-square"></i><i class="fa fa-minus-square"></i></a></dt>
                        <dd>
                            <p>Epsum factorial non t quid pro quo hic escorol. Olypian quarrels et gorilngolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unuacto lingo est igpay atinlay. Marquee selectus non provisio incongruous.</p>
                        </dd>
                        <dt><a href="#"><span>escorol Olypian puarrels et</span><i class="fa fa-plus-square"></i><i class="fa fa-minus-square"></i></a></dt>
                        <dd>
                            <p>Epsum factorial non t quid pro quo hic escorol. Olypian quarrels et gorilngolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unuacto lingo est igpay atinlay. Marquee selectus non provisio incongruous.</p>
                        </dd>
                        <dt><a href="#"><span>souvlaki ignitus carborundum</span><i class="fa fa-plus-square"></i><i class="fa fa-minus-square"></i></a></dt>
                        <dd>
                            <p>Epsum factorial non t quid pro quo hic escorol. Olypian quarrels et gorilngolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unuacto lingo est igpay atinlay. Marquee selectus non provisio incongruous.</p>
                        </dd>                                         
                    </dl>
            </div>
            <div class="grid_4 wrap">
                <h3>I nostri plus</h3>
                <p class="lh21">Gratuitous octopus niacodiumtimate. Quote meon an estimate et non interruptus stadium. Sic tempus fugit esperanto hiccup estrogen. Glolava ex librus hup hey ad infinitum. Non sequitur condominium facile et geranium incognito. Epsum factorial non deposit quid pro quo hic escorol. Marquee ctus non prio incongruous feline nolo contendre Olypian rels et gongolium sic ad nauseum. Souvlaki ignitus carborundum.</p>
                <ul class="list">
                    <li><a href="#"><i class="fa fa-check"></i>Energy</a></li>
                    <li><a href="#"><i class="fa fa-check"></i>Healthcare</a></li>
                    <li><a href="#"><i class="fa fa-check"></i>Industry</a></li>
                    <li><a href="#"><i class="fa fa-check"></i>Infrastructure &&; Cities</a></li>
                </ul>
            </div>
            <div class="grid_4">
                <h3>Dicono di noi</h3>
                    <blockquote>
                        <div class="bq_top">
                            <img src="images/quote.png" alt="">
                            <p>La nostra azienda si avvale della professionalità di Studio B dal 2004. Sic tempus fugit esperanto hicp estrogen. Glolava ex librus hup hey ad condominiacile et geranium incognito. Epsum factorial non.</p>
                        </div>
                        <div class="bq_bot">
                            <img src="images/page1_img4.png" alt=""> 
                            <a href="#">Fabio Rossi</a><br>
                            <span>CEO ABC srl - Ravenna</span>
                        </div>
                    </blockquote>
            </div>
        </div>
    </div>
</div>
<div class="bg4">
    <div class="p100">
        <div class="container">
            <div class="row">     
                <div class="grid_4 wrap">
                    <div class="thumb">
                        <div class="circle"><img src="images/page1_ico1.png" alt=""></div>
                        <h5><a href="#" class="link1">Ristrutturazione<br>edilizia</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ilventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
                        <a href="#" class="link2">continua</a>
                    </div>
                </div>
                <div class="grid_4 wrap">
                    <div class="thumb">
                        <div class="circle"><img src="images/page1_ico2.png" alt=""></div>
                        <h5><a href="#" class="link1">Progettazione<br>e calcolo strutturale</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ilventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
                        <a href="#" class="link2">continua</a>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="thumb">
                        <div class="circle"><img src="images/page1_ico3.png" alt=""></div>
                        <h5><a href="#" class="link1">Risparmio<br>energetico</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ilventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
                        <a href="#" class="link2">continua</a>
                    </div>
                </div>                                
            </div>
        </div>
    </div>
</div>
<div class="bg3">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div id="owl" class="owl-carousel">
                    <div class="item"><a href="#"><img src="images/page1_logo1.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/page1_logo2.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/page1_logo3.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/page1_logo4.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/page1_logo5.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/page1_logo6.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/page1_logo7.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/page1_logo8.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/page1_logo9.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/page1_logo1.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/page1_logo2.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="map">
        <!-- MAPPA TEMPLATE ORIGINALE <iframe class="wide_map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe> -->
        <iframe class="wide_map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d45768.77311699167!2d12.360986571756305!3d44.19577215102518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sit!4v1452969502372" style="border:0"></iframe>
    </div>
    
    
    
    
<!-- ========== MENU SOPRA FOOTER   ============ -->


<div class="bg2 p21">
    <div class="container">
        <div class="row">     
            <div class="grid_3">
                <h6>News & Resource <br>Center</h6>
                <ul class="list1">
                    <li><a href="#">Articles</a></li>
                    <li><a href="#">Brochures</a></li>
                    <li><a href="#">Case Studies</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Press Releases</a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Research</a></li>
                </ul>
            </div>
            <div class="grid_3">
                <h6>Practices</h6>
                <ul class="list1">
                    <li><a href="#">Accounting</a></li>
                    <li><a href="#">Antitrust and Competition</a></li>
                    <li><a href="#">Financial Distress Litigation</a></li>
                    <li><a href="#">Product Liability</a></li>
                    <li><a href="#">Corporate Governance</a></li>
                    <li><a href="#">Corporate Transaction Litigation</a></li>
                    <li><a href="#">Employee Retirement Income</a></li>
                    <li><a href="#">Energy and Commodities</a></li>
                    <li><a href="#">Financial Institutions</a></li>
                    <li><a href="#">Intellectual Property</a></li>
                    <li><a href="#">Labor and Employment</a></li>
                    <li><a href="#">Pharmaceuticals and Healthcare</a></li>
                    <li><a href="#">Real Estate</a></li>
                    <li><a href="#">Securities</a></li>
                </ul>
            </div>
            <div class="grid_3">
                <h6>Global Network</h6>
                <ul class="list1">
                    <li><a href="#">Asia Pacific</a></li>
                    <li><a href="#">Canada</a></li>
                    <li><a href="#">Europe, Middle East & Africa</a></li>
                    <li><a href="#">Latin America</a></li>
                    <li><a href="#">United States</a></li>
                </ul>
                <h6>About Us</h6>
                <ul class="list1">
                    <li><a href="#">Company Profile</a></li>
                    <li><a href="#">Management Team</a></li>
                    <li><a href="#">Company History</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Locations</a></li>
                    <li><a href="#">Ethics & Compliance</a></li>
                </ul>                
            </div>                       
            <div class="grid_3">
                <a href="#" class="logo1"><img src="images/logo_min.png" alt=""></a>
                <p class="add_txt">Quisque nulla. Vestiero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiarsus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultricposuere cubilia Curae; Suspendisse sollicitudin velit s pharetra augue n augue. Nam elit magna, hendametincidunt ac, viva sed, nulla. Donec porta diam. Quisque diam lorem, interdum vitae, dapib.</p>
                <address class="address">
                    <dl>
                    <dt></dt>
                        <dd>+0 000 000 0000</dd>
                    </dl>              
                </address>
                <div class="copy">
                    <span class="tr">&copy;</span>
                    <span id="copyright-year"></span>
                    <span>Studio B. Ingegneria edile.</span><br>
                    <a href="index-6.html">Politiche sulla Privacy</a>
                </div>
            </div>  
        </div>
    </div>
</div>            
</div>            

<!--==================  FOOTER   =======================-->

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="grid_9">
                <ul class="bottom_menu">
                    <li class="current"><a href="index.html">About us</a></li>
                    <li><a href="index-1.html">new Services</a></li>
                    <li><a href="index-2.html">products</a></li>
                    <li><a href="index-3.html">recent Projects</a></li>
                    <li><a href="index-4.html">our Contacts</a></li>
                    <li><a href="index-5.html">Blog</a></li>
                </ul>
            </div>
            <div class="grid_3">
                <ul class="social-links">
                    <li><a href="#" class="col1"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="col2"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="col3"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="col4"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="col5"><i class="fa fa-envelope"></i></a></li>
                </ul> 
                <!--{%FOOTER_LINK} -->
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
</body>
</html>