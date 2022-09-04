<div class="col-xl-12">
    <div class="card">
        <div class="card-header align-items-center">
            <div class="card-action card-tabs">
                <ul class="nav nav-tabs style-1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#AllMessage" role="tab"
                            aria-selected="false">
                            All Message
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#Unread" role="tab" aria-selected="false">
                            Pending Message
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-bs-toggle="tab" href="#Archived" role="tab" aria-selected="true">
                            Sent Message
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body message-bx px-0 pt-3">
            <div class="tab-content dz-scroll height520" id="message-bx">
                <div class="tab-pane fade show active" id="AllMessage" role="tabpanel">
                    <?=all_message($all_msg)?>
                </div>
                <div class="tab-pane fade" id="Unread" role="tabpanel">
                    <?=all_message($all_pending_msg)?>
                </div>
                <div class="tab-pane fade" id="Archived" role="tabpanel">
                    <?=all_message($all_sent_msg)?>
                </div>
            </div>
        </div>
    </div>
</div>