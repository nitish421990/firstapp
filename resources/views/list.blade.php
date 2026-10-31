<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Table</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="max-w-6xl mx-auto py-10 px-4">

        <h1 class="text-3xl font-bold text-center mb-8">
            Student List
        </h1>

        <div class="bg-white rounded-lg shadow overflow-hidden">

            <div class="p-4 border-b flex justify-between items-center">
                <h2 class="text-xl font-semibold">Students</h2>

                <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                    Add Student
                </button>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse">

                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-6 py-3 text-left">ID</th>
                            <th class="px-6 py-3 text-left">Name</th>
                            <th class="px-6 py-3 text-left">Department Name</th>

                            <th class="px-6 py-3 text-left">Email</th>

                            <th class="px-6 py-3 text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
@foreach($users as $user)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">{{$user->id}}</td>
                            <td class="px-6 py-4">{{$user->name}}</td>
                            <td class="px-6 py-4">{{$user->department_name}}</td>

                            <td class="px-6 py-4">{{$user->email}}</td>

                            <td class="px-6 py-4 text-center">
                                <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded">
                                    Edit
                                </button>
                                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded ml-2">
                                    Delete
                                </button>
                            </td>
                        </tr>
@endforeach




                    </tbody>

                </table>

                {{-- {{ $users->links() }} --}}
            </div>

        </div>

    </div>

</body>
</html>
