<?php include 'includes/header.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-8 col-12 order-xl-1 order-2">
					<div class="row">
						<div class="col-lg-4 col-12">
							<div class="box overflow-h">
								<div class="box-body" style="height:18rem;">
									<div class="d-flex justify-content-between align-items-center">
										<h4 class="me-10 mb-0 fw-600">Total User</h4>
										<img src="<?= ADMIN_ASSET_PATH;?>images/svg-icon/img-1.png" class="img-fluid max-w-150 image-1" alt="" />
									</div>
									<div>
									<?php $totalUserss = count($this->userModel->showuserCount($_SESSION['userIDPK'])); { ?>
   
											<span class="text-overflow pe-5"><span class="fw-600"><h1><?= $totalUserss;?></h1></span></span>
											
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box overflow-h">
								<div class="box-body" style="height:18rem;">
									<div class="d-flex justify-content-between align-items-center">
										<h4 class="me-10 mb-0 fw-600">Total Products</h4>
										<img src="<?= ADMIN_ASSET_PATH;?>images/svg-icon/img-2.png" class="img-fluid max-w-150 image-1" alt="" />
									</div>
									<div>
									<?php $totalProductss = count($this->productModel->showproduct($_SESSION['userIDPK'])); { ?>
   
											<span class="text-overflow pe-5"><span class="fw-600"><h1><?= $totalProductss;?></h1></span></span>
											
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box overflow-h">
								<div class="box-body" style="height:18rem;">
									<div class="d-flex justify-content-between align-items-center">
										<h4 class="me-10 mb-0 fw-600">Total Bids</h4>
										<img src="<?= ADMIN_ASSET_PATH;?>images/svg-icon/img-3.png" class="img-fluid max-w-150 image-1" alt="" />
									</div>
									<div>
									<?php $totalBidss = count($this->bidModel->showbid($_SESSION['userIDPK'])); { ?>
                                  	<span class="text-overflow pe-5"><span class="fw-600"><h1><?= $totalBidss;?></h1></span></span>
											
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box overflow-h">
								<div class="box-body" style="height:18rem;">
									<div class="d-flex justify-content-between align-items-center">
										<h4 class="me-10 mb-0 fw-600">Total Winning Bid</h4>
										<img src="<?= ADMIN_ASSET_PATH;?>images/svg-icon/win3.jpg" class="img-fluid max-w-150 image-1" alt="" />
									</div>
									<div>
									<?php $totalWinBidss = count($this->biddetailModel->showbiddetail($_SESSION['userIDPK'])); { ?>
                                  	<span class="text-overflow pe-5"><span class="fw-600"><h1><?= $totalWinBidss;?></h1></span></span>
											
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box overflow-h">
								<div class="box-body" style="height:18rem;">
									<div class="d-flex justify-content-between align-items-center">
										<h4 class="me-10 mb-0 fw-600">Total Feedback</h4>
										<img src="<?= ADMIN_ASSET_PATH;?>images/svg-icon/feed5.jpg" class="img-fluid max-w-150 image-1" alt="" />
									</div>
									<div>
									<?php $totalFeedback = count($this->feedbackModel->showfeedback($_SESSION['userIDPK'])); { ?>
                                  	<span class="text-overflow pe-5"><span class="fw-600"><h1><?= $totalFeedback;?></h1></span></span>
											
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
				
					</div>
				</div>
				
				</div>
			</div>
			                
					
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
<?php include 'includes/footer.php'; ?>