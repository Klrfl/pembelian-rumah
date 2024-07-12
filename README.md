# Pembelian Rumah

Is a very simple CRUD app which is also my first rodeo with Laravel. Styled with Tailwind.

## Dev

After cloning this repo, set up the database connection by copying the `env.example`
file into a `.env` file, then change the DB variables appropriately. After that you 
can run the migration commands:
```sh
# after you run this don't kill the session
php artisan migrate
php artisan serve
```

Once you have the backend ready, then install frontend deps and run the development
server for hot reloading, powered by Vite.

```sh
# in another terminal session
npm i
npm run dev
```
