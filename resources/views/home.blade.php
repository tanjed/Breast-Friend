@extends('master')
@section('title','Home')
@section('content')


<div class="home-banner fullscreen" >
    <div class="gradient"></div>
    <div class="banner-content dtable fullscreen">
        <div class="content-inner dtablecell">
            <div class="container">
                <h1>Breast Friend</h1>
                <p>Time to take care of yourself</p>
            </div>
        </div>
    </div>
</div>

<!-- about -->
<div id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 wow fadeInLeft">
                <div class="author-thumb text-center">
                    <img src="img/author.png" alt="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-7 wow fadeInRight">
                <div class="about-intro">
                    <h3>MY NAME IS Angelisa Easter.</h3>
                    <h5>Angelisa Easter Lisa, 28 years young, born and grew up in Australia, Grand Line. Highly motivated creative designer with international client portfolio.</h5>
                    <span class="divider"></span>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- // about -->

<!-- process -->
<div id="process" class="process section">
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="title">
                <h2>Our Working Process</h2>
                <p>A wonderful serenity has taken possession of my entire soul,<br> like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>

            <div class="proecess-block col-xs-12 col-sm-6 col-md-4"></div>

            <div class="proecess-block col-xs-12 col-sm-6 col-md-4">
                <div class="process-inner">
                    <div class="icon-holder">
                        <img src="tumpa.jpg" alt="" style="height: 150px;width: 150px;border-radius: 5%;">
                    </div>
                    <h4 class="heading">Zerin Nasrin Tumpa</h4>
                    <p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac.</p>
                </div>
            </div>

            <div class="proecess-block col-xs-12 col-sm-6 col-md-4 "></div>
        </div>
        <div class="row">
            <div class="proecess-block col-xs-12 col-sm-6 col-md-4">
                <div class="process-inner">
                    <div class="icon-holder">
                        <img src="tanjed.jpg" alt="" style="height: 150px;width: 150px;border-radius: 5%;">

                    </div>
                    <h4 class="heading">Tanjed Ahmed Khan</h4>
                    <p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac.</p>
                </div>
            </div>

            <div class="proecess-block col-xs-12 col-sm-6 col-md-4">
                <div class="process-inner">
                    <div class="icon-holder">
                        <img src="fahim.jpg" alt="" style="height: 150px;width: 150px;border-radius: 5%;">
                    </div>
                    <h4 class="heading">Fahim Mridha</h4>
                    <p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac.</p>
                </div>
            </div>

            <div class="proecess-block col-xs-12 col-sm-6 col-md-4 ">
                <div class="process-inner">
                    <div class="icon-holder">
                        <img src="aman.jpg" alt="" style="height: 150px;width: 150px;border-radius: 5%;">
                    </div>
                    <h4 class="heading">Amanullah Aman</h4>
                    <p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- // process -->

<!-- experience -->
<div id="experience" class="experience section">
    <div class="gradient"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 ">
                <div class="exp-block">
                    <h3> <i class="icon-globe"></i> Work Experience</h3>
                    <ul class="list-none">
                        <li>
                            <h4>Mad Max Design</h4>
                            <span>OCT 2013 - june 2014</span>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </li>
                        <li>
                            <h4>Crazy Design</h4>
                            <p>OCT 2013 - june 2014</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="exp-block">
                    <h3> <i class="icon-book-open"></i> Education</h3>
                    <ul class="list-none">
                        <li>
                            <h4>Maddison University</h4>
                            <p>OCT 2013 - june 2014</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </li>
                        <li>
                            <h4>Mad Max Design</h4>
                            <p>OCT 2013 - june 2014</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // experience -->

<!-- works -->
<div id="screening" class="works section">
    <div class="gradient"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @auth
                  @include('seeResult')
                @else
                    <center>You have to <a href="{{url('/signin')}}">Login</a> to access this feature</center>
                @endauth
            </div>
        </div>
    </div>
</div>
<!-- // works -->

<!-- testimonial -->
<div id="testimonial" class="testimonial">
    <div class="dark-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="title fadeInDown">
                <h2>What By Beloved Client Says</h2>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <!-- Set up your HTML -->
                <div class="testimonial-slider">
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat.
                        </p>
                        <span>Adward Smith</span>
                        <div class="signature">
                            <img src="img/signature.png" alt="">
                        </div>
                    </div>
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat.
                        </p>
                        <span>Adward Smith</span>
                        <div class="signature">
                            <img src="img/signature.png" alt="">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- // testimonial -->

<!-- contact -->
<div id="contact" class="contact section">
    <div class="container">
        <div class="row">
            <div class="title fadeInDown">
                <h2>Contact With Me</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium nam ab dolor, <br> dignissimos dicta pariatur impedit earum enim quidem laborum.</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                <!-- <div class="exp-block">
                    <h3>Leave a message</h3>
                    <form action="#" class="contact-form clearfix">
                        <div class="input-field">
                            <input type="text" name="name" placeholder="Name*" class="form-control">
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" placeholder="Email*" class="form-control">
                        </div>
                        <div class="input-field">
                            <textarea name="message" placeholder="Message*" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-theme-color pull-right">Send Message</button>
                    </form>
                </div> -->
                <div  class="contact-form">
                    <input type="text" name="name" id="name" placeholder="Name">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <input type="text" name="web" id="web" placeholder="Web">

                    <textarea name="message" id="message" cols="30" rows="10" class="input-message" placeholder="Comment"></textarea>

                    <button type="submit"  class="btn btn-theme-color">SEND</button>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="contact-info">
                    <h4>CONTACT INFO</h4>
                    <p>Explain to you how all this mistaken idea of denouncing a teachings of the great explorer of the truth</p>
                </div>
                <div class="contact-address">
                    <h4>Address</h4>
                    <ul>
                        <li class="address">Road 35/4,<br>
                            Themefisher,Dhaka<br>Bangladesh</li>

                        <li class="phone">[ +00 ] 012 000 088</li>
                        <li class="email">support@themefisher.com</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- // contact -->
@stop