# Laravel 12 Portfolio - Quick Start Guide

## 🚀 Get Started in 5 Minutes

### Prerequisites
- Laragon running (with PHP 8.2+, MySQL, Node.js)
- Terminal access

### Setup Steps

1. **Configure Environment**
   ```bash
   cd "c:\laragon\www\portofolio pribadi"
   copy .env.example .env
   ```

2. **Edit `.env` File**
   - Open `.env` in your editor
   - Update database settings:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=portfolio_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

3. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

4. **Create Database**
   - Open HeidiSQL (or phpMyAdmin)
   - Create new database named `portfolio_db`

5. **Run Migrations & Seeds**
   ```bash
   php artisan migrate:fresh --seed
   php artisan storage:link
   ```

6. **Install & Build Frontend**
   ```bash
   npm install
   npm run build
   ```
   > **Note**: If build fails, run: `npm install -D @tailwindcss/typography` then `npm run build`

7. **Create Admin User**
   ```bash
   php artisan make:filament-user
   ```
   - Name: Admin
   - Email: admin@example.com
   - Password: (your choice)

8. **Access Your Site**
   - **Website**: http://portofolio-pribadi.test (Laragon auto-virtualhost)
   - **Admin Panel**: http://portofolio-pribadi.test/admin
   
   *Or using artisan serve:*
   ```bash
   php artisan serve
   # Visit: http://localhost:8000
   ```

## ✅ Verification

Check that everything works:
- ✓ Homepage loads with 3 featured projects
- ✓ Navigation menu works
- ✓ Dark mode toggle functions
- ✓ Admin panel accessible at `/admin`
- ✓ Contact form submits (check `messages` table)

## 📧 Email Configuration (Optional)

For contact form emails, update `.env`:

**Using Mailtrap (Testing):**
```env
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
```

**Using Gmail (Production):**
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=aldinamanya08@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_encryption=tls
```

## 📄 Add Your CV PDF

Place your CV file:
```
storage/app/public/cv/teguh-aldianto-cv.pdf
```

## 🎨 Customization

All content can be managed via `/admin`:
- **Projects**: Add/edit/delete projects
- **Experiences**: Update work history
- **Skills**: Manage technical skills
- **Publications**: Add certifications
- **Messages**: View contact submissions

## 🔧 Common Issues

**Storage link error:**
```bash
php artisan storage:link --force
```

**Cache issues:**
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

**Migration errors:**
```bash
php artisan migrate:fresh --seed
```

## 📚 Documentation

- Full README: `README.md`
- Project walkthrough: See artifacts
- Laravel docs: https://laravel.com/docs

---

**Ready to launch! 🎉**

For deployment instructions, see `README.md` sections on cPanel and VPS deployment.
