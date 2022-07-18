<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Account ID <?=$profile['account'];?></h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="full_name" value="<?=$profile['full_name']?>" class="form-control" placeholder="Enter Full Name">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Company Name</label>
                                <input type="text" name="company" value="<?=$profile['company']?>" class="form-control" placeholder="Company">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Mobile</label>
                                <input type="text" name="mobile" value="<?=$profile['mobile']?>" class="form-control" placeholder="Mobile">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" value="<?=$profile['email']?>" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-6 col-md-12">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" value="<?=$profile['address']?>" class="form-control" placeholder="Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                    <label class="form-label">Country</label>
                                    <input type="text" name="country" value="<?=$profile['country']?>" class="form-control">
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">City/State</label>
                                    <input type="text" name="city" value="<?=$profile['city']?>" class="form-control">
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Zip</label>
                                    <input type="text" name="zip" value="<?=$profile['zip']?>" class="form-control">
                                </div>
                            </div>
                        </div>    
                        <button type="submit" name="submit" value="<?=$btn['action']?>" class="btn btn-primary"><?=$btn['caption']?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Login Details</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" readonly value="<?=$profile['username']?>" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" value="<?=$profile['passwd']?>" class="form-control" placeholder="Email">
                            </div>
                        </div>                             
                        <button type="submit" name="submit" value="<?=$btn2['action']?>" class="btn btn-primary"><?=$btn2['caption']?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>