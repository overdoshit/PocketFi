<?= $this->include('Templates/header'); ?>
<?php $session = session(); ?>

<style>
    .card-body {
        background-color: #f6f9fc;
        border-radius: 30px;
    }

    .bg-position-center {
        background-position: center !important;
    }

    .bg-size-cover {
        background-size: cover !important;
    }

    .dropdown-image {
        position: relative;
    }

    @media (max-width: 991px) {
        .settings {
            margin-top: -100px;
        }

        .dropdown-image {
            position: static;
        }
    }

    .show,
    .showing,
    .hidding {
        transition: 0.2s ease-in-out;
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

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($orders) : ?>
                            <?php foreach ($orders as $index => $order) : ?>
                                <tr>
                                    <th scope="row"><?= $index + 1; ?></th>
                                    <td><?= $order->productName; ?></td>
                                    <td>
                                        <?php
                                        $statusClass = 'secondary';
                                        if ($order->status == 'Menunggu Pengiriman') {
                                            $statusClass = 'warning';
                                        } elseif ($order->status == 'Sedang Dikirim') {
                                            $statusClass = 'info';
                                        } elseif ($order->status == 'Cancel') {
                                            $statusClass = 'danger';
                                        }
                                        ?>
                                        <span class="badge text-bg-<?= $statusClass; ?>"><?= $order->status; ?></span>
                                    </td>
                                    <td>IDR <?= number_format($order->grossAmount, 0, ',', '.'); ?></td>
                                    <td><button type="button" class="btn btn-primary">Details</button></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="5" class="text-center">No orders found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
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