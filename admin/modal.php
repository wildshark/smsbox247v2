<div class="modal fade" id="QuickTopUpAccount">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">TopUp Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <label class="text-black font-w500">AccountID /Email or Mobile</label>
                        <input type="text" name="account" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Details</label>
                        <input type="text" name="details" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Amount</label>
                        <input type="text" name="amount" class="form-control" placeholder="0.00">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" value="quick-topup-account" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="TopUpAccount">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">TopUp Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <label class="text-black font-w500">Details</label>
                        <input type="text" name="details" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Amount</label>
                        <input type="text" name="amount" class="form-control" placeholder="0.00">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" value="topup-account" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="CreateAccount">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="hidden" name="account-type" value="<?=$_SESSION['ui']?>" class="form-control" required>
                    <div class="form-group">
                        <label class="text-black font-w500">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Password</label>
                        <input type="text" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Email</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Mobile</label>
                        <input type="text" name="mobile" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" value="create-user-account" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>