<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        @if(session('success'))
    <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4">
        {{session('success')}}
    </div>
    @endif
        <h2 class="text-2xl font-bold text-center mb-6">Contact Form</h2>

        <form action="/save-user" method="POST">
            @csrf
            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">
                    Name
                </label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter your name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="block text-gray-700 font-medium mb-2">
                    Email
                </label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            {{-- password --}}
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-medium mb-2">
                    Password
                </label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Submit Button -->
            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300"
            >
                Submit
            </button>
        </form>
    </div>

</body>
</html>
