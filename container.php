<?php
require_once 'item.php';

function container(){
    $rnd=random_int ( 1 ,4  );
    echo $rnd;
    
    if ( $rnd==1){
        
        echo '<div class="container fl ">';
   
    item(1);

    
    echo "</div>";
        
    }
    
     if ( $rnd==2){
        
        echo '<div class="container fl ">';
   
    item(2);

    
    echo "</div>";
        
    }
     if ( $rnd==3){
        
        echo '<div class="container fl fl_dir_col">';
   
    item(3);

    
    echo "</div>";
        
    }
     if ( $rnd==4){
        
        echo '<div class="container fl fl_dir_col">';
   
    item(4);

    
    echo "</div>";
        
    }
    
    ?>
    
    <iframe width="100%" height="600" src="//codepen.io/Uglevod/pen/YBrOOL" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>
    
    
    <?php
    
   
}
?>