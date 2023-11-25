@extends("layout/core")

@section("container")

  <div onclick="openSidebar()" class="lg:hidden fixed m-1 cursor-pointer z-50 left-0 bottom-0 p-3 text-white border rounded-lg bg-gray-900">
      <p><< >></p>
  </div>

  @include("partials.dashboard.sidebar", compact("user"))

  <div class="font-jost ml-0 lg:ml-80 mt-16 lg:mt-24 p-5">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
      <h1 class="font-bold text-xl md:text-3xl pb-5">All services</h1>
      <a class="bg-green-500 px-3 py-1 rounded-lg text-white mb-5 md:mb-0 hover:bg-green-600" href="/dashboard/services/create">Create new service</a>
    </div>

    @if(session("success"))
      <div class="flash-alert flex w-full md:w-1/2 lg:w-1/3 mb-5 shadow-lg rounded-lg">
        <div class="bg-green-600 py-4 px-6 rounded-l-lg flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="text-white fill-current" viewBox="0 0 16 16" width="20" height="20"><path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path></svg>
        </div>
        <div class="px-4 py-6 bg-white rounded-r-lg flex justify-between items-center w-full border border-l-transparent border-gray-200">
          <div>{{ session("success") }}</div>
          <button onclick="closeAlert()">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700" viewBox="0 0 16 16" width="20" height="20"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
          </button>
        </div>
      </div>
    @endif

    <div>
      @if($services->count() > 0)
        @foreach($services as $s)
            <article class="mb-2 p-6 bg-white flex flex-col sm:flex-row justify-between items-center rounded-lg border border-gray-200 shadow-md">
                <h2 class="mb-2 text-2xl tracking-tight text-gray-900"><a href="/dashboard/blogs/{{ $s->slug }}">{{ $s->title }}</a></h2>

                <div class="flex items-center justify-center">
                    <a class="px-3 mr-1 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-lg" href="/dashboard/services/{{ $s->slug }}">View</a>
                    <a class="px-3 mr-1 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg" href="/dashboard/services/{{ $s->slug }}/edit">Edit</a>
                    <form onsubmit="return confirm('Do you really want to delete this service?');" action="/dashboard/blogs/{{ $s->id }}/destroy" method="POST">
                    @csrf
                    <button class="px-3 py-1 bg-red-500 hover:bg-red-700 text-white rounded-lg">Delete</button>
                    </form>
                </div>
            </article>                
        @endforeach
      @else
        <p class="text-red-500">No services published.</p>
      @endif
    </div>
  </div>
@endsection