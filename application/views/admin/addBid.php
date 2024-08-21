<?php include 'includes/header.php';?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">ADD CATEGORY</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Category</li>
								<li class="breadcrumb-item active" aria-current="page">Add Category</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		 
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
				<?php if($operation == "insert") { ?>
					<form action="<?= base_url();?>Admin/insertBid" method="post" novalidate>
					 
					<form novalidate>
					  <div class="row">
						<div class="col-xl-6 col-12">
							<div class="form-group">
							   
							 <label class="form-label">AUCTION PRODUCT NAME<span class="text-danger">*</span></label>
								<div class="controls">
								<select name="auctionproductIDFK" class="form-control" required data-validation-required-message="This field is required">
                                            <option value=""> Select Auction Product</option>
                                            <?php foreach ($auctionproductData as $auctionproduct) {?>
                                            <option value="<?= $auctionproduct['auctionproductIDPK']; ?>"> 
                                                    <?= $auctionproduct['auctionproductName']; ?>
                                            </option>
                                            <?php }?>
                                          </select>  
								</div>
                                </div>
								
								<div class="form-group">
								<label class="form-label">USERNAME<span class="text-danger">*</span></label>
								<div class="controls">
									
									<select name="userIDFK" class="form-control" required data-validation-required-message="This field is required">
                                            <option value=""> Select User</option>
                                            <?php foreach ($userData as $user) {?>
                                            <option value="<?= $user['userIDPK']; ?>"> 
                                                    <?= $user['userName']; ?>
                                            </option>
                                            <?php }?>
                                          </select> 
								</div></div> 
								
								
				
			
					</div>
								<div class="form-group">
								<label class="form-label">PRICE<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="text" name="price" class="form-control" required data-validation-required-message="This field is required"> 
								</div></div>
								<div class="form-group">
								<label class="form-label">DATE<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="date" name="date" class="form-control" required data-validation-required-message="This field is required"> 
								</div></div>
								<div class="form-group">
								<label class="form-label">Payment Type<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="text" name="paymentType" class="form-control" required data-validation-required-message="This field is required"> 
								</div></div>
						
							</div>
						</div>
						<div class="text-xs-right">
							<button type="submit" class="btn btn-info">Submit</button>
						</div>
					</form>
					<?php } else { ?>
						<form action="<?= base_url();?>Admin/updatebid" method="post" novalidate>
						<input type="hidden" name="biddetailIDPK" value="<?= $bidData['biddetailIDPK'];?>"/>
					  <div class="row">
						<div class="col-xl-6 col-12">						
							<div class="form-group">
							
							
							<label class="form-label">PRICE<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="text" name="price" value="<?= $bidData['price'];?>" class="form-control" required data-validation-required-message="This field is required"> 
								</div></div>
								<div class="form-group">
								<label class="form-label">DATE<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="date" name="date" value="<?= $bidData['date'];?>" class="form-control" required data-validation-required-message="This field is required"> 
								</div></div>
								<div class="form-group">
								<label class="form-label">Payment Type<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="text" name="paymentType" value="<?= $bidData['paymentType'];?>" class="form-control" required data-validation-required-message="This field is required"> 
								</div></div>
						
							</div>
						</div>
						<div class="text-xs-right">
							<button type="submit" class="btn btn-info">Submit</button>
						</div>
					</form>

					<?php } ?>


					
				</div></div>
				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  
  <!-- /.content-wrapper -->

<?php include 'includes/footer.php';?>