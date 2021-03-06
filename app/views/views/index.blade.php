@extends('layouts.layout')


@section('content')
<div class="clearnospcaing"></div>
     
        <!--Start Parallax-->
        <div id="dim">

            <div id="layerslider">

        @foreach($banner as $b)
            <div class="ls-layer" rel="slidedelay: 5000;">                  
                    <img class="ls-bg" src="{{$b->image}}" alt="layer">
                    <p id="text1" style="text-align:center;">{{$b->title}}</p>              
                </div> 
        @endforeach
            
                <div class="ls-layer" rel="slidedelay: 5000;">                  
                    <img class="ls-bg" src="img/banners/2/2.jpg" alt="layer">
                    <p id="text1">$0 DOWN, $19.99 PER MONTH LIMITED TIME OFFER</p>
                    <p id="text1sub">Some restrictions apply.</p>
                    <a href="#" target="_self" class="button highlight action" id="button1">SIGN UP</a>                 
                </div>            
            
                <div class="ls-layer">
                    <img class="ls-bg" src="images/parallex/l2.jpg" alt="layer">
                    <img class="ls-s2" src="images/parallex/l41.png" alt="sublayer" rel="delayin: 900; easingin: easeOutBack">
                    <img class="ls-s3" src="images/parallex/l42.png" alt="sublayer" rel="delayin: 900; easingin: easeOutBack">
                    <img class="ls-s4" src="images/parallex/l43.png" alt="sublayer" rel="delayin: 900; easingin: easeOutBack">
                    <p id="textpromotionlg">2 FREE</p>
                    <p id="textpromotion">PERSONAL TRAINING<br />SESSIONS</p>
                    <p id="textpromotionsub">Limited time offer!</p>
                    <p id="text2header">OUR FITNESS APPROACH</p>              
                    <p id="text2">Lorem ipsum amet libero et est fermentum ana suscipit sed id nulla donec elementum placerat tortor in facilisis ipsum pharetra laoreet esanita fermentum suscipit sed id nulla donec facilisis elementum placerat tortor in facilisis ipsum<br />Call now <span class="bold">1 (800) 555-9999</span></p>
                    <a href="#" target="_self" class="button highlight action" id="button2">JOIN NOW!</a>                   
                </div>

                <div class="ls-layer" rel="slidedirection: right; slidedelay: 6000">
                    <img class="ls-bg" src="images/parallex/l1.jpg" alt="layer">
                    <img class="ls-s2" src="images/parallex/l29.png" alt="sublayer" rel="slidedirection: right; 
                    durationin: 1000; easingin: easeOutBack; delayin: 900; delayout: 50">
                    <p id="text3header">ACHIEVE<br />YOUR FITNESS<br />GOALS!</p>                                 
                    <p id="text3"><span class="bold">Get a 3 Day Guest Pass</span><br />Lorem ipsum amet libero et est fermentum suscipit sed id nulla donec elementum plac tortor in facilisis ipsum pharetra laoreet ana fermentum suscipit sed id nulla donec esta<br />Call now <span class="bold">1 (800) 555-9999</span></p>
                    <a href="#" target="_self" class="button highlight action" id="button2">CONTACT US</a>                  
                </div>               
                
            </div>
            
        </div>
        <!--End Start Parallax-->

<div class="clearnospacing"></div>

<!--Newsletter-->
<div class="newsletterbar">

        <div id="newsletter_wrap">

             <!-- Start Newsletter Left -->
             <div id="newsletter_left">
                
                <div id="newsletter_headline">Registrate en nuestra red de clientes!</div>
                <div id="newsletter_sub">Recibe ofertas, <span class="bold color">EXCLUSIVAS, articulos promocionales, planes nutricionales, motivacion y MAS! </span></div>
                
            </div>
            <!-- End Newsletter Left -->
            
            <!-- Start Newsletter Right -->
            <div id="newsletter_right">
            
        <!--Form--> 
            <iframe src='contacto_email' frameborder='0'
            width='300' height='50' marginwidth="0" scrolling="no"></iframe>
        <!--End Form-->
                    
            </div>
            <!-- End Newsletter Right -->
            
    </div>

</div>
<!--End Newsletter-->

<!--Start Box-->
<div class="box">

<div class="clearsmall"></div>

<div class="container_12">
    <div class="grid_12 nomargin">

        <div class="showbox nomargin boxpadding">
        <h3><img class="imageinset" src="images/one.png" alt=""/>STRENGTH TRAINING</h3>       
        <p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect adipisscin elit proin vel lectus ut eta</p>
        <a href="#" target="_self" class="button minimal small">Read More</a>
        </div>
                
        <div class="showbox nomargin boxpadding">
        <h3><img class="imageinset" src="images/two.png" alt=""/>CARDIO FITNESS</h3>
        <p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect adipisscin elit proin vel lectus ut eta</p>
        <a href="#" target="_self" class="button minimal small">Read More</a>
        </div>        
        
        <div class="showbox nomargin boxpadding">
        <h3><img class="imageinset" src="images/three.png" alt=""/>AQUATIC</h3>
        <p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect adipisscin elit proin vel lectus ut eta</p>
        <a href="#" target="_self" class="button minimal small">Read More</a>
        </div>
        
        <div class="showbox nomargin boxpadding">
        <h3><img class="imageinset" src="images/four.png" alt=""/>MIND &amp; BODY</h3>
        <p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect adipisscin elit proin vel lectus ut eta</p>
        <a href="#" target="_self" class="button minimal small">Read More</a>
        </div>
                
    </div>
    <div class="clear"></div>
