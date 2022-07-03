<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Profile Datatable</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example3" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Client Name</th>
                            <th>Username</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?=profile($profile)?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>