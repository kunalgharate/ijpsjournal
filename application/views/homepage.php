
<script src="https://unpkg.com/aos@next/dist/aos.js "></script>


<script>
        AOS.init({

            debounceDelay: 50,
            throttleDelay: 99,
            offset: 120,
            delay: 0,
            duration: 1000,
            easing: 'ease',
            once: false,
            mirror: false,
            anchorPlacement: 'top-bottom',

        });
    </script>


<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="<?php echo base_url();?>assets/images/slide/slide1.jpg" alt="#" style="width:100% ">
    <div class="text" style="margin-top:10px;  background-color:#3e98ff;"><h1 style="text-align:center; font-size:300%;">Articles form 56+ Countries</h1><br><h5>International Journal of pharmaceutical Research and Application</h5></div>
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="<?php echo base_url();?>assets/images/slide/slide2.jpg" alt="#" style="width:100% ">
    <div class="text" style="margin-top:50px; "><h1 style="text-align:center; background-color:#3e98ff; font-size:300%">An ISO Certified peer-reviewed journal</h1></div>
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="<?php echo base_url();?>assets/images/slide/slide3.jpg" alt="#" style="width:100% ">
   
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script>
   var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>



<div class="section padding_layout_1" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="main_heading text_align_center">
                        <h2>We are International Journal</h2>
                        <p class="large">Fastest publication service within 48 hrs!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row about_blog"  data-aos="fade-up">
            <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog" style="background:#E8E8E8E8;">
                
                <div class="full text_align_left">
                    <h3>Why Choose Us</h3>
                    <p>International Journal of Pharmaceutical Research and Applications is online open access journal. Publishing article from many country in the field of Pharmaceutical Sciences and its applications</p>
                    <ul>
                        <li><i class="fa fa-check-circle"></i>Peer-Reviewed Multi-disciplinary Journal</li>
                        <li><i class="fa fa-check-circle"></i>Strict Policy against Plagiarism</li>
                        <li><i class="fa fa-check-circle"></i>Fast Track Publication within 48 Hours
                            <!-- (Guaranteed) after receiving of Publication Fee &amp; Copyright Form. -->
                        </li>
                        <li><i class="fa fa-check-circle"></i>Notification for Review within 24 Hours of Paper Submission.</li>
                        <li><i class="fa fa-check-circle"></i>Soft Copy of Certificates Immediately after the Publication of Paper.</li>
                        <li><i class="fa fa-check-circle"></i>Nominal Fee for Professional Research Services.</li>
                        <li><i class="fa fa-check-circle"></i>Guidance to Enhance the Quality of Research.</li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0" style="background: #ffff;padding-left: 0px;">
                <div class="full text_align_center"> <img height="500" class="img-responsive" src="<?php echo base_url();?>assets/images/it_service/why choose us.jpg" alt="#" /> </div>
            </div>
        </div>


        <div class="row"  data-aos="fade-up">
            <div class="col-md-12 " style="margin-top: 30px;">
                <div class="full">
                    <div class="main_heading text_align_center">
                        <h2>IJPS JOURNAL PUBLISHES WITHIN 48 HOURS</h2>
                    </div>
                </div>
            </div>
            <div class="container"  data-aos="fade-up">
                <div class="row">
                    <!-- Free Tier -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h3 class="card-title text-muted text-uppercase text-center" >Call for Papers</h3>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"></span><br><p align="center" style="font-size: 200%;">24x7WORKING</p>
                                   <br> </li>

                                </ul>
                                <a href="<?php echo base_url().'Manuscript'?>" class="btn btn-block btn-primary text-uppercase" id="myBtn" onclick="myFunction()">Submit Today</a>
                            </div>
                        </div>
                    </div>
                    <!-- Plus Tier -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h3 class="card-title text-muted text-uppercase text-center">Notification of Acceptance</h3>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"></span><br><p align="center" style="font-size: 200%;">Within 24 Hours</p>
                                   <br> 

                                    </li>

                                </ul>
                                <a href="<?php echo base_url().'Manuscript'?>" class="btn btn-block btn-primary text-uppercase" id="myBtn" onclick="myFunction()">Submit today</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pro Tier -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">

                            <div class="card-body">

                                <h3 class="card-title text-muted text-uppercase text-center">E-Certificates</h3>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><</span><br><p align="center" style="font-size: 200%;">Within 04Hours</p>
                                   <br> 
                                    </li>

                                </ul>
                                <a href="<?php echo base_url().'Manuscript'?>" class="btn btn-block btn-primary text-uppercase" id="myBtn">Submit today</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>
<!-- end section -->
<!-- section -->
<div class="feature_section section padding_layout_1 light_silver"  data-aos="fade-up">
    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="main_heading text_align_center">
                        <h2>IJPS Journal Features</h2>
                        <p class="large">Easy and effective way to get your article publish.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"  data-aos="fade-up">

            <div class="col-md-14">
                <div class="row">
                
               <!-- <div style="margin: right 0px;" >
                <img  hight="500" src="<?php echo base_url();?>assets/images/it_service/features.png" alt="#" />
