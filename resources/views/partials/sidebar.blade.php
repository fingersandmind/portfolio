<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
    <div class="text-center">
        <div class="author-img" style="background-image: url({{ asset('assets/images/profile.jpg') }});"></div>
        <h1 id="colorlib-logo"><a href="index.html">{{ ucfirst($user->name) ?? 'John Doe' }}</a></h1>
        <span class="position"><a href="#">Laravel Developer</a> in Philippines</span>
    </div>
    <nav id="colorlib-main-menu" role="navigation" class="navbar">
        <div id="navbar" class="collapse">
            <ul>
                <li class="active"><a href="#" data-nav-section="home">Home</a></li>
                <li><a href="#" data-nav-section="about">About</a></li>
                <li><a href="#" data-nav-section="services">Services</a></li>
                <li><a href="#" data-nav-section="skills">Skills</a></li>
                <li><a href="#" data-nav-section="education">Education</a></li>
                <li><a href="#" data-nav-section="experience">Experience</a></li>
                <li><a href="#" data-nav-section="work">Work</a></li>
                {{-- <li><a href="#" data-nav-section="blog">Blog</a></li> --}}
                <li><a href="#" data-nav-section="contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="colorlib-footer">
        <p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; {{ now()->year }} All rights reserved | Powered by @fingersandmind <br> This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </span> <span><a href="https://unsplash.com/" target="_blank" style="color:whitesmoke">Unsplash.com</a></span></small></p>
        <ul>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-twitter2"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
            <li><a href="#"><i class="icon-linkedin2"></i></a></li>
        </ul>
    </div>

</aside>