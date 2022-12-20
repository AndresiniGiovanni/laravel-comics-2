
@extends('layouts.app')
@section('content')
@foreach ($products as  $product)
<div>{{ $product->description  }}</div>

@endforeach
@endsection
