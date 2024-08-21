<?php include 'includes/header.php';?>


<!--============= Hero Section Starts Here =============-->
<div class="hero-section">
    <div class="container">
    <center><h3>Product Detail</h3>
            <a href="<?= base_url();?>client" style="color:black">Home/</a>
            <span>Product/</span>               
            <span>Product Detail</span></center>
            
    </div>
    <div class="bg_img hero-bg bottom_center"
        data-background="<?=base_url();?>assets/client/assets/images/banner/client-right.png"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<section class="product-details padding-bottom mt--240 mt-lg--440">
    <div class="container">
        <div class="product-details-slider-top-wrapper">
            <div class="product-details-slider owl-theme owl-carousel" id="sync1">
             
                <?php foreach($imageData as $image) { ?>
                <div class="slide-top-item">
                    <div class="slide-inner">
                        <img class="img-responsive" src="<?=base_url().$image['pic'];?>" alt="product">

                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

    </div>
    <div class="product-details-slider-wrapper">
        <div class="product-bottom-slider owl-theme owl-carousel" id="sync2">

            <?php foreach($imageData as $image) { ?>
            <div class="slide-bottom-item">

                <div class="slide-inner">
                    <img src="<?=base_url().$image['pic'];?>" alt="product">
                </div>

            </div>
            <?php } ?>
        </div>
        <span class="det-prev det-nav">
            <i class="fas fa-angle-left"></i>
        </span>
        <span class="det-next det-nav active">
            <i class="fas fa-angle-right"></i>
        </span>
    </div>

    <div class="row mt-40-60-80">
        <div class="col-lg-8">
            <div class="product-details-content">
                <div class="product-details-header">
                 

                </div>

                <ul class="price-table mb-30">
                    <li class="header">
                        <h5 class="current">Product Name</h5>
                        <h3 class="price"><?= $productData['productName'];?></h3>
                    </li>
                    <li>
                        <span class="details">Current Price</span>
                        <?php if ($bidData != null) { ?>
                        <h5 class="info"><?= $bidData['price'];?></h5>
                        <?php } else { ?>
                        <h5 class="info"><?= $productData['price'];?></h5>
                        <?php } ?>
                    </li>


                    <li>
                        <span class="details">Bid Increment</span>
                        <h5 class="info">₹100</h5>
                    </li>
                </ul>

                <div class="product-bid-area">
                    <form method="post" action="<?= base_url();?>client/insertbid" class="product-bid-form">
                        <div class="search-icon">
                            <img src="<?=base_url();?>assets/client/assets/images/product/search-icon.png"
                                alt="product">
                        </div>
                        <input type="hidden" name="productID" value="<?= $productData['productIDPK'];?>" />
                        <input type="hidden" name="productName" value="<?= $productData['productName'];?>" />
                        <?php if ($bidData != null) { ?>
                        <input type="hidden" name="current_price" value="<?= $bidData['price'];?>" />
                        <?php } else { ?>
                        <input type="hidden" name="current_price" value="<?= $productData['price'];?>" />
                        <?php } ?>

                        <input type="text" placeholder="Enter you bid amount" name="price">
                        <button type="submit" class="custom-button">Submit a bid</button>

                        <?php if(isset($message)) { ?>
                        <p style="color:red;"> <?= $message;?></p>
                        <?php }?>
                    </form>
                </div>
                <div class="buy-now-area">
                    <div class="share-area">
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="product-sidebar-area">
                <div class="product-single-sidebar mb-3">
                    <h6 class="title">This Auction Ends in:</h6>
                    <div class="countdown">
                        <h5 class="info"><?= date('d-m-Y',strtotime($productData['endDate']));?></h5>
                        <!-- <div id="bid_counter1"></div> -->
                    </div>
                    <div class="side-counter-area">

                        <div class="side-counter-item">


                        </div>
                        <?php $totalBids = count($this->bidModel->showbidByProduct($productData['productIDPK'])); { ?>

                        <div class="side-counter-item">
                            <div class="thumb">
                                <img src="<?=base_url();?>assets/client/assets/images/product/icon3.png" alt="product">
                            </div>
                            <div class="content">
                                <h3 class="count-title"><span class="counter"><?= $totalBids;?></span></h3>
                                <p>Total Bids</p>
                            </div>
                        </div>

                    </div>
                </div>
                <?php } ?>

                <a href="#0" class="cart-link">View Shipping, Payment & Auction Policies</a>
            </div>
        </div>
    </div>

    </div>
    <div class="product-tab-menu-area mb-40-60 mt-70-100">
        <div class="container">
            <ul class="product-tab-menu nav nav-tabs">

                <li>
                    <a href="#details" class="active" data-toggle="tab">
                        <div class="thumb">
                            <img src="<?=base_url();?>assets/client/assets/images/product/tab1.png" alt="product">
                        </div>
                        <div class="content">Description</div>
                    </a>
                </li>

                <li>
                    <a href="#delevery" data-toggle="tab">
                        <div class="thumb">
                            <img src="<?=base_url();?>assets/client/assets/images/product/tab2.png" alt="product">
                        </div>
                        <div class="content">Delivery Options</div>
                    </a>
                </li>
                <li>
                    <a href="#history" data-toggle="tab">
                        <div class="thumb">
                            <img src="<?=base_url();?>assets/client/assets/images/product/tab3.png" alt="product">
                        </div>
                        <div class="content">Bid History</div>
                    </a>
                </li>
                <li>
                    <a href="#questions" data-toggle="tab">
                        <div class="thumb">
                            <img src="<?=base_url();?>assets/client/assets/images/product/tab4.png" alt="product">
                        </div>
                        <div class="content">Questions</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="details">
                <div class="tab-details-content">
                    <div class="header-area">

                        <h3 class="title"><?= $productData['desc'];?></h3>
                        <div class="item">

                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="delevery">
                <div class="shipping-wrapper">
                    <div class="item">
                        <h5 class="title">shipping</h5>
                        <div class="table-wrapper">
                            <table class="shipping-table">
                                <thead>
                                    <tr>
                                        <th>Available delivery methods </th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Customer Pick-up (within 10 days)</td>
                                        <td>Their Winning bid Price</td>
                                    </tr>
                                    <tr>
                                        <td>Standard Shipping (5-7 business days)</td>
                                        <td>Not Applicable</td>
                                    </tr>
                                    <tr>
                                        <td>Expedited Shipping (2-4 business days)</td>
                                        <td>Not Applicable</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="item">
                        <h5 class="title">Notes</h5>
                        <p>Please carefully review our shipping and returns policy before committing to a bid.
                            From time to time, and at its sole discretion, Sbidu may change the prevailing fee structure
                            for shipping and handling.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="history">
                <div class="history-wrapper">
                    <div class="item">
                        <h5 class="title">Bid History</h5>
                        <div class="history-table-area">
                            <table class="history-table">
                                <thead class="bg-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>User Name</th>
                                        <th>Price</th>
                                        <th>Date</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; 
										foreach($bidListData as $bid) { ?>
                                    <tr>
                                        <td><?= $no++;?></td>
                                        <td><?= $bid['userName'];?></td>
                                        <td><?= $bid['price'];?></td>
                                        <td><?= $bid['addedon'];?></td>

                                    </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                            <div class="text-center mb-3 mt-4">
                                   </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="questions">
                <h5 class="faq-head-title">Frequently Asked Questions</h5>
                <div class="faq-wrapper">
                    <div class="faq-item">
                        <div class="faq-title">
                            <img src="<?=base_url();?>assets/client/assets/css/img/faq.png" alt="css"><span
                                class="title">How to start bidding?</span><span class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In
                                addition, all successful bidders will receive an email notifying them of their winning
                                bid after the auction closes.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-title">
                            <img src="<?=base_url();?>assets/client/assets/css/img/faq.png" alt="css"><span
                                class="title">Security Deposit / Bidding Power </span><span class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In
                                addition, all successful bidders will receive an email notifying them of their winning
                                bid after the auction closes.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-title">
                            <img src="<?=base_url();?>assets/client/assets/css/img/faq.png" alt="css"><span
                                class="title">Delivery time to the destination port </span><span
                                class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In
                                addition, all successful bidders will receive an email notifying them of their winning
                                bid after the auction closes.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-title">
                            <img src="<?=base_url();?>assets/client/assets/css/img/faq.png" alt="css"><span
                                class="title">How to register to bid in an auction?</span><span
                                class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In
                                addition, all successful bidders will receive an email notifying them of their winning
                                bid after the auction closes.</p>
                        </div>
                    </div>
                    <div class="faq-item open active">
                        <div class="faq-title">
                            <img src="<?=base_url();?>assets/client/assets/css/img/faq.png" alt="css"><span
                                class="title">How will I know if my bid was successful?</span><span
                                class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In
                                addition, all successful bidders will receive an email notifying them of their winning
                                bid after the auction closes.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-title">
                            <img src="<?=base_url();?>assets/client/assets/css/img/faq.png" alt="css"><span
                                class="title">What happens if I bid on the wrong lot?</span><span
                                class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In
                                addition, all successful bidders will receive an email notifying them of their winning
                                bid after the auction closes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?php include 'includes/footer.php';?>