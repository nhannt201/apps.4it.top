<?php
if (isset($_GET['n']))  {
        $key = $_GET['n'];
       $pattern = '~[a-z]+://\S+~';

                               $getfind = @file_get_contents('https://chiasenhac.vn/tim-kiem?q='.$key);
                               if ($getfind === false) {
                                echo "Unknown";
                                   // exit;
                                } else {
                $stop_kd = ( explode( '<li class="media align-items-stretch">', $getfind ) );
                $kq = explode('<i class="material-icons">',$stop_kd[6]);
                //print_r($nd2sp);
                $pattern = '~[a-z]+://\S+~';
                if($num_found = preg_match_all($pattern, $kq[0], $out))
                {
                $linkdw = str_replace('"','',$out[0][0]);
                $getfind = file_get_contents($linkdw);
                $linkdw = ( explode( '<div class="col-12 tab_download_music">', $getfind ) );
                $linkdw2 = explode('</div>',$linkdw[1]);
                $linkdw3 = explode('</ul>',$linkdw2[0]);
                if($num_found = preg_match_all($pattern, $linkdw3[0], $out))
                {    
               $linkra = str_replace('"','',$out[0][0]);
              //  header('Location: '.$linkra);
            //    exit;
              $xuli_name = str_replace('"','',basename($linkra));
             $xuli_name = str_replace('.mp3','',$xuli_name);
                        $xuli_name = str_replace('.m4a','',$xuli_name);
                        $xuli_name = str_replace('.flac','',$xuli_name);
                         $xuli_name = str_replace('%20',' ',$xuli_name);
                        echo $xuli_name;
                }
               
                }
                                }
}
