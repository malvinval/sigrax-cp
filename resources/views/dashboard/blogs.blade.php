@extends("layout/core")

@section("container")

  <div onclick="openSidebar()" class="fixed m-1 cursor-pointer z-50 left-0 bottom-0 p-3 text-white border rounded-lg bg-gray-900">
      <p><< >></p>
  </div>

  <div
        class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] pt-20 overflow-y-auto text-center bg-gray-900"
      >
      </span>
        <div class="text-gray-100 text-xl">
          <div class="p-2.5 mt-1 flex items-center">
              <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
            <h1 class="font-bold text-gray-200 text-[15px] ml-3">{{ $user->name }}</h1>
            {{-- <span onclick="openSidebar()">Open</span> --}}
          </div>
          <div class="my-2 bg-gray-600 h-[1px]"></div>
        </div>
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        >
          <i class="bi bi-house-door-fill"></i>
          <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
        </div>
        <div class="my-4 bg-gray-600 h-[1px]"></div>
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
          onclick="dropdown()"
        >
          <i class="bi bi-chat-left-text-fill"></i>
          <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Blogs</span>
            <span class="text-sm rotate-180" id="arrow">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div
          class="text-left flex flex-col text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold"
          id="submenu"
        >
          <a href="/dashboard/blogs" class="selection:text-fuchsia-900 cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            All blogs
          </a>
          <a class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            Archived blogs
          </a>
          <a class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            Create blog
          </a>
        </div>
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        >
          <i class="bi bi-box-arrow-in-right"></i>
          <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
        </div>
  </div>

  <div class="font-jost ml-0 sm:ml-52 lg:ml-80 mt-16 lg:mt-24 p-5">
    <h1 class="font-bold text-xl md:text-3xl pb-5">All blogs uploaded</h1>

    <div>
      @foreach($blogs as $b)
          <article class="mb-2 p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <div class="flex justify-between items-center mb-5 text-gray-500">
                  <span class="text-sm">{{ $b->created_at }}</span>
              </div>
              <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="">{{ $b->title }}</a></h2>
              <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ $b->excerpt }}</p>
              <div class="flex justify-between items-center">
                  <div class="flex items-center space-x-4">
                      <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar" />
                      <span class="font-medium dark:text-white">
                          by: {{ $b->author }}
                      </span>
                  </div>
                  <a href="" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                      Read more
                      <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </article>                
      @endforeach
    </div>
  </div>
@endsection