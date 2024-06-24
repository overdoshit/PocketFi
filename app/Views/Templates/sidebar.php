<style>
    .app-sidebar-menu .menu>.menu-item .menu-link.active .menu-title {
        color: #FFFFFF !important;
    }

    .sidebar.menu-link.active {
        background-color: #1FC99E !important;
    }
</style>

<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

    <!--begin::Logo-->
    <div class="app-sidebar-logo d-none d-lg-block mx-auto pt-7 pt-xl-18 mb-xl-9" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="/">
            <img alt="Logo" src="/assets/images/logo.png" class="theme-light-show h-35px" />
            <img alt="Logo" src="/assets/images/logo.png" class="theme-dark-show h-35px" />
        </a>
        <!--end::Logo image-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-y my-5 mx-3 mx-xl-11" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention menu-active-bg" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="sidebar menu-link <?= (current_url() == base_url('/')) ? 'active' : ''; ?>" href="/"><span class="menu-title">Dashboard</span></a>
                    <a class="sidebar menu-link <?= (current_url() == base_url('/products')) ? 'active' : ''; ?>" href="/products"><span class="menu-title">Products</span></a>
                    <a class="sidebar menu-link <?= (current_url() == base_url('/orders')) ? 'active' : ''; ?>" href="/orders"><span class="menu-title">Orders</span></a>
                    <!--end:Menu link-->
                </div><!--end:Menu item-->

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
</div>
<!--end::Sidebar-->