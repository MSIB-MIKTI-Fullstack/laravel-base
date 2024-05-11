<x-customer-layout>
<div class="page-wrapper relative  duration-300 pt-0 w-full">
        <div class="xl:w-full  min-h-[calc(100vh-56px)] relative pb-0">
            <div class="container my-4 bg-white">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                        <div class="grid grid-cols-1">
                            <div class="sm:-mx-6 lg:-mx-8">
                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                    <table id="data-table" class="w-full" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID Transaction</th>
                                                <th>Status</th>
                                                <th>Total Checkout</th>
                                                <th>Shipping Cost</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div><!--end div-->
                            </div><!--end div-->
                        </div><!--end grid-->
                    </div><!--end col-->
                </div> <!--end grid-->
            </div><!--end container-->
        </div>
    </div><!--end page-wrapper-->
</x-customer-layout>

<script>
    let table;
    $(document).ready(function() {
        initializeTable()
    })
    function initializeTable() {
        table = new DataTable('#data-table', {
            ajax: `{{ route('customer.transaction.datatable') }}`,
            processing: true,
            serverSide: true,
            columns: [{
                    data: 'id',
                    name: 'id',
                },
                {
                    data: 'status',
                    name: 'status',
                },
                {
                    data: 'total_checkout',
                    name: 'total_checkout',
                },
                {
                    data: 'shipping_cost',
                    name: 'shipping_cost',
                }
            ]
        });
    }
</script>