<h3>[<?php echo $shop->id; ?>] - <?php echo $shop->name; ?></h3>
<p><?php echo $shop->description; ?></p>
<?php
  if (!empty($shop->offers)) {
?>
Offers:
<ul>
  <?php
    foreach($shop->offers as $offer) {
  ?>
  <li>
      <a href="/offers/view/<?php echo $offer->id; ?>"><?php echo $offer->name; ?></a>
  </li>
  <?php
    }
  ?>
</ul>
<?php
  }
?>

<h1><a href="/shops">Shops Index</a><h1>