</div>-->
                    <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src="<?php echo base_url();?>assets/images/it_service/si1.png" alt="#" /></div>
                                <h4 class="service-heading">Fast service</h4>
                                <p>IJPS publishes articles within 48 hrs as it has a wide team of reviewers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src="<?php echo base_url();?>assets/images/it_service/si2.png" alt="#" /></div>
                                <h4 class="service-heading">Publication Fees</h4>
                                <p>Fees is very low. Online publication charges are 1400 Rs only</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src=" <?php echo base_url();?>assets/images/it_service/si3.png" alt="#" /></div>
                                <h4 class="service-heading">Expert team</h4>
                                <p>IJPS has board members from Top Institutes and University</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src="<?php echo base_url();?>assets/images/it_service/si4.png" alt="#" /></div>
                                <h4 class="service-heading">E-Certificates</h4>
                                <p> IJPS provides e-certificates for all publishes articles within 4 hrs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src=" <?php echo base_url();?>assets/images/it_service/si5.png" alt="#" /></div>
                                <h4 class="service-heading">ISSN</h4>
                                <p> IJPS Journal has a valid ISSN 2249-7781</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="full">
                            <div class="service_blog_inner">
                                <div class="icon text_align_left"><img src=" <?php echo base_url();?>assets/images/it_service/si6.png" alt="#" /></div>
                                <h4 class="service-heading">Google Searchable</h4>
                                <p> All publishes articles are searchable in different search Engine like Google</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1" style="padding-top:40px;"  data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="main_heading text_align_center">
                        <h2>For Authors</h2>
                        <p class="large">Fast Publication within 48 hrs in minimum fees 1200 Rs</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"  data-aos="fade-up">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                <div class="product_list">
                    <div class="product_img"> <a href="author-guidelines.html"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/it_service/1.webp" alt=""></a> </div>
                    <div class="product_detail_btm">
                        <div class="center">
                        <h4><a href="<?php echo base_url().'AuthorGuidelines'?> ">Instruction For Authors</a></h4>
                        </div>
                 <div class="starratin">
                    <div class="center"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                        <div class="product_price">
                            <br>
                            <p>
 <!-- <span class="old_price">$15.00</span> – --> <span class="new_price">View</span>
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                <div class="product_list">
                    <div class="product_img"><a href="submit-manuscript.html"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/it_service/2.jpg" alt=""></a> </div>
                    <div class="product_detail_btm">
                        <div class="center">
                            <h4><a href="<?php echo base_url().'Manuscript'?>">Submit Paper</a></h4>
                        </div>
                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <br>
                            <p>
                                <!-- <span class="old_price">$24.99</span> --><span class="new_price">Publish Within 48 hrs</span>
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                <div class="product_list">


                    <div class="product_img"><a href="current-issue6f14.html?issueid=34"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/it_service/3.jpg" alt=""></a> </div>
                    <div class="product_detail_btm">
                        <div class="center">
                            <h4><a href="<?php echo base_url().'CurrentIssue'?>">Current Issue</a></h4>
                        </div>


                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <br>
                            <p>
                                <!-- <span class="old_price">$24.99</span> --><span class="new_price"> View</span>
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                <div class="product_list">
                    <div class="product_img"><a href=""><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/it_service/4.jpg" alt=""></a> </div>
                    <div class="product_detail_btm">
                        <div class="center">
                            <h4><a href="<?php echo base_url().'EditorialBoard'?>">Editorial Board</a></h4>
                        </div>
                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <br>
                            <p>
                                <!-- <span class="old_price">$15.00</span> –  --><span class="new_price">View</span>
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                <div class="product_list">
                    <div class="product_img"><a href="membership.html"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/it_service/5.jpg" alt=""></a> </div>
                    <div class="product_detail_btm">
                        <div class="center">
                            <h4><a href="<?php echo base_url().'#'?>">Membership Form</a></h4>
                        </div>
                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <br>
                            <p>
                                <!-- <span class="old_price">$15.00</span> –  --><span class="new_price">View</span>
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                <div class="product_list">
                    <div class="product_img"> <a href="peer-review-process.html"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/it_service/6.jpg" alt=""></a> </div>
                    <div class="product_detail_btm">
                        <div class="center">
                            <h4><a href="<?php echo base_url().'PeerReviewProcess'?>">Peer Review Process</a></h4>
                        </div>
                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <br>
                            <p>
                                <!-- <span class="old_price">$24.99</span> --><span class="new_price"> View</span>
                            </p>
                            <br>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                <div class="product_list">
                    <div class="product_img"> <a href="pay-fees.html"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/it_service/7.jpg"  alt=""> </a></div>
                    <div class="product_detail_btm">
                        <div class="center">
                            <h4><a href="<?php echo base_url().'PayFee'?>">Publication Charges</a></h4>
                        </div>
                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <br>
                            <p><span class="old_price"></span><span class="new_price"> Rs 1200 Only</span></p>
                       <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                <div class="product_list">
                    <div class="product_img"><a href="<?php echo base_url().'copyrightform'?>"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/it_service/8.jpg" alt=""></a> </div>
                    <div class="product_detail_btm">
                        <div class="center">
                            <h4><a href="<?php echo base_url().'CopyrightForm'?>">Download Copyright Form</a></h4>
                        </div>
                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <br>
                            <p>
                                <!-- <span class="old_price">$15.00</span> –  --><span class="new_price">View</span>
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>
<!-- end section -->

