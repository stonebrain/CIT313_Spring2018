
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);

}?>

<div class="container">
  <div class="page-header">



    <h1><?php echo $title;?></h1>
  </div>
    <p>
      <?php echo $content;?>
    </p>
    <sub>
      <?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
    </sub>

    <?php if($u->isRegistered()) { ?>
      <?php if($u->isAdmin()) { ?>
        <div style="margin-top:15px;">
            <a class="btn btn-primary" href="<?php echo BASE_URL?>/manageposts/edit/<?php echo $pID;?>">Edit</a>
            <a class="btn btn-primary" href="<?php echo BASE_URL?>/manageposts/delete/<?php echo $pID;?>">Delete</a>
        </div>
      <?php } ?>
    <?php } ?>

    <h2>View Comments</h2>
    <?php if (is_array($comments)) {
      extract($comments);
    } ?>


  

</div>


<?php include('views/elements/footer.php');?>
