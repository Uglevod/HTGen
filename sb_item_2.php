<?php

function sb_item_2 ($sbi){
    
echo $sbi;    
    if ($sbi==1)
    {
        
         echo '<div class="item fl   m5 p5 fl_g_1 al_it_cnt">'; 
        
        
           echo '<div class="sb_item fl_g_1 h10  fl m5 p5  ">'; echo "</div>";
        
            echo '<div class="sb_item fl_g_1 h20 fl m5 p5  ">'; echo "</div>";
        
        
        
        
        echo "</div>";
          }
    
    if ($sbi==2)
    {
         echo '<div class="item fl fl_dir_col m5 p5 fl_g_1">';     
           
              echo '<div class="sb_item fl_g_1 h10  fl m5 p5  ">'; echo "</div>";
        
            echo '<div class="sb_item fl_g_1 h20 fl m5 p5  ">'; echo "</div>";
        
        
        
        echo "</div>";
        
        
    }
    
    if ($sbi==3)
    {
        
         
        echo '<div class="item fl fl_dir_col m5 p5 fl_g_1  al_it_cnt ">';     
       
        
         echo '<div class="sb_item   h10 w20  fl m5 p5  ">'; echo "</div>";
        
            echo '<div class="sb_item   h20 w20 fl m5 p5  ">'; echo "</div>";
        
        
        
        
        echo "</div>"; 
        
        
        
    }
    
    
    
}

function al_it_x(){
    $alitx=random_int(1,4);
   
    if ( $alitx==1) {$ralitx="al_it_st";}
    if ( $alitx==2) {$ralitx="al_it_flst";}
    if ( $alitx==3) {$ralitx="al_it_flnd";}
    if ( $alitx==4) {$ralitx="al_it_cnt";}
    if ( $alitx==45) {$ralitx="al_it_bsl";}
    return $ralitx;
    
}

function sb_item_1(){
 
    
 
         
          echo '<div class="item fl   m5 p5 fl_g_1 '.al_it_x().' ">';     
        
        vert1i3();
        vert1i3();
        vert1i3();
        
        
        echo "</div>";
         
           
         
         
     }
    
 

function vert1i3(){
    
         echo '<div class="sb_item '.flgx().' '.flhx().'  fl m5 p5 '.flhiplusalislf().'  ">'; echo "</div>";
        
    
    
    
    
}

function flgx(){
    $flgx=random_int(1,4);
   
    if ($flgx==1) {$rflgx="fl_g_0";}
    if ($flgx==2) {$rflgx="fl_g_1";}
    if ($flgx==3) {$rflgx="fl_g_2";}
    if ($flgx==4) {$rflgx="fl_g_3";}
         
    return $rflgx;
}

function flhiplusalislf(){
     $flhs=random_int(1,6);
   
    if ($flhs==1) {$rflhs="al_slf_stch";}
    if ($flhs==2){ $rflhs="al_slf_flst".flhx();}
    if ($flhs==3) {$rflhs="al_slf_fl_nd".flhx();}
    if ($flhs==4){ $rflhs="al_slf_cntr".flhx();}
    if ($flhs==5){ $rflhs="al_slf_bsln".flhx();}
    if ($flhs==6){ $rflhs=" ".flhx();}
         
    return $rflhs;
    
}

function flhx(){
     $flhx=random_int(1,5);
   
    if ($flhx==1) {$rflhx="h10";}
    if ($flhx==2) {$rflhx="h20";}
    if ($flhx==3) {$rflhx="h30";}
    if ($flhx==4) {$rflhx="h40";}
    if ($flhx==5) {$rflhx="h50";}
    if ($flhx==6) {$rflhx=" ";}
    
         
    return $rflhx;
    
}



?>