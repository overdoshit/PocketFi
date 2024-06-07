<?= $this->include('Templates/header'); ?>

<style>
    .title-row {
        font-size: 14px;
    }

    .btn-more {
        font-size: 10px;
        margin-top: 15px;
    }

    table,
    tr,
    td {
        border: none;
        padding: 0;
    }

    td {
        width: 132px;
    }

    @media (max-width: 992px) {
        td {
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
                    <h6 class="fw-bold text-start">INDONESIA HARIAN UNLIMITED FUP 8GB/DAYS IDR 40.000/HARI (MINIMUM RENT 3 HARI)</h6>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td rowspan="2" style="vertical-align : middle;">
                                    <img src="https://sandbox.pinjamwifi.com/wp-content/uploads/2023/05/20200327123731_432.png" style="width: 115px; box-shadow: 0px 4px 8px 0px #0000004D;">
                                </td>
                                <td>
                                    <div class="title-row">Country</div>
                                    <p class="fw-bold">Indonesia</p>
                                </td>
                                <td>
                                    <div class="title-row">Data Usage</div>
                                    <p class="fw-bold">DAILY FUP 8 GB /DAYS</p>
                                </td>
                                <td>
                                    <div class="title-row">Battery (Hour)</div>
                                    <p class="fw-bold">12+</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="title-row">No. of shared devices</div>
                                    <p class="fw-bold">8</p>
                                </td>
                                <td>
                                    <div class="title-row">Deposit</div>
                                    <p class="fw-bold">IDR 500.000</p>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-more">More details &raquo;</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="fw-bold my-2">IDR 40.000/day</h5>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Check out</button>
                </div>
            </div>
        </div>

        <div class="product col">
            <div class="card mb-5 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                    <h6 class="fw-bold text-start">INDONESIA HARIAN UNLIMITED FUP 8GB/DAYS IDR 40.000/HARI (MINIMUM RENT 3 HARI)</h6>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td rowspan="2" style="vertical-align : middle;">
                                    <img src="https://sandbox.pinjamwifi.com/wp-content/uploads/2023/05/20200327123731_432.png" style="width: 115px; box-shadow: 0px 4px 8px 0px #0000004D;">
                                </td>
                                <td>
                                    <div class="title-row">Country</div>
                                    <p class="fw-bold">Indonesia</p>
                                </td>
                                <td>
                                    <div class="title-row">Data Usage</div>
                                    <p class="fw-bold">DAILY FUP 8 GB /DAYS</p>
                                </td>
                                <td>
                                    <div class="title-row">Battery (Hour)</div>
                                    <p class="fw-bold">12+</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="title-row">No. of shared devices</div>
                                    <p class="fw-bold">8</p>
                                </td>
                                <td>
                                    <div class="title-row">Deposit</div>
                                    <p class="fw-bold">IDR 500.000</p>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-more">More details &raquo;</button>
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

<?= $this->include('Templates/footer'); ?>