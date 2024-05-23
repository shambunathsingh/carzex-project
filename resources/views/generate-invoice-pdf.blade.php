<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Company Invoice</title>
    <style>
        @page {
            size: A4;
            /* margin: 10mm; */
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .invoice-container {
            width: 100%;
            max-width: 210mm;
            margin: 0 auto;
            background: #fff;
            padding: 20mm;
            border: 1px solid #ddd;
            box-sizing: border-box;
            position: relative;
        }

        .header {
            text-align: center;
        }

        .header img {
            max-width: 150px;
        }

        .header h1 {
            margin-top: 10px;
            font-size: 24px;
            color: #333;
        }

        .details {
            margin: 20px 0;
        }

        .details .client,
        .details .invoice-info {
            width: 48%;
            display: inline-block;
            vertical-align: top;
        }

        .details .invoice-info {
            text-align: right;
        }

        .details p {
            margin: 5px 0;
            color: #666;
        }

        .details strong {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #f7f7f7;
        }

        .total {
            text-align: right;
            margin-top: 20px;
        }

        .total p {
            margin: 5px 0;
            color: #333;
        }

        .total strong {
            font-size: 18px;
        }

        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 50px;
            color: rgba(0, 128, 0, 0.1);
            pointer-events: none;
            z-index: 0;
        }
    </style>
</head>

<body>
    <div class="invoice-container">
        <div class="header">
            <img src="https://luxxport.com/assets/img/logo/logo.png" alt="{{ $title }}">
            <h1>Invoice</h1>
        </div>
        <div class="details">
            <div class="client">
                <p><strong>Client:</strong></p>
                <p>John Doe</p>
                <p>1234 Elm Street</p>
                <p>Some City, ST 12345</p>
            </div>
            <div class="invoice-info">
                <p><strong>Invoice #:</strong> {{ $invoice }}</p>
                <p><strong>Date:</strong> {{ $date }}</p>
                <p><strong>Time:</strong> {{ $time }}</p>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Car Model X</td>
                    <td>1</td>
                    <td>$25,000.00</td>
                    <td>$25,000.00</td>
                </tr>
                <tr>
                    <td>Extended Warranty</td>
                    <td>1</td>
                    <td>$1,500.00</td>
                    <td>$1,500.00</td>
                </tr>
                <tr>
                    <td>Delivery Charges</td>
                    <td>1</td>
                    <td>$300.00</td>
                    <td>$300.00</td>
                </tr>
            </tbody>
        </table>
        <div class="total">
            <p><strong>Subtotal:</strong> $26,800.00</p>
            <p><strong>Tax (5%):</strong> $1,340.00</p>
            <p><strong>Total:</strong> $28,140.00</p>
        </div>
        <div class="watermark">COMPLETED</div>
    </div>
</body>

</html>
