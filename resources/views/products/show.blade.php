@extends('layouts.app')

@section('content')


<div class="container bg-dark rounded-3 mt-5">

    <div class="pt-3 mb-2"> <strong style="font-size: 24px">Titolo : </strong>{{ $product->title }}</div>

    <div> <strong style="font-size: 24px" >Descrizione : </strong> {{ $product->description }}</div>

    <div> <strong style="font-size: 24px" >Tipo : </strong> {{ $product->type }}</div>

    <div> <strong style="font-size: 24px" >Artisti : </strong> {{ $product->artists }}</div>

    <div> <strong style="font-size: 24px" >Scrittori : </strong> {{ $product->writers }}</div>

    <div class="d-inline">
        <button class="btn btn-primary mt-3 mb-4"><a class="text-white text-decoration-none" href="{{ route('products.index') }}">Torna alla sezione precedente</a></button>
    </div>

    <div class="d-inline">
    <form action="{{ route('products.destroy', $product->id)}}" method="POST">
        @csrf
        @method('DELETE')
            <button class="btn btn-danger mb-4">Elimina</button>
    </form>
</div>
</div>


@endsection
