@extends('admin.components.main')
@section('content')
<div class="flex justify-center">
  <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div class="flex items-center p-5 rounded-t border-b border-gray-200 relative">
            <a href="{{ route('admin.items.index') }}" class="absolute left-0 ml-8 text-sm">
              <i class="fa-solid fa-angle-left"></i> Back
            </a>
            <h3 class="w-full text-lg text-center font-semibold text-gray-900">
                Edit Item
            </h3>
              
          </div>
          <!-- Modal body -->
          <div class="p-6 space-y-6">
              <form action="{{ route('admin.items.update', $data->id) }}" method="POST" class="flex flex-col gap-4" id="createForm" enctype="multipart/form-data">
                @csrf {{method_field('put')}}
                <div class="form-group">
                  <label for="email-adress-icon" class="block mb-2 text-sm font-medium text-gray-700">Item Name</label>

                  <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                      <i class="fa-solid fa-pizza-slice"></i>
                    </div>
                    <input type="text" name="name" class="bg-transparent border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5 pl-10" placeholder="Enter Item's name" value="{{ $data->name }}">
                  </div>
                  @if(isset($errors))
                    @foreach($errors->get('name') as $e)
                    <p class="text-sm text-red-500">{{ $e }}</p>
                    @endforeach
                  @endif
                </div>
                
                <div class="form-group">
                  <label for="countries" class="block mb-2 text-sm font-medium text-gray-700">Select Category</label>
                  
                  <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                      <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <select name="categories_id" id="countries" class="bg-transparent border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5 pl-10">
                      <option disabled>--Select ≈--</option>
                      @foreach ($categories as $c)
                          <option {{ $data->categories_id == $c->id ? 'selected' : '' }} value="{{ $c->id }}">{{ $c->name }}</option>
                      @endforeach
                    </select>
                  </div>

                  @if(isset($errors))
                    @foreach($errors->get('categories_id') as $e)
                    <p class="text-sm text-red-500">{{ $e }}</p>
                    @endforeach
                  @endif
                </div>

                <div class="form-group">
                  <label for="email-adress-icon" class="block mb-2 text-sm font-medium text-gray-700">Item's Price</label>

                  <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                      <i class="fa-solid fa-dollar"></i>
                    </div>
                    <input type="number" name="price" class="bg-transparent border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5 pl-10" placeholder="Enter Item's Price" value="{{ $data->price }}">
                  </div>

                  @if(isset($errors))
                    @foreach($errors->get('price') as $e)
                    <p class="text-sm text-red-500">{{ $e }}</p>
                    @endforeach
                  @endif
                </div>


                <div class="form-group">
                  <label for="img" class="border border-gray-200 border-dashed rounded-lg flex justify-center py-6">
                    <div id="previewText" style="display: none" class="flex flex-col items-center justify-center">
                      <i class="fa-solid fa-image"></i>
                      Upload Image Here
                    </div>
                    <img src="{{ asset('items/'.$data->img) }}" class="w-1/3" alt="" id="previewArea">
                  </label>
                  <input type="file" name="img" onchange="previewImg(this)" name="" hidden id="img">
                </div>
                
                @if(isset($errors))
                  @foreach($errors->get('img') as $e)
                  <p class="text-sm text-red-500">{{ $e }}</p>
                  @endforeach
                @endif
              </form>
          </div>
          <!-- Modal footer -->
          <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200">
              <button type="submit" form="createForm" class="text-white bg-gradient-to-br from-pink-500 to-violet-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 text-center inline-flex items-center shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform"> Update</button>
              <button data-modal-toggle="defaultModal" type="button" class="text-gray-600 bg-white hover:bg-gray-100 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
          </div>
      </div>
  </div>
</div>
@endsection