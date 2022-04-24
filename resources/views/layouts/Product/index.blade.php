@extends('layout')

@section('title','products')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    {{-- @if (count($products)>0)     
        @foreach ($products as $product)
            <div>
                <h3>
                    <a href="{{ route('product.show' , [ 'product'=>$product['id'] ]) }}" > {{ $product['name'] }}</a>
                </h3>
                <ul>
                    <li>
                        {{ $product['category'] }}
                    </li>
                </ul>
            </div>
        @endforeach
    @else
        <h3>there is no products to show</h3>
    @endif --}}
    <div>
        The user input :{{ $userInput }}
    </div>
</div>
@endsection