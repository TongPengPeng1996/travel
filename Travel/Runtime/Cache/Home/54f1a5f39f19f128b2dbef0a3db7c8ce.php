<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Repose</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans: 300, 700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>

    <link href="/Public/css/bootstrap.min.css" rel="stylesheet"></head>
    <link href="/Public/css/bootstrap-responsive.min.css" rel="stylesheet"></head>
    <link href="/Public/css/demo_style.css" rel="stylesheet">
    <link href="/Public/css/style1.css" rel="stylesheet">
    <link href="/Public/css/slimbox2.css" rel="stylesheet"></head>

<body>

    <div class="title_cover">
        <h1>Repose</h1>
        <span class="h1_sub">
            showcase / gallery / pricing tables.
            <br>(Shared on <a href="#">MafiaShare.net</a>)</span>
    </div>

    <div>
        <div class="span3">
            <ul class="nav nav-list affix sidebar_new">
                <li id="navig">
                    navigate
                </li>
                <li>
                    <a href="#one">So, what is Repose?</a>
                </li>
              
                <li>
                    <a href="#four">Styles and Animations</a>
                </li>
                <li>
                    <a href="#three">Some Amazing Examples</a>
                </li>
            </ul>
        </div>
        <div class="right-bar">

            <h2 id="one">So, what is it, really?</h2>
            <div class="answer">
                <p>
                    Repose is an innovative plug-in which you can use to showcase your work, 
                key features, or portfolio. 
                It can also act as a gallery for displaying 
                images, or showcasing your team.
                </p>
                <p>
                    To be frank, the possibilities are endless. It's up to 
                you how to use the features and fit it in any place.
                </p>
            </div>
<h2 id="four">How to use the several styles and animations on offer?</h2>
            <div class="answer">
                <p>
                    Repose offers many styles and animations. To use these animations all you have 
                to do is add a class to the div element. Example, to make the images grayscaled, until hovered 
                over, just add the class 'grayscale-images' to the main div. So, our code now becomes:
                </p>
                <div class="code">
                    &lt;div class=&quot;cards_wrap
                    <strong>grayscale-images</strong>
                    &quot; id=&quot;first_wrapper&quot;&gt;
                    <br>
                    &lt;li class=&quot;cards&quot; id=&quot;first_1&quot;&gt;&lt;img scr=&quot;&quot;&gt;&lt;/li&gt;
                    <br>
                    &lt;li class=&quot;cards&quot; id=&quot;first_2&quot;&gt;&lt;img scr=&quot;&quot;&gt;&lt;/li&gt;
                    <br>&lt;/div&gt;</div>
                <p>
                    Within the
                    <strong>'li'</strong>
                    element you can add any image or text.
                </p>
                <p>Yes, it's that simple.</p>


<h3>Width of Slide Elements</h3>
                <p>The wonderful part is that you don't have 
                    to manually adjust the width of each 
                    slide element. Just set the width 
                    of the div container (the one with the class <strong>cards_wrap</strong>) to a number (say 700px) and the inner elements 
                    will adjust accordingly.</p>
                    <div class="code">
                        &lt;div class=&quot;cards_wrap&quot; style=&quot;width: 700px&quot;&gt;&lt;/div&gt;
                    </div>
            </div>






            <h2 id="three">Some Amazing Examples</h2>
            <h3>1. Portfolio</h3>

            <div class="cards_wrap grayscale-images shadow clearfix" id="first_wrapper" style="height: 250px">

                <li class="cards" id="first_1">
                    <a href="/Public/images/int1.jpg" rel="lightbox-one" title="Interior">
                        <img rel="lightbox" src="/Public/images/int1.jpg"></a>
                    <span class="main_caption">Showcase</span>
                    <span class="sub_caption">what you like</span>
                </li>

                <li class="cards" id="first_2">
                    <a href="/Public/images/int2.jpg" rel="lightbox-one" title="Interior">
                        <img src="/Public/images/int2.jpg"></a>
                    <span class="main_caption">Awesome</span>
                    <span class="sub_caption">clean, smooth things</span>
                </li>

                <li class="cards" id="first_3">
                    <a href="/Public/images/int3.jpg" rel="lightbox-one" title="Interior">
                        <img src="/Public/images/int3.jpg"></a>
                    <span class="main_caption">Portfolio</span>
                    <span class="sub_caption">you've worked hard on it</span>
                </li>

                <li class="cards" id="first_4">
                    <a href="/Public/images/int4.jpg" rel="lightbox-one" title="Interior">
                        <img src="/Public/images/int4.jpg"></a>
                    <span class="main_caption">Over Here</span>
                    <span class="sub_caption">do it your way</span>
                </li>
            </div>
            <!-- End of Cards_Wrap Main -->

            <br><br>
