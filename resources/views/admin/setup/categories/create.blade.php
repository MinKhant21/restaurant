@extends('admin.components.main')
@section('content')
<div class="flex justify-center">
  <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div class="flex items-center p-5 rounded-t border-b border-gray-200 relative">
            <a href="{{ route('admin.categories.index') }}" class="absolute left-0 ml-8 text-sm">
              <i class="fa-solid fa-angle-left"></i> Back
            </a>
            <h3 class="w-full text-lg text-center font-semibold text-gray-900">
                Create New Category
            </h3>
              
          </div>
          <!-- Modal body -->
          <div class="p-6 space-y-6">
              <form action="{{ route('admin.categories.store') }}" method="POST" class="flex flex-col gap-4" id="createForm" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="email-adress-icon" class="block mb-2 text-sm font-medium text-gray-700">Category Name</label>

                  <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                      <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <input type="text" name="name" id="email-adress-icon" class="bg-transparent border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5 pl-10 " placeholder="Enter Category's name" value="{{ old('name') }}">
                  </div>
                  @if(isset($errors))
                    @foreach($errors->get('name') as $e)
                    <p class="text-sm text-red-500">{{ $e }}</p>
                    @endforeach
                  @endif
                </div>
                
              </form>
          </div>
          <!-- Modal footer -->
          <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200">
              <button type="submit" form="createForm" class="text-white bg-gradient-to-br from-pink-500 to-violet-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 text-center inline-flex items-center shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform"> Create</button>
              <button data-modal-toggle="defaultModal" type="button" class="text-gray-600 bg-white hover:bg-gray-100 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
          </div>
      </div>
  </div>
</div>
@endsection