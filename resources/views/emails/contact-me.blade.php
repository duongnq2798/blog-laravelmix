{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>It Workd Again! </h1>

  <p>It sounds like you want to hear  more about {{ $topic }}.</p>
</body>
</html> --}}


@component('mail::message')
## A heading

Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate error quia esse consectetur quam id laborum ut magni blanditiis, minus quasi dolore excepturi qui velit dicta corrupti illo facilis praesentium!

- A list
- A goes
- here

@component('mail::button', ['url' => 'https://laracasts.com'])
    Visit Laracasts
@endcomponent

@endcomponent