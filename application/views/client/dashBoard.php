<?php include 'includes/header.php';?>

<!--============= Hero Section Starts Here =============-->
<div class="hero-section">
        <div class="container">
            <center><h3>Dashboard</h3>
            <a href="<?= base_url();?>client" style="color:black">Home/</a>
            <a href="<?=base_url();?>client/profile/<?= $_SESSION['userIDPK'];?>" class="active" style="color:black">Personal Profile/ </a>
                            <span>Dashboard</span></center>
            
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="<?=base_url();?>assets/client/assets/images/banner/backimage1.jpg"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->

       <!--============= Dashboard Section Starts Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-7 col-lg-4">
                    <div class="dashboard-widget mb-30 mb-lg-0">
                        <div class="user">
                            <div class="thumb-area">
                                <div class="thumb">
                                    <img src="<?=base_url();?>assets/client/assets/images/auction/user.jpg" alt="user">
                                </div>
                                  </div>
                            <div class="content">
                                <h5 class="title"><a href="#0"><?= $_SESSION['userName'];?></a></h5>
                                <span class="username"><a href="http://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="771d181f1937101a161e1b5914181a">[email&#160;protected]</a></span>
                            </div>
                        </div>
                        <ul class="dashboard-menu">
                            <li>
                                <a href="<?=base_url();?>client/dashboard" class="active"><i class="flaticon-dashboard"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/profile/<?= $_SESSION['userIDPK'];?>"><i class="flaticon-settings"></i>Personal Profile </a>
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
                    <div class="dashboard-widget mb-40">
                        <div class="dashboard-title mb-30">
                            <h5 class="title">My Activity</h5>
                        </div>
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="<?=base_url();?>assets/client/assets/images/dashboard/01.png" alt="dashboard">
                                    </div>
                                    <?php $totalBids = count($this->bidModel->showbidUser($_SESSION['userIDPK'])); { ?>
                   
                                    <div class="content">
                                        <h2 class="title"><span class="counter"><?= $totalBids;?></span></h2>
                                        <h6 class="info">Active Bids</h6>
                                    </div><br/>
                                    
                                </div>
                                <?php } ?>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="<?=base_url();?>assets/client/assets/images/dashboard/02.png" alt="dashboard">
                                    </div>
                                    <?php $totalwinBids = count($this->biddetailModel->showbiddetailUser($_SESSION['userIDPK'])); { ?>
                   
                                    <div class="content">
                                        <h2 class="title"><span class="counter"><?= $totalwinBids;?></span></h2>
                                        <h6 class="info">Items Won</h6>
                                    </div><br/>
                                    
                                </div>
                                <?php } ?>
                            </div>
                           
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
                                    </div>    </section>
    <!--============= Dashboard Section Ends Here =============-->



<?php include 'includes/footer.php';?>
