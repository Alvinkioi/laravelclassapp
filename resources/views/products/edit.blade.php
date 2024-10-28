<h1>Edit product details</h1>

<form action="{{ route('products.update', $product)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $product->name }}" required> <br><br>

    <label for="description">description</label>
    <input type="text" name="description" id="description" value="{{ $product->description }}" required> <br><br>

    <label for="price">Price</label>
    <input type="number" name="price" id="price" value="{{ $product->price }}" required>

    <button type="submit">Update details</button>
</form> 