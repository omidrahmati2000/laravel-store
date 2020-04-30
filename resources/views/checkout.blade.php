<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__title"><h1>خرید</h1></div>
        </div>
    </div>
    <div class="checkout block">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="alert alert-lg alert-primary">آیا حساب کاربری دارید؟ <a href="checkout.html">ورود به
                        حساب کاربری</a></div>
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="card mb-lg-0">
                        <div class="card-body"><h3 class="card-title">صورت حساب</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6"><label for="checkout-first-name">نام</label> <input
                                    type="text" class="form-control" id="checkout-first-name" placeholder="نام">
                                </div>
                                <div class="form-group col-md-6"><label for="checkout-last-name">نام
                                    خانوادگی</label> <input type="text" class="form-control" id="checkout-last-name"
                                                            placeholder="نام خانوادگی"></div>
                            </div>
                            <div class="form-group"><label for="checkout-company-name">اسم شرکت <span
                                class="text-muted">(اختیاری)</span></label> <input type="text" class="form-control"
                                                                                   id="checkout-company-name"
                                                                                   placeholder="اسم شرکت"></div>
                            <div class="form-group"><label for="checkout-country">شهر</label> <select
                                id="checkout-country" class="form-control form-control-select2">
                                <option>شهر خود را انتخاب کنید...</option>
                                <option>تهران</option>
                                <option>شیراز</option>
                                <option>تبریز</option>
                                <option>اصفهان</option>
                                <option>کرج</option>
                                <option>مشهد</option>
                                <option>کرمان</option>
                            </select></div>
                            <div class="form-group"><label for="checkout-street-address">آدرس</label> <input
                                type="text" class="form-control" id="checkout-street-address" placeholder="آدرس">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6"><label for="checkout-email">پست الکترونیک</label>
                                    <input type="email" class="form-control" id="checkout-email"
                                           placeholder="ایمیل"></div>
                                <div class="form-group col-md-6"><label for="checkout-phone">شماره تماس</label>
                                    <input type="text" class="form-control" id="checkout-phone"
                                           placeholder="شماره تماس"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-check"><span class="form-check-input input-check"><span
                                    class="input-check__body"><input class="input-check__input" type="checkbox"
                                                                     id="checkout-create-account"> <span
                                    class="input-check__box"></span></span></span><label class="form-check-label"
                                                                                         for="checkout-create-account">ساخت
                                    اکانت جدید با این مشخصات؟</label></div>
                            </div>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body"><h3 class="card-title">جزییات ارسال</h3>
                            <div class="form-group"><label for="checkout-comment">یاد&zwnj;داشت&zwnj;های سفارش <span
                                class="text-muted">(اختیاری)</span></label> <textarea id="checkout-comment"
                                                                                      class="form-control"
                                                                                      rows="4"></textarea></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                    <div class="card mb-0">
                        <div class="card-body"><h3 class="card-title">سفارش شما</h3>
                            <table class="checkout__totals">
                                <thead class="checkout__totals-header">
                                <tr>
                                    <th>محصول</th>
                                    <th>جمع</th>
                                </tr>
                                </thead>
                                <tbody class="checkout__totals-products">
                                <tr>
                                    <td>Electric Planer Brandix KL370090G 300 Watts × 2</td>
                                    <td>12 میلیون تومان</td>
                                </tr>
                                <tr>
                                    <td>Undefined Tool IRadix DPS3000SY 2700 watts × 1</td>
                                    <td>12 میلیون تومان</td>
                                </tr>
                                <tr>
                                    <td>Brandix Router Power Tool 2017ERXPK × 3</td>
                                    <td>42 میلیون تومان</td>
                                </tr>
                                </tbody>
                                <tbody class="checkout__totals-subtotals">
                                <tr>
                                    <th>قیمت محصولات</th>
                                    <td>66 میلیون تومان</td>
                                </tr>
                                <tr>
                                    <th>اعتبار حساب فروشگاهی</th>
                                    <td>1 میلیون تومان</td>
                                </tr>
                                <tr>
                                    <th>هزینه حمل و نقل</th>
                                    <td>0.01 میلیون تومان</td>
                                </tr>
                                </tbody>
                                <tfoot class="checkout__totals-footer">
                                <tr>
                                    <th>مجموع</th>
                                    <td>65.01 میلیون تومان</td>
                                </tr>
                                </tfoot>
                            </table>
                            <div class="payment-methods">
                                <ul class="payment-methods__list">
                                    <li class="payment-methods__item payment-methods__item--active"><label
                                        class="payment-methods__item-header"><span
                                        class="payment-methods__item-radio input-radio"><span
                                        class="input-radio__body"><input class="input-radio__input"
                                                                         name="checkout_payment_method" type="radio"
                                                                         checked="checked"> <span
                                        class="input-radio__circle"></span> </span></span><span
                                        class="payment-methods__item-title">درگاه بانک ملت</span></label></li>
                                    <li class="payment-methods__item"><label
                                        class="payment-methods__item-header"><span
                                        class="payment-methods__item-radio input-radio"><span
                                        class="input-radio__body"><input class="input-radio__input"
                                                                         name="checkout_payment_method"
                                                                         type="radio"> <span
                                        class="input-radio__circle"></span> </span></span><span
                                        class="payment-methods__item-title">درگاه بانک پارسیان</span></label></li>
                                    <li class="payment-methods__item"><label
                                        class="payment-methods__item-header"><span
                                        class="payment-methods__item-radio input-radio"><span
                                        class="input-radio__body"><input class="input-radio__input"
                                                                         name="checkout_payment_method"
                                                                         type="radio"> <span
                                        class="input-radio__circle"></span> </span></span><span
                                        class="payment-methods__item-title">پرداخت در محل</span></label></li>
                                </ul>
                            </div>
                            <div class="checkout__agree form-group">
                                <div class="form-check"><span class="form-check-input input-check"><span
                                    class="input-check__body"><input class="input-check__input" type="checkbox"
                                                                     id="checkout-terms"> <span
                                    class="input-check__box"></span></span></span><label class="form-check-label"
                                                                                         for="checkout-terms">با <a
                                    target="_blank" href="terms-and-conditions.html">شرایط و قوانین</a> سایت موافقم*</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-xl btn-block">پرداخت</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
