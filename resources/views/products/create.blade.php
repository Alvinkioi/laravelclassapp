<h1>Create new product</h1>

<button>
    <a href="{{ route('products.index')}}">Create product</a>
</button>
<br> <br>
<form action="{{ route('products.store')}}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required> <br><br>

    <label for="description">description</label>
    <input type="text" name="description" id="description" required> <br><br>

    <label for="price">Price</label>
    <input type="number" name="price" id="price" required> <br> <br>

    <button type="submit">Save product</button>
</form>