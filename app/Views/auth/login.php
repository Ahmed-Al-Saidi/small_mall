<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="container" style="max-width:480px; margin-top:40px;">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">لوحة الدخول للمسؤول</h3>
        </div>
        <div class="card-body">
            <?php if (!empty($error)): ?>
                <div class="alert alert-error" role="alert"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form action="/login/auth" method="POST">
                <div class="form-group">
                    <label class="form-label">اسم المستخدم</label>
                    <input type="text" name="username" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label class="form-label">كلمة المرور</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-lg">دخول</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>