<div class="modal fade" id="QuickSMS">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Quick SMS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <label class="text-black font-w500">To Mobile Number</label>
                        <input type="text" name="to-mobile" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Sender ID</label>
                        <input type="text" name="sender-id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Message</label>
                        <textarea type="text" name="message" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" value="quick-sms" class="btn btn-primary">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="BulkSMS">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Bulk SMS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <label class="text-black font-w500">To Mobile Number</label>
                        <select name="to-group" class="default-select form-control">
                            <?=cmbGroupContact($cmbGroupContact);?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Sender ID</label>
                        <input type="text" name="sender-id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Message</label>
                        <textarea type="text" name="message" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" value="bulk-sms" class="btn btn-primary">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="AddContact">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Group Contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="text-black font-w500">Group Name</label>
                        <input type="text" name="group-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Upload csv or execl</label>
                        <input type="file" name="upload-file" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" value="add-contact" class="btn btn-primary">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ScheduleBulkSMS">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Bulk SMS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <label class="text-black font-w500">To Mobile Number</label>
                        <select name="to-group" class="default-select form-control">
                            <?=cmbGroupContact($cmbGroupContact);?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Message</label>
                        <textarea type="text" name="message" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Sender ID</label>
                        <input type="text" name="sender-id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Schedule Date</label>
                        <input type="date" name="schedule-date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Schedule Time</label>
                        <input type="time" name="schedule-time" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" value="schedule-sms" class="btn btn-primary">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="TopUPAccount">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Topup Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <label class="text-black font-w500">Amount</label>
                        <input type="text" name="amount" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Payment Method</label>
                        <select name="payment-method" class="form-control">
                            <option value="araknet">Mobile Money</option>
                            <option value="card">Visa/Master Card</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" value="make-payment" class="btn btn-primary">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
