@extends('layouts.app')

@section('content')

<section>
    <div class="container my-cont bg-dark text-white">
        <div class="jumbo">
          <h1 class="text-capitalize series text-center pt-4 pb-1 my-title">
          current series
          </h1>
          <h2 class="text-center pb-3"><a class="text-decoration-none text-danger" href="{{ route('home') }}">Torna alla Home</a></h2>
          <h4 class="text-center pb-3"><a class="text-decoration-none text-danger" href="{{ route('products.create') }}">Vai al form</a></h4>
        </div>
        <div class="container-fluid  mt-4">
          <div class="row ">
            @foreach ($products as $product)
              <div class="card bg-transparent col-2 border-0 me-2 ms-4 mb-5">
                <img class="card-img-top " src="{{ $product->thumb }}" alt="" />
                <div class="mt-2 w-75 text-uppercase"> <strong>Titolo: </strong>{{ $product->title }}</div>
              <div><strong>Prezzo: </strong> {{ $product->price }}</div>
              <div><strong>Serie: </strong> {{ $product->series }}</div>
              <div> <strong>Uscita: </strong> {{ $product->sale_date }}</div>
              <div>
                <button class="btn btn-danger"><a class="text-decoration-none text-white" href="{{ route('products.show', $product->id) }}">Visualizza Altro</a></button>
              </div>
              </div>
            @endforeach
        </div>
        </div>
</div>
</section>

@endsection
