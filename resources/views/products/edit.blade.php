@extends      ('layout.app')    
@section('title', 'Add product')
    
@section('content')
<div class="container">
    <br><br>

   

<h1>Edit product</h1>

<div class="text-end">
    <a href="{{ route('products.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
</div>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('Patch')
        <div class="mb-3">
            <b>Id:</b> {{ $product->id }}
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Product name" value="{{ $product->name }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Product description" value="{{ $product->description }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Product price" value="{{ $product->price }}">
        </div>
        <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i>  submit</button>
    </form>
</div>
    
@endsection