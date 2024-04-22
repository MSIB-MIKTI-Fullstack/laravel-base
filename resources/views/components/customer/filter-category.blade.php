<div class="col-span-12 sm:col-span-4 md:col-span-3 lg:col-span-3 xl:col-span-3">
    <div class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative">
      <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-4 px-4 dark:text-slate-300/70">
        <h4 class="font-medium flex-1 self-center mb-2 md:mb-0 text-xxl">Filters</h4>
      </div>
      <div class="flex-auto p-4">
        <h4 class="font-medium flex-1 self-center mb-3 text-base">Categories</h4>
        <form action="">
          <a href="{{ route('customer.product.index') }}">
              <div
                  class="px-4 py-1 lg:px-4 {{ Request::get('category_id') == '' ? 'bg-brand-500/10 text-brand-500' : 'bg-transparent text-brand' }} text-base transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">
                  <label class="custom-label inline-block">
                      <span class="ms-1">All Products</span>
                  </label>
              </div>
          </a>
          @foreach ($categories as $item)
              <a href="{{ route('customer.product.index') }}?category_id={{ $item->id }}">
                  <div
                      class="px-4 py-1 lg:px-4 {{ Request::get('category_id') == $item->id ? 'bg-brand-500/10 text-brand-500' : 'bg-transparent text-brand' }} text-base transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">
                      <label class="custom-label inline-block">
                          <span class="ms-1">{{ $item->name }}</span>
                      </label>
                  </div>
              </a>
          @endforeach
      </form>
      </div><!--end card-body-->
    </div> <!--end inner-grid-->
  </div><!--end col-->
