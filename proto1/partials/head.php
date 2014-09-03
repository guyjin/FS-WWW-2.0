  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>U.S. Forest Service - Business Operations</title>
  <!-- <base href="/business/2/proto1/"> -->
  <link rel="stylesheet" href="/business/2/proto1/css/normalize.css">
  <link rel="stylesheet" href="/business/2/proto1/css/bootstrap.css">
  <link rel="stylesheet" href="/business/2/proto1/css/styles.css">
  <?php
    if(isset($cssList)) {
        $css = explode(",", $cssList);
        foreach($css as $file) {
    ?>
        <link rel="stylesheet" href="/business/2/proto1/css/<?php echo $file; ?>">
    <?php
        }

    }
  ?>
  <script src='/business/2/proto1/js/modernizr.js'></script>
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script>window.jQuery || document.write('<script src="/business/2/proto1/js/jquery-1.11.1.min.js">\x3C/script>')</script>
  <script src="/business/2/proto1/js/base.js"></script>
<!--[if lte IE 9]>
<link rel="stylesheet" href="css/oldIE.css">
<![endif]-->
<?php
  if(isset($jsList)) {
      $js = explode(",", $jsList);
      foreach($js as $file) {
  ?>
      <script src='/business/2/proto1/js/<?php echo $file; ?>'></script>
  <?php
      }

  }
?>