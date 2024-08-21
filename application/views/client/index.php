<?php include 'includes/header.php'?>




<!--============= Banner Section Starts Here =============-->

<section class="banner-section bg_img"
    data-background="<?= base_url();?>assets/client/assets/images/banner/banner-bg222.jpg">
    <div class="container">
        
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-xl-6">
                <div class="banner-content cl-black">
                    
                    <h5>Next Generation Auction</h5>
                    <h1 class="title"><span class="d-xl-block">Find Your</span> Next Deal!</h1>
                    <p>
                        Online Auction is where everyone goes to shop, sell,and give, while discovering variety and
                        affordability.
                    </p>
                    <!-- <a href="#0" class="custom-button yellow btn-large">Get Started</a>
                     -->
                </div>
                
            </div>
            
            <div class="d-none d-lg-block col-lg-6">
                <div class="banner-thumb-2">
                
                    <!-- <img src="<?=base_url();?>assets/client/assets/images/banner/banner2-girl.png" alt="banner"> -->
                </div>
            </div>
        </div>
    </div>
    <div class="banner-shape d-none d-lg-block">

        <img src="<?= base_url();?>assets/client/assets/css/img/banner-shape-4.png" alt="css">
    </div>
</section>
<!--============= Banner Section Ends Here =============-->


<div class="browse-section ash-bg">

        <!--============= Hightlight Slider Section Starts Here =============-->
        <div class="browse-slider-section mt--140">
            <div class="container">
                <div class="section-header-2 cl-white mb-4">
                    <div class="left">
                        <h4 class="title pl-0 w-100" style="color:black"></h4>
                    </div>
                    <div class="slider-nav">
                        <a href="#0" class="bro-prev active" auto="true"><i class="flaticon-left-arrow"></i></a>
                        <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="m--15">
                    <div class="browse-slider owl-theme owl-carousel">
                        <a href="<?=base_url();?>client/showCategory/7" class="browse-item">
                            <img src="<?=base_url();?>assets/client/assets/images/auction/ca1.jpg" alt="auction">
                            <span class="info">Vehicles</span>
                        </a>
                        <a href="<?=base_url();?>client/showsubCategory/1" class="browse-item">
                            <img src="<?=base_url();?>assets/client/assets/images/auction/jew2.jpg" alt="auction">
                            <span class="info">Jewelry</span>
                        </a>
                        <a href="<?=base_url();?>client/showsubCategory/9" class="browse-item">
                            <img src="<?=base_url();?>assets/client/assets/images/auction/art2.jpg" alt="auction">
                            <span class="info">Art</span>
                        </a>
                        <a href="<?=base_url();?>client/showCategory/4" class="browse-item">
                            <img src="<?=base_url();?>assets/client/assets/images/auction/e1.jpg" alt="auction">
                            <span class="info">Electronics</span>
                        </a>
                        <a href="<?=base_url();?>client/showsubCategory/8" class="browse-item">
                            <img src="<?=base_url();?>assets/client/assets/images/auction/coin1.jpg" alt="auction">
                            <span class="info">Coins</span>
                        </a>
                        <a href="<?=base_url();?>client/showCategory/6" class="browse-item">
                            <img src="<?=base_url();?>assets/client/assets/images/auction/rr1.jpg" alt="auction">
                            <span class="info">Real Estate</span>
                        </a>
                        <a href="<?=base_url();?>client/showCategory/5" class="browse-item">
                            <img src="<?=base_url();?>assets/client/assets/images/auction/home1.jpg" alt="auction">
                            <span class="info">Home Decore</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--============= Hightlight Slider Section Ends Here =============-->
        





    <!--============= Popular Auction Section Starts Here =============-->
    <section class="popular-auction padding-top pos-rel">
        <div class="popular-bg bg_img"
            data-background="<?= base_url();?>assets/client/assets/images/banner/client-right.png"></div>
        <div class="container">
            <div class="section-header cl-black">
                <span class="cate">Closing Within 24 Hours</span>
                <h2 class="title">Popular Auctions</h2>
                <p>Bid and win great deals,Our auction process is simple, efficient, and transparent.</p>
            </div>
            <div class="popular-auction-wrapper">
                <div class="row justify-content-center mb-30-none">
                    <?php foreach($productData as $product) { 
                    $bidData = $this->bidModel->showbidById($product['productIDPK']);
                    $totalbids = count($this->bidModel->showbidByProduct($product['productIDPK']));
                    ?>

                    <div class="col-lg-6">
                        <div class="auction-item-3">

                            <div class="auction-thumb">
                                <a href="<?=base_url();?>client/showproductDetail/<?=$product['productIDPK'];?>"><img
                                        src="<?=base_url().$product['image'];?>" alt="popular"></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a
                                        href="<?=base_url();?>client/showproductDetail/<?=$product['productIDPK'];?>"><?= $product['productName'];?></a>
                                </h6>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount"><?php if ($bidData != null) { ?>
                                            <?= $bidData['price'];?>
                                            <?php } else { ?>
                                            <?= $product['price'];?>
                                            <?php } ?> </div>
                                    </div>
                                </div>
                                <div class="bids-area">
                                    Total Bids : <span class="total-bids"><?= $totalbids;?></span>
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
</section>
<!--============= Popular Auction Section Ends Here =============-->



