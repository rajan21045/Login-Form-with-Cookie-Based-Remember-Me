# PHP Login with Remember Me (Cookie-Based)
 
This is a simple PHP login form that uses a **"Remember Me"** checkbox to store user information in **cookies** for 30 days. It also saves form data in a text file using basic PHP file handling. A great starting point for beginners learning PHP forms, cookies, and file storage.

## 🔧 Features
- **User login form** with fields for name, email, password, and confirm password
- **"Remember Me"** checkbox that sets a cookie for 30 days, remembering the user's name
- **User data** stored in a local `data.txt` file
- Displays messages based on whether the checkbox is checked or not
- Cookie handling in PHP to store and retrieve user information across sessions
  
## 🍪 Cookies Used:
- When the **"Remember Me"** checkbox is checked, a **cookie** is set with the user's name, which will persist for 30 days.
- The cookie allows the user to remain logged in even after closing and reopening the browser, unless the cookie is deleted or expired.
- PHP's `setcookie()` function is used to store the user information in the browser.

## 📁 Files Included
- `index.html` – HTML form with input fields and the "Remember Me" checkbox
- `check.php` – PHP script that handles form submission, sets cookies, and writes data to a file
- `data.txt` – Text file that stores submitted user data

## 🚀 Technologies Used
- HTML5
- PHP
- Cookies
- File I/O

## 🧠 Ideal For
- **PHP beginners** learning form handling, cookies, and file handling
- Understanding how **cookies** work in PHP and how they can be used to remember users
- Practicing simple **login logic** without needing a database

## 📜 License
This project is open-source and free to use for learning purposes.
