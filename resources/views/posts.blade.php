@extends('app')

@section('content')
    <div class="bg-grey-500 border-b-2 border-black p-6">
        <h1 class="text-3xl text-blue-500">Lista de posts</h1>
    </div>

    <div class="grid grid-cols-3">
        @foreach ($posts as $post)
            <div class="rounded-xl shadow-xl m-3">
                <div class="p-3">
                    <a href="/post/{{ $post->id }}">
                        <h2 class="text-2xl mt-2 font-bold">
                            {{ $post->title}}
                        </h2>
                    </a>
                    <div class="flex flex-row mt-4 items-center">
                        <div class="font-bold mr-2">
                                {{ $post->author->name}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
</div>
@endsection