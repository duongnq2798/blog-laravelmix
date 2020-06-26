<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@0.7.4/dist/tailwind.min.css" rel="stylesheet">
  <title>Email</title>
</head>
<body>
  <div tyle="display: inline">
    <div class="w-full max-w-xs" style="margin: 200px auto">
      <form 
      class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
      method="POST"
      action="/contact"
      >
        @csrf

        <div class="mb-4">
          <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
            Email Address
          </label>
          <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" type="text">

          @error('email')
            <p style="color: red; font-size:0.8em">{{ $message }}</p>
          @enderror
        </div>
  
        <div class="flex items-center justify-between">
          <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Send Email
          </button>

          @if (session('message'))
            <div>
              {{ session('message') }}
            </div>
          @endif

        </div>
      </form>
    </div>
  </div>
</body>
</html>