# Insider blog

Блог
Администратор может добавлять статьи, добавлять пользователей, менять их роли.
Пользователь может смотреть статиь

## Функции

- Админ может создать статью
- Админ может редактировать данные пользователя и его роль
- Пользователь может смотреть статьи

## Getting Started

#### 1. Clone this repository:

Замените username на свой

```
git clone git@github.com:igor-gorovenko/insider_blog.git
```

Переходим в скопированный проект, в корневую папку

```
cd insider_blog
```

#### 2. Install dependencies:

Устанавливаем composer

```
composer install
```

Копируем .env.example и меняем имя: .env

Генерируем APP_KEY в .env файле

```
php artisan key:generate
```

Устанавливаем npm и делаем сборку проекта
```
npm install
npm run build
```

Выполняем миграции

```
php artisan migrate
```

#### 3. Generate data

Генерируем данные
```
php artisan db:seed
```




#### 5. Запускаем проект

Запустить сервер с помощью artisan или своим способом
```
php artisan serve
```

Пользователи для входа
```
// Admin

admin@example.com
test1234

// User

user@example.com
test1234
```