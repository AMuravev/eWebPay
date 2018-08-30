<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eWebPay
 */

?>
<!doctype html>
<html class="color_scheme main">

<head>
  <!-- META TAGS -->
  <meta charset="utf-8">
  <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <![endif]-->

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <!-- PAGE TITLE -->
  <?php wp_head(); ?>

</head>

<body <?php body_class('bg'); ?>>

<div class="container">
  <div class="row mt-5">
    <div class="col d-flex logo-top-container"><div class="logo-top"><a href="/">eWebPay</a></div></div>
    <div class="col text-right">
      <nav class="navbar navbar-light bg-faded rounded navbar-expand-sm">
        <div class="navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="credit-card-processing.php">Credit Card Processing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="in-store-payments.php">In-Store Payments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="online-payments.php">Online Payments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="omnichannel.php">Omnichannel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="support.php">Support</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
