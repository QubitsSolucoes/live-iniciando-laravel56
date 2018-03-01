<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <label for="price">Price</label>
    <input type="text" name="price" id="price">

    <label for="description">Description</label>
    <textarea name="description" id="description"></textarea>

    <button type="submit">Enviar</button>
</form>