</div>

</div>
<!--End Box-->

<!--Featured Projects-->
<div class="centerbar">
<div class="featuredprojects">

<h4>OUR FACILITIES</h4>
<div class="clearsmall"></div>

<div class="coda-slider-wrapper">
    <div class="coda-slider preload" id="coda-slider-1">
    
        <!-- Slide -->
        <div class="panel">
            <div class="panel-wrapper">
            
                <div class="project">

                    <div class="featured featured-first">
                        <img src="images/galleries/image65.jpg" />
                        <div class="mask">
                            <h2>Project Title</h2>
                            <p>A long title to add more detail about the image</p>
                            <a href="images/placeholder.jpg" class="image" rel="prettyPhoto" title="A long title to add more detail about the image"></a>
                        </div>
                    </div>
                    
                    <div class="featured featured-first">
                        <img src="images/galleries/image66.jpg" />
                        <div class="mask">
                            <h2>Project Title</h2>
                            <p>This is a url link to a project page</p>
                            <a href="#" class="url" title="This is a url link to a project page"></a>
                        </div>
                    </div>
                    
                    <div class="featured featured-first">
                        <img src="images/galleries/image70.jpg" />
                        <div class="mask">
                            <h2>Project Title</h2>
                            <p>This is a project with slideshow</p>
                            <a href="images/placeholder.jpg" class="slideshow" rel="prettyPhoto[project1]" title="This is a project with slideshow"></a>
                        </div>
                    </div>
                    
                    <div class="featured featured-first">
                        <img src="images/galleries/image68.jpg" />
                        <div class="mask">
                            <h2>Project Title</h2>
                            <p>A long title to add more detail about the image</p>
                            <a href="images/placeholder.jpg" class="image" rel="prettyPhoto" title="A long title to add more detail about the image"></a>
                        </div>
                    </div>

                </div>             
                         
            </div>
        </div>
        <!-- End Slide -->    
    
        <!-- Slide -->
        <div class="panel">
            <div class="panel-wrapper">

                <div class="project"> 

                    <div class="featured featured-first">
                        <img src="images/galleries/image71.jpg" />
                        <div class="mask">
                            <h2>Project Title</h2>
                            <p>This is a video, it can be Vimeo or Youtube</p>
                            <a href="http://vimeo.com/29017795?width=800&amp;height=450" class="video" rel="prettyPhoto" title="This is a video, it can be Vimeo or Youtube"></a>
                        </div>
                    </div>
                    
                    <div class="featured featured-first">
                        <img src="images/galleries/image69.jpg" />
                        <div class="mask">
                            <h2>Project Title</h2>
                            <p>This is a project with slideshow</p>
                            <a href="../../../public/images/placeholder.jpg" class="slideshow" rel="prettyPhoto[project2]" title="This is a project with slideshow"></a>
                        </div>
                    </div>
                    
                    <div class="featured featured-first">
                        <img src="images/galleries/image67.jpg" />
                        <div class="mask">
                            <h2>Project Title</h2>
                            <p>A long title to add more detail about the image</p>
                            <a href="images/placeholder.jpg" class="image" rel="prettyPhoto" title="A long title to add more detail about the image"></a>
                        </div>
                    </div>

                </div> 

            </div>
        </div>
        <!-- End Slide -->
        
<!--Slideshows - add additional slide images here-->
        <!--project4-->
        <a href="images/placeholder.jpg" class="alternate4" rel="prettyPhoto[project1]" title="Additional image or video"></a>
        <a href="images/placeholder.jpg" class="alternate4" rel="prettyPhoto[project1]" title="Another image or video"></a>
        <!--project5-->
        <a href="images/placeholder.jpg" class="alternate4" rel="prettyPhoto[project2]" title="Additional image or video"></a>
        <a href="images/placeholder.jpg" class="alternate4" rel="prettyPhoto[project2]" title="Another image or video"></a>       

    </div><!-- .coda-slider -->
</div><!-- .coda-slider-wrapper -->

</div>
<div class="clearnospacing"></div>
</div>
<!--End Featured Projects-->

<!--Page Callout Section-->
        <div class="calloutcontainer">
                <div class="text">BALANCE - FITNESS FOR LIFE</div>
                <div class="sub color">ZERO DOWN - ONLY $19.99 A MONTH FOR 3 MONTHS</div>
                <p>*Limited time offer. Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce tincidunt nulla in dui auctor quis 
                egestas dui lobortis dolor sit amet, consectetur adipiscing elit fusce tincidunt nulla in dui auctor quis egestas sit amet
                consectetur adipiscing elit fusce tincidunt nulla in Valid now through 09-10-2012</p>
        </div>
<!--End Page Callout Section--> 
@stop