<!DOCTYPE html>
<html>
<head>
 <title>Laravel 8 Send Email Example</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="text-center"><img src="{{ asset('BhandaraKaro/images/LOGO1.png') }}" width="40%" class="img-fluid"></div>
 <h1>This is test mail from Tutsmake.com</h1>
 <p>{{$response['order_id']}}</p>
 <div class="greeting-text">Dear {{$response['billing_name']}}, I trust this message finds you well.</div>
<div class="greeting-text">It was a pleasure serving you and assisting with the arrangements for your
    upcoming Bhandara event at <strong>{{$booking->booking_temple_name}} , {{$booking->booking_temple_address}}</strong>.</div>
<div class="greeting-text">on {{$booking->booking_date}} at {{$booking->booking_time}}.</div>

</body>
</html>