# Booking App

A monolithic booking application built using Laravel. This application is designed to manage appointments, clients, and services, while also providing features like staff management and social media post generation.

## Table of Contents

- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Folder Structure](#folder-structure)
- [Contributing](#contributing)
- [License](#license)

## Features

- **Calendar Integration:** Connect to Google Calendar and sync schedules.
- **Service Management:** Manage services offered (name, price, duration).
- **Client Management:** Add, view, and manage client details and appointment history.
- **AI-Powered Social Media Post Generation:** Automatically generate and share posts on social media platforms.
- **Online Booking:** Accept bookings via the website or social media.
- **Staff Management:** Assign staff members to specific services and appointments.
- **Reports:** Generate weekly reports on appointments, bookings, and client interactions.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP 8.0 or higher
- Composer
- Node.js & npm
- MySQL or another supported database

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/ttg247/booking-app.git
    cd booking-app
    ```

2. **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Set up environment variables:**

    - Copy the `.env.example` file to `.env`.

    ```bash
    cp .env.example .env
    ```

    - Open the `.env` file and update the database credentials and other environment-specific settings.

4. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run database migrations:**

    ```bash
    php artisan migrate
    ```

6. **Seed the database (optional):**

    ```bash
    php artisan db:seed
    ```

7. **Build the front-end assets:**

    ```bash
    npm run dev
    ```

8. **Serve the application:**

    ```bash
    php artisan serve
    ```

    Your application should now be running on `http://localhost:8000`.

## Usage

- **Dashboard:** Provides an overview of the application's key metrics.
- **Bookings:** View, add, edit, and delete bookings.
- **Clients:** Manage client details, including contact information and booking history.
- **Services:** Add and manage services offered by your business.
- **Staff Management:** Assign and manage staff members.
- **Reports:** Generate and view reports on various aspects of the application.
- **AI-Powered Features:** Automatically generate social media posts using AI.

## Folder Structure

```
├── app/                # Application logic (Controllers, Models, etc.)
├── bootstrap/          # Bootstrap files
├── config/             # Configuration files
├── database/           # Migrations and Seeds
├── public/             # Publicly accessible files (CSS, JS, etc.)
├── resources/          # Views, Blade templates, and assets
│   ├── views/          # Blade templates
│   └── js/             # JavaScript files
├── routes/             # Web and API routes
├── storage/            # Storage for logs, compiled Blade, etc.
├── tests/              # Automated tests
└── vendor/             # Composer dependencies
```

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the project.
2. Create a new branch (`git checkout -b feature-branch-name`).
3. Make your changes and commit them (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch-name`).
5. Open a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
