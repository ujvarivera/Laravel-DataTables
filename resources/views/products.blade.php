<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <table class="table table-bordered" id="products-table">
                    <thead>
                        <tr>
                            <th>Text</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>

                <script>
                    $(function() {
                        $('#products-table').DataTable({
                            processing: true,
                            serverSide: true,
                            ajax: '{!! route('products.index') !!}',
                            columns: [
                                { data: 'text', name: 'text' },
                                { data: 'author', name: 'author' },
                                { data: 'action', name: 'action', orderable: false, searchable: false }
                            ]

                        });
                    });
                </script>

            </div>
        </div>
    </div>
</x-app-layout>
