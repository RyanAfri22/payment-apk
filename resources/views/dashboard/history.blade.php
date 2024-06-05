<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #ff7f00;
            color: white;
            padding: 8px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .header-left {
            padding-left: 10px;
            cursor: pointer;
        }

        main {
            padding: 20px;
        }

        .transaction {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .transaction-details {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            padding-left: 10px;
        }

        .name {
            font-weight: bold;
        }

        .date {
            color: gray;
        }

        .amount {
            font-weight: bold;
            color: #ff7f00;
        }

        .icon {
            color: red;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-left" onclick="window.location.href='/dashboard'">
            <i class="fas fa-arrow-left" style="color: #ffffff;"></i>
        </div>
        <h2>History</h2>
        <div></div>
    </header>
    <main>
        <div class="transaction">
            <i class="fas fa-arrow-up icon"></i>
            <div class="transaction-details">
                <p class="name">Ralph Edwards</p>
                <p class="date">Saturday, Feb 09 2024</p>
            </div>
            <div class="amount">Rp50.000</div>
        </div>
        <div class="transaction">
            <i class="fas fa-arrow-up icon"></i>
            <div class="transaction-details">
                <p class="name">Jerome Bell</p>
                <p class="date">Friday, Feb 08 2024</p>
            </div>
            <div class="amount">Rp350.000</div>
        </div>
        <div class="transaction">
            <i class="fas fa-arrow-up icon"></i>
            <div class="transaction-details">
                <p class="name">Dianne Russell</p>
                <p class="date">Wednesday, Feb 06 2024</p>
            </div>
            <div class="amount">Rp164.000</div>
        </div>
        <div class="transaction">
            <i class="fas fa-arrow-up icon"></i>
            <div class="transaction-details">
                <p class="name">Marvin McKinney</p>
                <p class="date">Wednesday, Feb 06 2024</p>
            </div>
            <div class="amount">Rp264.000</div>
        </div>
        <div class="transaction">
            <i class="fas fa-arrow-up icon"></i>
            <div class="transaction-details">
                <p class="name">Courtney Henry</p>
                <p class="date">Monday, Feb 04 2024</p>
            </div>
            <div class="amount">Rp643.000</div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/03717f260b.js" crossorigin="anonymous"></script>
</body>

</html>
