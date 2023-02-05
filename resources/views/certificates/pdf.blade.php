<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    @vite('resources/js/app.js' , 'vendor/courier/build')
    <style type="text/css">
        /* To remove margin while generating PDF. */
        * {
            margin:0;
            padding:0;
            
        }
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            height: 8.27in;
            width: 11.69in;
            border: 1px solid rgb(255, 255, 255);
            background-image: url('storage/certificates/NEO-2022.png');
            background-size: 11.69in 8.27in; /* Not sure whether it works with DOMPDF. So, using a background of actual size. */
            background-repeat: no-repeat;
        }

        main{
            position: relative;
        }
        
        .name {
            font-size: .44in;
            line-height: .44in;
            font-weight: bolder;
            text-transform: uppercase;
            color: #ffffff;
            margin-top: 2.8in;
            text-align: center;
            
        }

        .position {
            font-size: .23in;
            font-weight: 700;
            color: #ffffff;
            text-align: center;
		
            /* psotition */
            position: relative;
            right: 4.7cm;
        }

        .competition {
            font-size: .23in;
            font-weight: 700;
            color: #ffffff;
            text-align: center;
            
            /* psotition */
            position: relative;
            bottom: 1.165cm;
            left: 1.6cm;
        }
    </style>
    <title>Certificate | {{ $participant->name }}</title>
</head>



<body>
      <main>
            <div class="name">
                {{ $participant->name }}
            </div >
            <div class="position">
                Winner
            </div>
            <div class="competition">
                ....
            </div>
            
      </main>
</body>
</html>