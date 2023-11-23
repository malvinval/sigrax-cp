@extends("layout/core")

@section("container")

<div onclick="openSidebar()" class="lg:hidden fixed m-1 cursor-pointer z-50 left-0 bottom-0 p-3 text-white border rounded-lg bg-gray-900">
    <p><< >></p>
</div>

@include("partials.dashboard.sidebar", compact("user"))

<div class="font-jost ml-0 lg:ml-80 mt-16 lg:mt-24 p-5">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
        <h1 class="font-bold text-xl md:text-3xl pb-5">Manage contacts</h1>
        <a class="bg-green-500 px-3 py-1 rounded-lg text-white mb-5 md:mb-0 hover:bg-green-600" href="/dashboard/manage-contacts/create">Create new contact</a>
      
    </div>

    
    @if($contacts->count() > 0)
        <div class="flex flex-col md:flex-row my-5">
            @foreach($contacts as $c)
                <div class="lg:w-1/3 border rounded-lg p-4 mr-2 mb-3">
                    <div class="font-medium text-xl">{{ $c->type }}</div>
                    <div class="w-full py-2">
                        <a target="_blank" href="{{ $c->url }}" class="text-blue-500 underline">{{ $c->value }}</a>
                    </div>
                    <div class="flex flex-row pt-3">
                        {{-- <a class="px-3 mr-1 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-lg" href="/dashboard/manage-contacts/{{ $c->slug }}">View</a> --}}
                        <a class="px-3 mr-1 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg" href="/dashboard/manage-contacts/{{ $c->id }}/edit">Edit</a>
                        <form action="/dashboard/manage-contacts/{{ $c->id }}" method="DELETE">
                            @csrf
                            <button onclick="alert('Are you sure want to delete this blog?')" class="px-3 py-1 bg-red-500 hover:bg-red-700 text-white rounded-lg">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-red-500">No contacts provided.</p>
    @endif
</div>

@endsection