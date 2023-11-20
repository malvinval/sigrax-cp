@extends("layout/core")

@section("container")
    <div class="w-full bg-white dark:bg-slate-800 py-12 font-jost">
        <div class="max-w-screen-xl mx-auto p-5">
            <section class="bg-white dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                    <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Blogs</h2>
                        <p class="text-gray-500 sm:text-xl dark:text-gray-400">This page is intended for those of you who want to understand more deeply about Sigrax CMMS. You are an admin? Manage blogs <a href="/dashboard/blogs" class="text-blue-500 underline">here</a>.</p>
                        
                        @if($blogs->count() < 1)
                            <p class="text-red-500 font-bold py-24">No blogs yet.</p>
                        @endif
                    </div> 
                    <div class="grid gap-8 lg:grid-cols-2">
                        @foreach($blogs as $b)
                            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex justify-between items-center mb-5 text-gray-500">
                                    <span class="text-sm">{{ $b->created_at }}</span>
                                </div>
                                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="/blog/{{ $b->slug }}">{{ $b->title }}</a></h2>
                                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ $b->excerpt }}</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center space-x-4">
                                        <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar" />
                                        <span class="font-medium dark:text-white">
                                            by: {{ $b->author }}
                                        </span>
                                    </div>
                                    <a href="/blog/{{ $b->slug }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                        Read more
                                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </a>
                                </div>
                            </article>                
                        @endforeach
                    </div>  
                </div>
            </section>
        </div>
    </div>

    @include("partials/footer")
@endsection
