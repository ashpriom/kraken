<!DOCTYPE html>
<html>
    
    <?php require '../controllers/listItemsController.php'; ?>
    <?php include 'header.php'; ?>
    
    <body>
        
        <?php include 'nav.php'; ?>

        <div>
            
            <div class="panelContainer">
            
            <?php listitems($jsonurl); ?>
            
            <script type="text/javascript">
                
            </script>
            
            </div>
        
        </div>
            
        <?php include 'footer.php'; ?>

    </body>
</html>