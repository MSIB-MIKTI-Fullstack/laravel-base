@extends('layouts.admin.app')
@section('content')
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
                                            <th>ID Product</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Action</th>
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
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            initializeTable()
        })
        function initializeTable() {
            table = new DataTable('#data-table', {
                ajax: `{{ route('admin.product.index') }}`,
                processing: true,
                serverSide: true,
                columns: [{
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'product_category.name',
                        name: 'product_category.name'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ],
                drawCallback: function(settings) {
                    //
                }
            });
        }
    </script>
@endsection
