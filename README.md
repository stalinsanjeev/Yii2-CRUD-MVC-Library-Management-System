<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1>Yii2 CRUD MVC Library Management System</h1>
    <br>
</p>

This is a simple **Library Management System** built using **Yii2 MVC framework**. The application allows users to perform CRUD (Create, Read, Update, Delete) operations on books in the library. This project serves as a beginner-friendly introduction to **MVC architecture**, **Active Record**, and **Yii2 framework development**.

---

## 📘 **Project Overview**

- **Framework**: Yii2 (PHP Framework)  
- **Database**: MySQL / MariaDB  
- **Language**: PHP  
- **Views**: HTML, CSS, Bootstrap  
- **Version Control**: Git / GitHub

The Library Management System allows users to manage books in the following ways:
- **Create** a new post (book)
- **Read** or view the details of a book
- **Update** the information for an existing book
- **Delete** a book

---

## 📁 **File Structure**

```
project-root/
├── controllers/
│   └── SiteController.php
├── models/
│   └── Posts.php
├── views/
│   ├── site/
│   │   ├── create.php
│   │   ├── update.php
│   │   ├── view.php
│   │   └── home.php
├── web/
├── config/
├── vendor/
├── runtime/
├── assets/
├── .gitignore
├── composer.json
└── README.md  <-- You are here!
```

---

## 📚 **Features**

- **CRUD Functionality**
  - Create new books
  - View book details
  - Update existing book records
  - Delete books from the system

- **Validation Rules**
  - Title, Description, and Category are required fields.

- **Flash Messages**
  - Success and error messages are displayed during CRUD operations.

---

## 🔥 **Main Components**

### 1️⃣ **Model** - **Posts.php**
This file defines the database table schema and validation rules.

```php
namespace app\models;

use yii\db\ActiveRecord;

class Posts extends ActiveRecord
{
    public function rules()
    {
        return [
            [['title','description','category'],'required']
        ];
    }
}
```

**Key Points:**
- Each post has a `title`, `description`, and `category`.
- Fields are marked as **required** using Yii2's validation rules.

---

### 2️⃣ **Controller** - **SiteController.php**
This file controls the CRUD logic. It includes the following actions:

| **Action**  | **Description** |
|-------------|------------------|
| **actionIndex()** | Displays all posts in a table format. |
| **actionCreate()** | Allows users to create a new book entry. |
| **actionView()** | Shows the details of a specific book. |
| **actionUpdate()** | Allows users to update a specific book. |
| **actionDelete()** | Deletes a book from the database. |

---

### 3️⃣ **Views**
The **views** are responsible for rendering the user interface.

| **View File** | **Description** |
|---------------|------------------|
| **create.php** | The form for creating a new book. |
| **update.php** | The form for updating an existing book. |
| **view.php** | Displays detailed information about a book. |
| **home.php** | The main page that lists all books. |



