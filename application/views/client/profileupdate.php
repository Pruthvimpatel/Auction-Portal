<?php include 'includes/header.php';?>
<!--============= Hero Section Starts Here =============-->
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
                    <span>Profile</span>
                </li>
            </ul>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="<?=base_url();?>assets/client/assets/images/banner/client-right.png"></div>
    
    <!--============= Hero Section Ends Here =============-->

    
<!--============= Hero Section Ends Here =============-->






<div class="col-lg-8">
    <div class="row">
        <div class="col-10">
            <div class="dash-pro-item mb-30 dashboard-widget">
                <div class="header">
                    <h4 class="title">Personal Details</h4>
                    <!-- <span class="edit"><i class="flaticon-edit"></i> Edit</span> -->

                </div>
                <form action="<?= base_url();?>client/updateuser" method="post" novalidate>
                    <input type="hidden" name="userIDPK" value="<?= $userData['userIDPK'];?>" />

                    <ul class="dash-pro-body">
                        <li>
                            <div class="form-group">
                                <label class="form-label">User Name<span class="text-danger">*</span></label>
                                <div class="controls">
                                    <input type="text" name="userName" value="<?= $userData['userName'];?>"
                                        class="form-control" required
                                        data-validation-required-message="This field is required">

                                </div>
                            </div>
                        </li><br />
                        <li>
                            <div class="form-group">
                                <label class="form-label">Birthdate<span class="text-danger">*</span></label>
                                <div class="controls">
                                    <input type="date" name="birthdate" class="form-control"
                                        value="<?= $userData['birthdate'];?>" required
                                        data-validation-required-message="This field is required">
                                </div>
                            </div>
                        </li><br />

                        <li>
                            <div class="form-group">
                                <label class="form-label">email<span class="text-danger">*</span></label>
                                <div class="controls">
                                    <input type="text" name="email" class="form-control"
                                        value="<?= $userData['email'];?>" required
                                        data-validation-required-message="This field is required">
                                </div>
                            </div>
                        </li><br />
                        <li>
                            <div class="form-group">
                                <label class="form-label">ContactNo<span class="text-danger">*</span></label>
                                <div class="controls">
                                    <input type="text" name="contactNo" class="form-control"
                                        value="<?= $userData['contactNo'];?>" required
                                        data-validation-required-message="This field is required">
                                </div>

                            </div>

                        </li><br />
                        <div class="text-xs-right">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </ul>

                </form>
            </div>

        </div>
    </div>
</div>
</div>

<?php include 'includes/footer.php';?>