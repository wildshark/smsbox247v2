<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Group Contact</h4>
            <button type="button" class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#AddContact" class="ai-icon" aria-expanded="false">+ Add Group</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example3" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Collection Name</th>
                            <th>Last Modeife</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?=ContactFileSheet($BulkContact)?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>