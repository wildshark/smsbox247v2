<div class="row">
    <div class="col-xl-4 col-xxl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Send Quick SMS</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">To Mobile</label>
                            <div class="col-sm-9">
                                <input type="text" name="to-mobile" class="form-control"
                                    placeholder="233540000, 23356000">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Sender ID</label>
                            <div class="col-sm-9">
                                <input type="text" name="sender-id" class="form-control" placeholder="smsbox">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Message</label>
                            <div class="col-sm-9">
                                <textarea type="text" name="message" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" value="quick-sms" class="btn btn-primary">Send
                                    Quick</button>
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
                <h4 class="card-title">Timeline 2</h4>
            </div>
            <div class="card-body">
                <div id="DZ_W_TimeLine111" class="widget-timeline dz-scroll style-1 height370">
                    <ul class="timeline">
                        <?=EventLog($logs)?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>