<x-customer.app title="Products">
  <div class="container my-4">
    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">

      {{-- Filter Categories --}}
      <x-customer.filter-category />

      {{-- List Products --}}
      <div class="col-span-12 sm:col-span-8 md:col-span-9 lg:col-span-9 xl:col-span-9">
        <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">

          @if ($products->count() == 0)
            <p>Products not found.</p>
          @else
            @foreach ($products as $product)
              <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                <div
                  class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                  <div class="flex-auto  text-center">
                    <div class="flex-auto text-center bg-gray-100">
                      <span
                        class="absolute right-2 top-2 focus:outline-none text-[12px] bg-red-600/10 text-red-500 dark:text-red-600 rounded font-medium py-0 px-2 mb-5 inline-block">Soldout</span>
                      <a href="customers-pro-details.html">
                        <img src="{{ $product->image }}" alt=""
                          class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                      </a>
                    </div>
                    <div class="flex-auto  text-center p-4">
                      <span
                        class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">{{ $product->product_category->name }}</span>
                      <a href="{{ route('customer.product.detail', ['slug' => $product->slug]) }}"
                        class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2 truncate">{{ $product->name }}
                      </a>
                      <div class="mb-4">
                        <i class="icofont-star text-yellow-400 inline-block"></i>
                        <i class="icofont-star text-yellow-400 inline-block"></i>
                        <i class="icofont-star text-yellow-400 inline-block"></i>
                        <i class="icofont-star text-yellow-400 inline-block"></i>
                        <i class="icofont-star text-yellow-400 inline-block"></i>
                        <span class="text-slate-800 font-semibold">4.8</span>
                      </div>
                      <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup class="text-sm text-slate-500">Rp.
                        </sup>
                        {{ number_format($product->price, 0, ',', '.') }} <del class="text-base text-slate-400">Rp.
                          {{ number_format($product->price - 10000, 0, ',', '.') }}</del></h4>
                      {{-- dummy discount --}}
                      <a href="{{ route('customer.product.detail', ['slug' => $product->slug]) }}">
                        <button type="button"
                          class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">Buy
                          Now</button>
                      </a>
                    </div>
                  </div>
                </div> <!--end card-->
              </div><!--end col-->
            @endforeach
          @endif
        </div><!--end inner-grid-->

        <div class="mt-5 mx-1">
          {{ $products->links() }}
        </div>
      </div><!--end col-->

    </div> <!--end grid-->
  </div><!--end container-->
</x-customer.app>
