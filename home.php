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
    <link rel="stylesheet" href="bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" href="bower_components/nvd3/build/nv.d3.min.css" />

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
                                                                                            <i class="ti-location-phone"></i>
                                                                                            <span><?php echo($row['phone']); ?></span>
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
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="inline-block">
                                            <h1 class="no-mrg-vertical">$168.90</h1>
                                            <p>This Month</p>
                                        </div>
                                        <div class="pdd-top-25 inline-block pull-right">
                                            <span class="label label-success label-lg mrg-left-5">+18%</span>
                                        </div>
                                        <div class="mrg-top-25">
                                            <div id="bar-config"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-block">
                                        <p class="mrg-btm-5">This Quarter</p>
                                        <h1 class="no-mrg-vertical font-size-35">$3,936<b class="font-size-16">.80</b></h1>
                                        <p class="text-semibold">Total Revenue</p>
                                        <div class="mrg-top-10">
                                            <h2 class="no-mrg-btm">88</h2>
                                            <span class="inline-block mrg-btm-10 font-size-13 text-semibold">Online Revenue</span>
                                            <span class="pull-right pdd-right-10 font-size-13">70%</span>
                                            <div class="progress progress-primary">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mrg-top-10">
                                            <h2 class="no-mrg-btm">69</h2>
                                            <span class="inline-block mrg-btm-10 font-size-13 text-semibold">Offline Revenue</span>
                                            <span class="pull-right pdd-right-10 font-size-13">50%</span>
                                            <div class="progress progress-success">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="maps map-500 padding-20">
                                                <div id="monthly-target">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 border left border-hide-sm">
                                            <div class="card-block">
                                                <h2>Allocation </h2>
                                                <div class="mrg-top-40">
                                                    <div>
                                                        <canvas height="230" id="allocation-chart"></canvas>
                                                    </div>
                                                </div>
                                                <div class="widget-legends mrg-top-30">
                                                    <div class="relative mrg-top-15">
                                                        <span class="status info"> </span>
                                                        <span class="pdd-left-20 font-size-16"><b class="text-dark">25%</b> Texas</span>
                                                    </div>
                                                    <div class="relative mrg-top-15">
                                                        <span class="status primary"> </span>
                                                        <span class="pdd-left-20 font-size-16"><b class="text-dark">45%</b> Utah</span>
                                                    </div>
                                                    <div class="relative mrg-top-15">
                                                        <span class="status success"> </span>
                                                        <span class="pdd-left-20 font-size-16"><b class="text-dark">10%</b> Georgia</span>
                                                    </div>
                                                    <div class="relative mrg-top-15">
                                                        <span class="status"> </span>
                                                        <span class="pdd-left-20 font-size-16"><b class="text-dark">15%</b> Nebraska</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-none d-md-inline-block">
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-md-10 ml-auto mr-auto">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="pdd-vertical-5">
                                                                <p class="no-mrg-btm"><b class="text-dark font-size-16">968</b> Customers</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pdd-vertical-5">
                                                                <p class="no-mrg-btm"><b class="text-dark font-size-16">1.8k</b> Orders</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pdd-vertical-5">
                                                                <p class="no-mrg-btm"><b class="text-dark font-size-16">30k</b> Stock Left</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="pdd-vertical-5">
                                                                <p class="no-mrg-btm"><b class="text-dark font-size-16">1.7k</b> Pending</p>
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
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="widget card">
                                    <div class="card-block">
                                        <h5 class="card-title">Monthly Overview</h5>
                                        <div class="row mrg-top-30">
                                            <div class="col-md-3 col-sm-6 col-6 border right border-hide-md">
                                                <div class="text-center pdd-vertical-10">
                                                    <h2 class="font-primary no-mrg-top">8%</h2>
                                                    <p class="no-mrg-btm">APPL</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-6 border right border-hide-md">
                                                <div class="text-center pdd-vertical-10">
                                                    <h2 class="font-primary no-mrg-top">$1,730</h2>
                                                    <p class="no-mrg-btm">M.AVG</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-6 border right border-hide-md">
                                                <div class="text-center pdd-vertical-10">
                                                    <h2 class="font-primary no-mrg-top">77%</h2>
                                                    <p class="no-mrg-btm">Increment</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-6">
                                                <div class="text-center pdd-vertical-10">
                                                    <h2 class="font-primary no-mrg-top">18%</h2>
                                                    <p class="no-mrg-btm">Profit</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mrg-top-35">
                                            <div class="col-md-12">
                                                <div>
                                                    <canvas id="line-chart" height="220"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="card">
                                    <div class="card-heading">
                                        <h4 class="card-title inline-block pdd-top-5">Latest Transaction</h4>
                                        <a href="" class="btn btn-default pull-right no-mrg">All Trasaction</a>
                                    </div>
                                    <div class="pdd-horizon-20 pdd-vertical-5">
                                        <div class="overflow-y-auto relative scrollable" style="max-height: 381px">
                                            <table class="table table-lg table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="list-info">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-1.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Jordan Hurst</span>
                                                                    <span class="sub-title">ID 863</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10">
                                                                <span>8 May</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-10">
                                                                <span class="status online"> </span>
                                                                <span class="pdd-left-20">Confirmed</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="list-info">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-4.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Samuel Field</span>
                                                                    <span class="sub-title">ID 868</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10">
                                                                <span>8 May</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-10">
                                                                <span class="status away"> </span>
                                                                <span class="pdd-left-20">Pendding</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="list-info">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-5.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Jennifer Watkins</span>
                                                                    <span class="sub-title">ID 860</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10">
                                                                <span>8 May</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-10">
                                                                <span class="status online"> </span>
                                                                <span class="pdd-left-20">Confirmed</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="list-info">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-6.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Michael Birch</span>
                                                                    <span class="sub-title">ID 861</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10">
                                                                <span>8 May</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-10">
                                                                <span class="status no-disturb"> </span>
                                                                <span class="pdd-left-20">Rejected</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="list-info">
                                                                <img class="thumb-img" src="assets/images/avatars/thumb-7.jpg" alt="">
                                                                <div class="info">
                                                                    <span class="title">Jordan Hurst</span>
                                                                    <span class="sub-title">ID 862</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-10">
                                                                <span>8 May</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="relative mrg-top-10">
                                                                <span class="status away"> </span>
                                                                <span class="pdd-left-20">Pendding</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card widget-weather">
                                    <div class="card-block">
                                        <h5 class="card-title">New York, 22 July</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="inline-block">
                                                    <h1 class="today-cel">
															<span>28°</span>
															<i class="ei-partialy-cloudy text-warning"></i> 
														</h1>
                                                    <p>Partly Sunny</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row border bottom mrg-top-30">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 col-4">
                                                        <h3 class="no-mrg-btm">22°/28°</h3>
                                                        <p class="font-size-13">Temp</p>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-4">
                                                        <h3 class="no-mrg-btm">61%</h3>
                                                        <p class="font-size-13">Humidity</p>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-4">
                                                        <h3 class="no-mrg-btm">18<span class="font-size-13">km/h</span></h3>
                                                        <p class="font-size-13">Wind</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mrg-top-35">
                                            <div class="col-md-2 col-sm-2 col-2">
                                                <div class="next-7day">
                                                    <span class="display-block">WED</span>
                                                    <h2 class="mrg-top-10"><i class="ei-cloud"></i></h2>
                                                    <span>28°</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-2">
                                                <div class="next-7day">
                                                    <span class="display-block">THU</span>
                                                    <h2 class="mrg-top-10"><i class="ei-breeze"></i></h2>
                                                    <span>23°</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-2">
                                                <div class="next-7day">
                                                    <span class="display-block">FRI</span>
                                                    <h2 class="mrg-top-10"><i class="ei-blizzard"></i></h2>
                                                    <span>25°</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-2">
                                                <div class="next-7day">
                                                    <span class="display-block">SAT</span>
                                                    <h2 class="mrg-top-10"><i class="ei-sunny-day"></i></h2>
                                                    <span>27°</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-2">
                                                <div class="next-7day">
                                                    <span class="display-block">SUN</span>
                                                    <h2 class="mrg-top-10"><i class="ei-partialy-cloudy"></i></h2>
                                                    <span>24°</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-2">
                                                <div class="next-7day">
                                                    <span class="display-block">MON</span>
                                                    <h2 class="mrg-top-10"><i class="ei-sunny-day"></i></h2>
                                                    <span>26°</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-heading border bottom">
                                        <h4 class="card-title">Latest Feed</h4>
                                    </div>
                                    <div class="widget-feed">
                                        <ul class="list-info overflow-y-auto relative scrollable" style="max-height: 340px">
                                            <li class="border bottom mrg-btm-10">
                                                <div class="pdd-vertical-10">
                                                    <span class="thumb-img bg-primary">
															<span class="text-white">JH</span>
                                                    </span>
                                                    <div class="info">
                                                        <a href="" class="text-link"><span class="title"><b class="font-size-15">Jordan Hurst</b></span></a>
                                                        <span class="sub-title">5 mins ago</span>
                                                    </div>
                                                    <div class="mrg-top-10">
                                                        <p class="no-mrg-btm">Remember, a Jedi can feel the Force flowing through him. You mean it controls your actions? Partially.</p>
                                                    </div>
                                                    <ul class="feed-action">
                                                        <li>
                                                            <a href="">
                                                                <i class="ti-heart text-danger pdd-right-5"></i>
                                                                <span>168</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <i class="ti-comments text-primary pdd-right-5"></i>
                                                                <span>18</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="border bottom mrg-btm-10">
                                                <div class="pdd-vertical-10">
                                                    <span class="thumb-img bg-success">
															<span class="text-white">JW</span>
                                                    </span>
                                                    <div class="info">
                                                        <a href="" class="text-link"><span class="title"><b class="font-size-15">Jennifer Watkins</b></span></a>
                                                        <span class="sub-title">5 mins ago</span>
                                                    </div>
                                                    <div class="mrg-top-15">
                                                        <p>What good's a reward if you ain't around to use it?</p>
                                                    </div>
                                                    <ul class="feed-action">
                                                        <li>
                                                            <a href="">
                                                                <i class="ti-heart text-danger pdd-right-5"></i>
                                                                <span>168</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <i class="ti-comments text-primary pdd-right-5"></i>
                                                                <span>18</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="border bottom">
                                                <div class="pdd-vertical-10">
                                                    <span class="thumb-img bg-warning">
															<span class="text-white">MB</span>
                                                    </span>
                                                    <div class="info">
                                                        <a href="" class="text-link"><span class="title"><b class="font-size-15">Michael Birch</b></span></a>
                                                        <span class="sub-title">5 mins ago</span>
                                                    </div>
                                                    <div class="mrg-top-15">
                                                        <p>What good's a reward if you ain't around to use it? Besides, attacking that battle station ain't my idea of courage.</p>
                                                    </div>
                                                    <ul class="feed-action">
                                                        <li>
                                                            <a href="">
                                                                <i class="ti-heart text-danger pdd-right-5"></i>
                                                                <span>168</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <i class="ti-comments text-primary pdd-right-5"></i>
                                                                <span>18</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-heading border bottom">
                                        <h4 class="card-title">Project</h4>
                                    </div>
                                    <div class="card-block">
                                        <div class="pdd-vertical-10">
                                            <ul class="list-info">
                                                <li>
                                                    <img class="thumb-img img-circle" src="assets/images/others/thumb-1.jpg" alt="">
                                                    <div class="info">
                                                        <span class="title"><a href="" class="text-link text-dark"><b class="font-size-15">Devolopment - Android App</b></a></span>
                                                        <span class="sub-title">Android App</span>
                                                        <div class="float-object dropdown right">
                                                            <i class="ti-android-o"></i>
                                                            <a href="" class="btn btn-icon btn-flat btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti-more"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="">
                                                                        <i class="ti-files pdd-right-10"></i>
                                                                        <span>Duplicate</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <i class="ti-smallcap pdd-right-10"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <i class="ti-image pdd-right-10"></i>
                                                                        <span>Add Images</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mrg-top-20">
                                                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                                                    </div>
                                                    <div class="mrg-top-30">
                                                        <b class="pull-left lh-2-5 pdd-right-15">Team: </b>
                                                        <ul class="list-members list-inline">
                                                            <li>
                                                                <a href="">
                                                                    <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="assets/images/avatars/thumb-4.jpg" alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <img src="assets/images/avatars/thumb-5.jpg" alt="">
                                                                </a>
                                                            </li>
                                                            <li class="all-members">
                                                                <a href="">
                                                                    <span>+2</span>
                                                                </a>
                                                            </li>
                                                            <li class="add-member">
                                                                <a href="">
                                                                    <span>+</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class=" mrg-top-30">
                                                        <span>Due date: <span class="text-success text-semibold">23/7/2017</span></span>
                                                    </div>
                                                    <div class="mrg-top-30">
                                                        <p class="mrg-btm-5">Task completed: <span class="text-dark text-semibold">7/10</span></p>
                                                        <div class="progress progress-info">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                            </ul>
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

    <!-- page plugins js -->
    <script src="bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/js/maps/jquery-jvectormap-us-aea.js"></script>
    <script src="bower_components/d3/d3.min.js"></script>
    <script src="bower_components/nvd3/build/nv.d3.min.js"></script>
    <script src="bower_components/jquery.sparkline/index.js"></script>
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>

    <!-- build:js assets/js/app.min.js -->
    <!-- core js -->
    <script src="assets/js/app.js"></script>
    <!-- endbuild -->

    <!-- page js -->
    <script src="assets/js/dashboard/dashboard.js"></script>

</body>

</html>