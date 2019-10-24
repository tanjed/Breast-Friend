@extends('master')
@section('title','Home')
@section('content')


<div class="home-banner fullscreen" >
    <div class="gradient"></div>
    <div class="banner-content dtable fullscreen">
        <div class="content-inner dtablecell">
            <div class="container">
                <h1>Making Awareness</h1>
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
                    <img src="img/cell.png" alt="" style="height: 400px;width: 400px;margin-bottom: 80px;">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-7 wow fadeInRight">
                <div class="about-intro">
                    <h3>About Breast Cancer</h3>
                    <h5>Breast cancer is a disease in which cells in the breast grow out of control. There are different kinds of breast cancer. The kind of breast cancer depends on which cells in the breast turn into cancer.</h5>
                    <span class="divider"></span>
                    <h3>Tumor Types:</h3>
                   <div class="type" style="margin-top: 10px;">
                       <a  href="" style="font-size: 20px;padding: 5px;">Benign</a>
                       <a  href="" style="font-size: 20px;padding: 5px;">Melignant</a>
                   </div>

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
                <h2>Developer Team</h2>
            </div>

            <div class="proecess-block col-xs-12 col-sm-6 col-md-4"></div>

            <div class="proecess-block col-xs-12 col-sm-6 col-md-4">
                <div class="process-inner">
                    <div class="icon-holder">
                        <img src="tumpa.jpg" alt="" style="height: 150px;width: 150px;border-radius: 5%;">
                    </div>
                    <h4 class="heading">Zerin Nasrin Tumpa</h4>
                    <p class="description">Supervisor</p>
                    <p class="description">Email: zerintumpa.cse@diu.edu.bd</p>

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
                    <p class="description">Trainee</p>
                    <p class="description">Email: ahmed15-6849@diu.edu.bd</p>
                </div>
            </div>

            <div class="proecess-block col-xs-12 col-sm-6 col-md-4">
                <div class="process-inner">
                    <div class="icon-holder">
                        <img src="fahim.jpg" alt="" style="height: 150px;width: 150px;border-radius: 5%;">
                    </div>
                    <h4 class="heading">Md. Shahidul Islam</h4>
                    <p class="description">Trainee</p>
                    <p class="description">Email: shahidul15-7079@diu.edu.bd</p>
                </div>
            </div>

            <div class="proecess-block col-xs-12 col-sm-6 col-md-4 ">
                <div class="process-inner">
                    <div class="icon-holder">
                        <img src="aman.jpg" alt="" style="height: 150px;width: 150px;border-radius: 5%;">
                    </div>
                    <h4 class="heading">Amanullah Aman</h4>
                    <p class="description">Trainee</p>
                    <p class="description">Email: aman15-6875@diu.edu.bd</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- // process -->
<!-- testimonial -->
<div id="testimonial" class="testimonial">
    <div class="dark-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="title fadeInDown">
                <h2>Scholars' Quote </h2>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <!-- Set up your HTML -->
                <div class="testimonial-slider">
                    <div>
                        <p>
                            In 2018, there were an estimated 2.1 million new cases of breast cancer and 627 000 deaths from breast cancer worldwide.
                        </p>
                        <span>IARC</span>
                    </div>
                    <div>
                        <p>
                            Breast cancer is being detected at an earlier, more treatable stage these days, largely because woman are taking more preventive measures, like self-exams and regular mammograms. And treatment is getting better too.
                        </p>
                        <span>Elizabeth Hurley</span>

                    </div>
                    <div>
                        <p>
                            With Breast cancer, it's all about detection. You have to educate young woman and encourage them to do everything they have to do.
                        </p>
                        <span>Bill Rancic</span>

                    </div>
                    <div>
                        <p>
                            Every woman needs to know the facts. And the fact is, when it comes to Breast cancer, every woman at risk.
                        </p>
                        <span>Debbie Wasserman Schultz</span>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- // testimonial -->


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

