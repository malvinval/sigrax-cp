@extends("layout/core")

@section("container")

<div onclick="openSidebar()" class="cursor-pointer absolute z-50 left-0 bottom-0 p-3 text-white border rounded-lg bg-gray-900">
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
        class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold"
        id="submenu"
      >
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          All blogs
        </h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Archived blogs
        </h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Create blog
        </h1>
      </div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-box-arrow-in-right"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
      </div>
    </div>

@endsection