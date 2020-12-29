<html>
    <?php 
    if (isset($_GET['q'])) {
    $q = trim($_GET['q']);
    if ($q == "VIPMUSIC") {
        $txt = "VIP MUSIC";
    } elseif ($q == "MAUMAYMAN") {
        $txt = "MÀU MAY MẮN";
    } elseif ($q == "TUDIEN") {
        $txt = "TỪ ĐIỂN ANH-VIỆT MIỄN PHÍ";
    } else {
         $txt = "NOT FOUND";
    }
    } else {
        $txt = "NOT FOUND";
    }
    ?>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $txt; ?> - Kho Apps - 4it.top</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content="<?php echo $txt; ?> - Kho ứng dụng web và phần mềm trên 4IT Community!">
        <meta property="og:title" content="<?php echo $txt; ?> - Kho Apps - 4it.top"/>
         <meta property="og:image" content="https://i.imgur.com/Febouen.png" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
    body {
    width: 70%;
    margin: 0 auto;
}
 img {
  width: 64px;
  height: 64px;
}
#cent {
    margin: 0 auto;
    width: 70%;
    text-align: center;
}
#tudien {
    margin: 0 auto;
    width: 70%;
  
}

</style>
    </head>
    <body>
<div class="page-header">
  <h1>KHO APPS <small>Ứng dụng web và phần mềm</small></h1>
</div>
<div class="panel panel-primary">
  <center><div id="doicho"><h2><?php echo $txt; ?></h2></div></center>
 <?php 
 if (isset($_GET['q'])) {
     $qq = trim($_GET['q']);
     if ($qq == "VIPMUSIC") {
          include("app/mp3.php");
         echo '<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=1577610968981381&autoLogAppEvents=1"></script>
<div id="cent" class="fb-like" data-href="https://apps.4it.top/runs?q=VIPMUSIC" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
<div id="cent" class="fb-comments" data-href="https://apps.4it.top/runs?q=VIPMUSIC" data-width="" data-numposts="5"></div>';
     } elseif ($qq == "MAUMAYMAN") {
           include("app/mau.php");
     } elseif ($qq == "TUDIEN") {
           include("app/tudien.php");
     } else {
           echo '<div id="cent" class="alert alert-warning" role="alert">Không tìm thấy ứng dụng này!</div>';
     }
 } else {
           echo '<div id="cent" class="alert alert-warning" role="alert">Không tìm thấy ứng dụng này!</div>';
 }

 ?>
  <ul class="pager">
  <li><a href="#pager"> Copyright ©2020 4it.top</a></li>
  <li><a href="https://www.facebook.com/groups/4it.community/" target="_blank"> Visit 4IT Community</a></li>
</ul>

</div>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-80502987-12"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-80502987-12');
</script>

    </body>
</html>