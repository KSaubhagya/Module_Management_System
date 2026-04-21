# 📚 Academic Courses and Module Management System

This project is a Laravel-based Web Application designed to manage academic courses, modules, and user access based on roles (RBAC). The system enforces role-based permissions for Admins, Academic Heads, Teachers, and Students while ensuring strict governance over course/module updates (with publishing and draft rules).
The platform is built to streamline academic workflows such as course creation, module management, syllabus updates, and controlled publishing, ensuring both flexibility and accountability 


🚀 Features
🔑 Roles & Permission Management

-Admin – Full authority over the system (add, update, delete, view all modules).
-Academic Head – Responsible for course & module creation, management, and controlled publishing.
-Teacher – Can view syllabi for assigned courses.
-Student – Can view syllabi related to their enrolled courses.


📚 Course Management

-Academic Head can create courses with attributes:
  id, name, seo_url, faculty, category, status (draft, publish)
-Update/Delete Rules:
-Draft mode – can freely update/delete.
-Published mode – can update/delete only within 6 hours of publishing.


📝 Module Management

-Modules belong to a course. Each module includes:
  id, code, name, semester, description, credit, status (draft, publish).
-Academic Head can add, update, and delete modules.
-Admin has full control over modules.
-Teachers & Students can only view modules (without the description part).


🛠️ Tech Stack

-Framework: Laravel
-Database: MySQL 
-Authentication: Laravel Breeze 
-Frontend: Bootstrap 


⚙️ Installation
-Clone repository
git clone https://github.com/yourusername/academic-course-management.git

cd academic-course-management

-Install dependencies
composer install

-Create environment file
cp .env.example .env

-Generate key
php artisan key:generate

-Run migrations & seed roles/permissions
php artisan migrate --seed

-Serve project
php artisan serve

---
## Project Structure
```plaintext
Module_Management_System/
│
├── app/                   # Application code 
├── bootstrap/             
├── config/                # Configuration files 
├── database/              # Migrations, seeders
├── public/          
├── resources/            
├── routes/                
├── storage/               # Logs, compiled views, cached files 
├── workflows/            
├── README.md             
```
