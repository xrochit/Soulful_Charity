# The Soulful Charity Web Application Project

![soulful-charity-high-resolution-logo](https://github.com/xrochit/Soulful_Charity/assets/91835342/550de552-0a6f-4251-9d64-b51abc5be9ca)

The Soulful Charity Web Application Project is a comprehensive software solution designed to streamline and enhance the operational efficiency of non-governmental organizations (NGOs).

## Table of Contents

- [About the Project](#about-the-project)
- [Installation](#installation)
- [Usage](#usage)
- [Screenshots](#screenshots)
- [Demo](#demo)

## About the Project

This web application provides a suite of tools to manage donations, volunteers, events, and more, helping NGOs focus on their mission while automating routine tasks.


## Installation

To install and run this project, follow these steps:

1. **Clone the repository:**
    ```bash
    git clone https://github.com/yourusername/soulful_charity.git
    ```
2. **Navigate to the project directory:**
    ```bash
    cd soulful_charity
    ```
3. **Set up your web server:**
    - Ensure you have a web server (e.g., Apache) installed.
    - Place the project directory in your web server's root directory (e.g., `htdocs` for XAMPP).

4. **Create the database:**
    - Open phpMyAdmin and create a new database named `soulful_charity`.
    - Import the database schema from `database/souldb.sql`.

5. **Configure the environment:**
    - Modify the `config.php` file in the root of the project and add your database credentials. Example:
    ```plaintext
    DB_HOST=localhost
    DB_USER=root
    DB_PASS=password
    DB_NAME=soulful_charity
    ```

6. **Start your web server:**
    - Ensure your web server and MySQL server are running.
    - Open your browser and go to `http://localhost/soulful_charity` to access the application.

## Usage

Once the server is running, open your browser and go to http://localhost/soulful_charity to access the application. You can manage donations, volunteers, events, and more from the dashboard.

## Screenshots

- [Homepage](#homepage)

  ![image](https://github.com/xrochit/Soulful_Charity/assets/91835342/c1b953b7-4fe1-4d52-8781-24be1704f205)

  ![image](https://github.com/xrochit/Soulful_Charity/assets/91835342/c49d2246-226c-48c8-8f9f-a687d8c132ae)

- [Payment](#payment)

  ![image](https://github.com/xrochit/Soulful_Charity/assets/91835342/8566246a-2e35-4b41-abee-226b355cffb6)


## Demo - https://soulful-charity.000webhostapp.com/
