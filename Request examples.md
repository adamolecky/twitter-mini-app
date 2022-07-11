Login:
```
curl --location --request POST 'http://localhost/api/login' \
--header 'Content-Type: application/json' \
--header 'Cookie: PHPSESSID=noalpvelacck6js3t6hd6is2lo' \
--data-raw '{
    "username": "17de5665-75a8-4a01-86d9-65724dda5536",
    "password": "1234"
}'

```

New user - admin only: 
```
curl --location --request POST 'http://localhost/api/user/new' \
--header 'Content-Type: application/json' \
--data-raw '{
    "roles": "ROLE_USER",
    "password" : "1234",
    "firstName": "Imagine",
    "lastName": "Dragons",
    "nick": "DraIma",
    "countFollowers": 0
}'
```

Paginated user list, 0 could be replaced with page number:
```
curl --location --request GET 'http://localhost/api/user/list/0' \
--header 'Cookie: PHPSESSID=noalpvelacck6js3t6hd6is2lo'
```

Follow user example:
```
curl --location --request GET 'http://localhost/api/follow/17de5665-75a8-4a01-86d9-65724dda5536' \
--header 'Cookie: PHPSESSID=noalpvelacck6js3t6hd6is2lo' \
--data-raw ''
```

Delete user example: 
```
curl --location --request DELETE 'http://localhost/api/user/17de5665-75a8-4a01-86d9-65724dda5536' \
--header 'Cookie: PHPSESSID=noalpvelacck6js3t6hd6is2lo'
```

Paginated list my followers:  
```
curl --location --request GET 'http://localhost/api/user/followers/0' \
--header 'Cookie: PHPSESSID=noalpvelacck6js3t6hd6is2lo' \
--data-raw ''
```

