<?= $this->include('Templates/header'); ?>
<?php $session = session(); ?>

<style>
    .card-body {
        background-color: #f6f9fc;
        border-radius: 30px;
    }

    .badge {
        padding-bottom: 7px;
    }

    @media (max-width: 767px) {
        .product-name {
            display: none !important;
        }
    }

    .text-truncate-ellipsis {
        display: block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        max-width: 250px;
    }

    .timeline {
        display: flex;
        flex-direction: column;
        gap: 5px;
        border: 1px solid var(--bs-primary);
        border-radius: 20px;
        padding: 20px;
    }

    .timeline-item {
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }

    .timeline-item::before {
        content: '';
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #8D96AA;
        margin-top: 5px;
        box-shadow: rgb(232, 234, 238) 0px 0px 0px 4px;
    }

    .timeline-item.active::before {
        background: var(--bs-primary);
        box-shadow: rgb(183, 244, 228) 0px 0px 0px 4px;
    }

    .timeline-item .timeline-content {
        flex: 1;
    }

    .timeline-item .timeline-date {
        font-size: 14px;
        color: #6c757d;
    }

    .timeline-item .timeline-title {
        margin-bottom: 0;
        font-size: 16px;
        font-weight: 500;
    }

    .timeline-item .timeline-text {
        font-size: 14px;
    }

    .btn-help:hover {
        color: white;
    }

    .fa-pencil {
        color: #ffd43b;
    }

    .btn-edit-review:hover .fa-pencil {
        color: white;
    }
</style>

