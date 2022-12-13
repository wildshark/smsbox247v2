<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Token</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Token Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Token name">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Website</label>
                                <input type="url" name="website" class="form-control" placeholder="http://domain-name.com">
                            </div>
                        </div>
                        <button type="submit" name="submit" value="add-token" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Token List</h4>
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
                            <?=TokenDataSheet($data)?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>