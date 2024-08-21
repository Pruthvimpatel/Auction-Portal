<?php include 'includes/header.php'; ?>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
     
      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <div class="container-full">
            <!-- Content Header (Page header) -->	  
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Profile</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Extra</li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div>
    
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="<?= ADMIN_ASSET_PATH;?>images/avatar/avatar-13.png" class="bg-light w-100 h-100 rounded-circle avatar-lg img-thumbnail" alt="profile-image">
    
                                <h4 class="mb-0 mt-2"><?= $_SESSION['userName'];?></h4>
                                <p class="text-muted fs-14">Admin</p>
    
                                <!-- <button type="button" class="btn btn-primary btn-sm mb-2">Follow</button>
                                <button type="button" class="btn btn-light btn-sm mb-2">Message</button>
     -->
                                <div class="text-start mt-3">
                                    <p class="header-title text-info mb-2"><strong>About Me :</strong></p>
                                    <p class="text-muted  mb-3">
                                        Hi I'm Admin,has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type.
                                    </p>
                                    <p class="text-muted mb-2 "><strong class="text-info">Full Name :</strong> <span class="ms-2"><?= $_SESSION['userName'];?></span></p>
    
                                    <p class="text-muted mb-2 "><strong class="text-info">Mobile :</strong><span class="ms-2"><?= $_SESSION['contactNo'];?></span></p>
    
                                    <p class="text-muted mb-2 "><strong class="text-info">Email :</strong> <span class="ms-2 "><?= $_SESSION['email'];?></span></p>
    
                                    <p class="text-muted mb-1 "><strong class="text-info">Address :</strong> <span class="ms-2"><?= $_SESSION['address'];?></span></p>
                                </div>
    
                                </div> <!-- end card-body -->
                        </div> <!-- end card -->
    
                       
            </section>
            <!-- /.content -->
          </div>
      </div>
      <?php include 'includes/footer.php'; ?>
