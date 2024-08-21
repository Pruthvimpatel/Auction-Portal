<?php include 'includes/header.php';?>

<!--============= Hero Section Starts Here =============-->
<!--============= Hero Section Starts Here =============-->
<div class="hero-section">
        <div class="container">
        <center><h3>Sign Up</h3>
            <a href="<?= base_url();?>client" style="color:black">Home/</a>
            <span>My Account/</span>              
            <span>Sign Up</span></center>
            
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="<?=base_url();?>assets/client/assets/images/banner/backimage1.jpg"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->

    <!--============= Hero Section Ends Here =============-->


    <!--============= Account Section Starts Here =============-->
    <section class="account-section padding-bottom">
        <div class="container">
            <div class="account-wrapper mt--100 mt-lg--440">
                <div class="left-side">
                    <div class="section-header">
                        <h2 class="title">SIGN UP</h2>
                        <p>We're happy you're here!</p>
                    </div>
                    
                    <form class="login-form" method="post" action="<?= base_url();?>client/insertRegister">
                    
                    <div class="form-group mb-30">
                            <label for="login-fname"><i class="far fa-solid fa-user"></i></label>
                            <input type="text" id="login-fname" placeholder="First Name" name="userName" required data-validation-required-message="This field is required">
                        </div>
                        <div class="form-group mb-30">
                            <label for="login-birthdate"><i class="far fa-solid fa-cake-candles"></i></label>
                            <input type="date" id="lname" placeholder="Birthdate" name="birthdate" required data-validation-required-message="This field is required">
                         </div>
                         <div class="form-group mb-30">
                            <label for="login-gender"><i class="far fa-solid fa-user"></i></label>
                            <input type="text" id="login-fname" placeholder="Gender" name="gender" required data-validation-required-message="This field is required">
                        </div> 
                        <div class="form-group mb-30">
                            <label for="login-mobileno"><i class="fa fa-duotone fa-mobile"></i></label>
                            <input type="text" id="login-mobileno" placeholder="Mobile Number" name="contactNo" required data-validation-required-message="This field is required">
                        </div>
                        <div class="form-group mb-30">
                            <label for="login-email"><i class="far fa-envelope"></i></label>
                            <input type="text" id="email" placeholder="Email Address" name="email" required data-validation-required-message="This field is required">
                          
                            
                        </div>
                        <div class="form-group mb-30">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" placeholder="Password" name="password" required data-validation-required-message="This field is required">
                            <span class="pass-type"><i class="fas fa-eye"></i></span>
                        </div>
                        
                        <div class="form-group checkgroup mb-30">
                            <input type="checkbox" name="terms" id="check"><label for="check">The Terms of Use apply</label>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="custom-button">Register</button>
                        </div>
                    </form>
                </div>
                <div class="right-side cl-white">
                    <div class="section-header mb-0">
                        <h3 class="title mt-0">ALREADY HAVE AN ACCOUNT?</h3>
                        <p>Log in and go to your Dashboard.</p>
                        <a href="<?=base_url();?>client/signin" class="custom-button transparent">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Account Section Ends Here =============-->


<?php include 'includes/footer.php';?>
