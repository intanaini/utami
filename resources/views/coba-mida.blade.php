<!DOCTYPE html>
<html>

<head>

    <title>Payment Page</title>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-MtUpsHYOiPMev-Au"></script>
</head>

<body>
    <form action="{{ route('payment.process') }}" method="POST">
        @csrf
        @method('PUT')
        <input type="number" name="amount" placeholder="Amount">
        <button type="submit">Bayar</button>
    </form>

    <button id="pay-button">Pay!</button>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('TRANSACTION_TOKEN_HERE');
            // customer will be redirected after completing payment pop-up
        });
    </script>
</body>

</html>
