
<?php
if (isset($_GET['key'])) {
$filename = base64_decode($_GET['key']);
$filename = str_replace("----------","~",$filename);
   $pattern = '~[a-z]+://\S+~';
//echo $filename;
 $getfind = file_get_contents($filename);
                $linkdw = ( explode( '<div class="col-12 tab_download_music">', $getfind ) );
                $linkdw2 = explode('</div>',$linkdw[1]);
                $linkdw3 = explode('</ul>',$linkdw2[0]);
                if($num_found = preg_match_all($pattern, $linkdw3[0], $out))
                {    
               $linkra = str_replace('"','',$out[0][0]);
                 //   if ((!isset($out[0][0])) == "") {} else {       }
                     if ((($out[0][1])) == "") {} else {        $linkra = str_replace('"','',$out[0][1]); } 
                         header('Content-Type: audio/mpeg');
                         header('Content-Disposition: inline;filename="'.basename($linkra).'"');
                         header('Cache-Control: no-cache');
                          header("Content-Transfer-Encoding: chunked"); 
                          readfile($linkra);
                        //  echo $linkra;
                }
}