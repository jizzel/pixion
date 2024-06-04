## Pixion

Uses [Herd](https://herd.laravel.com/docs/1/getting-started/paths) for serving sites

Create an env file with a copy of .env.example
```bash
mv .env.example .env
```

Install node dependencies:
```bash
npm install
```

Install composer dependencies:
```bash
composer install
```

Run migrations and seeders:
```bash
php artisan migrate --seed

```

Run laravel app (Optional):
```bash
php artisan serve
```

Run frontend:
```bash
npm run dev
```
