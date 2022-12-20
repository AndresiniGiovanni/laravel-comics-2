@extends('layouts.app')
@section('content')
<section class="container cont-home">

    <div class="card bg-dark card-home d-flex flex-column ">
    <h1 class="text-center mt-2">Dc-Comics</h1>
    <h2 class="mt-1 pb-3 text-center "><strong><a class="text-decoration-none text-danger " href="{{ route('products.index') }}">Visualizza Comics</a></strong></h2>
    </div>


</section>
@endsection
