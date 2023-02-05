<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>certificate</title>
      @vite('resources/js/app.js' , 'vendor/courier/build')
      <style type="text/css">
        /* To remove margin while generating PDF. */
        * {
            margin:0;
            padding:0
        }
        body {
            margin: 0;
            height: 8.27in;
            width: 11.69in;

            background-image: url('storage/certificates/NEO-2022.png');
            background-size: 11.69in 8.27in; /* Not sure whether it works with DOMPDF. So, using a background of actual size. */
            background-repeat: no-repeat;
        }
        .name {
            font-family: sans-serif;
            font-size: .44in;
            line-height: .44in;
            font-weight: 700;
            text-transform: uppercase;
            color: #ffffff;
            margin-top: 3.8in;
            text-align: center;
		
        }
    </style>
</head>



<body>
      <main>
            <div class="name">
                {{$participant}}
                
                  {{-- <x-navbar></x-navbar> --}}
                  {{-- {{$slot}} --}}
            </div class = "certif">
                  {{-- <img src="{{ asset('storage/movie/download.png') }}" alt="alalalalal"> --}}

            
      </main>
</body>
</html>