<?= $this->include('Templates/header'); ?>

<style>
    input[type="number"] {
        -webkit-appearance: textfield;
        -moz-appearance: textfield;
        appearance: textfield;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
    }
</style>

<div class="container">
    <form action="<?= base_url('booking/payment') ?>" method="post">
        <div class="py-5 text-center">
            <h2>Checkout Details</h2>
            <p class="lead">Check your order and complete the data for the next step.</p>
        </div>

        <div class="row g-5 mb-5">
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Shipping address</h4>
                <div class="row g-3">

                    <div class="row-field">
                        <label class="form-label" for="fn">Full name <span style="color: red; font-weight: bold;">*</span></label>
                        <input class="form-control" type="text" value="<?= session()->get('name'); ?>" name="name" placeholder="John Doe" required>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="email">Email address <span style="color: red; font-weight: bold;">*</span></label>
                        <input class="form-control" type="email" disabled value="<?= session()->get('email'); ?>" name="emailUser" placeholder="johndoe@mail.com" required>
                        <input type="hidden" name="email" value="<?= session()->get('email'); ?>">
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="phone">Phone<span class="text-body-secondary"> (with whatsapp preferably)</span> <span style="color: red; font-weight: bold;">*</span></label>
                        <input class="form-control" type="tel" value="<?= session()->get('phone'); ?>" name="phone" placeholder="+62 __ ____ ____" id="phone" required>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="province">Province <span style="color: red; font-weight: bold;">*</span></label>
                        <select class="form-control" id="Province" name="Province" required>
                            <option value="" disabled selected>Select Province</option>
                            <!-- Options will be populated dynamically by JavaScript -->
                        </select>
                        <input type="hidden" id="provinceName" name="provinceName">
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="city">City <span style="color: red; font-weight: bold;">*</span></label>
                        <select class="form-control" id="City" name="City" disabled required>
                            <option value="" disabled selected>Select City</option>
                            <!-- Options will be populated dynamically by JavaScript -->
                        </select>
                        <input type="hidden" id="cityName" name="cityName">
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="district">District <span style="color: red; font-weight: bold;">*</span></label>
                        <select class="form-control" id="District" name="District" disabled required>
                            <option value="" disabled selected>Select District</option>
                            <!-- Options will be populated dynamically by JavaScript -->
                        </select>
                        <input type="hidden" id="districtName" name="districtName">
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="subdistrict">Subdistrict <span style="color: red; font-weight: bold;">*</span></label>
                        <select class="form-control" id="Subdistrict" name="Subdistrict" disabled required>
                            <option value="" disabled selected>Select Subdistrict</option>
                            <!-- Options will be populated dynamically by JavaScript -->
                        </select>
                        <input type="hidden" id="subdistrictName" name="subdistrictName">
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="postcode">Postcode <span style="color: red; font-weight: bold;">*</span></label>
                        <input class="form-control" type="number" name="postcode" id="postcode" min="0" max="999999" placeholder="12345" required>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="shipping">Shipping <span style="color: red; font-weight: bold;">*</span></label>
                        <select class="form-control" id="shipping" name="shipping" disabled required>
                            <option value="" disabled selected>Select Shipping</option>
                            <!-- Options will be populated dynamically by JavaScript -->
                        </select>
                        <input type="hidden" id="expedition" name="expedition">
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="address">Address Details (Unit, Blocks, RT/RW) <span style="color: red; font-weight: bold;">*</span></label>
                        <textarea class="form-control" rows="5" name="address" id="address" placeholder="Jl. Sama Dia" required><?= session()->get('address'); ?></textarea>
                    </div>

                    <hr class="my-4">
                </div>
            </div>

            <div class="col-md-5 col-lg-4">
                <div class="order sticky-top" style="top: 20px;">
                    <div style="box-shadow: 0px 5px 15px 5px rgba(0, 0, 0, 0.1); padding: 32px;border-radius: 15px;">
                        <h4 class="mb-3">Your Order</h4>
                        <input type="hidden" name="idProduct" value="<?= $idProduct; ?>">
                        <p class="fw-semibold"><?= $productName; ?></p>
                        <input type="hidden" name="productName" value="<?= $productName; ?>">
                        <div style="display: flex;background: #fbfbfb;border-bottom: 2px solid var(--bs-primary);">
                            <div style="width: 50%; padding: 10px">
                                <label style="font-size: 14px;">Activation Date :</label>
                                <p style="color: var(--bs-primary); margin-bottom: 0"><?= $startDate; ?></p>
                                <input type="hidden" name="startDate" value="<?= $startDate; ?>">
                            </div>
                            <div style="width: 50%; padding: 10px">
                                <label style="font-size: 14px;">Last Activation Date :</label>
                                <p style="color: var(--bs-primary);margin-bottom: 0"><?= $endDate; ?></p>
                                <input type="hidden" name="endDate" value="<?= $endDate; ?>">
                            </div>
                        </div>
                        <div style="display: flex; flex-wrap: wrap;">
                            <div style="width: 50%">
                                <label class="fw-semibold">Duration of Rental</label>
                            </div>
                            <div style="width: 50%; text-align: right;" id="durationRent">
                                <?= $durationRent . ' DAYS' ?>
                                <input type="hidden" name="durationRent" value="<?= $durationRent; ?>">
                            </div>
                        </div>
                        <div style="display: flex; flex-wrap: wrap; margin-top: 20px">
                            <div style="width: 50%">
                                <label class="fw-semibold">Rental Cost</label>
                            </div>
                            <div style="width: 50%; text-align: right;" id="total-container">
                                <?= 'IDR ' . number_format($rentCost, 0, ',', '.'); ?>
                                <input type="hidden" name="rentCost" value="<?= $rentCost; ?>">
                            </div>

                            <div style="width: 50%">
                                <label class="fw-semibold">Deposits</label>
                            </div>
                            <div style="width: 50%; text-align: right;" id="deposit">
                                <?= 'IDR ' . number_format($deposit, 0, ',', '.'); ?>
                                <input type="hidden" name="deposit" value="<?= $deposit; ?>">
                            </div>

                            <div style="width: 50%">
                                <label class="fw-semibold">Shipping Cost</label>
                            </div>
                            <div style="width: 50%; text-align: right;" id="shippingCost">
                                <input type="hidden" id="shippingPrice" name="shippingPrice">
                            </div>

                            <div style="width: 50%">
                                <label class="fw-semibold">Discount</label>
                            </div>
                            <div style="width: 50%; text-align: right; color: red;" id="discount">
                            </div>
                            <input type="hidden" id="discountValue" name="discountValue">

                            <div class="input-group mt-2">
                                <input type="text" class="form-control" name="promoCode" id="promoCodeInput" placeholder="Promo code">
                                <button type="button" class="btn btn-info" id="redeemPromoButton" disabled>Redeem</button>
                            </div>
                        </div>

                        <div style="display: flex; flex-wrap: wrap; margin-top: 20px">
                            <div style="width: 50%">
                                <h5 style="font-weight: bold">Grand Total</h5>
                            </div>
                            <div style="width: 50%; text-align: right;">
                                <h4 style="font-weight: bold" id="grandtotal"></h4>
                                <input type="hidden" id="grossAmount" name="grossAmount">
                            </div>
                        </div>
                    </div>

                    <div class="my-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="tos" required>
                            <label class="form-check-label" for="flexCheckDefault">
                                I have read the <a href="/faq">Terms and Conditions</a> and agree with the rental agreement
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="promotion">
                            <label class="form-check-label" for="flexCheckDefault">
                                Send me Pocket Fi Promotion Letter
                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around mb-3">
                        <button type="button" class="btn btn-outline-danger btn-lg" style="font-size: 18px; width: 45%;">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-lg" style="font-size: 18px; width: 45%;">Continue Payment</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?= $this->include('Templates/modal_promo'); ?>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const provinceDropdown = document.getElementById('Province');
        const cityDropdown = document.getElementById('City');
        const districtDropdown = document.getElementById('District');
        const subdistrictDropdown = document.getElementById('Subdistrict');
        const shippingDropdown = document.getElementById('shipping');
        const shippingPriceInput = document.getElementById('shippingPrice');
        const shippingCostElement = document.getElementById('shippingCost');
        const grandtotalElement = document.getElementById('grandtotal');
        const discountElement = document.getElementById('discount');
        let currentDiscount = 0;

        function updateGrandTotal() {
            let shippingPrice = parseInt(shippingDropdown.value, 10) || 0;
            const rentCost = <?= $rentCost; ?>;
            const deposit = <?= $deposit; ?>;
            let grandTotal = rentCost + deposit + shippingPrice - currentDiscount;
            grandtotalElement.textContent = 'IDR ' + grandTotal.toLocaleString('id-ID');
            document.getElementById('grossAmount').value = grandTotal;
        }

        async function fetchAndPopulate(url, dropdown, keyName, keyValue) {
            const response = await fetch(url);
            const data = await response.json();
            const items = data.value;
            dropdown.innerHTML = '<option value="" disabled selected>Select ' + dropdown.name + '</option>';
            items.forEach(item => {
                const option = document.createElement('option');
                option.value = item[keyValue];
                option.textContent = item[keyName];
                dropdown.appendChild(option);
            });
            dropdown.disabled = false;
        }

        fetchAndPopulate(`https://api.binderbyte.com/wilayah/provinsi?api_key=<?= getenv('API_KEY'); ?>`, provinceDropdown, 'name', 'id');
        provinceDropdown.addEventListener('change', () => {
            const provinceId = provinceDropdown.value;
            document.getElementById('provinceName').value = provinceDropdown.options[provinceDropdown.selectedIndex].textContent;
            cityDropdown.innerHTML = '<option value="" disabled selected>Select City</option>';
            districtDropdown.innerHTML = '<option value="" disabled selected>Select District</option>';
            subdistrictDropdown.innerHTML = '<option value="" disabled selected>Select Subdistrict</option>';
            districtDropdown.disabled = true;
            subdistrictDropdown.disabled = true;
            fetchAndPopulate(`https://api.binderbyte.com/wilayah/kabupaten?api_key=<?= getenv('API_KEY'); ?>&id_provinsi=${provinceId}`, cityDropdown, 'name', 'id');
        });

        cityDropdown.addEventListener('change', () => {
            const cityId = cityDropdown.value;
            let cityName = cityDropdown.options[cityDropdown.selectedIndex].textContent;
            cityName = cleanCityName(cityName);
            document.getElementById('cityName').value = cityName;
            districtDropdown.innerHTML = '<option value="" disabled selected>Select District</option>';
            subdistrictDropdown.innerHTML = '<option value="" disabled selected>Select Subdistrict</option>';
            subdistrictDropdown.disabled = true;
            fetchAndPopulate(`https://api.binderbyte.com/wilayah/kecamatan?api_key=<?= getenv('API_KEY'); ?>&id_kabupaten=${cityId}`, districtDropdown, 'name', 'id');
            fetchShippingOptions(cityName);
        });

        function cleanCityName(cityName) {
            const wordsToRemove = ['KAB. ADM.', 'KAB.', 'KOTA ADM.'];
            const regex = new RegExp(wordsToRemove.join('|'), 'gi');
            return cityName.replace(regex, '').trim();
        }

        districtDropdown.addEventListener('change', () => {
            const districtId = districtDropdown.value;
            document.getElementById('districtName').value = districtDropdown.options[districtDropdown.selectedIndex].textContent;
            subdistrictDropdown.innerHTML = '<option value="" disabled selected>Select Subdistrict</option>';
            fetchAndPopulate(`https://api.binderbyte.com/wilayah/kelurahan?api_key=<?= getenv('API_KEY'); ?>&id_kecamatan=${districtId}`, subdistrictDropdown, 'name', 'id');
        });

        subdistrictDropdown.addEventListener('change', () => {
            document.getElementById('subdistrictName').value = subdistrictDropdown.options[subdistrictDropdown.selectedIndex].textContent;
        });

        shippingDropdown.addEventListener('change', () => {
            const shippingPrice = parseInt(shippingDropdown.value, 10);
            shippingPriceInput.value = shippingPrice;
            shippingCostElement.textContent = 'IDR ' + shippingPrice.toLocaleString('id-ID');
            updateGrandTotal();
        });

        async function fetchShippingOptions(destinationCity) {
            const url = `https://api.binderbyte.com/v1/cost?api_key=<?= getenv('API_KEY'); ?>&courier=sicepat,pos&origin=Tangerang+Selatan&destination=${destinationCity}&weight=1`;
            const response = await fetch(url);
            const data = await response.json();
            const items = data.data.costs;
            shippingDropdown.innerHTML = '<option value="" disabled selected>Select Shipping</option>';

            const pickupOption = document.createElement('option');
            pickupOption.value = 0;
            pickupOption.textContent = 'PICK UP - AT POCKET FI OFFICE (IDR 0)';
            shippingDropdown.appendChild(pickupOption);

            items.forEach(item => {
                const option = document.createElement('option');
                option.value = item.price;
                option.textContent = `${item.name} - ${item.type} (IDR ${Number(item.price).toLocaleString('id-ID')}, Est. ${item.estimated})`;
                shippingDropdown.appendChild(option);
            });

            shippingDropdown.disabled = false;
        }

        shippingDropdown.addEventListener('change', () => {
            document.getElementById('expedition').value = shippingDropdown.options[shippingDropdown.selectedIndex].textContent;
        });

        const redeemPromoButton = document.getElementById('redeemPromoButton');
        const promoCodeInput = document.getElementById('promoCodeInput');

        if (redeemPromoButton && promoCodeInput) {
            promoCodeInput.addEventListener('input', () => {
                redeemPromoButton.disabled = !promoCodeInput.value.trim();
            });

            redeemPromoButton.addEventListener('click', redeemPromo);
        } else {
            console.error('Enter the promo code.'); // This is fine
        }

        async function redeemPromo() {
            let promoCode = promoCodeInput.value.trim().toUpperCase();
            const rentCost = parseInt(document.querySelector('input[name="rentCost"]').value, 10);
            currentDiscount = 0;

            if (!promoCode) {
                showModal('error', 'Please enter a promo code.');
                return;
            }

            const formData = new FormData();
            formData.append('promoCode', promoCode);
            formData.append('rentCost', rentCost);

            try {
                const response = await fetch('/redeem', {
                    method: 'POST',
                    body: formData
                });
                const data = await response.json();

                if (data.success) {
                    currentDiscount = parseInt(data.discount, 10);
                    discountElement.textContent = '- IDR ' + currentDiscount.toLocaleString('id-ID');
                    document.getElementById('discountValue').value = currentDiscount;
                    updateGrandTotal();
                    showModal('success', 'Promo code redeemed successfully! You Get IDR ' + currentDiscount.toLocaleString('id-ID') + ' Discount');
                } else {
                    showModal('error', data.message);
                }
            } catch (error) {
                console.error('Error redeeming promo:', error);
                showModal('error', 'An error occurred while redeeming promo code.');
            }
        }

        function showModal(type, message) {
            if (type === 'success') {
                document.getElementById('successMessage').innerText = message;
                const successModal = new bootstrap.Modal(document.getElementById('statusSuccessModal'));
                successModal.show();
            } else {
                document.getElementById('errorMessage').innerText = message;
                const errorModal = new bootstrap.Modal(document.getElementById('statusErrorsModal'));
                errorModal.show();
            }
        }

        const phoneInput = document.getElementById('phone');
        if (phoneInput) {
            new Cleave(phoneInput, {
                numericOnly: true,
                blocks: [18],
                prefix: '+62',
                noImmediatePrefix: true,
                rawValueTrimPrefix: true,
                onValueChanged: function(e) {
                    const rawValue = e.target.rawValue;
                    if (rawValue.startsWith('62')) {
                        phoneInput.value = '+62' + rawValue.substring(2);
                    } else {
                        phoneInput.value = '+62' + rawValue;
                    }
                }
            });
        }
    });
</script>

<?= $this->include('Templates/footer'); ?>