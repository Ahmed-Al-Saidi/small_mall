<?php require_once __DIR__ . '/../../layouts/header.php'; ?>

<div class="container" style="max-width:760px;margin-top:24px;">
    <h1>إضافة منتج جديد</h1>

    <form action="/admin/products/store" method="POST">
        <div class="form-group">
            <label class="form-label">اسم المنتج</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label class="form-label">السعر (ج.م)</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>

        <div class="form-group">
            <label class="form-label">الوصف</label>
            <textarea name="description" class="form-control" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label class="form-label">الأولوية (اختياري)</label>
            <input type="number" name="priority" class="form-control">
        </div>

        <div class="form-group">
            <button class="btn btn-primary">حفظ المنتج</button>
            <a href="/admin/products" class="btn btn-outline">إلغاء</a>
        </div>
    </form>
</div>

<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>