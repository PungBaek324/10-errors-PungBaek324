<?php $list = ['pencil', 'pen', 'notbook']; ?>
<h1>Basket</h1>
<ul>
<?php foreach ($list as $item) { ?>
    <li>Item: <?= $item ?></li>
<?php } ?>
</ul>