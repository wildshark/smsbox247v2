<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Total</h4>
                <button type="button" class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#TopUPAccount" class="ai-icon" aria-expanded="false">+ Add Group</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example3" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Date</th>
                                <th>Invoice No.</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?=ClientTransaction($transaction)?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>