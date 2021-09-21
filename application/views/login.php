<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icons -->
    <link rel="icon" href="<?php echo base_url();?>assets/images/fevicon/fevicon.jpg" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
    <!-- Site css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css" />
    <!-- colors css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/colors1.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css" />
    <!-- wow Animation css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css" />
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/revolution/css/settings.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/revolution/css/layers.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/revolution/css/navigation.css" />



</head>
<body class="adlogin">
<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" ></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>
                <?php echo form_open('login/login'); ?>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <table>
                            <tr>
                                <td>
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input name="username" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input id="password" name="password" type="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
</td>
</table>
<table align="center">
<td>
    <th>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" name="login" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                                </td></th></table>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>



</body>
</html>