<!-- experience -->
<div id="experience" class="experience section">
    <div class="gradient" id="knowledge"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 " style="padding: 20px;">
                <div class="exp-block">
                    <h3> <i class="icon-globe"></i> Sings & Symptoms</h3>
                    <ul class="list-none">
                       <li>New lump in the breast or underarm.</li>
                        <li>Thickening or swelling of part of the breast.</li>
                        <li>Irritation or dimpling of breast skin.</li>
                        <li>Redness or flaky skin in the nipple area or the breast.</li>
                        <li>Pulling in of the nipple or pain in the nipple area.</li>
                        <li>Any change in the size or the shape of the breast.</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6" style="padding: 20px;">
                <div class="exp-block">
                    <h3> <i class="icon-book-open"></i> Risk Factors</h3>
                    <ul class="list-none">
                        <li>Not being physically active.</li>
                        <li>Being overweight or obese after menopause.</li>
                        <li>Taking hormones.</li>
                        <li>Reproductive history.</li>
                        <li>Drinking alcohol.</li>
                        <li>Family history of breast cancer.</li>
                    </ul>
                </div>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-xs-12 col-sm-6 " style="padding: 20px;">--}}
{{--                <div class="exp-block">--}}
{{--                    <h3> <i class="icon-globe"></i> Work Experience</h3>--}}
{{--                    <ul class="list-none">--}}
{{--                        <li>--}}
{{--                            <h4>Mad Max Design</h4>--}}
{{--                            <span>OCT 2013 - june 2014</span>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xs-12 col-sm-6" style="padding: 20px;">--}}
{{--                <div class="exp-block">--}}
{{--                    <h3> <i class="icon-book-open"></i> Education</h3>--}}
{{--                    <ul class="list-none">--}}
{{--                        <li>--}}
{{--                            <h4>Maddison University</h4>--}}
{{--                            <p>OCT 2013 - june 2014</p>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
<!-- // experience -->

{{--<!-- contact -->--}}
{{--<div id="contact" class="contact section">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="title fadeInDown">--}}
{{--                <h2>Contact With Me</h2>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium nam ab dolor, <br> dignissimos dicta pariatur impedit earum enim quidem laborum.</p>--}}
{{--            </div>--}}
{{--            <div class="col-xs-12 col-sm-8 col-md-8">--}}
{{--                <!-- <div class="exp-block">--}}
{{--                    <h3>Leave a message</h3>--}}
{{--                    <form action="#" class="contact-form clearfix">--}}
{{--                        <div class="input-field">--}}
{{--                            <input type="text" name="name" placeholder="Name*" class="form-control">--}}
{{--                        </div>--}}
{{--                        <div class="input-field">--}}
{{--                            <input type="email" name="email" placeholder="Email*" class="form-control">--}}
{{--                        </div>--}}
{{--                        <div class="input-field">--}}
{{--                            <textarea name="message" placeholder="Message*" class="form-control"></textarea>--}}
{{--                        </div>--}}
{{--                        <button type="submit" class="btn btn-theme-color pull-right">Send Message</button>--}}
{{--                    </form>--}}
{{--                </div> -->--}}
{{--                <div  class="contact-form">--}}
{{--                    <input type="text" name="name" id="name" placeholder="Name">--}}
{{--                    <input type="email" name="email" id="email" placeholder="Email">--}}
{{--                    <input type="text" name="web" id="web" placeholder="Web">--}}

{{--                    <textarea name="message" id="message" cols="30" rows="10" class="input-message" placeholder="Comment"></textarea>--}}

{{--                    <button type="submit"  class="btn btn-theme-color">SEND</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xs-12 col-sm-4 col-md-4">--}}
{{--                <div class="contact-info">--}}
{{--                    <h4>CONTACT INFO</h4>--}}
{{--                    <p>Explain to you how all this mistaken idea of denouncing a teachings of the great explorer of the truth</p>--}}
{{--                </div>--}}
{{--                <div class="contact-address">--}}
{{--                    <h4>Address</h4>--}}
{{--                    <ul>--}}
{{--                        <li class="address">Road 35/4,<br>--}}
{{--                            Themefisher,Dhaka<br>Bangladesh</li>--}}

{{--                        <li class="phone">[ +00 ] 012 000 088</li>--}}
{{--                        <li class="email">support@themefisher.com</li>--}}
{{--                    </ul>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- // contact -->--}}
@stop