<br><h3>2. Image Gallery (click a pic for full view)</h3>
            <div class="cards_wrap no-bounce no-border grayscale-images clearfix" id="second_wrapper">

                <li class="cards" id="second_1">
                    <a href="/Public/images/eat1.jpg" rel="lightbox-three" title="Bread">
                        <img src="/Public/images/eat1.jpg"></a>
                    <span class="overlap_caption">Golden Bread</span>
                </li>

                <li class="cards" id="second_2">
                    <a href="/Public/images/eat2.jpg" rel="lightbox-three" title="Coffee">
                        <img src="/Public/images/eat2.jpg"></a>
                    <span class="overlap_caption">Coffee</span>
                </li>

                <li class="cards" id="second_3">
                    <a href="/Public/images/eat3.jpg" rel="lightbox-three" title="Pasta">
                        <img src="/Public/images/eat3.jpg" class="blurred"></a>
                    <span class="overlap_caption">Peppy Pasta</span>
                </li>

                <li class="cards" id="second_4">
                    <a href="/Public/images/eat4.jpg" rel="lightbox-three" title="Cake">
                        <img src="/Public/images/eat4.jpg"></a>
                    <span class="overlap_caption">Wedding Cake</span>
                </li>

                <li class="cards" id="second_5">
                    <a href="/Public/images/eat5.jpg" rel="lightbox-three" title="Olives">
                        <img src="/Public/images/eat5.jpg"></a>
                    <span class="overlap_caption">Olives</span>

                </li>

                <li class="cards" id="second_7">
                    <a href="/Public/images/eat6.jpg" rel="lightbox-three" title="Tea">
                        <img src="/Public/images/eat6.jpg"></a>
                    <span class="overlap_caption">Green Tea</span>
                </li>
            </div>
            <!-- End of Cards_Wrap Main -->

            <br><br>
