
<form action="" method="POST" role="form" class="form-horizontal">
    
    <div class="input-group" style="width: 70%;  margin: 0 auto;" >
      <input type="text" class="form-control" name="sr_r">
      <span class="input-group-btn">
        <button class="btn btn-default" name="timm" type="submit">Search</button>
      </span>
    </div>

   </form>
   <?php 
   if (isset($_POST['timm'])) {
       if (isset($_POST['sr_r'])) {
           $q_s = trim($_POST['sr_r']);
          
            if (strlen($q_s) < 2) {
                  echo '<div id="cent" class="alert alert-warning" role="alert">Từ khoá quá ngắn</div>';
              
            } else {
                  //echo '<div id="cent" class="alert alert-success" role="alert">'.$q_s.'</div>';
                   //xu li nhac
                               $getfind = @file_get_contents('https://chiasenhac.vn/tim-kiem?q='.$q_s);
                               if ($getfind === false) {
                                    echo '<div id="cent" class="alert alert-warning" role="alert">Máy chủ đang bảo trì. Vui lòng quay lại sao!</div><p>';
                                   // exit;
                                } else {
                $stop_kd = ( explode( '<li class="media align-items-stretch">', $getfind ) );
                $kq = explode('<i class="material-icons">',$stop_kd[6]);
                //print_r($nd2sp);
                $pattern = '~[a-z]+://\S+~';
                if($num_found = preg_match_all($pattern, $kq[0], $out))
                {
                $linkra = str_replace('"','',$out[0][0]);
              //  echo $linkra;
              //ket thuc search
              //bat dau lay link nhac
                    $link_dw = $linkra;
                $getfind = file_get_contents($link_dw);
                $linkdw = ( explode( '<div class="col-12 tab_download_music">', $getfind ) );
                $linkdw2 = explode('</div>',$linkdw[1]);
                $linkdw3 = explode('</ul>',$linkdw2[0]);
                if($num_found = preg_match_all($pattern, $linkdw3[0], $out))
                {
                  //  print_r($out);
                    $linkra = str_replace('"','',$out[0][0]);
                    //link 320kb
                    if ($out[0][1] == "") { 
                         echo '<div id="cent" class="alert alert-warning" role="alert">Không tìm thấy đường tải về chất lượng cao!</div>';
                    } else {
                        $xuli_name = str_replace('"','',basename($out[0][1]));
                        $xuli_name = str_replace('%20',' ',$xuli_name);
                        $xuli_name = str_replace('.mp3','',$xuli_name);
                        $xuli_name = str_replace('.m4a','',$xuli_name);
                        $xuli_name = str_replace('.flac','',$xuli_name);
                        $xuli_name = str_replace('- -',' của ',$xuli_name);
                        $mp3_play = "</span></h3>";
                          if (!isset($out[0][0])) { } else {
                              $link_dw2 = str_replace('~','----------',$link_dw);
                              $url_demo = "/plays?key=".base64_encode(($link_dw2));
                        $mp3_play =  ' </span<p><span id="cent" class="label label-primary">(Preview 128kbps)</span></h3><br/><div><audio controls  autoplay id="cent">
          <source src="'.$linkra.'" type="audio/mpeg" />
          An html5-capable browser is required to play this audio. 
        </audio></div>'; }
                         echo '<div id="cent" class="alert alert-primary" role="alert"><div class="panel panel-default">
  <div class="panel-heading"><h3><span class="label label-primary">'.$xuli_name.$mp3_play.'</div></div></div>';
                        echo '<div id="cent"><h3>Download</h3></div><ul class="pager">';
                      if (strpos($out[0][1],'.mp3') !== false) {
                           $url_320 = "/download?q=mp3".base64_encode(str_replace('"','',$out[0][1]));
                 echo   "<li><a href='".$url_320."'  target='_blank'>320kbps</a></li>";
                         } //else {
                             //  echo '<div id="cent" class="alert alert-warning" role="alert">Không tìm thấy đường tải về chất lượng cao!</div>';
                        // }
                         if ((!isset($out[0][2])) and (!isset($out[0][3]))) {
                                                            echo '<div id="cent" class="alert alert-warning" role="alert">Không tìm thấy đường tải về chất lượng cao!</div>';

                         }
                         //link 500kb
                            if (!isset($out[0][2])) { } else {
                                 if (strpos($out[0][2],'.m4a') !== false) {
                                 $url_500 = "/download?q=mp3".base64_encode(str_replace('"','',$out[0][2]));
                                echo   "<li><a href='".$url_500."' target='_blank'  target='_blank'>500kbps</a><p></li>";
                                //www.google.com

                                 }
                           }
                         //link LOssless
                          if (!isset($out[0][3])) { } else {
                                if (strpos($out[0][3],'.flac') !== false) {
                                $url_ls = "/download?q=mp3".base64_encode(str_replace('"','',$out[0][3]));
                                echo   "<li><a href='".$url_ls."'  target='_blank'>Lossless</a><p></li>";
                                }
                           }
                         
                    }
                    echo "</ul>"; 
                
                }
                } else {
                     $q_s = "Không tìm thấy bài này!!";
            echo '<div id="cent" class="alert alert-warning" role="alert">'.$q_s.'</div>';
                }
            }
               
                //ket thuc xu li
            }
       } else {
           $q_s = "Not found!";
            echo '<div id="cent" class="alert alert-warning" role="alert">'.$q_s.'</div>';
       }
       
      
   }
 
  
   ?>
 
