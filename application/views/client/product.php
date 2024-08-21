<?php include 'includes/header.php';?>

<!--============= Hero Section Starts Here =============-->
<div class="hero-section">
        <div class="container">
        <center><h3>Product</h3>
            <a href="<?= base_url();?>client" style="color:black">Home/</a>
                           <span>Product</span></center>
            
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="<?= base_url();?>assets/client/assets/images/banner/client-right.png"></div>
      <br/><br/><br/>
    <!--============= Hero Section Ends Here =============-->



<!--============= Product Auction Section Starts Here =============-->
<div class="product-auction padding-bottom">
    <div class="container">
        <div class="row mb--50">
            <div class="col-lg-4 mb-50">
                
                
                <div class="widget">
                    <h5 class="title">Category</h5>
                    <div class="widget-body">
                        <div class="widget-form-group">
                        <ul class="links-list">
                            <li>
                                <a href="<?=base_url();?>client/showsubCategory/1" style="color:black">Jewellary</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/showsubCategory/2" style="color:black">Mirror</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/showsubCategory/7" style="color:black">Wall Clock</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/showsubCategory/8" style="color:black">Coin</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/showsubCategory/9" style="color:black">Painting</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/showsubCategory/5" style="color:black">Vases</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/showsubCategory/4" style="color:black">Trunk</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/showsubCategory/3" style="color:black">Sclupture</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/showCategory/6" style="color:black">Real Estate</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/showsubCategory/22" style="color:black">Laptop</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>client/showsubCategory/37" style="color:black">Car</a>
                            </li>
                        </ul>
                        </div>
                        
                    </div>
                </div>
               
            </div>
            <div class="col-lg-8 mb-50">
                
                <div class="row mb-30-none justify-content-center">
                    
                    <?php foreach($productData as $product) { 
                        		$bidData = $this->bidModel->showbidById($product['productIDPK']);
                                $totalBids = count($this->bidModel->showbidByProduct($product['productIDPK']));
                   
                                ?>
                    <div class="col-sm-10 col-md-6">
                        <div class="auction-item-2">
                            <div class="auction-thumb">
                                <a href="<?=base_url();?>client/showproductDetail/<?=$product['productIDPK'];?>">
                                <img
                                        src="<?=base_url().$product['image'];?>"
                                        alt="product"></a>
                                         <a href="<?=base_url();?>client/showproductDetail/<?=$product['productIDPK'];?>" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="<?=base_url();?>client/showproductDetail/<?=$product['productIDPK'];?>"><?= $product['productName'];?></a>
                                </h6>
                                <div class="bid-area">
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
                                <?php } ?> 
                                </div>
                                        </div>
                                    </div>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Buy Now</div>
                                            <div class="amount"><?= $product['price'];?></div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="countdown-area">
                                    <div class="countdown">
                                    </div>
                                   
                                    <span class="total-bids">Total Bids-<?= $totalBids;?></span>
                                </div>
                                <div class="text-center">
                                    <a href="#0" class="custom-button">Submit a bid</a>
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
            
<!--============= Product Auction Section Ends Here =============-->

<?php include 'includes/footer.php';?>