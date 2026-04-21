</main>

    <!-- فوتر رئيسي -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <!-- عن المتجر -->
                <div class="footer-section">
                    <h3><i class="fas fa-store"></i> SMALL MALL</h3>
                    <p>أفضل وجهة لتسوق المنتجات الطازجة والمواد الغذائية بأفضل الأسعار 🛒✨</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                
                <!-- روابط سريعة -->
                <div class="footer-section">
                    <h3><i class="fas fa-link"></i> روابط سريعة</h3>
                    <ul>
                        <li><a href="/about"><i class="fas fa-chevron-left"></i> من نحن</a></li>
                        <li><a href="/contact"><i class="fas fa-chevron-left"></i> اتصل بنا</a></li>
                        <li><a href="/faq"><i class="fas fa-chevron-left"></i> الأسئلة الشائعة</a></li>
                        <li><a href="/blog"><i class="fas fa-chevron-left"></i> المدونة 📝</a></li>
                    </ul>
                </div>
                
                <!-- سياسة المتجر -->
                <div class="footer-section">
                    <h3><i class="fas fa-shield-alt"></i> سياسات المتجر</h3>
                    <ul>
                        <li><a href="/shipping"><i class="fas fa-truck"></i> سياسة الشحن 🚚</a></li>
                        <li><a href="/returns"><i class="fas fa-undo-alt"></i> الإرجاع والاستبدال</a></li>
                        <li><a href="/privacy"><i class="fas fa-lock"></i> سياسة الخصوصية</a></li>
                        <li><a href="/terms"><i class="fas fa-file-contract"></i> الشروط والأحكام</a></li>
                    </ul>
                </div>
                
                <!-- معلومات الاتصال -->
                <div class="footer-section">
                    <h3><i class="fas fa-headset"></i> خدمة العملاء</h3>
                    <ul class="contact-info">
                        <li><i class="fas fa-phone-alt"></i> 123-456-7890 📞</li>
                        <li><i class="fab fa-whatsapp"></i> 01234567890 💬</li>
                        <li><i class="fas fa-envelope"></i> info@smallmall.com 📧</li>
                        <li><i class="fas fa-map-marker-alt"></i> القاهرة، مصر 📍</li>
                    </ul>
                </div>
            </div>
            
            <!-- طرق الدفع -->
            <div class="payment-methods">
                <p><i class="fas fa-credit-card"></i> طرق الدفع الآمنة:</p>
                <div class="payment-icons">
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-paypal"></i>
                    <i class="fab fa-cc-amex"></i>
                    <span>💰 دفع عند الاستلام</span>
                </div>
            </div>
            
            <!-- حقوق الملكية -->
            <div class="copyright">
                <p>© 2025 SMALL MALL - جميع الحقوق محفوظة 🛍️❤️</p>
                <p>تم التطوير بـ <i class="fas fa-heart text-primary"></i> لتقديم أفضل تجربة تسوق</p>
            </div>
        </div>
    </footer>

    <!-- زر العودة للأعلى -->
    <button id="scrollToTop" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // زر العودة للأعلى
        const scrollBtn = document.getElementById('scrollToTop');
        window.onscroll = function() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                scrollBtn.style.display = "flex";
            } else {
                scrollBtn.style.display = "none";
            }
        };
        scrollBtn.onclick = function() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        };
    </script>
</body>
</html>