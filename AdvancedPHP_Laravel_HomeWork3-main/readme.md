# Продвинутое программирование на PHP — Laravel
## Домашняя работа №3

---

### 1. Для создания, просмотра и редактирования баз данных MySQL установите программу PhpMyAdmin по [инструкции](http://). Если у вас на компьютере установлен WAMP или XAMPP, то PhpMyAdmin тоже должен быть установлен.

---
![PhpMyAdmin](./public/img/1_1_PhpMyAdmin.png "PhpMyAdmin")
![PhpMyAdmin](./public/img/1_2_PhpMyAdmin.png "PhpMyAdmin")

---

### 2. Создайте базу данных с любым именем в PhpMyAdmin. Больше в нём ничего делать не нужно, остальное выполните в коде проекта.

---
![Create Base](./public/img/2_1_PhpMyAdmin.png "Create Base")
![Create Base](./public/img/2_2_PhpMyAdmin.png "Create Base")

---

### 3. В папке проекта настройте файл конфигурации для базы данных. Пример:

---
![Файл конфигурации базы данных](./public/img/3.png "Файл конфигурации базы данных")

---

### 4. Создайте проект Laravel с помощью composer, выполнив команду composer create-project laravel/laravel <имя проекта>.

---
![Создаем проект laravel](./public/img/4_1.png "Создаем проект laravel")
![Создаем проект laravel](./public/img/4_2.png "Создаем проект laravel")
![Создаем проект laravel](./public/img/4_3.png "Создаем проект laravel")
![Создаем проект laravel](./public/img/4_4.png "Создаем проект laravel")
![Создаем проект laravel](./public/img/4_5.png "Создаем проект laravel")

---

### 5. В корне проекта создайте файл .env и укажите параметры подключения к базе данных. После редактирования файла .env выполните команду php artisan config:clear.

---
![Чистим кэш](./public/img/5.png "Чистим кэш")

---

### 6. В папке проекта через командную строку создайте новую модель Employee. Одновременно с этим создайте файл миграции. Для этого в команде создания модели можно использовать флаг -m: php artisan make:model Employee -mfsc. Флаг -mfsc создаст модель, наполнитель, контроллер и файл миграции.

---
![Создаем модель Employee](./public/img/6.png "Создаем модель Employee")

---

### 7. С помощью команды php artisan migrate выполните миграции.

---
![Выполняем миграцию](./public/img/7.png "Выполняем миграцию")
![Выполняем миграцию](./public/img/7_1_SQL_in_PhpMyAdmin.png "Выполняем миграцию")

---

### 8. В файле routes/web.php создайте новый эндпоинт, например test_database:

Route::get('/test_database', function () {
//Код внутри колбэка
});

### 9. Внутри функции-колбэка напишите код, который создаст новый экземпляр модели Employee, и сохраните его в базу данных с помощью метода save().

---
![Код колбэк функции](./public/img/8-9.png "Код колбэк функции")

---

### 10. Запустите локальный сервер Laravel с помощью команды php artisan serve.

---
![Запускаем сервер](public/img/10.png "Запускаем сервер")

---

### 11. Перейдите по ссылке <адрес вашего локального сервера>/test_database (по умолчанию http://localhost:8000/test_database).

---
![Переходим по ссылке](public/img/11.png "Переходим по ссылке")

---

### 12. Используйте phpMyAdmin, чтобы убедиться, что в вашей базе данных создались таблицы employees и migrations, а в таблице employees создалась новая строка, соответствующая экземпляру модели Employee.

---
![Результат](public/img/12.png "Результат")

---

