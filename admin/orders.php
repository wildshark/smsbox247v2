<div class="col-12">
    <div class="card">
        <!--div class="card-header">
            <h4 class="card-title">Custom Tab 1</h4>
        </div-->
        <div class="card-body">
            <!-- Nav tabs -->
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home1"><i class="la la-home me-2"></i>
                            Pending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile1"><i class="la la-user me-2"></i>
                            Approved</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="home1" role="tabpanel">
                        <div class="pt-4">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Date</th>
                                            <th>Ref</th>
                                            <th>Account</th>
                                            <th>Username</th>
                                            <th>Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?=AdminOrdersList($pending)?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile1">
                        <div class="pt-4">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Date</th>
                                            <th>Ref</th>
                                            <th>Account</th>
                                            <th>Username</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?=AdminOrdersApproved($aproved)?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact1">
                        <div class="pt-4">
                            <h4>This is contact title</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove.
                            </p>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove.
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="message1">
                        <div class="pt-4">
                            <h4>This is message title</h4>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                                aliqua, retro synth master cleanse. Mustache cliche tempor.
                            </p>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                                aliqua, retro synth master cleanse. Mustache cliche tempor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>