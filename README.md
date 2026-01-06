# My First Laravel App

<p align="center">
<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
</p>

A simple task management application built with Laravel 12 to learn the fundamentals of web development with the Laravel framework.

## 📋 About This Project

This is a beginner-friendly Laravel application that demonstrates core concepts including:

- **Routing** - Dynamic routes with parameters
- **Controllers** - Organized business logic
- **Blade Templates** - Server-side templating
- **Eloquent ORM** - Database interactions
- **Migrations** - Database schema management
- **CRUD Operations** - Create, Read, Update, Delete tasks

## ✨ Features

- ✅ Create new tasks
- ✅ View all tasks
- ✅ Mark tasks as complete/incomplete
- ✅ Delete tasks
- ✅ Clean and responsive UI with Blade templates
- ✅ RESTful API structure

## 🛠️ Tech Stack

- **PHP** 8.2+
- **Laravel** 12.0
- **MySQL/SQLite** - Database
- **Blade** - Templating engine
- **Vite** - Asset bundling

## 📦 Installation

### Prerequisites

- PHP >= 8.2
- Composer
- Node.js & npm
- MySQL or SQLite

### Setup Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/Flopchamp/my-first-app.git
   cd my-first-app
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Create environment file**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Configure your database**
   
   Edit `.env` file and set your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=my_first_app
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. **Run migrations**
   ```bash
   php artisan migrate
   ```

8. **Build assets**
   ```bash
   npm run dev
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

10. **Visit the application**
    
    Open your browser and navigate to `http://localhost:8000`

## 🚀 Usage

### Available Routes

| Method | URI | Action | Description |
|--------|-----|--------|-------------|
| GET | `/` | Welcome page | Landing page |
| GET | `/hello` | Say hello | Simple greeting |
| GET | `/greet/{name}` | Greet person | Personalized greeting |
| GET | `/tasks` | List tasks | View all tasks |
| GET | `/tasks/create` | Create task form | Show task creation form |
| POST | `/tasks` | Store task | Save new task |
| PATCH | `/tasks/{id}/toggle` | Toggle completion | Mark task complete/incomplete |
| DELETE | `/tasks/{id}` | Delete task | Remove a task |

### Task Management

1. **View Tasks**: Navigate to `/tasks` to see all your tasks
2. **Add Task**: Click "Create New Task" or go to `/tasks/create`
3. **Complete Task**: Click the checkbox to toggle task completion
4. **Delete Task**: Click the delete button to remove a task

## 📁 Project Structure

```
my-first-app/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── TaskController.php
│   │       └── WelcomeController.php
│   └── Models/
│       ├── Task.php
│       └── User.php
├── database/
│   └── migrations/
│       └── 2026_01_03_094406_create_tasks_table.php
├── resources/
│   └── views/
│       ├── tasks/
│       │   └── index.blade.php
│       ├── greet.blade.php
│       ├── hello.blade.php
│       └── welcome.blade.php
├── routes/
│   └── web.php
└── public/
    └── index.php
```

## 🧪 Testing

Run the test suite:

```bash
php artisan test
```

Or use PHPUnit directly:

```bash
./vendor/bin/phpunit
```

## 🎨 Code Style

This project follows Laravel's coding standards. Format your code using Laravel Pint:

```bash
./vendor/bin/pint
```

## 🤝 Contributing

Contributions, issues, and feature requests are welcome! Feel free to check the [issues page](https://github.com/Flopchamp/my-first-app/issues).

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 Learning Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Bootcamp](https://bootcamp.laravel.com)
- [Laracasts](https://laracasts.com) - Video tutorials
- [Laravel News](https://laravel-news.com) - Latest updates

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👨‍💻 Author

**Flopchamp**

- GitHub: [@Flopchamp](https://github.com/Flopchamp)

## 🙏 Acknowledgments

- Built with [Laravel](https://laravel.com)
- Thanks to the Laravel community for excellent documentation and resources
