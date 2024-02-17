**Laravel Static LMS Project**

Welcome to the Laravel Static LMS Project! This project aims to provide a small-scale Learning Management System (LMS) built using the Laravel framework, focusing on static content management for educational purposes. Below you'll find information on how to set up, configure, and utilize this project.

### Project Setup

1. **Clone the Repository**: Begin by cloning this repository to your local machine using Git:
   ```bash
   git clone <repository-url>
   ```

2. **Install Dependencies**: Navigate into the project directory and install the required dependencies using Composer:
   ```bash
   cd laravel-static-lms
   composer install
   ```

3. **Environment Configuration**: Copy the `.env.example` file to `.env` and configure your environment variables such as database connection settings, app key, etc.
   ```bash
   cp .env.example .env
   ```

4. **Generate App Key**: Generate a new application key for your Laravel application:
   ```bash
   php artisan key:generate
   ```

5. **Database Setup**: Create a new database for your project and update the `.env` file with your database credentials.

6. **Run Migrations and Seeders**: Execute the database migrations and seeders to set up the necessary tables and initial data.
   ```bash
   php artisan migrate --seed
   ```

7. **Serve the Application**: You can start the Laravel development server to serve your application locally:
   ```bash
   php artisan serve
   ```

### Usage

1. **Login**: Visit the `/login` route of your application to log in using the provided credentials or register a new account.

2. **Explore Courses**: Once logged in, you can explore the available courses and their content.

3. **Admin Dashboard**: If you have administrative privileges, you can access the admin dashboard to manage courses, users, and other settings.

4. **Manage Content**: As an admin, you can create, edit, or delete courses and their respective content such as lessons, quizzes, etc.

### Additional Information

- This project is built on Laravel, a powerful PHP framework for web applications. Refer to the [Laravel Documentation](https://laravel.com/docs) for more detailed information on how to work with Laravel applications.

- For any issues or feedback related to this project, please create a new issue on the GitHub repository or contact the project maintainers.

- Feel free to customize and extend this project according to your requirements. Laravel provides a flexible and scalable architecture to build robust web applications.

Thank you for using the Laravel Static LMS Project! Happy learning! 📚🚀