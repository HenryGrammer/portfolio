@extends('layouts.app')
@section('title')
About
@endsection

@section('content')

<!-- About Section -->
<section id="about" class="about section mt-5">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
                {{-- <img src="assets/img/profile-img.jpg" class="img-fluid" alt=""> --}}
            </div>
            <div class="col-lg-8 content">
                <h2>Web Developer.</h2>
                {{-- <p class="fst-italic py-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore
                    magna aliqua.
                </p> --}}
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>May 8, 2000</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                <span>www.example.com</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+639354651304</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Quezon City, Philippines</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            @php
                                $birth_date = new DateTime("2000-05-08");
                                $date_today = new DateTime();

                                $age = $date_today->diff($birth_date);
                            @endphp
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$age->y.' Years Old'}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>BS Information Technology</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                <span>schultzhenryboado@gmail.com</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <p class="py-3">
                    Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci
                    omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                    Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque
                    neque.
                </p> --}}
            </div>
        </div>

    </div>

</section><!-- /About Section -->

<!-- Stats Section -->
<section id="stats" class="stats section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-emoji-smile"></i>
                <div class="stats-item">
                    @php
                        $first_exp = new DateTime("2023-04-12");
                        $date = new DateTime();
                        $year_of_exp = $date->diff($first_exp);
                    @endphp
                    <span data-purecounter-start="0" data-purecounter-end="{{$year_of_exp->y}}" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Years of Experience</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-journal-richtext"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Projects</p>
                </div>
            </div><!-- End Stats Item -->

            {{-- <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-headset"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>
            </div><!-- End Stats Item --> --}}

            {{-- <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-people"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Hard Workers</p>
                </div>
            </div><!-- End Stats Item --> --}}

        </div>

    </div>

</section><!-- /Stats Section -->

<!-- Skills Section -->
<section id="skills" class="skills section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <div><span>My</span> <span class="description-title">Skills</span></div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

                <div class="progress">
                    <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

                <div class="progress">
                    <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

            </div>

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill"><span>PHP</span> <i class="val">100%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

                {{-- <div class="progress">
                    <span class="skill"><span>WordPress/CMS</span> <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item --> --}}

                {{-- <div class="progress">
                    <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item --> --}}

            </div>

        </div>

    </div>

</section><!-- /Skills Section -->

<!-- Interests Section -->
<section id="interests" class="interests section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Frameworks</h2>
        <div><span>My</span> <span class="description-title">Frameworks that I used</span></div>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="features-item">
                    {{-- <i class="bi bi-bootstrap" style="color: #712cf9;"></i> --}}
                    <i class="fa-brands fa-bootstrap" style="color: #712cf9;"></i>
                    <h3><a href="javascript:void()" class="stretched-link">Bootstrap</a></h3>
                </div>
            </div><!-- End Feature Item -->

            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="features-item">
                    <i class="fa-brands fa-laravel" style="color: rgb(249,50,44,1);"></i>
                    <h3><a href="javascript:void()" class="stretched-link" >Laravel</a></h3>
                </div>
            </div><!-- End Feature Item -->

            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="features-item">
                    <i class="fa-brands fa-vuejs" style="color: #42b883;"></i>
                    <h3><a href="javascript:void()" class="stretched-link">Vue JS</a></h3>
                </div>
            </div><!-- End Feature Item -->

            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="features-item">
                    <i class="fa-solid fa-database"></i>
                    <h3><a href="javascript:void()" class="stretched-link">MySql</a></h3>
                </div>
            </div><!-- End Feature Item -->

        </div>

    </div>

</section><!-- /Interests Section -->

<!-- Testimonials Section -->
{{-- <section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <div><span>Check my</span> <span class="description-title">Testimonials</span></div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper" data-speed="600" data-delay="5000">
            <script type="application/json" class="swiper-config">
                {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 20
                  }
                }
              }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item" "="">
              <p>
                <i class=" bi bi-quote quote-icon-left"></i>
                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                            Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at
                            semper.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                                culpa.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                minim.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                                veniam.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                                quid.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Testimonials Section --> --}}

@endsection