<?= $this->include('Templates/header'); ?>
<?= $this->include('Templates/sidebar'); ?>

<style>
    /* Remove increment and decrement on input number */
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* input[type=number] {
        -moz-appearance: textfield;
    } */
</style>

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid " id="kt_app_main">

    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">

            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-fluid ">
                <!--begin::Form-->
                <form id="add-product" class="form d-flex flex-column flex-lg-row" action="<?= base_url('/product/add') ?>" method="POST">
                    <!--begin::Aside column-->
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">

                        <!--begin::Category-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title required">
                                    <h2>Category</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Select-->
                                <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="category" name="category" required>
                                    <option></option>
                                    <?php foreach ($categories as $category) : ?>
                                        <option value="<?= $category->category ?>"><?= $category->category ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <!--end::Select-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set the product category.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Category-->

                        <!--begin::Country-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title required">
                                    <h2>Country</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Select2-->
                                <select class="form-select mb-2" data-control="select2" data-placeholder="Select an option" id="country" name="country" required>
                                    <option></option>
                                    <?php foreach ($countries as $country) : ?>
                                        <option value="<?= $country->country ?>"><?= $country->country ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <!--end::Select2-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7 mb-7">Set the product country.</div>
                                <!--end::Description-->

                                <!--begin::Button-->
                                <a href="/category/add" class="btn btn-light-primary btn-sm">
                                    <i class="fa-regular fa-plus fs-3"></i> Add new country
                                </a>
                                <!--end::Button-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Country-->

                        <!--begin::Package Type-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title required">
                                    <h2>Package Type</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Select3-->
                                <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="packageType" name="packageType" required>
                                    <option></option>
                                    <?php foreach ($packagetypes as $packagetype) : ?>
                                        <option value="<?= $packagetype->packageType ?>"><?= $packagetype->packageType ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <!--end::Select3-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7 mb-7">Set the product package type.</div>
                                <!--end::Description-->

                                <!--begin::Button-->
                                <a href="/packagetype/add" class="btn btn-light-primary btn-sm">
                                    <i class="fa-regular fa-plus fs-3"></i> Add new package type
                                </a>
                                <!--end::Button-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Package Type-->

                    </div>
                    <!--end::Aside column-->

                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <div class="d-flex flex-column gap-7 gap-lg-10">

                                <!--begin::Pricing-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Pricing</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">

                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <div class="d-flex gap-3">
                                                <label class="required form-label w-50">Daily Price</label>
                                                <label class="required form-label w-50">Deposit</label>
                                            </div>
                                            <div class="d-flex gap-3">
                                                <input type="number" name="dailyPrice" class="form-control mb-2" placeholder="Daily Price" required>
                                                <input type="number" name="deposit" class="form-control mb-2" placeholder="Deposit" required>
                                            </div>
                                            <div class="d-flex gap-3">
                                                <div class="text-muted fs-7 w-50">Set the product daily price.</div>
                                                <div class="text-muted fs-7 w-50">Set the product deposit price.</div>
                                            </div>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <div class="d-flex gap-3">
                                                <label class="required form-label w-50">Stock</label>
                                                <label class="required form-label w-50">Minimum Rental (Day)</label>
                                            </div>
                                            <div class="d-flex gap-3">
                                                <input type="number" name="stock" class="form-control mb-2" placeholder="Stock" required>
                                                <input type="number" name="minimumRentDays" class="form-control mb-2" placeholder="Minimum Rent Days" required>
                                            </div>
                                            <div class="d-flex gap-3">
                                                <div class="text-muted fs-7 w-50">Set the product stock.</div>
                                                <div class="text-muted fs-7 w-50">Set the product minimum rental days.</div>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Pricing-->

                                <!--begin::Specification options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Specification</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Data Usage</label>
                                            <input type="text" name="dataUsage" class="form-control mb-2" placeholder="Ex: FUP 32 GB" required>
                                            <div class="text-muted fs-7">Set the specification product data usage.</div>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <div class="d-flex gap-3">
                                                <label class="required form-label w-50">Max Download Speed (Mbps)</label>
                                                <label class="required form-label w-50">Max Upload Speed (Mbps)</label>
                                            </div>
                                            <div class="d-flex gap-3">
                                                <input type="number" name="maxDownloadSpeed" class="form-control mb-2" placeholder="Max Download Speed" step="any" required>
                                                <input type="number" name="maxUploadSpeed" class="form-control mb-2" placeholder="Max Upload Speed" step="any" required>
                                            </div>
                                            <div class="d-flex gap-3">
                                                <div class="text-muted fs-7 w-50">Set the specification product max download speed.</div>
                                                <div class="text-muted fs-7 w-50">Set the specification product max upload speed.</div>
                                            </div>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <div class="d-flex gap-3">
                                                <label class="required form-label w-50">Battery (Hour)</label>
                                                <label class="required form-label w-50">Shared Devices</label>
                                            </div>
                                            <div class="d-flex gap-3">
                                                <input type="number" name="batteryHours" class="form-control mb-2" placeholder="Battery" required>
                                                <input type="number" name="sharedDevices" class="form-control mb-2" placeholder="Shared Devices" required>
                                            </div>
                                            <div class="d-flex gap-3">
                                                <div class="text-muted fs-7 w-50">Set the specification product battery hours.</div>
                                                <div class="text-muted fs-7 w-50">Set the specification product max shared devices.</div>
                                            </div>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Network</label>
                                            <input type="text" name="network" class="form-control mb-2" placeholder="Ex: Telkomsel" required>
                                            <div class="text-muted fs-7">Set the specification product network.</div>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div>
                                            <!--begin::Label-->
                                            <label class="form-label">Description</label>
                                            <!--end::Label-->

                                            <!--begin::Editor-->
                                            <div id="quill-editor" class="min-h-200px mb-2"></div>
                                            <input type="hidden" id="notes" name="notes">
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    var quill = new Quill('#quill-editor', {
                                                        theme: 'snow'
                                                    });

                                                    quill.on('text-change', function() {
                                                        var html = quill.root.innerHTML;
                                                        document.getElementById('notes').value = html;
                                                    });
                                                });
                                            </script>
                                            <!--end::Editor-->

                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set up product descriptions for Users to get more information.</div>
                                            <!--end::Description-->
                                        </div>

                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Specification options-->

                            </div>
                        </div>
                        <!--end::Tab content-->
                        <div class="d-flex justify-content-end">
                            <a href="/products" class="btn btn-light me-5">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                    <!--end::Main column-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->

    </div>
    <!--end::Content wrapper-->

    <?= $this->include('Templates/footer'); ?>