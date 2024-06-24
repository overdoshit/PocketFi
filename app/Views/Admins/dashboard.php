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


                        <!--begin::Card widget 5-->
                        <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                            <!--begin::Card Header-->
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <div class="d-flex align-items-center">
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2"><?php echo $ordersThisMonth; ?></span>
                                    </div>
                                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Orders This Month</span>
                                </div>
                            </div>
                            <!--end::Card Header-->

                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                        <span class="fw-bolder fs-6 text-gray-900"><?php echo $goalOrders - $ordersThisMonth; ?> to Goal</span>
                                        <span class="fw-bold fs-6 text-gray-500"><?php echo number_format($percentageToGoal, 0); ?>%</span>
                                    </div>

                                    <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                        <div class="bg-success rounded h-8px" role="progressbar" style="width: <?php echo $percentageToGoal; ?>%;" aria-valuenow="<?php echo $percentageToGoal; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 5-->


                        <!--begin::Card widget 4-->
                        <div class="card card-flush h-md-50 mb-xl-10">
                            <!--begin::Card Header-->
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <div class="d-flex align-items-center">
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2"><?= $mifiInternationalCount + $mifiIndonesiaCount + $simCount ?></span>
                                    </div>
                                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Products</span>
                                </div>
                            </div>
                            <!--end::Card Header-->

                            <!--begin::Card Body-->
                            <div class="card-body pt-2 pb-4 d-flex align-items-center">
                                <!--begin::Chart-->
                                <div class="d-flex flex-center me-5 pt-2">
                                    <canvas id="chartProducts" style="min-width: 70px; min-height: 70px; max-width: 100%;"></canvas>
                                </div>
                                <!--end::Chart-->

                                <div class="d-flex flex-column content-justify-center w-100">
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
                                        <div class="text-gray-500 flex-grow-1 me-4">Mifi International</div>
                                        <div class="fw-bolder text-gray-700 text-xxl-end"><?= $mifiInternationalCount ?></div>
                                    </div>

                                    <div class="d-flex fs-6 fw-semibold align-items-center my-3">
                                        <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                                        <div class="text-gray-500 flex-grow-1 me-4">Mifi Indonesia</div>
                                        <div class="fw-bolder text-gray-700 text-xxl-end"><?= $mifiIndonesiaCount ?></div>
                                    </div>

                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                        <div class="text-gray-500 flex-grow-1 me-4">SIM</div>
                                        <div class=" fw-bolder text-gray-700 text-xxl-end"><?= $simCount ?></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Card Body-->
                        </div>
                        <script>
                            var ctx = document.getElementById('chartProducts').getContext('2d');
                            var chart = new Chart(ctx, {
                                type: 'doughnut',
                                data: {
                                    labels: ['Mifi International', 'Mifi Indonesia', 'SIM'],
                                    datasets: [{
                                        label: 'Products by Category',
                                        data: [<?= $mifiInternationalPercentage ?>, <?= $mifiIndonesiaPercentage ?>, <?= $simPercentage ?>],
                                        backgroundColor: ['#dc3545', '#007bff', '#e4e6ef'],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    maintainAspectRatio: false,
                                    plugins: {
                                        legend: {
                                            display: false
                                        },
                                        tooltip: {
                                            callbacks: {
                                                label: function(tooltipItem) {
                                                    return tooltipItem.raw.toFixed(2) + '%';
                                                }
                                            }
                                        }
                                    }
                                }
                            });
                        </script>
                        <!--end::Card widget 4-->
                    </div>
                    <!--end::Col-->


                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-5">


                        <!--begin::Card widget 6-->
                        <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <div class="d-flex align-items-center">
                                        <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">IDR</span>
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">
                                            <?php echo number_format($averageOrderValue, 0, ',', '.'); ?>
                                        </span>
                                    </div>
                                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Average Value Orders This Month</span>
                                </div>
                            </div>
                            <!--end::Header-->

                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end px-0 pb-0">
                                <div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
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
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2"><?= count($users) ?></span>
                                    <!--end::Amount-->

                                    <!--begin::Subtitle-->
                                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Customers</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-column justify-content-end pe-0">
                                <!--begin::Users group-->
                                <div class="symbol-group symbol-hover flex-nowrap">
                                    <?php
                                    $max_display_users = 6;
                                    shuffle($users);
                                    $display_users = array_slice($users, 0, $max_display_users);
                                    foreach ($display_users as $user) :
                                    ?>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="<?= $user->name ?>">
                                            <?php if (!empty($user->imageUrl)) : ?>
                                                <img alt="Pic" src="<?= $user->imageUrl ?>" />
                                            <?php else : ?>
                                                <span class="symbol-label bg-light text-gray-400 fs-8 fw-bold"><?= strtoupper(substr($user->name, 0, 1)) ?></span>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                    <?php if (count($users) > $max_display_users) : ?>
                                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="+<?= count($users) - $max_display_users ?> More Users">
                                            <span class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+<?= count($users) - $max_display_users ?></span>
                                        </a>
                                    <?php endif; ?>
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

                        <!--begin::Card widget 3-->
                        <div class="card card-flush overflow-hidden h-md-100">
                            <!--begin::Card Header-->
                            <div class="card-header py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-900">Sales This Month</span>
                                </h3>
                                <div class="card-toolbar">
                                    <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <i class="fa-regular fa-ellipsis fs-1"></i>
                                    </button>

                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary  btn-sm px-4 w-100" href="#">
                                                    Generate Reports
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Card Header-->

                            <!--begin::Card body-->
                            <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                                <div class="px-9 mb-5">
                                    <div class="d-flex mb-2">
                                        <span class="fs-4 fw-semibold text-gray-500 me-1">IDR</span>
                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"><?= number_format($totalSalesThisMonth, 0, ',', '.') ?></span>
                                    </div>
                                    <span class="fs-6 fw-semibold text-gray-500">Another IDR <?= number_format($goalValues - $totalSalesThisMonth, 0, ',', '.') ?> to Goal</span>
                                </div>

                                <div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 3-->

                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->

    </div>
    <!--end::Content wrapper-->

    <?= $this->include('Templates/footer'); ?>