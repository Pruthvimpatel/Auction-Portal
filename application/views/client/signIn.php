<?php include 'includes/header.php';?>

 <!--============= Hero Section Starts Here =============-->
 <div class="hero-section">
        <div class="container">
        <center><h3>Sign In</h3>
            <a href="<?= base_url();?>client" style="color:black">Home/</a>
            <span>My Account/</span>               
            <span>Sign In</span></center>
            
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="<?=base_url();?>assets/client/assets/images/banner/backimage1.jpg"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->

    <!--============= Account Section Starts Here =============-->
    <section class="account-section padding-bottom">
        <div class="container">
            <div class="account-wrapper mt--100 mt-lg--440">
                <div class="left-side">
                    <div class="section-header">
                        <h2 class="title">HI, THERE</h2>
                        <p>You can log in to your account here.</p>
                    </div>
                    <form class="login-form" method="post" action="<?=base_url();?>client/login">
                        <div class="form-group mb-30">
                            <label for="login-email"><i class="far fa-envelope"></i></label>
                            <input type="text" id="login-email" name="email" placeholder="Email Address" required data-validation-required-message="This field is required">
                        </div>
                        <div class="form-group">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" name="password" placeholder="Password" required data-validation-required-message="This field is required">
                            <span class="pass-type"><i class="fas fa-eye"></i></span>
                        </div>
                        <div class="form-group">
                           
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="custom-button">LOG IN</button>
                            <?php  if(isset($invalid)){
                                                if($invalid!=null){ ?>
                                                <div class=""> <span
                                                        style="color:#FF0000;"><b>*<?php echo $invalid; ?></b></span>
                                                </div>

                                                <?php } } ?>
                        </div>
                    </form>
                </div>
                <div class="right-side cl-white">
                    <div class="section-header mb-0">
                        <h3 class="title mt-0">NEW HERE?</h3>
                        <p>Sign up and create your Account</p>
                        <a href="<?=base_url();?>client/signup" class="custom-button transparent">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Account Section Ends Here =============-->

<?php include 'includes/footer.php';?>
