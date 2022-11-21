## Create Laravel Project
```bash
composer create-project laravel/laravel student_info
```

## Run local server
```bash
php artisan serve
```

## Update .env
```env
DB_DATABASE=student_info
```

## Create Model
```bash
php artisan make:model Student -m
```

## Write Model Schema
Inside `database/migrations/create_students_table.php`
```php
public function up() {
  Schema::create('students', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email');
    $table->string('department');
    $table->string('image')->nullable();
    $table->timestamps();
  });
}
```

## Migrate Models (this will create tables in our database)
```bash
php artisan migrate
```

## Create Student Controller
```bash
php artisan make:controller StudentController
```

## Create `home` view
```php
public function home() {
  return view('student.home');
}
```

## Create `resources/student/home.blade.php`

## Create `home` route in `routes/web.php`
```php
Route::get('/', [StudentController::class, 'home'])->name('home');
```
## Create `public/assets/css` and `public/assets/js` for Bootstrap

## Connect Bootstrap to `home.blade.php`
```html
<link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css">
<script defer src="{{ asset('assets') }}/js/bootstrap.js"></script>
```