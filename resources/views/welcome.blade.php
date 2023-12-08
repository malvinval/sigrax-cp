@extends("layout/core")

@section("container")
    <div class="hero">
        @if($contents->count() > 0)
            @if($contents->where("section", "1")->count() > 0)
                @include("templates.home.section1")
            @endif
        @else
            <p class="text-red-500 text-center font-bold py-24">No contents yet.</p>
        @endif
    </div>

    @include("partials/footer", compact(
        "contents", "edit_mode"
    ))
@endsection
