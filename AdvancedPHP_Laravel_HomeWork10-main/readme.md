# Продвинутое программирование на PHP — Laravel
## Домашняя работа №10

---

Цели практической работы:

Научиться:

— создавать асинхронные задачи и вызывать их; \
— настраивать очередь через базу данных и добавлять в неё задачи; \
— выполнять задачи через планировщик задач Laravel. 

В рамках практической работы вы реализуете очистку файла логирования приложения с помощью асинхронной задачи, помещенной в планировщик задач.

Что нужно сделать:

### 1. Создайте новый проект Laravel или откройте уже существующий.

---
![new project](storage/app/private/img/1_0.png "new project")

---

### 2. Создайте новую ветку вашего репозитория от корневой (main или master).

---
![new branch](storage/app/private/img/2_0.png "new branch")
![new branch](storage/app/private/img/2_1.png "new branch")
![new branch](storage/app/private/img/2_2.png "new branch")

---

### 3. Создайте миграцию для очереди через базу данных командой php artisan queue:table.

---
![php artisan queue:table](storage/app/private/img/3_0.png "php artisan queue:table")
![php artisan queue:table](storage/app/private/img/3_1.png "php artisan queue:table")

---

### 4. Выполните миграцию.

---
![Миграция](storage/app/private/img/4_0.png "Миграция")
![Миграция](storage/app/private/img/4_1.png "Миграция")

---

### 5. Пропишите в файле .env QUEUE_CONNECTION=database.

---
![QUEUE_CONNECTION=database](storage/app/private/img/5_0.png "QUEUE_CONNECTION=database")

---

### 6. Создайте класс ClearCache.php с помощью команды php artisan make:job ClearCache.

---
![класс ClearCache.php](storage/app/private/img/6_0.png "класс ClearCache.php")

---

### 7. В файле ClearCache.php пропишите код для очистки лог-файла.

---
![код для очистки лог-файла](storage/app/private/img/7_0.png "код для очистки лог-файла")

---
![код для очистки лог-файла](storage/app/private/img/7_1.png "код для очистки лог-файла")

---

### 8. Поместите вызов Job в планировщик задач Laravel в файле app/Console/Kernel.php.

---
![вызов Job в планировщик задач Laravel](storage/app/private/img/8_0.png "вызов Job в планировщик задач Laravel")

---
![вызов Job в планировщик задач Laravel](storage/app/private/img/8_1.png "вызов Job в планировщик задач Laravel")
![вызов Job в планировщик задач Laravel](storage/app/private/img/8_2.png "вызов Job в планировщик задач Laravel")
![вызов Job в планировщик задач Laravel](storage/app/private/img/8_3.png "вызов Job в планировщик задач Laravel")

---

### 9. Запустите очередь командой php artisan queue:listen.

---
![php artisan queue:listen](storage/app/private/img/9_0.png "php artisan queue:listen")

---

### 10. Запустите планировщик задач командой php artisan schedule:work и не закрывайте терминал.

---
![php artisan schedule:work](storage/app/private/img/10_0.png "php artisan schedule:work")
![php artisan schedule:work](storage/app/private/img/10_1.png "php artisan schedule:work")
![php artisan schedule:work](storage/app/private/img/10_2.png "php artisan schedule:work")
![php artisan schedule:work](storage/app/private/img/10_3.png "php artisan schedule:work")
![php artisan schedule:work](storage/app/private/img/10_4.png "php artisan schedule:work")

---

