@extends("layout/core")

@section("container")
    <div onclick="openSidebar()" class="lg:hidden fixed m-1 cursor-pointer z-50 left-0 bottom-0 p-3 text-white border rounded-lg bg-gray-900">
        <p><< >></p>
    </div>

    @include("partials.dashboard.sidebar", compact("user"))

    <div class="font-jost ml-0 lg:ml-80 mt-16 lg:mt-24 p-5">
        <h1 class="font-bold text-xl md:text-3xl pb-5">Create new blog</h1>

        <form method="POST" action="/dashboard/blogs" class="w-full lg:w-1/2">
            @csrf

            <div class="flex flex-col">
                <label class="text-lg py-2" for="title">Title</label>
                <input class="p-2 border border-gray-300 rounded-lg" type="text" name="title" id="title" placeholder="Make an interesting title..." required>
            </div>

            <div class="flex flex-col">
                <label class="text-lg py-2">Content</label>
                <textarea placeholder="Make an interesting content..." class="p-5 border border-gray-300 rounded-lg" name="content" id="content" cols="30" rows="10" required></textarea>
            </div>

            <button type="submit" class="w-full md:w-1/2 py-2 font-bold rounded-lg my-5 text-white bg-green-500 hover:bg-green-600">Upload</button>
        </form>
    </div>
@endsection