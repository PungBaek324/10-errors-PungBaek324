<?php
function total(int $price, int $quantity = 1)
{
    return $price * $quantity;
}
?>
<h1>Basket</h1>
<?= total(3, 3) ?>