<!--------------------------------------------------------
---- Sign-Up Page ----------------------------------------
----------------------------------------------------------
---- Displays the form to be filled up by customers ------
----------------------------------------------------------
---- Author: Irene Gayle Roque ---------------------------
--------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo base_url() ?>assets/img/favicon-2.png" type="image/png">
        <title>Du30 Real Estate</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/jquery-ui/jquery-ui.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
        <style type="text/css">
            /*** Start: Sign Up Form CSS **/
            #sign-up-form{
              margin:0 auto;
              background-color: #E8E8E8;
              padding: 40px;
              max-width: 400px;
              border-radius: 25px;
            }
            input{
                border-radius: 10px;
                padding: 5px;
                max-width: 300px;
            }
            /** End: Sign Up Form CSS ***/
        </style>
        <script type="text/javascript">
            function showEmail(){
                document.getElementById('email-form').style.display='block';
            }
            function showPhoneNum(){
                document.getElementById('number-form').style.display='block';
            }
             function hideEmail(){
                document.getElementById('email-form').style.display='none';
            }
            function hidePhoneNum(){
                document.getElementById('number-form').style.display='none';
            }

        </script>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/main-logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto"> 
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>">Home</a></li> 
								<li class="nav-item active"><a class="nav-link" href="sign-up">Sign-Up Now</a></li>
								
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content">
						<div class="page_link">
							<a href="<?php echo base_url() ?>">Home</a>
							<a href="sign-up">Sign-Up</a>
						</div>
						<h2>Sign Up</h2>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Sign Up Now!</h2>
        			<p>Live With Us Today!</p>
        		</div>
        		<div class="row feature_inner" id="sign-up-form">
        			<?php

                        //start of form, displays title of form
                        echo form_fieldset("Fill up the following:");

                        echo '<hr>';

                        //calls method that will validate errors
                        echo validation_errors();

                        //call submit method of signup controller when form is submitted
                        echo form_open('signup/submit');

                            //display input fields
                            echo form_input('first-name','','id="fn-input" placeholder="First Name"').'<br/>'.'<br/>';

                            echo form_input('last-name','','id="ln-input" placeholder="Last Name"').'<br/>'.'<br/>';

                            /** ==== Start: Choose where to contact (Email or Phone Number) ==== ***/
                            echo form_label('Choose where you like to be contacted', 'fd-1').'<br/>';                           
                            echo form_radio('contact', 'Email', NULL, 'id="cem" onclick="showEmail()" onchange="hidePhoneNum()"'.set_radio('contact', 'Email')).form_label('Email', 'con-em').'<br/>';
                            echo form_radio('contact', 'Phone Number', NULL, 'id="cpn" onclick="showPhoneNum()" onchange="hideEmail()"'.set_radio('contact', 'Phone Number')).form_label('Phone Number', 'con-pn').'<br/>';
                            /** === End: Choose where to contact (Email or Phone Number) ==== ***/

                            //=== for email input --> will only show if email is chosen on contact dropdown
                            echo '<div style="display: none;" id="email-form">';
                            echo form_input('email','','id="em-input" placeholder="Email"').'<br/>'.'<br/>';
                            $this->form_validation->set_rules('Email', 'Email', 'required|trim|xss_clean|valid_email');
                            echo '</div>';

                            //for phone number input --> will only show if phone number is chosen on contact dropdown
                            echo '<div style="display: none;" id="number-form">';
                            echo form_input('phone-number','','id="pNum" placeholder="Phone Number"').'<br/>'.'<br/>';
                            $this->form_validation->set_rules('Phone Number', 'Phone Number', 'required|min_length[11]');
                            echo '</div>';

                            //Start: City Dropwdown
                            $options = array(

                                'Manila' => 'Manila',
                                'Cebu' => 'Cebu',
                                'Davao' => 'Davao'
                            );

                            echo form_label('Choose a City', 'city').'<br/>';
                            echo form_dropdown('cities', $options, 'city').'<br/>'.'<br/>'.'<br/>';
                            //End: City Dropwdown

                            //for comments input
                            echo form_textarea('comment','','id="comInput" placeholder="Write a comment here about the property"').'<br/>'.'<br/>';
                           

                            echo form_submit('submit', 'Submit');

                        echo form_close();
                        echo form_fieldset_close();

                    ?>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->
        
        
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Us</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>Stay updated with our latest trends</p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">Instagram Feed</h6>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="img/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>	
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget f_social_wd">
                            <h6 class="footer_title">Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="f_social">
                            	<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>						
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-12 footer-text text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Irene Gayle Roque </p>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/popper.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/stellar.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/isotope/isotope-min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/jquery-ui/jquery-ui.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/mail-script.js"></script>
        <script src="<?php echo base_url() ?>assets/js/theme.js"></script>
    </body>
</html>