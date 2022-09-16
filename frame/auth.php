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
    <meta property="og:image" content="page-error-404.html" />
    <meta name="format-detection" content="telephone=no">
    <title><?=$_portal->company?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
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
                                        <img src="images/logo-full.png" alt="">
                                    </div>
                                    <h4 class="text-center mb-4">Account Locked</h4>
                                    <p class="text-center"> Please enter the OTP sent to your email address or phone number </p>
                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                    <div class="form-group">
                                        <label><strong>Enter OTP Code</strong></label>
                                        <input type="text" name="auth-code" class="form-control" value="">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="submit" value="auth"
                                            class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- Custom script -->
    <script src="vendor/deznav/deznav.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <!--script src="js/styleSwitcher.js"></script-->
</body>

</html>