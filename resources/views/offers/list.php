<ul>
<?php
  if(!empty($offers)) {
    foreach ($offers as $key => $offer) {
?>
<li>
  <h3> <a href="/offers/view/<?php echo $offer->id; ?>">[<?php echo $offer->id; ?>] - <?php echo $offer->name; ?></a></h3>
</li>
<?php
    }
  }
?>
</ul>
