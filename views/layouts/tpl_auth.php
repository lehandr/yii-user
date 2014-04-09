<?php
/**
 * @var $this EController
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?= $this->getPageTitle(); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <script src="/js/libs/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="/js/libs/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/css/main.css">

    <style type="text/css">

        body {
            margin: 0;
            padding: 0;
            height: 100%;
            background: #fcfff4;
            background: -moz-linear-gradient(top,  #fcfff4 0%, #e9e9ce 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fcfff4), color-stop(100%,#e9e9ce));
            background: -webkit-linear-gradient(top,  #fcfff4 0%,#e9e9ce 100%);
            background: -o-linear-gradient(top,  #fcfff4 0%,#e9e9ce 100%);
            background: -ms-linear-gradient(top,  #fcfff4 0%,#e9e9ce 100%);
            background: linear-gradient(to bottom,  #fcfff4 0%,#e9e9ce 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#e9e9ce',GradientType=0 );

            /* W3C */
        }


        #login-container {
            width: 340px;
            margin: 160px auto;
        }
        #login-container label {
            margin: 15px 0 5px 5px;
        }
        #login-container button {
            width: 150px;
            padding: 6px 40px 6px 40px;
            float: left;
            margin-top: 15px;
        }
        #login-container .checkbox {
            margin: 23px 0 10px;
        }
        #login-container .btm-links {
            text-align: center;
            margin-top: 10px;
        }
        #login-container #create-account {
            float: right;
            margin-right: 13px;
        }
        #login-container #forgot-password {
            float: left;
            margin-left: 10px;
        }
        #account-form-container {
            width: 460px;
            margin: 100px auto;
        }
        #country-list {
            width: 280px;
        }
        .modal-form-errors li {
            color: #808080;
            text-shadow: -1px 1px 0 #fff;
            -moz-text-shadow: -1px 1px 0 #fff;
            -webkit-text-shadow: -1px 1px 0 #fff;
            color: #d8000c;
        }
        .modal-single-input {
            width: 452px;
            margin: -200px 0 0 -232px;
        }
        .modal-single-input form {
            color: #808080;
            text-shadow: -1px 1px 0 #fff;
            -moz-text-shadow: -1px 1px 0 #fff;
            -webkit-text-shadow: -1px 1px 0 #fff;
            margin-bottom: 0;
        }
        .modal-single-input form button {
            width: 80px;
            top: 213px;
            position: absolute;
        }
        .modal-single-input form #cancel {
            right: 110px;
        }
        .modal-single-input form #submit {
            right: 18px;
        }
        .modal-single-input .modal-body {
            height: 140px;
            overflow: hidden;
            padding-bottom: 0;
        }
        .modal-single-input .modal-footer {
            height: 20px;
        }
        .modal-alert {
            width: 310px;
            margin: -200px 0 0 -150px;
        }
        #btn-logout {
            width: 100px;
            top: 1px;
            right: 8px;
            position: absolute;
        }
        #print {
            padding: 20px;
        }
        #four04 {
            padding: 20px;
        }
        .clear-fix {
            clear: both;
        }
        .well {
            margin-left: 0;
            border: 1px solid #ccc;
        }
        .form-horizontal .control-label {
            width: 80px;
        }
        .form-horizontal .controls {
            margin-left: 120px;
        }
        .form-horizontal .form-actions {
            padding: 17px 0 0 270px;
        }
        label {
            color: #808080;
            text-shadow: -1px 1px 0 #fff;
            -moz-text-shadow: -1px 1px 0 #fff;
            -webkit-text-shadow: -1px 1px 0 #fff;
        }
        .subheading {
            color: #808080;
            text-shadow: -1px 1px 0 #fff;
            -moz-text-shadow: -1px 1px 0 #fff;
            -webkit-text-shadow: -1px 1px 0 #fff;
            margin-top: 3px;
        }
        button i {
            padding-left: 8px;
        }

    </style>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->

<div class="signin">
    <?=$content?>
</div>
</body>
</html>