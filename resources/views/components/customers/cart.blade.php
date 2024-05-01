<button onclick="window.location.href = `{{ route('customer.cart.index') }}`" type="button"
    class="dropdown-toggle flex rounded-full md:me-0 h-10 w-10 items-center justify-center  border-[.5px] dark:border-slate-700/40 bg-[#f4f7ff] text-dark"
    id="Notifications" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
    <span data-lucide="shopping-cart" class=" w-5 h-5"></span>
    <span id="cart-total"
        class="absolute -top-1 -right-1 h-4 w-4 leading-4 rounded-full bg-brand text-[10px] font-semibold text-white">
        {{ $count }}
    </span>
</button>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
    $('#btn-cart').click(function() {
        window.location.href = `{{ route('customer.cart') }}`
    })
</script>
