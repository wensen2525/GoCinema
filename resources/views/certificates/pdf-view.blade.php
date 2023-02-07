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
            height: 8.26772in;
            width: 11.6929in;
            /* border: 1px solid rgb(255, 255, 255); */
            background: url('storage/certificates/NEO-2022-baru.png');
            /* background-image: url($image); */
            background-size: 11.6929in 8.26772in; /* Not sure whether it works with DOMPDF. So, using a background of actual size. */
            background-repeat: no-repeat;
        }

        main{
            position: relative;
        }
        
        .name {
            font-size: .51in;
            line-height: .44in;
            font-weight: bold;
            text-transform: uppercase;
            color: #000000;
            margin-top: 2.77in;
            margin-bottom: .175in;
            text-align: center;
            
        }

        .position {
            line-height: .4cm;
            padding: 0;
            margin: 0;
            font-size: .215in;
            font-weight: 500;
            color: #000000;
            text-align: center;
        }
        .med{
            /* width: 11.6929in; */
            display: flex;
            justify-content: center;
        }
        .medpar{
            width:600px;
            position:relative;
        }
    </style>
    <title>Certificate NEO 2022 | nama</title>
</head>



<body>
      <main>
            <div class="name">
                nama
            </div >
            <p class="position">
                As the Winner of Short Story Writing Competition in
                <br>
                The 2022 National English Olympics
            </p>
            <div class="med">
               <img src="{{ asset('storage/certificates/logo medpar-min.png')}}" alt="ssss" class="medpar"> 
            </div>
            
      </main>
</body>
</html>