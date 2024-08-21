<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from employx-admin-templates.multipurposethemes.com/html/template/vertical/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Feb 2022 09:33:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= ADMIN_ASSET_PATH;?>images/favicon.ico">

    <title>EmployX - Dashboard</title>
    <?PHP include 'css.php';?>

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <!-- Logo -->
                <a href="index.html" class="logo">
                    <!-- logo-->
                    <div class="logo-mini w-40">
                        <span class="light-logo"><img src="<?= ADMIN_ASSET_PATH;?>images/logo-letter.png"
                                alt="logo"></span>
                        <span class="dark-logo"><img src="<?= ADMIN_ASSET_PATH;?>images/logo-letter-white.png"
                                alt="logo"></span>
                    </div>
                    <div class="logo-lg">
                        <span class="light-logo"><img src="<?= ADMIN_ASSET_PATH;?>images/logo-light-text.png"
                                alt="logo"></span>
                        <span class="dark-logo"><img src="<?= ADMIN_ASSET_PATH;?>images/logo-light-text.png"
                                alt="logo"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item">
                            <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light"
                                data-toggle="push-menu" role="button">
                                <i data-feather="menu"></i>
                            </a>
                        </li>
                        <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon3"><i
                                                        class="icon-Search"><span class="path1"></span><span
                                                            class="path2"></span></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group d-md-inline-flex d-none">
                            <label class="switch">
                                <span class="waves-effect skin-toggle waves-light">
                                    <input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin">
                                    <span class="switch-on"><i data-feather="moon"></i></span>
                                    <span class="switch-off"><i data-feather="sun"></i></span>
                                </span>
                            </label>
                        </li>
                        <li class="dropdown notifications-menu btn-group ">
                            <a href="#" class="waves-effect waves-light btn-primary-light svg-bt-icon"
                                data-bs-toggle="dropdown" title="Notifications">
                                <i data-feather="bell"></i>
                                <div class="pulse-wave"></div>
                            </a>
                            <ul class="dropdown-menu animated bounceIn">
                                <li class="header">
                                    <div class="p-20">
                                        <div class="flexbox">
                                            <div>
                                                <h4 class="mb-0 mt-0">Notifications</h4>
                                            </div>
                                            <div>
                                                <a href="#" class="text-danger">Clear All</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu sm-scrol">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc
                                                suscipit blandit.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu
                                                sapien elementum, in semper diam posuere.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor
                                                commodo porttitor pretium a erat.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et
                                                nisi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero
                                                dictum fermentum.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam
                                                interdum, at scelerisque ipsum imperdiet.
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="component_notification.html">View all</a>
                                </li>
                            </ul>
                        </li>
                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title=""
                                id="live-chat">
                                <i data-feather="message-circle"></i>
                            </a>
                        </li>

                        <li class="btn-group d-xl-inline-flex d-none">
                            
                        </li>

                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            
                        </li>

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#"
                                class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow"
                                title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
                                <img src="<?= ADMIN_ASSET_PATH;?>images/avatar/avatar-13.png"
                                    class="avatar rounded-circle bg-primary-light h-40 w-40" alt="" />
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 97%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li>
                                <a href="<?= base_url();?>Admin/index">
                                    <i data-feather="home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="file-plus"></i>
                                    <span>Category</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?= base_url();?>Admin/addCategory"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Add
                                            Category</a>
                                    </li>
                                    <li><a href="<?= base_url();?>Admin/showCategory">
                                            <i class="icon-Commit"><span class="path1"></span>
                                                <span class="path2"></span></i>Show Category</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="file-plus"></i>
                                    <span>Form</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?= base_url();?>Admin/showForm"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Form
                                            Validation</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="file-plus"></i>
                                    <span>Sell Product</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    
                                    <li><a href="<?= base_url();?>Admin/showAuction"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Show
                                            Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="file-plus"></i>
                                    <span>Auction Product</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?= base_url();?>Admin/addProduct"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Add
                                            Product</a>

                                    </li>
                                    <li><a href="<?= base_url();?>Admin/showProduct"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Show
                                            Product</a>

                                    </li>
                                </ul>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="file-plus"></i>
                                    <span>Bid</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?= base_url();?>Admin/addBid"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Add Bid</a>

                                    </li>
                                    <li><a href="<?= base_url();?>Admin/showBid"><i class="icon-Commit">
                                                <span class="path1"></span><span class="path2"></span></i>Show Bid</a>

                                    </li>
                                </ul>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="file-plus"></i>
                                    <span>Delivery</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                            </li>

                            <li class="treeview">
                                <a href="<?=base_url();?>Admin/showContactUS">
                                    <i data-feather="file-plus"></i>
                                    <span>Contact Us</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="<?=base_url();?>Admin/showFeedback">
                                    <i data-feather="file-plus"></i>
                                    <span>Feedback</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                
                            </li>


                        </ul>


                        </ul>



                        </ul>
                        </ul>
                    </div>
                </div>
            </section>
        </aside>