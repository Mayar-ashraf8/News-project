# استخدام صورة PHP مع Apache
FROM php:8.1-apache

# تعيين مجلد العمل داخل الحاوية
WORKDIR /var/www/html

# نسخ ملفات المشروع من مجلد src إلى مجلد Apache
COPY src/ /var/www/html/

# نسخ ملفات قاعدة البيانات إلى مجلد فرعي داخل html
COPY database/ /var/www/html/database/

# تثبيت امتداد mysqli الخاص بـ PHP
RUN docker-php-ext-install mysqli

# إعطاء صلاحيات للمجلدات داخل الحاوية
RUN chown -R www-data:www-data /var/www/html

# فتح المنفذ 80 الخاص بـ Apache
EXPOSE 80

# أمر تشغيل Apache داخل الحاوية
CMD ["apache2-foreground"]