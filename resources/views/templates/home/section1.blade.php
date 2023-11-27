<div class="flex flex-col lg:flex-row text-gray-800 dark:text-white">
    <div class="  flex-grow lg:h-screen text-center font-jost grid place-items-center mx-auto sm:w-full lg:w-1/3 pt-24 lg:pt-0 pb-16 lg:pb-0 bg-gradient-to-b lg:bg-gradient-to-r from-red-500 to-slate-800">
        <img class="pt-8 w-1/2 sm:w-1/4 lg:w-3/4 mx-auto drop-shadow-xl" src="{{ asset('images/sigrax-logo.png') }}" alt="Dashboard">            
    </div>
    <div class="flex-grow lg:h-screen text-left font-jost mx-auto grid place-items-center lg:w-1/2 pt-12 lg:pt-6 pb-16 px-10 lg:px-12 bg-white dark:bg-slate-800">
        <div>
            @if($edit_mode == "1")
                <form onsubmit="return confirm('Do you really want to update this content?');" class="py-1 flex flex-col md:flex-row" method="POST" action="/dashboard/home/{{ $contents->where("subsection", "1.2.1")->first()->subsection }}/update">
                    @csrf
                    <textarea class="p-1 w-full md:w-3/4 border border-gray-200" name="content" id="content" cols="30" rows="5">{{ $contents->where("subsection", "1.2.1")->first()->content }}</textarea>
                    <button class="px-5 py-2 bg-sigrax-yellow text-black" type="submit">Update</button>
                </form>
            @else
                <h1 class="font-bold text-3xl lg:text-7xl drop-shadow-xl">
                    {{ $contents->where("subsection", "1.2.1")->first()->content }}
                </h1>
            @endif
            
            @if($edit_mode == "1")
                <form onsubmit="return confirm('Do you really want to update this content?');" class="py-1 flex flex-col md:flex-row" method="POST" action="/dashboard/home/{{ $contents->where("subsection", "1.2.2")->first()->subsection }}/update">
                    @csrf
                    <textarea class="p-1 w-full md:w-3/4 border border-gray-200" name="content" id="content" cols="30" rows="5">{{ $contents->where("subsection", "1.2.2")->first()->content }}</textarea>
                    <button class="px-5 py-2 bg-sigrax-yellow text-black" type="submit">Update</button>
                </form>
            @else
                <h3 class="font-medium text-sm sm:text-lg pt-8">
                    {{ $contents->where("subsection", "1.2.2")->first()->content }}
                </h3>
            @endif
            
            @if($edit_mode == "1")
                <form onsubmit="return confirm('Do you really want to update this content?');" class="py-1 flex flex-col md:flex-row" method="POST" action="/dashboard/home/{{ $contents->where("subsection", "1.2.3")->first()->subsection }}/update">
                    @csrf
                    <textarea class="p-1 w-full md:w-3/4 border border-gray-200" name="content" id="content" cols="30" rows="5">{{ $contents->where("subsection", "1.2.3")->first()->content }}</textarea>
                    <button class="px-5 py-2 bg-sigrax-yellow text-black" type="submit">Update</button>
                </form>
            @else
                <h3 class="font-medium text-sm sm:text-lg pt-8">
                    {{ $contents->where("subsection", "1.2.3")->first()->content }}
                </h3>
            @endif

            <div class="pt-8">
                <a class="mt-8 px-5 py-3 rounded-lg font-bold hover:bg-sigrax-red bg-sigrax-yellow" href="/product-and-features">Get started</a>
            </div>
        
        </div>

    </div>
</div>