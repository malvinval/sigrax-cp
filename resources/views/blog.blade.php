@extends("layout/core")

@section("container")

<main class="font-jost pt-8 pb-16 lg:pt-24 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-3xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                        <div>
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $blog->author }}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400">Sigrax CMMS</p>
                            <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">created at {{ $blog->created_at }}</time></p>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-bold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $blog->title }}</h1>

                <div class="container text-justify">
                    {{ $blog->content }}
                </div>
            </header>
        </article>
    </div>
</main>
@endsection
