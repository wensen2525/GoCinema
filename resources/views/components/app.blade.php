<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ $title }}</title>
      @vite('resources/js/app.js' , 'vendor/courier/build')
</head>
<body>
      <main>
            <div id="home">
                  <x-navbar></x-navbar>
                  {{$slot}}
            </div>
            
      </main>
</body>
</html>