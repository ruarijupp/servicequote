# ServiceQuote

A Laravel-based quote + payment simulation app, built to demonstrate backend skills in a real-world service business flow.

## What It Does

- Visitors can submit service quote requests
- Logged-in users can view submissions in a dashboard
- Each quote has a “Pay Now” flow that mimics Stripe-style UX
- Payment confirmation updates status and timestamps the record

##  Why I Built This

To showcase backend ability beyond CRUD:
- Form validation and storage
- Auth-protected dashboards
- Simulated payment logic
- Status management + conditional UI
- Clean routes, Blade views, and migrations

## Stack

- Laravel 12 (PHP 8)
- Blade Templates
- SQLite (local dev)
- TailwindCSS (UI)
- Auth scaffolding via Laravel Breeze

## Features

- User registration + login
- Quote submission form
- Admin-style dashboard view
- Fake payment gateway (Stripe-inspired)
- Payment status & flash messages

## Running Locally

```bash
git clone https://github.com/ruarijupp/servicequote.git
cd servicequote
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.

