<?php
$caste_categories_array = array_flip($caste_categories);
$photograph_path = $last_user_id . "/photograph";
$father_income_certificate_path = $last_user_id . "/father_income_certificate";
$signature_path = $last_user_id . "/signature";
$thumb_impression_path = $last_user_id . "/thumb_impression";
$aadhar_front_path = $last_user_id . "/aadhar_front";
$aadhar_back_path = $last_user_id . "/aadhar_back";
$high_school_marksheet_path = $last_user_id . "/high_school_marksheet";
$intermediate_marksheet_path = $last_user_id . "/intermediate_marksheet";
$referrer_url = $_SERVER['HTTP_REFERER'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Landing Page || {{$page_title}}</title>
        <meta content="iCET Computer Education, Agra is one of the foremost Technical Institute in the state of U.P. It offers certificate program in Data Innovation stream and plan to give Quality Specialist Training to meet the prerequisite of the changing schooling situation. In today’s computing era, computerization has become an essential requirement for every organization to maintain the quantitative pace of organization as well as to derive the high quality training to students. To overcome the pitfalls of manual systems it is advisable to prefer automatic mode of activities by the organization. iCET is not an institute for masses but an institute of an individual. In this the programmers are set up to impart attractive and impressive abilities to the faith to meet the multiplying growth of opportunities in the expanding IT and service industry. It gives an individual not only the computer training but also the spirit of stepping ahead with optimism, because India’s increase potential in the field of IT is recognized by the whole world. We or iCET scope to the youth to meet with the requirement of the IT Industry. The students are trained through the best faculties in a systematic ways and the trends of today.\n\nFounded in 2007, ICET Computers has been imparting Computer Training Courses to some of the largest Multi National Companies of India.\n\nICET is an Internationally reputed Computer Training Institute of Mumbai, with over 15,000 student base and 20 years of reputation for imparting Quality Education in 43 different Computer Courses: Professional, Short term, Career driven, Job & Business Oriented courses for Students, Professionals, Businessmen, Homemaker, as well as for entire family in the field of Office Automation, MS-Office, Advance Excel, Internet Technology, Web Designing Courses, Graphic Designing, AutoCAD Training, 3D Max Training. Top Class computer training courses are provided in our centres. Our Computer Training Institute has over 100 Computers in total in all our computer training classes. We aim to provide World Class Learning Environment in Latest Software & Hardware Courses. We are proud to have one of the best set-ups in the Industry with strength of over 100 State of the Art Computers. Quality Education Since Last 20 Years Undoubtly the Best Computer Training Institute in Mumbai.\n\nWe offer Fast-Track Courses to students who wish to complete their learning in a short period. We have High Emphasis on Projects and Live Assignments\n" name="description">
        <meta content="ICET Agra,
              Computer Center,
              Computer Education in Agra,
              O Level Computer Institute in Agra,
              O Level Computer Center in Agra,
              Best Computer Center in Agra,
              Govt. Computer Center in Agra,
              Govt. Computer Course in Agra,
              OBC Computer Training,
              OBC O Level in Agra,
              Free Computer Course in Agra,
              OBC Free Computer Training In Agra,
              Free OBC Computer Course,
              Pichda Vrag Computer Course O Level In Agra,
              NIELIT Agra,
              computer coaching near me,
              computer classes in agra,
              it computer institute,
              icet institute,
              icet institute agra,
              कंप्यूटर सेण्टर इन आगरा ,
              बेस्ट कंप्यूटर सेण्टर इन आगरा,
              फ्री कंप्यूटर कोर्स इन आगरा,
              ओ लेवल कंप्यूटर कोर्स इन आगरा,
              फ्री ओ लेवल कंप्यूटर कोर्स इन आगरा,
              OBC  फ्री कंप्यूटर कोर्स इन आगरा ,
              सरकारी कंप्यूटर कोर्स प्रोग्राम,
              ओ लेवल फॉर OBC" name="keywords">

        <!-- Favicons -->
        <!--        <link href="{{ URL::to('landing_page/assets/img/favicon.png') }}" rel="icon">
                <link href="{{ URL::to('landing_page/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">-->

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ URL::to('landing_page/assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ URL::to('landing_page/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL::to('landing_page/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ URL::to('landing_page/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ URL::to('landing_page/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ URL::to('landing_page/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ URL::to('landing_page/assets/css/style.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top  header-transparent ">
            <div class="container d-flex align-items-center justify-content-between">

                <div class="logo">
                    <a href="{{route('home')}}" onclick="return checkHomePage();">
                        <img src="{{ URL::to('img/logo.png') }}" alt="Logo" class="img-fluid"></a>
                </div>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="{{route('home')}}" onclick="return checkHomePage();">Home</a></li>
                        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                        <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
                        <li><a class="getstarted scrollto" href="#contact">Register for Free 'O' Level</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->


        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

            <div class="container">
                <div class="row">
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> {{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if (session()->has('errors'))
                    <div class="alert alert-errors alert-dismissible fade show" role="alert">
                        <strong> {{ session('errors') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
                        <div>
                            <h1>नि:शुल्क ओ लेवल कंप्यूटर प्रशिक्षण कार्यक्रम</h1>
                            <h2>वर्ष {{ date('Y') . '-' . substr(date('Y') + 1, -2) }}
                                उत्तर प्रदेश सरकार द्वारा छात्र - छात्राओं  के लिए सुनहरा अवसर. </h2>
                            <!--<p>पूरी जानकारी के लिए यहां <a target="_blank" class="btn btn-primary" href="{{ URL::asset('files/obc-free-o-level-course-june-2023.pdf') }}">क्लिक करें</a>-->
                                
                                <br/>
                                कृपया नीचे दिया गया <a href="#contact" class="btn btn-warning">फॉर्म भरें</a>। <br/>किसी भी संदेह की स्थिति में कृपया <a href="#contact" class="btn btn-info">संपर्क करें</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                        <img src="{{ URL::to('landing_page/assets/img/hero-img.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= App Features Section ======= -->
            <section id="features" class="features">
                <div class="container">

                    <div class="section-title">
                        <h2>Process to apply for the scheme</h2>
                        <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
                    </div>

                    <div class="row no-gutters">
                        <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
                            <div class="content d-flex flex-column justify-content-center">
                                <div class="row">
                                    <div class="col-md-6 icon-box" data-aos="fade-up">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Fill out the form</h4>
                                        <p>fill the form with all your correct details such as name, email, contact</p>
                                    </div>
                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Upload all documents</h4>
                                        <p>upload all your documents that are mentioned in the form i.e., 10th marksheet, 12th marksheet, income certificate(OBC),</p>
                                    </div>
                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                        <i class="bx bx-id-card"></i>
                                        <h4>Authenticate yourself</h4>
                                        <p>Validate your phone with the OTP using whatsapp & email</p>
                                    </div>
                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                        <i class="bx bx-shield"></i>
                                        <h4>Check your email for auto generated password</h4>
                                        <p>An auto-generated email will be shared with you to access the portal for further process</p>
                                    </div>
                                    <!--                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                                      <i class="bx bx-atom"></i>
                                                      <h4>Molestiae dolor</h4>
                                                      <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                                                    </div>
                                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                                      <i class="bx bx-id-card"></i>
                                                      <h4>Explicabo consectetur</h4>
                                                      <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                            <img src="{{ URL::to('landing_page/assets/img/features.svg') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>
            </section><!-- End App Features Section -->

            <!-- ======= Details Section ======= -->




<!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
                <div class="container" data-aos="fade-up">

                    <div class="row">
                        @if(count($testimonials) > 1)
                        <div class="container-xxl py-2 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="container px-lg-5">
                                <!--<p class="section-title text-secondary justify-content-center"><span></span>Testimonial<span></span></p>-->
                                <h1 class="text-center mb-5">What Our Students Say!</h1>
                                <div class="owl-carousel testimonial-carousel">

                                    <div class="row g-4">
                                        @forelse ($testimonials as $testimonial)
                                        <x-front.testimonial :testimonial="$testimonial"/>
                                        @empty
                                        @endforelse
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </section>
            <!-- ======= End Testimonials Section ======= -->
                



            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">

                        <h2>Frequently Asked Questions</h2>
                        <p>Please go through this section in case of any query or doubt related to enroll to this scheme</p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li data-aos="fade-up">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">Is this scheme application to any specific course?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        Yes, this scheme is only applicable only for "O" level course
                                    </p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Could you please provide information about the eligibility criteria for enrolling in this scheme? If there are any, kindly describe them <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Yes, this scheme has an eligibility criteria that the candidate must have completed his/her 12th before enrolling to this & the yearly income of candidate's Father should be less than 1 lakh. Also, the candidate should belong to OBC category.
                                    </p>
                                </div>
                            </li>



<!--                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Is there any last date for the same?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Yes, 25th June 2023 is the last date for application.
                                    </p>
                                </div>
                            </li>-->

                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">Any document(s) required? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Yes, below is the list of scanned documents that are mandatory for applying
                                    <table>
                                        <tr>
                                            <td>
                                                1) High school marksheet
                                            </td>
                                        </tr>
                                        <tr><td>
                                                2) Intermediate marksheet
                                            </td>
                                        </tr>
                                        <tr><td>
                                                3) Caste Certificate
                                            </td>
                                        </tr>
                                        <tr><td>
                                                4) Father's Income certificate less than 1 lakh a year
                                            </td>
                                        </tr>
                                        <tr><td>
                                                5) Aadhar Card (Front/Back)
                                            </td>
                                        </tr>
                                        <tr><td>
                                                6) A latest passport size colored photograph
                                            </td>
                                        </tr>
                                    </table>
                                    </p>
                                </div>
                            </li>



                        </ul>
                    </div>

                </div>

                </div>
            </section><!-- End Frequently Asked Questions Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Register yourself for the program</h2>
                        <p></p>
                    </div>

                    <div class="row">


                        <div class="col-lg-6">
                            <form action="{{ route('student_enroll.store') }}" method="post" role="form" class="php-email-form" data-aos="fade-up">
                                @csrf
                                <div class="form-group">
                                    <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group mt-3">

                                    <div class="row-1 col-12-1">
                                        <div class="col-12">
                                            <input placeholder="10 digit Mobile number(for e.g., 9897111222)" type="text" class="form-control" name="mobile" id="mobile" required>
                                        </div>
                                        <div class=" d-none">
                                            <a onclick="" class="btn btn-success" id="validate_mobile" > Get Mobile OTP</a>
                                            <input placeholder="Enter SMS OTP" type="text" class="form-control" name="sms_otp" id="sms_otp">
                                            <a onclick="" class="btn btn-success" id="validate_sms_otp" >Validate SMS OTP</a>
                                        </div>
                                    </div>
                                    <div class="row col-12">

                                        <span class="success-mobile-update"></span>
                                        <span class="error-mobile-update"></span>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <div class="row-w col-12-1">
                                        <div class="col-12">
                                            <input placeholder="Your Email (for e.g., name@domain.com)" type="email" class="form-control" name="email" id="email" required>
                                        </div>
                                        <div class="d-none">
                                            <a onclick="" class="btn btn-success" id="validate_email" >Verify Email OTP</a>
                                            <input placeholder="Enter Email OTP" type="text" class="form-control" name="mail_otp" id="mail_otp">
                                            <a onclick="" class="btn btn-success" id="validate_mail_otp" >Validate OTP</a>
                                        </div>
                                        <div class="row col-12">
                                            <span class="success-email-update"></span>
                                            <span class="error-email-update"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input placeholder="Father Name" type="text" class="form-control" name="father_name" id="father_name" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea placeholder="Address" class="form-control" name="address" rows="3" required></textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <input placeholder="DOB" type="date" class="form-control" name="dob" id="dob" required max="2010-06-01" min="1980-06-01">
                                </div>

                                <div class="form-group mt-3">
                                    <select class="form-control" name="caste_category" id="caste_category" required="">
                                        <option value="">Select Category</option>
                                        @if($caste_categories)
                                        @foreach($caste_categories as $caste => $caste_category)
                                        <option value="{{$caste}}">{{$caste_category}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="docs_forms">

                                    <!-- Documents form-->

                                    <div class="form-group mt-3">
                                        <input placeholder="Income Rs. 99999" type="number" class="form-control" name="father_income" id="father_income" max="99999" min="1">
                                    </div>

                                    <div class="form-group mt-3">
                                        Father Income:
                                        @if(!empty($b64FatherIncomeImage) && isset($b64FatherIncomeImage))
                                        <img src="{{ $b64FatherIncomeImage }}" height="25%" width="25%" class="img-thumbnail" alt="Income Certificate" />
                                        @else
                                        @livewire('services.media.uploadable',[
                                        'file_name' => 'father_income_certificate',
                                        'file' => 'father_income_certificate',
                                        'path' => "$father_income_certificate_path",
                                        'target' => 'father_income_certificate'
                                        ])
                                        @endif
                                    </div>
                                    <div class="form-group mt-3">
                                        Photograph:
                                        @if(!empty($b64PhotographImage) && isset($b64PhotographImage))
                                        <img src="{{ $b64PhotographImage }}" height="25%" width="25%" class="img-thumbnail" alt="Photograph" />
                                        @else
                                        @livewire('services.media.uploadable',[
                                        'file_name' => 'photograph',
                                        'file' => 'photograph',
                                        'path' => "$photograph_path",
                                        'target' => 'photograph'
                                        ])
                                        @endif
                                    </div>
                                    <div class="form-group mt-3">

                                        Signature:
                                        @if(!empty($b64SignatureImage) && isset($b64SignatureImage))
                                        <img src="{{ $b64SignatureImage }}" height="25%" width="25%" class="img-thumbnail" alt="Signature" />
                                        @else
                                        @livewire('services.media.uploadable',[
                                        'file_name' => 'signature',
                                        'file' => 'signature',
                                        'path' => "$signature_path",
                                        'target' => 'signature'
                                        ])
                                        @endif

                                    </div>

                                    <div class="form-group mt-3">
                                        Thumb Impression:
                                        @if(!empty($b64ThumbImpressionImage) && isset($b64ThumbImpressionImage))
                                        <img src="{{ $b64ThumbImpressionImage }}" height="25%" width="25%" class="img-thumbnail" alt="Thumb Impression" />
                                        @else

                                        @livewire('services.media.uploadable',[
                                        'file_name' => 'thumb_impression',
                                        'file' => 'thumb_impression',
                                        'path' => "$thumb_impression_path",
                                        'target' => 'thumb_impression'
                                        ])  
                                        @endif
                                    </div>

                                    <div class="form-group mt-3">
                                        Aadhar Number:
                                        <input id="aadhar_number" type="text" min="12" max="12" title="Enter Aadhar Number" placeholder="Enter Aadhar Number" name="aadhar_number" class="form-control">
                                        <span id="lblError" style="display: none;" class="error">Invalid Aadhaar Number</span>

                                        @error('aadhar_number')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror    
                                    </div>


                                    <div class="form-group mt-3">

                                        Aadhar Front:

                                        @if(!empty($b64AadharFrontImage) && isset($b64AadharFrontImage))
                                        <img src="{{ $b64AadharFrontImage }}" height="25%" width="25%" class="img-thumbnail" alt="Aadhar Front Image" />
                                        @else

                                        @livewire('services.media.uploadable',[
                                        'file_name' => 'aadhar_front',                            
                                        'file' => 'aadhar_front',
                                        'path' => "$aadhar_front_path",
                                        'target' => 'aadhar_front'
                                        ])  
                                        @endif
                                    </div>

                                    <div class="form-group mt-3">

                                        Aadhar Back:

                                        @if(!empty($b64AadharBackImage) && isset($b64AadharBackImage))
                                        <img src="{{ $b64AadharBackImage }}" height="25%" width="25%" class="img-thumbnail" alt="Aadhar Back Image" />
                                        @else
                                        @livewire('services.media.uploadable',[
                                        'file_name' => 'aadhar_back',                            
                                        'file' => 'aadhar_back',
                                        'path' => "$aadhar_back_path",
                                        'target' => 'aadhar_back'
                                        ])  
                                        @endif
                                    </div>

                                    <div class="form-group mt-3">
                                        High School Marksheet:

                                        @if(!empty($b64HighSchoolMrkshtImage) && isset($b64HighSchoolMrkshtImage))
                                        <img src="{{ $b64HighSchoolMrkshtImage }}" height="25%" width="25%" class="img-thumbnail" alt="High School Marksheet" />
                                        @else
                                        @livewire('services.media.uploadable',[
                                        'file_name' => 'high_school_marksheet',                            
                                        'file' => 'high_school_marksheet',
                                        'path' => "$high_school_marksheet_path",
                                        'target' => 'high_school_marksheet'
                                        ])  
                                        @endif
                                    </div>

                                    <div class="form-group mt-3">

                                        Intermediate Marksheet:

                                        @if(!empty($b64IntermediateMrksheetImage) && isset($b64IntermediateMrksheetImage))
                                        <img src="{{ $b64IntermediateMrksheetImage }}" height="25%" width="25%" class="img-thumbnail" alt="Intermediate Marksheet" />
                                        @else

                                        @livewire('services.media.uploadable',[
                                        'file_name' => 'intermediate_marksheet',                            
                                        'file' => 'intermediate_marksheet',
                                        'path' => "$intermediate_marksheet_path",
                                        'target' => 'intermediate_marksheet'
                                        ])  
                                        @endif

                                    </div>

                                    <!-- Documents form end here-->
                                </div>
                                <div class="d-none">
                                    <input name="referrer_url" id="referrer_url" type="hidden" value="<?php echo $referrer_url ?>" />
                                    <input name="last_user_id" id="last_user_id" type="hidden" value="<?php echo base64_encode($last_user_id) ?>" />
                                    <input name="is_email_verified" id="is_email_verified" type="hidden" value="0" />
                                    <input name="is_mobile_verified" id="is_mobile_verified" type="hidden" value="0" />
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Apply for Free O Level Now</button></div>
                            </form>
                        </div>


                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6 info">
                                    <i class="bx bx-map"></i>
                                    <h4>Address</h4>
                                    <p>ICET Computer Education<br/>
                                        ½ C, Panchkuian Road, Nalband Crossing,<br/>
                                        Near Agra College Law Faculty, Agra- 282010</p>
                                </div>
                                <div class="col-lg-6 info">
                                    <i class="bx bx-phone"></i>
                                    <h4>Call Us</h4>
                                    <p>+91 971 952 2999<br>+91 928 610 5060</p>
                                </div>
                                <div class="col-lg-6 info">
                                    <i class="bx bx-envelope"></i>
                                    <h4>Email Us</h4>
                                    <p>icetagr@gmail.com<br>arvindsutail@gmail.com</p>
                                </div>
                                <div class="col-lg-6 info">
                                    <i class="bx bx-time-five"></i>
                                    <h4>Working Hours</h4>
                                    <p>Mon - Sat: 9AM to 6PM</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->

            
        </main><!-- End #main -->

        <!-- =======  Login Popup ======== -->
        <!-- Button to Open the Modal -->
        <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
          Open modal
        </button>-->

        <!-- The Modal -->
        <div class="modal" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Redirecting to login</h4>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Your mobile & email are already registered!
                        Kindly check your email for password or contact administrator in case of any issue.
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="{{ route('login') }}">
                            <i class="fa fa-arrow-right"></i> {{ __('Login ') }}
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- =======  Login Popup Ends here ======== -->

        <!-- ======= Footer ======= -->
        <footer id="footer">



            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 footer-contact">
                            <h3>ICET Computer Education</h3>
                            <p>
                                ½ C, Panchkuian Road, Nalband Crossing,<br>
                                Near Agra College Law Faculty<br>
                                Agra - 282010, India <br><br>
                                <strong>Phone:</strong> <a href="tel:+91-9719522999">+91 971 952 2999</a><br>
                                <strong>Email:</strong> <a href="mailto:arvindsutail@gmail.com">arvindsutail@gmail.com</a><br>
                            </p>
                        </div>

                        <div class="col-lg-6 col-md-6 footer-links">
                            <h4>Our Social Networks</h4>
                            <p>Follow us on our social media platforms for more updates</p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="https://www.facebook.com/groups/617435264962620" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container py-4">
                <div class="copyright">
                    &copy; Copyright <strong><span>ICET, Agra</span></strong>. All Rights Reserved
                </div>
                <div class="credits" style="display: none;">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        @livewireScripts

        <!-- Vendor JS Files -->
        <script src="{{ URL::to('landing_page/assets/vendor/aos/aos.js') }}"></script>
        <!--<script src="{{ URL::to('landing_page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>-->
        <script src="{{ URL::to('landing_page/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ URL::to('landing_page/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <!--<script src="{{ URL::to('landing_page/assets/vendor/php-email-form/validate.js') }}"></script>-->

        <script src="{{ URL::to('front/lib/easing/easing.min.js') }}"></script>
        <script src="{{ URL::to('front/lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Template Main JS File -->
        <script src="{{ URL::to('landing_page/assets/js/main.js') }}"></script>

        <script type="text/javascript">

                            function checkMobile(mobile) {
                                $.ajax({
                                    type: 'GET',
                                    dataType: 'html',
                                    url: '/check_mobile',
                                    data: {
                                        mobile: mobile
                                    },
                                    success: function (data) {
                                        // Do some nice animation to show results
                                        $('#searchdata').html(data);
                                    }
                                });
                            }
                            function checkHomePage() {
                                if (confirm('The Filled details might get wiped out. Are you sure want to go to homepage?')) {
                                    return true;
                                } else {
                                    return false;
                                }
                            }

                            $(document).ready(function () {


                                // hiding required fields
                                $(".docs_forms").hide();
                                $("#sms_otp").hide();
                                $("#validate_sms_otp").hide();
                                $("#mail_otp").hide();
                                $("#validate_mail_otp").hide();


                                $("#mobile").keyup(function () {
                                    var mobile = $("#mobile").val();
                                    if (mobile.length == 10) {
                                        // now check if already exists
                                        isMobileExists(mobile);
                                    }

                                });

                                $("#high_school_marks").on('keyup', function () {
                                    console.log($(this).length);
                                    if ($(this).length >= 1 || $(this).val > 1) {
                                        $("#high_school_grades").hide();
                                        $("a.high_school_grades_link").hide();
                                    }
                                    if ($(this).length == 0 && ($(this).val == 0 || $(this).val != "")) {
                                        $("#high_school_grades").show();
                                        $("a.high_school_grades_link").show();
                                    }
                                });

                                // show more fields if caste is OBC..
                                $("#caste_category").on("change", function () {

                                    if ($(this).val() == '<?php echo $caste_categories_array['OBC'] ?>') {
                                        $(".docs_forms").show();
                                    } else {
                                        $(".docs_forms").hide();
                                    }
                                });
                            });

                            function isMobileExists(student_mobile) {

                                if (student_mobile == '') {
                                    alert('Kindly enter mobile number first');
                                    $("#mobile").focus();
                                    return false;
                                } else {
                                    //send OTP
                                    $.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        method: "POST",
                                        url: "{{url('/')}}/isMobileExists",
                                        data: {"student_mobile": student_mobile},
                                    }).done(function (json) {
                                        var msg = jQuery.parseJSON(json);
                                        console.log(msg);
                                        var is_email_verified = msg.is_email_verified;
                                        var is_mobile_verified = msg.is_mobile_verified;

                                        if (is_mobile_verified == '1' && is_email_verified == '1') {
                                            $("#validate_email").addClass('disabled');
                                            $("#validate_mobile").addClass('disabled');
                                            $("#is_email_verified").val('1');
                                            $("#is_mobile_verified").val('1');
                                            $('#loginModal').modal('show');
                                            return false;
                                        }

                                        if (is_mobile_verified == '1') {
//                        $('.success-mobile-update').html(msg.status_code + ' ' + msg.message);
                                            $('.success-mobile-update').addClass('text-success').html('Mobile already verified!');
//                        alert('here we need to verify email & disbale mobile OTP!'); // but disable mobile OTP..
                                            $("#validate_mobile").addClass('disabled');
                                            $("#validate_mobile").addClass('disabled');
                                            $("#is_mobile_verified").val('1');
//                        $("#validate_email").removeClass('disable');
                                        } else if (is_mobile_verified == '0') {
//                        alert('here we need to verify mobile & enable mobile OTP!'); // but disable mobile OTP..
                                            $("#validate_mobile").removeClass('disabled');
                                            ;
                                            $("#is_mobile_verified").val('0');
//                        $("#validate_email").removeClass('disable');
                                        }
                                        if (is_email_verified == '1') {
//                        $('.error-mobile-update').html(msg.status_code + ' ' + msg.message);
//                        $("#validate_mobile").addClass('disable');
                                            $("#validate_email").addClass('disabled');
//                        alert('email already verified'); // but disable mobile OTP..
                                            $("#is_email_verified").val('1');
                                        } else if (is_email_verified == '0') {
                                            $("#validate_email").removeClass('disabled');
//                        alert('email not verified'); // but disable mobile OTP..
                                            $("#is_email_verified").val('0');

                                        }
//                    if(is_m) {
//                        alert(is_mobile_verified);
//                        alert(is_email_verified);
//                        $('.success-mobile-update').html(msg.status_code + ' ' + msg.message);
//                        alert('here we need to verify finally else!');
//                    }
                                    });
                                }
                            }

        </script>
        <script type="text/javascript">
            //    $.ajaxSetup({
            //        headers: {
            //            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //        }
            //    });
            $('body').on('click', '#validate_mobile', function (e) {
                $('.success-mobile-update').html('');
                $('.error-mobile-update').html('');
                var referrer_url = $("#referrer_url").val();
                var last_user_id = $("#last_user_id").val();
                var student_name = $("#name").val();
                var student_mobile = $("#mobile").val();
                if (student_name == '') {
                    alert('Kindly enter your name first');
                    $("#name").focus();
                    return false;
                }
                if (student_mobile == '') {
                    alert('Kindly enter mobile number first');
                    $("#mobile").focus();
                    return false;
                } else {
                    //send OTP
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: "POST",
                        url: "{{url('/')}}/sendSMS",
                        data: {"student_mobile": student_mobile, "referrer_url": referrer_url, "last_user_id": last_user_id}
                    }).done(function (json) {
                        msg = jQuery.parseJSON(json);
                        console.log(msg);
                        if (msg.status == 'Success') {
                            $('.success-mobile-update').addClass('text-success').html(msg.status + '! ' + msg.msg);

//                            alert(msg.message);
                            // now enable OTP button




                            $("#validate_mobile").addClass('disabled');
                            $("#validate_mobile").hide();
                            $("#sms_otp").show();
                            $("#sms_otp").focus();

                            $("#validate_sms_otp").show();
                            $("#validate_sms_otp").on('click', function () {
                                $('.success-mobile-update').html('');
                                $('.error-mobile-update').html('');
                                var sms_otp = $("#sms_otp").val();
                                if (sms_otp == "") {
                                    $("#sms_otp").focus();
                                    return false;
                                }
                                $.ajax({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    method: "POST",
                                    url: "{{url('/')}}/validateSMSOTP",
                                    data: {"student_mobile": student_mobile, "sms_otp": sms_otp}
                                }).done(function (json) {
                                    var msg = jQuery.parseJSON(json);
                                    console.log(msg);
                                    if (msg.status_code == 'success') {
                                        $('.success-mobile-update').addClass('text-' + msg.status_code).html(msg.message);
                                        $("#mobile").prop("readonly", true);
                                        $("#is_mobile_verified").val('1');
//                                        alert(msg.message);
                                        // now open textbox to validate..
                                        $("#sms_otp").hide();
                                        $("#validate_mobile").addClass('disabled');
                                        $("#validate_sms_otp").hide();

                                    } else {
//                                        alert(msg.message);
                                        $('.error-mobile-update').addClass('text-' + msg.status_code).html(msg.message);
                                    }
                                });
                            });









                        } else {
//                            alert(msg.status_code);
//                            alert(msg.message);
                            $('.error-mobile-update').addClass('text-danger').html(msg.status + '! ' + msg.msg);
                        }
                    });
                }
            });

            $('body').on('click', '#validate_email', function (e) {
                $('.success-email-update').html('');
                $('.error-email-update').html('');
                var student_mobile = $("#mobile").val();
                var student_email = $("#email").val();
                if (student_mobile == '') {
                    alert('Mobile cannot be empty!');
                    $("#mobile").focus();
                    return false;
                }
                if (student_email == '') {
                    alert('Kindly enter your email first!');
                    $("#email").focus();
                    return false;
                } else {
                    //send OTP
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: "POST",
                        url: "{{url('/')}}/sendMailOTP",
                        data: {"student_email": student_email, "student_mobile": student_mobile},
                    }).done(function (json) {
                        var msg = jQuery.parseJSON(json);
                        console.log(msg);
                        console.log(msg.status_code);
                        console.log(msg.message);
                        if (msg.status_code == 'success') {
                            $('.success-email-update').addClass('text-' + msg.status_code).html(msg.message);
//                            alert(msg.message);
                            // now open textbox to validate..
                            $("#validate_email").addClass('disabled');
                            $("#validate_email").hide();
                            $("#mail_otp").show();
                            $("#validate_mail_otp").show();
                            $("#validate_mail_otp").on('click', function () {
                                $('.success-email-update').html('');
                                $('.error-email-update').html('');
                                var email_otp = $("#mail_otp").val();
                                if (email_otp == "") {
                                    $("#mail_otp").focus();
                                    return false;
                                }
                                $.ajax({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    method: "POST",
                                    url: "{{url('/')}}/validateMailOTP",
                                    data: {"student_email": student_email, "email_otp": email_otp},
                                }).done(function (json) {
                                    var msg = jQuery.parseJSON(json);
                                    console.log(msg);
                                    if (msg.status_code == 'success') {
                                        $('.success-email-update').addClass('text-' + msg.status_code).html(msg.message);
                                        alert(msg.message);
                                        // now open textbox to validate..
                                        $("#mail_otp").hide();
                                        $("#validate_email").addClass('disabled');
                                        $("#validate_mail_otp").hide();
                                        $("#email").prop("readonly", true);
                                        $("#is_email_verified").val('1');


                                    } else {
//                                        alert(msg.message);
                                        $('.error-email-update').addClass('text-' + msg.status_code).html(msg.message);
                                    }
                                });
                            });


                        } else {

//                            alert(msg.status_code);
//                            alert(msg.message);

                            $('.error-email-update').addClass('text-' + msg.status_code).html(msg.message);
                        }
                    });
                }
            });
        </script>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-R2Y2ZTSGHN"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-R2Y2ZTSGHN');
        </script>

        <script type='application/ld+json'>
            {
            "@context": "http://www.schema.org",
            "@type": "person",
            "name": "Arvind Sutail",
            "jobTitle": "Managing Director",
            "height": "72 inches",
            "gender": "male",
            "url": "https://www.linkedin.com/in/arvind-sutail-30964627b/",
            "image": "https://icet.org.in/front/img/arvind-sutail.jpg",
            "address": {
            "@type": "PostalAddress",
            "streetAddress": "½ C, Panchkuian Road",
            "postOfficeBoxNumber": "Nalband Crossing",
            "addressLocality": "Agra",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "282007",
            "addressCountry": "India"
            },
            "email": "arvindsutail@gmail.com",
            "birthPlace": "Agra",
            "nationality": "India",
            "telephone": "+91-9286105060"
            }
        </script>
        <script type='application/ld+json'>
            {
            "@context": "http://www.schema.org",
            "@type": "person",
            "name": "Brij Raj Singh",
            "jobTitle": "IT Consultant",
            "height": "65 inches",
            "gender": "male",
            "url": "https://www.linkedin.com/in/brijrajsingh27/",
            "image": "https://icet.org.in/front/img/CTO-Brij-Raj-Singh.jpg",
            "address": {
            "@type": "PostalAddress",
            "streetAddress": "Agra",
            "postOfficeBoxNumber": "Sikandra",
            "addressLocality": "Agra",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "282007",
            "addressCountry": "India"
            },
            "email": "brij.raj.singh2710@gmail.com",
            "birthDate": "1986-10-27",
            "birthPlace": "Agra",
            "nationality": "India",
            "telephone": "+91-7618565004"
            }
        </script>
        <script type='application/ld+json'>
            {
            "@context": "http://www.schema.org",
            "@type": "person",
            "name": "Monika Maam",
            "jobTitle": "Sr. Counselor cum Admission Head",
            "height": "62 inches",
            "gender": "female",
            "url": "https://www.facebook.com/moni.tarun?mibextid=ZbWKwL",
            "image": "https://icet.org.in/front/img/monika.jpeg",
            "address": {
            "@type": "PostalAddress",
            "streetAddress": "Agra",
            "postOfficeBoxNumber": "Agra",
            "addressLocality": "Agra",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "282007",
            "addressCountry": "India"
            },

            "birthPlace": "Agra",
            "nationality": "India",
            "telephone": "+91-9719522999"
            }
        </script>
        <script>
            $(document).ready(function () {
                //
                document.addEventListener('contextmenu', event => event.preventDefault());
                //    setTimeout(function() {
                $('#enrollOLevelModalCenter').modal('show').fadeIn(200);
                //    }, 10000); // milliseconds

                $("img").bind("contextmenu", function (e) {
                    return false;
                });
            });
        </script>
    </body>

</html>
