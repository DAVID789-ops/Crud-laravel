@extends('layout.app')
@section('title', 'Products list')
    
@section('content')
<div class="container">
    <br><br>
          
   
<h1 class="text-center">Products list</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        
    
<div class="text-end">
    <a href="{{ route('products.create') }}" class="btn btn-primary"><i class="bi bi-plus" ></i>Add</a>
</div>
<br>
    <table class="table">
    <thead>
<tr class="table-dark">
    <th scope="col">ID</th>
    <th scope="col">NAME</th>
    <th scope="col"> DESCRIPTION</th>
    <th scope="col">PRICE</th>
    <th scope="col" class="text-end">ACTION     </th>
 
  </tr>
</thead>
<tbody>
@foreach ($products as $product)
<tr class="table-info">
    <th scope="row">{{ $product->id }}</th>
    <td>{{ $product->name }}</td>
    <td>{{ $product->description }}</td>
    <td>{{ $product->price }}</td>
    <TD>
        <div class="text-end">
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary"><i class="bi bi-pencil"></i> Edit</a>
        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info"><i class="bi bi-eye"></i> Show</a>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')"><i class="bi bi-trash"></i> Delete</button>
        </form>
        </div>
    </TD>
  </tr>
    
@endforeach

    </tbody>
  </table>

@endsection