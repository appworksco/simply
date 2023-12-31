<div class="modal fade" id="logOnModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Log On</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <form action="rfid" method="post">
                        <div class="card-body">
                            <div class="alert alert-info p-2" role="alert">
                                <ul class="m-0">
                                    <li><small class="m-0">Please scan your company ID barcode.</small></li>
                                </ul>
                            </div>
                            <div class="mb-3">
                                <label for="companyId" class="form-label">Company ID</label>
                                <input type="text" class="form-control" id="companyId" name="company_id_in" autofocus>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>