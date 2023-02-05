<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Certificate | {{$participant->name}}</title>
      @vite('resources/js/app.js' , 'vendor/courier/build')

      <style type="text/css">
            /* general settings */
            * {
                  margin:0;
                  padding:0
            }
            body {
                  /*  */
            }

            /* text */
            .name {
                  font-family: sans-serif;
            }
            
            .head_email{

            }
            .body_email{
                  /* text */
                  color: black;
                  font-size: 15px;
                  
                  /* position */
                  margin-top: 2rem;
            }
            .foot_email{
                  /* text */
                  color: black;
                  font-size: 15px;
            }
    </style>

</head>



<body>
      <div class="name">
            <h1 class="head_email">Dear {{ $participant->name }},</h1>
            <p class="body_email">
                  Congratulations  on your extraordinary outcome of winning 1st place in the NEO 2022 Speech Competition. We know you have been putting in a considerable measure of additional time, and the outcomes are paying off. Keep up this diligent work and attempt to show improvement over this in upcoming competitions!
                  <br><br>
                  We have also attached the certificate, which you can access in this email. If you have further questions, please don’t hesitate to let us know.
            </p>
            <p class="foot_email">
                  Thank you, and have a great day.
            </p>
      </div>
</body>
</html>
