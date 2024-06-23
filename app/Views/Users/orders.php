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

    @media (max-width: 991px) {
        .orders {
            margin-top: -100px;
        }
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
        <div class="orders col-lg-9 pt-4 pb-2 pb-sm-4">
            <h1 class="h2 mb-4">Orders</h1>

            <!-- Order History -->
            <section class="card-body p-4 mb-4">
                <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                    <i class="fa-regular fa-cart-shopping fs-5 me-2"></i>
                    <h2 class="h4 mb-0">Order History</h2>
                </div>

                <div id="orders">
                    <?php if (empty($orders)) : ?>
                        <p class="text-center text-body-secondary">No orders found.</p>
                    <?php else : ?>
                        <?php foreach ($orders as $order) : ?>
                            <div class="order-item border-top mb-0">
                                <div class="order-header">
                                    <a class="order-button d-flex fs-4 fw-normal text-decoration-none py-3 collapsed" href="#order<?= $order->idOrder ?>" data-bs-toggle="collapse" aria-expanded="false" aria-controls="order<?= $order->idOrder ?>">
                                        <div class="d-flex justify-content-between w-100">
                                            <div class="me-2 me-sm-4" style="min-width: 145px;">
                                                <div class="fs-sm text-body-secondary">#<?= $order->idOrder ?></div>
                                                <span class="badge rounded-pill
                                                    <?php
                                                    switch ($order->status) {
                                                        case 'Canceled':
                                                        case 'Expired':
                                                            echo 'bg-danger bg-opacity-10 text-danger fs-sm border border-danger-subtle';
                                                            break;

                                                        case 'Waiting for Payment':
                                                            echo 'bg-secondary bg-opacity-10 text-secondary fs-sm border border-secondary-subtle';
                                                            break;

                                                        case 'Waiting for Pick Up':
                                                        case 'Shipping':
                                                        case 'In Return':
                                                            echo 'bg-info bg-opacity-10 text-info fs-sm border border-info-subtle';
                                                            break;

                                                        case 'Arrived':
                                                        case 'Returned':
                                                            echo 'bg-primary bg-opacity-10 text-primary fs-sm border border-primary-subtle';
                                                            break;

                                                        case 'Activated':
                                                        case 'Completed':
                                                            echo 'bg-success bg-opacity-10 text-success fs-sm border border-success-subtle';
                                                            break;

                                                        case 'Deactivated':
                                                            echo 'bg-dark bg-opacity-10 text-dark fs-sm border border-dark-subtle';
                                                            break;

                                                        case 'Waiting for Return':
                                                            echo 'bg-warning bg-opacity-10 text-warning fs-sm border border-warning-subtle';
                                                            break;

                                                        case 'Rated':
                                                            echo 'bg-warning bg-opacity-10 text-warning fs-sm border border-warning-subtle';
                                                            break;

                                                        default:
                                                            echo 'bg-secondary bg-opacity-10 text-secondary fs-sm border border-secondary-subtle';
                                                    }
                                                    ?>" style="min-width: 90px;">
                                                    <?= $order->status ?> <?= $order->status == 'Rated' ? '<div class="fa-solid fa-star" style="color: #ffd43b"></div>' : ''; ?>
                                                </span>
                                            </div>
                                            <div class="me-3 me-sm-4">
                                                <div class="d-none d-sm-block fs-sm text-body-secondary mb-2">Order date</div>
                                                <div class="d-sm-none fs-sm text-body-secondary mb-2">Date</div>
                                                <div class="fs-sm fw-medium text-dark"><?= date('M d, Y', strtotime($order->createdAt)) ?></div>
                                            </div>
                                            <div class="product-name me-3 me-sm-4 d-none d-sm-block">
                                                <div class="fs-sm text-body-secondary mb-2">Product</div>
                                                <div class="fs-sm fw-medium text-dark text-truncate-ellipsis"><?= $order->productName ?></div>
                                            </div>
                                            <div class="me-3 me-sm-4">
                                                <div class="fs-sm text-body-secondary mb-2">Total</div>
                                                <div class="fs-sm fw-medium text-dark">IDR <?= number_format($order->grossAmount, 0, ',', '.') ?></div>
                                            </div>
                                            <div>
                                                <i class="fas fa-chevron-down chevron"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="order-collapse collapse" id="order<?= $order->idOrder ?>" data-bs-parent="#orders">
                                    <div class="order-body pb-4">
                                        <div class="mb-4">
                                            <div class="row">
                                                <div class="col-6"> <label class="fw-bold">No. Invoice</label> </div>
                                                <div class="col-6 text-end"><?= $order->idOrder ?></div>

                                                <div class="col-6"> <label class="fw-bold">Order date</label> </div>
                                                <div class="col-6 text-end"><?= date('d M Y, H:i', strtotime($order->createdAt)) ?></div>

                                                <div class="col-6"> <label class="fw-bold">Order timeline</label> </div>
                                                <div class="col-6 text-end">
                                                    <a href="#timeline<?= $order->idOrder ?>" class="see-details text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="timeline<?= $order->idOrder ?>">
                                                        See Details <i class="fas fa-chevron-down ms-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Collapsible Order Timeline -->
                                        <div class="collapse mb-4" id="timeline<?= $order->idOrder ?>">
                                            <div class="timeline">
                                                <?php foreach ($orderTimelines[$order->idOrder] as $timeline) : ?>
                                                    <div class="timeline-item <?= $timeline->status == $order->status ? 'active' : '' ?>">
                                                        <div class="timeline-content">
                                                            <div class="timeline-date"><?= date('d M Y, H:i', strtotime($timeline->createdAt)) ?></div>
                                                            <h6 class="timeline-title"><?= $timeline->status ?></h6>
                                                            <p class="timeline-text"><?= $timeline->description ?></p>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <h5>Personal Info</h5>
                                            <div class="row">
                                                <div class="col-sm-4 col-md-4 fw-semibold">Name</div>
                                                <div class="col-sm-7 col-md-7"><?= $order->name ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 col-md-4 fw-semibold">Email</div>
                                                <div class="col-sm-7 col-md-7"><?= $order->email ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 col-md-4 fw-semibold">Phone</div>
                                                <div class="col-sm-7 col-md-7"><?= $order->phone ?></div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap">
                                            <div class="col-md-6 mb-4">
                                                <h5>Shipping Info</h5>
                                                <div class="row">
                                                    <div class="col-sm-4 col-md-4 fw-semibold">Courier</div>
                                                    <div class="col-sm-7 col-md-7"><?= $order->expedition ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4 col-md-4 fw-semibold">Track Number</div>
                                                    <div class="col-sm-7 col-md-7"><?= $order->trackNumber ?? '-' ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4 col-md-4 fw-semibold">Shipping Address</div>
                                                    <div class="col-sm-7 col-md-7"><?= $order->shippingAddress ?></div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4"> <!-- d-none -->
                                                <h5>Return Shipping Info</h5>
                                                <div class="row">
                                                    <div class="col-sm-4 col-md-4 fw-semibold">Courier</div>
                                                    <div class="col-sm-7 col-md-7"><?= $order->returnExpedition ?? '-' ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4 col-md-4 fw-semibold">Track Number</div>
                                                    <div class="col-sm-7 col-md-7"><?= $order->returnTrackNumber ?? '-' ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4 col-md-4 fw-semibold">Shipping Address</div>
                                                    <div class="col-sm-7 col-md-7">Jl. Letnan Sutopo BSD, Rawa Mekarjaya, Serpong, KOTA TANGERANG SELATAN, BANTEN 15311</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <h5>Payment Details</h5>
                                            <div class="row">
                                                <div class="col-12 text-center"> <label><?= $order->productName ?></label> </div>
                                                <div class="col-6"> <label class="fw-semibold">Duration of Rental</label> </div>
                                                <div class="col-6 text-end"><?= $order->durationRent ?> DAYS</div>
                                                <div class="col-6"> <label class="fw-semibold">Rental Cost</label> </div>
                                                <div class="col-6 text-end">IDR <?= number_format($order->rentCost, 0, ',', '.') ?></div>
                                                <div class="col-6"> <label class="fw-semibold">Deposit</label> </div>
                                                <div class="col-6 text-end">IDR <?= number_format($order->deposit, 0, ',', '.') ?></div>
                                                <div class="col-6"> <label class="fw-semibold">Shipping Cost</label> </div>
                                                <div class="col-6 text-end">IDR <?= number_format($order->shippingPrice, 0, ',', '.') ?></div>
                                                <div class="col-6"> <label class="fw-semibold">Discount</label> </div>
                                                <div class="col-6 text-end"><label style="color: red;">- IDR <?= number_format($order->discount, 0, ',', '.') ?></label></div>
                                                <div class="col-6"> <label class="fw-semibold">Total Price</label> </div>
                                                <div class="col-6 text-end"><label class="fw-bold mb-2">IDR <?= number_format($order->grossAmount, 0, ',', '.') ?></label></div>

                                                <div class="col-12 col-sm-6"> <label class="fw-semibold">Payment Token</label> </div>
                                                <div class="col-12 col-sm-6 text-start text-sm-end"><?= $order->token ?></div>
                                            </div>
                                        </div>

                                        <div class="mb-4 d-none"> <!-- d-none -->
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
                                            <?php
                                            switch ($order->status) {
                                                case 'Waiting for Payment':
                                                    echo '<a href="/booking/cancel/' . $order->idOrder . '" class="btn btn-outline-danger btn-cancel">Cancel</a>';
                                                    echo '<a href="https://app.sandbox.midtrans.com/snap/v2/vtweb/' . $order->token . '" class="btn btn-primary ms-2 btn-continue-payment">Continue Payment</a>';
                                                    break;

                                                case 'Waiting for Pick Up':
                                                    echo '<a href="/booking/cancel/' . $order->idOrder . '" class="btn btn-outline-danger btn-cancel">Cancel</a>';
                                                    echo '<a href="/contact" class="btn btn-outline-info ms-2 btn-help">Help</a>';
                                                    break;

                                                case 'Shipping':
                                                case 'Arrived':
                                                case 'Deactivated':
                                                case 'In Return':
                                                    echo '<a href="/contact" class="btn btn-outline-info ms-2 btn-help">Help</a>';
                                                    break;

                                                case 'Activated':
                                                    echo '<a href="/contact" class="btn btn-outline-info ms-2 btn-help">Help</a>';
                                                    echo '<button type="button" class="btn btn-outline-success ms-2 btn-extend">Extend Rent</button>';
                                                    break;

                                                case 'Waiting for Return':
                                                    echo '<a href="/contact" class="btn btn-outline-info ms-2 btn-help">Help</a>';
                                                    echo '<button type="button" class="btn btn-info ms-2 btn-input-resi">Input Resi</button>';
                                                    break;

                                                case 'Returned':
                                                    echo '<button type="button" class="btn btn-success ms-2 btn-complete">Complete Order</button>';
                                                    break;

                                                case 'Completed':
                                                    echo '<button type="button" class="btn btn-warning ms-2 btn-review">Leave a Review <i class="fa-solid fa-star" style="color: #ffffff;"></i></button>';
                                                    break;

                                                case 'Rated':
                                                    echo '<button type="button" class="btn btn-outline-warning ms-2 btn-edit-review">Edit a Review <i class="fa-solid fa-pencil"></i></button>';
                                                    break;

                                                default:
                                                    break;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
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

<?= $this->include('Templates/modal_cancel_order'); ?>
<?= $this->include('Templates/footer'); ?>

<script>
    // Chevron Order List
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

        // Chevron Order Timeline
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

        // Modal Alert Cancel Order
        var cancelButtons = document.querySelectorAll('.btn-cancel');
        var modal = new bootstrap.Modal(document.getElementById('cancelOrderModal'));
        var confirmCancel = document.getElementById('confirmCancel');

        cancelButtons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                var cancelUrl = this.getAttribute('href');
                confirmCancel.setAttribute('href', cancelUrl);
                modal.show();
            });
        });
    });
</script>