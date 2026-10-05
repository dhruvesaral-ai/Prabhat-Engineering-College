<style>
    .custom-dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        min-width: 15rem;
        /* paddin 0; */
        margin: 0;
        font-size: 1rem;
        color: #212529;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 0.45rem;
        border-top: 2px solid #1f3971;
        box-shadow: 1px 1px 4px lightgrey;
    }

    .custom-dropdown-menu.show {
        display: block;
    }

    .custom-dropdown-item {
        display: block;
        width: 100%;
        padding: 0.25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
        text-decoration: none;
        padding: .5rem;
        border-bottom: 1px solid lightgrey;


    }

    .custom-dropdown-item:hover {
        background-color: #f8f9fa;
        color: #16181b;
    }

    .custom-dropdown-submenu {
        position: relative;
    }

    .custom-dropdown-submenu>.custom-dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }

    .blink-button {
        /* background-color: #ffffff;
    color: #1f3971;
    padding: 10px 20px;
    font-weight: bold;
    border: 2px solid #1f3971;
    border-radius: 5px;
    cursor: pointer; */
        animation: blinkColor 6s infinite ease-in-out;
        border: none;
    }


    @keyframes blinkColor {

        0%,
        100% {
            background-color: #ffffff;
            color: #1f3971;
            /* border: 2px solid #1f3971; */
        }

        50% {
            background-color: #1f3971;
            color: #ffffff;
            /* border: 2px solid #ffffff; */
        }
    }

    @media (max-width: 768px) {
        .custom-dropdown-submenu>.custom-dropdown-menu {
            left: 0;
            top: 100%;
            margin-left: 0;
            margin-top: 0;
        }
    }
</style>

