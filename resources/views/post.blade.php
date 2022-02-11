@extends('app')

@section('content')
<div class="p-6 sm:p-10 md:p-16 flex">
    <div class="w-full md:w-1/2">
        <div class="max-w-md leading-loose tracking-tight">
            <h1 class="font-bold my-12">{{ $post->title}}</h1>

            <p class="mb-8">{{ $post->body }}</p>
        </div>
    </div>
    <div class="w-full md:w-1/2 md:pr-32">
        <div class="max-w-mdleading-loose tracking-tight md:sticky md:top-0 ">
            <p class="font-bold my-4 md:my-12">Sobre el autor</p>
            <ul class="flex flex-wrap justify-between flex-col">
                <li>ID: {{ $post->author->id }}</li>
                <li>Nombre: {{ $post->author->name }}</li>
                <li>Email: {{ $post->author->email }}</li>
                <li>Dirección: {{ $post->author->street }}</li>
                <li>Localidad: {{ $post->author->suite }}</li>
                <li>Ciudad: {{ $post->author->city }}</li>
                <li>Código postal: {{ $post->author->zipcode }}</li>
                <li>Latitud: {{ $post->author->lat }}</li>
                <li>Longitud: {{ $post->author->lng }}</li>
                <li>Telefono: {{ $post->author->phone }}</li>
                <li>Web: {{ $post->author->website }}</li>
                <li>Empresa: {{ $post->author->company_name }}</li>

            </ul>
        </div>
    </div>
</div>
@endsection