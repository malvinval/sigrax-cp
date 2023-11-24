@extends("layout/core")

@section("container")

    @include("partials.navbar")

    <div class="min-h-[910px] w-full bg-white dark:bg-slate-800 py-12 font-jost">
        <div class="max-w-screen-xl mx-auto p-5">
            <section>
                <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                    <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Let's connect!</h2>
                        <p class="text-gray-500 sm:text-xl dark:text-gray-400">If you have questions or want to collaborate, fell free to contact us!</p>
                        
                        @if($contacts->count() < 1)
                            <p class="text-red-500 font-bold py-24">No blogs yet.</p>
                        @endif
                    </div> 
                    <div class="grid gap-8 lg:grid-cols-2">
                        @foreach($contacts as $c)
                            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    <a href="{{ $c->url }}" target="_blank" class="underline">{{ $c->type }}</a>
                                </h2>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center space-x-4"> 
                                        <span class="font-medium dark:text-white">
                                            <a href="{{ $c->url }}">{{ $c->value }}</a>
                                        </span>
                                    </div>
                                    <a target="_blank" href="{{ $c->url }}" class="text-gray-900 inline-flex items-center font-medium dark:text-white hover:underline">
                                        Visit
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

    @include("partials.footer")
@endsection