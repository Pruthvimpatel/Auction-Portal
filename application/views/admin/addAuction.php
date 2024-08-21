<?php include 'includes/header.php';?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">ADD AUCTION</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Auction</li>
								<li class="breadcrumb-item active" aria-current="page">Add Auction</li>
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
					<form action="<?= base_url();?>Admin/insertAuction" method="post" novalidate>
					 
					<form novalidate>
					  <div class="row">
						<div class="col-xl-6 col-12">						
							
							<div class="form-group">
							<label class="form-label">Product Name<span class="text-danger">*</span></label>
								<div class="controls">
								<select name="productIDFK" class="form-control" required data-validation-required-message="This field is required">
                                            <option value=""> Select Product</option>
                                            <?php foreach ($productData as $product) {?>
                                            <option value="<?= $product['productIDPK']; ?>"> 
                                                    <?= $product['productName']; ?>
                                            </option>
                                            <?php }?>
                                          </select>   
								</div>
							</div>
							
							<div class="form-group">
								<label class="form-label">Auction Name<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="text" name="auctionName" class="form-control" required data-validation-required-message="This field is required"> 
								</div>
								</div>	
							<div class="form-group">
						        <label class="form-label">Start Date<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="date" name="startDate" class="form-control" required data-validation-required-message="This field is required"> 
								</div>
								</div>	
							<div class="form-group">
								<label class="form-label">End Date<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="date" name="endDate" class="form-control" required data-validation-required-message="This field is required"> 
								</div>

							</div>
                            <div class="form-group">
								<label class="form-label">Mode<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="text" name="mode" class="form-control" required data-validation-required-message="This field is required"> 
								</div>

							</div>
						</div>
</div>
</div>
</div>
						<div class="text-xs-right">
							<button type="submit" class="btn btn-info">Submit</button>
						</div>
					</form>
					<?php } else { ?>
						<form action="<?= base_url();?>Admin/updateAuction" method="post" novalidate>
						<input type="hidden" name="auctionIDPK" value="<?= $auctionData['auctionIDPK'];?>"/>
					  <div class="row">
						<div class="col-xl-6 col-12">						
							<div class="form-group">
							
							<div class="form-group">
								<label class="form-label">Product Name<span class="text-danger">*</span></label>
								<div class="controls">
								<select name="productIDFK" class="form-control" required data-validation-required-message="This field is required">
                                            <option value=""> Select Product name</option>
                                            <?php foreach ($productData as $product) {?>
                                            <option value="<?= $product['productIDPK']; ?>" 
                                                    <?php if ($product['productIDPK'] == $auctionData['productIDFK']) {echo "Selected";}?>>
                                                    <?= $product['productName']; ?>
                                            </option>
                                            <?php }?>
                                          </select> 
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Auction Name<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="text" name="auctionName" value="<?= $auctionData['auctionName'];?>" class="form-control" required data-validation-required-message="This field is required"> 
								</div>
							</div>
							
							<div class="form-group">
								<label class="form-label">Start date<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="date" name="startDate" class="form-control" value="<?= $auctionData['startDate'];?>" required data-validation-required-message="This field is required"> 
								</div>
								</div>	
							<div class="form-group">
						        <label class="form-label">End Date<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="date" name="endDate" class="form-control" value="<?= $auctionData['endDate'];?>" required data-validation-required-message="This field is required"> 
								</div>
								</div>	
							<div class="form-group">
								<label class="form-label">Mode<span class="text-danger">*</span></label>
								<div class="controls">
									<input type="text" name="mode" class="form-control" value="<?= $auctionData['mode'];?>" required data-validation-required-message="This field is required"> 
								</div>

							</div>
			
							</div>
						</div>
						<div class="text-xs-right">
							<button type="submit" class="btn btn-info">Submit</button>
						</div>
					</form>

					<?php } ?>


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