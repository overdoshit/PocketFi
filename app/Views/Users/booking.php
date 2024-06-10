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
                <h4 class="mb-3">Billing address</h4>
                <div class="row g-3">

                    <div class="row-field">
                        <label class="form-label" for="fn">Full name <span style="color: red; font-weight: bold;">*</span></label>
                        <input class="form-control" type="text" value="<?= session()->get('name'); ?>" name="name" placeholder="John Doe" required>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="email">Email address <span style="color: red; font-weight: bold;">*</span></label>
                        <input class="form-control" type="email" value="<?= session()->get('email'); ?>" name="email" placeholder="johndoe@mail.com" required>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="phone">Phone<span class="text-body-secondary"> (with whatsapp preferably)</span></label>
                        <input class="form-control" type="tel" value="<?= session()->get('phone'); ?>" name="phone" placeholder="+62 __ ____ ____" id="phone" required>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="province">Province <span style="color: red; font-weight: bold;">*</span></label>
                        <select class="form-control" id="province" name="province" required>
                            <option value="" disabled selected>Select Province</option>
                            <!-- Options will be populated dynamically by JavaScript -->
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="city">City <span style="color: red; font-weight: bold;">*</span></label>
                        <select class="form-control" id="city" name="city" disabled required>
                            <option value="" disabled selected>Select City</option>
                            <!-- Options will be populated dynamically by JavaScript -->
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="district">District <span style="color: red; font-weight: bold;">*</span></label>
                        <select class="form-control" id="district" name="district" disabled required>
                            <option value="" disabled selected>Select District</option>
                            <!-- Options will be populated dynamically by JavaScript -->
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="subdistrict">Subdistrict <span style="color: red; font-weight: bold;">*</span></label>
                        <select class="form-control" id="subdistrict" name="subdistrict" disabled required>
                            <option value="" disabled selected>Select Subdistrict</option>
                            <!-- Options will be populated dynamically by JavaScript -->
                        </select>
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
                                <input type="hidden" name="shippingPrice" id="shippingPrice" value="">
                            </div>

                            <div style="width: 50%">
                                <label class="fw-semibold">Discount</label>
                            </div>
                            <div style="width: 50%; text-align: right; color: red;" id="discount">
                                <input type="hidden" name="discount" id="discountValue" value="0">
                            </div>

                            <div class="input-group mt-2">
                                <input type="text" class="form-control" name="promoCode" placeholder="Promo code">
                                <button type="button" class="btn btn-info" onclick="redeemPromo()">Redeem</button>
                            </div>
                        </div>

                        <div style="display: flex; flex-wrap: wrap; margin-top: 20px">
                            <div style="width: 50%">
                                <h5 style="font-weight: bold">Grand Total</h5>
                            </div>
                            <div style="width: 50%; text-align: right;">
                                <h4 style="font-weight: bold" id="grandtotal"></h4>
                                <input type="hidden" name="grandtotal" id="grandtotalValue" value="0">
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
        const provinceDropdown = document.getElementById('province');
        const cityDropdown = document.getElementById('city');
        const districtDropdown = document.getElementById('district');
        const subdistrictDropdown = document.getElementById('subdistrict');
        const shippingDropdown = document.getElementById('shipping');
        const shippingPriceInput = document.getElementById('shippingPrice');
        const shippingCostElement = document.getElementById('shippingCost');
        const grandtotalElement = document.getElementById('grandtotal');
        const discountElement = document.getElementById('discount');
        let currentDiscount = 0;

        function updateGrandTotal() {
            const shippingPrice = parseInt(shippingDropdown.value, 10) || 0;
            const rentCost = <?= $rentCost; ?>;
            const deposit = <?= $deposit; ?>;
            const grandTotal = rentCost + deposit + shippingPrice - currentDiscount;
            grandtotalElement.textContent = 'IDR ' + grandTotal.toLocaleString('id-ID');
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
            districtDropdown.innerHTML = '<option value="" disabled selected>Select District</option>';
            subdistrictDropdown.innerHTML = '<option value="" disabled selected>Select Subdistrict</option>';
            subdistrictDropdown.disabled = true;
            fetchAndPopulate(`https://api.binderbyte.com/wilayah/kecamatan?api_key=<?= getenv('API_KEY'); ?>&id_kabupaten=${cityId}`, districtDropdown, 'name', 'id');
            console.log(cityName);
            fetchShippingOptions(cityName);
        });

        function cleanCityName(cityName) {
            const wordsToRemove = ['KAB. ADM.', 'KAB.', 'KOTA ADM.'];
            const regex = new RegExp(wordsToRemove.join('|'), 'gi');
            return cityName.replace(regex, '').trim();
        }

        districtDropdown.addEventListener('change', () => {
            const districtId = districtDropdown.value;
            subdistrictDropdown.innerHTML = '<option value="" disabled selected>Select Subdistrict</option>';
            fetchAndPopulate(`https://api.binderbyte.com/wilayah/kelurahan?api_key=<?= getenv('API_KEY'); ?>&id_kecamatan=${districtId}`, subdistrictDropdown, 'name', 'id');
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
            const shippingDropdown = document.getElementById('shipping');
            shippingDropdown.innerHTML = '<option value="" disabled selected>Select Shipping</option>';

            const pickupOption = document.createElement('option');
            pickupOption.value = 0;
            pickupOption.textContent = 'PICK UP - AT POCKET FI OFFICE (IDR 0)';
            shippingDropdown.appendChild(pickupOption);

            items.forEach(item => {
                const option = document.createElement('option');
                option.value = item.price;
                option.textContent = `${item.name} - ${item.type} (IDR ${item.price}, Est. ${item.estimated})`;
                shippingDropdown.appendChild(option);
            });

            shippingDropdown.disabled = false;
        }

        const redeemPromoButton = document.getElementById('redeemPromoButton');
        if (redeemPromoButton) {
            redeemPromoButton.addEventListener('click', redeemPromo);
        } else {
            console.error('Redeem promo button not found.'); // Tambahkan pesan kesalahan untuk debug
        }
    });

    async function redeemPromo() {
        const promoCode = document.querySelector('input[name="promoCode"]').value;
        const rentCost = parseInt(document.querySelector('input[name="rentCost"]').value);
        const discountElement = document.getElementById('discount');
        const grandtotalElement = document.getElementById('grandtotal');
        let currentDiscount = 0;

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
                // Tampilkan diskon
                currentDiscount = data.discount; // Perbarui nilai diskon saat ini
                discountElement.textContent = '- IDR ' + currentDiscount.toLocaleString('id-ID');

                // Hitung ulang grand total
                updateGrandTotal(); // Panggil fungsi untuk memperbarui total biaya

                // Tampilkan pesan sukses dengan modal
                showModal('success', 'Promo code redeemed successfully! You Get IDR ' + currentDiscount.toLocaleString('id-ID') + ' Discount');
            } else {
                // Tampilkan pesan error dengan modal
                showModal('error', data.message);
            }
        } catch (error) {
            console.error('Error redeeming promo:', error);
            // Tampilkan pesan error dengan modal
            showModal('error', 'An error occurred while redeeming promo code.');
        }

        function updateGrandTotal() {
            const shippingDropdown = document.getElementById('shipping');
            const shippingPrice = parseInt(shippingDropdown.value, 10) || 0;
            const rentCost = <?= $rentCost; ?>;
            const deposit = <?= $deposit; ?>;
            const grandTotal = rentCost + deposit + shippingPrice - currentDiscount;
            grandtotalElement.textContent = 'IDR ' + grandTotal.toLocaleString('id-ID');
        }
    }

    // Fungsi untuk menampilkan modal
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

    document.addEventListener('DOMContentLoaded', function() {
        const phoneInput = document.getElementById('phone');
        if (phoneInput) {
            new Cleave(phoneInput, {
                numericOnly: true,
                blocks: [3, 3, 4, 5],
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