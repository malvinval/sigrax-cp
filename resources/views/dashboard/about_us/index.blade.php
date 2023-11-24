@extends("layout/core")

@section("container")

  <div onclick="openSidebar()" class="lg:hidden fixed m-1 cursor-pointer z-50 left-0 bottom-0 p-3 text-white border rounded-lg bg-gray-900">
      <p><< >></p>
  </div>

    @if(session("success"))
        <div class="flash-alert fixed top-20 right-0 md:right-1 flex w-full md:w-1/2 lg:w-1/3 mb-5 shadow-lg rounded-lg">
            <div class="bg-green-600 py-4 px-6 rounded-l-lg flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-white fill-current" viewBox="0 0 16 16" width="20" height="20"><path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path></svg>
                </div>
                <div class="px-4 py-6 bg-white rounded-r-lg flex justify-between items-center w-full border border-l-transparent border-gray-200">
                <div class="font-jost">{{ session("success") }}</div>
                <button onclick="closeAlert()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700" viewBox="0 0 16 16" width="20" height="20"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
                </button>
            </div>
        </div>
    @endif

  @include("partials.dashboard.sidebar", compact("user"))

  <div class="font-jost ml-0 lg:ml-80 mt-16 lg:mt-24 p-5">
    <div class="flex flex-col w-full lg:w-1/3 pb-5">
        <h1 class="font-bold text-xl md:text-3xl pb-5">{{ $edit_mode === "1" ? "Editing: " : "" }} Section {{ $section }} </h1>
        <form class="flex" method="GET" action="/dashboard/about-us">             
            <select name="section" id="section" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="1">Choose section</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>

            <button class="mx-1 bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded-lg" type="submit">Choose</button>
        </form>
    </div>

    <div>
        @if($contents->count() > 0)
            @if($edit_mode === "0")
                <a class="underline font-bold px-5 mr-1 py-2 bg-yellow-500 hover:bg-yellow-600 text-gray-900 rounded-lg" href="/dashboard/about-us?section={{ $section }}&edit_mode=1">Enter edit mode</a>
            @else
                <a class="px-5 mr-1 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg" href="/dashboard/about-us?section={{ $section }}">Finish editing</a>
            @endif
                <div class="rounded-lg py-5">
                @include("templates.about_us.section$section", compact(
                    "contents", "edit_mode"
                ))
            </div>
        @else
            <p class="text-red-500 py-5">This section is empty.</p>
        @endif
    </div>
  </div>
@endsection


