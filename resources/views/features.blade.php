@extends("layout.core")

@section("container")
    @include("partials.navbar")

    <div class="min-h-[910px] w-full bg-white dark:bg-slate-800 py-12 font-jost">
        <div class="max-w-screen-xl mx-auto p-5">
            <section>
                <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                    <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Features of {{ $products->title }}</h2>
                        <p class="text-gray-500 sm:text-xl dark:text-gray-400"></p>
                        
                        @if($features->count() < 1)
                            <p class="text-red-500 font-bold py-24">No features yet.</p>
                        @endif
                    </div> 
                    <div class="">
                        @foreach($features as $f)
                            <article class="my-5 p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 dark:text-gray-200">
                                {{-- <div class="flex justify-between items-center mb-5 text-gray-500">
                                    <span class="text-sm">{{ $f->created_at }}</span>
                                </div> --}}
                                <h2 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">{{ $loop->iteration }}. {{ $f->title }}</h2>
                                <hr class="mb-3">
                                <div class="w-full md:w-1/2 mb-5">
                                    <img src="{{ asset('storage/' . $f->heroimage) }}" alt="">
                                </div>
                                <p class="text-justify">{!! $f->desc !!}</p>
                            </article>
                        @endforeach
                    </div>  
                </div>
            </section>
        </div>
    </div>

    @include("partials.footer")
@endsection