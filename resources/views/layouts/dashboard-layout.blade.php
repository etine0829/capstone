{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css') <!-- Load your Tailwind CSS -->
</head> --}}
<body> <!-- Alpine.js for toggling sidebar -->
    <!-- Toggle Button for Sidebar -->   


    <div class="flex h-screen">
        <x-sidebar />

        <!-- Main Content -->
        <div id="dashboardContent" class="flex-grow p-6 bg-gray-100 overflow-auto">
            @yield('content')
        </div>
    </div>
    

</body>

