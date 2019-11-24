<?php
include("includes/header.php");
include("database.php");
?>

<?php for($i=0; $i<10; $i++){?>
    <div class="row">
        <?php for($j=0; $j<2; $j++ ){?>
            <div class="col-md"> <?php echo $j?> </div>
        <?php } ?>
    </div>
<?php }?>

<?php include("includes/footer.php") ?>