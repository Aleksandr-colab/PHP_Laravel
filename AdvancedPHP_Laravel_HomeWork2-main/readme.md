# Продвинутое программирование на PHP — Laravel
## Домашняя работа №2

---
### 1. Установите Laravel с помощью composer, выполнив команду composer create-project laravel/laravel <имя проекта>. В поле <имя проекта> впишите имя вашего проекта. Этому имени будет соответствовать имя папки, в которую вы поместите проект.

---
![Создание проекта Laravel](./public/img/1_1_create_laravel_project.png "Создание проекта Laravel")
![Создание проекта Laravel](./public/img/1_2_create_laravel_project.png "Создание проекта Laravel")
![Создание проекта Laravel](./public/img/1_3_create_laravel_project.png "Создание проекта Laravel")
![Создание проекта Laravel](./public/img/1_4_create_laravel_project.png "Создание проекта Laravel")
![Создание проекта Laravel](./public/img/1_5_create_laravel_project.png "Создание проекта Laravel")

---
### 2. Создайте контроллер для вывода формы на страницу и её обработки. В командную строку введите команду php artisan make:controller FormProcessor.

---
![Создание контрооллера FormProcessor](./public/img/2_0_make_controller_formprocessor.png "Создание контрооллера FormProcessor")

----
### 3. После выполнения команды убедитесь, что контроллер создан, — соответствующий файл должен появиться в папке app/Http/Controllers.

---
![Контроллер FormProcessor](./public/img/3_0_controller_formprocessor.png "Контроллер FormProcessor")

----
### 4. Внутри контроллера опишите метод index: он должен выводить в браузер форму для заполнения.

---
![Метод index контроллера FormProcessor](./public/img/4_2_controller_formprocessor_index.png "Метод index контроллера FormProcessor")

---

- Опишите форму в виде шаблона blade.
- Внутри формы должны быть поля для ввода имени, фамилии и email пользователя.
- Форма отправляется методом POST.
- Параметр action пока оставьте пустым.
- Не забудьте про CSRF.

---
![Шаблон формы userform](./public/img/4_1_userform_blade_php.png "Шаблон формы userform")
![Форма userform в браузере](./public/img/4_3_form_in_browser.png "Форма userform в браузере")

---
### 5. Внутри файла /routes/web.php опишите новый роут (метод GET), который будет вызывать метод index контроллера FormProcessor по url /userform.

---
![Настройка маршрута для index](./public/img/5_index_route_setting.png "Настройка маршрута для index")

---
### 6. Запустите встроенный сервер Laravel командой php artisan serve --port=8080 и убедитесь, что форма выводится по адресу http://localhost:8080/userform.

---
![Запуск встроенного сервера Laravel](./public/img/6_1_start_server.png "Запуск встроенного сервера Laravel")
![Форма в браузере](./public/img/6_2_form_in_browser.png "Форма в браузере")

---
### 7. В контроллере FormProcessor создайте метод store для обработки формы. Этот метод должен принимать поля формы и отправлять ответ в виде JSON-объекта, содержащего значения полей формы (имя, фамилия, email).

---
![Метод store в контроллере FormProcessor](./public/img/7_action_store_in_formprocessor_controller.png "Метод store в контроллере FormProcessor")

---
### 8. Внутри файла /routes/web.php опишите новый роут (метод POST), который будет вызывать метод store контроллера FormProcessor по url /store_form.

---
![Маршрут для метода store](./public/img/8_route_store_post.png "Маршрут для метода store")

---
### 9. Отредактируйте поле action формы в шаблоне и укажите адрес /store_form.

---
![Поле action в userform.blade.php](./public/img/9_action_store_form_in_userform_blade_php.png "Поле action в userform.blade.php")

---

### 10. Откройте форму в браузере по адресу http://localhost:8080/userform, заполните её и попробуйте отправить на сервер, нажав кнопку Submit. Если всё сделано правильно, вы увидите в браузере объект JSON.

---
![Заполняем форму данными](./public/img/10_1_test_userform.png "Заполняем форму данными")
![Получаем ответ в видк json](./public/img/10_2_test_userform_submit.png "Получаем ответ в видк json")

---

### 11. Создайте новый шаблон blade для приветствия пользователя (например: «Привет, <имя>!»).

---
![Шаблон приветствия пользователя](./public/img/11_template_hi_to_user.png "Шаблон приветствия пользователя")

---

### 12. Измените метод store контроллера FormProcessor таким образом, чтобы вместо JSON он возвращал шаблон, заполненный данными пользователя.

---
![Новый метод store контроллера FormProcessor](./public/img/12_1_correct_action_store_of_formprocessor_controller.png "Новый метод store контроллера FormProcessor")
![Заполненная форма](./public/img/12_2_fill_form_user.png "Заполненная форма")
![Возвращаемый шаблон, заполненный данными пользователя](./public/img/12_3_response_from_user_form.png "Возвращаемый шаблон, заполненный данными пользователя")

---

### 13. Сделайте коммит своих изменений с помощью git и отправьте push в репозиторий.