<header>
    <div class="header-top">
        <div class="container-fluid custom-column-width">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-5">
                    <ul class="header-contact">
                        <li>
                            <span>Admission Helpline :</span>
                            <a href="tel:+91-7007343755">+91-7007343755</a>,
                            <a href="tel:+91-9519999643">+91-9519999643</a>,<br>
                            <a href="tel:+91-8896557875">+91-8896557875</a>

                        </li>

                        <li>
                            <span>Email :</span>
                            <a href="mailto:info@smslucknow.ac.in">info@prabhateng.co.in</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-7">
                    <div class="header-right float-right text-right">

                        <div class="header-btn">
                            <a href="<?php echo e(route('for.student')); ?>"  class="btn"><span>Admission Form</span></a>

                            <a href="" class="btn btn-main btn-small admission_enquiry" data-toggle="modal"
                                data-target="#contact-modal"><i class="fa fa-question-circle mr-2"></i>Admission
                                Enquiry</a>


                            <a href="<?php echo e(route('careers')); ?>" class="btn btn-main btn-small feed-btn">Careers</a>
                            <a href="<?php echo e(route('online.payment')); ?>" class="btn btn-main btn-small feed-btn">Online Fee Payment</a>
                            <a href="https://aktu.ac.in/"  class="btn btn-main btn-small feed-btn blink-button">AKTU</a>
                            <a href="https://bteup.ac.in/webapp/home.aspx"  class="btn btn-main btn-small feed-btn blink-button">BTEUP</a>
                            <!-- <a href="https://aktu.ac.in/" ><img src="<?php echo e(asset('public/website/new-img/aktu.webp')); ?>"   style="height:55px;"></a>
                            <a href=""  ><img src="<?php echo e(asset('public/website/new-img/bteup.webp')); ?>"   style="height:50px;"></a> -->
                        </div>
                        <!-- <div class="header-socials">
                            <ul>

                                <li><a href="https://www.facebook.com/peck419" ><i
                                            class="fab fa-facebook-f"></i></a></li>

                                <li><a href="" ><i class="fab fa-linkedin"></i></a></li>

                                <li><a href=""><i class="fab fa-youtube"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>

                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Menu Start -->

    <div class="site-navigation main_menu " id="mainmenu-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid custom-column-width">
                <a class="navbar-brand site-logo" href="<?php echo e(route('index')); ?>">
                    <img alt="" src="<?php echo e(asset('public/website/prabhat/prabhat.jpg')); ?>" class="img-fluid">
                </a>

                <!-- Toggler -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu"
                    aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->

                <!-- / .navbar-collapse -->

                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle " data-toggle="dropdown" id="navbar_0"
                                role="button" aria-haspopup="true" aria-expanded="false">About &
                                Updates<i class="fa fa-angle-down"></i></a>

                            <div class="dropdown-menu" aria-labelledby="navbar_0">
                                <a class="dropdown-item" href="<?php echo e(route('about.college')); ?>">
                                    <i class="fa far fa-file-alt"></i> &nbsp;
                                    About College</a>

                                <a class="dropdown-item" href="<?php echo e(route('chairman.message')); ?>">
                                    <i class="fa fas fa-users"></i> &nbsp;
                                    Chairman Message</a>

                                <a class="dropdown-item" href="<?php echo e(route('director.message')); ?>">
                                    <i class="fa fas fa-landmark"></i> &nbsp;
                                    Director Message</a>







                                <a class="dropdown-item" href="<?php echo e(route('administrator.message')); ?>">
                                    <i class="fa fas fa-users"></i> &nbsp;
                                    Administrator Message</a>

                                <a class="dropdown-item" href="<?php echo e(route('principal.message')); ?>">
                                    <i class="fa far fa-building"></i> &nbsp;
                                    Principal's Message</a>
                                <a class="dropdown-item" href="<?php echo e(route('pharmacy.principal.message')); ?>">
                                    <i class="fa far fa-building"></i> &nbsp;
                                    Principal’s Message – Pharmacy</a>
                            </div>
                        </li>
                        <!-- HTML: Updated Responsive Courses Dropdown -->
                        <li class="nav-item custom-dropdown dropdown">
                            <a href="#" class="nav-link" id="coursesToggle">Courses <i class="fa fa-angle-down"></i></a>
                            <div class="custom-dropdown-menu" id="coursesMenu">
                                <!-- B.Tech Submenu -->
                                <div class="custom-dropdown-submenu">
                                    <a class="custom-dropdown-item" href="#"> <i class="fa fas fa-graduation-cap"></i> &nbsp;B.Tech</a>
                                    <div class="custom-dropdown-menu">
                                        <a class="custom-dropdown-item" href="<?php echo e(route('computer.engineering')); ?>">Computer Science and Engineering</a>
                                        <!-- <a class="custom-dropdown-item" href="<?php echo e(route('electronic.engineering')); ?>">Electronics and Communication Engineering</a> -->
                                        <a class="custom-dropdown-item" href="<?php echo e(route('electrical.engineering')); ?>">Electrical Engineering</a>
                                        <a class="custom-dropdown-item" href="<?php echo e(route('mechanical.engineering')); ?>">Mechanical Engineering</a>
                                        <a class="custom-dropdown-item" href="<?php echo e(route('civil.engineering')); ?>">Civil Engineering</a>
                                    </div>
                                </div>

                                <!-- Polytechnic Submenu -->
                                <div class="custom-dropdown-submenu">
                                    <a class="custom-dropdown-item" href="#"> <i class="fa fas fa-graduation-cap"></i> &nbsp;Polytechnic</a>
                                    <div class="custom-dropdown-menu">
                                        <a class="custom-dropdown-item" href="<?php echo e(route('polytechnic.me')); ?>">Mechanical Engineering</a>
                                        <a class="custom-dropdown-item" href="<?php echo e(route('polytechnic.me.p')); ?>">Mechanical Engineering ( Production) </a>
                                        <a class="custom-dropdown-item" href="<?php echo e(route('polytechnic.ce')); ?>">Civil Engineering</a>
                                        <a class="custom-dropdown-item" href="<?php echo e(route('polytechnic.ee')); ?>">Electrical Engineering</a>
                                    </div>
                                </div>

                                <!-- Pharmacy Submenu -->
                                <div class="custom-dropdown-submenu">
                                    <a class="custom-dropdown-item" href="#"> <i class="fa fas fa-graduation-cap"></i> &nbsp;Pharmacy</a>
                                    <div class="custom-dropdown-menu">
                                        <a class="custom-dropdown-item" href="<?php echo e(route('b.pharm')); ?>">B.Pharm</a>
                                        <a class="custom-dropdown-item" href="<?php echo e(route('d.pharm')); ?>">D.Pharm</a>
                                    </div>
                                </div>

                                <!-- MBA Submenu -->
                                <div class="custom-dropdown-submenu">
                                    <a class="custom-dropdown-item" href="#"> <i class="fa fas fa-graduation-cap"></i> &nbsp;MBA</a>
                                    <div class="custom-dropdown-menu">
                                        <a class="custom-dropdown-item" href="<?php echo e(route('mba.finance')); ?>">Finance</a>
                                        <a class="custom-dropdown-item" href="<?php echo e(route('mba.marketing')); ?>">Marketing</a>
                                        <a class="custom-dropdown-item" href="<?php echo e(route('mba.hrm')); ?>">HRM</a>
                                        <a class="custom-dropdown-item" href="<?php echo e(route('mba.it')); ?>">Information Technology</a>
                                        <a class="custom-dropdown-item" href="<?php echo e(route('mba.internation.business')); ?>">Information Business</a>
                                        <a class="custom-dropdown-item" href="<?php echo e(route('mba.operation.management')); ?>">Operation Management</a>
                                    </div>
                                </div>

                                <a class="custom-dropdown-item" href="<?php echo e(route('science.humanities')); ?>"> <i class="fa fas fa-graduation-cap"></i> &nbsp;Applied Science and Humanities</a>
                            </div>
                        </li>


                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle " data-toggle="dropdown"
                                id="navbar_2" role="button" aria-haspopup="true" aria-expanded="false">Training &
                                Placement<i class="fa fa-angle-down"></i></a>

                            <div class="dropdown-menu" aria-labelledby="navbar_2">



                                <a class="dropdown-item" href="<?php echo e(route('placement.cell')); ?>">
                                    <i class="fa fas fa-users"></i> &nbsp;
                                    Training & Placement Cell</a>

                                <a class="dropdown-item" href="<?php echo e(route('placement.records')); ?>">
                                    <i class="fa fa-info-circle"></i> &nbsp;
                                    Message From T & P Cell </a>
                            </div>

                        </li>

                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle " data-toggle="dropdown"
                                id="navbar_1" role="button" aria-haspopup="true"
                                aria-expanded="false">Admissions<i class="fa fa-angle-down"></i></a>

                            <div class="dropdown-menu" aria-labelledby="navbar_1">

                                <a class="dropdown-item" href="<?php echo e(route('for.student')); ?>">
                                    <i class="fa fas fa-dollar-sign"></i> &nbsp;
                                    Online Registration</a>



                                <a class="dropdown-item" href="<?php echo e(route('fee.structure')); ?>">
                                    <i class="fa fas fa-dollar-sign"></i> &nbsp;
                                    Fee Structure</a>
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#contact-modal">
                                    <i class="fa fas fa-dollar-sign"></i> &nbsp;
                                    Admission Enquiry</a>

                                <a class="dropdown-item" href="<?php echo e(route('admission.cell')); ?>">
                                    <i class="fa fas fa-dollar-sign"></i> &nbsp;
                                    Admission Cell</a>

                                <a class="dropdown-item" href="<?php echo e(asset('public/website/img/Prabhat engineering college Brochure.pdf')); ?>" download target="_blank">
                                    <i class="fa fas fa-file-pdf"></i> &nbsp;
                                    Download Brochure</a>

                                <a class="dropdown-item" href="<?php echo e(route('faculty.feedback')); ?>"  >
                                    <i class="fa fas fa-comments"></i> &nbsp;
                                    Faculty Feedback</a>
                                <a class="dropdown-item" href="<?php echo e(route('student.feedback')); ?>" >
                                    <i class="fa fas fa-comments"></i> &nbsp;
                                    Student Feedback</a>

                                <a class="dropdown-item" href="tel:+917007343755">
                                    <i class="fa fas fa-phone"></i> &nbsp;
                                    Helpline: 7007343755</a>
                            </div>

                        </li>

                        <li class="nav-item dropdown">
                        <li class="nav-item">
                            <a href="<?php echo e(route('gallery.records')); ?>" class="nav-link">
                                <i class="fa far fa-eye"></i> &nbsp; Gallery Records
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(route('contact.us')); ?>" class="nav-link">
                                <i class="fa far fa-eye"></i> &nbsp; Contact Us
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle " data-toggle="dropdown"
                                id="navbar_6" role="button" aria-haspopup="true" aria-expanded="false">Login &
                                Register<i class="fa fa-angle-down"></i></a>

                            <div class="dropdown-menu" aria-labelledby="navbar_6">



                                <a class="dropdown-item" href="<?php echo e(route('for.student')); ?>">
                                    <i class="fa fa fa-calendar"></i> &nbsp;
                                    For Student</a>



                                <a class="dropdown-item" href="<?php echo e(route('for.faculty')); ?>">
                                    <i class="fa far fa-images"></i> &nbsp;
                                    For Faculty</a>
                            </div>

                        </li>

                    </ul>
                    <ul class="header-contact-right d-none d-lg-block">

                        <li><a href="" class="header-search search_toggle"> <i
                                    class="fa fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.getElementById('coursesToggle');
        const menu = document.getElementById('coursesMenu');

        toggle.addEventListener('mouseenter', () => menu.classList.add('show'));
        toggle.addEventListener('mouseleave', () => menu.classList.remove('show'));
        menu.addEventListener('mouseenter', () => menu.classList.add('show'));
        menu.addEventListener('mouseleave', () => menu.classList.remove('show'));

        // Show/hide submenus
        document.querySelectorAll('.custom-dropdown-submenu').forEach(submenu => {
            const trigger = submenu.querySelector('.custom-dropdown-item');
            const subMenu = submenu.querySelector('.custom-dropdown-menu');

            trigger.addEventListener('mouseenter', () => {
                document.querySelectorAll('.custom-dropdown-submenu .custom-dropdown-menu').forEach(m => {
                    if (m !== subMenu) m.classList.remove('show');
                });
                subMenu.classList.add('show');
            });

            submenu.addEventListener('mouseleave', () => {
                subMenu.classList.remove('show');
            });
        });

        // Mobile support: toggle menu on click
        if (window.innerWidth <= 768) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                menu.classList.toggle('show');
            });

            document.querySelectorAll('.custom-dropdown-submenu > .custom-dropdown-item').forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    const nextMenu = this.nextElementSibling;
                    if (nextMenu) nextMenu.classList.toggle('show');
                });
            });
        }
    });
</script><?php /**PATH /home/u127772000/domains/prabhateng.co.in/public_html/resources/views/website/layout/header.blade.php ENDPATH**/ ?>