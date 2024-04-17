<div>
    <h4 class="font-medium flex-1 self-center mb-3 text-base">Categories</h4>
    <form action="">
        @foreach ($categories as $item)
            <a href="{{ route('customer.products') }}?category_id={{ $item->id }}">
                <div
                    class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full">
                    <label class="custom-label inline-block">
                        <span class="ms-1">{{ $item->name }}</span>
                    </label>
                </div>
            </a>
        @endforeach
    </form>
</div>
