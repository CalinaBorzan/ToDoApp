# ToDoApp
# 📝 ToDoApp - Laravel + Tailwind CSS

A simple and modern ToDo list application built with [Laravel](https://laravel.com/) and styled using [Tailwind CSS](https://tailwindcss.com/), inspired by the YouTube tutorial by [Code With Dary](https://www.youtube.com/watch?v=wkHJDSl0-yE).  
This project was extended with **Dark Mode support** and other UI improvements.


## 🚀 Features

- Add, update, and delete tasks
- Mark tasks as completed or not completed
- Responsive design using Tailwind CSS
- Light/Dark mode toggle
- Clean and minimal UI
- Persistent task storage using a MySQL database
- Laravel MVC architecture

---

## 🔧 Technologies Used

- Laravel 11
- PHP 8+
- Tailwind CSS
- Blade Templates
- MySQL (or any DB supported by Laravel)
- Laravel Artisan & Eloquent ORM

---

## 🛠️ Installation

Follow these steps to set up the project on your local machine.

### 1. Clone the repository

```bash
git clone https://github.com/CalinaBorzan/ToDoApp.git
cd ToDoApp
```

### 2. Install dependencies

```bash
composer install
npm install
npm run dev
```

### 3. Set up environment variables

```bash
cp .env.example .env
php artisan key:generate
```

Update the `.env` file with your database credentials.

### 4. Run migrations

```bash
php artisan migrate
```

### 5. Start the development server

```bash
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000) in your browser.

---

## 🌑 Dark Mode

This app supports dark mode using Tailwind CSS's `dark` class strategy.  
A toggle button is available in the UI, and your preference is saved in local storage so it persists on reload.