<div class="container mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
        <!-- Sidebar -->
        <?= $this->include('Users/sidebar'); ?>

        <!-- Page content -->
        <div class="settings col-lg-9 pt-4 pb-2 pb-sm-4">
            <h1 class="h2 mb-4">Orders</h1>

            <!-- Order History -->
            <section class="card-body p-4 mb-4">
                <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                    <i class="ai-user text-primary lead pe-1 me-2"></i>
                    <h2 class="h4 mb-0">Order History</h2>
                </div>

                <div id="orders">
                    <div class="order-item border-top mb-0">
                        <div class="order-header">
                            <a class="order-button d-flex fs-4 fw-normal text-decoration-none py-3 collapsed" href="#orderOne" data-bs-toggle="collapse" aria-expanded="false" aria-controls="orderOne">
                                <div class="d-flex justify-content-between w-100">
                                    <div class="me-3 me-sm-4">
                                        <div class="fs-sm text-body-secondary">#240621966906</div>
                                        <span class="badge rounded-pill bg-info bg-opacity-10 text-info fs-sm border border-info-subtle">In progress</span>
                                    </div>
                                    <div class="me-3 me-sm-4">
                                        <div class="d-none d-sm-block fs-sm text-body-secondary mb-2">Order date</div>
                                        <div class="d-sm-none fs-sm text-body-secondary mb-2">Date</div>
                                        <div class="fs-sm fw-medium text-dark">Jun 21, 2024</div>
                                    </div>
                                    <div class="product-name me-3 me-sm-4 d-none d-sm-block">
                                        <div class="fs-sm text-body-secondary mb-2">Product</div>
                                        <div class="fs-sm fw-medium text-dark text-truncate-ellipsis">INDONESIA DAILY FUP 8 GB IDR 40.000/DAY (MINIMUM RENT 3 DAYS)</div>
                                    </div>
                                    <div class="me-3 me-sm-4">
                                        <div class="fs-sm text-body-secondary mb-2">Total</div>
                                        <div class="fs-sm fw-medium text-dark">IDR 851.500</div>
                                    </div>
                                    <div>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="order-collapse collapse" id="orderOne" data-bs-parent="#orders">
                            <div class="order-body pb-4">
                                <div class="mb-4">
                                    <div class="row">
                                        <div class="col-6"> <label class="fw-bold">No. Invoice</label> </div>
                                        <div class="col-6 text-end">240621966906</div>

                                        <div class="col-6"> <label class="fw-bold">Order date</label> </div>
                                        <div class="col-6 text-end">21 June 2024, 11:42</div>

                                        <div class="col-6"> <label class="fw-bold">Order timeline</label> </div>
                                        <div class="col-6 text-end">
                                            <a href="#timelineOne" class="see-details text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="timelineOne">
                                                See Details <i class="fas fa-chevron-down ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Collapsible Order Timeline -->
                                <div class="collapse mb-3" id="timelineOne">
                                    <div class="timeline">
                                        <div class="timeline-item active">
                                            <div class="timeline-content">
                                                <div class="timeline-date">10 Mei 2024, 12:00</div>
                                                <h6 class="timeline-title">Transaction Completed.</h6>
                                                <p class="timeline-text">Product has been received back by Pocket Fi.</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-content">
                                                <div class="timeline-date">6 Mei 2024, 00:01</div>
                                                <h6 class="timeline-title">Waiting for Return</h6>
                                                <p class="timeline-text">Waiting for the user to make a return shipping.</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-content">
                                                <div class="timeline-date">6 Mei 2024, 00:00</div>
                                                <h6 class="timeline-title">Product Deactivated</h6>
                                                <p class="timeline-text">The product has been deactivated.</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-content">
                                                <div class="timeline-date">2 Mei 2024, 00:00</div>
                                                <h6 class="timeline-title">Product Activated</h6>
                                                <p class="timeline-text">The product has been activated.</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-content">
                                                <div class="timeline-date">1 Mei 2024, 20:29</div>
                                                <h6 class="timeline-title">The Order has Arrived at the Destination</h6>
                                                <p class="timeline-text">Received by John Doe.</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-content">
                                                <div class="timeline-date">30 Apr 2024, 19:30</div>
                                                <h6 class="timeline-title">The Order has been Shipped</h6>
                                                <p class="timeline-text">Your order is in the process of being shipped by the courier.</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-content">
                                                <div class="timeline-date">30 Apr 2024, 07:03</div>
                                                <h6 class="timeline-title">Waiting for Pick Up</h6>
                                                <p class="timeline-text">Your order is waiting for pick up by the courier.</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-content">
                                                <div class="timeline-date">29 Apr 2024, 11:42</div>
                                                <h6 class="timeline-title">Payment Verified</h6>
                                                <p class="timeline-text">Payment has been received by Pocket Fi and your order will be processed.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6 mb-3">
                                    <h5>Personal Info</h5>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 fw-semibold">Name</div>
                                        <div class="col-sm-7 col-md-7">John Doe</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 fw-semibold">Email</div>
                                        <div class="col-sm-7 col-md-7">johndoe@mail.com</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 fw-semibold">Phone</div>
                                        <div class="col-sm-7 col-md-7">+6212345678900</div>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap">
                                    <div class="col-md-6 mb-3">
                                        <h5>Shipping Info</h5>
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 fw-semibold">Courier</div>
                                            <div class="col-sm-7 col-md-7">SiCepat - REGULER</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 fw-semibold">No. Resi</div>
                                            <div class="col-sm-7 col-md-7">005243346849</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 fw-semibold">Shipping Address</div>
                                            <div class="col-sm-7 col-md-7">Jl. WR Supratman, Gianyar, Gianyar, GIANYAR, BALI 22222</div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3"> <!-- d-none -->
                                        <h5>Return Shipping Info</h5>
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 fw-semibold">Courier</div>
                                            <div class="col-sm-7 col-md-7">SiCepat - REGULER</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 fw-semibold">No. Resi</div>
                                            <div class="col-sm-7 col-md-7">005243346849</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 fw-semibold">Shipping Address</div>
                                            <div class="col-sm-7 col-md-7">Jl. Letnan Sutopo BSD, Rawa Mekarjaya, Serpong, KOTA TANGERANG SELATAN, BANTEN 15311</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <h5>Payment Details</h5>
                                    <div class="row">
                                        <div class="col-12"> <label class="fw-semibold">INDONESIA DAILY FUP 8 GB IDR 40.000/DAY (MINIMUM RENT 3 DAYS)</label> </div>
                                        <div class="col-6"> <label class="fw-semibold">Duration of Rental</label> </div>
                                        <div class="col-6 text-end">3 DAYS</div>
                                        <div class="col-6"> <label class="fw-semibold">Rental Cost</label> </div>
                                        <div class="col-6 text-end">IDR 120.000</div>
                                        <div class="col-6"> <label class="fw-semibold">Deposit</label> </div>
                                        <div class="col-6 text-end">IDR 500.000</div>
                                        <div class="col-6"> <label class="fw-semibold">Shipping Cost</label> </div>
                                        <div class="col-6 text-end">IDR 32.500</div>
                                        <div class="col-6"> <label class="fw-semibold">Discount</label> </div>
                                        <div class="col-6 text-end"><label style="color: red;">- IDR 80.000</label></div>
                                        <div class="col-6"> <label class="fw-semibold">Total Price</label> </div>
                                        <div class="col-6 text-end"><label class="fw-bold mb-2">IDR 572.500</label></div>

                                        <div class="col-12 col-sm-6"> <label class="fw-semibold">Payment Token</label> </div>
                                        <div class="col-12 col-sm-6 text-start text-sm-end">176b83d0-d489-4563-be80-134ac376ded7</div>
                                        <div class="col-12 col-sm-6"> <label class="fw-semibold">Payment Methods</label> </div>
                                        <div class="col-12 col-sm-6 text-start text-sm-end">BCA Virtual Account</div>
                                    </div>
                                </div>

                                <div class="mb-3"> <!-- d-none -->
                                    <h5>Rate and Review</h5>
                                    <div class="d-flex justify-content-center">
                                        <div class="card-wrapper mx-auto" style="width: 250px;">
                                            <div class="card-review">
                                                <div class="image-content">
                                                    <span class="overlay"></span>
                                                    <div class="card-image">
                                                        <img src="assets/images/users/default.jpg" class="card-img" alt="John Doe" />
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <h2 class="name">John Doe</h2>
                                                    <div class="start">
                                                        <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                                        <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                                        <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                                        <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                                    </div>
                                                    <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore architecto officia quos, est repellendus autem molestiae. At autem explicabo similique asperiores omnis quas optio. Dolorem, exercitationem! Reiciendis maxime cumque repellendus!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end mt-4">
                                    <button type="button" class="btn btn-outline-danger me-2 btn-cancel">Cancel</button>
                                    <button type="button" class="btn btn-primary me-2 btn-continue-payment">Continue Payment</button>
                                    <button type="button" class="btn btn-outline-info me-2 btn-help">Help</button>
                                    <button type="button" class="btn btn-info me-2 btn-input-resi">Input Resi</button>
                                    <button type="button" class="btn btn-success me-2 btn-complete">Complete Order</button>
                                    <button type="button" class="btn btn-warning me-2 btn-review">Leave a Review <i class="fa-solid fa-star" style="color: #ffffff;"></i></button>
                                    <button type="button" class="btn btn-outline-warning btn-edit-review">Edit a Review <i class="fa-solid fa-pencil"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- More order items -->
                </div>

            </section>
        </div>
    </div>
</div>

<!-- Sidebar toggle button when mobile view -->
<button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarAccount">
    <i class="fa-solid fa-bars me-2"></i>
    Account Menu
</button>

<?= $this->include('Templates/footer'); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var orderButtons = document.querySelectorAll('.order-button');
        orderButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var icon = this.querySelector('i');
                if (this.classList.contains('collapsed')) {
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                } else {
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                }
            });
        });

        var seeDetails = document.querySelectorAll('.see-details');
        seeDetails.forEach(function(button) {
            button.addEventListener('click', function() {
                var icon = this.querySelector('i');
                if (this.classList.contains('collapsed')) {
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                } else {
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                }
            });
        });
    });
</script>