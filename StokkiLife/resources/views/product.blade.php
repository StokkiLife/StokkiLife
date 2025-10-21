<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Criar Venda</h1>
    <form action="{{ route('sale.store') }}" method="POST">
        @csrf
        <label for="product">Produto:</label>
        <select name="product_id" id="product">
            @foreach($product as $item)                
                <option value="{{ $item->id }}">{{ $item->name }}</option>  
            @endforeach
        </select>   

        <label for="quantity">Quantidade:</label>
        <input type="number" name="quantity" id="quantity" required>

        <button type="submit">Registrar Venda</button>
    </form>
</body>
</html>