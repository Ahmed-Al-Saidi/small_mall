<?php require_once __DIR__ . '/../../layouts/header.php'; ?>

<div class="container">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;">
        <h1>إدارة المنتجات</h1>
        <a href="/admin/products/create" class="btn btn-primary">إضافة منتج</a>
    </div>

    <form method="GET" action="/admin/products" style="margin-bottom:16px;display:flex;gap:8px;">
        <input type="text" name="q" class="form-control" placeholder="ابحث عن منتج باسم أو وصف" value="<?= htmlspecialchars($query ?? '') ?>">
        <button class="btn btn-primary">بحث</button>
    </form>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>السعر</th>
                        <th>الوصف</th>
                        <th>الأولوية</th>
                        <th>إجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($products)): ?>
                        <tr>
                            <td colspan="6" class="text-center">لا توجد منتجات حالياً</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($products as $p): ?>
                            <tr>
                                <td><?= htmlspecialchars($p['id'] ?? '') ?></td>
                                <td><?= htmlspecialchars($p['name'] ?? '') ?></td>
                                <td><?= htmlspecialchars($p['price'] ?? '') ?> ج.م</td>
                                <td><?= htmlspecialchars($p['description'] ?? '') ?></td>
                                <td><?= htmlspecialchars($p['priority'] ?? '—') ?></td>
                                <td>
                                    <a href="/admin/products/delete/<?= htmlspecialchars($p['id'] ?? '') ?>" class="btn btn-outline" onclick="return confirm('هل أنت متأكد من حذف هذا المنتج؟')">حذف</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>