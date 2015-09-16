<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Vital Nutrition Shop</title>
<style type="text/css">@import url("http://fonts.googleapis.com/css?family=PT+Sans");</style>
<style type="text/css">@import url("http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz");</style>
<style type="text/css">@import url("http://fonts.googleapis.com/css?family=Vollkorn");</style>
<style type="text/css">@import url("css/reset.css");</style>
<style type="text/css">@import url("css/grid.css");</style>
<style type="text/css">@import url("css/styles.css");</style>
<style type="text/css">@import url("css/tabs.css");</style>
<!--Common jQuery-->
<script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!--Coda Slider-->
<style type="text/css">@import url("css/coda-slider-2.0.css");</style>
<!--CSS Switcher-->
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<!--Flickr Feed-->
<script type="text/javascript" src="js/jflickrfeed.min.js"></script>
<script type="text/javascript" src="js/setup.js"></script>
<!--Parallax-->
<style type="text/css">@import url("layerslider/css/layerslider.css");</style>
<style type="text/css">@import url("css/parallax.css");</style>
<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#layerslider').layerSlider({
            navPrevNext : true,
            navButtons : false,
            navStartStop : false,
            animateFirstLayer : true,
            skinsPath : 'layerslider/skins/'
        });
    });     
</script>
<!--Toggle-->
<style type="text/css">@import url("css/toggle.css");</style>
<script type="text/javascript" src="js/expand.js"></script>
<!--Scroll Top-->
<script type="text/javascript" src="js/scroll.js"></script>
<!--Pretty Photo-->
<style type="text/css">@import url("css/prettyPhoto.css");</style>
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<!--Quicksand-->
<script type='text/javascript' language='Javascript' src='js/jquery.quicksand.js'></script>
<!--Nivo-->
<style type="text/css">@import url("css/nivo-slider.css");</style>
<script type='text/javascript' src='js/jquery.nivo.slider.js'></script>
<script type='text/javascript'>
$(window).load(function() {
    $('#slider').nivoSlider();
    });
</script>
<!--Background-->
<script type="text/javascript" src="js/jquery.fullbg.min.js"></script>
<!--New Menu-->
<style type="text/css">@import url("css/menu.css");</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
</head>

<body>
<!-- <img src="images/backgrounds/image1.jpg" alt="" id="background" /> -->
<div id="maincontent">

<!--Top Nav-->
<div class="bar">
    <div class="container_12">

<!--         <div class="grid_6">
            <div class="mininav">
                <ul>
                    <li><a href="#" class="fade">Home</a></li>                  
                    <li><a href="#" class="fade">Find a Club</a></li>
                    <li><a href="#" class="fade">Site Map</a></li>
                    <li><a href="#" class="button dark small">Login</a></li>
                </ul>
            </div>
        </div> -->
        
        <div class="grid_6 alignrightnopad">
        <!--Social Networks-->
        <div class="socialbar">
            <a href="#" target="_blank"><img src="images/social_icons/twitter.png" class="social fade" alt="Twitter"/></a>
            <a href="#" target="_blank"><img src="images/social_icons/facebook.png" class="social fade" alt="Facebook"/></a>
            <a href="#" target="_blank"><img src="images/social_icons/instagram.png" class="social fade" alt="Flickr"/></a>                 
        </div>
        <!--End Social Networks-->        
        </div>          
        
    </div>
</div>
<!--End Top Nav-->

<!--Start Box-->
<div class="box">
<a name="top" id="top"></a>

<!--Main Bar-->
<div class="container_12 navbar">
    <!--Logo-->
    <div style="margin-left:-3%;" class="grid_3_no_margin"><a href="index.html"><img width="100%" style="margin-top:-6%;" src="images/logo.png" alt="" class="logo"/></a></div>
    <!--End Logo-->
    <!--Main Nav--> 
    <div class="grid_10_no_margin">

            <div id="menu">
                <ul>
                    <li class="current"><a href="home">Inicio</a>
                    </li> 
                    <li class="icon_drop"><a href="#">Productos</a>
                        <ul>
                                @foreach($tipo_producto as $t)
                                    <li><a href="#" class="fade">{{ $t->type }}</a></li>
                                @endforeach
                        </ul>                    
                    </li>   
                    <li><a href="#">Ofertas</a>
                    </li>               
                    <li><a href="#">La Tienda</a>
                    </li>
                    <li><a href="#">Articulos</a> 
                    </li>                   
                    <li><a href="contact.html">Contacto</a></li>
                </ul>
            </div>  
    </div>
    <!--End Main Nav--> 
