<?php include 'includes/header.php';?>

<!--============= Hero Section Starts Here =============-->
<!--============= Hero Section Starts Here =============-->
<div class="hero-section">
        <div class="container">
        <center><h3>Profile</h3>
            <a href="<?= base_url();?>client" style="color:black">Home/</a>
            <span>Profile</span></center>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="<?=base_url();?>assets/client/assets/images/banner/backimage1.jpg"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->

    <!--============= Hero Section Ends Here =============-->


    <!--============= Dashboard Section Starts Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-7 col-lg-4">
                    <div class="dashboard-widget mb-30 mb-lg-0 sticky-menu">
                        <div class="user">
                            <div class="thumb-area">
                                <div class="thumb">
                                    <img src="<?=base_url();?>assets/client/assets/images/auction/user.jpg" alt="user">
                                </div>
                               
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#0"><?= $userData['userName'];?></a></h5>
                                <span class="username"><?= $userData['email'];?></span>
                            </div>
                        </div>
                        <ul class="dashboard-menu">
                            <li>
                                <a href="<?=base_url();?>client/dashboard"><i class="flaticon-dashboard"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/profile/<?= $_SESSION['userIDPK'];?>" class="active"><i class="flaticon-settings"></i>Personal Profile </a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/mybid/<?= $_SESSION['userIDPK'];?>"><i class="flaticon-auction"></i>My Bids</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/winningbid"><i class="flaticon-best-seller"></i>Winning Bids</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/addaddress/<?= $_SESSION['userIDPK'];?>"><i class="flaticon-shake-hand"></i>Add Address</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/logout"><i class="flaticon-alarm"></i>Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                                <div class="header">
                                    <h4 class="title">Personal Details</h4>
                                    <!-- <span class="edit"><i class="flaticon-edit"></i> Edit</span> -->
                                    <a href="<?= base_url();?>client/edituser/<?= $userData['userIDPK'];?>">Edit</a>
												
                                </div>
                               
                                <ul class="dash-pro-body">
                                    <li>
                                        <div class="info-name">Name</div>
                                        <div class="info-value"><?= $userData['userName'];?>
</div>
                                    </li><br/>
                                    <li>
                                        <div class="info-name">Date of Birth</div>
                                        <div class="info-value"><?= $userData['birthdate'];?></div>
                                    </li><br/>
                                    <li>
                                        <div class="info-name">Email</div>
                                        <div class="info-value"><?= $userData['email'];?></div>
                                    </li><br/>
                                    <li>
                                        <div class="info-name">Mobile</div>
                                        <div class="info-value"><?= $userData['contactNo'];?></div>
                                    </li><br/>

                                </ul>
                            
                                    
                        </div>
                        <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                                <div class="header">
                                    <h4 class="title">Account Settings</h4>
                                      </div>
                                <ul class="dash-pro-body">
                                    <li>
                                        <div class="info-name">Language</div>
                                        <div class="info-value">English (United States)</div>
                                    </li>
                                    <li>
                                        <div class="info-name">Time Zone</div>
                                        <div class="info-value">(GMT-06:00)</div>
                                    </li>
                                    <li>
                                        <div class="info-name">Status</div>
                                        <div class="info-value"><i class="flaticon-check text-success"></i> Active</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
       
    </section>
    <!--============= Dashboard Section Ends Here =============-->


<?php include 'includes/footer.php';?>
