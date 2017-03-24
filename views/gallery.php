<!DOCTYPE html>
<html>
    <?php require '../controllers/galleryController.php'; ?>
    <?php include 'header.php'; ?>
    
    <body>
        <?php include 'nav.php'; ?>

        <div>
            <div class="galleryContainer">
                
                <!-- Get galleries from controller -->
                <?php getGalleries(); ?>

                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close"><img src="../assets/images/close-btn.png"></span>
                        <div id="caption"><?php echo $response->data[$k]->slug; ?></div>
                        <img id="modalImage">
                    </div>
                </div>
            
            </div>
        </div>

        <script type="text/javascript">
            var modal = document.getElementById("myModal");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            span.onclick = function() {
              modal.style.display = "none";
            }

            document.getElementById("myModal").onclick=function(){
              modal.style.display = "none";
            }

            document.getElementById("modalImage").onclick=function(event){
              modal.style.display = "block";
              event.stopPropagation();
            }

            // Get image caption aka Giphy title
            var images = document.getElementsByClassName("lazy");
            //var images = document.querySelectorAll("img.gImg");
            var modalImg = document.getElementById("modalImage");
            var captionText = document.getElementById("caption");

            var i;
            for(i = 0; i < images.length; i++){
              images[i].onclick = function() {
                modal.style.display = "block";
                modalImg.src = this.src;
                modalImg.alt = this.alt;
                captionText.innerHTML = this.nextElementSibling.innerHTML;
              }
            }


            $(document).ready(function(){
              $('#modalImage').click(function(e){
                //e.preventDefault();
                $(this).show();  
                e.stopPropagation();
              });
            });
        </script>

        <script type="text/javascript">
            /*$.ajax({
                type: "POST",
                url: "../controllers/galleryController.php",
                datatype: "html",
                data: $offset,
                success: function(data) {
                    alert(data);
                }
            });*/
        </script>
        
        <?php include 'footer.php'; ?>

    </body>

</html>