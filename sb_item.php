<?php  



function sipl31(){
    
        echo '<div class="sb_item     w20  fl m5 p5  ">'; echo"&nbsp;";  echo "</div>";
        
        echo '<div class="sb_item     w20 fl m5 p5  ">'; echo"&nbsp;";  echo "</div>";
        
        echo '<div class="sb_item    w20 fl m5 p5  ">';  echo"&nbsp;";   echo "</div>";
     
}

function simpl4g ($g){
    
    if ($g==1){ echo '<div class="sb_item fl_g_0    fl m5 p5  ">'; echo"&nbsp;";  echo "</div>";}
     if ($g==2){ echo '<div class="sb_item fl_g_1    fl m5 p5  ">';  echo"&nbsp;"; echo "</div>";}
     if ($g==3){ echo '<div class="sb_item fl_g_2    fl m5 p5  ">';  echo"&nbsp;"; echo "</div>";}
     if ($g==4){ echo '<div class="sb_item fl_g_3    fl m5 p5  ">'; echo"&nbsp;";  echo "</div>";}
    
       
}

function simpl3o ($oi){
   
    $o1=random_int(1,4);
     
       
        echo '<div class="sb_item fl_or_'.$o1.'    w10  fl m5 p5  ">';echo $oi; echo "</div>";  
         
    
    
}

 function simpl3go ($go){
   
    $o1=random_int(1,4);
     
       
        echo '<div class="sb_item fl_or_'.$o1.' fl_g_'.$o1.'       fl m5 p5  ">';
echo  $go;
     echo "</div>";  
         
    
    
}


function sb_item_4 ($i){

//$i=8;        
    
    if ($i==1){
        echo '<div class="item fl h30  m5 p5 jst_cnt_cnr">'; 
         
           sipl31();
        
        
        
        echo "</div>";
                        }
         
    if ($i==2){
        echo '<div class="item fl h30  m5 p5 jst_cnt_spbt">'; 
          sipl31();
        echo "</div>";
                        }
    if ($i==3){
        echo '<div class="item fl h30  m5 p5 jst_cnt_spar ">'; 
          sipl31();
        echo "</div>";
                        }
    if ($i==4){
        echo '<div class="item fl h30  m5 p5 jst_cnt_spev ">'; 
          sipl31();
        echo "</div>";
                        }
    if ($i==5){
        echo '<div class="item fl h30  m5 p5  jst_cnt_flnd">'; 
         
          sipl31();
        
        
        
        echo "</div>";
                        }
   
    if ($i==6){
        echo '<div class="item fl h30  m5 p5 ">'; 
         
       
        
        simpl4g (random_int(1,4));
        simpl4g (random_int(1,4));
        simpl4g (random_int(1,4));
         
        
        echo "</div>";
                        }
    
    
    
    
    if ($i==7){
        echo '<div class="item fl h30  m5 p5 ">'; 
          simpl4g (random_int(1,4));
          simpl4g (random_int(1,4));
          simpl4g (random_int(1,4));
          simpl4g (random_int(1,4));
        
        
        echo "</div>";
                        }
    if ($i==8){
        echo '<div class="item fl h30  m5 p5 jst_cnt_spev">'; 
         
        
        simpl3o (1);
          simpl3o (2);
          simpl3o (3);
          simpl3o (4);
        
        
        
        
        echo "</div>";
                        }
    if ($i==9){
        echo '<div class="item fl h30  m5 p5 ">'; 
            simpl3go (1);
            simpl3go (2);
            simpl3go (3);
            simpl3go (4);
        echo "</div>";
                        }
    


}


?>