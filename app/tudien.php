
<form action="" method="POST" role="form" class="form-horizontal">
    
    <div class="input-group" style="width: 70%;  margin: 0 auto;" >
      <input type="text" class="form-control" name="sr_r">
      <span class="input-group-btn">
        <button class="btn btn-default" name="timm" type="submit">Tra cứu</button>
      </span>
    </div>

   </form>
   
     <?php 


   if (isset($_POST['timm'])) {
       if (isset($_POST['sr_r'])) {
           $q_s = trim($_POST['sr_r']);
        


                 echo '<div id="cent" class="alert alert-warm" role="alert">Không tim thấy từ điển!</div>';
                 
       }
   }
   
