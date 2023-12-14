@extends("layout/core")

@section("container")
    <div onclick="openSidebar()" class="lg:hidden fixed m-1 cursor-pointer z-50 left-0 bottom-0 p-3 text-white border rounded-lg bg-gray-900">
        <p><< >></p>
    </div>

    @include("partials.dashboard.sidebar", ["user_name", compact("user")])

    <div class="font-jost ml-0 lg:ml-80 mt-16 lg:mt-24 p-5">
        <h1 class="font-bold text-xl md:text-3xl pb-5">Editing: {{ $feature->title }}</h1>

        <p class="pb-5 text-xl">Related product: <span class="underline">{{ $product->first()->title }}</span></p>

        <form onsubmit="return confirm('Do you really want to update this feature?');" method="POST" action="/dashboard/features/{{ $feature->slug }}?product={{ $feature->product_slug }}" class="w-full lg:w-1/2">
            @csrf

            <input type="hidden" name="_method" value="PUT">

            <div class="flex flex-col">
                <label class="text-lg py-2" for="title">Feature name</label>
                <input value="{{ $feature->title }}" class="p-2 border border-gray-300 rounded-lg" type="text" name="title" id="title" placeholder="Enter feature name..." required>
            </div>

            <div class="flex flex-col">
                <label class="text-lg py-2">Description</label>
                <input value="{{ $feature->desc }}" id="desc" type="hidden" name="desc">
                <trix-editor class="trix-content" input="desc"></trix-editor>
            </div>

            {{-- <div class="flex mt-5 items-center">
                @if($product->isArchived == '0')
                    <input type="checkbox" name="public" id="public" checked>
                @else
                    <input type="checkbox" name="public" id="public">
                @endif
                <label class="mx-2" for="public"><p class="text-lg">Set as Public</p></label>
            </div> --}}

            <div class="flex flex-col">
                <label for="heroimage" class="text-lg py-2">Image (optional)</label>

                <img class="mb-5" src="{{ asset('storage/'.$feature->heroimage) }}" alt="">

                <input id="heroimage" type="file" name="heroimage">
            </div>

            <button type="submit" class="w-full md:w-1/2 py-2 font-bold rounded-lg my-5 text-white bg-yellow-500 hover:bg-yellow-600">Update</button>
        </form>
    </div>

@endsection