<!-- Footer Start -->
<div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Address<span></span></p>
                <p><i class="fa fa-map-marker-alt me-3"></i>ICET Computer Education<br/>
                    ½ C, Panchkuian Road, Nalband Crossing,<br/>
                    Near Agra College Law Faculty, Agra- 282010<br/>
                <p><i class="fa fa-phone-alt me-3"></i><a style="color: white" href="tel:+91-9719522999">+91 971 952 2999</a></p>
                <p><i class="fa fa-phone-alt me-3"></i><a style="color: white" href="tel:+91-9286105060">+91 928 610 5060</a></p>
                <p><i class="fa fa-envelope me-3"></i><a style="color: white" href="mailto:icetagr@gmail.com">icetagr@gmail.com</a></p>
                <p><i class="fa fa-envelope me-3"></i><a style="color: white" href="mailto:arvindsutail@gmail.com">arvindsutail@gmail.com</a></p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" target="_blank" href="https://twitter.com/icetagra"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank" href="https://www.facebook.com/groups/617435264962620"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank" href="https://www.instagram.com/arvindsutail/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank" href="https://www.linkedin.com/in/icet-computer-education-47b91865/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social" target="_blank" href="https://t.me/icetagr"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 footer_top">
                <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                <a class="btn btn-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="btn btn-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                <!--<a class="btn btn-link" href="{{ route('front.courses') }}">Courses</a>-->
                <a class="btn btn-link {{ Route::currentRouteName() == 'front.news' ? 'active' : '' }}" href="{{ route('front.news') }}">News</a>
                <a class="btn btn-link {{ Route::currentRouteName() == 'gallery' ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a>
                <a class="btn btn-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                
            </div>
            <div class="col-md-12 col-lg-6">
                <p class="section-title text-white h5 mb-4">Accredited By<span></span></p>
                <div class="row g-2">
                    <div class="col-6">
                        <img class="img-fluid" src="{{ URL::to('img/NIELIT-LOGO.webp') }}" alt="nielit logo">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" width="135px" src="{{ URL::to('img/UPDESCO-LOGO.webp') }}" alt="updesco logo">
                    </div>
                </div>
                <div class="row g-2">
                    <p>
                        <strong><u>Accredited By</u></strong> National Institute of Electronics &amp; Information Technology (NIELT)
                        Govt. of India and UPDESCO (U.P. Govt) Authorized Training Center
                    </p>
                    <p>
                        ICET Computer Education, Agra is one of the foremost Technical Institute in the state of U.P. It offers certificate program in Data Innovation stream and plan to give Quality Specialist Training to meet the prerequisite of the changing schooling situation.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-lg-5">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="{{ route('home') }}">ICET Agra</a>, All Right Reserved. 

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <div class="d-none"> Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                        Distributed By a <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                        <a class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                        <a class="{{ Route::currentRouteName() == 'front.news' ? 'active' : '' }}" href="{{ route('front.news') }}">News</a>
                        <a class="{{ Route::currentRouteName() == 'gallery' ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a>
                        <a class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!--Sticky icons to the right-->
<div class="fixed sticky-top float-right">
    <ul class="float_menu">

        <li><i class="text-warning fa-rotate-by fa fa-certificate"></i><a href="{{ route('landingPage', ($landingPage->landing_page_url ?? 'free-o-level-2025-26') . '#contact') }}"><span>Apply for free O-level course</span></a></li>
        <li><i class="fa fa-phone"></i><a href="tel:+91-9719522999"><span>+91 971 952 2999</span>  </a></li>
        <li><i class="fa fa-envelope"></i><a href="mailto:icetagr@gmail.com"><span>icetagr@gmail.com</span> </a></li>
        <li><i class="fa fa-share"></i> <span class="fixed_social"> <a href="https://www.facebook.com/groups/617435264962620"><i class="bi bi-facebook"></i></a> <a href="https://www.instagram.com/arvindsutail/"><i class="bi bi-instagram"></i></a> <a href="https://twitter.com/icetagra"><i class="bi bi-twitter"></i></a>
                <a href="https://twitter.com/icetagra"><i class="bi bi-linkedin"></i></a> 
                <a href="https://t.me/icetagr"><i class="bi bi-telegram"></i></a> 
            </span> </li>
    </ul>
</div>


<!--Popup for all pages-->

<!-- Modal -->
<div class="modal fade" id="enrollOLevelModalCenter" tabindex="-1" role="dialog" aria-labelledby="enrollOLevelModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100" id="enrollOLevelModalLongTitle"><center>प्रवेश प्रारंभ</center></h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <a class="btn-block btn btn-sm btn-primary" href="{{ route('landingPage', ($landingPage->landing_page_url ?? 'free-o-level-2025-26') . '#contact') }}">
                    <i class="fa fa-arrow-right"></i> {{ __('Click here to Register') }}
                </a>
                <?php 
//                $filename_top = 'course/O-Level-2023-24';
//                $filetype_top = pathinfo($filename_top, PATHINFO_EXTENSION);
//                $imgbinary_top = fread(fopen($filename_top, "r"), filesize($filename_top));
//                $file_url_top = 'data:image/' . $filetype_top . ';base64,' . base64_encode($imgbinary_top);
                
                $filename = 'course/O-level-2025-26.jpeg';
                $filetype = pathinfo($filename, PATHINFO_EXTENSION);
                $imgbinary = fread(fopen($filename, "r"), filesize($filename));
                $file_url = 'data:image/' . $filetype . ';base64,' . base64_encode($imgbinary);
                ?>
                <img src="{{$file_url}}" class="img-fluid" alt="O level 2025-26" />
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="{{ route('landingPage', ($landingPage->landing_page_url ?? 'free-o-level-2025-26') . '#contact') }}">
                    <i class="fa fa-arrow-right"></i> {{ __('Click here to Register') }}
                </a>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--Popup for all pages ends here-->

</div>



<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ URL::to('front/lib/wow/wow.min.js') }}"></script>
<script src="{{ URL::to('front/lib/easing/easing.min.js') }}"></script>
<script src="{{ URL::to('front/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ URL::to('front/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ URL::to('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ URL::to('front/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL::to('front/lib/lightbox/js/lightbox.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Javascript -->
<script nonce="{{ csp_nonce() }}" src="{{ URL::to('front/js/main.js') }}"></script>
<link rel="preconnect" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
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
        "email": "icetagr@gmail.com",
        "birthPlace": "Agra",
        "nationality": "India",
        "telephone": "+91-9719522999"
}
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-R2Y2ZTSGHN"></script>
<script nonce="{{ csp_nonce() }}">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-R2Y2ZTSGHN');
</script>