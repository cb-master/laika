# Laika PHP Framework
Laika is a lightweight and versatile PHP framework designed for building robust web applications. Whether you're creating a dynamic website, a comprehensive admin panel, or a custom application, Laika offers the flexibility and tools you need to get the job done efficiently.

## Features
* **MVC Architecture**: Simplifies development with a clear separation of concerns.
* **Customizable Admin** Panels: Build intuitive admin panels for managing your web applications.
* **Lightweight**: Optimized for performance with minimal overhead.
* **Flexible Routing**: Easily define routes and handle requests.
* **Secure**: Built with security in mind to prevent common vulnerabilities.
* **Extendable**: Add custom components and functionality as your project grows.

## Installation
* Clone the repository & Navigate to the project directory:
```bash
git clone https://github.com/cb-master/laika.git
```
Or
```bash
composer create-project cb-master/laika example-app
```
* Configure your environment settings in your application path. Open *./config/database.php* and configuare the database connection details.
* Start developing.

## Quick Start For Controller
Create a new controller (*It will be your URL slug & Controller Located in application-path/app/Controller*)
```bash
php laika create:controller <controller_name>
```
Rename a controller
```bash
php laika rename:controller <old_controller_name> <new_controller_name>
```
Delete a controller
```bash
php laika pop:controller <controller_name>
```
## Quick Start For Middleware
Create a middleware (*Middleware Located in application-path/app/Middleware*)
```bash
php laika create:middleware <middleware_name>
```

Rename a middleware
```bash
php laika rename:middleware <old_middleware_name> <new_middleware_name>
```
Delete a middleware
```bash
php laika pop:middleware <middleware_name>
```
## Quick Start For Model
Create a model (*Model Located in application-path/app/Model*)
```bash
php laika create:model <model_name>
```

Rename a model
```bash
php laika rename:model <old_model_name> <new_model_name>
```
Delete a model
```bash
php laika pop:model <model_name>
```
## Quick Start For View
Create a view (*View Located in application-path/Views*). Location argument should be blank if you dont have backend admin panel. **For admin panel use "admin" as location_optional argument where admin will be a subfolder in views**
```bash
php laika create:view <view_name> <location_optional>
# Example "laika create:view sample" or in Subfolder "laika create:view sample admin"
```
Rename a view
```bash
php laika rename:view <old_view_name> <new_view_name> <location_optional>
```
Delete a model
```bash
php laika pop:view <view_name> <location_optional>
```