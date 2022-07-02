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
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
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
                                Datatable
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
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="images/profile/pic1.jpg" width="20" alt=""/>
									<div class="header-info">
										<span>Johndoe</span>
										<small>Super Admin</small>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ms-2">Inbox </span>
                                    </a>
                                    <a href="page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
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
				<a class="add-project-sidebar" href="javascript:void(0)"  data-bs-toggle="modal" data-bs-target="#addProjectSidebar" >+ New Project</a>
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-layout"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="index.html">Dashboard Light</a></li>
							<li><a href="index-2.html">Dashboard Dark</a></li>
							<li><a href="projects.html">Project</a></li>
							<li><a href="contacts.html">Contact</a></li>
							<li><a href="kanban.html">Kanban</a></li>
							<li><a href="calendar.html">Calendar</a></li>
							<li><a href="messages.html">Messages</a></li>
						</ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-monitor"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="app-profile.html">Profile</a></li>
							<li><a href="post-details.html">Post Details</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="email-compose.html">Compose</a></li>
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="app-calender.html">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="ecom-product-grid.html">Product Grid</a></li>
									<li><a href="ecom-product-list.html">Product List</a></li>
									<li><a href="ecom-product-detail.html">Product Details</a></li>
									<li><a href="ecom-product-order.html">Order</a></li>
									<li><a href="ecom-checkout.html">Checkout</a></li>
									<li><a href="ecom-invoice.html">Invoice</a></li>
									<li><a href="ecom-customers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-bar-chart-1"></i>
							<span class="nav-text">Charts</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="chart-flot.html">Flot</a></li>
                            <li><a href="chart-morris.html">Morris</a></li>
                            <li><a href="chart-chartjs.html">Chartjs</a></li>
                            <li><a href="chart-chartist.html">Chartist</a></li>
                            <li><a href="chart-sparkline.html">Sparkline</a></li>
                            <li><a href="chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-web"></i>
							<span class="nav-text">Bootstrap</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="ui-accordion.html">Accordion</a></li>
                            <li><a href="ui-alert.html">Alert</a></li>
                            <li><a href="ui-badge.html">Badge</a></li>
                            <li><a href="ui-button.html">Button</a></li>
                            <li><a href="ui-modal.html">Modal</a></li>
                            <li><a href="ui-button-group.html">Button Group</a></li>
                            <li><a href="ui-list-group.html">List Group</a></li>
                            <li><a href="ui-media-object.html">Media Object</a></li>
                            <li><a href="ui-card.html">Cards</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-dropdown.html">Dropdown</a></li>
                            <li><a href="ui-popover.html">Popover</a></li>
                            <li><a href="ui-progressbar.html">Progressbar</a></li>
                            <li><a href="ui-tab.html">Tab</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-pagination.html">Pagination</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-plugin"></i>
							<span class="nav-text">Plugins</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="uc-select2.html">Select 2</a></li>
                            <li><a href="uc-nestable.html">Nestedable</a></li>
                            <li><a href="uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="uc-toastr.html">Toastr</a></li>
                            <li><a href="map-jqvmap.html">Jqv Map</a></li>
							<li><a href="uc-lightgallery.html">Light Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
							<i class="flaticon-admin"></i>
							<span class="nav-text">Widget</span>
						</a>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-contract"></i>
							<span class="nav-text">Forms</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="form-element.html">Form Elements</a></li>
                            <li><a href="form-wizard.html">Wizard</a></li>
                            <li><a href="ckeditor.html">CkEditor</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-table"></i>
							<span class="nav-text">Table</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-newsletter"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.html">Error 400</a></li>
                                    <li><a href="page-error-403.html">Error 403</a></li>
                                    <li><a href="page-error-404.html">Error 404</a></li>
                                    <li><a href="page-error-500.html">Error 500</a></li>
                                    <li><a href="page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>
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
				<div class="modal fade" id="addProjectSidebar">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create Project</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Project Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
												<label class="text-black font-w500">Dadeline</label>
												<div class="cal-icon"><input type="date" class="form-control"><i class="far fa-calendar-alt"></i></div>
											</div>
									<div class="form-group">
										<label class="text-black font-w500">Client Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">CREATE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span>Datatable</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Profile Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Gender</th>
                                                <th>Education</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Joining Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                                <td>Tiger Nixon</td>
                                                <td>Architect</td>
                                                <td>Male</td>
                                                <td>M.COM., P.H.D.</td>
                                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="87eee9e1e8c7e2ffe6eaf7ebe2a9e4e8ea">[email&#160;protected]</span></strong></a></td>
                                                <td>2011/04/25</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>												
												</td>												
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Female</td>
                                                <td>M.COM., P.H.D.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="8ce5e2eae3cce9f4ede1fce0e9a2efe3e1">[email&#160;protected]</span></strong></a></td>
                                                <td>2011/07/25</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical</td>
                                                <td>Male</td>
                                                <td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="7c15121a133c19041d110c1019521f1311">[email&#160;protected]</span></strong></a></td>
                                                <td>2009/01/12</td>
												<td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                                                <td>Cedric Kelly</td>
                                                <td>Developer</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="365f58505976534e575b465a531855595b">[email&#160;protected]</span></strong></a></td>
                                                <td>2012/03/29</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="0e676068614e6b766f637e626b206d6163">[email&#160;protected]</span></strong></a></td>
                                                <td>2008/11/28</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                                                <td>Brielle Williamson</td>
                                                <td>Specialist</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="1f767179705f7a677e726f737a317c7072">[email&#160;protected]</span></strong></a></td>
                                                <td>2012/12/02</td>
												<td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="01686f676e416479606c716d642f626e6c">[email&#160;protected]</span></strong></a></td>
                                                <td>2012/08/06</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                                                <td>Rhona Davidson</td>
                                                <td>Integration</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="b7ded9d1d8f7d2cfd6dac7dbd299d4d8da">[email&#160;protected]</span></strong></a></td>
                                                <td>2010/10/14</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="91f8fff7fed1f4e9f0fce1fdf4bff2fefc">[email&#160;protected]</span></strong></a></td>
                                                <td>2009/09/15</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="3d54535b527d58455c504d5158135e5250">[email&#160;protected]</span></strong></a></td>
                                                <td>2008/12/13</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>Female</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="b8d1d6ded7f8ddc0d9d5c8d4dd96dbd7d5">[email&#160;protected]</span></strong></a></td>
                                                <td>2008/12/19</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="751c1b131a35100d14180519105b161a18">[email&#160;protected]</span></strong></a></td>
                                                <td>2013/03/03</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="eb82858d84ab8e938a869b878ec5888486">[email&#160;protected]</span></strong></a></td>
                                                <td>2008/10/16</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="d0b9beb6bf90b5a8b1bda0bcb5feb3bfbd">[email&#160;protected]</span></strong></a></td>
                                                <td>2012/12/18</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="88e1e6eee7c8edf0e9e5f8e4eda6ebe7e5">[email&#160;protected]</span></strong></a></td>
                                                <td>2010/03/17</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="224b4c444d62475a434f524e470c414d4f">[email&#160;protected]</span></strong></a></td>
												<td>2012/11/27</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                                                <td>Paul Byrd</td>
                                                <td>Financial Officer</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="9bf2f5fdf4dbfee3faf6ebf7feb5f8f4f6">[email&#160;protected]</span></strong></a></td>
                                                <td>2010/06/09</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="82ebece4edc2e7fae3eff2eee7ace1edef">[email&#160;protected]</span></strong></a></td>
                                                <td>2009/04/10</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="31585f575e715449505c415d541f525e5c">[email&#160;protected]</span></strong></a></td>
                                                <td>2012/10/13</td>
												<td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="076e69616847627f666a776b622964686a">[email&#160;protected]</span></strong></a></td>
                                                <td>2012/09/26</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="0a63646c654a6f726b677a666f24696567">[email&#160;protected]</span></strong></a></td>
                                                <td>2011/09/03</td>
												<td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                                <td>Yuri Berry</td>
                                                <td>Marketing Officer</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="98f1f6fef7d8fde0f9f5e8f4fdb6fbf7f5">[email&#160;protected]</span></strong></a></td>
                                                <td>2009/06/25</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>Male</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="137a7d757c53766b727e637f763d707c7e">[email&#160;protected]</span></strong></a></td>
                                                <td>2011/12/12</td>
												<td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Female</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="5a33343c351a3f223b372a363f74393537">[email&#160;protected]</span></strong></a></td>
                                                <td>2010/09/20</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                                <td>Angelica Ramos</td>
                                                <td>Executive Officer</td>
                                                <td>Male</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="3a53545c557a5f425b574a565f14595557">[email&#160;protected]</span></strong></a></td>
                                                <td>2009/10/09</td>
												<td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Female</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="5930373f36193c21383429353c773a3634">[email&#160;protected]</span></strong></a></td>
                                                <td>2010/12/22</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Male</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="51383f373e113429303c213d347f323e3c">[email&#160;protected]</span></strong></a></td>
                                                <td>2010/11/14</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>Female</td>
												<td>B.TACH, M.TACH</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="026b6c646d42677a636f726e672c616d6f">[email&#160;protected]</span></strong></a></td>
                                                <td>2011/06/07</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                                                <td>Fiona Green</td>
                                                <td>Operating Officer</td>
                                                <td>Male</td>
												<td>B.A, B.C.A</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="a5cccbc3cae5c0ddc4c8d5c9c08bc6cac8">[email&#160;protected]</span></strong></a></td>
                                                <td>2010/03/11</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Female</td>
												<td>B.COM., M.COM.</td>
                                                <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
												<td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="026b6c646d42677a636f726e672c616d6f">[email&#160;protected]</span></strong></a></td>
                                                <td>2011/08/14</td>
                                                <td>
													<div class="d-flex">
														<a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Fees Collection</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Roll No</th>
                                                <th>Student Name</th>
                                                <th>Invoice number</th>
                                                <th>Fees Type </th>
												<th>Payment Type </th>
												<th>Status </th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Tiger Nixon</td>
                                                <td>#54605</td>
                                                <td>Library</td>
                                                <td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2011/04/25</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>02</td>
                                                <td>Garrett Winters</td>
                                                <td>#54687</td>
                                                <td>Library</td>
                                                <td>Credit Card</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
												<td>2011/07/25</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>03</td>
                                                <td>Ashton Cox</td>
                                                <td>#35672</td>
                                                <td>Tuition</td>
                                                <td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2009/01/12</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>04</td>
                                                <td>Cedric Kelly</td>
                                                <td>#57984</td>
                                                <td>Annual</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2012/03/29</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>05</td>
                                                <td>Airi Satou</td>
                                                <td>#12453</td>
                                                <td>Library</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2008/11/28</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>06</td>
                                                <td>Brielle Williamson</td>
                                                <td>#59723</td>
                                                <td>Tuition</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2012/12/02</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>07</td>
                                                <td>Herrod Chandler</td>
                                                <td>#98726</td>
                                                <td>Tuition</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2012/08/06</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>08</td>
                                                <td>Rhona Davidson</td>
                                                <td>#98721</td>
                                                <td>Library</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2010/10/14</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>09</td>
                                                <td>Colleen Hurst</td>
                                                <td>#54605</td>
                                                <td>Annual</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2009/09/15</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>10</td>
                                                <td>Sonya Frost</td>
                                                <td>#98734</td>
                                                <td>Tuition</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2008/12/13</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>11</td>
                                                <td>Jena Gaines</td>
                                                <td>#12457</td>
                                                <td>Tuition</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2008/12/19</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>12</td>
                                                <td>Quinn Flynn</td>
                                                <td>#36987</td>
                                                <td>Library</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2013/03/03</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>13</td>
                                                <td>Charde Marshall</td>
                                                <td>#98756</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2008/10/16</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>14</td>
                                                <td>Haley Kennedy</td>
                                                <td>#98754</td>
                                                <td>Library</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2012/12/18</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>15</td>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>#65248</td>
                                                <td>Annual</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2010/03/17</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>16</td>
                                                <td>Michael Silva</td>
                                                <td>#75943</td>
                                                <td>Tuition</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
												<td>2012/11/27</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>17</td>
                                                <td>Paul Byrd</td>
                                                <td>#87954</td>
                                                <td>Library</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2010/06/09</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>18</td>
                                                <td>Gloria Little</td>
                                                <td>#98746</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2009/04/10</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>19</td>
                                                <td>Bradley Greer</td>
                                                <td>#98674</td>
                                                <td>Annual</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2012/10/13</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>20</td>
                                                <td>Dai Rios</td>
                                                <td>#69875</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2012/09/26</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>21</td>
                                                <td>Jenette Caldwell</td>
                                                <td>#54678</td>
                                                <td>Library</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2011/09/03</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>22</td>
                                                <td>Yuri Berry</td>
                                                <td>#98756</td>
                                                <td>Tuition</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2009/06/25</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>23</td>
                                                <td>Caesar Vance</td>
                                                <td>#86754</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2011/12/12</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>24</td>
                                                <td>Doris Wilder</td>
                                                <td>#34251</td>
                                                <td>Annual</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2010/09/20</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>25</td>
                                                <td>Angelica Ramos</td>
                                                <td>#65874</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2009/10/09</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>26</td>
                                                <td>Gavin Joyce</td>
                                                <td>#54605</td>
                                                <td>Female</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2010/12/22</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>27</td>
                                                <td>Jennifer Chang</td>
                                                <td>#54605</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2010/11/14</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>28</td>
                                                <td>Brenden Wagner</td>
                                                <td>#45687</td>
                                                <td>Library</td>
												<td>Cheque</td>
												<td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2011/06/07</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>29</td>
                                                <td>Fiona Green</td>
                                                <td>#23456</td>
                                                <td>Tuition</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2010/03/11</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>30</td>
                                                <td>Shou Itou</td>
                                                <td>#54605</td>
                                                <td>Annual</td>
												<td>Credit Card</td>
												<td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2011/08/14</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Patient</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="checkAll" required="">
														<label class="form-check-label" for="checkAll"></label>
													</div>
												</th>
                                                <th>Patient ID</th>
                                                <th>Date Check in</th>
                                                <th>Patient Name</th>
                                                <th>Doctor Assgined</th>
                                                <th>Disease</th>
                                                <th>Status</th>
                                                <th>Room no</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="form-check-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>26/02/2020, 12:42 AM</td>
                                                <td>Tiger Nixon</td>
                                                <td>Dr. Cedric</td>
                                                <td>Cold & Flu</td>
												<td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-001</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>												
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
														<label class="form-check-label" for="customCheckBox3"></label>
													</div>
												</td>
                                                <td>#P-00002</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Garrett Winters</td>
                                                <td>Dr. Cedric</td>
												<td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-002</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
														<label class="form-check-label" for="customCheckBox4"></label>
													</div>
												</td>
                                                <td>#P-00003</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Rhona</td>
												<td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-success">
														<i class="fa fa-circle text-success me-1"></i>
														Recovered
													</span>
												</td>
                                                <td>AB-003</td>
												<td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox5" required="">
														<label class="form-check-label" for="customCheckBox5"></label>
													</div>
												</td>
                                                <td>#P-00004</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Cedric</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-004</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox6" required="">
														<label class="form-check-label" for="customCheckBox6"></label>
													</div>
												</td>
                                                <td>#P-00005</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Cedric</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-005</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox7" required="">
														<label class="form-check-label" for="customCheckBox7"></label>
													</div>
												</td>
                                                <td>#P-00006</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Rhona</td>
                                                <td>Sleep Problem</td>
												<td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-006</td>
												<td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox8" required="">
														<label class="form-check-label" for="customCheckBox8"></label>
													</div>
												</td>
                                                <td>#P-00007</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-007</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox9" required="">
														<label class="form-check-label" for="customCheckBox9"></label>
													</div>
												</td>
                                                <td>#P-00008</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Garrett </td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-008</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox10" required="">
														<label class="form-check-label" for="customCheckBox10"></label>
													</div>
												</td>
                                                <td>#P-00009</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-009</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox11" required="">
														<label class="form-check-label" for="customCheckBox11"></label>
													</div>
												</td>
                                                <td>#P-00010</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-010</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox12" required="">
														<label class="form-check-label" for="customCheckBox12"></label>
													</div>
												</td>
                                                <td>#P-00011</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
												<td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-011</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox13" required="">
														<label class="form-check-label" for="customCheckBox13"></label>
													</div>
												</td>
                                                <td>#P-00012</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-012</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox14" required="">
														<label class="form-check-label" for="customCheckBox14"></label>
													</div>
												</td>
                                                <td>#P-00013</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
												<td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-013</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox15" required="">
														<label class="form-check-label" for="customCheckBox15"></label>
													</div>
												</td>
                                                <td>#P-00014</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-014</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox16" required="">
														<label class="form-check-label" for="customCheckBox16"></label>
													</div>
												</td>
                                                <td>#P-00015</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
												<td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-015</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox17" required="">
														<label class="form-check-label" for="customCheckBox17"></label>
													</div>
												</td>
                                                <td>#P-00016</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
												<td>Sleep Problem</td>
												<td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-016</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox18" required="">
														<label class="form-check-label" for="customCheckBox18"></label>
													</div>
												</td>
                                                <td>#P-00017</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
												<td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-017</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox19" required="">
														<label class="form-check-label" for="customCheckBox19"></label>
													</div>
												</td>
                                                <td>#P-00018</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-018</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox20" required="">
														<label class="form-check-label" for="customCheckBox20"></label>
													</div>
												</td>
                                                <td>#P-00019</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Cold & Flu</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger me-1"></i>
														New Patient
													</span>
												</td>
                                                <td>AB-019</td>
												<td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox21" required="">
														<label class="form-check-label" for="customCheckBox21"></label>
													</div>
												</td>
                                                <td>#P-00020</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Sleep Problem</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning me-1"></i>
														In Treatment
													</span>
												</td>
                                                <td>AB-020</td>
                                                <td>
													<div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Accept Patient</a>
															<a class="dropdown-item" href="javascript:void(0);">Reject Order</a>
															<a class="dropdown-item" href="javascript:void(0);">View Details</a>
														</div>
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
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>

</html>