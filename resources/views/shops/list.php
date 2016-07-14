<ul>
<?php
  if(!empty($shops)) {
    foreach ($shops as $key => $shop) {
?>
<li>
  <h3> <a href="/shops/view/<?php echo $shop->id; ?>">[<?php echo $shop->id; ?>] - <?php echo $shop->name; ?></a></h3>
  <p><?php echo $shop->description; ?></p>
</li>
<?php
    }
  }
?>
</ul>
