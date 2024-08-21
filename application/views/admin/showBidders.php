<?php include 'includes/header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">TABLE</h4>
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

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-lg-12">
					<div class="box">
						<div class="box-body">
							<h4 class="box-title">Bid Table</h4>
							
                            <div class="table-responsive">
								<table class="text-fade table" height="80" width="100">
									<thead class="bg-primary">
										<tr>
											<th>#</th>
											<th>Product Name</th>
											<th>User Name</th>
											<th>Date</th>
											<th>Price</th>
                                           
									</tr>
									</thead>
									<tbody>
                                        <?php $no = 1; 
										foreach($bidData as $bid) {
                                            ?>
											<tr>
												<td><?= $no++;?></td>
												<td><?= $bid['productName'];?></td>
												<td><?= $bid['userName'];?></td>
												<td><?= $bid['addedon'];?></td>
												<td><?= $bid['price'];?></td>
												<td><a href="<?= base_url();?>Admin/insertBiddetail/<?= $bid['bidIDPK'];?>/<?= $bid['productIDFK'];?>">Purchase</a></td>
										
												
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