<?php

function getGalleries(){
    $total = 120;
    $numberofImageSets = $total/12;
    $offset = 0;

    for($i=0;$i<$numberofImageSets;$i++){ // 5 Image sets ?>

        <div id="lazy-container" class="gallery">
            
            <?php
            while($offset<109){
                
                //echo $offset;
                $url = "http://api.giphy.com/v1/gifs/search?q=akira+kurosawa&api_key=dc6zaTOxFJmzC&limit=12&offset=$offset";
                $response = json_decode(file_get_contents($url)); ?>
                    
                    <?php for($k=0;$k<12;$k++){ ?>
                    <div class="responsive">
                        <div class="gImg">
                            <img class="lazy" data-src="<?php echo $response->data[$k]->images->fixed_width_still->url; ?>" full="<?php echo $response->data[$k]->images->original_still->url; ?>"><div style="display: none;"><?php echo $response->data[$k]->slug; ?></div>
                        </div>
                    </div>
                    <?php } ?>
                
                
            <?php $offset=$offset+12; break; } ?>
            <div class="clearfix"></div>

        </div>

    <?php } // 5 image sets 
}

?>