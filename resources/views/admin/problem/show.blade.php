@extends('layouts.dashboard')

@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

         <!-- Start Recent Sales -->
    <div class="card col-span-4 xl:col-span-1">
            <!-- Sales Overview -->
    <div class="card mt-6">

        <!-- header -->
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Problems</h1>
        </div>
        <!-- end header -->
            <!-- start numbers -->
    <div class="grid grid-cols-5 gap-6 xl:grid-cols-2 justify-center ml-20 ">

        <!-- card -->
        <div class="card mt-6">
            <div class="card-body flex items-center">

                <div class="px-3 py-2 rounded bg-indigo-600 text-white mr-3 ">
                    <i class="fad fa-wallet"></i>
                </div>

                <div class="flex flex-col">
                    <h1 class="font-semibold">Category</h1>
                    <p class="text-xs bg-indigo-600 text-white text-center mb-2">Laravel</p>
                </div>

            </div>
        </div>
        <!-- end card -->

        <!-- card -->
        <div class="card mt-6">
            <div class="card-body flex items-center">

                <div class="px-3 py-2 rounded bg-green-600 text-white mr-3">
                    <i class="fad fa-shopping-cart"></i>
                </div>

                <div class="flex flex-col">
                    <h1 class="font-semibold"> Tags</h1>
                    <p class="text-xs bg-green-600 text-white text-center mb-2">Laravel</p>
                    <p class="text-xs bg-green-600 text-white text-center">Vue</p>
                </div>

            </div>
        </div>
        <!-- end card -->

        <!-- card -->
        <div class="card mt-6 xl:mt-1">
            <div class="card-body flex items-center">

                <div class="px-3 py-2 rounded bg-yellow-600 text-white mr-3">
                    <i class="fad fa-calendar"></i>
                </div>

                <div class="flex flex-col">
                    <h1 class="font-semibold">Visivility</h1>
                    <p class="text-xs bg-yellow-600 text-white mr-3">active</p>
                </div>

            </div>
        </div>
        <!-- end card -->

        <!-- card -->
        <div class="card mt-6 xl:mt-1">
            <div class="card-body flex items-center">

                <div class="px-3 py-2 rounded bg-red-600 text-white mr-3">
                    <i class="fad fa-calendar"></i>
                </div>

                <div class="flex flex-col">
                    <h1 class="font-semibold">Date</h1>
                    <p class="text-xs bg-red-600 text-white mr-3">April 13 2022</p>
                </div>

            </div>
        </div>
        <!-- end card -->



    </div>
        <!-- end nmbers -->

        <!-- body -->
        <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">

            <div class="p-8">
                <h1 class=""> Problem detils <i class="fa fa-caret-down"></i></h1>
                <p class="text-black font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Ea quibusdam fugit et velit, sunt doloribus minus dolorum ratione facere! Fugiat.</p>
                <a href="#" class="btn-shadow mt-6">view more details <i class="fa fa-caret-right"></i></a>
            </div>

            <div class="">
                <div class="flex pb-2 items-center">
                    <img src="https://picsum.photos/100" alt="" class=" pr-2 ">
                    <img src="https://picsum.photos/100" alt="" class=" pr-2">
                    <img src="https://picsum.photos/100" alt="" class=" pr-2 ">
                    <img src="https://picsum.photos/100" alt="">
                </div>
                <div class="flex">
                    <img src="https://picsum.photos/100" alt="" class=" pr-2">
                    <img src="https://picsum.photos/100" alt="">
                </div>
            </div>

        </div>
        <!-- end body -->

    </div>
        <!-- end Sales Overview -->
         <!-- Start Recent Sales -->
    <div class="card col-span-4 xl:col-span-1">
            <!-- Sales Overview -->
    <div class="card mt-6">

        <!-- header -->
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">problem solv</h1>
        </div>
        <!-- end header -->


        <!-- body -->
        <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">

            <div class="p-8">
                <h1 class=""> problem solving details <i class="fa fa-caret-down"></i></h1>
                <p class="text-black font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Ea quibusdam fugit et velit, sunt doloribus minus dolorum ratione facere! Fugiat.</p>
                <a href="#" class="btn-shadow mt-6">view more details <i class="fa fa-caret-right"></i></a>
            </div>

            <div class="">
                <div class="flex pb-2 items-center">
                    <img src="https://picsum.photos/100" alt="" class=" pr-2 ">
                    <img src="https://picsum.photos/100" alt="" class=" pr-2">
                    <img src="https://picsum.photos/100" alt="" class=" pr-2 ">
                    <img src="https://picsum.photos/100" alt="">
                </div>
                <div class="flex">
                    <img src="https://picsum.photos/100" alt="" class=" pr-2">
                    <img src="https://picsum.photos/100" alt="">
                </div>
            </div>

        </div>
        <!-- end body -->

    </div>
        <!-- end Sales Overview -->
    </div>
    <!-- End Recent Sales -->


    </div>
        <!-- End General Report -->
@endsection
