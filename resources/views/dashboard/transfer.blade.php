<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/css/transfer.css">
</head>

<body>
    <header>
        <i class="fas fa-arrow-left back-icon" onclick="goBack()"></i>
        <h2>Transfer</h2>
        <div></div>
    </header>
    <div class="container">
        <div class="recipient-card">
            <h5>Send to :</h5>
            <div class="d-flex align-items-center">
                <i class="fas fa-user-circle fa-3x" style="color: #00aaff;"></i>
                <div class="ms-3">
                    <h5>Annie</h5>
                    <p>8930462013</p>
                </div>
            </div>
        </div>

        <div class="amount-card">
            <h5>Enter your amount</h5>
            <input type="text" id="amount" value="Rp250.000" readonly>
            <textarea id="note" placeholder="Leave a note" rows="3"></textarea>
        </div>

        <div class="method-card position-relative">
            <h5>Select top up method</h5>
            <div class="d-flex align-items-center">
                <i class="fab fa-cc-mastercard fa-3x" style="color: #ff5f00;"></i>
                <div class="ms-3">
                    <h5>Master Card</h5>
                    <p>Ending card 7658</p>
                </div>
            </div>
            <i class="fas fa-pen edit-icon"></i>
        </div>

        <button class="transfer-button" onclick="window.location.href='/transfer/paymentbill'">
            Transfer Rp250.000
            <i class="fa-solid fa-paper-plane" style="color: #ffffff; margin-left:10px"></i>
        </button>
    </div>

    <script>
        function goBack() {
            window.location.href = '/dashboard';
        }
    </script>
</body>
<script src="https://kit.fontawesome.com/03717f260b.js" crossorigin="anonymous"></script>

</html>
