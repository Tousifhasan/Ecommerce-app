<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic E-commerce</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <h1 class="text-2xl font-semibold">My E-commerce Store</h1>
    </header>
    <main class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Product cards -->
            <!-- Example product card -->
            <div class="bg-white p-4 shadow-md rounded-lg">
                <img src="/images/product.png" alt="Product" class="w-full h-30 object-cover mb-2">
                <h2 class="text-lg font-semibold">Product Name</h2>
                <p class="text-gray-600">Category: Subcategory</p>
                <a href="<?php echo e(route('products')); ?>">View All Products</a>
                <button class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md">Buy Now</button>
            </div>
            <div class="bg-white p-4 shadow-md rounded-lg">
    <img src="<?php echo e(asset('images/product.png')); ?>" alt="Product 1" class="w-full h-30 object-cover mb-2">
    <h2 class="text-lg font-semibold">Product 1</h2>
    <p class="text-gray-600">Category: Electronics - SmartMonitors</p>
    <button class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md">Buy Now</button>
</div>

<!-- resources/views/products/index.blade.php -->



            <!-- Repeat for other products -->
        </div>
    </main>
    <footer class="bg-gray-200 text-center p-4">
        © 2024 My E-commerce Store
    </footer>
    <!-- JavaScript for interactivity -->
    <script>
        // Sample product data (replace with your actual data)
        const products = [
            {
                name: 'Product 2',
                category: 'Electronics',
                subcategory: 'Laptops',
                image: '/images/product.png',
            },
            {
                name: 'Product 3',
                category: 'Electronics',
                subcategory: 'Apple Desktop',
                image: '/images/product.png',
            },
            {
                name: 'Product 4',
                category: 'Electronics',
                subcategory: 'Smart TV',
                image: '/images/product.png',
            },
            // Add more products here
        ];

        // Populate product cards dynamically
        const productContainer = document.querySelector('.grid');
        products.forEach(product => {
            const card = document.createElement('div');
            card.classList.add('bg-white', 'p-4', 'shadow-md', 'rounded-lg');
            card.innerHTML = `
                <img src="${product.image}" alt="${product.name}" class="w-full h-30 object-cover mb-2">
                <h2 class="text-lg font-semibold">${product.name}</h2>
                <p class="text-gray-600">Category: ${product.category} - ${product.subcategory}</p>
                <button class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md">Buy Now</button>
            `;
            productContainer.appendChild(card);
        });

        // Add event listeners for Buy Now buttons (implement your logic)
        // ...
    </script>
</body>
</html>
<?php /**PATH C:\laragon\www\Simple_Ecommerce\Ecommerce-app\resources\views/app.blade.php ENDPATH**/ ?>