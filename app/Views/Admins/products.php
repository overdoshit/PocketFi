<?= $this->include('Templates/header'); ?>
<?= $this->include('Templates/sidebar'); ?>

<style>
    .flag-product {
        border: 1px solid var(--bs-card-border-color);
    }


    .text-truncate-ellipsis {
        display: block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        max-width: 105px;
    }
</style>

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid " id="kt_app_main">

    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">

            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-fluid ">
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="fa-regular fa-magnifying-glass fs-3 position-absolute ms-4"></i> <input type="text" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <!--begin::Add product-->
                            <a href="/product/add" class="btn btn-primary">
                                Add Product
                            </a>
                            <!--end::Add product-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5">
                                <thead>
                                    <tr class="text-center text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-200px">Product</th>
                                        <th class="min-w-100px">Qty</th>
                                        <th class="min-w-100px">Type</th>
                                        <th class="min-w-100px">Data Usage</th>
                                        <th class="min-w-100px">Daily Price</th>
                                        <th class="min-w-100px">Min. Rent</th>
                                        <th class="min-w-100px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    <?php foreach ($products as $product) : ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <?php
                                                    $linkProduct = '';
                                                    if ($product->category == "MIFI Indonesia") {
                                                        $linkProduct = "http://pocketfi.test/mobile-wifi/indonesia#product-{$product->idProduct}";
                                                    } elseif ($product->category == "MIFI International") {
                                                        $linkProduct = "http://pocketfi.test/mobile-wifi/international#product-{$product->idProduct}";
                                                    } elseif ($product->category == "SIM") {
                                                        $linkProduct = "http://pocketfi.test/sim-card/#product-{$product->idProduct}";
                                                    }
                                                    ?>
                                                    <a href="<?= $linkProduct ?>" class="symbol symbol-50px">
                                                        <span class="symbol-label flag-product" style="background-image:url(<?= $product->countryFlagUrl ?>); width: 70px; border-radius: 5px"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="<?= $linkProduct ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold text-truncate-ellipsis">
                                                            <?= $product->country . ' ' . $product->packageType . ' ' . $product->dataUsage . ' IDR ' . number_format($product->dailyPrice, 0, ',', '.') . '/DAY (MINIMUM RENT ' . $product->minimumRentDays . ' DAYS)' ?>
                                                        </a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($product->stock == 0) : ?>
                                                    <span class="badge badge-light-danger">Out of stock</span>
                                                <?php elseif ($product->stock <= 2) : ?>
                                                    <span class="badge badge-light-warning">Low stock</span>
                                                <?php endif; ?>
                                                <div class="fw-bold"><?= $product->stock ?></div>
                                            </td>
                                            <td class="text-center">
                                                <?= $product->packageType ?>
                                            </td>
                                            <td class="text-center">
                                                <?= $product->dataUsage ?>
                                            </td>
                                            <td class="text-center">
                                                <?= 'IDR ' . number_format($product->dailyPrice, 0, ',', '.') ?>
                                            </td>
                                            <td class="text-center">
                                                <?= $product->minimumRentDays . ' DAYS' ?>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Actions
                                                    <i class="fa-regular fa-chevron-down ms-2"></i>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="/product/edit/<?= $product->idProduct ?>" class="menu-link px-3">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="/product/delete/<?= $product->idProduct ?>" class="menu-link px-3 btn-delete" data-id="<?= $product->idProduct ?>">
                                                            Delete
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->

    </div>
    <!--end::Content wrapper-->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var deleteButtons = document.querySelectorAll('.btn-delete');
            var modal = new bootstrap.Modal(document.getElementById('deleteProductModal'));
            var confirmDelete = document.getElementById('confirmDelete');

            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    var productId = this.getAttribute('data-id');
                    var deleteUrl = "<?= base_url('/product/delete/') ?>" + productId;

                    confirmDelete.setAttribute('href', deleteUrl);
                    modal.show();
                });
            });
        });
    </script>

    <?= $this->include('Templates/modal_delete_product'); ?>
    <?= $this->include('Templates/footer'); ?>