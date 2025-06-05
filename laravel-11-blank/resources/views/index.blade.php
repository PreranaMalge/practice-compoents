@extends('layouts.app')
@section('content')

    <div class="container main-container">
        <div class="row main-row">
            <div class="col-6 logo-img">
                <img src="./Images/logo.png" alt="logo" style="width: 80px">
            </div>

            <div class="col-6 ">

                <nav class="navbar navbar-expand-lg navbar-light">

                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>


                        <div class="collapse navbar-collapse navbar-column" id="navbarSupportedContent">

                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="btn btn-primary btn-lg">REQUEST QUOTE</button>
                                </li>


                        </div>
                    </div>
            </div>
        </div>
        <div class="about">
            <h1>About Us</h1>
            <h4>Welcome To Kalpraj Solution</h4>
            <p>a leading web development agency dedicated to delivering innovative web solutions that help
                businesses achieve their online goals. Since our founding, we’ve helped numerous clients across
                industries create custom web applications that enhance their online presence and drive results. At
                Kalpraj Solutions, we’re committed to delivering high-quality work and exceptional customer service.
            </p>

            <p>&nbsp;</p>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Who Are We</h5>
                            <p class="card-text">We are a leading web development agency dedicated to delivering
                                innovative web solutions that help businesses achieve their online goals. Since our
                                founding, we’ve helped numerous clients across industries create custom web
                                applications that enhance their online presence and drive results. At Kalpraj
                                Solutions, we’re committed to delivering high-quality work and exceptional customer
                                service.

                            </p>

                        </div>


                    </div>
                </div>


                <div class="col-4">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Our Mission</h5>
                            <p class="card-text">
                                At Kalpraj Solutions, our mission is to provide custom web solutions that empower
                                businesses to succeed in the digital world. We believe in creating intuitive and
                                user-friendly websites that are not only visually appealing but also functional and
                                effective. We are committed to staying on the cutting edge of web development
                                technologies and providing our clients with the highest quality work and exceptional
                                customer service.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">What We Do</h5>
                            <p class="card-text">Web Application Development
                                E-Commerce Development
                                Marketing
                                Social Media
                                eCommerce Store
                                Website Design
                                Mobile Application Development
                                Web Hosting and Maintenance
                                Security Consulting
                                SEO Consulting
                                Complete On Page SEO
                                Backlinks Building
                                Tech Support


                            </p>

                            <p>&nbsp;</p>

                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="container middle-container">
            <div class="row middle-row">
                <div class="col-6 image">
                    <img src="./Images/background.jpg" alt="background">
                </div>
                <div class="col-6 para">
                    <h1>Why Choose Us</h1>
                    <p>At Kalpraj Solutions, we are committed to providing our clients with the best possible web
                        development experience. Here are a few reasons why you should choose us:

                    </p>

                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Experienced Professionals
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Our team of web developers and designers have years of experience
                                                    creating
                                                    custom web solutions for businesses across industries.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Quality
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>We are committed to delivering high-quality work that meets the
                                                    unique needs
                                                    of our clients. Our team of skilled professionals use the latest web
                                                    development technologies to create intuitive and user-friendly
                                                    websites.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                communication
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>We believe that communication is key to the success of any project.
                                                    That’s
                                                    why we keep our clients informed every step of the way, providing
                                                    regular
                                                    updates and seeking feedback to ensure that we are meeting their
                                                    needs and
                                                    expectations.

                                                </p>
                                            </div>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Result Oriented Projects
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>We focus on delivering measurable results for our clients,
                                                            whether it’s increased traffic to their website, higher
                                                            conversion rates, or improved customer engagement.

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Best ROI Techniques
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>We use the latest web development techniques to help our
                                                            clients achieve the best possible return on investment
                                                            (ROI), ensuring that their website is not only visually
                                                            appealing but also optimized for maximum performance and
                                                            results.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        24 X 7 Live Support
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>At Kalpraj Solutions, we pride ourselves on providing
                                                            exceptional customer service. We are dedicated to ensuring
                                                            that our clients are completely satisfied with the work we
                                                            deliver, and we go above and beyond to exceed their
                                                            expectations.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <strong>Some Numbers</strong>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="paragraph">Here are some numbers that highlight the success we’ve achieved:</p>
                </div>
                <div class="container ">
                    <div class="row">
                        <div class="col">
                            <span class="fw-bold">99% </span>client satisfaction rate
                        </div>
                        <div class="col">
                            <span class="fw-bold">150+ </span> projects completed
                        </div>
                        <div class="col">
                            <span class="fw-bold"> 50k+</span> New Users Acquired on Platforms
                        </div>
                        <div class="col">
                            <span class="fw-bold">16M+ </span>Lines of code written
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <div class="container">
        <div class="row">
            <div class="col-6 heading">
                <h2>Would you like to start a project with us?</h2>
            </div>
            <div class="col-6 bun">
                <button type="button" class="btn btn-primary btn-lg">CALL 7028295331</button>
            </div>
        </div>
       </div>

        <div class="footer">
        <div class="container">
            <div class="row">

                <div class="col-3 footer-img">
                    <img src="./Images/kalpraj-logo.png" alt="logo">
                </div>

                <div class="col-3 footer-ul">
                    <h2>Company</h2>
                    <ul>
                        <li>Home</li>
                        <li>About</li>
                        <li>Services</li>
                        <li>Contact</li>
                    </ul>
                </div>

                <div class="col-3 footer-ul">
                    <h2>Business</h2>
                    <ul>
                        <li>Project</li>
                        <li>Our team</li>
                        <li>Facts</li>
                        <li>Customers</li>
                    </ul>
                </div>

                <div class="col-3 footer-ul">
                    <h2>Get in touch</h2>
                    <p>GAT NO. 183, TRISHNIT PARK, NANEKARWADI CHAKAN, KHED, Chakan, Pune, Maharashtra, 410501</p>
                    <p>pushkraj@kalprajsolutions.com
                        +917028295331</p>
                </div>
            </div>
        </div>

        <hr>
        <p class="footer-para">Copyright © 2025 Kalpraj Solutions | Powered by Kalpraj Solutions</p>

    </div>

    </div>


@endsection
