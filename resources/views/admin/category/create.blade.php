@extends('layouts.dashboard')

@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

         <!-- Start Recent Sales -->
    <div class="card col-span-4 xl:col-span-1 ">
        <div class="card-header flex justify-between">
            Create Problems
            <a href="{{ route('category.index') }}" class="btn-shadow">Back</a>
        </div>


    </div>
    <!-- End Recent Sales -->
    </div>
        <!-- End General Report -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('category.store')}} " method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-6 flex">
                           <div class=" flex-1 mr-4">
                            <label for="name" class="cursor-pointer block text-sm mb-1
                            ">category</label>
                            <input type="text" name="name" id="name" class="w-full rounded border border-gray-600 py-2
                            " value="{{old('username')}}">

                            @error('name')
                                <p class="text-red-700 text-sm"></p>
                            @enderror
                           </div>

                           <div class="flex-1 ml-4">
                            <label for="username" class="cursor-pointer block text-sm mb-1">slug</label>
                            <input type="text" name="username" id="username" class="w-full rounded border border-gray-600 py-2" value="{{old('username')}}">
                            @error('username')
                              <p class="text-red-700 text-sm"></p>
                            @enderror
                           </div>
                        </div>

                     </div>

                        <div class="mt-6">
                            <button type="submit" class="px-4 py-2 text-base uppercase bg-blue-600 text-white rounded-md">Create</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
