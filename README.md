# Teguh Aldianto - Portfolio Website

Professional portfolio website built with Laravel 12, Tailwind CSS, and Filament Admin Panel. Showcasing software development expertise, projects, and professional experience.

## 🚀 Features

- **8 Core Pages**: Home, About, Experience, Projects, Publications, Skills, Resume, Contact
- **Filament Admin Panel**: Full CRUD management for all content
- **Dark Mode**: Toggle between light and dark themes with localStorage persistence
- **Responsive Design**: Mobile-first approach, works flawlessly on all devices
- **SEO Optimized**: Met tags, Open Graph, and Twitter Cards
- **Contact Form**: Database storage with email notifications
- **Project Showcase**: Filterable project portfolio with detail pages
- **Modern UI**: Clean, professional design with Tailwind CSS and smooth animations

## 📋 Requirements

- PHP 8.2 or higher
- Composer
- MySQL 5.7+ or MariaDB 10.3+
- Node.js 18+ and npm
- Web server (Apache/Nginx) or Laravel Valet/Laragon

## 🛠️ Installation

### 1. Clone or Download

If you haven't already, download the project files to your local machine.

```bash
cd c:/laragon/www/portofolio\ pribadi
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install JavaScript Dependencies

```bash
npm install
```

### 4. Environment Configuration

Copy the example environment file:

```bash
copy .env.example .env
```

Edit `.env` file and configure your database:

```env
APP_NAME="Teguh Aldianto Portfolio"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio_db
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@teguhportofolio.com"
MAIL_FROM_NAME="${APP_NAME}"
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Create Database

Create a new MySQL database named `portfolio_db` (or your preferred name from `.env`).

Using MySQL command line:
```sql
CREATE DATABASE portfolio_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 7. Run Migrations & Seeds

```bash
php artisan migrate --seed
```

This will create all tables and populate them with data from Teguh's CV.

### 8. Create Storage Link

```bash
php artisan storage:link
```

### 9. Build Frontend Assets

For development:
```bash
npm run dev
```

For production:
```bash
npm run build
```

### 10. Create Admin User

```bash
php artisan make:filament-user
```

Follow the prompts to create your admin account:
- Name: Admin
- Email: admin@example.com
- Password: (your secure password)

## 🚀 Running the Application

### Using Laragon (Recommended for Windows)

1. Ensure Laragon is running
2. Access the site at: `http://portofolio-pribadi.test`
3. Admin panel: `http://portofolio-pribadi.test/admin`

### Using Artisan Serve

```bash
php artisan serve
```

Access at: `http://localhost:8000`
Admin panel: `http://localhost:8000/admin`

## 📁 Project Structure

```
portofolio-pribadi/
├── app/
│   ├── Filament/Resources/     # Admin panel resources
│   ├── Http/Controllers/        # Page controllers
│   ├── Http/Requests/          # Form validation
│   ├── Mail/                   # Email templates
│   └── Models/                 # Eloquent models
├── database/
│   ├── migrations/             # Database schema
│   └── seeders/                # CV data seeders
├── resources/
│   ├── css/app.css            # Tailwind CSS
│   ├── js/app.js              # Alpine.js & dark mode
│   └── views/
│       ├── layouts/app.blade.php      # Main layout
│       ├── components/                # Reusable components
│       ├── home.blade.php             # Home page
│       ├── about.blade.php            # About page
│       ├── experience.blade.php       # Experience page
│       ├── projects/                  # Project pages
│       ├── publications.blade.php     # Publications page
│       ├── skills.blade.php           # Skills page
│       ├── resume.blade.php           # Resume page
│       └── contact.blade.php          # Contact form
└── routes/web.php              # Application routes
```

## 🎨 Customizing Content

### Via Admin Panel (Recommended)

1. Login to `/admin`
2. Manage content through the dashboard:
   - **Projects**: Add/edit project details, images, technologies
   - **Experiences**: Update work history and education
   - **Skills**: Manage skills and proficiency levels
   - **Publications**: Add certifications and publications
   - **Messages**: View contact form submissions