</div>
<!--End Main Bar-->
</div>
<!--End Box-->
          
          @yield('content')

<!--Footer-->
<div class="footer">
    <div class="footer_container">       
                <div class="footer1">
                    <div class="clear"></div> 
                </div> 
                <div class="footer2">
                    <h4>COMPANY</h4>
                    <div class="clear"></div>           
                    <p>Lorem ipsum dolor sit amet <span class="bold">bold font</span> adipiscing elit. Proin vel <span class="italic">"italics mauris con lacinia dapibus"</span> sit amet neque. Praesent scelerisque <span class="underline">underline amet ante suscipit</span> et aliquet magna fringilla. <span class="bold italic">Bold itallic a purus ut</span> justo.</p>                          
                </div>               
                <div class="footer3">
                    <h4>INFO</h4>
                    <div class="clear"></div>            
                    <p class="highlight"><span class="phone"> 000 011(1234) 458-2300</span></p>
                    <p class="highlight"><span class="fax"> 000 011(1234) 458-4300</span></p>
                    <p class="highlight"><span class="email bold"> <a href="mailto:contact@balance.com">contact@balance.com</a></span></p>
                    <p class="highlight"><span class="mail">44 W 63rd St, New York, NY 10023</span></p> 
                </div>        
                <div class="footer4">                
                    <h4>CONTACT</h4>
                    <div class="clear"></div>           
                    <!--Form--> 
                    <iframe src='contacto' frameborder='0' width='222' height='250' marginwidth="0" scrolling="no"></iframe>
                    <!--End Form-->
                </div>
        
    <div class="clearnospacing"></div>
    </div>
</div>

<!--Copyright Section-->
<div class="bottombar">
    <div class="bottombar_container">
    
        <div class="copyright">&copy; VNS. All Rights Reserved. Design by <a href="#" class="bold">ignitethemes</a></div>
        
        <div class="bottom_nav">
            <div class="crumb_navigation">
                <ul>
                    <li><a href="inicio" class="fade">Inicio</a></li>
                    <li><a href="about.html" class="fade">About</a></li>
                    <li><a href="services.html" class="fade">Features</a></li>
                    <li><a href="gallery1.html" class="fade">Portfolio</a></li>
                    <li><a href="blog.html" class="fade">Blog</a></li>
                    <li><a href="contact.html" class="fade">Contact</a></li>
                </ul>
            </div>
        </div>
        
        
    </div>   
</div>
<!--END Copyright Section-->
<!--End Footer-->

</div>
<!--End Content-->

<script type="text/javascript" src="js/custom_filter.js"></script>

<!--Tool Tip-->
<script type="text/javascript">
var tip = $();
$(document).ready(function() {
    //Tooltips
    $(".tip_trigger").hover(function(){
        tip = $(this).find('.tip');
        tip.show(); //Show tooltip
    }, function() {
        tip.hide(); //Hide tooltip
    }).mousemove(function(e) {
        var mousex = e.pageX + 20; //Get X coodrinates
        var mousey = e.pageY + 20; //Get Y coordinates
        var tipWidth = tip.width(); //Find width of tooltip
        var tipHeight = tip.height(); //Find height of tooltip

        //Distance of element from the right edge of viewport
        var tipVisX = $(window).width() - (mousex + tipWidth);
        //Distance of element from the bottom of viewport
        var tipVisY = $(window).height() - (mousey + tipHeight);

        //Absolute position the tooltip according to mouse position
        tip.css({  top: mousey, left: mousex });
    });
});
</script>

<!--Tabs-->
<script type="text/javascript" src="../../../public/js/tabs.js"></script>

<!--Toggle-->
<script type="text/javascript">
$(function() {
    $(".expand").toggler({initShow: "div.collapse:first", method: "slideFadeToggle"});
    // --- Other options:
    //$(".expand").toggler({method: "toggle", speed: 0});
    //$(".expand").toggler({method: "toggle"});
    //$(".expand").toggler({speed: "fast"});
    //$(".expand").toggler({method: "fadeToggle"});
    //$(".expand").toggler({method: "slideFadeToggle"});    
    $("#content").expandAll({trigger: ".expand", ref: "div.demo",  speed: 600, oneSwitch: false});
});
</script>

<!--Coda Slider-->
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.coda-slider-2.0.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#coda-slider-1').codaSlider();
    });
</script>

<!--Background-->
<script type="text/javascript">
$(window).load(function() {
    $("#background").fullBg();
});
</script>

</body></html>

