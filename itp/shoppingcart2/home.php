<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Home')?>

<div class="featured">
    <h2>Mercearia Do Povo</h2>
    <p>Mantimentos essenciais em um só lugar</p>
</div>
<div class="recentlyadded content-wrapper">
    <h2>Produtos adicionados recentemente</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="http://localhost:3000/itp/customer-login/index.php" class="product">
            <img src="<?=$product['img']?>" width="150" height="150" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                MZN <?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<?=template_footer()?>