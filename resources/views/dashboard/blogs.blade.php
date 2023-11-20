@extends("layout/core")

@section("container")

  <div onclick="openSidebar()" class="lg:hidden fixed m-1 cursor-pointer z-50 left-0 bottom-0 p-3 text-white border rounded-lg bg-gray-900">
      <p><< >></p>
  </div>

  <div
        class="sidebar hidden lg:block fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] pt-20 overflow-y-auto text-center bg-gray-900"
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

  <div class="font-jost ml-0 lg:ml-80 mt-16 lg:mt-24 p-5">
    <h1 class="font-bold text-xl md:text-3xl pb-5">All blogs uploaded</h1>

    <div>
      @foreach($blogs as $b)
          <article class="mb-2 p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <div class="flex justify-between items-center mb-5 text-gray-500">
                  <span class="text-sm">{{ $b->created_at }}</span>
              </div>
              <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="">{{ $b->title }}</a></h2>
              <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ $b->excerpt }}</p>
              <div class="flex flex-col md:flex-row justify-between md:items-center">
                  <div class="flex items-center space-x-4">
                      <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar" />
                      <span class="font-medium dark:text-white">
                          by: {{ $b->author }}
                      </span>
                  </div>
                  <div class="pt-5">
                    <a class="px-3 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-lg" href="">View</a>
                    <a class="px-3 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg" href="">Edit</a>
                    <a class="px-3 py-1 bg-red-500 hover:bg-red-700 text-white rounded-lg" href="">Delete</a>
                  </div>
              </div>
          </article>                
      @endforeach
    </div>
  </div>
@endsection