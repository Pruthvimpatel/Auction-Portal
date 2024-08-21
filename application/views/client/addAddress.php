<?php include 'includes/header.php';?>

<!--============= Hero Section Starts Here =============-->
<div class="hero-section">
    <div class="container">
    <center><h3>Address</h3>
            <a href="<?= base_url();?>client" style="color:black">Home/</a>
            <a href="<?=base_url();?>client/profile/<?= $_SESSION['userIDPK'];?>" class="active" style="color:black">Personal Profile/ </a>
                            <span>Address</span></center>
            
    </div>
    <div class="bg_img hero-bg bottom_center"
        data-background="<?=base_url();?>assets/client/assets/images/banner/client-left.png"></div>
</div>
<!--============= Hero Section Ends Here =============-->




<!--============= Dashboard Section Starts Here =============-->
<section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-7 col-lg-4">
                <div class="dashboard-widget mb-30 mb-lg-0">
                    <div class="user">
                        <div class="thumb-area">
                            <div class="thumb">
                                <img src="<?=base_url();?>assets/client/assets/images/auction/user.jpg" alt="user">
                            </div>
                            </div>
                        <div class="content">
                            <h5 class="title"><a href="#0"><?= $_SESSION['userName'];?></a></h5>
                            <span class="username"><a href="http://pixner.net/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="771d181f1937101a161e1b5914181a">[email&#160;protected]</a></span>
                        </div>
                    </div>
                    <ul class="dashboard-menu">
                        <li>
                            <a href="<?=base_url();?>client/dashboard" class="active"><i
                                    class="flaticon-dashboard"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>client/profile/<?= $_SESSION['userIDPK'];?>"><i
                                    class="flaticon-settings"></i>Personal Profile </a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>client/mybid/<?= $_SESSION['userIDPK'];?>"><i
                                    class="flaticon-auction"></i>My Bids</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>client/winningbid"><i class="flaticon-best-seller"></i>Winning
                                Bids</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>client/addaddress/<?= $_SESSION['userIDPK'];?>"><i
                                    class="flaticon-shake-hand"></i>Add Address</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>client/logout"><i class="flaticon-alarm"></i>Logout</a>
                        </li>

                    </ul>
                </div>
            </div>



            <div class="col-lg-8">
                <div class="row">
                    <div class="col-10">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Add Adderss</h4>
                                <!-- <span class="edit"><i class="flaticon-edit"></i> Edit</span> -->

                            </div>
                            <form action="<?= base_url();?>client/insertAddress" method="post" novalidate>
                                <input type="hidden" name="addressIDPK" />

                                <ul class="dash-pro-body">
                                    <li>
                                        
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <div class="controls">
                                                <input type="text" name="address" class="form-control" required
                                                    data-validation-required-message="This field is required">

                                            </div>
                                        </div>

                                    </li><br />
                                    <li>
                                        <div class="form-group">
                                            <label class="form-label">Contact</label>
                                            <div class="controls">
                                                <input type="text" name="contact" class="form-control" required
                                                    data-validation-required-message="This field is required">

                                            </div>
                                        </div>
                                    </li><br />
                                    <li>
                                        <div class="form-group">
                                            <label class="form-label">State</label>
                                            <div class="controls">

                                                <select name="state" class="form-control" required
                                                    data-validation-required-message="This field is required">
                                                    <option value=""> Select State</option>
                                                    <?php foreach ($stateData as $state) {?>
                                                    <option value="<?= $state['stateIDPK']; ?>">
                                                        <?= $state['stateName']; ?>
                                                    </option>
                                                    <?php }?>
                                                </select>


                                            </div>
                                    </li><br />

                                    <li>
                                        <div class="form-group">
                                            <label class="form-label">City</label>
                                            <div class="controls">

                                                <select name="city" class="form-control" required
                                                    data-validation-required-message="This field is required">
                                                    <option value=""> Select City</option>
                                                    <?php foreach ($cityData as $city) {?>
                                                    <option value="<?= $city['cityIDPK']; ?>">
                                                        <?= $city['cityName']; ?>
                                                    </option>
                                                    <?php }?>
                                                </select>


                                            </div>
                                    </li><br />
                                    <li>
                                        <div class="form-group">
                                            <label class="form-label">Pincode</label>
                                            <div class="controls">
                                                <input type="text" name="pincode" class="form-control" required
                                                    data-validation-required-message="This field is required">
                                            </div>

                                        </div>

                                    </li><br />
                                    
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-info" value="Add"/></button>
                                    </div>
                                   
                                </ul>
                                
                                <?php  if(isset($invalid)){
                                                if($invalid!=null){ ?>
                                                <div class=""> <span
                                                        style="color:#FF0000;"><b>*<?php echo $invalid; ?></b></span>
                                                </div>

                                                <?php } } ?>
                            </form>
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
    </div>
    <?php include 'includes/footer.php';?>