<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="container">
    <h2 style="text-align: center; margin-bottom: 30px;">
        🛍️ جميع المنتجات <i class="fas fa-tags"></i>
    </h2>
    
    <?php if (empty($products)): ?>
        <div style="text-align: center; padding: 50px;">
            <i class="fas fa-box-open icon-lg text-primary"></i>
            <p>لا توجد منتجات حالياً 😢</p>
        </div>
    <?php else: ?>
        <div class="products">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <i class="fas fa-apple-alt icon-lg text-primary"></i>
                    <h3><?= htmlspecialchars($product['name']) ?> 🏷️</h3>
                    <p class="price">💰 <?= $product['price'] ?> ج.م</p>
                    <p class="description"><?= htmlspecialchars($product['description'] ?? 'منتج طازج بجودة عالية ✅') ?></p>
                    <button>
                        <i class="fas fa-shopping-cart"></i> أضف إلى السلة 🛒
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>