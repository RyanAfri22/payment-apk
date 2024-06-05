@extends('template.v_template')
@section('content')
    <header>
        <div class="header-left">
            <img src="img/logo.png" alt="" class="small-logo"> Assurance.Pay
        </div>
        <div class="header-right">
            <i class="fas fa-bell"></i>
        </div>
    </header>

    <div class="balance-card">
        <div class="balance-text">Hello, Andrea</div>
        <div class="balance-text">Balance Rp385.000</div>
        <div class="coin-reward">Coin Reward 5.400</div>
        <div class="top-buttons">
            <button class="btn btn-warning">
                <i class="fa-solid fa-plus" style="color: #FFD43B;"></i>
                Top Up
            </button>
            <button class="btn btn-warning" onclick="window.location.href='/transfer'">
                <i class="fa-solid fa-paper-plane" style="color: #FFD43B;"></i>
                Transfer
            </button>
        </div>
    </div>

    <div class="search-bar">
        <input type="text" placeholder="Enter your name">
    </div>

    <div class="payment-list">
        <button class="btn">
            <i class="fa-solid fa-file-invoice" style="color: #FFD43B;"></i>
            Bill
        </button>
        <button class="btn">
            <i class="fa-solid fa-notes-medical" style="color: #ed1d1d;"></i>
            Assurance Payment
        </button>
        <button class="btn">
            <i class="fa-solid fa-money-bill-wave" style="color: #63E6BE;"></i>
            Withdraw
        </button>
    </div>
@endsection
