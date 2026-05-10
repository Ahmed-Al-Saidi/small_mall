<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="container text-center">
    <h1><?= htmlspecialchars($title ?? 'SMALL MALL') ?></h1>
    <p style="margin-bottom: 20px;"><?= htmlspecialchars($message ?? 'مرحبا بكم في متجرنا الصغير 🎉') ?></p>

    <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
        <a href="/shop" class="btn btn-primary"><i class="fas fa-shopping-bag"></i> تصفح المنتجات</a>
        <a href="/contact" class="btn btn-outline"><i class="fas fa-envelope"></i> اتصل بنا</a>
    </div>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>