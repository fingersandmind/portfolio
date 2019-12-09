@extends('layouts.master')

@section('content')
<section id="colorlib-hero" class="js-fullheight" data-section="home">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url({{ asset('assets/images/img_bg_1.jpg') }});">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                            <div class="slider-text-inner js-fullheight">
                                <div class="desc">
                                    <h1>Hi! <br>{{ ucfirst($user->name) ?? 'John Doe' }}</h1>
                                    <p><a class="btn btn-primary btn-learn">Download CV <i class="icon-download4"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{ asset('assets/images/img_bg_2.jpg') }});">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h1>I am <br>Laravel Developer</h1>
                                    <p><a class="btn btn-primary btn-learn">View Portfolio <i class="icon-briefcase3"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="colorlib-about" data-section="about">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-12">
                <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="col-md-12">
                        <div class="about-desc">
                            <span class="heading-meta">About Us</span>
                            <h2 class="colorlib-heading">Who Am I?</h2>
                            <p><strong>Hi I'm {{ ucfirst($user->name) }}</strong> {{ $user->profile->about }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                        <div class="services color-1">
                            <span class="icon2"><i class="icon-bulb"></i></span>
                            <h3>Backend Developer</h3>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                        <div class="services color-2">
                            <span class="icon2"><i class="icon-globe-outline"></i></span>
                            <h3>RESTful API</h3>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
                        <div class="services color-3">
                            <span class="icon2"><i class="icon-data"></i></span>
                            <h3>OS Linux and Windows</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                        <div class="hire">
                            <h2>I am happy to know you <br>that 6+ projects done sucessfully!</h2>
                            <a href="#" class="btn-hire">Hire me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="colorlib-services" data-section="services">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">What I do?</span>
                <h2 class="colorlib-heading">Here are some of my expertise</h2>
            </div>
        </div>
        <div class="row row-pt-md">
            <div class="col-md-4 text-center animate-box">
                <div class="services color-1">
                    <span class="icon">
                        <i class="icon-bulb"></i>
                    </span>
                    <div class="desc">
                        <h3>Innovative Ideas</h3>
                        <p>Design, build, or maintain web sites, by refactoring unorganized codes and
                            put documentations for it to be highly maintainable.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services color-2">
                    <span class="icon">
                        <i class="icon-data"></i>
                    </span>
                    <div class="desc">
                        <h3>Software</h3>
                        <p>Can develop with any of this Operating Systems : Windows or Linux</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services color-3">
                    <span class="icon">
                        <i class="icon-cog"></i>
                    </span>
                    <div class="desc">
                        <h3>Troubleshooter</h3>
                        <p>Identify problems uncovered by testing or customer feedback,
                            and correct problems or refer problems to appropriate personnel
                            for correction.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services color-4">
                    <span class="icon">
                        <i class="icon-pencil"></i>
                    </span>
                    <div class="desc">
                        <h3>RESTful API</h3>
                        <p>Write a full RESTful API for third-part software or systems.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services color-5">
                    <span class="icon">
                        <i class="icon-data"></i>
                    </span>
                    <div class="desc">
                        <h3>Analytics</h3>
                        <p>Confer with management or development teams to prioritize
                            needs, resolve conflicts, develop content criteria, or choose
                            solutions</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services color-6">
                    <span class="icon">
                        <i class="icon-star"></i>
                    </span>
                    <div class="desc">
                        <h3>Flexibility</h3>
                        <p>Maintain understanding of current web technologies or
                            programming practices through continuing education, reading or
                            participation in professional conferences, workshops, or groups.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="colorlib-counter" class="colorlib-counters" style="background-image: url({{ asset('assets/images/cover_bg_1.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="colorlib-narrow-content">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="50" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Cups of coffee</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="6" data-speed="500" data-refresh-interval="1"></span>
                <span class="colorlib-counter-label">Projects</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="6" data-speed="500" data-refresh-interval="1"></span>
                <span class="colorlib-counter-label">Clients</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="0" data-speed="500" data-refresh-interval="1"></span>
                <span class="colorlib-counter-label">Partners</span>
            </div>
        </div>
    </div>
</div>

