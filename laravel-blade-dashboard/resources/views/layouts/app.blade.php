<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Laravel Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-sans">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md flex flex-col">
            <div class="p-4 text-xl font-bold border-b">Dashboard</div>
            <nav class="flex-1 p-4 space-y-2">
                <a href="#" class="block px-3 py-2 rounded hover:bg-gray-200">Home</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-gray-200">Users</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-gray-200">Settings</a>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-6 overflow-auto">
            @yield('content')
        </main>
    </div>

</body>
</html>
