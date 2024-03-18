<!DOCTYPE html>
<html>

<head>
    {{-- <link rel="stylesheet" type="text/css" href="styles.css"> --}}
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            color: #333;
            background-color: #f9f9f9;
            padding: 20px;
        }

        .invoice-container {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .company-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .company-info {
            margin-bottom: 5px;
        }

        .invoice-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .invoice-number {
            font-size: 18px;
            font-weight: bold;
        }

        .date {
            margin-right: 50px;
        }

        .po-number {
            font-size: 16px;
            font-weight: bold;
        }

        .attention {
            font-size: 16px;
            font-weight: bold;
        }

        .greeting {
            margin-bottom: 20px;
        }

        .greeting-text {
            margin-bottom: 10px;
        }

        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .items-table th {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .items-table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .total-text {
            font-weight: bold;
        }

        .total-amount {
            font-weight: bold;
            text-align: right;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
        }

        .footer-text {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="invoice-container">
        <div class="header">
            <div class="company-name">BHANDARAWALA</div>
            <div class="company-info">VYY1421 Shree Annakoot Sitaram PVT LTD</div>
            <div class="company-info">Unit No 10 Shop No. SCF-4, 3rd Floor, Sec-19</div>
            <div class="company-info">Faridabad, Haryana</div>
            <div class="company-info">9650815489</div>
            <div class="company-info">rawatpriyankamalik1401@gmail.com</div>
        </div>
        <div class="invoice-info">
            <div class="invoice-number">Invoice for Booking #{{ $booking->id }}</div>
            <div class="date">{{ $response['trans_date'] }}</div>
            <div class="po-number">PO {{ $response['tracking_id'] }}</div>
            <div class="attention">Att: {{ $response['billing_name'] }}</div>
        </div>
        <div class="greeting">
            <div class="greeting-text">Dear {{ $response['billing_name'] }}, I trust this message finds you well.</div>
            <div class="greeting-text">It was a pleasure serving you and assisting with the arrangements for your
                upcoming Bhandara event at
                @if ($booking->booking_address_type === 'Temple')
                    <strong>{{ $booking->booking_temple_name }}, {{ $booking->booking_temple_address }}</strong>
                @else
                    <strong>{{ $booking->booking_address }}</strong>
                @endif.</div>
            <div class="greeting-text">on {{ $booking->booking_date }} at {{ $booking->booking_time }}.</div>
        </div>
        <table class="items-table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $totalAmount = 0;
                @endphp
                @foreach ($bookingItem as $item)
                    @php
                        $foodproduct = \App\Models\FoodProduct::find($item->prod_id);
                        $itemAmount = (int) $item->price * (int) $item->qty;
                        $totalAmount += $itemAmount;
                    @endphp
                    <tr>
                        <td><strong>{{ $loop->index + 1 }}</strong></td>
                        <td>{{ $foodproduct->name }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $itemAmount }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4" class="total-text">Total</td>
                    <td class="total-amount">Rs. {{ number_format($totalAmount, 2) }}</td>
                </tr>
                @php
                    $platformFee = $totalAmount * 0.02;
                    $totalAmount += $platformFee;
                @endphp
                <tr>
                    <td colspan="4" class="total-text">Platform Fees (2%)</td>
                    <td class="total-amount">Rs. {{ number_format($platformFee, 2) }}</td>
                </tr>
                <!-- Calculate and display GST (18%) on platform fees -->
                @php
                    $gstOnPlatformFees = $platformFee * 0.18;
                    $totalAmount += $gstOnPlatformFees;
                @endphp
                <tr>
                    <td colspan="4" class="total-text">GST (18%)</td>
                    <td class="total-amount">Rs. {{ number_format($gstOnPlatformFees, 2) }}</td>
                </tr>
                <tr>
                    <td colspan="4" class="total-text">Grand Total</td>
                    <td class="total-amount">Rs. {{ number_format($totalAmount, 2) }}</td>
                </tr>
            </tbody>
        </table>
        <div class="footer">
            <div class="footer-text">Thank you for your business. We look forward to serving you again in the future.
            </div>
            <div class="footer-text">Best Regards,</div>
            <div class="footer-text">Priyanka Malik</div>
            <div class="footer-text">Event Coordinator</div>
        </div>
    </div>
</body>

</html>
