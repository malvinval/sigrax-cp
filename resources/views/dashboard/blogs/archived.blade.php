@extends('layout/core')

@section("container")

    <div onclick="openSidebar()" class="lg:hidden fixed m-1 cursor-pointer z-50 left-0 bottom-0 p-3 text-white border rounded-lg bg-gray-900">
        <p><< >></p>
    </div>
  
    @include("partials.dashboard.sidebar", compact("user"))
  
    <div class="font-jost ml-0 lg:ml-80 mt-16 lg:mt-24 p-5">
      <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
        <h1 class="font-bold text-xl md:text-3xl pb-5">Archived blogs</h1>
    </div>

    <div>
        @if($blogs->count() > 0)
          @foreach($blogs as $b)
              <article class="mb-2 p-6 bg-white rounded-lg border border-gray-200 shadow-md">
                  <div class="flex justify-between items-center mb-5 text-gray-500">
                      <span class="text-sm">{{ $b->created_at }}</span>
                      <span class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-amber-600 bg-amber-200 uppercase last:mr-0 mr-1">
                        archived
                      </span>
                  </div>
                  <h2 class="mb-2 text-2xl tracking-tight text-gray-900"><a href="/dashboard/blogs/{{ $b->slug }}">{{ $b->title }}</a></h2>
                  <p class="mb-5 font-light text-gray-500">{{ $b->excerpt }}</p>
                  <div class="flex flex-col md:flex-row justify-between md:items-center">
                      <div class="flex items-center space-x-4">
                          <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar" />
                          <span class="font-medium text-gray-900">
                              by: {{ $b->author }}
                          </span>
                      </div>
                      <div class="pt-5 flex ">
                        <a class="px-3 mr-1 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-lg" href="/dashboard/blogs/{{ $b->slug }}">View</a>
                        <a class="px-3 mr-1 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg" href="/dashboard/blogs/{{ $b->slug }}/edit">Edit</a>
                        <form onsubmit="return confirm('Do you really want to delete this archived blog?');" action="/dashboard/blogs/{{ $b->id }}/destroy" method="POST">
                          @csrf
                          <button class="px-3 py-1 bg-red-500 hover:bg-red-700 text-white rounded-lg">Delete</button>
                        </form>
                      </div>
                  </div>
              </article>                
          @endforeach
        @else
          <p class="text-red-500">No blogs archived.</p>
        @endif
      </div>
    </div>

@endsection