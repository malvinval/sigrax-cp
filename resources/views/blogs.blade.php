@extends("layout/core")

@section("container")
    <div class="w-full bg-white dark:bg-slate-800 font-jost">
        <div class="max-w-screen-xl mx-auto p-5">
            
            @foreach($blogs as $b)
                <p>{{ $b->title }}</p>
            @endforeach
        </div>
    </div>
@endsection
