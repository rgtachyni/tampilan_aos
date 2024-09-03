<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Menu dengan Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="text-white text-2xl font-bold">MyWebsite</div>

            <!-- Hamburger Menu Button -->
            <div class="md:hidden">
                <button id="menu-button" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Menu Items -->
            <div id="menu" class="hidden md:flex space-x-4">
                <a href="#" class="text-white">Home</a>
                <a href="#" class="text-white">About</a>
                <a href="#" class="text-white">Services</a>
                <a href="#" class="text-white">Contact</a>
            </div>
        </div>
    </nav>

    <script>
        // JavaScript untuk mengaktifkan/mematikan menu pada tampilan mobile
        document.getElementById('menu-button').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
