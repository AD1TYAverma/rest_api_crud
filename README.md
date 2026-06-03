# PHP REST API CRUD

A simple and beginner-friendly **REST API CRUD Application** built using **PHP, MySQL, and JSON**. This project demonstrates how to create, read, update, delete, and search records through RESTful APIs.

---

##  Features

- Create Student Records (POST)
- Fetch All Records (GET)
- Fetch Single Record (GET)
- Update Records (PUT)
- Delete Records (DELETE)
- Search Records
- JSON Response Format
- MySQL Database Integration
- REST API Architecture
- Beginner Friendly Code

---

##  Technologies Used

- PHP
- MySQL
- REST API
- JSON
- XAMPP
- Postman

---

## 📂 Project Structure

```text
php-rest-api-crud/
│
├── config.php
├── api-insert.php
├── api-fetch-all.php
├── api-fetch-single.php
├── api-update.php
├── api-delete.php
├── api-search.php
│
└── database.sql
```

---

##  Installation

### 1. Clone Repository

```bash
git clone https://github.com/your-username/php-rest-api-crud.git
```

### 2. Move Project

Copy project folder to:

```text
xampp/htdocs/
```

### 3. Create Database

```sql
CREATE DATABASE ajax_db;
```

### 4. Create Table

```sql
CREATE TABLE students(
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL
);
```

### 5. Configure Database

Update database credentials in:

```php
config.php
```

```php
$con = mysqli_connect(
    "localhost",
    "root",
    "",
    "api_db"
);
```

### 6. Start Server

Start Apache and MySQL from XAMPP.

---

##  API Endpoints

### Create Record

```http
POST /api-insert.php
```

Request:

```json
{
    "fname": "Aditya",
    "lname": "Verma"
}
```

Response:

```json
{
    "message": "Student Record Inserted",
    "status": true
}
```

---

### Fetch All Records

```http
GET /api-fetch-all.php
```

---

### Fetch Single Record

```http
GET /api-fetch-single.php?id=1
```

---

### Update Record

```http
PUT /api-update.php
```

Request:

```json
{
    "id": 1,
    "fname": "Aditya",
    "lname": "Kumar"
}
```

---

### Delete Record

```http
DELETE /api-delete.php
```

Request:

```json
{
    "id": 1
}
```

---

### Search Record

```http
POST /api-search.php
```

Request:

```json
{
    "search": "Aditya"
}
```

---

##  Screenshots

Add screenshots of:

- Postman Create Request
- Fetch All Records
- Update Record
- Delete Record
- Search API

---

##  Learning Objectives

This project helps understand:

- REST API Fundamentals
- CRUD Operations
- JSON Data Handling
- PHP API Development
- MySQL Integration
- API Testing with Postman
- HTTP Methods (GET, POST, PUT, DELETE)
- Database Operations

---

##  Future Improvements

- JWT Authentication
- API Validation
- Pagination
- API Documentation
- Laravel REST API Version
- Role Based Access Control
- Swagger Integration

---

##  Author

**Aditya Verma**


## ⭐ Support

If you found this project useful, please consider giving it a **Star ⭐** on GitHub.
