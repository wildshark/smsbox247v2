<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Datatable</h4>
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