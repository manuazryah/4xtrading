<?php

use yii\helpers\Html;
?>

<div id="login-page" class="register-page">
    <div class="sec1">
        <div class="container">
            <div class="page-head">
                <div class="main-head-section"><h2><span>Register</span> Form</h2></div>
                <div class="sec-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
            </div>

            <div class="form-div">
                <div class="form-head"><div class="logo">Fill the below details</div></div>
                <div class="content-box">
                    <form action="" method="post" class="login-form">
                        <div class="row">
                            <div class="col-md-6 left-box">
                                <div class="q">Login Data </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Full name</label>
                                            <input type="text" placeholder="" class="form-control" id="full-name" name="name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" placeholder="" class="form-control" id="password" name="password" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email id</label>
                                            <input type="email" placeholder="" class="form-control" id="user-name" name="email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" placeholder="" class="form-control" id="password" name="password" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 right-box">
                                <div class="q">Personal Information </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>DOB</label>
                                            <input type="text" placeholder="" class="form-control" id="full-name" name="name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nationality</label>
                                            <select class="form-control" name="Nationality">
                                                <option value="" disabled="" selected="">Select Nationality</option>
                                                <option value="">UAE</option>
                                                <option value="">USA</option>
                                                <option value="">INDIA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" placeholder="" class="form-control" id="address" name="address" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="number" placeholder="" class="form-control" id="number" name="number" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 form-footer">
                                <div class="remember">
                                    <input type="checkbox" checked="" id="remember-me">
                                    <label for="remember-me">I accept the Financial Product Terms, ProductDisclosure Statement and Financial Services Guide</label>
                                </div>
                                <button type="submit" class="orng-btn">Register Now</button>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
