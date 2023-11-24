<div
    class="relative bg-white dark:bg-dark"
  >
    <div class="container mx-auto">
      <div class="-mx-4 flex flex-col-reverse md:flex-row justify-center flex-wrap items-center">
        <div class="w-full lg:w-4/12 pt-12 lg:pt-0">
          <div class="hero-content">
              @if($edit_mode == "1")
                  <form onsubmit="return confirm('Do you really want to update this content?');" class="py-1 flex flex-col md:flex-row" method="POST" action="/dashboard/about-us/{{ $contents->where("subsection", "2.1.1")->first()->subsection }}/update">
                      @csrf
                      <textarea class="p-1 w-full md:w-3/4 border border-gray-200" name="content" id="content" cols="30" rows="5">{{ $contents->where("subsection", "2.1.1")->first()->content }}</textarea>
                      <button class="px-5 py-2 bg-sigrax-yellow text-black" type="submit">Update</button>
                  </form>
              @else
                  <h1 class="mb-5 text-3xl font-bold !leading-[1.208] dark:text-white sm:text-[38px]">
                      {{ $contents->where("subsection", "2.1.1")->first()->content }}
                  </h1>
              @endif
              
              @if($edit_mode == "1")
                  <form onsubmit="return confirm('Do you really want to update this content?');" class="py-1 flex flex-col md:flex-row" method="POST" action="/dashboard/about-us/{{ $contents->where("subsection", "2.2.1")->first()->subsection }}/update">
                      @csrf
                      <textarea class="p-1 w-full md:w-3/4 border border-gray-200" name="content" id="content" cols="30" rows="5">{{ $contents->where("subsection", "2.2.1")->first()->content }}</textarea>
                      <button class="px-5 py-2 bg-sigrax-yellow text-black" type="submit">Update</button>
                  </form>
              @else
                  <p class="mb-8 text-justify max-w-[480px] text-base text-body-color dark:text-dark-6">
                      {{ $contents->where("subsection", "2.2.1")->first()->content }}
                  </p>
              @endif
          </div>
        </div>
        
        <div class="w-full pb-0 lg:pb-24 lg:w-6/12">
          <div class="lg:ml-auto lg:text-right">
            <div class="relative z-10 inline-block">
              <img
                src="https://images.unsplash.com/photo-1522152302542-71a8e5172aa1?q=80&w=2016&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="hero"
                class="max-w-full lg:max-w-md lg:ml-auto rounded-tl-[100px]"
              />
              <span class="absolute -bottom-8 -left-8 z-[-1]">
                <svg
                  width="93"
                  height="93"
                  viewBox="0 0 93 93"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                  <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                  <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                  <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                  <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                  <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                  <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                  <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                  <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                  <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                  <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                  <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                  <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                  <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                  <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                  <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                  <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                  <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                  <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                  <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                  <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                  <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                  <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                  <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                  <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>