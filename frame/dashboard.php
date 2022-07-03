<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="fasto : sass Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:title" content="fasto : sass Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:description" content="fasto : sass Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:image" content="page-error-404.html"/>
	<meta name="format-detection" content="telephone=no">
    <title>Fasto - Saas Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="svg-logo-path" d="M0 12C0 5.37258 5.37258 0 12 0H26C40.3594 0 52 11.6406 52 26C52 40.3594 40.3594 52 26 52C11.6406 52 0 40.3594 0 26V12Z" fill="#43DC80"/>
					<mask id="mask0" maskUnits="userSpaceOnUse" x="0" y="0" width="52" height="52">
					<path  class="svg-logo-path" d="M0 12C0 5.37258 5.37258 0 12 0H26C40.3594 0 52 11.6406 52 26C52 40.3594 40.3594 52 26 52C11.6406 52 0 40.3594 0 26V12Z" fill="#43DC80"/>
					</mask>
					<g mask="url(#mask0)">
					<circle class="svg-logo-circle" cx="54" cy="13" r="26" fill="#34D574"/>
					<circle class="svg-logo-circle" cx="23" cy="62" r="20" fill="#50E98D"/>
					<circle class="svg-logo-circle" cx="12.5" cy="41.5" r="13" stroke="#50E98D"/>
					</g>
					<path  class="svg-logo-text" d="M18.652 37V21.208C18.652 19.9013 18.904 18.8933 19.408 18.184C19.9307 17.456 20.5747 16.952 21.34 16.672C22.1053 16.3733 22.8707 16.224 23.636 16.224C24.252 16.224 25.064 16.2333 26.072 16.252C27.08 16.2707 28.172 16.308 29.348 16.364C30.524 16.42 31.644 16.5133 32.708 16.644V20.704H25.008C24.4853 20.704 24.1027 20.844 23.86 21.124C23.6173 21.404 23.496 21.7307 23.496 22.104V25.016L31.336 25.268V29.104L23.496 29.356V37H18.652Z" fill="white"/>
				</svg>
				<svg class="brand-title" width="85" height="27" viewBox="0 0 85 27" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="svg-logo-title" d="M0.00600014 26V6.824C0.00600014 5.23733 0.312 4.01333 0.924 3.152C1.55867 2.268 2.34067 1.656 3.27 1.316C4.19933 0.953332 5.12867 0.771999 6.058 0.771999C6.806 0.771999 7.792 0.783332 9.016 0.805998C10.24 0.828666 11.566 0.873999 12.994 0.941998C14.422 1.01 15.782 1.12333 17.074 1.282V6.212H7.724C7.08933 6.212 6.62467 6.382 6.33 6.722C6.03533 7.062 5.888 7.45867 5.888 7.912V11.448L15.408 11.754V16.412L5.888 16.718V26H0.00600014ZM22.671 26.204C21.2657 26.204 20.1323 25.796 19.271 24.98C18.4097 24.1413 17.979 23.008 17.979 21.58V19.812C17.979 18.4293 18.4663 17.2847 19.441 16.378C20.4383 15.4713 21.991 15.018 24.099 15.018H28.247V14.134C28.247 13.6353 28.1563 13.2387 27.975 12.944C27.8163 12.6267 27.465 12.4 26.921 12.264C26.3997 12.1053 25.595 12.026 24.507 12.026H19.135V8.66C20.0417 8.34266 21.0957 8.07067 22.297 7.844C23.4983 7.61733 24.9717 7.49267 26.717 7.47C28.2357 7.47 29.5503 7.65133 30.661 8.014C31.7717 8.37667 32.6217 9.01133 33.211 9.918C33.823 10.802 34.129 12.0713 34.129 13.726V26H29.471L28.553 24.13C28.281 24.3793 27.873 24.674 27.329 25.014C26.785 25.3313 26.1163 25.6147 25.323 25.864C24.5297 26.0907 23.6457 26.204 22.671 26.204ZM25.697 22.158C25.9917 22.1807 26.3203 22.1467 26.683 22.056C27.0457 21.9653 27.3743 21.8747 27.669 21.784C27.9637 21.6707 28.1563 21.58 28.247 21.512V17.772L26.071 17.976C24.575 18.1347 23.827 18.7693 23.827 19.88V20.594C23.827 21.1833 23.997 21.5913 24.337 21.818C24.6997 22.0447 25.153 22.158 25.697 22.158ZM44.1848 26.204C43.3688 26.204 42.5188 26.17 41.6348 26.102C40.7508 26.034 39.9121 25.932 39.1188 25.796C38.3254 25.66 37.6568 25.4787 37.1128 25.252V21.818H45.4088C45.9754 21.818 46.3721 21.75 46.5988 21.614C46.8254 21.4553 46.9388 21.172 46.9388 20.764V20.254C46.9388 19.9367 46.8254 19.6873 46.5988 19.506C46.3948 19.302 45.9641 19.2 45.3068 19.2H42.3148C41.2948 19.2 40.3541 19.0413 39.4928 18.724C38.6541 18.4067 37.9854 17.874 37.4868 17.126C36.9881 16.378 36.7388 15.3693 36.7388 14.1V13.012C36.7388 11.8333 36.9654 10.836 37.4188 10.02C37.8721 9.204 38.6541 8.592 39.7648 8.184C40.8754 7.75333 42.4281 7.538 44.4228 7.538C45.2161 7.538 46.0434 7.58333 46.9048 7.674C47.7661 7.76467 48.5594 7.88933 49.2848 8.048C50.0328 8.184 50.6221 8.33133 51.0528 8.49V11.924H43.1988C42.7001 11.924 42.3261 12.0033 42.0768 12.162C41.8501 12.298 41.7368 12.5813 41.7368 13.012V13.488C41.7368 13.9187 41.8728 14.202 42.1448 14.338C42.4168 14.474 42.8701 14.542 43.5048 14.542H46.5308C48.4574 14.542 49.8288 14.984 50.6448 15.868C51.4834 16.7293 51.9028 17.9307 51.9028 19.472V21.206C51.9028 23.0647 51.2568 24.368 49.9648 25.116C48.6728 25.8413 46.7461 26.204 44.1848 26.204ZM61.9272 26C60.4538 26 59.2525 25.796 58.3232 25.388C57.4165 24.9573 56.7592 24.2547 56.3512 23.28C55.9658 22.3053 55.8072 20.9793 55.8752 19.302L56.0452 12.366H53.2232V8.626L56.2832 7.708L57.0312 2.574H61.6892V7.708H65.6672V12.366H61.6892V19.268C61.6892 20.0387 61.8252 20.5827 62.0972 20.9C62.3692 21.1947 62.7318 21.3647 63.1852 21.41L65.4972 21.648V26H61.9272ZM76.1896 26.17C74.0816 26.17 72.4043 25.8753 71.1576 25.286C69.911 24.674 69.0043 23.688 68.4376 22.328C67.8936 20.9453 67.6216 19.1093 67.6216 16.82C67.6216 14.3493 67.905 12.434 68.4716 11.074C69.0383 9.714 69.945 8.762 71.1916 8.218C72.4383 7.674 74.1043 7.402 76.1896 7.402C78.2976 7.402 79.975 7.68533 81.2216 8.252C82.4683 8.81867 83.375 9.782 83.9416 11.142C84.5083 12.502 84.7916 14.3947 84.7916 16.82C84.7916 19.1773 84.5196 21.0473 83.9756 22.43C83.4316 23.79 82.5363 24.7533 81.2896 25.32C80.043 25.8867 78.343 26.17 76.1896 26.17ZM76.1896 21.512C76.8696 21.512 77.4023 21.4213 77.7876 21.24C78.1956 21.036 78.479 20.6053 78.6376 19.948C78.819 19.268 78.9096 18.214 78.9096 16.786C78.9096 15.358 78.819 14.3153 78.6376 13.658C78.479 13.0007 78.1956 12.5813 77.7876 12.4C77.4023 12.196 76.8696 12.094 76.1896 12.094C75.5323 12.094 74.9996 12.196 74.5916 12.4C74.2063 12.5813 73.923 13.0007 73.7416 13.658C73.583 14.3153 73.5036 15.358 73.5036 16.786C73.5036 18.214 73.583 19.268 73.7416 19.948C73.923 20.6053 74.2063 21.036 74.5916 21.24C74.9996 21.4213 75.5323 21.512 76.1896 21.512Z" fill="#4B8067"/>
				</svg>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fas fa-user-circle text-primary me-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fas fa-users text-primary me-2"></i> Add to close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU</div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
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
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<div class="input-group search-area d-lg-inline-flex d-none">
									<div class="input-group-append">
										<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
									</div>
									<input type="text" class="form-control" placeholder="Search here...">
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="javascript:void(0)">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M2.23779 10.2492L4.66679 11.7064V8.30554L2.23779 10.2492Z" fill="#67636D"/>
										<path d="M1.1665 12.327V23.3334C1.16852 23.8531 1.28817 24.3656 1.5165 24.8325L9.20134 17.15L1.1665 12.327Z" fill="#67636D"/>
										<path d="M26.4832 24.8325C26.7115 24.3656 26.8311 23.8531 26.8332 23.3334V12.327L18.7983 17.15L26.4832 24.8325Z" fill="#67636D"/>
										<path d="M23.3335 8.30554V11.7064L25.7625 10.2492L23.3335 8.30554Z" fill="#67636D"/>
										<path d="M21.0492 13.0772C21.024 12.998 21.0076 12.9162 21.0002 12.8334V7.00004C21.0002 6.69062 20.8773 6.39388 20.6585 6.17508C20.4397 5.95629 20.1429 5.83337 19.8335 5.83337H8.16684C7.85742 5.83337 7.56067 5.95629 7.34188 6.17508C7.12309 6.39388 7.00017 6.69062 7.00017 7.00004V12.8334C6.99274 12.9162 6.97631 12.998 6.95117 13.0772L14.0002 17.3064L21.0492 13.0772Z" fill="#67636D"/>
										<path d="M17.3262 3.50003L14.7292 1.4222C14.5222 1.25653 14.2651 1.16626 14 1.16626C13.7349 1.16626 13.4777 1.25653 13.2708 1.4222L10.6738 3.50003H17.3262Z" fill="#67636D"/>
										<path d="M16.7358 18.3855L14.6008 19.6688C14.4194 19.7778 14.2117 19.8354 14 19.8354C13.7883 19.8354 13.5806 19.7778 13.3991 19.6688L11.2641 18.3855L3.16748 26.4833C3.63438 26.7117 4.14691 26.8313 4.66665 26.8333H23.3333C23.853 26.8313 24.3656 26.7117 24.8325 26.4833L16.7358 18.3855Z" fill="#67636D"/>
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">6</span>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M23.3333 19.8333H23.1187C23.2568 19.4597 23.3295 19.065 23.3333 18.6666V12.8333C23.3294 10.7663 22.6402 8.75902 21.3735 7.12565C20.1068 5.49228 18.3343 4.32508 16.3333 3.80679V3.49996C16.3333 2.88112 16.0875 2.28763 15.6499 1.85004C15.2123 1.41246 14.6188 1.16663 14 1.16663C13.3812 1.16663 12.7877 1.41246 12.3501 1.85004C11.9125 2.28763 11.6667 2.88112 11.6667 3.49996V3.80679C9.66574 4.32508 7.89317 5.49228 6.6265 7.12565C5.35983 8.75902 4.67058 10.7663 4.66667 12.8333V18.6666C4.67053 19.065 4.74316 19.4597 4.88133 19.8333H4.66667C4.35725 19.8333 4.0605 19.9562 3.84171 20.175C3.62292 20.3938 3.5 20.6905 3.5 21C3.5 21.3094 3.62292 21.6061 3.84171 21.8249C4.0605 22.0437 4.35725 22.1666 4.66667 22.1666H23.3333C23.6428 22.1666 23.9395 22.0437 24.1583 21.8249C24.3771 21.6061 24.5 21.3094 24.5 21C24.5 20.6905 24.3771 20.3938 24.1583 20.175C23.9395 19.9562 23.6428 19.8333 23.3333 19.8333Z" fill="#67636D"/>
										<path d="M9.98193 24.5C10.3863 25.2088 10.971 25.7981 11.6767 26.2079C12.3823 26.6178 13.1839 26.8337 13.9999 26.8337C14.816 26.8337 15.6175 26.6178 16.3232 26.2079C17.0289 25.7981 17.6136 25.2088 18.0179 24.5H9.98193Z" fill="#67636D"/>
									</svg>
									<span class="badge light text-white bg-primary rounded-circle">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="dlab_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <?=UserMenu()?>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<?php require($_PAGE['menu'])?>
				<div class="copyright">
					<p><strong>Fasto Saas Admin Dashboard</strong> © 2022 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by DexignZone</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<!-- Add Project -->
				<?php require($_PAGE['modal'])?>
				<div class="row">
					<div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
						<div class="card card-bd">
							<div class="bg-secondary card-border"></div>
							<div class="card-body box-style">
								<div class="media align-items-center">
									<div class="media-body me-3">
										<h2 class="num-text text-black font-w700">78</h2>
										<span class="fs-14">Total Project Handled</span>
									</div>
									<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M34.422 13.9831C34.3341 13.721 34.1756 13.4884 33.9638 13.3108C33.7521 13.1332 33.4954 13.0175 33.222 12.9766L23.649 11.5141L19.353 2.36408C19.2319 2.10638 19.0399 1.88849 18.7995 1.73587C18.5591 1.58325 18.2803 1.5022 17.9955 1.5022C17.7108 1.5022 17.4319 1.58325 17.1915 1.73587C16.9511 1.88849 16.7592 2.10638 16.638 2.36408L12.342 11.5141L2.76902 12.9766C2.49635 13.0181 2.24042 13.1341 2.02937 13.3117C1.81831 13.4892 1.6603 13.7215 1.57271 13.9831C1.48511 14.2446 1.47133 14.5253 1.53287 14.7941C1.59441 15.063 1.72889 15.3097 1.92152 15.5071L8.89802 22.6501L7.24802 32.7571C7.20299 33.0345 7.23679 33.3189 7.34555 33.578C7.45431 33.8371 7.63367 34.0605 7.86319 34.2226C8.09271 34.3847 8.36315 34.4791 8.64371 34.495C8.92426 34.5109 9.20365 34.4477 9.45002 34.3126L18 29.5906L26.55 34.3126C26.7964 34.4489 27.0761 34.5131 27.3573 34.4978C27.6384 34.4826 27.9096 34.3885 28.1398 34.2264C28.37 34.0643 28.5499 33.8406 28.659 33.5811C28.768 33.3215 28.8018 33.0365 28.7565 32.7586L27.1065 22.6516L34.0785 15.5071C34.2703 15.3091 34.4037 15.0622 34.4643 14.7933C34.5249 14.5245 34.5103 14.2441 34.422 13.9831Z" fill="#864AD1"/>
									</svg>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
						<div class="card card-bd">
						<div class="bg-warning card-border"></div>
							<div class="card-body box-style">
								<div class="media align-items-center">
									<div class="media-body me-3">
										<h2 class="num-text text-black font-w700">214</h2>
										<span class="fs-14">Contacts You Have</span>
									</div>
									<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M17.8935 22.5C23.6925 22.5 28.3935 17.799 28.3935 12C28.3935 6.20101 23.6925 1.5 17.8935 1.5C12.0945 1.5 7.39351 6.20101 7.39351 12C7.39351 17.799 12.0945 22.5 17.8935 22.5Z" fill="#FFB930"/>
										<path d="M29.5605 21.3344C29.217 20.9909 28.851 20.6699 28.476 20.3564C27.2159 21.96 25.6078 23.2562 23.7733 24.1472C21.9388 25.0382 19.9259 25.5007 17.8864 25.4996C15.847 25.4986 13.8345 25.0342 12.0009 24.1414C10.1673 23.2486 8.56051 21.9507 7.30199 20.3459C5.447 21.8906 3.95577 23.8256 2.9347 26.013C1.91364 28.2003 1.3879 30.586 1.39499 32.9999C1.39499 33.3978 1.55303 33.7793 1.83433 34.0606C2.11564 34.3419 2.49717 34.4999 2.89499 34.4999H32.895C33.2928 34.4999 33.6743 34.3419 33.9557 34.0606C34.237 33.7793 34.395 33.3978 34.395 32.9999C34.4004 30.8324 33.9759 28.6854 33.146 26.683C32.3162 24.6807 31.0975 22.8627 29.5605 21.3344Z" fill="#FFB930"/>
									</svg>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
						<div class="card card-bd">
						<div class="bg-primary card-border"></div>
							<div class="card-body box-style">
								<div class="media align-items-center">
									<div class="media-body me-3">
										<h2 class="num-text text-black font-w700">93</h2>
										<span class="fs-14">Total Unfinished Task</span>
									</div>
									<svg class="primary-icon" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.9999 1.5H5.99994C3.51466 1.5 1.49994 3.51472 1.49994 6V29.8125C1.49994 32.2977 3.51466 34.3125 5.99994 34.3125H11.9999C14.4852 34.3125 16.4999 32.2977 16.4999 29.8125V6C16.4999 3.51472 14.4852 1.5 11.9999 1.5Z" fill="#20F174"/>
										<path d="M30 1.5H24C21.5147 1.5 19.5 3.51472 19.5 6V12C19.5 14.4853 21.5147 16.5 24 16.5H30C32.4853 16.5 34.5 14.4853 34.5 12V6C34.5 3.51472 32.4853 1.5 30 1.5Z" fill="#20F174"/>
										<path d="M30 19.5H24C21.5147 19.5 19.5 21.5147 19.5 24V30C19.5 32.4853 21.5147 34.5 24 34.5H30C32.4853 34.5 34.5 32.4853 34.5 30V24C34.5 21.5147 32.4853 19.5 30 19.5Z" fill="#20F174"/>
									</svg>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
						<div class="card card-bd">
							<div class="bg-info card-border"></div>
							<div class="card-body box-style">
								<div class="media align-items-center">
									<div class="media-body me-3">
										<h2 class="num-text text-black font-w700">12</h2>
										<span class="fs-14">Unread Messages</span>
									</div>
									<svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M34.4999 1.91663H11.4999C8.95917 1.91967 6.52338 2.93032 4.72682 4.72688C2.93026 6.52345 1.91961 8.95924 1.91656 11.5V26.8333C1.91935 29.0417 2.6834 31.1816 4.07994 32.8924C5.47648 34.6031 7.42011 35.7801 9.58323 36.225V42.1666C9.58318 42.5136 9.67733 42.8541 9.85564 43.1518C10.0339 43.4495 10.2897 43.6932 10.5957 43.8569C10.9016 44.0206 11.2463 44.0982 11.5929 44.0813C11.9395 44.0645 12.275 43.9539 12.5636 43.7613L23.5749 36.4166H34.4999C37.0406 36.4136 39.4764 35.4029 41.273 33.6064C43.0695 31.8098 44.0802 29.374 44.0832 26.8333V11.5C44.0802 8.95924 43.0695 6.52345 41.273 4.72688C39.4764 2.93032 37.0406 1.91967 34.4999 1.91663ZM30.6666 24.9166H15.3332C14.8249 24.9166 14.3374 24.7147 13.9779 24.3552C13.6185 23.9958 13.4166 23.5083 13.4166 23C13.4166 22.4916 13.6185 22.0041 13.9779 21.6447C14.3374 21.2852 14.8249 21.0833 15.3332 21.0833H30.6666C31.1749 21.0833 31.6624 21.2852 32.0219 21.6447C32.3813 22.0041 32.5832 22.4916 32.5832 23C32.5832 23.5083 32.3813 23.9958 32.0219 24.3552C31.6624 24.7147 31.1749 24.9166 30.6666 24.9166ZM34.4999 17.25H11.4999C10.9916 17.25 10.5041 17.048 10.1446 16.6886C9.78517 16.3291 9.58323 15.8416 9.58323 15.3333C9.58323 14.825 9.78517 14.3374 10.1446 13.978C10.5041 13.6186 10.9916 13.4166 11.4999 13.4166H34.4999C35.0082 13.4166 35.4957 13.6186 35.8552 13.978C36.2146 14.3374 36.4166 14.825 36.4166 15.3333C36.4166 15.8416 36.2146 16.3291 35.8552 16.6886C35.4957 17.048 35.0082 17.25 34.4999 17.25Z" fill="#3ECDFF"/>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6 col-xxl-12">
						<div class="card">
							<div class="card-header d-block border-0 pb-0">
								<div class="d-flex justify-content-between pb-3">
									<h4 class="mb-0 text-black fs-20">Project Created</h4>
									<div class="dropdown">
										<a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-left">
											<a class="dropdown-item" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center">
									<span class="fs-36 text-black font-w600 me-4">25%</span>
									<div>
										<svg class="me-2" width="27" height="14" viewBox="0 0 27 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 13.435L13.435 0L26.8701 13.435H0Z" fill="#2FCA51"></path>
										</svg>
										<span>last month $563,443</span>
									</div>
								</div>
							</div>
							<div class="card-body pb-0 px-2 pt-2">
								<div id="chartTimeline" class="timeline-chart"></div>
							</div>
						</div>		
					</div>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card">	
							<div class="card-header border-0 pb-0">
								<h4 class="fs-20 mb-0 text-black">New Clients</h4>
								<div class="dropdown">
									<a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</a>
									<div class="dropdown-menu dropdown-menu-left">
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body text-center pb-0 px-2 pt-2">
								<div id="widgetChart1" class="widgetChart1 dashboard-chart"></div>
							</div>
						</div>
					</div>		
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card">	
							<div class="card-header border-0 pb-0">
								<h4 class="fs-20 mb-0 text-black">Monthly Target</h4>
								<div class="dropdown">
									<a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</a>
									<div class="dropdown-menu dropdown-menu-left">
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body text-center pt-0">
								<div id="radialChart" class="monthly-project-chart"></div>
								<span class="fs-14 text-black d-block op5">100 Projects/ monthy</span>
							</div>
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-xl-6 col-xxl-12">
						<div class="row">
							<div class="col-sm-6">
								<div class="card">	
									<div class="card-header border-0">
										<h4 class="fs-16 text-black font-w500">Project Released</h4>
										<div class="d-flex align-items-center">
											<svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M1.90735e-06 0.499999L7 7.5L14 0.5" fill="#FF6746"/>
											</svg>
											<span class="fs-28 font-w600 ms-2 text-black">4%</span>
										</div>
									</div>
									<div class="card-body text-center pb-0 p-0">
										<div id="widgetChart2" class="dashboard-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card">
									<div class="card-body text-center d-flex align-items-center justify-content-between">
										<div class="d-inline-block position-relative donut-chart-sale">
											<span class="donut1" data-peity='{ "fill": ["rgb(67, 220, 128, 1)", "rgba(241, 241, 241,1)"],   "innerRadius": 33, "radius": 10}'>3/8</span>
											<small class="text-primary">29%</small>
										</div>
										<div>
											<h2 class="fs-28 font-w600 mb-0 text-end text-black">567</h2>
											<p class="mb-0 fs-14 font-w400 text-black">Contacts Added</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card message-bx">
									<div class="card-header border-0 d-sm-flex d-block pb-0">
										<div>
											<h4 class="fs-20 mb-0  text-black mb-sm-0 mb-2">Recent Messages</h4>
										</div>
										<a href="contacts.html" class="btn btn-primary shadow-primary btn-rounded text-white">+ New Message</a>
									</div>
									<div class="card-body">
										<div class="media mb-3 pb-3 border-bottom">
											<div class="image-bx me-sm-4 me-2">
												<img src="images/profile/Untitled-1.jpg" alt="" class="rounded-circle img-1">
												<span class="active"></span>
											</div>
											<div class="media-body d-sm-flex justify-content-between d-block align-items-center">
												<div class="me-sm-3 me-0">
													<h6 class="fs-16 font-w600 mb-sm-2 mb-0"><a href="messages.html" class="text-black">Laura Chyan</a></h6>
													<p class="text-black mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
													<span class="fs-14">5m ago</span>
												</div>
											</div>
										</div>
										<div class="media mb-3 pb-3 border-bottom">
											<div class="image-bx me-sm-4 me-2">
												<img src="images/profile/Untitled-2.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="media-body d-sm-flex justify-content-between d-block align-items-center">
												<div class="me-sm-3 me-0">
													<h6 class="fs-16 font-w600 mb-sm-2 mb-0"><a href="messages.html" class="text-black">Olivia Rellaq</a></h6>
													<p class="text-black mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
													<span class="fs-14">41m ago</span>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="image-bx me-sm-4 me-2">
												<img src="images/profile/Untitled-3.jpg" alt="" class="rounded-circle img-1">
												<span class="active"></span>
											</div>
											<div class="media-body d-sm-flex justify-content-between d-block align-items-center">
												<div class="me-sm-3 me-0">
													<h6 class="fs-16 font-w600 mb-sm-2 mb-0"><a href="messages.html" class="text-black">Keanu Tipes</a></h6>
													<p class="text-black mb-1">Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum...</p>
													<span class="fs-14">25m ago</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-12">
						<div class="row">
							<div class="col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="me-2">
											<h4 class="fs-20 mb-0 font-w500 text-black">Upcoming Projects</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="border-bottom up-project-bx pb-4 mb-4">
											<span class="fs-16 text-primary mb-2 d-block sub-title font-w500">Yoast Esac</span>
											<div class="d-flex">
												<p class="font-w500 me-auto mb-2 title fs-20"><a href="post-details.html" class="text-black">Redesign Kripton Mobile App</a></p>
												<div class="dropdown mb-3">
													<a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
													</a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
											<div class="mb-3"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
											<div class="media align-items-center">
												<div class="power-ic me-3">
													<i class="fa fa-bolt" aria-hidden="true"></i>
												</div>
												<div class="media-body">
													<p class="mb-1">Deadline</p>
													<span class="text-black font-w600">Tuesday,  Sep 29th 2020</span>
												</div>
											</div>
										</div>
										<div class="border-bottom up-project-bx pb-4 mb-4">
											<span class="fs-16 text-primary mb-2 d-block sub-title font-w500">Yoast Esac</span>
											<div class="d-flex">
												<p class="font-w500 me-auto title mb-2 fs-20"><a href="post-details.html" class="text-black">Build Branding Persona for Etza.id</a></p>
												<div class="dropdown mb-3">
													<a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
													</a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
											<div class="mb-3"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
											<div class="media align-items-center">
												<div class="power-ic me-3">
													<i class="fa fa-bolt" aria-hidden="true"></i>
												</div>
												<div class="media-body">
													<p class="mb-1">Deadline</p>
													<span class="text-black font-w600">Tuesday,  Sep 29th 2020</span>
												</div>
											</div>
										</div>
										<div class="up-project-bx">
											<span class="fs-16 text-primary sub-title mb-2 d-block font-w500">Yoast Esac</span>
											<div class="d-flex">
												<p class="font-w500 me-auto title mb-2 fs-20"><a href="post-details.html" class="text-black">Manage SEO for Eclan Company Profile</a></p>
												<div class="dropdown mb-3">
													<a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 	6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
													</a>
													<div class="dropdown-menu dropdown-menu-left">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
											<div class="mb-3"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
											<div class="media align-items-center">
												<div class="power-ic me-3">
													<i class="fa fa-bolt" aria-hidden="true"></i>
												</div>
												<div class="media-body">
													<p class="mb-1">Deadline</p>
													<span class="text-black font-w600">Tuesday,  Sep 29th 2020</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card kanbanPreview-bx">
									<div class="card-body">
										<div class="sub-card bg-secondary d-flex text-white">
											<div class="me-auto pe-2">
												<h4 class="fs-20 mb-0 font-w600 text-white">Quick To-Do List</h4>
												<span class="fs-14 op6 font-w200">Lorem ipsum dolor sit amet</span>
											</div>
											<a href="contacts.html" class="plus-icon"><i class="fa fa-plus" aria-hidden="true"></i></a>
										</div>
										<div class="sub-card">
											<span class="text-warning sub-title fs-14">Graphic Deisgner</span>
											<p class="font-w500"><a href="post-details.html" class="text-black">Visual Graphic for Presentation to Client</a></p>
											<div class="row justify-content-between align-items-center">
												<div class="col-6">
													<span>Aug 4, 2021</span>
												</div>
												<ul class="users col-6">
													<li><img src="images/profile/Untitled-4.jpg" alt=""></li>
													<li><img src="images/profile/Untitled-5.jpg" alt=""></li>
													<li><img src="images/profile/Untitled-5.jpg" alt=""></li>
													<li><img src="images/profile/Untitled-7.jpg" alt=""></li>
												</ul>
												
											</div>
										</div>
										<div class="sub-card">
											<span class="text-primary sub-title fs-14">Database Engineer</span>
											<p class="font-w500"><a href="post-details.html" class="text-black">Build Database Design for Fasto Admin v2</a></p>
											<div class="row justify-content-between align-items-center">
												<div class="col-6">
													<span>Aug 4, 2021</span>
												</div>
												<ul class="users col-6">
													<li><img src="images/profile/Untitled-4.jpg" alt=""></li>
													<li><img src="images/profile/Untitled-5.jpg" alt=""></li>
													<li><img src="images/profile/Untitled-6.jpg" alt=""></li>
												</ul>
											</div>
										</div>
										<div class="sub-card">
											<span class="text-secondary sub-title fs-14">Digital Marketing</span>
											<p class="font-w500"><a href="post-details.html" class="text-black">Make Promotional Ads for Instagram Fasto’s</a></p>
											<div class="row justify-content-between align-items-center mb-4">
												<div class="col-6">
													<span>Aug 4, 2021</span>
												</div>
												<ul class="users col-6">
													<li><img src="images/profile/Untitled-4.jpg" alt=""></li>
													<li><img src="images/profile/Untitled-5.jpg" alt=""></li>
													<li><img src="images/profile/Untitled-6.jpg" alt=""></li>
												</ul>
											</div>
											<span><i class="far fa-comment me-2"></i>2 Comment</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                 <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
	
</body>

</html>