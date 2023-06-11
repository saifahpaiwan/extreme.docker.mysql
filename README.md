## การทดสอบของบริษัท Electronics Extreme  Limited 

## 📚 ภาษาที่ใช้ Docker & Laravel & Mysql

### `การติดตั้ง Project `

```
docker-compose up -d
```

- เมื่อติดตั้งเสร็จแล้ว Containers ที่ใช้งานจะประกอบไปด้วย Port ดังนี้
- extreme_nginx Port : http://localhost:8000 เพื่อเข้าหน้าระบบ
- extreme_phpmyadmin Port : http://localhost:8080 เพื่อเข้าจัดการฐานข้อมูล

รหัสเข้า PhpMyadmin 
- usersname : admin
- password : password1234

### `ทำการติดตั้ง Database`

```
docker-compose exec app bash
composer start-db

or

cd src 
composer start-db
```

### กรณีติด Permissions

```
cd src 

chmod -R 775 storage bootstrap/cache
sudo chown -R $USER:www-data storage
sudo chown -R $USER:www-data bootstrap/cache
chmod -R 775 public
sudo chown -R $USER:www-data public
sudo chown -R $USER:www-data public
```

### กรณีต้องการ Clear Cache

```
cd src 

php artisan cache:clear
php artisan route:clear
php artisan config:clear
php artisan view:clear
```

- เมื่อติดตั้งเสร็จแล้วระบบจะทำการ migrate และ seeder Database เข้าฐานข้อมูล


### ข้อ 1 ให้เขียนที่ทำการแสดงผลการสุ่มไอเทมที่ได้จากลิสต์ข้างบนนี้ เป็นจำนวน 100 ครั้งโดยมีข้อกำหนดว่า ไอเทมที่สุ่มได้จะต้องไม่เกิน stock ที่กำหนดไว้ ในกรณีที่เกินกำหนด stock ไว้ ให้ทำการสุ่มใหม่จนกว่าจะได้

- หน้าสำหรับการสุ่มไอเทม => http://localhost:8000/
- Code การสุ่มไอเทม => app/Http/Controllers/ItemgameController.php

### ข้อ 2 ให้เขียน จัดทำ Rest API ที่ใช้จัดการกับข้อมูลของ User Account พร้อม Input Validation โดยมีรายละเอียด
 
#### Documention API
Method  | Endpoint | Comment
----- | ----- | ----- |
POST   | /api/auth/register| ลงทะเบียนผู้ใช้งาน        |
POST   | /api/auth/login   | ล็อกอินเข้าสู่ระบบ         |
POST   | /api/auth/logout  | ล็อกเอาท์เข้าสู่ระบบ.      |
POST   | /api/auth/refresh | Refresh Token jwt     |
GET    | /api/auth/users   | แสดงข้อมูลผู้ใช้งานทั้งหมด   |
GET    | /api/auth/users?keyword=คำค้นหา     | แสดงข้อมูลผู้ใช้งานที่ค้นหา   |
GET    | /api/auth/users?per_page=3&page=2  | เรียกดูรายการพร้อมกับการแบ่งหน้า  |
GET    | /api/auth/users/1 | แสดงข้อมูลผู้ใช้งานเฉพาะคน |
POST   | /api/auth/users   | สร้างข้อมูลผู้ใช้งาน        | 
PUT    | /api/auth/users/1 | อัพเดทข้อมูลผู้ใช้งาน       |
DELETE | /api/auth/users/1 | ลบข้อมูลผู้ใช้งาน          |
 
- ที่อยู่ไฟล์การ Login Code app/Http/Controllers/Api/AuthController.php
- ที่อยู่ไฟล์ User Account app/Http/Controllers/Api/UsersController.php


#### สามารถเข้าดูการจัดเก็บ Logs ของระบบได้ที่ URL 
- http://localhost:8000/log-viewer

# extreme.docker.mysql
