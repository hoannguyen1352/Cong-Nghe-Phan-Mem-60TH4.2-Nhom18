<?php
include_once "./assets/layouts/navbar.php";
?>
<div class="container-fluid">
  <div class="row" style="margin-top: 100px;">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <?php
      if (isset($data)) {
        foreach ($data as $table) {
          if ($table['status'] == '0') { ?>
            <a href="./index.php?controller=table&action=order&id=<?php echo $table['id'] ?>" class="m-2 mb-4 pt-4 pb-4 pr-5 pl-5 btn btn-secondary text-white" id="<?php echo $table['id'] ?>" name="table" onclick=""><?php echo $table['name'] ?></a>
          <?php } else { ?> <a href="./index.php?controller=table&action=order&id=<?php echo $table['id'] ?>" class="m-2 mb-4 pt-4 pb-4 pr-5 pl-5 btn btn-success text-white" id="<?php echo $table['id'] ?>" name="table"><?php echo $table['name'] ?></a>
      <?php }
        }
      } ?>
    </div>
  </div>
</div>
<?php include_once "./assets/layouts/footer.php" ?>