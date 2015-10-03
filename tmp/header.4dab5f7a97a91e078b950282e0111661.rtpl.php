<?php if(!class_exists('raintpl')){exit;}?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MOATAZ CMS v.1</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="/opt/lampp/htdocs/AhmedSyamRouting/templates/assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="/opt/lampp/htdocs/AhmedSyamRouting/templates/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- MORRIS CHART STYLES-->
        <link href="/opt/lampp/htdocs/AhmedSyamRouting/templates/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- dataTables -->
        <link href="/opt/lampp/htdocs/AhmedSyamRouting/templates/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
        <link href="/opt/lampp/htdocs/AhmedSyamRouting/templates/../templates/assets/css/datatables.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="/opt/lampp/htdocs/AhmedSyamRouting/templates/assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <!--
           <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        -->
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/opt/lampp/htdocs/AhmedSyamRouting/index.php">Moataz CMS</a>
                </div>
                <div style="color: white;
                     padding: 15px 50px 5px 50px;
                     float: right;
                     font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="" class="btn btn-danger square-btn-adjust">Logout</a> </div>
            </nav>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center">

                            <div class="card hovercard">
                                <div class="cardheader">

                                </div>
                                <div class="avatar">
                                    <img alt="Moataz Mohammady" src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xfa1/v/t1.0-9/10351953_1005356582822725_717469808440587683_n.jpg?oh=41edb78a5a2bef735d84c107d3052cbe&oe=56971655&__gda__=1449000547_e61fe085c99961d12e183fbcb6ca6659">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        <h3>Moataz Mohammady</h3>
                                    </div>
                                    <div class="desc">Junior PHP Developer</div>
                                </div>
                                <div class="bottom">
                                    <a class="btn btn-default btn-sm" rel="publisher"
                                       href="https://github.com/resist2b/" target="_blank">
                                        <i class="fa fa-github"></i>
                                    </a>
                                    <a class="btn btn-primary btn-sm" rel="publisher"
                                       href="https://www.facebook.com/Mezobook" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                            </div>

                        </li>

                        <li  >
                            <a  href="/opt/lampp/htdocs/AhmedSyamRouting/index.php"><i class="fa fa-paste fa-3x"></i>Articles</a>
                        </li>
                        <li  >
                            <a  href="/opt/lampp/htdocs/AhmedSyamRouting/table.html"><i class="fa fa-users fa-3x"></i>Users</a>
                        </li>
                        <li  >
                            <a  href="/opt/lampp/htdocs/AhmedSyamRouting/table.html"><i class="fa fa-youtube fa-3x"></i>Youtube</a>
                        </li>


                        <!--
                        <li  >
                            <a   href="/opt/lampp/htdocs/AhmedSyamRouting/chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                        </li>
                        <li>
                            <a class="active-menu"  href="/opt/lampp/htdocs/AhmedSyamRouting/index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                        </li>
                        <li>
                            <a  href="/opt/lampp/htdocs/AhmedSyamRouting/ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                        </li>
                        <li>
                            <a  href="/opt/lampp/htdocs/AhmedSyamRouting/tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                            <li  >
                                <a  href="/opt/lampp/htdocs/AhmedSyamRouting/form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                            </li>


                            <li>
                                <a href=""><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="">Second Level Link</a>
                                    </li>
                                    <li>
                                        <a href="">Second Level Link</a>
                                    </li>
                                    <li>
                                        <a href="">Second Level Link<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="">Third Level Link</a>
                                            </li>
                                            <li>
                                                <a href="">Third Level Link</a>
                                            </li>
                                            <li>
                                                <a href="">Third Level Link</a>
                                            </li>

                                        </ul>

                                    </li>
                                </ul>
                            </li>
                            <li  >
                                <a  href="/opt/lampp/htdocs/AhmedSyamRouting/blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                            </li>
                        -->
                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->
