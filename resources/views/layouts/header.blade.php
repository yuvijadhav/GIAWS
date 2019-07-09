<div id="header1" class="header2-area" >
    <div class="header-top-bar">
        <div style="background-color:rgb(234,238,241); height: 30px;box-shadow: 0px 0px 5px #999;" class="col-sm-12 no-padding" >
            <div class="container">
                <span class="col-sm-4 col-md-6 no-padding" style="margin-top: 3px;">
                    <a href="mailto:sales@garnerinsights.com" target="_top">                
                        <i class="fa fa-envelope-open-o blck" style="font-size:20px;"></i>
                        <span class="blck">sales@garnerinsights.com </span>
                    </a>
                </span>
                <div class="col-sm-4 col-md-6 pull-right no-padding desktop-only">
                    <span class="fa-stack fa-lg col-sm-3 pull-right borders-right" title="Blog">
                        <a href="http://garnerinsights.blogspot.in/" target="_blank">
                            <i class="fa fa-child fa-stack-1x" id="color-gray1"></i>
                        </a>
                    </span>  
                    <span class="fa-stack fa-lg col-sm-3 pull-right borders-right" title="Feeds">
                        <a href="http://feeds.feedburner.com/garnerinsights" target="_blank">
                            <i class="fa fa-empire fa-stack-1x" aria-hidden="true" id="color-gray1"></i>
                        </a>
                    </span>  
                    <span class="fa-stack fa-lg col-sm-3 pull-right borders-right" title="Google+">
                        <a href="https://plus.google.com/115871799176426682944" target="_blank">
                            <i class="fa fa-google-plus fa-stack-1x" id="color-gray1"></i>
                        </a>
                    </span>

                    <span class="fa-stack fa-lg col-sm-3 pull-right borders-right" title="Linkedin">
                        <a href="https://www.linkedin.com/company/garnerinsights/" target="_blank">
                            <i class="fa fa-linkedin fa-stack-1x"  id="color-gray1"></i>
                        </a>
                    </span>
                    <span class="fa-stack fa-lg col-sm-3 pull-right borders-right" title="Twitter">
                        <a href="https://twitter.com/garnerinsights/" target="_blank">
                            <i class="fa fa-twitter fa-stack-1x" style="" id="color-gray1"></i>
                        </a>
                    </span>
                    <span class="fa-stack fa-lg col-sm-3 pull-right borders-right borders-left" title="Facebook">
                        <a href=" https://www.facebook.com/garnerinsights/" target="_blank"><i class="fa fa-facebook fa-stack-1x" id="color-gray1"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-12 no-padding">
            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                <div class="logo-area">
                    <a href="{{config('app.baseURL')}}/home"><img class="img-responsive" src="{{config('app.baseURL')}}/images/logo.png" alt="logo"></a>
                </div>
            </div> 
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 no-padding">
                <ul class="" >                                     
                    <li class="col-lg-5 col-md-6 col-sm-4 col-xs-6"></li>       
                    <li class="col-lg-7 col-md-6 col-sm-4 col-xs-6">
                        <div class="notify-contact" >
                            <p class="col-lg-6 col-md-6 col-sm-4 col-xs-6 borders-right"  style="margin-top:10px;">                                    
                                <i class="fa fa-mobile blck col-lg-4 col-md-4 col-sm-4 col-xs-4 " style="font-size: 40px;margin-right: 1px;"></i>
                                <span class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="margin-top:-30px;margin-left:30px; color: #000; line-height: 15px;font-size:10px;"><b><a href="{{config('app.baseURL')}}/contact" id="black-text">
                                            CALL US NOW FOR A QUOTE
                                        </a></b>
                                </span>
                            </p>

                            <ul>
                                <li><strong style="font-size: 14px;margin-left:20px"><a class="blck" href="tel:+15135495911">+1 &nbsp;&nbsp;513 549 5911 (US)</a></strong></li>
                                <li style="margin-top:-20px;"><strong style="font-size: 14px;margin-left:20px;"><a class="blck" href="tel:+912069535353">+44 203 318 2846 (UK)</a></strong></li>
                            </ul>

                        </div>
                    </li>
                    <li><a class="apply-now-btn" href="{{ route('login') }}" id="logout-button" style="display:none;"></a></li>
                </ul>
                <div class="main-menu-areas bottom-header" id="index-font-name" style="">
                    <div class="col-sm-12 blck" style="margin-top: -22px;">
                        <nav id="desktop-nav">
                            <ul style="height: 58px;">
                                <li><a class="blck" href="{{config('app.baseURL')}}/home">HOME</a></li>
                                <li><a href="{{config('app.baseURL')}}/categories">CATEGORIES</a>
                                    <ul class="mega-menu-area" id="category-menu">  
                                    </ul>  
                                </li>
                                <li><a href="{{config('app.baseURL')}}/about-us">ABOUT US</a></li>
                                <li><a href="{{config('app.baseURL')}}/services">SERVICES</a></li>

                                <li><a href="{{config('app.baseURL')}}/press-release">PRESS RELEASES</a></li>
                                <li><a href="{{config('app.baseURL')}}/blogs">BLOGS</a></li>
                                <!-- <li><a href="{{config('app.baseURL')}}/contact">CONTACT US</a></li> -->


                                @if (Auth::guest())
                                <li><a href="{{ route('login') }}" id="logout-button"></a></li>
                                @else

                                <li>
                                    <a  href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" id="logout-button">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                @endif

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>                     
        </div>                          
    </div>
</div>
<div class="col-xs-11">
    <a href="{{config('app.baseURL')}}/home"><img class="mobile-logo" src="{{config('app.baseURL')}}/images/logo.png" alt="logo"></a>
</div>
</div>
</div>

<!-- Mobile Menu Area Start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a class="blck" href="{{config('app.baseURL')}}/home">Home</a></li>
                            <li><a href="{{config('app.baseURL')}}/about-us">About Us</a></li>
                            <li><a href="{{config('app.baseURL')}}/categories">Category</a></li>
                            <li><a href="{{config('app.baseURL')}}/blogs">Blogs</a></li>
                            <li><a href="{{config('app.baseURL')}}/press-release">Articles</a></li>
                        </ul>
                    </nav>
                </div>           
            </div>
        </div>
    </div>
</div>  

<!-- Mobile Menu Area End -->

<div class="se-pre-con"></div>