### Via Database Seeders

Edit files in `database/seeders/`:
- `ProjectSeeder.php`
- `ExperienceSeeder.php`
- `SkillSeeder.php`
- `PublicationSeeder.php`

Then refresh the database:
```bash
php artisan migrate:fresh --seed
```

⚠️ **Warning**: This will delete all existing data!

## 📧 Contact Form Setup

### Using Mailtrap (Development)

1. Sign up at [mailtrap.io](https://mailtrap.io)
2. Get SMTP credentials
3. Update `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
```

### Using Gmail (Production)

1. Enable 2-Step Verification
2. Generate App Password
3. Update `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=aldinamanya08@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
```

## 📄 Adding Your CV PDF

1. Place your CV PDF file in: `storage/app/public/cv/`
2. Name it: `teguh-aldianto-cv.pdf`
3. Or update the path in: `app/Http/Controllers/ResumeController.php`

## 🌐 Deployment

### Shared Hosting (cPanel)

1. **Build Assets Locally**:
   ```bash
   npm run build
   ```

2. **Upload Files** via FTP/File Manager to `public_html/portfolio`

3. **Configure `.env`** with production values:
   ```env
   APP_ENV=production
   APP_DEBUG=false
   ```

4. **Run Migrations** via SSH or cPanel Terminal:
   ```bash
   php artisan migrate --seed
   php artisan storage:link
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

5. **Setup Cron Job** (if needed):
   ```
   * * * * * cd /path/to/project && php artisan schedule:run >> /dev/null 2>&1
   ```

### VPS (Ubuntu + Nginx)

1. **Install Dependencies**:
   ```bash
   sudo apt update
   sudo apt install nginx mysql-server php8.2-fpm php8.2-mysql php8.2-mbstring php8.2-xml php8.2-bcmath php8.2-curl composer nodejs npm
   ```

2. **Setup Database**:
   ```bash
   sudo mysql
   CREATE DATABASE portfolio;
   CREATE USER 'portfolio_user'@'localhost' IDENTIFIED BY 'strong_password';
   GRANT ALL ON portfolio.* TO 'portfolio_user'@'localhost';
   FLUSH PRIVILEGES;
   EXIT;
   ```

3. **Clone Project** & Install:
   ```bash
   cd /var/www
   # Upload project files
   composer install --optimize-autoloader --no-dev
   npm install && npm run build
   ```

4. **Configure `.env`** and run migrations

5. **Set Permissions**:
   ```bash
   sudo chown -R www-data:www-data /var/www/portofolio-pribadi
   sudo chmod -R 775 storage bootstrap/cache
   ```

6. **Configure Nginx** (see implementation_plan.md for config)

7. **Setup SSL** with Let's Encrypt:
   ```bash
   sudo certbot --nginx -d yourdomain.com
   ```

## 🔧 Troubleshooting

### Storage Link Error
```bash
php artisan storage:link --force
```

### Permission Issues (Linux/Mac)
```bash
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### Migration Errors
```bash
php artisan migrate:fresh --seed
```

### Cache Issues
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

## 📞 Support

For issues or questions:
- Email: aldinamanya08@gmail.com
- LinkedIn: [Teguh Aldianto](https://h7.cl/1m9DR)
- GitHub: [Profile](https://h7.cl/1hdko)

## 📝 License

This project is for personal portfolio use. Feel free to use it as a template for your own portfolio!

## 🙏 Acknowledgments

- Built with [Laravel 12](https://laravel.com/)
- Admin panel by [Filament](https://filamentphp.com/)
- Styled with [Tailwind CSS](https://tailwindcss.com/)
- Icons from [Heroicons](https://heroicons.com/)

---

**Developed by Teguh Aldianto** | © 2026 All Rights Reserved
# portofoliopribadi
