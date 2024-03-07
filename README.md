# Тест по первому модулю

## Тест - 1

```
cd form_1

php -S 127.0.0.1:8000
```

## Тест - 2

```
cd form_2

php -S 127.0.0.1:8000
```

## Тест - 3

```
cd form_3

php -S 127.0.0.1:8000
```


## SQL запрос для последнего теста

```
SELECT user.id, firstName, lastName, city
FROM user INNER JOIN city
WHERe city_id = city.id;
```