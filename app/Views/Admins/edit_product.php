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
                <form id="edit-product" class="form d-flex flex-column flex-lg-row" action="<?= base_url('/product/update') ?>" method="POST">
                    <input type="hidden" name="idProduct" value="<?= $product->idProduct ?>">
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
                                        <option value="<?= $category->category ?>" <?= $product->category == $category->category ? 'selected' : '' ?>><?= $category->category ?></option>
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
                                        <option value="<?= $country->country ?>" <?= $product->country == strtoupper($country->country) ? 'selected' : '' ?>><?= $country->country ?></option>
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
                                        <option value="<?= $packagetype->packageType ?>" <?= $product->packageType == strtoupper($packagetype->packageType) ? 'selected' : '' ?>><?= $packagetype->packageType ?></option>
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
                                                <input type="number" name="dailyPrice" class="form-control mb-2" value="<?= $product->dailyPrice ?>" placeholder="Daily Price" required>
                                                <input type="number" name="deposit" class="form-control mb-2" value="<?= $product->deposit ?>" placeholder="Deposit" required>
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
                                                <input type="number" name="stock" class="form-control mb-2" value="<?= $product->stock ?>" placeholder="Stock" required>
                                                <input type="number" name="minimumRentDays" class="form-control mb-2" value="<?= $product->minimumRentDays ?>" placeholder="Minimum Rent Days" required>
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
                                            <input type="text" name="dataUsage" class="form-control mb-2" value="<?= $product->dataUsage ?>" placeholder="Ex: FUP 32 GB" required>
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
                                                <input type="number" name="maxDownloadSpeed" class="form-control mb-2" value="<?= $product->maxDownloadSpeed ?>" placeholder="Ex: 32,5" step="any" required>
                                                <input type="number" name="maxUploadSpeed" class="form-control mb-2" value="<?= $product->maxUploadSpeed ?>" placeholder="Ex: 32,5" step="any" required>
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
                                                <input type="number" name="batteryHours" class="form-control mb-2" value="<?= $product->batteryHours ?>" placeholder="Battery" required>
                                                <input type="number" name="sharedDevices" class="form-control mb-2" value="<?= $product->sharedDevices ?>" placeholder="Shared Devices" required>
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
                                            <input type="text" name="network" class="form-control mb-2" value="<?= $product->network ?>" placeholder="Ex: Telkomsel" required>
                                            <div class="text-muted fs-7">Set the specification product network.</div>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <label class="form-label">Description</label>

                                            <!--begin::Editor-->
                                            <div id="quill-editor" class="min-h-200px"></div>
                                            <input type="hidden" id="notes" name="notes" value="<?= htmlspecialchars($product->notes) ?>">
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    var quill = new Quill('#quill-editor', {
                                                        theme: 'snow'
                                                    });

                                                    var initialValue = '<?= addslashes($product->notes) ?>';
                                                    quill.clipboard.dangerouslyPasteHTML(initialValue);

                                                    // Set initial value to hidden input
                                                    document.getElementById('notes').value = quill.root.innerHTML;

                                                    // Update hidden input on text change
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

                                        <!--begin::Input group-->
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <label class="col-4 col-form-label fw-semibold fs-6">Best Seller</label>
                                            <input class="form-check-input w-45px h-30px" type="checkbox" name="bestSeller" id="bestSeller" value="Y" <?= $product->bestSeller == 'Y' ? 'checked' : '' ?>>
                                        </div>
                                        <!--begin::Input group-->

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