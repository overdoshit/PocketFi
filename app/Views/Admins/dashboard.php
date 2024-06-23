<?= $this->include('Templates/header'); ?>
<?= $this->include('Templates/sidebar'); ?>

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid " id="kt_app_main">

    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">

            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-fluid ">
                <!--begin::Row-->
                <div class="row gx-5 gx-xl-10 gy-xl-10 mb-xl-10">
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-5">

                        <!--begin::Card widget 4-->
                        <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Currency-->
                                        <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">$</span>
                                        <!--end::Currency-->

                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">69,700</span>
                                        <!--end::Amount-->

                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Subtitle-->
                                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Expected Earnings</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-2 pb-4 d-flex align-items-center">
                                <!--begin::Chart-->
                                <div class="d-flex flex-center me-5 pt-2">
                                    <div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11">
                                    </div>
                                </div>
                                <!--end::Chart-->

                                <!--begin::Labels-->
                                <div class="d-flex flex-column content-justify-center w-100">
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
                                        <!--end::Bullet-->

                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4">Mifi International</div>
                                        <!--end::Label-->

                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center my-3">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                                        <!--end::Bullet-->

                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4">Mifi Indonesia</div>
                                        <!--end::Label-->

                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                        <!--end::Bullet-->

                                        <!--begin::Label-->
                                        <div class="text-gray-500 flex-grow-1 me-4">SIM</div>
                                        <!--end::Label-->

                                        <!--begin::Stats-->
                                        <div class=" fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 4-->

                        <!--begin::Card widget 5-->
                        <div class="card card-flush h-md-50 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">1,836</span>
                                        <!--end::Amount-->

                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Subtitle-->
                                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Orders This Month</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                        <span class="fw-bolder fs-6 text-gray-900">1,048 to Goal</span>
                                        <span class="fw-bold fs-6 text-gray-500">62%</span>
                                    </div>

                                    <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                        <div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 5-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-5">
                        <!--begin::Card widget 6-->
                        <div class="card card-flush  h-md-50 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Currency-->
                                        <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">$</span>
                                        <!--end::Currency-->

                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">2,420</span>
                                        <!--end::Amount-->

                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Subtitle-->
                                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Average Daily Sales</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end px-0 pb-0">
                                <!--begin::Chart-->
                                <div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 6-->


                        <!--begin::Card widget 7-->
                        <div class="card card-flush h-md-50 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">6.3k</span>
                                    <!--end::Amount-->

                                    <!--begin::Subtitle-->
                                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Customers</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-column justify-content-end pe-0">

                                <!--begin::Users group-->
                                <div class="symbol-group symbol-hover flex-nowrap">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                        <img alt="Pic" src="../assets/media/avatars/300-11.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                        <img alt="Pic" src="../assets/media/avatars/300-2.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                        <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                        <img alt="Pic" src="../assets/media/avatars/300-12.jpg" />
                                    </div>
                                    <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                        <span class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+42</span>
                                    </a>
                                </div>
                                <!--end::Users group-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 7-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
                        <!--begin::Chart widget 3-->
                        <div class="card card-flush overflow-hidden h-md-100">
                            <!--begin::Header-->
                            <div class="card-header py-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-900">Sales This Months</span>
                                    <span class="text-gray-500 mt-1 fw-semibold fs-6">Users from all channels</span>
                                </h3>
                                <!--end::Title-->

                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">

                                        <i class="fa-regular fa-ellipsis fs-1"></i>
                                    </button>


                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                New Ticket
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                New Customer
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Admin Group
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Staff Group
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Member Group
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                New Contact
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary  btn-sm px-4" href="#">
                                                    Generate Reports
                                                </a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->

                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Card body-->
                            <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                                <!--begin::Statistics-->
                                <div class="px-9 mb-5">
                                    <!--begin::Statistics-->
                                    <div class="d-flex mb-2">
                                        <span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">14,094</span>
                                    </div>
                                    <!--end::Statistics-->

                                    <!--begin::Description-->
                                    <span class="fs-6 fw-semibold text-gray-500">Another $48,346 to Goal</span>
                                    <!--end::Description-->
                                </div>
                                <!--end::Statistics-->

                                <!--begin::Chart-->
                                <div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Chart widget 3-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

                <!--begin::Table Widget 4-->
                <div class="card card-flush h-xl-100 mb-5">
                    <!--begin::Card header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Product Orders</span>
                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Avg. 57 orders per day</span>
                        </h3>
                        <!--end::Title-->

                        <!--begin::Actions-->
                        <div class="card-toolbar">
                            <!--begin::Filters-->
                            <div class="d-flex flex-stack flex-wrap gap-4">
                                <!--begin::Destination-->
                                <div class="d-flex align-items-center fw-bold">
                                    <!--begin::Label-->
                                    <div class="text-gray-500 fs-7 me-2">Cateogry</div>
                                    <!--end::Label-->

                                    <!--begin::Select-->
                                    <select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                        <option></option>
                                        <option value="Show All" selected>Show All</option>
                                        <option value="a">Category A</option>
                                        <option value="b">Category A</option>
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
                                        <th class="text-end min-w-100px">Created</th>
                                        <th class="text-end min-w-125px">Customer</th>
                                        <th class="text-end min-w-100px">Total</th>
                                        <th class="text-end min-w-100px">Profit</th>
                                        <th class="text-end min-w-50px">Status</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->

                                <!--begin::Table body-->
                                <tbody class="fw-bold text-gray-600">
                                    <tr>
                                        <td>
                                            <a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGY-346</a>
                                        </td>

                                        <td class="text-end">
                                            9 min ago
                                        </td>

                                        <td class="text-end">
                                            <a href="#" class="text-gray-600 text-hover-primary">Albert Flores</a>
                                        </td>

                                        <td class="text-end">
                                            $630.00 </td>

                                        <td class="text-end">
                                            <span class="text-gray-800 fw-bolder">$86.70</span>
                                        </td>

                                        <td class="text-end">
                                            <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#YHD-047</a>
                                        </td>

                                        <td class="text-end">
                                            52 min ago
                                        </td>

                                        <td class="text-end">
                                            <a href="#" class="text-gray-600 text-hover-primary">Jenny Wilson</a>
                                        </td>

                                        <td class="text-end">
                                            $25.00 </td>

                                        <td class="text-end">
                                            <span class="text-gray-800 fw-bolder">$4.20</span>
                                        </td>

                                        <td class="text-end">
                                            <span class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SRR-678</a>
                                        </td>

                                        <td class="text-end">
                                            1 hour ago
                                        </td>

                                        <td class="text-end">
                                            <a href="#" class="text-gray-600 text-hover-primary">Robert Fox</a>
                                        </td>

                                        <td class="text-end">
                                            $1,630.00 </td>

                                        <td class="text-end">
                                            <span class="text-gray-800 fw-bolder">$203.90</span>
                                        </td>

                                        <td class="text-end">
                                            <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#PXF-534</a>
                                        </td>

                                        <td class="text-end">
                                            3 hour ago
                                        </td>

                                        <td class="text-end">
                                            <a href="#" class="text-gray-600 text-hover-primary">Cody Fisher</a>
                                        </td>

                                        <td class="text-end">
                                            $119.00 </td>

                                        <td class="text-end">
                                            <span class="text-gray-800 fw-bolder">$12.00</span>
                                        </td>

                                        <td class="text-end">
                                            <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGD-249</a>
                                        </td>

                                        <td class="text-end">
                                            2 day ago
                                        </td>

                                        <td class="text-end">
                                            <a href="#" class="text-gray-600 text-hover-primary">Arlene McCoy</a>
                                        </td>

                                        <td class="text-end">
                                            $660.00 </td>

                                        <td class="text-end">
                                            <span class="text-gray-800 fw-bolder">$52.26</span>
                                        </td>

                                        <td class="text-end">
                                            <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-035</a>
                                        </td>

                                        <td class="text-end">
                                            2 day ago
                                        </td>

                                        <td class="text-end">
                                            <a href="#" class="text-gray-600 text-hover-primary">Eleanor Pena</a>
                                        </td>

                                        <td class="text-end">
                                            $290.00 </td>

                                        <td class="text-end">
                                            <span class="text-gray-800 fw-bolder">$29.00</span>
                                        </td>

                                        <td class="text-end">
                                            <span class="badge py-3 px-4 fs-7 badge-light-danger">Rejected</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-567</a>
                                        </td>

                                        <td class="text-end">
                                            7 min ago
                                        </td>

                                        <td class="text-end">
                                            <a href="#" class="text-gray-600 text-hover-primary">Dan Wilson</a>
                                        </td>

                                        <td class="text-end">
                                            $590.00 </td>

                                        <td class="text-end">
                                            <span class="text-gray-800 fw-bolder">$50.00</span>
                                        </td>

                                        <td class="text-end">
                                            <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
                <!--end::Table Widget 4-->

                <!--begin::Table Widget 5-->
                <div class="card card-flush h-xl-100 mb-xl-10 mb-5">
                    <!--begin::Card header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900">Stock Report</span>
                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 2,356 Items in the Stock</span>
                        </h3>
                        <!--end::Title-->

                        <!--begin::Actions-->
                        <div class="card-toolbar">
                            <!--begin::Filters-->
                            <div class="d-flex flex-stack flex-wrap gap-4">
                                <!--begin::Destination-->
                                <div class="d-flex align-items-center fw-bold">
                                    <!--begin::Label-->
                                    <div class="text-muted fs-7 me-2">Cateogry</div>
                                    <!--end::Label-->

                                    <!--begin::Select-->
                                    <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
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
                                    <div class="text-muted fs-7 me-2">Status</div>
                                    <!--end::Label-->

                                    <!--begin::Select-->
                                    <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
                                        <option></option>
                                        <option value="Show All" selected>Show All</option>
                                        <option value="In Stock">In Stock</option>
                                        <option value="Out of Stock">Out of Stock</option>
                                        <option value="Low Stock">Low Stock</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Status-->

                                <!--begin::Search-->
                                <a href="../apps/ecommerce/catalog/products.html" class="btn btn-light btn-sm">View Stock</a>
                                <!--end::Search-->
                            </div>
                            <!--begin::Filters-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-150px">Item</th>
                                    <th class="text-end pe-3 min-w-100px">Product ID</th>
                                    <th class="text-end pe-3 min-w-150px">Date Added</th>
                                    <th class="text-end pe-3 min-w-100px">Price</th>
                                    <th class="text-end pe-3 min-w-100px">Status</th>
                                    <th class="text-end pe-0 min-w-75px">Qty</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Macbook Air M1</a>
                                    </td>
                                    <!--end::Item-->

                                    <!--begin::Product ID-->
                                    <td class="text-end">
                                        #XGY-356 </td>
                                    <!--end::Product ID-->

                                    <!--begin::Date added-->
                                    <td class="text-end">
                                        02 Apr, 2024 </td>
                                    <!--end::Date added-->

                                    <!--begin::Price-->
                                    <td class="text-end">
                                        $1,230 </td>
                                    <!--end::Price-->

                                    <!--begin::Status-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                    </td>
                                    <!--end::Status-->

                                    <!--begin::Qty-->
                                    <td class="text-end" data-order="58">
                                        <span class="text-gray-900 fw-bold">58 PCS</span>
                                    </td>
                                    <!--end::Qty-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Surface Laptop 4</a>
                                    </td>
                                    <!--end::Item-->

                                    <!--begin::Product ID-->
                                    <td class="text-end">
                                        #YHD-047 </td>
                                    <!--end::Product ID-->

                                    <!--begin::Date added-->
                                    <td class="text-end">
                                        01 Apr, 2024 </td>
                                    <!--end::Date added-->

                                    <!--begin::Price-->
                                    <td class="text-end">
                                        $1,060 </td>
                                    <!--end::Price-->

                                    <!--begin::Status-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                    </td>
                                    <!--end::Status-->

                                    <!--begin::Qty-->
                                    <td class="text-end" data-order="0">
                                        <span class="text-gray-900 fw-bold">0 PCS</span>
                                    </td>
                                    <!--end::Qty-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Logitech MX 250</a>
                                    </td>
                                    <!--end::Item-->

                                    <!--begin::Product ID-->
                                    <td class="text-end">
                                        #SRR-678 </td>
                                    <!--end::Product ID-->

                                    <!--begin::Date added-->
                                    <td class="text-end">
                                        24 Mar, 2024 </td>
                                    <!--end::Date added-->

                                    <!--begin::Price-->
                                    <td class="text-end">
                                        $64 </td>
                                    <!--end::Price-->

                                    <!--begin::Status-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                    </td>
                                    <!--end::Status-->

                                    <!--begin::Qty-->
                                    <td class="text-end" data-order="290">
                                        <span class="text-gray-900 fw-bold">290 PCS</span>
                                    </td>
                                    <!--end::Qty-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">AudioEngine HD3</a>
                                    </td>
                                    <!--end::Item-->

                                    <!--begin::Product ID-->
                                    <td class="text-end">
                                        #PXF-578 </td>
                                    <!--end::Product ID-->

                                    <!--begin::Date added-->
                                    <td class="text-end">
                                        24 Mar, 2024 </td>
                                    <!--end::Date added-->

                                    <!--begin::Price-->
                                    <td class="text-end">
                                        $1,060 </td>
                                    <!--end::Price-->

                                    <!--begin::Status-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                    </td>
                                    <!--end::Status-->

                                    <!--begin::Qty-->
                                    <td class="text-end" data-order="46">
                                        <span class="text-gray-900 fw-bold">46 PCS</span>
                                    </td>
                                    <!--end::Qty-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">HP Hyper LTR</a>
                                    </td>
                                    <!--end::Item-->

                                    <!--begin::Product ID-->
                                    <td class="text-end">
                                        #PXF-778 </td>
                                    <!--end::Product ID-->

                                    <!--begin::Date added-->
                                    <td class="text-end">
                                        16 Jan, 2024 </td>
                                    <!--end::Date added-->

                                    <!--begin::Price-->
                                    <td class="text-end">
                                        $4500 </td>
                                    <!--end::Price-->

                                    <!--begin::Status-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                    </td>
                                    <!--end::Status-->

                                    <!--begin::Qty-->
                                    <td class="text-end" data-order="78">
                                        <span class="text-gray-900 fw-bold">78 PCS</span>
                                    </td>
                                    <!--end::Qty-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Dell 32 UltraSharp</a>
                                    </td>
                                    <!--end::Item-->

                                    <!--begin::Product ID-->
                                    <td class="text-end">
                                        #XGY-356 </td>
                                    <!--end::Product ID-->

                                    <!--begin::Date added-->
                                    <td class="text-end">
                                        22 Dec, 2024 </td>
                                    <!--end::Date added-->

                                    <!--begin::Price-->
                                    <td class="text-end">
                                        $1,060 </td>
                                    <!--end::Price-->

                                    <!--begin::Status-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">Low Stock</span>
                                    </td>
                                    <!--end::Status-->

                                    <!--begin::Qty-->
                                    <td class="text-end" data-order="8">
                                        <span class="text-gray-900 fw-bold">8 PCS</span>
                                    </td>
                                    <!--end::Qty-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Google Pixel 6 Pro</a>
                                    </td>
                                    <!--end::Item-->

                                    <!--begin::Product ID-->
                                    <td class="text-end">
                                        #XVR-425 </td>
                                    <!--end::Product ID-->

                                    <!--begin::Date added-->
                                    <td class="text-end">
                                        27 Dec, 2024 </td>
                                    <!--end::Date added-->

                                    <!--begin::Price-->
                                    <td class="text-end">
                                        $1,060 </td>
                                    <!--end::Price-->

                                    <!--begin::Status-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                    </td>
                                    <!--end::Status-->

                                    <!--begin::Qty-->
                                    <td class="text-end" data-order="124">
                                        <span class="text-gray-900 fw-bold">124 PCS</span>
                                    </td>
                                    <!--end::Qty-->
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Table Widget 5-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->

    </div>
    <!--end::Content wrapper-->

    <?= $this->include('Templates/footer'); ?>