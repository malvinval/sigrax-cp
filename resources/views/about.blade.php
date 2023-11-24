@extends("layout.core")

@section("container")

    <div class="min-h-[910px] w-full bg-white dark:bg-slate-800 py-12 font-jost">
        <div class="max-w-screen-xl mx-auto p-5">
            
            <section id="about-us-section-1">
                <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                    @include("templates.about_us.section1", compact(
                        "contents", "edit_mode"
                    ))
                </div>
            </section>
            
        </div>
    </div>

    @include("partials.footer")

@endsection

