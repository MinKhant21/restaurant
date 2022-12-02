@extends('admin.components.main')
@section('content')
    <section>
        <h1 class="font-bold text-gray-800 text-2xl">Order History</h1>
        <div class="flex flex-col my-6 rounded-2xl shadow-xl shadow-gray-200">
            <div class="overflow-x-auto rounded-2xl">
            <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200 table-fixed">
            <thead class="bg-white">
            <tr>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
            Table Name
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
            Order Items
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
            Order Code
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
            Timestamp
            </th>
            <th scope="col" class="p-4 lg:p-5">
            </th>
            </tr>
            </thead>
            <tbody id="orders" class="bg-white divide-y divide-gray-200">
            @foreach ($data as $d)
            <tr class="">
                <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                <div class="text-base font-semibold text-gray-900">{{ $d->reservation[0]->tables->name }}</div>
                </td>
                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">
                    @php
                    $total = 0;
                    foreach($d->reservation as $reserve){
                        $total += $reserve->quantity;
                    }   
                    echo $total;
                    @endphp
                </td>
                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">#{{ $d->code }}</td>
                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">{{ $d->created_at->diffForHumans() }}</td>
                <td class="p-4 space-x-2 whitespace-nowrap lg:p-5">
                    <form action="{{ route('admin.order_history.destroy', $d->id) }}" method="POST">
                        {{ method_field('delete') }} @csrf
                        <button class="gap-2 inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-gradient-to-br from-red-400 to-red-600 rounded-lg shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                            <i class="fa-solid fa-trash"></i>
                        </button>

                    <a href="{{ route('admin.order_history.show', $d->id) }}" class="gap-2 inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-gradient-to-br from-green-400 to-green-600 rounded-lg shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
    </section>
@endsection