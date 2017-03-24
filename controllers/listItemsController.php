<?php
    
    $jsonurl='../models/panels.json';
    
    function listItems($jsonurl){
        $json = file_get_contents($jsonurl,0,null,null);  
        $json_output = json_decode($json, JSON_PRETTY_PRINT);
        foreach($json_output as $panel){ ?>
            <div class="panel">
                <div class="aligner">
                    <img class="panelcover" src="../assets/images/img-kraken.png">
                    <div class="item"><h1><?php echo "{$panel["title"]}\n";?></h1></div>
                    <div class="item"><p><?php echo "{$panel["text"]}\n";?></p></div>
                </div>
            </div>
        <?php }
    }
?>