<div
        class="font-jost sidebar hidden lg:block fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] pt-20 overflow-y-auto text-center bg-gray-900"
    >
    </span>
        <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
            <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
            
            <h1 class="font-bold text-gray-200 text-[15px] ml-3">
                {{ $user->name }}
            </h1>
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
        
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white" onclick="dropdown()">
            <i class="bi bi-chat-left-text-fill"></i>
            <div class="flex justify-between w-full items-center">
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Blogs</span>
                <span class="text-sm rotate-180" id="arrow">
                <i class="bi bi-chevron-down"></i>
                </span>
            </div>
        </div>
        <div class="text-left flex flex-col text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold" id="submenu">
            <a href="/dashboard/blogs" class="selection:text-fuchsia-900 cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                Published
            </a>
            <a href="/dashboard/blogs/archived" class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                Archived
            </a>
            <a href="/dashboard/blogs/create" class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                Create new blog
            </a>
        </div>

        <a href="/dashboard/about-us" class="text-[15px] ml-4 p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white font-bold">About Us</a>
        
        <a href="/dashboard/manage-contacts" class="text-[15px] ml-4 p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white font-bold">Manage contacts</a>

        <form class="flex py-8 px-2" action="/logout" method="POST">
            @csrf
            <button onclick="alert('Are you sure want to logout?')" class="bg-red-500 hover:bg-red-600 text-white py-1 rounded-lg cursor-pointer px-4 font-bold">Logout</button>
        </form>
</div>