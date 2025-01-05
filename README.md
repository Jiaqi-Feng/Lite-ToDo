# Lite ToDo

## Overview
This is a simple web application for managing a to-do list, created as a university assignment. The application allows users to:

- Add tasks.
- Cross off completed tasks.
- Delete tasks.
- Categorize tasks into Study, Work, Sport, and Chores.
- View tasks by category.

## Features

- **Front-end**: HTML, CSS, and JavaScript.
- **Back-end**: PHP and MySQL for database communication.
- **Data management**: MySQL database accessed via phpMyAdmin.

## Requirements

- **XAMPP Control Panel v3.3.0**
  - Apache module (for PHP execution).
  - MySQL module (for database management).
- Tested in Visual Studio Code (VS Code).

## Setup Instructions

1. **Clone the Repository**
   ```bash
   git clone <repository-URL>
   ```

2. **Place Files in htdocs**
   - Copy all the project files into the `htdocs` folder in your XAMPP installation directory (e.g., `C:\xampp\htdocs\`).

3. **Start XAMPP Modules**
   - Open the XAMPP Control Panel.
   - Start the Apache and MySQL modules.

4. **Import Database**
   - Click on the **Admin** button next to the MySQL module in the XAMPP Control Panel. This will open phpMyAdmin.
   - In phpMyAdmin:
     1. Create a new database (e.g., `todolist_db`).
     2. Import the `test.sql` file included in the project.

5. **Run the Application**
   - Open your web browser.
   - Enter `http://localhost` in the address bar.
   - Navigate to the project folder (e.g., `http://localhost/todolist`).

## Usage

- Add tasks via the input form.
- Cross off tasks by clicking on them.
- Delete tasks by using the delete button.
- View tasks filtered by categories (Study, Work, Sport, Chores).

## Notes

- Ensure XAMPP is running while using the application.
- Use phpMyAdmin for database management if needed.

## License

This project is a university assignment and is not intended for commercial use. Copyright © Jiaqi Feng. All rights reserved.
