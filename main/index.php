<?php include_once __DIR__ . '/includes/header.php'; ?>

    <main class="text-center m-5">
        <h1 class="text-4xl font-bold mb-4">Welcome to the Home Page</h1>
        <p>This is the main landing page of the website.</p>
        <p>Header and footer are included from separate files.</p>
    </main>

    <section class="mb-12">
    <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">🎨 Color Palette Test</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
        <div class="bg-blue-500 text-white p-4 rounded-lg text-center">Blue 500</div>
        <div class="bg-green-500 text-white p-4 rounded-lg text-center">Green 500</div>
        <div class="bg-red-500 text-white p-4 rounded-lg text-center">Red 500</div>
        <div class="bg-purple-500 text-white p-4 rounded-lg text-center">Purple 500</div>
    </div>
</section>


<?php include_once __DIR__ . '/includes/footer.php'; ?>