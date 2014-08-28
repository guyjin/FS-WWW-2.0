<!DOCTYPE html>
<html>
<head>

  <?php include_once '../partials/head.php'; ?>
</head>
<body lang="en" class="<?php echo $bodyClass; ?>">
  <div class="flexcontainer">
    <div class="sidebar">

      <?php include_once 'header.php'; ?>
      <?php
        switch($pageMenu) {
          case "incident":
            include_once 'menu_incident.php';
          break;
          case "abs":
            include_once 'menu_abs.php';
          break;
          default:
            include_once 'menu.php';
        }
        ?>
      <?php include_once 'footer.php'; ?>

    </div>
    <div class="content">
      <div class="titlebar" role="banner">
        <div>
          <h1>Acquistion Management - <?php echo $pageTitle; ?></h1>
        </div>
      </div>
      <div class="breadcrumbs">
        <ul>
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="incident/">Incident Procurement</a>
          </li>
        </ul>
      </div>