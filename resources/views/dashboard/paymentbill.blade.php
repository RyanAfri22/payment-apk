<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <link rel="stylesheet" href="/css/paymentbill.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container">
        <header>
            <i class="fas fa-arrow-left back-icon" onclick="goBack()"></i>
            <h2>Payment</h2>
        </header>
        <section class="payment-details">
            <h2>Payment details</h2>
            <div class="detail">
                <span class="label">Nickname</span>
                <span class="value">Andrea</span>
            </div>
            <div class="detail">
                <span class="label">Transfer To</span>
                <span class="value">Annie</span>
            </div>
            <div class="detail">
                <span class="label">Amount To Pay</span>
                <span class="value">Rp250.000</span>
            </div>
            <div class="detail">
                <span class="label">After Tax</span>
                <span class="value">Rp250.000</span>
            </div>
            <div class="detail">
                <span class="label">Top Up Method</span>
                <span class="value">Master Card</span>
            </div>
            <div class="detail">
                <span class="label">Transaction ID</span>
                <span class="value">2435GASFD7523</span>
            </div>
            <div class="detail">
                <span class="label">Transfer before</span>
                <span class="value">February 09 2024, 23.00 WIB</span>
            </div>
            <div class="total">
                <span>Total</span>
                <span>Rp250.000</span>
            </div>
            <div class="buttons">
                <button id="cancelButton">Cancel</button>
                <button id="confirmButton"
                    onclick="window.location.href='/transfer/paymentbill/transactionsuccess'">Confirm</button>
            </div>
        </section>
    </div>
    <script>
        function goBack() {
            window.location.href = '/transfer';
        }
    </script>
    <script src="/js/paymentbill.js"></script>
</body>

</html>
