<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/success.css">
</head>

<body>
    <div class="header-container">
        <header class="d-flex align-items-center justify-content-between">
            <i class="fas fa-arrow-left back-icon" style="color: #ffffff;" onclick="goBack()"></i>
            <h1>Payment Receipt</h1>
        </header>
    </div>
    <div class="container">
        <div class="receipt">
            <div class="success-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h2>Transaction Success!</h2>
            <p>09 February 2024, 21:58 WIB</p>
            <h3>Rp250.000</h3>
            <div class="details">
                <div class="detail-item">
                    <span class="label">Recipient</span>
                    <span class="value">Annie</span>
                </div>
                <div class="detail-item">
                    <span class="label">Bank Destination</span>
                    <span class="value">BCA</span>
                </div>
                <div class="detail-item">
                    <span class="label">Account Number</span>
                    <span class="value">8930462013</span>
                </div>
                <div class="detail-item">
                    <span class="label">Transaction ID</span>
                    <span class="value">2435GASFD7523</span>
                </div>
                <div class="detail-item">
                    <span class="label">Note</span>
                    <span class="value"></span>
                </div>
            </div>
            <div class="action-buttons">
                <button class="btn btn-link" id="downloadButton"><i class="fas fa-download"></i> Download</button>
                <button class="btn btn-link" id="shareButton"><i class="fas fa-share"></i> Share</button>
            </div>
            <button class="btn btn-primary w-100" id="doneButton">Done</button>
        </div>
    </div>
    <script src="/js/success.js"></script>
</body>

</html>
