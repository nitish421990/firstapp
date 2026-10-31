<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Table</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 h-full">

    <div class="max-w-6xl mx-auto py-10 px-4">


<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-900">
  <body class="h-full">
  ```
-->
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="mx-auto h-10 w-auto" />
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Student Registration</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="/students" method="POST" class="space-y-6">
        @csrf
        <div>
        <label for="name" class="block text-sm/6 font-medium text-gray-100">Name</label>
        <div class="mt-2">
          <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
        </div>
        @error('name')
            <div style="color: red;">{{ $message }}</div>
            @enderror
      </div>
      <div>
        <label for="email" class="block text-sm/6 font-medium text-gray-100">Email address</label>
        <div class="mt-2">
          <input id="email" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
        </div>
        @error('email')
            <div style="color: red;">{{ $message }}</div>
            @enderror
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium text-gray-100">Password</label>

        </div>
        <div class="mt-2">
          <input id="password" type="password" name="password" required autocomplete="current-password" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
        </div>
        @error('password')
            <div style="color: red;">{{ $message }}</div>
            @enderror
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Register</button>
      </div>
    </form>


  </div>
</div>



        </div>

    </div>

</body>
</html>
