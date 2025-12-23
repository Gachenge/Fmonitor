# Deploying the sample to Railway (fastest for a PHP/Laravel demo)

Railway is quick to get a PHP app running from a GitHub repository and works well for demos. This guide shows minimal steps to deploy this repository as-is.

## 1. Prepare repository
- Commit all changes and push to GitHub.
- Ensure `public/` contains `index.php` (it does) and `Procfile` is present at the repo root (this repo includes one).

## 2. Create Railway project
1. Sign in to https://railway.app/ and create a new project.
2. Click 'Deploy from GitHub' and connect your repository.

## 3. Configure deployment
- Set the build command (Railway will run install commands automatically but you can set):
  - Build (optional): `composer install --no-interaction --no-dev --prefer-dist && npm ci && npm run build`
- Set the start command / or rely on `Procfile`:
  - Railway will respect the `Procfile` with `web: php -S 0.0.0.0:$PORT -t public/`

## 4. Environment variables
Set these Railway environment variables (Project → Variables):
- `APP_ENV=production`
- `APP_DEBUG=false`
- `APP_KEY` — run locally and set a key (`php artisan key:generate --show`) then paste it
- If you need a DB for a demo, add a Railway Postgres plugin and use the provided DB URL variables.

## 5. Optional: use SQLite for a simple demo
If you don't want to configure Postgres, set `DB_CONNECTION=sqlite` and ensure `database/database.sqlite` exists in the repo or create it via a deploy script.

## 6. Deploy and verify
- Trigger a deploy in Railway. Logs will show `composer`/`npm` output and start the PHP built-in server on `$PORT`.
- Open the Railway URL (the project will expose a public domain). Your site should be visible.

## Notes & limitations
- This uses PHP's built-in server (`php -S`), which is fine for demos but not for production.
- For a production-ready setup later, migrate to Fly/Railway with proper process managers, or use Docker.

---

A GitHub Actions workflow has been added at `.github/workflows/deploy-to-railway.yml` which will build and attempt to deploy on push to `main`/`master` using the Railway CLI.

### GitHub Secrets required for CI deploy
- `RAILWAY_TOKEN` — Railway API token used by the workflow to call `railway up`.
- `APP_KEY` — Laravel `APP_KEY` (recommended; the workflow will generate a temporary key if this is not provided).

Notes:
- If you prefer Railway's built-in GitHub integration, you can skip adding `RAILWAY_TOKEN` to GitHub Secrets; Railway will handle deployments automatically.
- I can add a small `deploy` script and an SQLite file if you want the app to run without DB configuration.
