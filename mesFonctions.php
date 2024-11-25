<?php

         
    function verifMdp($leMdp){
      
        $ok = true;
        
        if (strlen($leMdp)<=9) {
            $ok=false;
       
        }
        else {
            
            if (preg_match("#[0-9]#",$leMdp)==true &&
                preg_match("#[A-Z]#",$leMdp)==true &&
                preg_match("#[-+!*$@%_.]#",$leMdp)==true){
                    
                    $ok=true;
                }
            else
                $ok = false;
            
        }
        
                
         return $ok;
    }
        
     
?>