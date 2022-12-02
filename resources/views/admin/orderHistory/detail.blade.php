@extends('admin.components.main')
@section('content')
    <section>
        <h1 class="font-bold text-gray-800 text-2xl">Order History Detail</h1>
        <div class="grid grid-cols-12">
            <h3 class="col-span-12 text-center font-bold text-xl">
                {{ $data->reservation[0]->tables->name }}
            </h3>
            <div class="col-span-12">
                <div class="flex flex-col my-6 rounded-2xl shadow-xl shadow-gray-200">
                    <div class="overflow-x-auto rounded-2xl">
                    <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed">
                    <thead class="bg-white">
                    <tr>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                    No
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                    Item Name
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                    Item Price
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                    Quantity
                    </th>
                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase lg:p-5">
                    Price
                    </th>
                    
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data->reservation as $index=>$reserve)
                        <tr class="">
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                                {{ $index + 1 }}
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap lg:p-5">
                                <div class="text-base font-semibold text-gray-900">{{ $reserve->items->name }}</div>
                            </td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">
                                {{ $reserve->items->price }}
                            </td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">
                                {{ $reserve->quantity }}
                            </td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap lg:p-5">
                                {{ $reserve->items->price * $reserve->quantity }} KS
                            </td>
                        </tr>
                        @endforeach
                        @php
                        $total = 0;
                            foreach($data->reservation as $r){
                                $total += $r->items->price * $r->quantity;
                            }
                        @endphp
                        <tr>
                           
                            <td colspan="2" class="pb-6 pl-4">
                                <form action="{{ route('admin.order_history.destroy', $data->id) }}" method="POST">
                                    {{ method_filed('delete') }} @csrf
                                    <button class="gap-2 inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-gradient-to-br from-red-400 to-red-600 rounded-lg shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform">
                                        <i class="fa-solid fa-trash"></i>
                                        Delete Order
                                    </button>
                                </form>
                                
                            </td>
                            <td colspan="2" class=" pb-6 text-right font-bold text-gray-600 text-xl">
                                Total Price : 
                            </td>
                            <td class="pl-6 pb-6 ">
                                {{$total}} KS
                            </td>
                        </tr>
                    </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                    </div>
           
            </div>
        </div>
    </section>
@endsection
@section('js')
</html>
@endsection