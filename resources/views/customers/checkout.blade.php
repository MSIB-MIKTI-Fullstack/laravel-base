<x-customer-layout>
    <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">
        <div class="container my-4">
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4 ">
                    <div
                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                        <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                            <div class="flex-none md:flex">
                                <h4 class="font-medium flex-1 self-center mb-2 md:mb-0">Order Summary</h4>
                            </div>
                        </div><!--end header-title-->
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full">
                                            <thead class="bg-slate-100 dark:bg-slate-700/20">
                                                <tr>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Products
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Quantity
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Total
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="table-cart">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--end card-->
                    <div class="bg-black dark:bg-slate-800/30 shadow  rounded-md relative w-full mt-4">
                        <div class="flex-auto p-4">
                            <div class="grid grid-cols-1  rounded-md">
                                <div class="sm:-mx-6 lg:-mx-8">
                                    <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                        <table class="min-w-full">
                                            <tbody>
                                                <!-- 1 -->
                                                <tr
                                                    class="border-b border-dashed border-slate-500/60 dark:border-slate-700/40">
                                                    <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                        Subtotal
                                                    </td>
                                                    <td id="subtotal"
                                                        class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                        -
                                                    </td>
                                                </tr>
                                                <!-- 2 -->
                                                {{-- <tr
                                                    class="border-b border-dashed border-slate-500/60 dark:border-slate-700/40">
                                                    <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                        Shipping Charge
                                                    </td>
                                                    <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                        $5.00
                                                    </td>
                                                </tr> --}}
                                                <!-- 3 -->
                                                {{-- <tr class="">
                                                    <td class="p-3 text-sm text-gray-300 whitespace-nowrap font-medium">
                                                        Promo Code
                                                    </td>
                                                    <td class="p-3 text-sm font-medium text-gray-400 whitespace-nowrap">
                                                        -$10.00
                                                    </td>
                                                </tr> --}}
                                                <!-- 4 -->
                                                <tr
                                                    class="border-t-2 border-solid border-slate-500/60 dark:border-slate-700/40">
                                                    <td
                                                        class="p-3 text-base text-gray-200 whitespace-nowrap font-medium">
                                                        Total
                                                    </td>
                                                    <td id="total"
                                                        class="p-3 text-base font-medium text-gray-100 whitespace-nowrap">
                                                        -
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="flex gap-4 mb-4">
                                    <button
                                        class="px-3 py-2 lg:px-4 bg-brand-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-brand-600 hover:text-white w-1/2 mt-4 lg:mb-0 inline-block"
                                        onclick="window.location.href = `{{ route('customer.products') }}`">Continue
                                        shopping</button>
                                    <button
                                        class="px-3 py-2 lg:px-4 bg-brand-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-brand-600 hover:text-white w-1/2 mt-4 lg:mb-0 inline-block"
                                        onclick="window.location.href = `{{ route('customer.cart.index') }}`">Back
                                        to cart</button>
                                </div>
                                <p class="text-[11px] text-slate-400"> <span class="text-slate-200">Note :</span> It is
                                    a long established fact that a reader will be distracted by the readable content of
                                    a page when looking at its layout.</p>
                            </div>
                        </div><!--end card-body-->
                    </div>
                </div><!--end col-->
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8 ">
                    <form action="{{ route('customer.checkout.checkout') }}" method="POST">
                        @csrf
                        @method('POST')

                        <div
                            class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative mb-4">
                            <div
                                class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                                <h4 class="font-medium">Delivery Address</h4>
                            </div><!--end header-title-->
                            <div class="flex-auto p-4">
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                        <div class="mb-2">
                                            <label for="First_Name"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">First
                                                Name<small class="text-red-600 text-sm">*</small></label>
                                            <input name="first_name"
                                                class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                placeholder="First name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                        <div class="mb-2">
                                            <label for="Last_name"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Last
                                                Name<small class="text-red-600 text-sm">*</small></label>
                                            <input name="last_name"
                                                class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                placeholder="Last name" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4">
                                        <div class="mb-2">
                                            <label for="Delivery_Address"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Delivery
                                                Address<small class="text-red-600 text-sm">*</small></label>
                                            <input name="address"
                                                class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                placeholder="Address" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                        <div class="mb-2">
                                            <label for="City"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">State<small
                                                    class="text-red-600 text-sm">*</small></label>
                                            <select id="state" name="state"
                                                class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                                                <option class="dark:text-slate-700">-- Select State--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                        <div class="mb-2">
                                            <label for="city"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">City<small
                                                    class="text-red-600 text-sm">*</small></label>
                                            <select id="city" name="city"
                                                class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                disabled>
                                                <option selected disabled>-- Select City --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                        <div class="mb-2">
                                            <label for="Country"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Country<small
                                                    class="text-red-600 text-sm">*</small></label>
                                            <select id="Country" name="country"
                                                class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700">
                                                <option class="dark:text-slate-700">Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                        <div class="mb-2">
                                            <label for="Zip_code"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Zip
                                                code<small class="text-red-600 text-sm">*</small></label>
                                            <input name="zip_code"
                                                class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                placeholder="------" type="text">
                                        </div>
                                    </div>
                                    <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                                        <div class="mb-2">
                                            <label for="Email_Address"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Email
                                                Address</label>
                                            <input name="email_address"
                                                class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                placeholder="Enter Email" type="text">
                                        </div>
                                    </div>
                                    <div class="col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1">
                                        <div class="mb-2">
                                            <label for="Mobile_No"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Mobile
                                                No<small class="text-red-600 text-sm">*</small></label>
                                            <input name="phone_number"
                                                class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                                placeholder="Mobile no" type="text">
                                        </div>
                                    </div>
                                </div>
                                <label class="flex">
                                    <input type="checkbox" class="accent-brand-500">
                                    <span for="default-checkbox"
                                        class="ms-1 text-sm font-medium text-slate-600 dark:text-gray-300">Confirm
                                        Shipping
                                        Address</span>
                                </label>
                                <div class="mt-3">
                                    <button
                                        class="inline-block focus:outline-none text-white hover:bg-brand-500 hover:text-white bg-brand-500 border border-gray-200 text-sm font-medium py-1 px-3 rounded">Save</button>
                                    <button
                                        class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200  text-sm font-medium py-1 px-3 rounded">Cancle</button>
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-->

                    </form>
                </div><!--end col-->
            </div><!--end inner-grid-->
        </div><!--end container-->
    </div>
