<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url(./assets/images/background/user-info.jpg) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img">
                <img src="./assets/images/users/profile_pic.png" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text">
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">مدیر اصلی</a>
                <div class="dropdown-menu animated flipInY">
                    <a href="#" class="dropdown-item">
                        <i class="ti-user"></i> پروفایل من</a>
                    <a href="#" class="dropdown-item">
                        <i class="ti-wallet"></i> فعالیت ها</a>
                    <a href="#" class="dropdown-item">
                        <i class="ti-email"></i> پیام ها</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="ti-settings"></i> تنظیمات کاربری</a>
                    <div class="dropdown-divider"></div>
                    <a href="login.php" class="dropdown-item">
                        <i class="fa fa-power-off"></i> خروج</a>
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- <li class="nav-small-cap">صفحه اصلی</li> -->

                <li>
                <a class="has-arrow waves-effect waves-dark font-bold" href="" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">داشبورد</span></a>
                </li>


                <li>
                <a class="has-arrow waves-effect waves-dark font-bold" href="#" aria-expanded="false"><i class="mdi mdi-chemical-weapon"></i><span class="hide-menu">اطلاعات پایه</span></a>
                    <ul aria-expanded="false" class="collapse font-normal">
                        <li>                                 
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#add-project-modal" >تعریف پروژه</a>
                        </li>
                        <li>
                            <a href="anbar-order.php">حواله انبار</a>
                        </li>
                        <li>
                            <a href="index3.html">دستور کار</a>
                        </li>
                        <li>
                            <a href="index4.html">انجام کار</a>
                        </li>
                    </ul>
                </li>

                
                <li>
                    <a class="has-arrow waves-effect waves-dark font-bold" href="#" aria-expanded="false"><i class="mdi mdi-collage"></i><span class="hide-menu">عملیات</span></a>
                    <ul aria-expanded="false" class="collapse font-normal">
                        <li>                                 
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#add-project-modal" >تعریف پروژه</a>
                        </li>
                        <li>
                            <a href="anbar-order.php">حواله انبار</a>
                        </li>
                        <li>
                            <a href="index3.html">دستور کار</a>
                        </li>
                        <li>
                            <a href="index4.html">انجام کار</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a class="has-arrow waves-effect waves-dark font-bold" href="#" aria-expanded="false"><i class="mdi mdi-cloud-print"></i><span class="hide-menu">گزارشات</span></a>
                    <ul aria-expanded="false" class="collapse font-normal">
                        <li>                                 
                            <a href="/">گزارش پیکمانکاران</a>
                        </li>
                        <li>
                            <a href="anbar-order.php">گزارش دستور کار نصب</a>
                        </li>
                        <li>
                            <a href="anbar-order.php">گزارش اصلاح سرویس</a>
                        </li>
                        <li>
                            <a href="index3.html">صورت وضعیت</a>
                        </li>
                        <li>
                            <a href="index4.html">گزارش انجام کار</a>
                        </li>
                        <li>                                 
                            <a href="/">گزارش پروژه</a>
                        </li>
                        <li>
                            <a href="anbar-order.php">گزارش موجودی کالا</a>
                        </li>
                        <li>
                            <a href="index3.html">گزارش مرجوعی</a>
                        </li>
                    </ul>
                </li>
                


                <li>
                    <a class="has-arrow waves-effect waves-dark font-bold" href="#" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">تنظیمات</span></a>
                    <ul aria-expanded="false" class="collapse font-normal">
                        <li>                                 
                            <a href="//">تنظیمات سیستم</a>
                        </li>
                        <li>
                            <a href="anbar-order.php">تنظیمات کاربران</a>
                        </li>
                        <li>
                            <a href="index3.html">سطوح دسترسی کاربران</a>
                        </li>
                        <li>
                            <a href="index4.html">نقش های سیستم</a>
                        </li>
                    </ul>
                </li>



            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="/" class="link" data-toggle="tooltip" title="Settings">
            <i class="ti-settings"></i>
        </a>
        <!-- item-->
        <a href="/" class="link" data-toggle="tooltip" title="Email">
            <i class="mdi mdi-gmail"></i>
        </a>
        <!-- item-->
        <a href="/" class="link" data-toggle="tooltip" title="Logout">
            <i class="mdi mdi-power"></i>
        </a>
    </div>
    <!-- End Bottom points-->
</aside>
<?php include './inc_theme/add_project.php'; ?>