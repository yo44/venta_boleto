<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <title>Payment</title>
</head>
<style>
  body{
    font-family: 'Open Sans', sans-serif;
    text-align:center;
  }
  .btn-payment{
    background-color:#0070ba;
    padding:13px 24px;
    color:white;
    text-decoration: none;
    border-radius: 25px;
  }
</style>
<body>
  <div class="wrapper">
    <h1>¡Suscríbete por solo 14$!</h1>
    <a href="{{ route('payment') }}" class="btn-payment">Suscribirme</a>
  </div>
</body>
</html>
