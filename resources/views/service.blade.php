@extends("layout/core")

@section("container")

<main class="min-h-[910px] font-jost pb-16 pt-24 lg:pt-32 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            
            <header class="mb-4 lg:mb-6 not-format">
                {{-- <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                        <div>
                            <a href="#" rel="author" class="text-xl font-medium text-gray-900 dark:text-white">{{ $blog->author }}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400">Sigrax CMMS</p>
                            <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">created at {{ $blog->created_at }}</time></p>
                        </div>
                    </div>
                </address> --}}
                <h1 class="mb-4 text-3xl font-bold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $service->title }}</h1>

                <hr class="mb-7">

                <div class="container text-lg text-justify text-gray-900 dark:text-gray-300">
                    {!! $service->desc !!}
                </div>
            </header>
        </article>
    </div>
</main>

@include("partials/footer")
@endsection
