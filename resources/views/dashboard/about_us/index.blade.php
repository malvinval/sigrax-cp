@extends("layout/core")

@section("container")

  <div onclick="openSidebar()" class="lg:hidden fixed m-1 cursor-pointer z-50 left-0 bottom-0 p-3 text-white border rounded-lg bg-gray-900">
      <p><< >></p>
  </div>

  @include("partials.dashboard.sidebar", compact("user"))
  <div class="font-jost ml-0 lg:ml-80 mt-16 lg:mt-24 p-5">
    <div class="flex flex-col w-full lg:w-1/3 pb-5">
        <h1 class="font-bold text-xl md:text-3xl pb-5">Section {{ $section }}</h1>
        <form class="flex" method="GET" action="/dashboard/about-us">            
            <select name="section" id="section" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose section</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>

            <button class="mx-1 bg-green-600 text-white px-3 py-1 rounded-lg" type="submit">Choose</button>
        </form>
    </div>

    <div>
        @if($contents->count() > 0)
            @foreach($contents as $c)
            <article class="mb-2 p-6 bg-white rounded-lg border border-gray-200 shadow-md">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="text-sm">last updated: {{ $c->updated_at }}</span>
                </div>
                <h2 class="mb-2 text-2xl tracking-tight text-gray-900"><a href="}">{{ $c->subsection }}</a></h2>
                <p class="mb-5 font-medium text-gray-500">{{ $c->content }}</p>
                <div class="flex flex-col md:flex-row justify-between md:items-center">
                    <div class="pt-5 flex ">
                        <a class="px-3 mr-1 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-lg" href="/dashboard/about-us/{{ $c->subsection }}">View</a>
                        <a class="px-3 mr-1 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg" href="/dashboard/about-us/{{ $c->subsection }}/edit">Edit</a>
                        <form onsubmit="return confirm('Do you really want to delete this blog?');" action="/dashboard/blogs/{{ $c->subsection }}/destroy" method="POST">
                        @csrf
                        <button class="px-3 py-1 bg-red-500 hover:bg-red-700 text-white rounded-lg">Delete</button>
                        </form>
                    </div>
                </div>
            </article>                
        @endforeach
        @else
            <p class="text-red-500 py-5">This section is empty.</p>
        @endif
    </div>
  </div>
@endsection


