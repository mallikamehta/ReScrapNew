@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <section class="vh-100_del" style="padding-top:100px;">
            @foreach ($product as $item)
                <div class="col-md-3 mt-3" style="float:left; margin:5px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                    <div class="card">
                        <div class="card-body" style="text-align: center">
                            <h4 class="card-title">{{ $item->name }}</h4>
                            <p class="card-text">{{ $item->description }}</p>
                            <p><img src="{{ asset('uploads/products/'.$item->photo) }}" height="100" width="100" /></p>
                            <a href="#" class="card-link">Price : {{ $item->price }}</a>
                            <a href="#" class="card-link">Seller : {{ $item->seller }}</a>
                            <p style="text-align: center"><a href="{{ route('addToCart',$item->id) }}" class="card-link btn btn-warning">Add to Cart</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
            </section>
        </div>
    </div>
@endsection
