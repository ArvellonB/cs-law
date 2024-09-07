<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>Espire - Bootstrap 4 Admin Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- plugins css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="bower_components/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page plugins css -->
    <link rel="stylesheet" href="bower_components/selectize/dist/css/selectize.default.css" />
    <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="bower_components/summernote/dist/summernote.css" />

    <!-- core css -->
    <link href="assets/css/ei-icon.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <div class="side-nav-logo">
                        <a href="index.html">
                            <div class="logo logo-dark" style="background-image: url('assets/images/logo/logo.png')"></div>
                            <div class="logo logo-white" style="background-image: url('assets/images/logo/logo-white.png')"></div>
                        </a>
                        <div class="mobile-toggle side-nav-toggle">
                            <a href="">
                                <i class="ti-arrow-circle-left"></i>
                            </a>
                        </div>
                    </div>
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item active">
                            <a class="mrg-top-30" href="home.php">
                                <span class="icon-holder">
										<i class="ti-home"></i>
									</span>
                                <span class="title">Home</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
										<i class="ti-user"></i>
									</span>
                                <span class="title">Person</span>
                                <span class="arrow">
										<i class="ti-angle-right"></i>
									</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="prospectiveform.php">Add new Prospective Client</a>
                                </li>
                                <li>
                                    <a href="referralform.php">Add new Referral Partner</a>
                                </li>
                                <li>
                                    <a href="interestedform.php">Add new Interested Party</a>
                                </li>
                            </ul>
                        </li>
						<li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="email.html">
                                <span class="icon-holder">
										<i class="ti-envelope"></i>
									</span>
                                <span class="title">Email</span>
                            </a>
                        </li>
						<li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="calendar.html">
                                <span class="icon-holder">
										<i class="ti-calendar"></i>
									</span>
                                <span class="title">Calendar</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
										<i class="ti-briefcase"></i>
									</span>
                                <span class="title">Practice Building</span>
                                <span class="arrow">
										<i class="ti-angle-right"></i>
									</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="cards.html">Analytics</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Assignments</a>
                                </li>
                                <li>
                                    <a href="modals.html">Goals</a>
                                </li>
                                <li>
                                    <a href="tabs.html">Finances</a>
                                </li>
                                <li>
                                    <a href="progress-slider.html">Marketing</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Header START -->
                <div class="header navbar">
                    <div class="header-container">
                        <ul class="nav-left">
                            <li>
                                <a class="side-nav-toggle" href="javascript:void(0);">
                                    <i class="ti-view-grid"></i>
                                </a>
                            </li>
                            <li class="search-box">
                                <a class="search-toggle no-pdd-right" href="javascript:void(0);">
                                    <i class="search-icon ti-search pdd-right-10"></i>
                                    <i class="search-icon-close ti-close pdd-right-10"></i>
                                </a>
                            </li>
                            <li class="search-input">
                                <input class="form-control" type="text" placeholder="Search..." name="">
                                <div class="advanced-search">
                                    <div class="search-wrapper">
                                        <div class="pdd-vertical-10">
                                            <span class="display-block mrg-vertical-5 pdd-horizon-20 text-gray">
													<i class="ti-user pdd-right-5"></i>
													<span>Clients</span>
                                            </span>
                                            <ul class="list-unstyled list-info">
                                            <?php
																$servername="localhost";
																$username="root";
																$password="Jr91766jr";
																$dbname="lawmanagement";
																$conn = new mysqli($servername, $username, $password, $dbname);
																if ($conn->connect_error)
																{
																	die("Connection failed: " . $conn->connect_error);
																}
																session_start();
																$sql = "SELECT * FROM clientacct ";
																$result = $conn->query($sql);
																if($result->num_rows > 0)
																{
																	while($row = mysqli_fetch_array($result))
																	{ ?>
                                                                    	<li>
                                                                            <a href="profilecheckclient.php?id=<?php echo($row['id']); ?>">
                                                                                <img class="thumb-img" src="assets/images/avatars/thumb-1.jpg" alt="">
                                                                                <div class="info">
                                                                                    <span class="title"><?php echo($row['clientname']); ?> (<?php echo($row['persontype']); ?>)</span>
                                                                                    <span class="sub-title">
                                                                                            <i class="ti-location-pin"></i>
                                                                                            <span><?php echo($row['clientaddress']); ?></span>
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                        </li>
																	<?php 
                                                                    }
																} ?>
                                            </ul>
                                        </div>
                                        <div class="mrg-horizon-20 border top"></div>
                                        <div class="pdd-vertical-10">
                                            <span class="display-block mrg-vertical-5 pdd-horizon-20 text-gray">
													<i class="ti-target pdd-right-5"></i>
													<span>Interested Party</span>
                                            </span>
                                            <ul class="list-unstyled list-info">
                                                <?php
																$servername="localhost";
																$username="root";
																$password="Jr91766jr";
																$dbname="lawmanagement";
																$conn = new mysqli($servername, $username, $password, $dbname);
																if ($conn->connect_error)
																{
																	die("Connection failed: " . $conn->connect_error);
																}
																session_start();
																$sql = "SELECT * FROM interestedacct ";
																$result = $conn->query($sql);
																if($result->num_rows > 0)
																{
																	while($row = mysqli_fetch_array($result))
																	{ ?>
                                                                    	<li>
                                                                            <a href="profilecheckinterested.php?id=<?php echo($row['id']); ?>">
                                                                                <img class="thumb-img" src="assets/images/avatars/thumb-1.jpg" alt="">
                                                                                <div class="info">
                                                                                    <span class="title"><?php echo($row['interstedperson']); ?> (<?php echo($row['interstedperson']); ?>)</span>
                                                                                    <span class="sub-title">
                                                                                            <i class="ti-email"></i>
                                                                                            <span><?php echo($row['interstedemail']); ?></span>
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                        </li>
																	<?php 
                                                                    }
																} ?>
                                            </ul>
                                        </div>
                                        <div class="mrg-horizon-20 border top"></div>
                                        <div class="pdd-vertical-10">
                                            <span class="display-block mrg-vertical-5 pdd-horizon-20 text-gray">
													<i class="ti-link pdd-right-5"></i>
													<span>Referral Partner</span>
                                            </span>
                                            <ul class="list-unstyled list-info">
                                                <?php
																$servername="localhost";
																$username="root";
																$password="Jr91766jr";
																$dbname="lawmanagement";
																$conn = new mysqli($servername, $username, $password, $dbname);
																if ($conn->connect_error)
																{
																	die("Connection failed: " . $conn->connect_error);
																}
																session_start();
																$sql = "SELECT * FROM referralacct ";
																$result = $conn->query($sql);
																if($result->num_rows > 0)
																{
																	while($row = mysqli_fetch_array($result))
																	{ ?>
                                                                    	<li>
                                                                            <a href="profilecheckreferral.php?id=<?php echo($row['id']); ?>">
                                                                                <img class="thumb-img" src="assets/images/avatars/thumb-1.jpg" alt="">
                                                                                <div class="info">
                                                                                    <span class="title"><?php echo($row['companyname']); ?> (<?php echo($row['companyname']); ?>)</span>
                                                                                    <span class="sub-title">
                                                                                            <i class="ti-email"></i>
                                                                                            <span><?php echo($row['referralemail']); ?></span>
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                        </li>
																	<?php 
                                                                    }
																} ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="search-footer">
                                        <span>You are Searching for '<b class="text-dark"><span class="serach-text-bind"></span></b>'</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    <img class="profile-img img-fluid" src="assets/images/user.jpg" alt="">
                                    <div class="user-info">
                                        <span class="name pdd-right-5">Nate Leong</span>
                                        <i class="ti-angle-down font-size-10"></i>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="">
                                            <i class="ti-settings pdd-right-10"></i>
                                            <span>Setting</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="ti-user pdd-right-10"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="ti-email pdd-right-10"></i>
                                            <span>Inbox</span>
                                        </a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="">
                                            <i class="ti-power-off pdd-right-10"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="notifications dropdown">
                                <span class="counter">2</span>
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                </a>

                                <ul class="dropdown-menu ">
                                    <li class="notice-header">
                                        <i class="ti-bell pdd-right-10"></i>
                                        <span>Notifications</span>
                                    </li>
                                    <li>
                                        <ul class="list-info overflow-y-auto relative scrollable">
                                            <li>
                                                <a href="">
                                                    <img class="thumb-img" src="assets/images/avatars/thumb-5.jpg" alt="">
                                                    <div class="info">
                                                        <span class="title">
															<span class="font-size-14 text-semibold">Jennifer Watkins</span>
                                                        <span class="text-gray">commented on your <span class="text-dark">post</span></span>
                                                        </span>
                                                        <span class="sub-title">5 mins ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img class="thumb-img" src="assets/images/avatars/thumb-4.jpg" alt="">
                                                    <div class="info">
                                                        <span class="title">
															<span class="font-size-14 text-semibold">Samuel Field</span>
                                                        <span class="text-gray">likes your <span class="text-dark">photo</span></span>
                                                        </span>
                                                        <span class="sub-title">8 hours ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span class="thumb-img bg-primary">
															<span class="text-white">M</span>
                                                    </span>
                                                    <div class="info">
                                                        <span class="title">
															<span class="font-size-14 text-semibold">Michael Birch</span>
                                                        <span class="text-gray">likes your <span class="text-dark">photo</span></span>
                                                        </span>
                                                        <span class="sub-title">5 hours ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span class="thumb-img bg-success">
														<span class="text-white"><i class="fa fa-paper-plane-o"></i></span>
                                                    </span>
                                                    <div class="info">
                                                        <span class="title">
															<span class="font-size-14 text-semibold">Message sent</span>
                                                        </span>
                                                        <span class="sub-title">8 hours ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span class="thumb-img bg-info">
														<span class="text-white"><i class="ti-user"></i></span>
                                                    </span>
                                                    <div class="info">
                                                        <span class="title">
															<span class="font-size-14 text-semibold">Admin</span>
                                                        <span class="text-gray">Welcome on board</span>
                                                        </span>
                                                        <span class="sub-title">8 hours ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="notice-footer">
                                        <span>
                                            <a href="" class="text-gray">Check all notifications <i class="ei-right-chevron pdd-left-5 font-size-10"></i></a>
										</span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="side-panel-toggle" href="javascript:void(0);">
                                    <i class="ti-align-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Header END -->

                <!-- Side Panel START -->
                <div class="side-panel">
                    <div class="side-panel-wrapper bg-white">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link" href="#chat" role="tab" data-toggle="tab">
                                    <span>Chat</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#profile" role="tab" data-toggle="tab">
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#todo-list" role="tab" data-toggle="tab">
                                    <span>Todo</span>
                                </a>
                            </li>
                            <li class="panel-close">
                                <a class="side-panel-toggle" href="javascript:void(0);">
                                    <i class="ti-close"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- chat START -->
                            <div id="chat" role="tabpanel" class="tab-pane fade in active">
                                <div class="chat">
                                    <div class="chat-user-list scrollable">
                                        <div class="chat-section">
                                            <h5 class="chat-title">Recent</h5>
                                            <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                <img class="thumb-img" src="assets/images/avatars/thumb-1.jpg" alt="">
                                                <div class="user-info">
                                                    <span class="user-name">Jordan Hurst</span>
                                                    <span class="prev-chat">What good's a reward if...</span>
                                                </div>
                                                <span class="status online"><span></span></span>
                                            </a>
                                            <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                <img class="thumb-img" src="assets/images/avatars/thumb-2.jpg" alt="">
                                                <div class="user-info">
                                                    <span class="user-name">Harriet Douglas</span>
                                                    <span class="prev-chat">Don't talk to me, stranger...</span>
                                                </div>
                                                <span class="status no-disturb"></span>
                                            </a>
                                            <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                <img class="thumb-img" src="assets/images/avatars/thumb-3.jpg" alt="">
                                                <div class="user-info">
                                                    <span class="user-name">Victoria Clayton</span>
                                                    <span class="prev-chat">Well, the Force is what...</span>
                                                </div>
                                                <span class="status away"></span>
                                            </a>
                                            <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                <img class="thumb-img" src="assets/images/avatars/thumb-6.jpg" alt="">
                                                <div class="user-info">
                                                    <span class="user-name">Michael Birch</span>
                                                    <span class="prev-chat">Good. Use your aggressive...</span>
                                                </div>
                                                <span class="status online"></span>
                                            </a>
                                        </div>
                                        <div class="chat-section">
                                            <h5 class="chat-title">Members</h5>
                                            <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                <img class="thumb-img" src="assets/images/avatars/thumb-4.jpg" alt="">
                                                <div class="user-info">
                                                    <span class="user-name pdd-top-5">Samuel Field</span>
                                                </div>
                                                <span class="status"></span>
                                            </a>
                                            <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                <img class="thumb-img" src="assets/images/avatars/thumb-5.jpg" alt="">
                                                <div class="user-info">
                                                    <span class="user-name pdd-top-5">Jennifer Watkins</span>
                                                </div>
                                                <span class="status"></span>
                                            </a>
                                            <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                <img class="thumb-img" src="assets/images/avatars/thumb-6.jpg" alt="">
                                                <div class="user-info">
                                                    <span class="user-name pdd-top-5">Michael Birch</span>
                                                </div>
                                                <span class="status"></span>
                                            </a>
                                            <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                <img class="thumb-img" src="assets/images/avatars/thumb-10.jpg" alt="">
                                                <div class="user-info">
                                                    <span class="user-name pdd-top-5">Renee Edwards</span>
                                                </div>
                                                <span class="status"></span>
                                            </a>
                                            <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                <img class="thumb-img" src="assets/images/avatars/thumb-11.jpg" alt="">
                                                <div class="user-info">
                                                    <span class="user-name pdd-top-5">Kathy White</span>
                                                </div>
                                                <span class="status"></span>
                                            </a>
                                            <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                <img class="thumb-img" src="assets/images/avatars/thumb-9.jpg" alt="">
                                                <div class="user-info">
                                                    <span class="user-name pdd-top-5">Daryl Ellis</span>
                                                </div>
                                                <span class="status"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="conversation">
                                        <div class="conversation-wrapper">
                                            <div class="conversation-header">
                                                <a href="javascript:void(0);" class="back chat-toggle">
                                                    <i class="ti-arrow-circle-left"></i>
                                                </a>
                                                <span class="user-name">Jordan Hurst</span>
                                            </div>
                                            <div class="conversation-body">
                                                <div class="msg">
                                                    <div class="bubble me">
                                                        <span>Feeling all right, sir?</span>
                                                    </div>
                                                </div>
                                                <div class="msg">
                                                    <div class="bubble friend">
                                                        <span>Just like new</span>
                                                    </div>
                                                </div>
                                                <div class="msg">
                                                    <div class="bubble friend">
                                                        <span>How about you?</span>
                                                    </div>
                                                </div>
                                                <div class="msg">
                                                    <div class="bubble me">
                                                        <span>Right now I feel I could take on the whole Empire myself</span>
                                                    </div>
                                                </div>
                                                <div class="msg">
                                                    <div class="bubble friend">
                                                        <span>All right</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-footer">
                                                <button class="upload-btn">
                                                    <i class="ti-camera"></i>
                                                </button>
                                                <input class="chat-input" type="text" placeholder="Type a message...">
                                                <button class="sent-btn">
                                                    <i class="fa fa-send-o"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- chat END -->
                            <!-- profile START -->
                            <div id="profile" role="tabpanel" class="tab-pane fade">
                                <div class="profile scrollable">
                                    <div class="pdd-horizon-20 pdd-top-20">
                                        <div class="border bottom">
                                            <div class="text-center mrg-top-20">
                                                <div class="row">
                                                    <div class="col-md-6 ml-auto mr-auto text-center">
                                                        <img class="img-fluid border-radius-round" src="assets/images/avatars/user-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <h4 class="mrg-top-20">Nate Leong</h4>
                                                <span class="">@Frontend Developer</span>
                                            </div>
                                            <div class="row text-center pdd-vertical-20">
                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-4 col-xs-4 border right">
                                                            <div class="pdd-vertical-10">
                                                                <span class="font-size-18 text-dark">18</span>
                                                                <small>Projects</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-4 border right">
                                                            <div class="pdd-vertical-10">
                                                                <span class="font-size-18 text-dark">1,362</span>
                                                                <small>Followers</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-4">
                                                            <div class="pdd-vertical-10">
                                                                <span class="font-size-18 text-dark">362</span>
                                                                <small>Points</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pdd-horizon-20 pdd-top-20">
                                        <div class="border bottom">
                                            <h5 class="text-dark mrg-btm-20">Quick Tools</h5>
                                            <ul class="list-unstyled list-link font-size-16 pdd-btm-20">
                                                <li>
                                                    <a href="">
                                                        <i class="ti-user pdd-right-10"></i>
                                                        <span>Friend Request</span>
                                                        <span class="label label-info mrg-left-5">2</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="ti-book pdd-right-10"></i>
                                                        <span>Inbox</span>
                                                        <span class="label label-warning mrg-left-5">8</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="ti-settings pdd-right-10"></i>
                                                        <span>Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="padding-20">
                                        <h5 class="text-dark mrg-btm-20">Recent</h5>
                                        <ul class="list-unstyled list-info">
                                            <li>
                                                <a href="">
                                                    <img class="thumb-img" src="assets/images/avatars/thumb-1.jpg" alt="">
                                                    <div class="info">
                                                        <span class="title">Jordan Hurst</span>
                                                        <span class="sub-title">have send you a request</span>
                                                        <span class="float-object">8m</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img class="thumb-img" src="assets/images/avatars/thumb-4.jpg" alt="">
                                                    <div class="info">
                                                        <span class="title">Samuel Field</span>
                                                        <span class="sub-title">have send you a request</span>
                                                        <span class="float-object">7d</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span class="thumb-img bg-info text-center font-size-25 font-secondary">
															<span class="text-white">E</span>
                                                    </span>
                                                    <div class="info">
                                                        <span class="title">Espire</span>
                                                        <span class="sub-title">Welcome on Board</span>
                                                        <span class="float-object">7d</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- profile END -->
                            <!-- todo START -->
                            <div id="todo-list" role="tabpanel" class="tab-pane fade">
                                <div class="todo-wrapper">
                                    <div class="todo-category-wrapper">
                                        <div class="row mrg-btm-15">
                                            <div class="col-md-12">
                                                <h3 class="no-mrg-top">Todo List</h3>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="todo-toggle">
                                            <div class="todo-category">
                                                <span class="amount">8</span>
                                                <span class="category">Today</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="todo-toggle">
                                            <div class="todo-category">
                                                <span class="amount">18</span>
                                                <span class="category">This Week</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="todo-toggle">
                                            <div class="todo-category">
                                                <span class="amount">28</span>
                                                <span class="category">This Month</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="todo-toggle">
                                            <div class="create-category">
                                                <i class="amount fa fa-plus-circle"></i>
                                                <span class="category">New Category</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="todolist-wrapper">
                                        <div class="todolist-header">
                                            <a href="javascript:void(0);" class="back todo-toggle">
                                                <i class="ti-arrow-circle-left"></i>
                                            </a>
                                            <h3 class="category">This Week</h3>
                                            <a href="" class="add">
                                                <span>ADD</span>
                                            </a>
                                        </div>
                                        <div class="todolist-body">
                                            <div class="checkbox">
                                                <button class="delete">
                                                    <i class="ti-close"></i>
                                                </button>
                                                <input id="task1" name="task1" type="checkbox">
                                                <label for="task1">I hope the old man got that tractor </label>
                                            </div>
                                            <div class="checkbox">
                                                <button class="delete">
                                                    <i class="ti-close"></i>
                                                </button>
                                                <input id="task2" name="task2" type="checkbox">
                                                <label for="task2">Come on, come on!</label>
                                            </div>
                                            <div class="checkbox">
                                                <button class="delete">
                                                    <i class="ti-close"></i>
                                                </button>
                                                <input id="task3" name="task3" type="checkbox">
                                                <label for="task3">it was dangerous here</label>
                                            </div>
                                            <div class="checkbox">
                                                <button class="delete">
                                                    <i class="ti-close"></i>
                                                </button>
                                                <input id="task4" name="task4" type="checkbox">
                                                <label for="task4">I hope the old man got that tractor </label>
                                            </div>
                                            <div class="checkbox">
                                                <button class="delete">
                                                    <i class="ti-close"></i>
                                                </button>
                                                <input id="task5" name="task5" type="checkbox">
                                                <label for="task5">Artoo! Artoo, quickly!</label>
                                            </div>
                                        </div>
                                        <div class="todolist-body">
                                            <div class="pdd-btm-5 mrg-btm-15 border bottom">
                                                <p class="mrg-btm-5">Completed</p>
                                            </div>
                                            <div class="checkbox">
                                                <button class="delete">
                                                    <i class="ti-close"></i>
                                                </button>
                                                <input id="completed-1" name="completed-1" type="checkbox" checked="">
                                                <label for="completed-1">I hope the old man got that tractor </label>
                                            </div>
                                            <div class="checkbox">
                                                <button class="delete">
                                                    <i class="ti-close"></i>
                                                </button>
                                                <input id="completed-2" name="completed-2" type="checkbox" checked="">
                                                <label for="completed-2">Come on, come on!</label>
                                            </div>
                                            <div class="checkbox">
                                                <button class="delete">
                                                    <i class="ti-close"></i>
                                                </button>
                                                <input id="completed-3" name="completed-3" type="checkbox" checked="">
                                                <label for="completed-3">it was dangerous here</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side Panel END -->

                <!-- theme configurator START -->
                <div class="theme-configurator">
                    <div class="configurator-wrapper">
                        <div class="config-header">
                            <h4 class="config-title">Config Panel</h4>
                            <button class="config-close">
                                <i class="ti-close"></i>
                            </button>
                        </div>
                        <div class="config-body">
                            <div class="mrg-btm-30">
                                <p class="lead font-weight-normal">Header Color</p>
                                <div class="theme-colors header-default">
                                    <input type="radio" id="header-default" name="theme">
                                    <label for="header-default"></label>
                                </div>
                                <div class="theme-colors header-primary">
                                    <input type="radio" class="primary" id="header-primary" name="theme">
                                    <label for="header-primary"></label>
                                </div>
                                <div class="theme-colors header-info">
                                    <input type="radio" id="header-info" name="theme">
                                    <label for="header-info"></label>
                                </div>
                                <div class="theme-colors header-success">
                                    <input type="radio" id="header-success" name="theme">
                                    <label for="header-success"></label>
                                </div>
                                <div class="theme-colors header-danger">
                                    <input type="radio" id="header-danger" name="theme">
                                    <label for="header-danger"></label>
                                </div>
                                <div class="theme-colors header-dark">
                                    <input type="radio" id="header-dark" name="theme">
                                    <label for="header-dark"></label>
                                </div>
                            </div>
                            <div class="mrg-btm-30">
                                <p class="lead font-weight-normal">Sidebar Color</p>
                                <div class="theme-colors sidenav-default">
                                    <input type="radio" id="sidenav-default" name="sidenav">
                                    <label for="sidenav-default"></label>
                                </div>
                                <div class="theme-colors side-nav-dark">
                                    <input type="radio" id="side-nav-dark" name="sidenav">
                                    <label for="side-nav-dark"></label>
                                </div>
                            </div>
                            <div class="mrg-btm-30">
                                <p class="lead font-weight-normal no-mrg-btm">RTL</p>
                                <div class="toggle-checkbox checkbox-inline toggle-sm mrg-top-10">
                                    <input type="checkbox" name="rtl-toogle" id="rtl-toogle">
                                    <label for="rtl-toogle"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- theme configurator END -->

                <!-- Theme Toggle Button START -->
                <button class="theme-toggle btn btn-rounded btn-icon">
                    <i class="ti-palette"></i>
                </button>
                <!-- Theme Toggle Button END -->

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-title">
                            <h4>Add a new Interested Party</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-6">
                                            	<form class="form-horizontal mrg-top-40 pdd-right-30" method="post" action="interestedformsub.php">
												<input type="hidden" name="date" id="date" value="<?php echo date('Y-m-d'); ?>">
												<input type="hidden" name="time" id="time" value="<?php echo date('h:i:sa'); ?>">
                                                <input type="hidden" name="persontype" id="persontype" value="Interested Party">
                                                <input type="hidden" name="typecall" id="typecall" value="Incoming">
                                                <input type="hidden" name="employee" id="employee" value="<?php echo($_SESSION['username1']); ?>">
                                                    <div class="form-group row">
                                                        <label for="form-1-1" class="col-md-2 control-label">Person Name</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" name="interstedperson" id="form-1-1" placeholder="Person Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="form-1-2" class="col-md-2 control-label">Phone Number</label>
                                                        <div class="col-md-10">
                                                            <input type="Phone" class="form-control" id="form-1-2" placeholder="Phone #" name="phone">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="form-2-8" class="col-md-2 control-label">Type of Person</label>
                                                        <div class="col-md-10">
                                                            <select id="typeofperson" name="typeofperson" onchange="gettypeofperson()">
																<option value = "Son">Son</option>
																<option value="Daughter">Daughter</option>
																<option value="Brother">Brother</option>
																<option value="Sister">Sister</option>
																<option value="Father">Father</option>
																<option value="Mother">Mother</option>
																<option value="Friend">Friend</option>
																<option value="Social Worker">Social Worker</option>
																<option value="Other">Other</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <script>
													function gettypeofperson()
													{
														var q1 = document.getElementById("typeofperson").value;
														if(q1 == "Son")
														{
															document.getElementById("tyofp").innerHTML = "";
														}
														else if(q1 == "Daughter")
														{
															document.getElementById("tyofp").innerHTML = "";
														}
														else if(q1 == "Brother")
														{
															document.getElementById("tyofp").innerHTML = "";
														}
														else if(q1 == "Sister")
														{
															document.getElementById("tyofp").innerHTML = "";
														}
														else if(q1 == "Father")
														{
															document.getElementById("tyofp").innerHTML = "";
														}
														else if(q1 == "Mother")
														{
															document.getElementById("tyofp").innerHTML = "";
														}
														else if(q1 == "Friend")
														{
															document.getElementById("tyofp").innerHTML = "";
														}
														else if(q1 == "Social Worker")
														{
															document.getElementById("tyofp").innerHTML = "";
														}
														else if(q1 == "Other")
														{
															document.getElementById("tyofp").innerHTML = "<div class='form-group row'><label for='form-1-1' class='col-md-2 control-label'>Other Type of Person</label><div class='col-md-10'><input type='text' class='form-control' name='othertypeofperson' id='form-1-1' placeholder='Other Type of Person'></div></div>";
														}
													}
												</script>
                                                    <div class="form-group row">
                                                        <label for="form-1-1" class="col-md-2 control-label">Can we disclose client's confidential information to this individual?</label>
                                                        <div class="col-md-10">
                                                            <select name="discloseclientinfo" id="discloseclientinfo">
                                                                <option value="" selected></option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="form-1-1" class="col-md-2 control-label">Referred by</label>
                                                        <div class="col-md-10">
                                                            <select id="selectize-dropdown" name="referredby">
                                                            	<?php
																$servername="localhost";
																$username="root";
																$password="Jr91766jr";
																$dbname="lawmanagement";
																$conn = new mysqli($servername, $username, $password, $dbname);
																if ($conn->connect_error)
																{
																	die("Connection failed: " . $conn->connect_error);
																}
																session_start();
																$sql = "SELECT * FROM clientacct ";
																$result = $conn->query($sql);
																if($result->num_rows > 0)
																{
																	while($row = mysqli_fetch_array($result))
																	{ ?>
																		<option value="<?php echo($row['clientname']); ?>"><?php echo($row['clientname']); ?></option>
																	<?php 
                                                                    }
																} ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="form-2-8" class="col-md-2 control-label">Document Outgoing Correspondence</label>
                                                        <div class="col-md-10">
                                                            <select id="docoutgoingcorr" name="docoutgoingcorr">
																<option value = "Phone Call">Phone Call</option>
																<option value="Email">Email</option>
                                                                <option value="Mail">Mail</option>
															</select>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
													<div class="form-group row">
                                                        <label for="form-1-3" class="col-md-2 control-label">Email</label>
                                                        <div class="col-md-10">
                                                            <input type="email" class="form-control" id="form-1-3" name="interstedemail" placeholder="Email">
                                                        </div>
                                                    </div>
													<div class="form-group row">
                                                        <label for="form-1-1" class="col-md-2 control-label">Interested in which client</label>
                                                        <div class="col-md-10">
                                                            <select id="selectize-dropdown" name="whichclient">
                                                            	<?php
																$servername="localhost";
																$username="root";
																$password="Jr91766jr";
																$dbname="lawmanagement";
																$conn = new mysqli($servername, $username, $password, $dbname);
																if ($conn->connect_error)
																{
																	die("Connection failed: " . $conn->connect_error);
																}
																session_start();
																$sql = "SELECT * FROM clientacct ";
																$result = $conn->query($sql);
																if($result->num_rows > 0)
																{
																	while($row = mysqli_fetch_array($result))
																	{ ?>
																		<option value="<?php echo($row['clientname']); ?>"><?php echo($row['clientname']); ?></option>
																	<?php 
                                                                    }
																} ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="form-1-1" class="col-md-2 control-label">Interested in this client's matter because</label>
                                                        <div class="col-md-10">
                                                            <textarea name="clientmatterinterest" id="clientmatterinterest"></textarea>
                                                        </div>
                                                    </div>
                                                    <div id="tyofp"></div>
                                                <div class="form-group row">
                                                        <label for="form-1-1" class="col-md-2 control-label">Notes</label>
                                                        <div class="col-md-10">
                                                            <textarea name="notes" id="notes"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="form-2-8" class="col-md-2 control-label">Document Incoming Correspondence</label>
                                                        <div class="col-md-10">
                                                            <select id="docincomingcorr" name="docincomingcorr">
																<option value = "Phone Call">Phone Call</option>
																<option value="Mail">Mail</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="form-2-8" class="col-md-2 control-label">Check the following correspondence letter you want to generate</label>
                                                        <div class="col-md-10">
                                                            <input type="checkbox" name="statusupdate" id="statusupdate" value="Status Update for matter">&nbsp;&nbsp;Status Update for matter<br><input type="checkbox" name="requestforinfo" id="requestforinfo" value="Request for Information">&nbsp;&nbsp;Request for Information<br><input type="checkbox" name="generictemp" id="generictemp" value="Generic Template">&nbsp;&nbsp;Generic Template<br><input type="checkbox" name="yearreview" id="yearreview" value="1-Year Review">&nbsp;&nbsp;1-Year Review
                                                        </div>
                                                    </div>
                                            </div>
                                            </div>
                                            <input type="submit" name="sub" id="sub" value="Submit">
                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="content-footer">
                    <div class="footer">
                        <div class="copyright">
                            <span>Copyright © 2017 <b class="text-dark">Theme_Nate</b>. All rights reserved.</span>
                            <span class="go-right">
									<a href="" class="text-gray mrg-right-15">Term &amp; Conditions</a>
									<a href="" class="text-gray">Privacy &amp; Policy</a>
								</span>
                        </div>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

        </div>
    </div>

    <!-- build:js assets/js/vendor.js -->
    <!-- plugins js -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="bower_components/PACE/pace.min.js"></script>
    <script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <!-- endbuild -->

    <!-- build:js assets/js/app.min.js -->
    <!-- core js -->
    <script src="assets/js/app.js"></script>
    <!-- endbuild -->

    <!-- page plugins js -->
    <script src="bower_components/selectize/dist/js/standalone/selectize.min.js"></script>
    <script src="bower_components/moment/min/moment.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
    <script src="bower_components/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="bower_components/summernote/dist/summernote.min.js"></script>

    <!-- page js -->
    <script src="assets/js/forms/form-elements.js"></script>

</body>

</html>