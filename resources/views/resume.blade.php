@extends('layouts.app')

@section('content')
<!-- Resume Section -->
<section id="resume" class="resume section mt-5">

    <div class="container">

        <div class="row">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <h3 class="resume-title">Summary</h3>

                <div class="resume-item pb-0">
                    <h4>Schultz Henry Boado</h4>
                    <p><em>To secure a fulfilling position where I can contribute my expertise, skills, and knowledge, while thriving in a dynamic and efficient work environment to the best of my ability.</em></p>
                    <ul>
                        <li>Quezon City, Philippines</li>
                        <li>+639354651304</li>
                        <li>schultzxhenry@gmail.com</li>
                    </ul>
                </div><!-- Edn Resume Item -->

                <h3 class="resume-title">Education</h3>
                {{-- <div class="resume-item">
                    <h4>Master of Fine Arts &amp; Graphic Design</h4>
                    <h5>2015 - 2016</h5>
                    <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                    <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero
                        voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
                </div><!-- Edn Resume Item --> --}}

                <div class="resume-item">
                    <h4>Bachelor of Science &amp; Information Technology</h4>
                    <h5>2022 - 2023</h5>
                    <p><em>PHINMA Saint Jude College</em></p>
                    {{-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione
                        eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon
                        sader mart dila</p> --}}
                </div><!-- Edn Resume Item -->

            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <h3 class="resume-title">Professional Experience</h3>
                <div class="resume-item">
                    <h4>System Developer</h4>
                    <h5>Apr 2024 - Present</h5>
                    <p><em>W Group Inc., Taguig City, Philippines </em></p>
                    <ul>
                        <li>Develop web applications and in-house systems to streamline internal processes and improve operational efficiency.</li>
                        <li>Maintain and enhance existing software solutions, ensuring optimal performance and user satisfaction.</li>
                        <li>Troubleshoot and resolve technical issues to minimize downtime and ensure business continuty.</li>
                        <li>Collaborate with teams to gather requirements, design system architecture, and implement new featres.</li>
                    </ul>
                </div><!-- Edn Resume Item -->

                <div class="resume-item">
                    <h4>Junior Programmer</h4>
                    <h5>Apr 2023 - Apr 2024</h5>
                    <p><em>Pinnacle Technologies Inc, Caloocan City, Philippines</em></p>
                    <ul>
                        <b>Front-end Development</b>
                        <li>Develop and maintain responsive and visually appealing user interfaces using HTML5, CSS, and JavaScript.</li>
                        <li>Implement front-end features and enhancements based on design mockups and user feedbck.</li>
                        <li>Ensure cross-browser compatibility and optimize user experience on various devies.</li>
                    </ul>
                    <ul>
                        <b>Back-end Development</b>
                        <li>Work with the Laravel framework to design and implement server-side logic.</li>
                        <li>Develop and maintain RESTful APIs for seamless communication between the front-end and back-end.</li>
                        <li>Create and optimize database structures using MySQL for efficient data storage and retrieval.</li>
                    </ul>
                    <ul>
                        <b>Version Control and Collaboration</b>
                        <li>Utilize Git for version control, managing code repositories on platforms like GitHub and GitLab.</li>
                        <li>Collaborate with team members, including UI/UX designers and other developers, to achieve project goals.</li>
                        <li>Participate in code reviews to maintain code quality and share knowledge within the team.</li>

                    </ul>
                </div><!-- Edn Resume Item -->

                <div class="resume-item">
                    <h4>Intern Developer</h4>
                    <h5>Dec 2022 - Mar 2023</h5>
                    <p><em>Obanana Corp, Makati City, Philippines</em></p>
                    <ul>
                        <li>Contributed to the development of internal systems, enhancing functionality and improving ser experience.</li>
                        <li>Collaborated with team members to identify, troubleshoot, and resolve software issues.</li>
                    </ul>
                </div><!-- Edn Resume Item -->

            </div>

        </div>

    </div>

</section><!-- /Resume Section -->
@endsection