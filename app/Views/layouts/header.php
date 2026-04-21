<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🛒 SMALL MALL | سوبر ماركت</title>
    <link rel="stylesheet" href="/asset/style.css">
    <!-- Font Awesome للأيقونات -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">
</head>
<body>
    
    <!-- شريط العروض العلوي -->
    <div class="top-bar">
        <div class="container">
            <div class="offers">
                <i class="fas fa-tags"></i> خصومات تصل إلى 50% 🎉 | 
                <i class="fas fa-truck"></i> توصيل مجاني للطلبات فوق 200 ج.م 🚚 |
                <i class="fas fa-clock"></i> خدمة 24/7 🕒
            </div>
            <div class="contact-info">
                <i class="fas fa-phone-alt"></i> 123-456-7890 |
                <i class="fab fa-whatsapp"></i> 01234567890
            </div>
        </div>
    </div>

    <!-- الهيدر الرئيسي -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="/">
                    <i class="fas fa-store"></i>
                    <span>SMALL <span class="highlight">MALL</span></span>
                    <small>🛍️ سوبر ماركت</small>
                </a>
            </div>
            
            <!-- شريط البحث -->
            <div class="search-bar">
                <form action="/search" method="GET">
                    <input type="text" placeholder="🔍 ابحث عن منتج..." name="keyword">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            
            <!-- أيقونات المستخدم والسلة -->
            <div class="header-icons">
                <a href="/account" class="icon-btn">
                    <i class="fas fa-user-circle"></i>
                    <span>حسابي</span>
                </a>
                <a href="/cart" class="icon-btn cart">
                    <i class="fas fa-shopping-cart"></i>
                    <span>السلة</span>
                    <span class="cart-count">3</span>
                </a>
            </div>
        </div>
    </header>

    <!-- القائمة الرئيسية -->
    <nav class="main-nav">
        <div class="container">
            <ul>
                <li><a href="/"><i class="fas fa-home"></i> الرئيسية</a></li>
                <li><a href="/shop"><i class="fas fa-shopping-bag"></i> جميع المنتجات</a></li>
                <li><a href="/offers"><i class="fas fa-percent"></i> العروض 🔥</a></li>
                <li><a href="/categories"><i class="fas fa-list"></i> الأقسام</a></li>
                <li><a href="/contact"><i class="fas fa-envelope"></i> اتصل بنا</a></li>
            </ul>
            
            <!-- زر تسجيل الدخول -->
            <div class="auth-buttons">
                <a href="/login" class="btn-login"><i class="fas fa-sign-in-alt"></i> دخول</a>
                <a href="/register" class="btn-register"><i class="fas fa-user-plus"></i> تسجيل</a>
            </div>
        </div>
    </nav>

    <main>