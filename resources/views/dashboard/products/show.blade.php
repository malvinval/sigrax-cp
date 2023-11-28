@extends("layout/core")

@section("container")

  @include("partials.dashboard.sidebar")

    <div onclick="openSidebar()" class="lg:hidden fixed m-1 cursor-pointer z-50 left-0 bottom-0 p-3 text-white border rounded-lg bg-gray-900">
        <p><< >></p>
    </div>

  <div class="font-jost ml-0 lg:ml-80 mt-16 lg:mt-24 p-5">
    <div class="pb-10">
        <a class="px-3 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg" href="/dashboard/products/{{ $product->slug }}/edit">Edit</a>
        <a class="px-3 py-1 bg-red-500 hover:bg-red-700 text-white rounded-lg" href="">Delete</a>
    </div>

    <main class="font-jost bg-white  antialiased">
        <div class="flex">
            <article class="format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <h1 class="mb-4 text-3xl font-bold leading-tight text-gray-900 lg:mb-6 lg:text-4xl">{{ $product->title }}</h1>

                    <div class="container mb-4 text-justify">
                        {!! $product->desc !!}
                    </div>

                    <h1 class="mb-4 text-xl font-bold leading-tight text-gray-900 lg:mb-6 lg:text-2xl">All features:</h1>
                
                    <div class="">
                        @foreach($features as $f)
                            <article class="my-2 p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                {{-- <div class="flex justify-between items-center mb-5 text-gray-500">
                                    <span class="text-sm">{{ $f->created_at }}</span>
                                </div> --}}
                                <h2 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">{{ $loop->iteration }}. {{ $f->title }}</h2>
                                <hr class="mb-3">
                                <p class="text-justify">{!! $f->desc !!}</p>
                            </article>       
                        @endforeach
                    </div>
                </header>
            </article>
        </div>
    </main>
</div>
@endsection

