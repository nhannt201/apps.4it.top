<html>
        <?php 
    if (isset($_GET['q'])) {
    $q = trim($_GET['q']);
    if ($q == "eWORD") {
        $txt = "eWORD";
    } elseif ($q == "VOICEMUSIC") {
        $txt = "VOICE MUSIC";
    } else {
         
         if (strpos($q,'mp3') !== false) { 
            
                $txt = "MUSIC";
         } else {
           $txt = "NOT FOUND";
         }
    }
    }
    ?>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Download <?php echo $txt; ?> - Kho Apps - 4it.top</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content="Download <?php echo $txt; ?> - Kho ứng dụng web và phần mềm trên 4IT Community!">
        <meta property="og:title" content="Download <?php echo $txt; ?> - Kho Apps - 4it.top"/>
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

</style>
    </head>
    <body>
<div class="page-header">
  <h1>KHO APPS <small>Ứng dụng web và phần mềm</small></h1>
</div>
<div class="panel panel-primary">
  <center><div id="doicho"><h2>Vui lòng đợi, đang lấy link...</h2></div></center>
  
  <ul class="pager">
  <li><a href="#pager"> Copyright ©2020 4it.top</a></li>
  <li><a href="https://www.facebook.com/groups/4it.community/" target="_blank"> Visit 4IT Community</a></li>
</ul>

</div>
<?php 
if (isset($_GET['q'])) {
    $q = trim($_GET['q']);
    if ($q == "eWORD") {
        $txt = "<h2>Đang tải xuống ".$q."...</h2><img src='https://i.imgur.com/GaC6upE.png'/>";
         $url = "https://1drv.ms/u/s!AhzenAXMR_gohJkSYTnN9thMixOcpg?e=sVT0eo";
    } elseif ($q == "VOICEMUSIC") {
        $txt = "<h2>Đang tải xuống ".$q."...</h2><img src='https://i.imgur.com/GaC6upE.png'/>";
         $url = "https://1drv.ms/u/s!AhzenAXMR_gohJ8-A7Tr6Cc8RrEt4A?e=le9qqz";
    }  elseif (strpos($q,'mp3') !== false) { 
         $q = str_replace("mp3","",$_GET['q']);
          $url = base64_decode($q);
          if ((strpos($url,'.mp3') !== false) or (strpos($url,'.m4a') !== false) or (strpos($url,'.flac') !== false) ){ 
                 $txt = "<h2>Đang tải xuống mp3...</h2><img src='https://i.imgur.com/GaC6upE.png'/>";
             //  $url = "https://apps.4it.top/";
          } else {
                $txt = "<h2>Không tìm thấy link tải về...</h2><img src='https://i.imgur.com/iVoTtmR.png'/>";
               $url = "https://apps.4it.top/";
          }
    }
    else {
        $txt = "<h2>Không tìm thấy link tải về ...</h2><img src='https://i.imgur.com/iVoTtmR.png'/>";
        $url = "https://apps.4it.top/";
    }
}
?>
<script>
var myVar;
var red_dw;
  myVar = setTimeout(alertFunc, 3000);

function alertFunc() {
   document.getElementById("doicho").innerHTML = "<?php echo $txt ?>";
     clearTimeout(myVar);
     red_dw = setTimeout(redc, 3000);
}
function redc() {
    window.location.replace("<?php echo $url ?>");
     clearTimeout(red_dw);
}
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-80502987-12"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-80502987-12');
</script>
<!-- PopAds.net Popunder Code for vietdap.com -->
<script type="text/javascript" data-cfasync="false">
/*<![CDATA[/* */
  var _pop = _pop || [];
  _pop.push(['siteId', 1948301]);
  _pop.push(['minBid', 0]);
  _pop.push(['popundersPerIP', 0]);
  _pop.push(['delayBetween', 0]);
  _pop.push(['default', false]);
  _pop.push(['defaultPerDay', 0]);
  _pop.push(['topmostLayer', false]);
  (function() {
    var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.async = true;
    var s = document.getElementsByTagName('script')[0]; 
    pa.src = '//c1.popads.net/pop.js';
    pa.onerror = function() {
      var sa = document.createElement('script'); sa.type = 'text/javascript'; sa.async = true;
      sa.src = '//c2.popads.net/pop.js';
      s.parentNode.insertBefore(sa, s);
    };
    s.parentNode.insertBefore(pa, s);
  })();
/*]]>/* */
</script>
<!-- PopAds.net Popunder Code End -->
    </body>
</html>