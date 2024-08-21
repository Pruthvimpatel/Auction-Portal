<?php include 'includes/header.php';?>

<!--============= Hero Section Starts Here =============-->
<!--============= Hero Section Starts Here =============-->
<div class="hero-section">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="<?= base_url();?>client">Home</a>
                </li>
                <li>
                    <a href="#0">Pages</a>
                </li>
                <li>
                    <span>Contact Us</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="<?=base_url();?>assets/client/assets/images/banner/client-left.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->

    <!--============= Hero Section Ends Here =============-->


    <!--============= Contact Section Starts Here =============-->
    <section class="contact-section padding-bottom">
        <div class="container">
            <div class="contact-wrapper padding-top padding-bottom mt--100 mt-lg--440">
                <div class="section-header">
                    <h5 class="cate">Contact Us</h5>
                    <h2 class="title">get in touch</h2>
                    <p>We'd love to hear from you! Let us know how we can help.</p>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <form class="contact-form" id="contact_form" method="post" action="<?= base_url();?>client/insertContact">
                            
                            <div class="form-group">
                                <label for="name"><i class="fas fa-envelope-open-text"></i></label>
                                <input type="text" placeholder="Enter Subject" name="subject" id="subject">
                            </div>
                            <div class="form-group">
                                <label for="message" class="message"><i class="far fa-envelope"></i></label>
                                <textarea name="message" id="message" placeholder="Type Your Message"></textarea>
                            </div>
                            <div class="form-group text-center mb-0">
                                <button type="submit" class="custom-button">Send Message</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-5 d-lg-block d-none">
                        <img src="<?=base_url();?>assets/client/assets/images/contact.png" class="w-100" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Contact Section Ends Here =============-->


<?php include 'includes/footer.php';?>
