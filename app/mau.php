<style>img {
width: 60%;   height: auto;}</style>
    <div class="text-center">
 
  <div class="panel-body">
        <form action="" method="post" >
  <h3>Nhập năm sinh của bạn:</h3> <p><input type="number" name="yearold" id= "yearold">
  <input type="submit" id="oldtra" name="oldtra" value="Xem">
</form>
<?php
if( isset($_POST['oldtra']) )
{
$oldyear = $_POST['yearold'];
$tuoi = "";
if (($oldyear == 1936) or ($oldyear == 1948) or ($oldyear == 1960) or ($oldyear == 1972) or ($oldyear == 1984) or ($oldyear == 1996) or ($oldyear == 2008)) {
    $tuoi = "Tý";
    echo "<img src='https://i.imgur.com/X9eCpDm.png'/>";
} elseif (($oldyear == 1937) or ($oldyear == 1949) or ($oldyear == 1961) or ($oldyear == 1973) or ($oldyear == 1985) or ($oldyear == 1997) or ($oldyear == 2009)) {
    $tuoi = "Sửu";
     echo "<img src='https://i.imgur.com/LW6XcrF.png'/>";
}elseif (($oldyear == 1938) or ($oldyear == 1950) or ($oldyear == 1962) or ($oldyear == 1974) or ($oldyear == 1986) or ($oldyear == 1998) or ($oldyear == 2010)) {
    $tuoi = "Dần";
     echo "<img src='https://i.imgur.com/r7roXkP.png'/>";
}elseif (($oldyear == 1939) or ($oldyear == 1951) or ($oldyear == 1963) or ($oldyear == 1975) or ($oldyear == 1987) or ($oldyear == 1999) or ($oldyear == 2011)) {
    $tuoi = "Mão";
    echo "<img src='https://i.imgur.com/e6Hf0t6.png'/>";
}elseif (($oldyear == 1940) or ($oldyear == 1952) or ($oldyear == 1964) or ($oldyear == 1976) or ($oldyear == 1988) or ($oldyear == 2000) or ($oldyear == 2012)) {
    $tuoi = "Thìn";
      echo "<img src='https://i.imgur.com/cF4ji7h.png'/>";
}elseif (($oldyear == 1941) or ($oldyear == 1953) or ($oldyear == 1965) or ($oldyear == 1977) or ($oldyear == 1989) or ($oldyear == 2001) or ($oldyear == 2013)) {
    $tuoi = "Tị";
     echo "<img src='https://i.imgur.com/WJVdlOH.png'/>";
}elseif (($oldyear == 1942) or ($oldyear == 1954) or ($oldyear == 1965) or ($oldyear == 1978) or ($oldyear == 1990) or ($oldyear == 2002) or ($oldyear == 2014)) {
    $tuoi = "Ngọ";
      echo "<img src='https://i.imgur.com/4e0AbYP.png'/>";
}elseif (($oldyear == 1943) or ($oldyear == 1955) or ($oldyear == 1966) or ($oldyear == 1979) or ($oldyear == 1991) or ($oldyear == 2003) or ($oldyear == 2015)) {
    $tuoi = "Mùi";
      echo "<img src='https://i.imgur.com/I9JLQzO.png'/>";
}elseif (($oldyear == 1944) or ($oldyear == 1956) or ($oldyear == 1967) or ($oldyear == 1980) or ($oldyear == 1992) or ($oldyear == 2004) or ($oldyear == 2016)) {
    $tuoi = "Thân";
      echo "<img src='https://i.imgur.com/0IYLMgQ.png'/>";
}elseif (($oldyear == 1945) or ($oldyear == 1957) or ($oldyear == 1968) or ($oldyear == 1981) or ($oldyear == 1993) or ($oldyear == 2005) or ($oldyear == 2017)) {
    $tuoi = "Dậu";
      echo "<img src='https://i.imgur.com/rauD8H6.png'/>";
}elseif (($oldyear == 1946) or ($oldyear == 1958) or ($oldyear == 1969) or ($oldyear == 1982) or ($oldyear == 1994) or ($oldyear == 2006) or ($oldyear == 2018)) {
    $tuoi = "Tuất";
      echo "<img src='https://i.imgur.com/nqDq052.png'/>";
}elseif (($oldyear == 1947) or ($oldyear == 1959) or ($oldyear == 1970) or ($oldyear == 1983) or ($oldyear == 1995) or ($oldyear == 2007) or ($oldyear == 2019)) {
    $tuoi = "Hợi";
    echo "<img src='https://i.imgur.com/MypQrL5.png'/>";
} else {
     $tuoi = "Không có";
}
    echo "<p><h2>Tuổi: <b>".$tuoi."</b></h2><hr/>";
}

?>