<section class="colorlib-skills" data-section="skills">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">My Specialty</span>
                <h2 class="colorlib-heading animate-box">My Skills</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <p>
                    Focused. Recent college graduate with a Bachelor of Science (B.S.) in
                    Information Technology, with 9 months of work experience. Aiming to
                    leverage academic experience and a proven knowledge of database design,
                    database development, and management information systems to
                    successfully fill the Junior Backend Developer role at your company.
                    Frequently praised as hard-working by my peers. I can be relied upon to help
                    your company achieve its goals.
                </p>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="progress-wrap">
                    <h3>Backend Laravel</h3>
                    <div class="progress">
                            <div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100" style="width:75%">
                        <span>75%</span>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                <div class="progress-wrap">
                    <h3>Frontend Laravel</h3>
                    <div class="progress">
                            <div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100" style="width:60%">
                        <span>80%</span>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="progress-wrap">
                    <h3>HTML5</h3>
                    <div class="progress">
                            <div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
                            aria-valuemin="0" aria-valuemax="100" style="width:85%">
                        <span>80%</span>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                <div class="progress-wrap">
                    <h3>Bootstrap</h3>
                    <div class="progress">
                            <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                            aria-valuemin="0" aria-valuemax="100" style="width:90%">
                        <span>75%</span>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="progress-wrap">
                    <h3>jQuery</h3>
                    <div class="progress">
                            <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        <span>65%</span>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                <div class="progress-wrap">
                    <h3>RESTful API</h3>
                    <div class="progress">
                            <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        <span>75%</span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="colorlib-education" data-section="education">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">Education</span>
                <h2 class="colorlib-heading animate-box">Education</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <div class="fancy-collapse-panel">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bachelor Degree in Information Technology
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p><strong>Mater Dei College</strong> or <strong>MDC</strong> is a Roman Catholic institution located in Tubigon, Bohol, Philippines. 
                                        It is a private and co-educational school.
                                        Mater Dei College Advocates:
                                        Wisdom thru Scholarship, Charity thru Service, Prayerlife thru Living the Gospel.</p>
                                        <ul>
                                            <li>BS. in Information Technology S.Y 2015-2019</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="colorlib-experience" data-section="experience">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">Experience</span>
                <h2 class="colorlib-heading animate-box">Work Experience</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="timeline-centered">
                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                    <div class="timeline-entry-inner">

                        <div class="timeline-icon color-1">
                            <i class="icon-pen2"></i>
                        </div>

                        <div class="timeline-label">
                            <h2><a href="#">Freelancer Laravel Developer</a> <span>2018-Present</span></h2>
                            <p>I started my freelancing career when an Upwork Senior Laravel developer invited me to work for him as an apprentice
                                for 6 months. Since then I continued to grow and eventually starts my own career as a Freelancer for 3 months until
                                gets endorsed by my former college instructor as a developer for a start-up company "Coolmart".
                            </p>
                        </div>
                    </div>
                    </article>


                    <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
                    <div class="timeline-entry-inner">
                        <div class="timeline-icon color-2">
                            <i class="icon-pen2"></i>
                        </div>
                        <div class="timeline-label">
                            <h2><a href="#">Back End Developer at Coolmart Company</a> <span>2019</span></h2>
                            <p>Back End Developer for 4 months developed an E-commerce platform for the company.</p>
                        </div>
                    </div>
                    </article>

                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                    <div class="timeline-entry-inner">
                        <div class="timeline-icon color-3">
                            <i class="icon-pen2"></i>
                        </div>
                        <div class="timeline-label">
                            <h2><a href="#">Technical Adviser</a> <span>2019-Present</span></h2>
                            <p>Technical Adviser for college students thesis</p>
                        </div>
                    </div>
                    </article>

                    <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
                    <div class="timeline-entry-inner">
                        <div class="timeline-icon color-none">
                        </div>
                    </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="colorlib-work" data-section="work">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">My Work</span>
                <h2 class="colorlib-heading animate-box">Recent Work</h2>
            </div>
        </div>
        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
            <div class="col-md-12">
                <p class="work-menu"><span><a href="#" class="active">Graphic Design</a></span> 
                    <span><a href="#">Web Applications</a></span> 
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="project" style="background-image: url({{ asset('assets/images/img-1.jpg') }}') }});">
                    <div class="desc">
                        <div class="con">
                            <h3><a href="work.html">Coolmart (Backend)</a></h3>
                            <span>Admin Dashboard</span>
                            <p class="icon">
                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                <div class="project" style="background-image: url({{ asset('assets/images/img-2.jpg') }});">
                    <div class="desc">
                        <div class="con">
                            <h3><a href="work.html">Triple-E Catering Services</a></h3>
                            <span>Catering booking Web App</span>
                            <p class="icon">
                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
                <div class="project" style="background-image: url({{ asset('assets/images/img-3.jpg') }});">
                    <div class="desc">
                        <div class="con">
                            <h3><a href="work.html">Coolmart (Frontend)</a></h3>
                            <span>E-Commerce Website </span>
                            <p class="icon">
                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-12 animate-box">
                <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
            </div>
        </div> --}}
    </div>
</section>

{{-- <section class="colorlib-blog" data-section="blog">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">Read</span>
                <h2 class="colorlib-heading">Recent Blog</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="blog-entry">
                    <a href="blog.html" class="blog-img"><img src="{{ asset('assets/images/blog-1.jpg') }}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                    <div class="desc">
                        <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                        <h3><a href="blog.html">Renovating National Gallery</a></h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInRight">
                <div class="blog-entry">
                    <a href="blog.html" class="blog-img"><img src="{{ asset('assets/images/blog-2.jpg') }}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                    <div class="desc">
                        <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                        <h3><a href="blog.html">Wordpress for a Beginner</a></h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="blog-entry">
                    <a href="blog.html" class="blog-img"><img src="{{ asset('assets/images/blog-3.jpg') }}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                    <div class="desc">
                        <span><small>April 14, 2018 </small> | <small> Inspiration </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                        <h3><a href="blog.html">Make website from scratch</a></h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animate-box">
                <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
            </div>
        </div>
    </div>
</section> --}}

<section class="colorlib-contact" data-section="contact">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">Get in Touch</span>
                <h2 class="colorlib-heading">Contact</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="icon-globe-outline"></i>
                    </div>
                    <div class="colorlib-text">
                        <p><a href="{{ $user->profile->website }}">www.portofolio-janrey.tk</a></p>
                    </div>
                </div>

                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="icon-map"></i>
                    </div>
                    <div class="colorlib-text">
                        <p>{{ $user->profile->address }}</p>
                    </div>
                </div>

                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="colorlib-icon">
                        <i class="icon-phone"></i>
                    </div>
                    <div class="colorlib-text">
                        <p><a href="tel://">{{ $user->profile->phone }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-md-push-1">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection