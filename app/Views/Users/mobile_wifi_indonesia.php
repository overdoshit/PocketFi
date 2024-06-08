<?= $this->include('Templates/header'); ?>

<style>
    .title-row {
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
        <div class="product col">
            <div class="card mb-5 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                    <h1 class="fw-bold text-start fs-6">INDONESIA HARIAN UNLIMITED FUP 8GB/DAYS IDR 40.000/HARI (MINIMUM RENT 3 HARI)</h1>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="dataProduct" rowspan="2" style="vertical-align : middle;">
                                    <img src="https://sandbox.pinjamwifi.com/wp-content/uploads/2023/05/20200327123731_432.png" width="115px" style="box-shadow: 0px 4px 8px 0px #0000004D;">
                                </td>
                                <td class="dataProduct">
                                    <div class="title-row">Country</div>
                                    <p class="fw-bold">Indonesia</p>
                                </td>
                                <td class="dataProduct">
                                    <div class="title-row">Data Usage</div>
                                    <p class="fw-bold">DAILY FUP 8 GB /DAYS</p>
                                </td>
                                <td class="dataProduct">
                                    <div class="title-row">Battery (Hour)</div>
                                    <p class="fw-bold">12+</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="dataProduct">
                                    <div class="title-row">No. of shared devices</div>
                                    <p class="fw-bold">8</p>
                                </td>
                                <td class="dataProduct">
                                    <div class="title-row">Deposit</div>
                                    <p class="fw-bold">IDR 500.000</p>
                                </td>
                                <td class="dataProduct">
                                    <button type="button" class="btn btn-warning btn-more" data-bs-toggle="modal" data-bs-target="#detailModal">More details &raquo;</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="fw-bold my-2">IDR 40.000/day</h5>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Check out</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Details Product Modal -->
<div class="modal fade detailModal" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-4 mx-2 border-bottom-1">
                <h1 class="fw-bold mb-0 fs-4" id="detailModalLabel">INDONESIA HARIAN UNLIMITED FUP 8GB/DAYS IDR 40.000/HARI (MINIMUM RENT 3 HARI)</h1>
                <button type="button" class="btn-close mx-1" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="https://pinjamwifi.com/wp-content/uploads/2023/04/pocket-product.png" style="width: 100%">
                    </div>
                    <div class="col-md-7">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <label>Country</label>
                                        <p class="fw-bold mb-3">
                                            <img src="https://sandbox.pinjamwifi.com/wp-content/uploads/2023/05/20200327123731_432.png" width="20px" style="box-shadow: 0px 2px 4px 0px #0000004D;"></span>
                                            Indonesia
                                        </p>
                                    </td>
                                    <td>
                                        <label>Battery (Hour)</label>
                                        <p class="fw-bold mb-3">12+</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>No. of shared devices</label>
                                        <p class="fw-bold mb-3">8</p>
                                    </td>
                                    <td>
                                        <label>Deposit</label>
                                        <p class="fw-bold mb-3">IDR 500000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Max Download Speed</label>
                                        <p class="fw-bold mb-3">35 Mbps</p>
                                    </td>
                                    <td>
                                        <label>Max Upload Speed</label>
                                        <p class="fw-bold mb-3">15 Mbps</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Data Usage</label>
                                        <p class="fw-bold mb-3">DAILY UNLIMITED FUP 8 GB /DAYS</p>
                                    </td>
                                    <td>
                                        <label>Network</label>
                                        <p class="fw-bold mb-3">Multi-operator</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 notes">
                        <h5>Notes</h5>
                        <ul>
                            <li>Wifi can be shared up to 8 users.</li>
                            <li>12-14 hours battery life.</li>
                            <li>Range of share wifi up to 10 meters.</li>
                            <li>Required deposit IDR 500,000/modem.</li>
                            <li>Deposit is only paid once at the beginning of the reservation.</li>
                            <li>The extension of the rental period is enough to pay the rental price of the selected package.</li>
                            <li>Prices do not include shipping and return costs.</li>
                            <li>The wifi package is included with a wifi pouch, adapter &amp; USB charger.</li>
                            <li>Unlimited Fup quota of 8 GB/day which can be used to access all applications.</li>
                            <li>Can be used for all devices.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('Templates/footer'); ?>