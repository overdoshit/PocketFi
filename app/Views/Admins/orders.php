<?= $this->include('Templates/header'); ?>
<?= $this->include('Templates/sidebar'); ?>

<style>
    .text-truncate-ellipsis {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        max-width: 150px;
    }
</style>

<?php
function getBadgeClass($status)
{
    $statusBadgeMap = [
        'Canceled' => 'badge-light-danger',
        'Expired' => 'badge-light-danger',
        'Waiting for Payment' => 'badge-light-secondary',
        'Deactivated' => 'badge-light-secondary',
        'Waiting for Pick Up' => 'badge-light-info',
        'Shipping' => 'badge-light-info',
        'In Return' => 'badge-light-info',
        'Arrived' => 'badge-light-primary',
        'Returned' => 'badge-light-primary',
        'Activated' => 'badge-light-success',
        'Completed' => 'badge-light-success',
        'Waiting for Return' => 'badge-light-warning',
        'Rated' => 'badge-light-warning'
    ];
    return $statusBadgeMap[$status] ?? 'badge-light-secondary';
}
?>


<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid " id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">

            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-fluid ">

                <!--begin::Orders-->
                <div class="card card-flush h-xl-100 mb-5">

                    <!--begin::Card header-->
                    <div class="card-header pt-7 justify-content-end">
                        <!--begin::Actions-->
                        <div class="card-toolbar">
                            <!--begin::Filters-->
                            <div class=" d-flex flex-stack flex-wrap gap-4">
                                <!--begin::Destination-->
                                <div class="d-flex align-items-center fw-bold">
                                    <!--begin::Label-->
                                    <div class="text-gray-500 fs-7 me-2">Category</div>
                                    <!--end::Label-->

                                    <!--begin::Select-->
                                    <select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                        <option></option>
                                        <option value="Show All" selected>Show All</option>
                                        <option value="a">Category A</option>
                                        <option value="b">Category B</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Destination-->

                                <!--begin::Status-->
                                <div class="d-flex align-items-center fw-bold">
                                    <!--begin::Label-->
                                    <div class="text-gray-500 fs-7 me-2">Status</div>
                                    <!--end::Label-->

                                    <!--begin::Select-->
                                    <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
                                        <option></option>
                                        <option value="Show All" selected>Show All</option>
                                        <option value="Shipped">Shipped</option>
                                        <option value="Confirmed">Confirmed</option>
                                        <option value="Rejected">Rejected</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Status-->

                                <!--begin::Search-->
                                <div class="position-relative my-1">
                                    <i class="fa-regular fa-magnifying-glass fs-2 position-absolute top-50 translate-middle-y ms-4"></i> <input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Filters-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-2">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-100px">Order ID</th>
                                        <th class="text-center min-w-100px">Order Date</th>
                                        <th class="text-center min-w-125px">Customer</th>
                                        <th class="text-center min-w-125px">Product</th>
                                        <th class="text-center min-w-100px">Total</th>
                                        <th class="text-center min-w-50px">Status</th>
                                        <th class="text-end min-w-50px">Action</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->

                                <!--begin::Table body-->
                                <tbody class="fw-bold text-gray-600">
                                    <?php foreach ($orders as $order) : ?>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-800 text-hover-primary">#<?= $order->idOrder ?></a>
                                            </td>
                                            <td class="text-center">
                                                <?= date('M d, Y', strtotime($order->createdAt)) ?>
                                            </td>
                                            <td class="text-center">
                                                <?= $order->name ?>
                                            </td>
                                            <td class="text-center text-truncate-ellipsis">
                                                <?= $order->productName ?>
                                            </td>
                                            <td class="text-center">
                                                IDR <?= number_format($order->rentCost, 0, ',', '.') ?>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge py-3 px-4 fs-7 <?= getBadgeClass($order->status) ?>"><?= $order->status ?></span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Actions
                                                    <i class="fa-regular fa-chevron-down ms-2"></i>
                                                </a>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            <i class="fa-solid fa-pen-to-square me-2"></i>
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3 btn-delete" data-id="<?= $order->idOrder ?>">
                                                            <i class="fa-solid fa-trash me-2"></i>
                                                            Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Orders-->

            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->

    <?= $this->include('Templates/footer'); ?>