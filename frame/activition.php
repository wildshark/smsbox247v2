<!DOCTYPE html>
<html lang="en" class="h-100">

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
    <title>BernsergSolutionsSMS</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<img src="images/logo2.png" alt="">
									</div>
                                    <h4 class="text-center mb-4">Activition</h4>
                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Client Name</strong></label>
                                            <input type="text" name="name" class="form-control" placeholder="username">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Mobile</strong></label>
                                            <input type="text" name="mobile" class="form-control" placeholder="2335520000001">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Activtion Key</strong></label>
                                            <input type="text" name="key" class="form-control" value="<?=$uid?>">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" name="submit" value="activition" class="btn btn-primary btn-block">Proceed</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="?page=login">Sign in</a></p>
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
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/deznav-init.js"></script>
<script src="js/demo.js"></script>
<!--script src="js/styleSwitcher.js"></script-->
</body>

</html>