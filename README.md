# larablog-base

`pull`

`composer install`

`touch database/database.sqlite`

create .env with:

```
APP_KEY=base64:5Ot/Xoxicnb5l4zs8sUVrZNO4Y+O1DEU2y4O477/Sa4=

DB_CONNECTION=sqlite
DB_DATABASE=/full/path/to/larablog-base/database/database.sqlite
```

`php artisan migrate:fresh --seed -v`

`php artisan serve`


DBAdmin password for phpLiteadmin is `admin`
