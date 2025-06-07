# Laravel Filament Project - Setup Guide

## Prerequisites
- PHP 8.1+
- Composer
- MySQL/PostgreSQL
- Node.js & NPM

## Installation Steps

### 1. Clone Repository
```bash
git clone <your-github-repo-url>
cd your-filament-project
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure Database
Edit `.env` file:
```env
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Create Database
```sql
CREATE DATABASE your_database_name;
```

### 6. Run Migrations & Seeders
```bash
php artisan migrate
php artisan db:seed
```

### 7. Create Filament Admin User
```bash
php artisan make:filament-user
```
Follow prompts to create admin account.

### 8. Compile Assets
```bash
npm run build
```

### 9. Start Server
```bash
php artisan serve
```

## Access Points
- **Frontend**: `http://localhost:8000`
- **Admin Panel**: `http://localhost:8000/admin`

## Troubleshooting
```bash
# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Re-publish Filament assets
php artisan filament:assets

# Fix permissions (Linux/Mac)
chmod -R 775 storage bootstrap/cache
```
