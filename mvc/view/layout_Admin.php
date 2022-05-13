<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" crossorigin="anonymous" />

    <style>
        @media (max-width: 768px) {
            .text-menu {
                display: none;
            }
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            font-family: arial
        }
        
        body {
            background: #f3f5f9
        }
        
        .wrapper {
            position: relative
        }
        
        .sidebar {
            position: fixed;
            width: 16.67%;
            height: 100%;
            background: #000000e0;
            padding: 20px 0
        }
        
        .text-muted {
            color: #ffffff !important;
            font-size: 24px;
        }
        
        ul {
            padding-bottom: 20px
        }
        
        .fa {
            padding-right: 10px;
        }
        
        .sidebar ul li {
            padding: 15px
        }
        
        .sidebar ul li a {
            color: #fff;
            display: block
        }
        
        .sidebar ul li a .fas {
            width: 30px;
            color: #bdb8d7 !important
        }
        
        i.fas.fa-home:hover,
        i.fas.fa-file-invoice:hover,
        i.fas.fa-video:hover,
        i.fas.fa-id-badge:hover,
        i.fas.fa-external-link-alt:hover,
        i.fas.fa-code:hover,
        i.far.fa-calendar-alt:hover,
        i.far.fa-credit-card:hover {
            color: #304FFE !important
        }
        
        .sidebar ul li a .far {
            width: 30px;
            color: #bdb8d7 !important
        }
        
        .sidebar ul li:hover {
            background: #000
        }
        
        .sidebar ul li a:hover {
            text-decoration: none
        }
        .bgx {
            background: #d3dbf3;
            background-size: cover;
            width: 100%;
            height: 100%;
        }
        .bgtb {
            background: #e6e6e6;
            background-size: cover;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body class="bgx">
    <div class="row ">
        <div class="col-2">
            <div class="wrapper d-flex">
                <div class="sidebar">
                    <ul>
                        <li><a href="/phpp3/home/index"><span class="text-menu" style="font-size: 24px;">
                            PTIT COVID
                        </span></a></li>
                        <li><a href="/phpp3/admin/index"><i class="fas fa-home"></i><span class="text-menu">
                            Home
                        </span></a></li>
                        <li><a href="/phpp3/admin/listAcc"><i class="fa fa-users" aria-hidden="true"></i><span class="text-menu">
                            Quản lý người dùng
                        </span> </a></li>
                        <li><a href="/phpp3/admin/createAcc"><i class="fa fa-plus" aria-hidden="true"></i><span class="text-menu">
                            Thêm tài khoản
                        </span>  </a></li>
                    </ul> <small class="text-muted px-3"><span class="text-menu">
                       Quản lý bài viết
                    </span></small>
                    <ul>
                        <li><a href="/phpp3/admin/listPost"><i class="fa fa-list-alt" aria-hidden="true"></i><span class="text-menu">
                            Danh sách bài viết
                        </span></a></li>
                        <li><a href="/phpp3/admin/createPost"><i class="fa fa-plus" aria-hidden="true"></i><span class="text-menu">
                            Thêm bài viết
                        </span></a></li>

                    </ul> <small class="text-muted px-3"><span class="text-menu">
                        Quản lý tiêm vacxin
                    </span></small>
                    <ul>
                        <li><a href="/phpp3/admin/ListM1"><i class="fas fa-external-link-alt"></i><span class="text-menu">
                            Phiếu đăng ký tiêm mũi 1
                        </span></a></li>
                        <li><a href="/phpp3/admin/ListM2"><i class="fas fa-external-link-alt"></i><span class="text-menu">
                            Phiếu đăng ký tiêm mũi 2
                        </span></a></li>
                        
                    </ul>
                </div>
            </div>
        </div>

<?php require_once "./mvc/view/page/".$data["page"].".php"?>