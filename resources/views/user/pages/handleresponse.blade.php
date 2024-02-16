<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
    @if($orderStatus === "Success")
        <br>Thank you for shopping with us. Your credit card has been charged, and your transaction is successful. We will be shipping your order to you soon.
    @elseif($orderStatus === "Aborted")
        <br>Thank you for shopping with us. We will keep you posted regarding the status of your order through e-mail.
    @elseif($orderStatus === "Failure")
        <br>Thank you for shopping with us. However, the transaction has been declined.
    @else
        <br>Security Error. Illegal access detected.
    @endif

    <br><br>

    <table cellspacing=4 cellpadding=4>
        @foreach($responseData as $key => $value)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $value }}</td>
            </tr>
        @endforeach
    </table><br>
</center>
</body>
</html>