<!--============= Call In Section Starts Here =============-->
<section class="call-in-section padding-top pt-max-xl-0">
    <div class="container">
        <div class="call-wrapper cl-white bg_img"
            data-background="<?= base_url();?>assets/client/assets/images/call-in/call-bg.png">
            <div class="section-header">
                <h3 class="title">Register for Free & Start Bidding Now!</h3>
                <p>From cars to diamonds to iPhones, we have it all.</p>
            </div>
            <a href="<?=base_url();?>client/signup" class="custom-button white">Register</a>
        </div>
    </div>
</section>
<!--============= Call In Section Ends Here =============-->


<!--============= How Section Starts Here =============-->
<section class="how-section padding-top">
    <div class="container">
        <div class="how-wrapper section-bg">
            <div class="section-header text-lg-left">
                <h2 class="title">How it works</h2>
                <p>Easy 3 steps to win</p>
            </div>
            <div class="row justify-content-center mb--40">
                <div class="col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="<?= base_url();?>assets/client/assets/images/how/how1.png" alt="how">
                        </div>
                        <div class="how-content">
                            <h4 class="title">Sign Up</h4>
                            <p>No Credit Card Required</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="<?= base_url();?>assets/client/assets/images/how/how2.png" alt="how">
                        </div>
                        <div class="how-content">
                            <h4 class="title">Bid</h4>
                            <p>Bidding is free Only pay if you win</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="<?= base_url();?>assets/client/assets/images/how/how3.png" alt="how">
                        </div>
                        <div class="how-content">
                            <h4 class="title">Win</h4>
                            <p>Fun - Excitement - Great deals</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= How Section Ends Here =============-->


<!--============= Client Section Starts Here =============-->
<section class="client-section padding-top padding-bottom">
    <div class="container">
        <div class="section-header">
            <h2 class="title">Don’t just take our word for it!</h2>
            <p>Our hard work is paying off. Great reviews from amazing customers.</p>
        </div>
        <div class="m--15">
            <div class="client-slider owl-theme owl-carousel">
                <div class="client-item">
                    <div class="client-content">
                        <p>I can't stop bidding! It's a great way to spend some time and I want everything.</p>
                    </div>
                    <div class="client-author">
                        <div class="thumb">
                            <a href="#0">
                                <img src="<?=base_url();?>assets/client/assets/images/client/client01.png" alt="client">
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#0">Alexis Moore</a></h6>
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-content">
                        <p>I came I saw I won. Love what I have won, and will try to win something else.</p>
                    </div>
                    <div class="client-author">
                        <div class="thumb">
                            <a href="#0">
                                <img src="<?=base_url();?>assets/client/assets/images/client/client02.png" alt="client">
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#0">Darin Griffin</a></h6>
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-content">
                        <p>This was my first time, but it was exciting. I will try it again. Thank you so much.</p>
                    </div>
                    <div class="client-author">
                        <div class="thumb">
                            <a href="#0">
                                <img src="<?=base_url();?>assets/client/assets/images/client/client03.png" alt="client">
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#0">Tom Powell</a></h6>
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Client Section Ends Here =============-->



<?php include 'includes/footer.php';?>