@extends("layout.core")

@section("container")
    <div onclick="openSidebar()" class="lg:hidden fixed m-1 cursor-pointer z-50 left-0 bottom-0 p-3 text-white border rounded-lg bg-gray-900">
        <p><< >></p>
    </div>

    @include("partials.dashboard.sidebar", compact("user"))

    <div class="font-jost ml-0 lg:ml-80 mt-16 lg:mt-24 p-5">
        <h1 class="font-bold text-xl md:text-3xl pb-5">Editing: {{ $contact->type }}</h1>

        <form onsubmit="return confirm('Do you really want to update this contact?');" method="POST" action="/dashboard/manage-contacts/{{ $contact->id }}" class="w-full lg:w-1/2">
            @csrf

            <div class="flex flex-col">
                <label class="text-lg py-2" for="url">Value</label>
                <input value="{{ $contact->value }}" class="p-2 border border-gray-300 rounded-lg" type="text" name="url" id="url" placeholder="Enter a valid URL..." required>
            </div>

            <input type="hidden" name="type" value="{{ $contact->type }}">

            {{-- method spoofing --}}
            <input type="hidden" name="_method" value="PUT">

            <button type="submit" class="w-full md:w-1/2 py-2 font-bold rounded-lg my-5 text-white bg-yellow-500 hover:bg-yellow-600">Update</button>
        </form>
    </div>
@endsection