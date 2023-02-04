<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    		background-image: url({{ asset('storage/certificates/NEO-2022.png') }});
    		background-size: 11.69in 8.27in; /* Not sure whether it works with DOMPDF. So, using a background of actual size. */
    		background-repeat: no-repeat;
    	}
    	.name {
    		font-family: sans-serif;
    		font-size: .44in;
            line-height: .44in;
            font-weight: 700;
    		text-transform: uppercase;
    		color: #000000;
    		width: 3in;
    		margin-top: 3.8in;
    		margin-left: 1.07in;
    	}
    </style>
</head>
<body>
	<div class="name">Wen Sen Tan</div>
</body>
</html>