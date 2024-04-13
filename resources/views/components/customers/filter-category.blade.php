<div>
    <h4 class="font-medium flex-1 self-center mb-3 text-base">Categories</h4>
    <form action="">
        < @foreach ($categories as $item) <a href="/beranda?category_id={{ $item->id }}">
            <div class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">
                <label class="custom-label inline-block dark:text-slate-300">
                    <span class="ms-1">{{ $item->name }}</span>
                </label>
            </div>
            <span class="ms-1">Fashion</span>
            </label>
</div>

</a>
@endforeach
<div class="block my-2">
    <label class="custom-label inline-block dark:text-slate-300">
        <div class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
            <input type="checkbox" class="hidden" checked>
            <i class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
        </div>
        <span class="ms-1">Phone</span>
    </label>
</div>
<div class="block my-2">
    <label class="custom-label inline-block dark:text-slate-300">
        <div class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
            <input type="checkbox" class="hidden" checked>
            <i class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
        </div>
        <span class="ms-1">Smartwatch</span>
    </label>
</div>
<div class="block my-2">
    <label class="custom-label inline-block dark:text-slate-300">
        <div class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
            <input type="checkbox" class="hidden" checked>
            <i class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
        </div>
        <span class="ms-1">Laptops</span>
    </label>
</div>
<div class="block my-2">
    <label class="custom-label inline-block dark:text-slate-300">
        <div class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
            <input type="checkbox" class="hidden" checked>
            <i class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
        </div>
        <span class="ms-1">Jewelry</span>
    </label>
</div>
<div class="block my-2">
    <label class="custom-label inline-block dark:text-slate-300">
        <div class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
            <input type="checkbox" class="hidden" checked>
            <i class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
        </div>
        <span class="ms-1">Kitchen pro.</span>
    </label>
</div>
<div class="block my-2">
    <label class="custom-label inline-block dark:text-slate-300">
        <div class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
            <input type="checkbox" class="hidden" checked>
            <i class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
        </div>
        <span class="ms-1">Home decor</span>
    </label>
</div>
<div class="block my-2">
    <label class="custom-label inline-block dark:text-slate-300">
        <div class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
            <input type="checkbox" class="hidden" checked>
            <i class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
        </div>
        <span class="ms-1">Shoes</span>
    </label>
</div>
</form>
</div>