<br><h3>3. Image Gallery (bouncy)</h3>
            <div class="cards_wrap grayscale-images no-border clearfix" id="third_wrapper">

                <li class="cards" id="third_1">
                    <a href="/Public/images/eat1.jpg" rel="lightbox-two" title="Bread">
                        <img src="/Public/images/eat1.jpg"></a>
                    <span class="overlap_caption">Golden Bread</span>
                </li>

                <li class="cards" id="third_2">
                    <a href="/Public/images/eat2.jpg" rel="lightbox-two" title="Coffee">
                        <img src="/Public/images/eat2.jpg"></a>
                    <span class="overlap_caption">Coffee</span>
                </li>

                <li class="cards" id="third_3">
                    <a href="/Public/images/eat3.jpg" rel="lightbox-two" title="Pasta">
                        <img src="/Public/images/eat3.jpg"></a>
                    <span class="overlap_caption">Peppy Pasta</span>
                </li>

                <li class="cards" id="third_4">
                    <a href="/Public/images/eat4.jpg" rel="lightbox-two" title="Cake">
                        <img src="/Public/images/eat4.jpg"></a>
                    <span class="overlap_caption">Wedding Cake</span>
                </li>

                <li class="cards" id="third_5">
                    <a href="/Public/images/eat5.jpg" rel="lightbox-two" title="Olives">
                        <img src="/Public/images/eat5.jpg"></a>
                    <span class="overlap_caption">Olives</span>

                </li>

                <li class="cards" id="third_7">
                    <a href="/Public/images/eat6.jpg" rel="lightbox-two" title="Tea">
                        <img src="/Public/images/eat6.jpg"></a>
                    <span class="overlap_caption">Green Tea</span>
                </li>
            </div>
            <!-- End of Cards_Wrap Main -->

            <br><br>
            <div class='answer'></div>

            <br><h3>4. Social Links</h3>
            <div class="cards_wrap no-border grayscale-images no-bounce clearfix" id="fourth_wrapper">

                <li class="cards" id="fourth_1">
                    <img src="/Public/images/social1.png" />
                </li>
                <li class="cards" id="fourth_2">
                    <img src="/Public/images/social2.png" />
                </li>
                <li class="cards" id="fourth_3">
                    <img src="/Public/images/social3.png" />
                </li>
                <li class="cards" id="fourth_4">
                    <img src="/Public/images/social4.png" />
                </li>
                <li class="cards" id="fourth_5">
                    <img src="/Public/images/social5.png" />
                </li>
            </div>
            <!-- End of Cards_Wrap Main -->

            <div class="answer"></div>

            <br><h3>5. Introduce Your Team</h3>
            <div class="cards_wrap grayscale-images no-border no-bounce wide-margin clearfix" id="people_wrapper">
                <li class="cards" id="people_1">
                    <img src="/Public/images/people1.jpg"/>
                    <span class="caption_right">Mark Smith</span>
                    <span class="caption_right_2">CEO</span>
                    <span class="social_base">
                        <a href="#"><img src="/Public/images/f.png" class="social_icons" /></a>
                        <a href="#"><img src="/Public/images/i.png" class="social_icons" /></a>
                        <a href="#"><img src="/Public/images/t.png" class="social_icons" /></a>
                    </span>
                </li>
                <li class="cards" id="people_2">
                    <img src="/Public/images/people2.jpg"/>
                    <span class="caption_right">Martha Coel</span>
                    <span class="caption_right_2">VP</span>
                    <span class="social_base">
                        <a href="#"><img src="/Public/images/f.png" class="social_icons" /></a>
                        <a href="#"><img src="/Public/images/i.png" class="social_icons" /></a>
                        <a href="#"><img src="/Public/images/t.png" class="social_icons" /></a>
                    </span>
                </li>
                <li class="cards" id="people_3">
                    <img src="/Public/images/people3.jpg"/>
                    <span class="caption_right">Joe Coel</span>
                    <span class="caption_right_2">CFO</span>
                    <span class="social_base">
                        <a href="#"><img src="/Public/images/f.png" class="social_icons" /></a>
                        <a href="#"><img src="/Public/images/i.png" class="social_icons" /></a>
                        <a href="#"><img src="/Public/images/t.png" class="social_icons" /></a>
                    </span>
                </li>
                <li class="cards" id="people_4">
                    <img src="/Public/images/people4.jpg"/>
                    <span class="caption_right">Liz Sherman</span>
                    <span class="caption_right_2">HR Head</span>
                    <span class="social_base">
                        <a href="#"><img src="/Public/images/f.png" class="social_icons" /></a>
                        <a href="#"><img src="/Public/images/i.png" class="social_icons" /></a>
                        <a href="#"><img src="/Public/images/t.png" class="social_icons" /></a>
                    </span>
                </li>
            </div>
          <!-- End of Cards_Wrap Main --><br><h3>6. Boast Your Features</h3>
            <div class="cards_wrap no-image-shadow grayscale-images shadow clearfix" id="fifth_wrapper">

                <li class="cards" id="fifth_1">
                    <img src="/Public/images/tool1.png" />
                    <span class="main_caption">Secure</span>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p>
                        Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore .
                    </p>
                    <a type="button" class="butn">Know More</a></li>
                <li class="cards" id="fifth_2">
                    <img src="/Public/images/tool2.png" />
                    <span class="main_caption">Amazing Support</span>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p>
                        Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore .
                    </p>
                    <a type="button" class="butn">Know More</a></li>
                <li class="cards" id="fifth_3">
                    <img src="/Public/images/tool3.png" />
                    <span class="main_caption">Great Feedback</span>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p>
                        Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore .
                    </p>
                    <a type="button" class="butn">Know More</a></li>
                <li class="cards" id="fifth_4">
                    <img src="/Public/images/tool4.png" />
                    <span class="main_caption">Loaded with Features</span>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p>
                        Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore .
                    </p>
                    <a type="button" class="butn">Know More</a></li>
            </div>
            <!-- End of Cards_Wrap Main -->


         <br><br>
 <br><h3>7. Show off your sites or templates</h3>
            <div class="cards_wrap wide-margin no-bounce no-border grayscale-images shadow clearfix" id="sites_wrapper">

                <li class="cards" id="sites_1">
                        <img src="/Public/images/site1.png">
                </li>

                <li class="cards" id="sites_2">

                        <img src="/Public/images/site2.png">
                </li>

                <li class="cards" id="sites_3">
                        <img src="/Public/images/site3.png">
                </li>
            </div>
            <!-- End of Cards_Wrap Main -->

            <br><br><div class="answer"></div>

            <br><h3>8. Amazing Pricing Tables</h3>
            <div id="pricing_wrapper" class="shadow cards_wrap no-border clearfix">
                <li class="cards" id="price_1">
                    <ul class="pricing_table">
                        <li class="head">Base</li>
                        <li class="price"><img src="/Public/images/price1.png"/></li>
                        <li class="feat"></li>
                        <li class="feat">
                            <span>type</span>
                            <strong>Single</strong> Domain
                        </li>
                        <li class="feat">
                            <span>space</span>
                            <strong>10GB</strong> disk space
                        </li>
                        <li class="feat">
                            <span>ssl</span>
                            Shared <strong>SSL</strong>
                        </li>
                        <li class="feat">
                            <span>space</span>
                            <strong>Unlimited</strong> bandwidth
                        </li>
                        <li><a type="button" class="butn">Free Trial</a></li>
                    </ul>
                </li>
                <li class="cards" id="price_2">
                    <ul class="pricing_table">
                        <li class="head">Base +</li>
                        <li class="price"><img src="/Public/images/price2.png"/></li>
                        <li class="feat"></li>
                        <li class="feat">
                            <span>type</span>
                            <strong>Two</strong> Domains
                        </li>
                        <li class="feat">
                            <span>space</span>
                            <strong>40GB</strong> disk space
                        </li>
                        <li class="feat">
                            <span>ssl</span>
                            Shared <strong>SSL</strong>
                        </li>
                        <li class="feat">
                            <span>space</span>
                            <strong>Unlimited</strong> bandwidth
                        </li>
                        <li><a type="button" class="butn">Free Trial</a></li>
                    </ul>
                </li>
                <li class="cards" id="price_3">
                    <ul class="pricing_table">
                        <li class="head focus">Popular</li>
                        <li class="price focus"><img src="/Public/images/price3.png"/></li>
                        <li class="feat"></li>
                        <li class="feat">
                            <span>type</span>
                            <strong>Ten</strong> Domains
                        </li>
                        <li class="feat">
                            <span>space</span>
                            <strong>100GB</strong> disk space
                        </li>
                        <li class="feat">
                            <span>ssl</span>
                            Shared <strong>SSL</strong>
                        </li>
                        <li class="feat">
                            <span>space</span>
                            <strong>Unlimited</strong> bandwidth
                        </li>
                        <li><a type="button" class="butn">Free Trial</a></li>
                    </ul>
                </li>
                <li class="cards" id="price_4">
                    <ul class="pricing_table">
                        <li class="head">Premium</li>
                        <li class="price"><img src="/Public/images/price4.png"/></li>
                        <li class="feat"></li>
                        <li class="feat">
                            <span>type</span>
                            <strong>100</strong> Domains
                        </li>
                        <li class="feat">
                            <span>space</span>
                            <strong>500GB</strong> disk space
                        </li>
                        <li class="feat">
                            <span>ssl</span>
                            Private <strong>SSL</strong>
                        </li>
                        <li class="feat">
                            <span>space</span>
                            <strong>Unlimited</strong> bandwidth
                        </li>
                        <li><a type="button" class="butn">Free Trial</a></li>
                    </ul>
                </li>
            </div><br><br>

            <!-- End of Cards_Wrap Main --> </div>
    </div>

    <script type="text/javascript" src="/Public/js/jquery-latest.js"></script>
    <script type="text/javascript" src="/Public/js/js.js"></script>
    <script type="text/javascript" src="/Public/js/slimbox2.js"></script>
    <script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
    </body>
    </html>