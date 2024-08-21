<?php include 'includes/header.php';?>
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
                    <span>Sign Up</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="<?=base_url();?>assets/client/assets/images/banner/client-left.png"></div>
   
    <!--============= Hero Section Ends Here =============-->

<div class="newslater-wrapper">
        <div class="container">
           	<div class="table-responsive">
			   <h4 class="box-title">Cart Product</h4>
							
                            
								<table class="text-fade table" height="80" width="100">
									<thead class="bg-primary">
										<tr>
											<th>#</th>
							                <th>Product</th>
                                            <th>Total</th>
											<th>Remove</th>
											
									</tr>
									</thead>
									<tbody>
                                        <?php $no = 1; 
										foreach($cartProductData as $cartProduct) {
                                            ?>
											<tr>
												<td><?= $no++;?></td>
												
												<td><?= $cartProduct['productName'];?></td>
												<td><?= $cartProduct['total'];?></td>
												<td><a href="<?= base_url();?>client/deletecart/<?= $cartProduct['cartProductIDPK'];?>/<?= $cartProduct['productIDFK'];?>">Remove Product</a></td>
																					
											</tr>
                                        <?php } ?>

									
                                    </tbody>
</table>



</div>	
			
			</div>
                
            </div></div>
			<br/></br></br><br/>

			
    
<h2 align="right">Total Price:<?= $cartData['totalprice'];?></h2>
	
<br/>
<h2 align="right">	<a href="<?= base_url();?>client/addOrder" class="btn btn-info">Order</a></h2>


										</div>

<?php include 'includes/footer.php';?>
