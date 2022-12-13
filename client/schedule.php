<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Schedule List</h4>
                <button type="button" class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#ScheduleBulkSMS" class="ai-icon" aria-expanded="false"> + Add Schedule </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Clock</th>
                                <th>Schedule ID</th>
                                <th>Schedule Date</th>
                                <th>Schedule Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?=sms_schedule($schedule)?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Clock</th>
                                <th>Schedule ID</th>
                                <th>Schedule Date</th>
                                <th>Schedule Time</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>    