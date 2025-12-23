# Developer setup (local PHP 8.2)

This project supports development on PHP 8.2. If you are using PHP 8.2 locally (the repo is tested on 8.2), follow these steps after pulling changes:

1. Ensure you have PHP 8.2 installed locally (e.g., `php -v` should show 8.2.x).

2. Install/update Composer dependencies and regenerate `composer.lock` locally so the lock file is compatible with PHP 8.2:

```bash
composer update
```

3. Commit the updated `composer.lock` and push to the repository. This ensures CI and other developers install the same, compatible dependency versions.

4. Install node deps and build assets:

```bash
npm ci
npm run dev   # or: npm run build for production assets
```

5. Copy `.env.example` and configure local env, then generate an app key:

```bash
cp .env.example .env
php artisan key:generate
```

6. Start the dev server:

```bash
php artisan serve
```

Notes
- We set `config.platform.php` in `composer.json` to `8.2.12` so Composer resolves packages for PHP 8.2.
- If you prefer to use PHP 8.3+, you can upgrade locally and run `composer update` without changing `composer.json`.
- If CI uses a higher PHP version (e.g., 8.3), the workflow remains compatible because the lockfile will contain versions resolved for PHP 8.2.

If you'd like, I can run `composer update` here and commit the updated `composer.lock` for you (if you're OK with me altering lockfile). Reply `Go ahead` and I'll update the lockfile and commit the change.