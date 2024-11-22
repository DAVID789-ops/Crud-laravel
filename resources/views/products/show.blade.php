@extends      ('layout.app')    
@section('title', 'Add product')
    
@section('content')



<div class="container">
    <br><br>
    <h1 class="mb-3">Show</h1>
    <div class="mb-3">
    <b>Id:</b> {{ $product->id }}
</div>
<div class="mb-3">
    <b>Name:</b> {{ $product->name }}
</div>
<div class="mb-3">
    <b>Description:</b> {{ $product->description }}
</div>
<div class="mb-3">
    <b>Price:</b> {{ $product->price }}
</div>  
<div class="mb-3">
    <b>Created at:</b> {{ $product->created_at }}
</div>
<div class="mb-3">
    <b>Updated at:</b> {{ $product->updated_at }}
</div>

<div class="mb-3">
    <a href="{{ route('products.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
</div>
</div>
    
@endsection