<?php
session_start();
if (isset($_SESSION['auth'])) {
    if (!isset($_SESSION['message'])) {
        $_SESSION['message'] = "You are already logged in";
    }
    header('location: index.php');
    exit(0);
}

include('includes/header.php');
include('includes/navbar.php');
?>
<style>
    .headers {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 58px;
        text-align: center;

        color: #283971;
        margin-top: 99px;
    }

    .horizontal-line {
        background-color: #283971;
        width: 50%;
        margin: auto;
        border-top: 4px solid #283971 !important;
        border-radius: 14px;
        margin-top: 36px;
        margin-bottom: 30px;
    }

    body {
        margin-left: 100px;
        margin-right: 100px;
        height: 60em;
    }

    label {
        font-family: 'Inter';
        font-style: normal;
        color: #283971;
        font-weight: 700;
        padding: 5px;
    }

    p {
        font-family: 'Inter';
        font-style: normal;
        color: #283971;
    }

    #textfield {
        left: calc(50% - 798px/2 - 8px);
        width: 40%;
        margin-left: 20%;
        margin-bottom: 78px;
        border-radius: 15px;
        padding: 8px 12px;
        border: 3px solid #ccc;
        padding-left: 40px;
        background-size: 20px;
    }

    ::placeholder {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 13px;
        line-height: 16px;
        letter-spacing: 0.205em;

        color: rgba(40, 57, 113, 0.47);
    }

    #Login-button {
        width: 100px;
        height: 32px;
        left: 865px;
        top: 2714px;
        border: none;
        background: #283971;
        border-radius: 30px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 13px;
        line-height: 16px;
        text-align: center;
        color: #FFFFFF;
    }

    #Login-button:hover {
        background-color: #A19158;
        transition: color 5s;
    }

    #Login-button:active {
        background-color: #8D7F4D;
    }

    .card {
        box-shadow: 5px 5px 10px 0 rgba(0, 0, 0, 0.5);
    }
</style>

<body>
    <h1 class="headers">LOGIN</h1>
    <hr class="horizontal-line">
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <?php include('message.php'); ?>
                    <div class="card">
                        <div class="card-body">
                            <form action="logincode.php" method="POST">
                                <div class="form-group mb-3">
                                    <label>Email ID </label>
                                    <input required type="email" name="email" placeholder="📧Enter Email Address" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Password </label>
                                    <input required type="password" name="password" placeholder="🔑Enter Password" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <button required type="submit" name="login_btn" class="btn btn-primary" id="Login-button">Login Now</button>
                                </div>
                                <p>Don't have an account? <a href="register.php">Register Now</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>