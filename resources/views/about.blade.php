@extends("layout.core")

@section("container")

    <div class="min-h-[910px] w-full bg-white dark:bg-slate-800 py-12 font-jost">
        <div class="max-w-screen-xl mx-auto p-5">
            
            @if($contents->count() > 0)
                {{-- About us SECTION 1 --}}
                @if($contents->where("section", "1")->count() > 0)
                    <section id="about-us-section-1">
                        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                            @include("templates.about_us.section1", compact(
                                "contents", "edit_mode"
                            ))
                        </div>
                    </section>
                @endif

                {{-- About us SECTION 2 --}}
                @if($contents->where("section", "2")->count() > 0)
                    <section id="about-us-section-2">
                        <div class=" px-4 mx-auto max-w-screen-xl lg:px-6">
                            @include("templates.about_us.section2", compact(
                                "contents", "edit_mode"
                            ))
                        </div>
                    </section>
                @endif
            @else
                <p class="text-red-500 text-center font-bold py-24">No contents yet.</p>
            @endif
        </div>
    </div>

    @include("partials.footer")

@endsection

