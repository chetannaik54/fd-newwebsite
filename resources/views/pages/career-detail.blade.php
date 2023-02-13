@extends('layouts.pages')

@section('content')
    <!-- Job details top start -->
    <section class="job__detail-top">
        <img src="/assets/imgs/career/6.jpg" alt="Image" data-speed="auto">
    </section>
    <!-- Job details top end -->


    <!-- Job detail start -->
    <section class="job__detail">
        <div class="container g-0 line pb-110">
            <span class="line-3"></span>

            <div class="row">
                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-8">
                    <div class="job__detail-wrapper">
                        <h2 class="sec-title">Frontend Developer</h2>
                        <ul class="job__detail-meta">
                            <li><span>Location</span> 2541, Austin, New York</li>
                            <li><span>Date</span> 24, June 2022</li>
                            <li><span>Job Type</span> Full time (Remote)</li>
                        </ul>
                        <div class="job__detail-content">
                            <p>We’re looking for a Junior - Mid-level Designer to join our team. You’ll support the
                                execution of
                                graphic and digital design projects, working closely with the internal team of creatives,
                                project
                                managers, the Creative Director and development team to blend user needs and business goals
                                into
                                seamless, effective design experiences. You will need to demonstrate a fundamental
                                understanding
                                of
                                design principles, an openness to learn and take direction, along with a strong aesthetic
                                design
                                intuition.
                            </p>
                            <h2>What you will do</h2>
                            <ul>
                                <li>Support Growth team in expanding customer base within legal industry as well as new
                                    markets
                                </li>
                                <li>Find prospective customer leads via LinkedIn Sales Navigator, industry directories,
                                    personal
                                    network and other sources</li>
                                <li>Qualify prospective customer leads via email, phone, and Linkedin messaging</li>
                                <li>Track and analyze prospective customer pipeline, presenting stats and progress to Growth
                                    team
                                </li>
                                <li>Identify trends in prospective customer engagement with various outreach campaigns</li>
                                <li>Help strategize, implement, and maintain an efficient sales system, primarily within
                                    Hubspot
                                    Sales and Hubspot Marketing</li>
                                <li>Create and maintain sales and marketing materials, like pricing sheets and feature
                                    highlights
                                </li>
                                <li>Support special projects, like event sponsorships and industry partnerships</li>
                                <li>Contribute to customer support initiatives</li>
                            </ul>
                            <h2>Requirements</h2>
                            <ul>
                                <li>Worked with any professional plugin development team or More than one Plugins approved
                                    at
                                    wordpress.org/CodeCanyon</li>
                                <li>Solid and strong PHP knowledge.</li>
                                <li>Really good understanding in OOP, Namespace, Traits & Design Patterns</li>
                                <li>Intermediate to Advanced JavaScript knowledge.</li>
                                <li>Fluent English speaking and writing is preferred but not required.</li>
                                <li>Writing reusable, testable, secured and efficient PHP, JavaScript, HTML5, CSS3, MySQL
                                    and AJAX
                                    Code.</li>
                                <li>Excellent knowledge about WP custom post type, custom taxonomy, and custom meta box
                                </li>
                                <li>Fluent in WordPress, PHP, plugins, themes security, JavaScript, and other technologies
                                </li>
                                <li>Clear concepts of WordPress Actions, Hooks, custom queries, meta fields.</li>
                                <li>Proficient with relational (SQL) and non-relational database platforms</li>
                                <li>Optimize performance of applications utilizing industry standards on all ends of the
                                    architecture.</li>
                                <li>Creating database schemas that represent and support business processes. </li>
                                <li>Coordinating the workflow between the UI/UX Designer, the QA, and yourself.</li>
                                <li>Problem-solving capabilities </li>
                                <li>Age 20 to 35 years</li>
                            </ul>
                            <h2>Educational Qualification</h2>
                            <ul>
                                <li>It doesn’t matter where you went to college or what your CGPA was as long as you are
                                    smart,
                                    passionate, ready to work hard and have fun.</li>
                            </ul>
                            <h2>Perks & Benefits</h2>
                            <ul>
                                <li>Competitive compensation and equity package</li>
                                <li>99% company paid medical, dental, and vision coverage for employees and dependents (for
                                    US
                                    employees)</li>
                                <li>Flexible Spending Account (FSA) and Dependent Care Flexible Spending Account (DCFSA)
                                </li>
                                <li>Healthcare reimbursement (for International employees)</li>
                                <li>Life, AD&D, Short and Long Term Disability Insurance</li>
                                <li>401(k) with 4% company matching</li>
                                <li>Professional development reimbursement</li>
                                <li>Wellness stipends</li>
                                <li>Unlimited PTO</li>
                                <li>Paid parental leave</li>
                                <li>Remote work opportunities</li>
                                <li>Home office & technology reimbursement</li>
                            </ul>
                            <p>We’re committed to creating the happiest company working for and is proud to provide equal
                                opportunity to all. All the qualified applicants will receive consideration for employment
                                without
                                regard to race, color, ancestry, religion.</p>
                        </div>

                        <div class="job__apply btn_wrapper">
                            <button class="wc-btn-primary btn-hover btn-item"><span></span> Apply this <br>Position <i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4">
                    <div class="job__detail-sidebar">
                        <ul>
                            <li><span>Experience</span> 5+ Years Experience</li>
                            <li><span>Working Hours</span> 08 AM to 05 PM</li>
                            <li><span>Working Days</span> Weekly 5 days (Sun to Thur)</li>
                            <li><span>Salary</span> $24k - 65k (Yearly)</li>
                            <li><span>Vacancy</span> No of Vacancies: 2</li>
                            <li><span>Deadline</span> 03 July 2022</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Job detail end -->


    <!-- Modal 1 -->
    <div class="modal__application" id="application_form">
        <div class="modal__apply">
            <button class="modal__close-2" id="apply_close"><i class="fa-solid fa-xmark"></i></button>
            <div class="form-top">
                <h2 class="sec-title">Frontend Developer</h2>
                <p>Full time</p>
            </div>
            <div class="form-apply">
                <form action="#">
                    <div class="input-apply">
                        <p>Why you decided to apply here and why should we select you? *</p>
                        <textarea name="question" required></textarea>
                    </div>
                    <div class="input-apply">
                        <p>Tell us about a project that you worked on and felt proud of it.</p>
                        <textarea name="question-2" required></textarea>
                    </div>
                    <div class="input-apply">
                        <p>Share your portfolios. (Behance, Dribbble, etc) *</p>
                        <textarea name="question-3" required></textarea>
                    </div>
                    <div class="input-apply">
                        <p>Who's your favorite designer? *</p>
                        <textarea name="question-4" required></textarea>
                    </div>
                    <div class="input-apply">
                        <p>Do you have any other designs which you want to show us? or this is not available on your
                            portfolio.</p>
                        <textarea name="question-5" required></textarea>
                    </div>
                    <div class="input-apply">
                        <p>What are you looking for in your next job/journey? *</p>
                        <textarea name="question-6" required></textarea>
                    </div>
                    <div class="input-apply">
                        <p>What makes you angry? and what makes you smile?</p>
                        <textarea name="question-7" required></textarea>
                    </div>
                    <div class="input-apply">
                        <p>Your current salary & what are your salary expectations? *</p>
                        <textarea name="question-8" required></textarea>
                    </div>
                </form>
            </div>

            <div class="form-btn apply-trigger">
                <button class="wc-btn-primary btn-hover"><span></span> next <i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal__application" id="application_form2">
        <div class="modal__apply">
            <button class="modal__close-2" id="apply_close2"><i class="fa-solid fa-xmark"></i></button>
            <div class="form-top">
                <h2 class="sec-title">Frontend Developer</h2>
                <p>Full time</p>
            </div>
            <div class="form-apply">
                <form action="#">
                    <div class="input-apply-2">
                        <p>Name *</p>
                        <input type="text" name="name" required>
                    </div>
                    <div class="input-apply-2">
                        <p>Email *</p>
                        <input type="email" name="email" required>
                    </div>
                    <div class="input-apply-2">
                        <p>Phone *</p>
                        <input type="tel" name="phone" required>
                    </div>
                    <div class="input-apply-2">
                        <p>Upload CV *</p>
                        <input type="file" name="cv">
                    </div>
                </form>
            </div>
            <div class="form-btn-2">
                <button class="wc-btn-primary btn-hover" id="back_form1"><span></span> back <i
                        class="fa-solid fa-arrow-right"></i></button>
                <button type="submit" class="wc-btn-primary btn-hover"><span></span> Submit <i
                        class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
@endsection
