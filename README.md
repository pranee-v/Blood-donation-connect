# 🩸 Blood Donation Connect

A simple and user-friendly web application to connect **blood donors** with people in need.
Built using **PHP, MySQL, HTML, CSS**.

---

## 🚀 Features

* 👤 **User Accounts** – Register & Login to access the dashboard.
* ➕ **Add Donors** – Donors can register with details (Name, Age, Blood Group, City, Phone).
* ✅ **Eligibility Check** – Ensures donors are:

  * Age **18+**
  * No alcohol habits
  * No heart diseases or genetic diseases
* 🔍 **Search Donors** – Find donors by **Blood Group** and **City**.
* 🗄️ **Auto Database Setup** – Database (`blood_donation_connect`) and tables (`users`, `donors`) are created automatically if not present.
* 🎨 **Clean UI** – Styled with CSS for a professional look.

---

## 🛠️ Tech Stack

* **Frontend:** HTML, CSS
* **Backend:** PHP
* **Database:** MySQL

---

## ⚙️ Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/pranee-v/Blood-donation-connect.git
cd Blood-donation-connect
```

### 2. Move Project to XAMPP (or WAMP/LAMP)

Copy the project folder into your XAMPP `htdocs` directory:

```
C:/xampp/htdocs/blood_donation_connect
```

### 3. Database Setup (✅ Auto-creation Enabled)

👉 **No manual database creation required!**

* `db.php` will automatically create the database and required tables (`users`, `donors`) on first run.

### 4. Run the Project

1. Start **Apache** and **MySQL** from XAMPP Control Panel.
2. Open your browser and go to:

```
http://localhost/blood_donation_connect/
```

---

## 📌 Pages

1. **Home Page** (`index.php`) → Entry point, option to Register or Login.
2. **Register Page** (`register.php`) → Create a user account (auto-login to dashboard).
3. **Login Page** (`login.php`) → Login for existing users.
4. **Dashboard** (`dashboard.php`) → Main panel with options.
5. **Add Donor** (`add_donor.php`) → Register a donor with eligibility check.
6. **Search Donors** (`search_donor.php`) → Find donors by blood group and city.

---

## 📸 Screenshots (Optional)

*(Add screenshots of your UI here after running the app.)*

---

## 🤝 Contributing

* Fork this repo
* Make changes
* Create a pull request 🚀

---

## 👨‍💻 Author

Developed by **Praneeth Veeranki**

---
