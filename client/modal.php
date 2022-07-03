<div class="modal fade" id="QuickSMS">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Quick SMS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="text-black font-w500">To Mobile Number</label>
                        <input type="text" name="to-mobile" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Sender ID</label>
                        <div class="cal-icon"><input type="text" name="sender-id" class="form-control"><i
                                class="far fa-calendar-alt"></i></div>
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
                <form>
                    <div class="form-group">
                        <label class="text-black font-w500">To Mobile Number</label>
                        <input type="text" name="to-mobile" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Sender ID</label>
                        <div class="cal-icon"><input type="text" name="sender-id" class="form-control"><i
                                class="far fa-calendar-alt"></i></div>
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Message</label>
                        <textarea type="text" name="msg" class="form-control"></textarea>
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
                <form>
                    <div class="form-group">
                        <label class="text-black font-w500">Group Name</label>
                        <div class="cal-icon"><input type="text" name="sender-id" class="form-control"><i
                                class="far fa-calendar-alt"></i></div>
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Upload csv or execl</label>
                        <input type="text" name="to-mobile" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" value="group-contact" class="btn btn-primary">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>