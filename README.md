# School  management system
 
_Student Information Management System can be used by education institutes to
maintain the records of students easily. Achieving this objective is difficult using a
manual system as the information is scattered, can be redundant and collecting
relevant information may be very time consuming. All these problems are solved
using this project._


## Table of Contents

* [Features](#features)
* [Installation](#installation)
* [Screenshots](#screenshots)
* [Security Vulnerabilities](#security-vulnerabilities)

## Features

There are 4 types of user accounts. They include:

1) Administrators (Super Admin & Admin)
2) Accountant
3) Teacher
4) Student

### Super Admin

* Only Super Admin can delete any record
* Create any user account
* Everything an Admin can do

### Admin

* Manage students class/sections
* View marksheet of students
* Create, Edit and manage all user accounts & profiles
* Create, Edit and manage Exams & Grades
* Create, Edit and manage Subjects
* Manage noticeboard of school
* Notices are visible in calendar in dashboard
* Edit system settings
* Manage Payments & fees


### Accountant

* Manage Payments & fees
* Print Payment Receipts

### Teacher

* Manage Own Class/Section
* Manage Exam Records for own Subjects
* Manage Timetable if Assigned as Class Teacher
* Manage own profile
* Upload Study Materials

### Student

* View teacher profile
* View own class subjects
* View own marks and class timetable
* View Payments
* View library and book status
* View noticeboard and school events in calendar
* Manage own profile

## Installation

### Dependencies

* PHP and the following modules
    * php-DOM
    * php-DOMpdf
    * php-mysql (depends on your database of choice)
* PHP composer
* Your database of choice (mySQL recommended)
* An email server of your choice (default .env works with MailPit SMTFP for testing)

### Instructions

* Use `composer install` to install all Laravel depencies used
* Edit the `.env` file with your app settings, including database and email server credentials
* Use `php artisan migrate` to migrate the database settings into your database of choice
* Use `php artisan db:seed` to seed the databse 

## Screenshots

**DASHBOARD**
<img width="960" alt="dashboard" src="https://user-images.githubusercontent.com/59436078/152376416-18c79677-0558-49e4-8095-c9af554fd64e.PNG">

1) **Login**
<img width="960" alt="login" src="https://user-images.githubusercontent.com/59436078/152365292-7f9e603f-ffb9-4cd9-9977-7daa21cfb40f.PNG">

2) **Signup**
<img width="959" alt="signup" src="https://user-images.githubusercontent.com/59436078/152368821-10c9a08b-dcb6-4aea-a08e-c992aae8a60c.PNG">

3) **Forgot password**
<img width="957" alt="forgetpass" src="https://user-images.githubusercontent.com/59436078/152368915-ad95da9b-a90a-4575-b7da-24cf1f8fc04a.PNG">

## Contributors
A big shout out to all the contributors.
## Security Vulnerabilities

If you discover a security vulnerability within **School Management System**, please use pull request. All security vulnerabilities will be promptly addressed.

**Please Note** that some sections of this project are in the work-in-progress stage and would be updated soon. These include:

* The Noticeboard/Calendar in the Dashboard Area
* Acountant user pages
* Study Materials Upload for Students
