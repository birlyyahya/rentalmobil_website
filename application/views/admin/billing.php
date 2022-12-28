    <div class="card">
        <div class="card-header">
            <h4>Billings</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tr>
                        <th>Invoice</th>
                        <th>Name</th>
                        <th>Tanggal</th>
                        <th>Kendaraan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>#4</td>
                        <td>Rizal Fakhri</td>
                        <td>2017-01-11</td>
                        <td>Avanza</td>
                        <td>
                            <div class="badge badge-success">Active</div>
                        </td>
                        <td><a data-toggle="modal" data-target="#invoice1" class="btn btn-secondary">Detail</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card-footer text-right">
            <nav class="d-inline-block">
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="invoice1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="invoice m-0">
                    <div class="invoice-print">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="invoice-title">
                                    <h2>Invoice</h2>
                                    <div class="invoice-number">Order #12345</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <address>
                                            <strong>Billed To:</strong><br>
                                            Ujang Maman<br>
                                            1234 Main<br>
                                            Apt. 4B<br>
                                            Bogor Barat, Indonesia
                                        </address>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <address>
                                            <strong>Shipped To:</strong><br>
                                            Muhamad Nauval Azhar<br>
                                            1234 Main<br>
                                            Apt. 4B<br>
                                            Bogor Barat, Indonesia
                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <address>
                                            <strong>Payment Method:</strong><br>
                                            Visa ending **** 4242<br>
                                            ujang@maman.com
                                        </address>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <address>
                                            <strong>Order Date:</strong><br>
                                            September 19, 2018<br><br>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="section-title">Order Summary</div>
                                <p class="section-lead">All items here cannot be deleted.</p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-md">
                                        <tr>
                                            <th data-width="40">#</th>
                                            <th>Item</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-right">Totals</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mouse Wireless</td>
                                            <td class="text-center">$10.99</td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">$10.99</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Keyboard Wireless</td>
                                            <td class="text-center">$20.00</td>
                                            <td class="text-center">3</td>
                                            <td class="text-right">$60.00</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Headphone Blitz TDR-3000</td>
                                            <td class="text-center">$600.00</td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">$600.00</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-8">
                                        <div class="section-title">Payment Method</div>
                                        <p class="section-lead">The payment method that we provide is to make it easier for you to pay invoices.</p>
                                        <div class="d-flex">
                                            <div class="mr-2 bg-visa" data-width="61" data-height="38"></div>
                                            <div class="mr-2 bg-jcb" data-width="61" data-height="38"></div>
                                            <div class="mr-2 bg-mastercard" data-width="61" data-height="38"></div>
                                            <div class="bg-paypal" data-width="61" data-height="38"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Subtotal</div>
                                            <div class="invoice-detail-value">$670.99</div>
                                        </div>
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Shipping</div>
                                            <div class="invoice-detail-value">$15</div>
                                        </div>
                                        <hr class="mt-2 mb-2">
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Total</div>
                                            <div class="invoice-detail-value invoice-detail-value-lg">$685.99</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-md-right">
                        <div class="float-lg-left mb-lg-0 mb-3">
                            <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Process Payment</button>
                            <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
                        </div>
                        <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
                    </div>
                </div>
            </div>
        </div>
    </div>