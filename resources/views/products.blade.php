<!-- resources/views/products.blade.php -->

@foreach ($products as $product)
    <div class="bg-white p-4 shadow-md rounded-lg">
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-30 object-cover mb-2">
        <h2 class="text-lg font-semibold">{{ $product->name }}</h2>
        <p class="text-gray-600">Category: {{ $product->category }}</p>
        <!-- Add buttons for updating and deleting (visible only to admins) -->
        @auth
            <a href="{{ route('products.edit', $product->id) }}">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endauth
    </div>
@endforeach
