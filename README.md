# Task Manager Application

## Overview

This project is a task management application built using Laravel and integrated with the **Black Dashboard** preset for a sleek and modern design. The application allows users to add, view, update, delete, and sort tasks, making it a convenient tool for managing daily tasks.

## Features

-   **Task Listing:** View a list of all tasks with their status.
-   **Add a Task:** Create new tasks with a title and description.
-   **Task Details:** View the details of individual tasks.
-   **Mark Task as Completed:** Easily update the task status to completed.
-   **Edit a Task:** Modify existing tasks' details and status.
-   **Delete a Task:** Remove tasks from the list.
-   **Sort Tasks:** Sort tasks by title or completion status.
-   **Responsive Design:** The application is mobile-friendly and adapts to different screen sizes.

## Prerequisites

To run this project, ensure you have the following installed on your local machine:

-   **Apache, PHP, and MySQL:** You can use the following guides based on your operating system:
    -   [Windows](https://updivision.com/blog/post/beginner-s-guide-to-setting-up-your-local-development-environment-on-windows)
    -   [Linux](https://howtoubuntu.org/how-to-install-lamp-on-ubuntu)
    -   [Mac](https://wpshout.com/quick-guides/how-to-install-mamp-on-your-mac)
-   **Composer:** [Get Composer](https://getcomposer.org/doc/00-intro.md)
-   **Laravel:** [Install Laravel](https://laravel.com/docs/9.x/installation)

## Installation

Follow the steps below to set up and run the project on your local machine:

### 1. Clone the Repository

```bash
git clone https://github.com/<username>/<repository-name>.git
cd <repository-name>
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Configure Environment

1. Copy the `.env.example` file to `.env`:
    ```bash
    cp .env.example .env
    ```
2. Generate an application key:
    ```bash
    php artisan key:generate
    ```
3. Update the `.env` file with your database credentials.

### 4. Install the Black Dashboard Preset

1. Install the preset via Composer:
    ```bash
    composer require laravel-frontend-presets/black-dashboard
    ```
2. Run the preset installation command:
    ```bash
    php artisan ui black
    ```
3. Run migrations and seed the database:
    ```bash
    php artisan migrate --seed
    ```

### 5. Compile Assets

```bash
npm run dev
```

### 6. Run the Application

Start the local development server:

```bash
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000) to view the application.

## Usage

-   **Navigate to the Dashboard:** Visit the homepage to view the task listing.
-   **Add a New Task:** Click the "Add New Task" button and fill out the form.
-   **Edit or Delete Tasks:** Use the "Edit" or "Delete" buttons in the task listing.
-   **Sort Tasks:** Click the table headers to sort tasks by title or completion status.

## Version Control

This project uses Git for version control. Make sure to commit your changes and push them to the GitHub repository.

```bash
git add .
git commit -m "Your commit message"
git push origin main
```

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgments

-   [Laravel](https://laravel.com/) - The web framework used
-   [Black Dashboard](https://www.creative-tim.com/product/black-dashboard) - The UI theme integrated into the application
-   [Laravel UI](https://github.com/laravel/ui) - The official UI scaffolding for Laravel
