Got it ✅ Here’s your **complete `README.md`** in one copy-paste block:

````markdown
# Blood Donation Connect 🩸

A simple **PHP + MySQL** web application that connects blood donors with people in need.  
This project demonstrates full-stack development with donor registration, donor search,  
and a clean, responsive UI.

---

## 🚀 Features
- 📝 Donor Registration Form (Name, Blood Group, Contact, City)  
- 🔍 Search Donors by **Blood Group** & **City**  
- 📊 Live Donor Count on Homepage  
- 💻 Responsive UI with **HTML + CSS**  
- ⚡ PHP + MySQL Backend with Basic Queries  

---

## 🛠️ Tech Stack
- **Frontend:** HTML, CSS  
- **Backend:** PHP  
- **Database:** MySQL  
- **Tools Used:** XAMPP / WAMP (for Apache & MySQL)  


## ⚡ Setup Instructions

### 1️⃣ Clone Repository
```bash
git clone https://github.com/your-username/blood-donation-connect.git
````

### 2️⃣ Database Setup

* Open **phpMyAdmin** → Create a new database:

  ```sql
  CREATE DATABASE blood_donation;
  ```
* Inside this DB, create table:

  ```sql
  CREATE TABLE donors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    blood_group VARCHAR(5) NOT NULL,
    contact VARCHAR(15) NOT NULL,
    city VARCHAR(50) NOT NULL
  );
  ```

### 3️⃣ Configure Project

* Copy project folder into `htdocs/` (XAMPP) or `www/` (WAMP).
* Make sure `db.php` has correct credentials:

  ```php
  $conn = new mysqli("localhost", "root", "", "blood_donation");
  ```

### 4️⃣ Run Project

* Start **Apache** and **MySQL** in XAMPP/WAMP.
* Visit in browser:

  ```
  http://localhost/blood-donation-connect/index.php
  ```

---

## 📌 Project Structure

```
blood-donation-connect/
│── db.php              # Database connection
│── index.php           # Homepage with donor stats
│── add_donor.php       # Donor registration page
│── search_donor.php    # Donor search page
│── style.css           # Styling & responsive UI
│── README.md           # Documentation
```

---

## 🎯 Future Improvements

* Add **user authentication** (login/signup)
* Donor profile management
* Email/SMS notifications
* Deploy on free hosting (e.g., 000WebHost, InfinityFree)