<div class="section "  data-aos="fade-up">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="main_heading text_align_center">
                   
                        <h2>Our Statistics</h2>
                        <p class="large">Guidance to Enhance the Quality of Research.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row counter">
        <img class="img-responsive" hight="700" width="400" src="<?php echo base_url(); ?>assets/images/it_service/ststistics.jpg"  alt="">
            <div class="col-md-2 ">
                <div class="text_align_center"><i class="fa fa-smile-o"></i></div>
                <div class="text_align_center">
                    <p class="counter-heading text_align_center">Issue Released</p>
                </div>
                <h5 class="counter-count ">8</h5>
            </div>
            <div class="col-md-2">
                <div class="text_align_center"><i class="fa fa-laptop"></i></div>
                <div class="text_align_center">
                    <p class="counter-heading text_align_center">Indexing</p>
                </div>
                <h5 class="counter-count">7</h5>
            </div>
            <div class="col-md-13">
                <div class="text_align_center"><i class="fa fa-users"></i></div>
                <div class="text_align_center">
                    <p class="counter-heading">&nbsp;Happy Authors</p>
                </div>
                <h5 class="counter-count">&nbsp;500</h5>
            </div>
            
            <div class="col-md-3">
                <div class="text_align_center"><i class="fa fa-book"></i></div>
                <div class="ttext_align_center">
                    <p class="counter-heading">&nbsp;Reviewers</p>
                </div>
                <h5 class="counter-count">50</h5>
            </div>
        </div>

    </div>
</div>
<!-- end section -->



<div class="section testimonal">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="main_heading text_align_center">
                        <h2>Our Testimonal</h2>
                        <p class="large">Here are testimonials from clients..</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="cards">
                    <div class="user">
                        <div class="user_img">
                            <img src="https://images.unsplash.com/photo-1601933513556-7926c45d1c49?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" alt="">
                        </div>
                        <div class="user_content">
                            <h1>Brooke Cagle
                            </h1>
                            <p>Verifed Buyer</p>
                        </div>
                    </div>
                    <div class="user_info">
                        <p>"We needed the same printed design as the one we had ordered a week prior. Not only did they find the original order. but we also recived it in time. Excellent!"</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cards">
                    <div class="user">
                        <div class="user_img">
                            <img src="https://images.unsplash.com/photo-1622456202325-c3d5c2eb4d84?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80" alt="">
                        </div>
                        <div class="user_content">
                            <h1>Dyandeep Panchal</h1>
                            <p>Verifed Buyer</p>
                        </div>
                    </div>
                    <div class="user_info">
                        <p>"Customer service is always excellent and very quick turn around. Completely delighted with the simplicity of the purchase and the speed of delivery."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cards">
                    <div class="user">
                        <div class="user_img">
                            <img src="https://images.unsplash.com/photo-1601933973783-43cf8a7d4c5f?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                        </div>
                        <div class="user_content">
                            <h1>Mailchimp</h1>
                            <p>Verifed Buyer</p>
                        </div>
                    </div>
                    <div class="user_info">
                        <p>"Put an order with this company and can only praise them for the very high standatd. Will definetley use them agian and recommend them to everyone!"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->


<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
                        <div class="navbar-search">
                            <form action="#" method="get" id="search-global-form" class="search-global">
                                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                                <div class="search-global__note">Begin typing your search above and press return to search.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Model search bar -->
<!-- footer -->
<!-- section -->
<div class="section padding_layout_1" style="padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <ul class="brand_list">
                        <li><img src="https://ijprajournal.com/images/it_service/brand_icon1.png" alt="#" /></li>
                        <li><img src="https://ijprajournal.com/images/it_service/brand_icon2.png" alt="#" /></li>
                        <li><img src="https://ijprajournal.com/images/it_service/brand_icon3.png" alt="#" /></li>
                        <li><img src="https://ijprajournal.com/images/it_service/brand_icon4.png" alt="#" /></li>
                        <li><img src="https://ijprajournal.com/images/it_service/brand_icon5.png" alt="#" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