</x-customer-layout>
<script>
    $(document).ready(function() {
        getCartData()
        getState()
    })

    function getTotalCart() {
        $.ajax({
            url: `{{ route('customer.cart.total-cart') }}`,
            type: 'GET',
            contentType: false,
            cache: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': `{{ csrf_token() }}`
            },
            success: function(data) {
                $('#total-cart').html(
                    `${number_format(data.total)}`
                )
            },
            error: function(data) {
                notyf.error(data.responseJSON.message)
            }
        })
    }

    function getCartData() {
        $('#table-cart').html(`<tr>
                        <td colspan="5" align="center" class="p-3">` +
            loader() +
            `</td>
                    </tr>`)

        $.ajax({
            url: `{{ route('customer.cart.get-cart') }}`,
            type: 'GET',
            contentType: false,
            cache: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': `{{ csrf_token() }}`
            },
            success: function(res) {
                $('#table-cart').html()
                let html;
                let total_qty = 0;
                let total_price = 0;
                `<tr>
                                    <td colspan="5" class="p-3 text-sm text-red-400 font-medium dark:text-gray-400" align="center">
                                        <span class="text-center">Empty Cart</span>
                                    </td>
                                </tr>`
                $('#cart-total').html(res.data.length)

                res.data.forEach(item => {
                    total_qty += item.total_qty
                    total_price += item.total_qty * item.price

                    html +=
                        `
                        <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                        <td
                            class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-slate-300">
                            <img src="${item.image}" alt=""
                                class="mr-2 h-8 inline-block">
                            <h5
                                class="text-sm font-semibold text-slate-700 dark:text-gray-400 inline-block">
                                ${item.name}</h5>
                        </td>
                        <td
                            class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                            ${item.total_qty}
                        </td>
                        <td
                            class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                            ${number_format(item.total_qty * item.price)}
                        </td>
                    </tr>`
                });

                html += `
                <tr class="bg-white dark:bg-gray-900">
                    <td
                        class="p-3 text-base font-semibold text-gray-900 whitespace-nowrap dark:text-slate-300">
                        Total
                    </td>
                    <td
                        class="p-3 text-base font-semibold text-gray-900 whitespace-nowrap dark:text-slate-300">
                        ${total_qty}
                    </td>
                    <td
                        class="p-3 text-base font-semibold text-gray-900 whitespace-nowrap dark:text-slate-300">
                        ${number_format(total_price)}
                    </td>
                </tr>
                `

                $('#subtotal').html(number_format(total_price))
                $('#total').html(number_format(total_price))

                $('#table-cart').html(html)

                getTotalCart()
            },
            error: function(data) {
                notyf.error(data.responseJSON.message)
            }
        })
    }
</script>

<script>
    function getState() {
        $.ajax({
            url: `{{ route('customer.checkout.get-province') }}`,
            type: 'GET',
            contentType: false,
            cache: false,
            processData: false,
            success: function(res) {
                res.rajaongkir.results.forEach((item) => {
                    $('#state').append(
                        `<option value="${item.province_id}">${item.province}</option>`)
                })
            },
            error: function(data) {
                notyf.error(data.message)
            }
        })
    }
    $('#state').change(function() {
        $('#city').html('')
        $('#city').attr('disabled', false)
        let province = $(this).val()
        $.ajax({
            url: `{{ route('customer.checkout.get-city') }}?province=${province}`,
            type: 'GET',
            contentType: false,
            cache: false,
            processData: false,
            success: function(res) {
                console.log(res)
                res.rajaongkir.results.forEach((item) => {
                    $('#city').append(
                        `<option value="${item.city_id}">${item.city_name}</option>`)
                })
            },
            error: function(data) {
                notyf.error(data.message)
            }
        })
    })
</script>
