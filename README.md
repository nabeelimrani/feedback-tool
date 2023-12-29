#  Feedback Tool

<p align="center"><a href="https://freepngimg.com/download/feedback/8-2-feedback-png-clipart.png" target="_blank"><img src="https://freepngimg.com/download/feedback/8-2-feedback-png-clipart.png" width="60" alt="Feedback Tool "></a></p>

<p align="center">
    <a href="https://www.linkedin.com/in/nabeel-mehdi-imrani-070498230/" target="_blank"><img src="https://img.shields.io/badge/LinkedIn-Nabeel_Imrani-blue" alt="LinkedIn"></a></p>
    
## About Feedback Tool

This Feedback Tool is a user-friendly application designed to collect and manage feedback from users. It streamlines the feedback process, making it easy for users to submit their thoughts, suggestions, and issues, while providing an intuitive dashboard for administrators to review and act upon the feedback.

Key Features:

- **User-Friendly Interface:** Simplify the feedback submission process for users of all levels.
- **Dashboard for Insights:** Gain valuable insights with a comprehensive dashboard for analyzing feedback trends.
- **Secure and Scalable:** Built with security in mind, the tool is scalable to accommodate growing user bases.

 Feedback Tool is the ideal solution for businesses and projects seeking to enhance user engagement, improve product quality, and foster a collaborative feedback culture.


## Getting Started

Follow these instructions to get a copy of the project up and running on your local machine.

### Prerequisites

Before you begin, ensure you have the following prerequisites installed:

- [PHP](https://www.php.net/) - Version 8.2.4 or higher
- [Composer](https://getcomposer.org/) - Dependency manager for PHP (usually installed with PHP)
- [Git](https://git-scm.com/) - Version control system for cloning the project


### Installation

1. Clone the repository to your local machine:

    ```bash
    git clone https://github.com/nabeelimrani/feedback-tool.git
    ```

2. Navigate to the project directory:

    ```bash
    cd feedback-tool
    ```

3. Install the required dependencies:

    ```bash
    composer install
    ```

    This command will install the PHP dependencies for your Laravel project.

4. Create a copy of the `.env.example` file and rename it to `.env`:

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database configuration and any other necessary settings.

5. Generate the application key:

    ```bash
    php artisan key:generate
    ```

6. Run database migrations:

    ```bash
    php artisan migrate
    ```

    This will create the necessary database tables.

7. **Login Credentials:**

   Use the following login credentials to access the application:

   - **Email:** nabeelemraane09@gmail.com
   - **Password:** admin123

### Usage

This command to run the project locally:

```bash
php artisan serve

### Submitting Feedback

1. After running the project locally with `php artisan serve`, visit [http://localhost:8000](http://localhost:8000) in your web browser.

2. Click on the "Submit Feedback" menu.

3. Fill in the feedback form with your thoughts, suggestions, or issues.

4. Click the "Submit" button to submit your feedback.

5. A success message will be displayed, indicating the successful submission.

### Viewing Feedback and Comments

1. After submitting feedback, click on the "View Feedback" menu.

2. You will see a list of your submitted feedback.

3. Click on a specific feedback entry to view comments and additional details.

4. To add a new comment:
   - Enter your comment in the comment box.
   - Click the "Submit Comment" button.

5. Mentioning Users in Comments:
   - To mention a user, use the `@username` format in your comment.
   - The mentioned user will receive a notification about the mention.

6. View the feedback and comments for an interactive and collaborative experience!

## Contributing

If you would like to contribute to the project, follow the guidelines in [CONTRIBUTING.md](CONTRIBUTING.md).

## Troubleshooting

Include common issues users might face and how to troubleshoot them.

## License

This project is licensed under the [MIT License](LICENSE.md) - see the [LICENSE.md](LICENSE.md) file for details.


