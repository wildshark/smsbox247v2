<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Account <?=$profile['account'];?></h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="index.php">
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label class="form-label">First Name</label>
                                <input type="text" value="<?=$profile['full_name']?>" class="form-control" placeholder="1234 Main St">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Mobile</label>
                                <input type="email" value="<?=$profile['mobile']?>" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" value="<?=$profile['email']?>" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label>City</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label">State</label>
                                <select id="inputState" class="default-select form-control wide">
                                    <option selected>Choose...</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="form-label">Zip</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">User</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="index.php">
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
                        <button type="submit" name="submit" value="change-password" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>