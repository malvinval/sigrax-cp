@extends("layout.core")

@section("container")

    <div onclick="openSidebar()" class="lg:hidden fixed m-1 cursor-pointer z-50 left-0 bottom-0 p-3 text-white border rounded-lg bg-gray-900">
        <p><< >></p>
    </div>

    @include("partials.dashboard.sidebar")

    <div class="font-jost ml-0 lg:ml-80 mt-16 lg:mt-24 p-5">
        <h1 class="font-bold text-xl md:text-3xl pb-5">Create new contact</h1>

        <form onsubmit="return confirm('Do you really want to publish this contact?');" method="POST" action="/dashboard/manage-contacts" class="w-full lg:w-1/2">
            @csrf

            <div class="flex flex-col">
                <label class="text-lg py-2" for="title">Type</label>
                
                <select name="type" id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a contact type</option>
                    <option value="WHATSAPP">WHATSAPP</option>
                    <option value="EMAIL">EMAIL</option>
                    <option value="INSTAGRAM">INSTAGRAM</option>
                    <option value="GITHUB">GITHUB</option>
                    <option value="TWITTER">TWITTER</option>
                </select>
            </div>

            <div class="flex flex-col">
                <label class="text-lg py-2" for="url">Value</label>
                <input class="p-2 border border-gray-300 rounded-lg" type="text" name="url" id="url" placeholder="email: maintainance@sigrax.com, whatsapp: 628176884026" required>
            </div>

            <button type="submit" class="w-full md:w-1/2 py-2 font-bold rounded-lg my-5 text-white bg-green-500 hover:bg-green-600">Create</button>
        </form>
    </div>

@endsection