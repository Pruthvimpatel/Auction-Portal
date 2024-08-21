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
        <div class="bg_img hero-bg bottom_center" data-background="<?=base_url();?>assets/client/assets/images/banner/client-right.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							
								
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>
      </div>
</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-lg-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Cart Detail</h4>
							
                            <div class="table-responsive">
								<table class="text-fade table" height="80" width="100">
									<thead class="bg-primary">
										<tr>
											<th>#</th>
											<th>User Name</th>
											<th>Total Price</th>
											
									</tr>
									</thead>
									<tbody>
                                        <?php $no = 1; 
										foreach($cartData as $cart) {
                                            ?>
											<tr>
												<td><?= $no++;?></td>
												<td><?= $cart['userName'];?></td>
												<td><?= $cart['totalprice'];?></td>
																					
											</tr>
                                        <?php } ?>
                                    </tbody>
</table>

</div>	
</div>		

</div>		

</div>		

</div>


<?php include 'includes/footer.php';?>
