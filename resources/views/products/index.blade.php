<x-layout>

    <h1>this is product index</h1>
    

    <a href="{{ route('products.create')}}">New frick</a>

@foreach ($products as $product)

    <h1><a href="{{ route('products.show', $product->id) }}">{{$product->name}}</a></h1>

    <p>{{$product->description}}</p>

    <p>{{$product->size}}</p>

@endforeach

{{ $products->links('vendor/pagination/simple-default') }}
</x-layout>


