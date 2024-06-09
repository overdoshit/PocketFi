<?= $this->include('Templates/header'); ?>

<style>
    .title-row {
        font-size: 12px;
    }

    .content-row {
        font-size: 14px;
    }

    .btn-more {
        font-size: 10px;
        margin-top: 20px;
    }

    table,
    tr,
    td {
        border: none;
        padding: 0;
    }

    table>tbody {
        vertical-align: inherit;
    }

    .dataProduct {
        width: 132px;
    }

    .table-products {
        min-height: 170px;
    }

    @media (max-width: 992px) {
        .dataProduct {
            width: auto;
            display: block;
            text-align: center;
        }

        table {
            width: 100%;
        }

        .btn-more {
            width: 50%;
            margin: 0;
        }

        .card-body {
            padding: 1rem;
        }

        .fw-bold {
            margin: 0;
        }
    }

    @media (min-width: 768px) {
        .detailModal {
            --bs-modal-width: 800px;
        }
    }

    .ribbon {
        position: absolute;
        top: -10px;
        right: 5px;
        z-index: 1;
        overflow: hidden;
        width: 75px;
        height: 75px;
        text-align: right;
    }

    .ribbon span {
        font-size: 10px;
        font-weight: bold;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        line-height: 20px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        width: 100px;
        display: block;
        box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
        position: absolute;
        top: 19px;
        right: -21px;
    }

    .best-seller {
        background: linear-gradient(#D90809 0%, #AE0607 100%);
    }

    .low-stock {
        background: linear-gradient(#F39C12 0%, #DB8C10 100%);
    }

    .ribbon span::before {
        content: '';
        position: absolute;
        left: 0px;
        top: 100%;
        z-index: -1;
    }
</style>

<section class="container text-center py-5">
    <div class="row">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Global Wifi Indonesia</h1>
            <p class="lead text-body-secondary">Multi operator system which will look for the best connection in your area in order to provide best signal services for you anywhere in Indonesia.</p>
        </div>
    </div>
</section>

<section class="container product">
    <div class="row row-cols-1 row-cols-md-2 mb-3 text-center">
        <?php foreach ($products as $product) : ?>
            <div class="product col position-relative">
                <?php if ($product['bestSeller'] === 'Y') : ?>
                    <div class="ribbon"><span class="best-seller">Best Seller</span></div>
                <?php endif; ?>
                <?php if ($product['stock'] <= 3) : ?>
                    <div class="ribbon"><span class="low-stock">Low Stock</span></div>
                <?php endif; ?>
                <div class="card mb-5 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-bg-primary border-primary" style="min-height: 72px;">
                        <h1 class="text-uppercase fw-bold text-start fs-6 m-0"><?= $product['country']; ?> <?= $product['packageType']; ?> <?= $product['dataUsage']; ?> IDR <?= number_format($product['price'], 0, ',', '.'); ?>/<?= $product['priceType']; ?> (MINIMUM RENT <?= $product['minimumRentDays']; ?> DAYS)</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-products">
                            <tbody>
                                <tr>
                                    <td class="dataProduct" rowspan="2" style="vertical-align : middle;">
                                        <img src="<?= $product['countryFlagUrl']; ?>" width="115px" style="box-shadow: 0px 4px 8px 0px #0000004D;">
                                    </td>
                                    <td class="dataProduct">
                                        <div class="title-row">Country</div>
                                        <p class="content-row fw-bold"><?= $product['country']; ?></p>
                                    </td>
                                    <td class="dataProduct">
                                        <div class="title-row">Data Usage</div>
                                        <p class="content-row fw-bold"><?= $product['dataUsage']; ?></p>
                                    </td>
                                    <td class="dataProduct">
                                        <div class="title-row">Minimum Rent</div>
                                        <p class="content-row fw-bold"><?= $product['minimumRentDays']; ?> DAYS</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="dataProduct">
                                        <div class="title-row">Network</div>
                                        <p class="content-row fw-bold"><?= $product['network']; ?></p>
                                    </td>
                                    <td class="dataProduct">
                                        <div class="title-row">Deposit</div>
                                        <p class="content-row fw-bold">IDR <?= number_format($product['deposit'], 0, ',', '.'); ?></p>
                                    </td>
                                    <td class="dataProduct">
                                        <button type="button" class="btn btn-warning btn-more m-2" data-bs-toggle="modal" data-bs-target="#detailModal-<?= $product['idProduct']; ?>">More details &raquo;</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h5 class="fw-bold my-2">IDR <?= number_format($product['price'], 0, ',', '.'); ?>/ <span class="text-lowercase"><?= $product['priceType']; ?></span></h5>
                        <?php if (session('email')) : ?>
                            <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal-<?= $product['idProduct']; ?>">Check out</button>
                        <?php else : ?>
                            <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Check out</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="modal fade detailModal text-start" id="detailModal-<?= $product['idProduct']; ?>" tabindex="-1" aria-labelledby="detailModalLabel-<?= $product['idProduct']; ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                    <div class="modal-content rounded-4 shadow">
                        <div class="modal-header p-4 mx-2 border-bottom-1">
                            <h1 class="text-uppercase fw-bold mb-0 fs-5" id="detailModalLabel-<?= $product['idProduct']; ?>"><?= $product['country']; ?> <?= $product['packageType']; ?> <?= $product['dataUsage']; ?> IDR <?= number_format($product['price'], 0, ',', '.'); ?>/<?= $product['priceType']; ?> (MINIMUM RENT <?= $product['minimumRentDays']; ?> DAYS)</h1>
                            <button type="button" class="btn-close ms-1" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="<?= $product['imageUrl']; ?>" style="width: 100%">
                                </div>
                                <div class="col-md-7">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label>Country</label>
                                                    <p class="fw-bold mb-3">
                                                        <img src="<?= $product['countryFlagUrl']; ?>" width="20px" style="box-shadow: 0px 2px 4px 0px #0000004D;">
                                                        <?= $product['country']; ?>
                                                    </p>
                                                </td>
                                                <td>
                                                    <label>Battery (Hour)</label>
                                                    <p class="fw-bold mb-3"><?= $product['batteryHours']; ?>+</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>No. of shared devices</label>
                                                    <p class="fw-bold mb-3"><?= $product['sharedDevices']; ?></p>
                                                </td>
                                                <td>
                                                    <label>Data Usage</label>
                                                    <p class="fw-bold mb-3"><?= $product['dataUsage']; ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Max Download Speed</label>
                                                    <p class="fw-bold mb-3"><?= $product['maxDownloadSpeed']; ?> Mbps</p>
                                                </td>
                                                <td>
                                                    <label>Max Upload Speed</label>
                                                    <p class="fw-bold mb-3"><?= $product['maxUploadSpeed']; ?> Mbps</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Network</label>
                                                    <p class="fw-bold mb-3"><?= $product['network']; ?></p>
                                                </td>
                                                <td>
                                                    <label>Deposit</label>
                                                    <p class="fw-bold mb-3">IDR <?= number_format($product['deposit'], 0, ',', '.'); ?></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 notes">
                                    <h5>Notes</h5>
                                    <div><?= $product['notes']; ?></div>
                                </div>
                            </div>
                            <div class="modal-footer p-0">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade bookingModal text-start" id="bookingModal-<?= $product['idProduct']; ?>" tabindex="-1" aria-labelledby="bookingModalLabel-<?= $product['idProduct']; ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-4 shadow">
                        <div class="modal-header p-4 mx-2 border-bottom-1">
                            <h1 class="text-uppercase fw-bold mb-0 fs-5" id="bookingModalLabel-<?= $product['idProduct']; ?>"><?= $product['country']; ?> <?= $product['packageType']; ?> <?= $product['dataUsage']; ?> IDR <?= number_format($product['price'], 0, ',', '.'); ?>/<?= $product['priceType']; ?> (MINIMUM RENT <?= $product['minimumRentDays']; ?> DAYS)</h1>
                            <button type="button" class="btn-close ms-1" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/booking" method="post">
                            <div class="modal-body">
                                <h5 class="text-center mb-4">Set how long you want to borrow wifi</h5>
                                <input type="hidden" name="product" value="<?= $product['idProduct']; ?>">
                                <input type="hidden" name="per" value="<?= $product['packageType']; ?>">
                                <div class="date-book">
                                    <div class="form-floating mb-4">
                                        <input type="date" class="form-control rounded-3 start-date" id="startDate" name="startDate" min="<?= date("Y-m-d"); ?>" required>
                                        <label for="floatingInput">Start Date</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="date" class="form-control rounded-3 start-date" id="endDate" name="endDate" required>
                                        <label for="floatingInput">End Date</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</section>



<?= $this->include('Templates/footer'); ?>