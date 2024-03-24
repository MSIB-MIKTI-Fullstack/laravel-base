@extends('layouts.customer.product.index')

@section('content')
    <div class="sm:col-span-4  md:col-span-4 lg:col-span-4 xl:col-span-4 ">
        <form action="{{ route('products.store') }}" method="post">
            @csrf
            @method('POST')
            <div
                class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative mb-4">
                <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                    <h4 class="font-medium">Tambah Produk</h4>
                </div><!--end header-title-->
                <div class="flex-auto p-4">
                    <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                        <div class="mb-2">
                            <label for="First_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Nama
                                Produk<small class="text-red-600 text-sm">*</small></label>
                            <input
                                class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                placeholder="" type="text" name="product_name">
                        </div>
                    </div>
                    <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                        <div class="mb-2">
                            <label for="Last_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">
                                Harga Produk<small class="text-red-600 text-sm">*</small></label>
                            <input
                                class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                placeholder="" type="number" name="product_price">
                        </div>
                    </div>
                    <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                        <div class="mb-2">
                            <label for="Delivery_Address" class="font-medium text-sm text-slate-600 dark:text-slate-400">
                                Deskripsi Produk<small class="text-red-600 text-sm">*</small></label>
                            <textarea
                                class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                placeholder="" name="product_desc"></textarea>
                        </div>
                    </div>
                    <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2">
                        <div class="mb-2">
                            <label for="Address" class="font-medium text-sm text-slate-600 dark:text-slate-400">URL
                                Gambar Produk</label>
                            <input
                                class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                placeholder="" type="text" name="product_image">
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit"
                            class="inline-block focus:outline-none text-white hover:bg-brand-500 hover:text-white bg-brand-500 border border-gray-200 text-sm font-medium py-1 px-3 rounded">Save</button>
                        <button type="reset"
                            class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200  text-sm font-medium py-1 px-3 rounded">Cancle</button>
                    </div>
                </div><!--end card-body-->
            </div> <!--end card-->
        </form>
    </div><!--end col-->
@endsection
