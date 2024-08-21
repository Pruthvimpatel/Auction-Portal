<?php include 'includes/header.php';?>

<!--============= Hero Section Starts Here =============-->
<div class="hero-section">
        <div class="container">
        <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">Dashboard</h2>

<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?= base_url();?>client/index" style="color:black;">Home</a></li>
<li class="breadcrumb-item" aria-current="page">My </li>
</ol>
</nav>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="<?=base_url();?>assets/client/assets/images/banner/hero-bg.png"></div>
    </div> 
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
                                <img src="<?=base_url();?>assets/client/assets/images/dashboard/user.png" alt="user">
                            </div>
                            <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                            <input type="file" id="profile-pic" class="d-none">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#0"><?= $_SESSION['userName'];?></a></h5>
                            <span class="username"><a href="http://pixner.net/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="c3a9acabad83a4aea2aaafeda0acae">[email&#160;protected]</a></span>
                        </div>
                    </div>
                    <ul class="dashboard-menu">
                        <li>
                            <a href="<?=base_url();?>client/dashboard"><i class="flaticon-dashboard"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>client/profile/<?= $_SESSION['userIDPK'];?>"><i class="flaticon-settings"></i>Personal Profile
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>client/mybid/<?= $_SESSION['userIDPK'];?>" class="active"><i
                                    class="flaticon-auction"></i>My Bids</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>client/winningbid/<?= $_SESSION['userIDPK'];?>"><i class="flaticon-best-seller"></i>Winning
                                Bids</a>
                        </li>
                        <li>
                                <a href="<?=base_url();?>client/addAdress"><i class="flaticon-shake-hand"></i>Add Address</a>
                            </li>
                        <li>
                            <a href="<?=base_url();?>client/logout"><i class="flaticon-alarm"></i>Logout</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="dash-bid-item dashboard-widget mb-40-60">
                    <div class="header">
                        <h4 class="title">My Favourite</h4>
                        <span class="notify"><i class="flaticon-alarm"></i> Manage Notifications</span>
                    </div>
                    
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="upcoming">
                        <div class="row mb-30-none justify-content-center">
                            <?php foreach($favouriteData as $fav) { 
                                            $productData = $this->productModel->searchproduct($fav['productIDFK']);?>


                            <div class="col-sm-10 col-md-6">
                                <div class="auction-item-2">
                                    <div class="auction-thumb">
                                        <a href="<?= base_url();?>client/showproductDetail/<?= $fav['productIDFK'];?>"><img
                                                src="<?=base_url().$fav['image'];?>" alt="car"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>

                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="#0"><?= $fav['productName'];?></a>
                                        </h6>
                                        <div class="bid-area">
                                            <div class="bid-amount">
                                                <div class="icon">
                                                    <i class="flaticon-auction"></i>
                                                </div>
                                                <div class="amount-content">
                                                    <div class="current">My Bid</div>
                                                    <div class="amount">
                                                        <div class="amount">
                                                            <?= $fav['price'];?></div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                           </div>
                                    </div>
                                </div>

                            </div>
                            
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Dashboard Section Ends Here =============-->



<?php include 'includes/footer.php';?>