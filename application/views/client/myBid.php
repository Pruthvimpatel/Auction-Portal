<?php include 'includes/header.php';?>

<!--============= Hero Section Starts Here =============-->
<div class="hero-section">
        <div class="container">
        <center><h3>My Bid</h3>
            <a href="<?= base_url();?>client" style="color:black">Home/</a>
            <a href="<?=base_url();?>client/profile/<?= $_SESSION['userIDPK'];?>" class="active" style="color:black">Personal Profile/ </a>
                           
            <span>My Bid</span></center>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="<?=base_url();?>assets/client/assets/images/banner/client-right.png"></div>
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
                                <img src="<?=base_url();?>assets/client/assets/images/auction/user.jpg" alt="user">
                            </div>
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
                            <a href="<?=base_url();?>client/winningbid"><i class="flaticon-best-seller"></i>Winning
                                Bids</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>client/addaddress/<?= $_SESSION['userIDPK'];?>"><i class="flaticon-alarm"></i>Add Address</a>
                        </li>
                        
                        <li>
                            <a href="<?=base_url();?>client/logout"><i class="flaticon-shake-hand"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="upcoming">
                        <div class="row mb-30-none justify-content-center">
                            <?php foreach($bidData as $bid) { 
                                            $productData = $this->productModel->searchproductAdmin($bid['productIDFK']);?>


                            <div class="col-sm-10 col-md-6">
                                <div class="auction-item-2">
                                    <div class="auction-thumb">
                                        <!-- <a href="<?= base_url();?>client/showproductDetail/<?= $bid['productIDFK'];?>"> -->
                                        <img
                                                src="<?=base_url().$productData['image'];?>" alt="car"></a>
                                        <!-- <a href="#0" class="rating"><i class="far fa-star"></i></a> -->
                                        <!-- <a href="#0" class="bid"><i class="flaticon-auction"></i></a> -->
                                    </div>

                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="#0"><?= $bid['productName'];?></a>
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
                                                            <?= $bid['price'];?></div>
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