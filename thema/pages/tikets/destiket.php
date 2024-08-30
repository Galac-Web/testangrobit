<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Invoice</a></li>
                            <li class="breadcrumb-item" aria-current="page">Create</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Ivance</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <form action="/runquery" method="post" class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <h5>Detail</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><span class="text-danger">*</span>ID</th>
                                            <th><span class="text-danger">*</span>Description</th>
                                            <th><span class="text-danger">*</span>Qty</th>
                                            <th><span class="text-danger">*</span>Price</th>
                                            <th>Total Amount</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><input type="text" class="form-control" placeholder="Name" name="id" value="#15588385"> <input name="type" value="addtiketinvoce" hidden="hidden"></td>
                                            <td><input type="text" class="form-control" placeholder="Description" name="desc" value="Bay to Tikets"></td>
                                            <td><input type="number" class="form-control" placeholder="Qty" name="qty" value="3"></td>
                                            <td><input type="number" class="form-control" placeholder="Price" name="price" value="50"></td>
                                            <td>50.00</td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-start">

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="border rounded p-3 h-100">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <h6 class="mb-0">From:</h6>
                                    </div>
                                    <h5>Garcia-Cameron and Sons</h5>
                                    <p class="mb-0">8534 Saunders Hill Apt. 583</p>
                                    <p class="mb-0">(970) 982-3353</p>
                                    <p class="mb-0">brandon07@pierce.com</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="invoice-total ms-auto">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label">Discount(%)</label>
                                                <input type="text" class="form-control" value="0">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label class="form-label">Taxes(%)</label>
                                                <input type="text" class="form-control" value="0">
                                            </div>
                                        </div>
                                        <div class="col-6"> <p class="text-muted mb-1 text-start">Sub Total :</p></div>
                                        <div class="col-6"> <p class="f-w-600 mb-1 text-end">$20.00</p></div>
                                        <div class="col-6"> <p class="text-muted mb-1 text-start">Discount :</p></div>
                                        <div class="col-6"> <p class="f-w-600 mb-1 text-end text-success">$10.00</p></div>
                                        <div class="col-6"> <p class="text-muted mb-1 text-start">Taxes :</p></div>
                                        <div class="col-6"> <p class="f-w-600 mb-1 text-end">$5.000</p></div>
                                        <div class="col-6"> <p class="f-w-600 mb-1 text-start">Grand Total :</p></div>
                                        <div class="col-6"> <p class="f-w-600 mb-1 text-end">$25.00</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-0">
                                    <label class="form-label">Note</label>
                                    <textarea class="form-control" rows="3" placeholder="Note"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row align-items-end justify-content-between g-3">
                                    <div class="col-sm-auto">

                                    </div>
                                    <div class="col-sm-auto btn-page">

                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- [ Main Content ] end -->
    </div>
</div>