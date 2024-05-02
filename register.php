<?php
session_start();
if (isset($_SESSION['auth'])) {
    $_SESSION['message'] = "You are already logged in";
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
        height: 70em;
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

    ::placeholder {
        color: gray;
        font-style: normal;
        font-weight: 400;
    }

    #Register-button {
        width: 130px;
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

    #Register-button:hover {
        background-color: #A19158;
        transition: color 5s;
    }

    #Register-button:active {
        background-color: #8D7F4D;
    }
    
    .card {
        box-shadow: 5px 5px 10px 0 rgba(0, 0, 0, 0.5);
    }
</style>

<body>
    <h1 class="headers">REGISTER</h1>
    <hr class="horizontal-line">
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">

                    <?php include('message.php'); ?>

                    <div class="card">
                        <div class="card-body">
                            <form action="registercode.php" method="post">
                                <div class="form-group mb-3">
                                    <label>First Name</label>
                                    <input required type="text" name="fname" placeholder="Enter First Name" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Last Name</label>
                                    <input required type="text" name="lname" placeholder="Enter Last Name" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Email ID</label>
                                    <input required type="email" name="email" placeholder="Enter Email Address" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Password</label>
                                    <input required type="password" name="password" placeholder="Enter Password" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Confirm Password</label>
                                    <input required type="password" name="cpassword" placeholder="Confirm Password" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <button required type="submit" name="register_btn" class="btn btn-primary" id="Register-button">Register Now</button>
                                </div>
                                <p>Already have an account? <a href="login.php">Login</a></p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>