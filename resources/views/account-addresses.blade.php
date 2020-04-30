<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__title"><h1>حساب کاربری</h1></div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 d-flex">
                    <div class="account-nav flex-grow-1"><h4 class="account-nav__title">منوی حساب کاربری</h4>
                        <ul>
                            <li class="account-nav__item"><a href="account-dashboard.html">داشبرد</a></li>
                            <li class="account-nav__item"><a href="account-profile.html">تنظیمات پروفایل</a></li>
                            <li class="account-nav__item"><a href="account-orders.html">تاریخچه سفارشات</a></li>
                            <li class="account-nav__item account-nav__item--active"><a
                                href="account-addresses.html">آدرس&zwnj;ها</a></li>
                            <li class="account-nav__item"><a href="account-password.html">رمز عبور</a></li>
                            <li class="account-nav__item"><a href="account-login.html">خروج</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                    <div class="addresses-list"><a href="account-addresses.html"
                                                   class="addresses-list__item addresses-list__item--new">
                        <div class="addresses-list__plus"></div>
                        <div class="btn btn-secondary btn-sm">اضافه کردن آدرس جدید</div>
                    </a>
                        <div class="addresses-list__divider"></div>
                        <div class="addresses-list__item card address-card">
                            <div class="address-card__badge" *ngif="address.default">پیش فرض</div>
                            <div class="address-card__body">
                                <div class="address-card__name">خانه</div>
                                <div class="address-card__row">آدرس مشتری اینجا قرار میگیرد</div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">شماره تماس</div>
                                    <div class="address-card__row-content">09912773346</div>
                                </div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">پست الکترونیک</div>
                                    <div class="address-card__row-content">info[at]omidrahmati.com</div>
                                </div>
                                <div class="address-card__footer"><a href="account-addresses.html">تغییر دادن</a>&nbsp;&nbsp;
                                    <a href="account-addresses.html">پاک کردن</a></div>
                            </div>
                        </div>
                        <div class="addresses-list__divider"></div>
                        <div class="addresses-list__item card address-card">
                            <div class="address-card__body">
                                <div class="address-card__name">محل کار</div>
                                <div class="address-card__row">آدرس مشتری اینجا قرار میگیرد</div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">شماره تماس</div>
                                    <div class="address-card__row-content">09912773346</div>
                                </div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">Email Address</div>
                                    <div class="address-card__row-content">info[at]omidrahmati.com</div>
                                </div>
                                <div class="address-card__footer"><a href="account-addresses.html">تغییر دادن</a>&nbsp;&nbsp;
                                    <a href="account-addresses.html">پاک کردن</a></div>
                            </div>
                        </div>
                        <div class="addresses-list__divider"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
