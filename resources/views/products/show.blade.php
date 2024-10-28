<h1>All product details</h1>

<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>{{ $product->price }}</p>

<a href="{{ route('products.edit', $product)}}">Edit Product</a>