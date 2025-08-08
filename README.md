# F3-AdminLTE Dashboard

This is a **Fat-Free Framework (F3)** project template integrated with **AdminLTE** admin dashboard. This project has been **debugged, secured, and enhanced** with additional features including a complete database reporting system.


## Prerequisites

Before installation, ensure you have:

- **PHP 7.4+** (tested with PHP 8.4)
- **MySQL 5.7+** or **MariaDB 10.3+**
- **Composer** (for dependency management)
- **Web Server** (Apache, Nginx, or PHP built-in server)

## Installation Instructions

### Step 1: Clone the Repository
```bash
git clone https://github.com/yourusername/f3-adminlte.git
cd f3-adminlte
```

### Step 2: Install Dependencies
```bash
composer install
```

### Step 3: Database Setup

1. **Create MySQL Database:**
```sql
CREATE DATABASE appdb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

2. **Import Database Schema:**
```bash
mysql -u root -p appdb < appdb.sql
```

Or use phpMyAdmin/MySQL Workbench to import the `appdb.sql` file.

### Step 4: Configure Database Connection

1. **Copy and edit the configuration file:**
```bash
cp config/config.ini.example config/config.ini
```

2. **Update `config/config.ini` with your database credentials:**
```ini
[globals]
DEBUG=3
UI=app/views/
AUTOLOAD=app/controllers/|app/models/
DB_DSN="mysql:host=localhost;port=3306;dbname=appdb"
DB_USER="your_mysql_username"
DB_PASS="your_mysql_password"
site="Your Site Name"
```

### Step 5: Run the Application

**Option A: PHP Built-in Server (Development)**
```bash
php -S localhost:8000
```

### Step 6: Access the Application

Open your browser and navigate to:
- **Development:** `http://localhost:8000`

## Default Login Credentials

- **Email:** `hendro.steven@gmail.com`
- **Password:** `admin`

> **Important:** Change these credentials immediately after installation!

## Database Schema

The application includes these tables:

- **`accounts`** - User authentication and profiles

## Project Structure

```
f3-adminlte/
├── api/
│   ├── reports.php          
│   │── restServerClass.php    
│   
├── app/
│   ├── controllers/          # Application controllers
│   │   ├── Controller.php    # Base controller
│   │   ├── RestrictedController.php  # Auth-protected base
│   │   ├── HomeController.php        # Login page
│   │   ├── AccountController.php     # Authentication
│   │   ├── DashboardController.php   # Main dashboard
│   │   └── ReportsController.php     # Database reports
│   ├── models/               # Data models (if any)
│   └── views/                # Template files
│       ├── header.html       # Common header
│       ├── footer.html       # Common footer
│       ├── layout.html       # Main layout
│       ├── index.html        # Login page
│       └── dashboard/
│           └── main.html     # Dashboard content
├── config/
│   └── config.ini           # Application configuration
├── routes.ini               # URL routing definitions
├── ui/                      # Static assets (CSS, JS, images)
├── tmp/                     # Template cache (auto-generated)
├── vendor/                  # Composer dependencies
├── appdb.sql               # Database schema and sample data
├── index.php               # Application entry point
└── README.md               # This file
```

## Configuration Options


### Routes Configuration
Edit `routes.ini` to add new routes:
```ini
[routes]
GET /=HomeController->index
GET /dashboard=DashboardController->index
POST /account/signin=AccountController->signin
GET /account/signout=AccountController->signout
GET /api/reports.php=*
POST /api/reports.php=*
```

## Troubleshooting

### Common Issues:

**1. Database Connection Error:**
```
SQLSTATE[HY000] [1045] Access denied
```
**Solution:** Check your database credentials in `config/config.ini`

