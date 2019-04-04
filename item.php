<?php  
require_once 'sb_item.php';
require_once 'sb_item_2.php';



function item($i){
$rnd=random_int ( 1 ,4  );
     
    
    if ($i==1){
        
        sb_item_1(); 
        sb_item_1(); 
        
    }
    
    if ($i==2){
        
      sb_item_2(random_int(1,3));
      sb_item_2(random_int(1,3));
      sb_item_2(random_int(1,3));
        
    }
    
    if ($i==3){
        sb_item_4(random_int(1,9));
        sb_item_4(random_int(1,9)); 
        
    }
    
    if ($i==4){
        
        sb_item_4(random_int(1,9));
        sb_item_4(random_int(1,9));    
        sb_item_4(random_int(1,9));    
        sb_item_4(random_int(1,9));    
        
    }
    
    
    
    
    
}








?>