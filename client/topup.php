<div class="row">
    <div class="col-xl-4 col-xxl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Purchase SMS</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Ref ID#</label>
                            <div class="col-sm-9">
                                <input type="text" name="ref" value="<?=$ref?>" readonly class="form-control"
                                    placeholder="0">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Currency</label>
                            <div class="col-sm-9">
                                <input type="text" name="currency" readonly class="form-control" placeholder="GHS">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Amount</label>
                            <div class="col-sm-9">
                                <input type="text" name="amount" required class="form-control" placeholder="0.00">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" value="make-payment" class="btn btn-primary">Proceed</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-xxl-6 col-lg-6">
        <div class="card">
            <div class="card-header border-0 pb-0">
                <h4 class="card-title">Orders</h4>
            </div>
            <div class="card-body">
                <div id="DZ_W_TimeLine111" class="widget-timeline dz-scroll style-1 height370">
                    <ul class="timeline">
                        <?=ClientOrderLog($orders)?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>