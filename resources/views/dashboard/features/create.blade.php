@extends("layout/core")

@section("container")
    <div onclick="openSidebar()" class="lg:hidden fixed m-1 cursor-pointer z-50 left-0 bottom-0 p-3 text-white border rounded-lg bg-gray-900">
        <p><< >></p>
    </div>

    @include("partials.dashboard.sidebar", compact("user"))

    <div class="font-jost ml-0 lg:ml-80 mt-16 lg:mt-24 p-5">
        <h1 class="font-bold text-xl md:text-3xl pb-5">Create new feature for <span class="underline">{{ $product->title }}</span></h1>

        <form onsubmit="return confirm('Do you really want to publish this feature?');" method="POST" action="/dashboard/features?product={{ $product->slug }}" class="w-full lg:w-1/2">
            @csrf

            <div class="flex flex-col">
                <label class="text-lg py-2" for="title">Feature name</label>
                <input class="p-2 border border-gray-300 rounded-lg" type="text" name="title" id="title" placeholder="Enter feature name..." required>
            </div>

            <div class="flex flex-col">
                <label class="text-lg py-2">Desc</label>
                <input id="desc" type="hidden" name="desc">
                <trix-editor class="trix-content" input="desc"></trix-editor>
            </div>

            {{-- <div class="flex mt-5 items-center">
                <input type="checkbox" name="public" id="public" checked>
                <label class="mx-2" for="public"><p class="text-lg">Set as Public</p></label>
            </div> --}}

            <button type="submit" class="w-full md:w-1/2 py-2 font-bold rounded-lg my-5 text-white bg-green-500 hover:bg-green-600">Upload</button>
        </form>
    </div>
@endsection