Curso de laravel 10 en youtube

[Completo](https://www.youtube.com/watch?v=3e1IsZJuYAw&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF)

[Cap11](https://www.youtube.com/watch?v=MUOKdpbgbNk&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&index=12)

#### Borrar tablas 
php artisan migrate:rollback

#### Seeder

```bash
php artisan make:seeder NameModelSeeder

php artisan migrate:fresh --seed
# Si solo queremos correr los seeders

php artisan db:seed 
```

#### Factory

```bash
php artisan make:factory NameModelFactory --model=NameModel
 
```
