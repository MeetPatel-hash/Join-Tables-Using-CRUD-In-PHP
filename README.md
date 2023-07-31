# Title:
Student and School Management System with MySQL Join and CRUD

# Project Description:
This project is a comprehensive Student and School Management System that allows schools to register students and manage their data. It leverages MySQL JOIN to establish relationships between the student and school tables, enabling efficient retrieval of relevant information. The system provides full CRUD (Create, Read, Update, Delete) functionality for both students and schools, along with pagination, search, and sorting capabilities.

# Working Demo:
Click Here : (http://dev.pixlogixservice.com/Join_Table/login.php)

# Features:

1. Student Registration:
- Schools can register students by providing their details, including name, birth date, age, gender, address, and other relevant information.
- The student data is inserted into the student table in the database.
  
2. School Registration:
- Schools can create an account and log in to access their dashboard.
- Once logged in, the school dashboard displays the list of registered students associated with that school.

3. Update Student Data:
- Schools have the ability to update the student data, such as name, age, gender, and address.
- The changes made to the student data are reflected in the database.
  
4. Delete Student Data:
- Schools can remove student records from the system as needed.
- Deletion is performed safely, ensuring data integrity in the database.

5. Pagination:
- Pagination is implemented for both the student and school data to handle large datasets efficiently.
- This ensures that the data is displayed in smaller, manageable sections, improving performance and user experience.

6. Search Functionality:
- Schools can search for specific students based on criteria such as name, age, or gender.
- The search functionality allows schools to quickly find and access relevant student information.

7. Sorting:
- The system offers sorting options, allowing schools to arrange student records based on various attributes, such as name or age.

# Technologies Used:
- Front-end: HTML, CSS, JavaScript (optional for enhanced user experience)
- Back-end: PHP
- Database: MySQL

# Database Structure:
1. Student Table:
- Columns: ID (Primary Key), Name, Birth Date, Age, Gender, Address, School_ID

2. School Table:
- Columns: ID (Primary Key), School Name, Email, Password

# Setup and Usage:
1. Clone the repository to your local machine using `git clone <repository_url>`.
2. Set up a web server (e.g., Apache) and a PHP runtime environment.
3. Import the provided database schema into your MySQL database, including both student and school tables.
4. Update the database connection credentials in the PHP files to match your database settings.
5. Navigate to the project directory in your web server's root directory.
6. Access the application through your web browser and start using the Student and School Management System.

# Note:
- First register user using Sing Up. After that you can login using same credentials which is using in registration. After sucessfully registration you can view the data and filter it.
- Ensure to protect sensitive data, such as database credentials, by using environment variables or secure configuration management.
- This project demonstrates how to perform CRUD operations on two related tables using MySQL JOIN in PHP. You can further extend it by adding features such as user
authentication, school-specific data visibility, and data validation.
- Feel free to explore, use, and contribute to this open-source Student and School Management System. We welcome your feedback and contributions to enhance its
functionalities and usability.


