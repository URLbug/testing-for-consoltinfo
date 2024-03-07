# Тест по первому модулю

## Запуск лоального сервера php
``` 
git clone https://github.com/URLbug/testing-for-consoltinfo.git 
```
``` 
php -S 127.0.0.1:8000 
```


## SQL запрос для последнего теста

```
SELECT user.id, firstName, lastName, city.city
FROM user INNER JOIN city
WHERE user.city = city.id;
```