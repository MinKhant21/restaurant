@extends('admin.components.main')
@section('content')

<div class="flex justify-end">
   
  <a href="{{ route('admin.categories.create') }}" data-modal-toggle="defaultModal" type="button" class="text-white bg-gradient-to-br from-green-400 to-green-700 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 text-center inline-flex items-center mt-3 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform gap-2">
    <i class="fa-solid fa-plus"></i> New Category</a>
</div>

<div class="relative overflow-x-auto shadow-md rounded-lg">
  <table class="w-full text-sm text-center text-gray-500">
      <thead class="text-xs text-gray-100 uppercasec bg-gray-800">
          <tr>
              <th scope="col" class="px-6 py-3">
                No
              </th>
              <th scope="col" class="px-6 py-3">
                 Name
              </th>
              <th scope="col" class="px-6 py-3">
                 Total Items
              </th>
              <th scope="col" class="px-6 py-3">
                Timestamp
              </th>
              <th scope="col" class="px-6 py-3">
              </th>
          </tr>
      </thead>
      <tbody>
          @foreach($data as $i=>$d)
            <tr class="bg-white border-b hover:bg-gray-50">
              <td class="px-6 py-4">
                  {{ $i+1 }}
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                  {{ $d->name }}
              </th>
              <td class="px-6 py-4 text-center">
               {{ count($d->items) }}
              </td>
              <td class="px-6 py-4 text-center">
                <i class="fa-solid fa-clock"></i>
                  {{ $d->created_at->diffForHumans() }}
              </td>
              <td class="px-6 py-4 text-lg">
                <a href="{{ route('admin.categories.edit', $d->id) }}" class="text-red-400">
                  <i class="fa-solid fa-edit"></i>
                </a>
                <form class="inline ml-2" action="{{ route('admin.categories.destroy',$d->id) }}" method="POST">@csrf {{ method_field('delete') }}
                    <button type="submit" class="text-gray-700">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>

@endsection