<x-customer-layout>
    <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">
        <div class="container my-4">
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                    <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                        <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                            <h4 class="font-medium">Title</h4>
                        </div><!--end header-title-->
                        <div class="flex-auto p-4">
                            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 text-center">
                                    <div id="img-container" class="w-[400px] text-center inline-block mx-auto">
                                        <img src="{{ $product->image }}" alt="" class="inline-block">
                                    </div>
                                </div>
                                <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 self-center">
                                    <span class="bg-green-600/5 text-green-500 text-[14px] font-medium px-2.5 py-0.5 rounded h-5">{{ $product->product_category->name }}</span>
                                    <div class="">
                                        <h5 class="dark:text-slate-200 font-medium text-[30px] leading-9 mt-4">{{ $product->name }}</h5>
                                        <p tabindex="0" class="focus:outline-none text-primary-500 dark:text-gray-400 text-base font-medium">Morden and good look model 2023.</p>
                                        <ul class="mb-4">
                                            <li class="inline-block">
                                                <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                            </li>
                                            <li class="inline-block">
                                                <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                            </li>
                                            <li class="inline-block">
                                                <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                            </li>
                                            <li class="inline-block">
                                                <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                            </li>
                                            <li class="inline-block">
                                                <i class="icofont-star text-xl text-slate-400 inline-block"></i>
                                            </li>
                                            <li class="inline-block">
                                                <span class="text-gray-700 dark:text-gray-400 text-sm font-medium">4.5 (9885 reviews)</span>
                                            </li>
                                        </ul>
                                        <h6 class="text-[28px] text-slate-700 dark:text-slate-300 font-semibold mb-4"> Rp. {{ number_format($product->price, 0) }}
                                        </h6>
                                        <h6 class="text-sm font-medium text-slate-800 dark:text-slate-400">Detail :</h6>
                                        <p class="focus:outline-none text-gray-500 dark:text-gray-400 text-sm font-medium mb-4">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look.
                                            <a href="#" class="text-primary-500">more details</a>
                                        </p>
                                        <!-- <h6 class="text-sm font-medium text-slate-800 dark:text-slate-400 mt-2">Features :</h6>
                                        <ol class="list-none list-inside mt-1">
                                            <li class="mb-1 text-slate-700 dark:text-slate-400"><i class="las la-check-circle text-green-500 mr-1"></i> It is a long established fact that a reader will be distracted.</li>
                                            <li class="mb-1 text-slate-700 dark:text-slate-400"><i class="las la-check-circle text-green-500 mr-1"></i> Contrary to popular belief, Lorem Ipsum is not text.</li>
                                            <li class="mb-1 text-slate-700 dark:text-slate-400"><i class="las la-check-circle text-green-500 mr-1"></i> There are many variations of passages of Lorem Ipsum available.</li>
                                        </ol> -->

                                        <input class="form-input border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent  rounded-md mt-1 border-gray-200 px-3 py-2 text-sm focus:outline-none focus:ring-0 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand-500  dark:hover:border-slate-700" style="width:100px;" type="number" min="0" value="0" id="example-number-input">
                                        <button type="button" class="inline-block focus:outline-none text-slate-600 hover:bg-brand-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-slate-400 dark:hover:text-white dark:border-gray-700 dark:hover:bg-brand-500  text-sm font-medium py-2 px-3 rounded"><i class="ti ti-shopping-cart"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end inner-grid-->
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12">
                    <div class="w-full relative">
                        <div class="flex-auto ">
                            <div class="mb-4 border-b border-gray-200 dark:border-slate-700" data-fc-type="tab">
                                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" aria-label="Tabs">
                                    <li class="me-2" role="presentation">
                                        <button class="inline-block p-4 rounded-t-lg border-b-2 active " id="description-tab" data-fc-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false">Description</button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="additional-tab" data-fc-target="#additional" type="button" role="tab" aria-controls="additional" aria-selected="false">Additional Info</button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="reviews-tab" data-fc-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Ratings & reviews</button>
                                    </li>
                                </ul>
                            </div>
                            <div id="myTabContent">
                                <div class="active  p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <p class="text-base text-gray-500 dark:text-gray-400">
                                        {{ $product->description }}
                                    </p>
                                </div>
                                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="sm:col-span-12  md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class=" w-full relative">
                                                <div class="flex-auto  text-center">
                                                    <table class="table border rounded-lg w-full">
                                                        <thead>
                                                            <tr>
                                                            <th class="w-[40%]"> </th>
                                                            <th class="w-[60%]"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="bg-white  border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6 class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">Brand name</h6>
                                                                </td>
                                                                <td class="p-4 mb-0">Robotech air zoom terra kiger 7</td>
                                                            </tr>
                                                            <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6 class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">Size</h6>
                                                                </td>
                                                                <td class="p-4 mb-0">UK 5</td>
                                                            </tr>
                                                            <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6 class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">Color</h6>
                                                                </td>
                                                                <td class="p-4 mb-0"><i class="icofont-brand-mts text-pink-500"></i> Pink</td>
                                                            </tr>
                                                            <tr class="bg-white dark:bg-gray-900">
                                                                <td class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6 class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">Country</h6>
                                                                </td>
                                                                <td class="p-4 mb-0">USA</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> <!--end card-->
                                        </div><!--end col-->
                                        <div class="sm:col-span-12  md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class=" w-full relative">
                                                <div class="flex-auto  text-center">
                                                    <table class="table border rounded-lg w-full">
                                                        <thead>
                                                            <tr>
                                                            <th class="w-[40%]"> </th>
                                                            <th class="w-[60%]"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="bg-white  border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6 class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">Department</h6>
                                                                </td>
                                                                <td class="p-4 mb-0">Mens</td>
                                                            </tr>
                                                            <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6 class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">Item Weight</h6>
                                                                </td>
                                                                <td class="p-4 mb-0">400gm</td>
                                                            </tr>
                                                            <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6 class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">Net Quantity</h6>
                                                                </td>
                                                                <td class="p-4 mb-0">1 Set</td>
                                                            </tr>
                                                            <tr class="bg-white dark:bg-gray-900">
                                                                <td class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6 class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">Customer Reviews</h6>
                                                                </td>
                                                                <td class="p-4 mb-0">
                                                                    <div class="">
                                                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                                                        <span class="text-slate-800 font-semibold">4.8</span>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> <!--end card-->
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </div>
                                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="sm:col-span-12  md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class=" w-full relative">
                                                <div class="flex-auto p-4 text-center">
                                                    <h3 class="my-4 font-semibold text-[34px] dark:text-slate-200">4.8</h3>
                                                    <p class="text-gray-600 font-semibold dark:text-slate-400">Overall Rating</p>
                                                    <div class="">
                                                        <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                                        <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                                        <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                                        <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                                        <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                                        <span class="text-slate-800 font-semibold">4.8 (9885 reviews)</span>
                                                    </div>
                                                    <div class="mb-4">
                                                        <div class="flex justify-between">
                                                            <span class="font-medium text-sm dark:text-slate-400">5 Star</span>
                                                            <span class="text-sm font-medium text-slate-500 dark:text-gray-400">9180</span>
                                                        </div>
                                                        <div class="w-full">
                                                            <div class="w-full h-[5px] relative bg-gray-200 dark:bg-slate-600/30 rounded-full">
                                                                <div class="h-[5px] bg-yellow-400 rounded-full" style="width: 80%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <div class="flex justify-between">
                                                            <span class="font-medium text-sm dark:text-slate-400">4 Star</span>
                                                            <span class="text-sm font-medium text-slate-500 dark:text-gray-400">84</span>
                                                        </div>
                                                        <div class="w-full">
                                                            <div class="w-full h-[5px] relative bg-gray-200 dark:bg-slate-600/30 rounded-full">
                                                                <div class="h-[5px] bg-yellow-400 rounded-full" style="width: 70%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <div class="flex justify-between">
                                                            <span class="font-medium text-sm dark:text-slate-400">3 Star</span>
                                                            <span class="text-sm font-medium text-slate-500 dark:text-gray-400">24</span>
                                                        </div>
                                                        <div class="w-full">
                                                            <div class="w-full h-[5px] relative bg-gray-200 dark:bg-slate-600/30 rounded-full">
                                                                <div class="h-[5px] bg-yellow-400 rounded-full" style="width: 60%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <div class="flex justify-between">
                                                            <span class="font-medium text-sm dark:text-slate-400">2 Star</span>
                                                            <span class="text-sm font-medium text-slate-500 dark:text-gray-400">12</span>
                                                        </div>
                                                        <div class="w-full">
                                                            <div class="w-full h-[5px] relative bg-gray-200 dark:bg-slate-600/30 rounded-full">
                                                                <div class="h-[5px] bg-yellow-400 rounded-full" style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <div class="flex justify-between">
                                                            <span class="font-medium text-sm dark:text-slate-400">1 Star</span>
                                                            <span class="text-sm font-medium text-slate-500 dark:text-gray-400">3</span>
                                                        </div>
                                                        <div class="w-full">
                                                            <div class="w-full h-[5px] relative bg-gray-200 dark:bg-slate-600/30 rounded-full">
                                                                <div class="h-[5px] bg-yellow-400 rounded-full" style="width: 40%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!--end card-->
                                        </div><!--end col-->
                                        <div class="sm:col-span-12  md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class=" w-full relative">
                                                <div class="flex-auto">
                                                    <h5 class="text-slate-800 text-3xl font-semibold">Be the first to review “Robotech Shoe”</h5>
                                                    <form action="">
                                                        <div class="mb-2">
                                                            <label for="name-input" class="font-medium text-sm text-slate-600 dark:text-slate-400">Name <span class="text-red-500 text-lg">*</span></label>
                                                            <input type="text" id="name-input" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-base text-lg hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="email-input" class="font-medium text-sm text-slate-600 dark:text-slate-400">Email <span class="text-red-500 text-lg">*</span></label>
                                                            <input type="text" id="email-input" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-base text-lg hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                        </div>
                                                        <label for="email-input" class="font-medium text-sm text-slate-600 dark:text-slate-400">Your rating <span class="text-red-500 text-lg">*</span></label>
                                                        <div class="starability-basic min-h-[30px] block mb-2">
                                                            <input type="radio" id="rate5" name="rating" value="5" />
                                                            <label for="rate5" title="Amazing">5 stars</label>

                                                            <input type="radio" id="rate4" name="rating" value="4" />
                                                            <label for="rate4" title="Very good">4 stars</label>

                                                            <input type="radio" id="rate3" name="rating" value="3" />
                                                            <label for="rate3" title="Average">3 stars</label>

                                                            <input type="radio" id="rate2" name="rating" value="2" />
                                                            <label for="rate2" title="Not good">2 stars</label>

                                                            <input type="radio" id="rate1" name="rating" value="1" />
                                                            <label for="rate1" title="Terrible">1 star</label>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="message" class="font-medium text-sm text-slate-600 dark:text-slate-400">Your message</label>
                                                            <textarea id="message" rows="4" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Leave a comment..."></textarea>
                                                        </div>
                                                        <button type="button" class="px-4 py-2 lg:px-4 bg-brand-500  text-white text-base  transition hover:bg-brand-500 hover:text-white border border-brand border-dashed font-medium mb-2">Submit</button>
                                                    </form>
                                                </div>
                                            </div> <!--end card-->
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </div>
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end grid-->
            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-4 xl:col-span-4 self-center">
                    <div class="flex-auto p-4">
                        <h4 class="text-3xl text-slate-700 font-semibold mb-0">Related products</h4>
                        <p class="text-slate-500 text-lg mb-3">All products with free delivery</p>
                    </div><!--end card-body-->
                </div><!--end col-->
            </div>
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-2 ">
                    <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                        <div class="flex-auto  text-center">
                            <div class="flex-auto text-center bg-gray-100">
                                <span class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-0 px-2 mb-5 inline-block">50% off</span>
                                <a href="#">
                                    <img src="assets/images/products/01.png" alt="" class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                </a>
                            </div>
                            <div class="flex-auto  text-center p-4">
                                <span class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Electric</span>
                                <a href="ecommerce-product-detail.html" class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate">White Table Camera </a>
                                <div class="mb-4">
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <span class="text-slate-800 font-semibold">4.8</span>
                                </div>
                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup class="text-sm text-slate-500">$</sup>49 <del class="text-base text-slate-400">$99</del></h4>
                                <button type="button" class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Buy Now</button>
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-2 ">
                    <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                        <div class="flex-auto  text-center">
                            <div class="flex-auto text-center bg-gray-100">
                                <span class="absolute right-2 top-2 focus:outline-none text-[12px] bg-orange-500 text-white dark:text-orange-600 rounded font-medium py-0 px-2 mb-5 inline-block">Coming soon</span>
                                <a href="#">
                                    <img src="assets/images/products/04.png" alt="" class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                </a>
                            </div>
                            <div class="flex-auto  text-center p-4">
                                <span class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Covid Safety</span>
                                <a href="ecommerce-product-detail.html" class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate">N95 Covid Safety Mask  </a>
                                <div class="mb-4">
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <span class="text-slate-800 font-semibold">4.8</span>
                                </div>
                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup class="text-sm text-slate-500">$</sup>9 <del class="text-base text-slate-400">$19</del></h4>
                                <button type="button" class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Buy Now</button>
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-2 ">
                    <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                        <div class="flex-auto  text-center">
                            <div class="flex-auto text-center bg-gray-100">
                                <a href="#">
                                    <img src="assets/images/products/03.png" alt="" class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                </a>
                            </div>
                            <div class="flex-auto  text-center p-4">
                                <span class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Entertainment</span>
                                <a href="ecommerce-product-detail.html" class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate">Imported VR Box  </a>
                                <div class="mb-4">
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <span class="text-slate-800 font-semibold">4.8</span>
                                </div>
                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup class="text-sm text-slate-500">$</sup>29 <del class="text-base text-slate-400">$39</del></h4>
                                <button type="button" class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Buy Now</button>
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-2 ">
                    <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                        <div class="flex-auto  text-center">
                            <div class="flex-auto text-center bg-gray-100">
                                <span class="absolute right-2 top-2 focus:outline-none text-[12px] bg-red-600/10 text-red-500 dark:text-red-600 rounded font-medium py-0 px-2 mb-5 inline-block">Soldout</span>
                                <a href="#">
                                    <img src="assets/images/products/02.png" alt="" class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                </a>
                            </div>
                            <div class="flex-auto  text-center p-4">
                                <span class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Footwear</span>
                                <a href="ecommerce-product-detail.html" class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate">New Colorfull Shoes  </a>
                                <div class="mb-4">
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <span class="text-slate-800 font-semibold">4.8</span>
                                </div>
                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup class="text-sm text-slate-500">$</sup>99 <del class="text-base text-slate-400">$199</del></h4>
                                <button type="button" class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Buy Now</button>
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-2 ">
                    <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                        <div class="flex-auto  text-center">
                            <div class="flex-auto text-center bg-gray-100">
                                <span class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-0 px-2 mb-5 inline-block">50% off</span>
                                <a href="#">
                                    <img src="assets/images/products/pro-4.png" alt="" class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                </a>
                            </div>
                            <div class="flex-auto  text-center p-4">
                                <span class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Entertainment</span>
                                <a href="ecommerce-product-detail.html" class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate">Mannat 530 Bluetooth Wireless </a>
                                <div class="mb-4">
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <span class="text-slate-800 font-semibold">4.8</span>
                                </div>
                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup class="text-sm text-slate-500">$</sup>49 <del class="text-base text-slate-400">$99</del></h4>
                                <button type="button" class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Buy Now</button>
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-2 ">
                    <div class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                        <div class="flex-auto  text-center">
                            <div class="flex-auto text-center bg-gray-100">
                                <span class="absolute right-2 top-2 focus:outline-none text-[12px] bg-orange-500 text-white dark:text-orange-600 rounded font-medium py-0 px-2 mb-5 inline-block">Coming soon</span>
                                <a href="#">
                                    <img src="assets/images/products/pro-1.png" alt="" class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                </a>
                            </div>
                            <div class="flex-auto  text-center p-4">
                                <span class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">Footwear</span>
                                <a href="ecommerce-product-detail.html" class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate">New Colorfull Shoes  </a>
                                <div class="mb-4">
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <i class="icofont-star text-yellow-400 inline-block"></i>
                                    <span class="text-slate-800 font-semibold">4.8</span>
                                </div>
                                <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup class="text-sm text-slate-500">$</sup>99 <del class="text-base text-slate-400">$199</del></h4>
                                <button type="button" class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Buy Now</button>
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end container-->

            <div class="container">
              <!-- Footer Start -->
              <div class="grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4 pt-10">
                <div class="w-full relative mb-4">
                    <div class="flex-auto p-4">
                        <div class="mb-5">
                          <a href="customers-home.html">
                            <img src="assets/images/logo-sm.png" alt="" class="h-8 inline-block me-3">
                            <img src="assets/images/logo.png" alt="" class="h-8 inline-block">
                          </a>
                        </div>
                        <p class="text-slate-500 text-lg">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                    </div><!--end card-body-->
                </div> <!--end card-->
                <div class="w-full relative mb-4">
                  <div class="flex-auto p-4">
                    <h5 class="text-xl font-semibold text-slate-300 mb-6">Customers</h5>
                    <ul class="list-none footer-links">
                      <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Home</a>
                      </li>
                      <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Product details</a>
                      </li>
                      <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Cart</a>
                      </li>
                      <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Checkout</a>
                      </li>
                      <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Wishlist</a>
                      </li>
                      <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Invoice</a>
                      </li>
                    </ul>
                  </div><!--end card-body-->
              </div> <!--end card-->
              <div class="w-full relative mb-4">
                  <div class="flex-auto p-4">
                    <h5 class="text-xl font-semibold text-slate-300 mb-6">Admin</h5>
                    <ul class="list-none footer-links">
                      <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Dashboard</a>
                      </li>
                      <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Add product</a>
                      </li>
                      <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Orders</a>
                      </li>
                      <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Customers</a>
                      </li>
                      <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Order details</a>
                      </li>
                      <li class="mb-2">
                        <a href="#" class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Refund</a>
                      </li>
                    </ul>
                  </div><!--end card-body-->
              </div> <!--end card-->
              <div class="w-full relative mb-4">
                <div class="flex-auto p-4">
                  <h5 class="text-xl font-semibold text-slate-300 mb-6 sm:text-center xl:text-left">Contact Us</h5>
                  <div class="mb-5">
                    <p class="text-slate-400 font-semibold">1884 George Avenue<br>
                      Mobile, AL 36603
                    </p>
                  </div>
                  <div class="flex sm:justify-center xl:justify-start">
                    <a href="" class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 text-gray-400 hover:text-white hover:bg-blue-600 hover:border-blue-600">
                      <i class="icofont-facebook"></i>
                    </a>
                    <a href="" class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 ml-2 text-gray-400 hover:text-white hover:bg-blue-400 hover:border-blue-400">
                      <i class="icofont-twitter"></i>
                    </a>
                    <a href="" class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 ml-2 text-gray-400 hover:text-white hover:bg-red-600 hover:border-red-600">
                      <i class="icofont-google-plus"></i>
                    </a>
                  </div>
                </div><!--end card-body-->
            </div> <!--end card-->
            </div>
            </div>
          </div>


    </div><!--end main-->
</x-customer-layout>