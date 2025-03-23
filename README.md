# PHP Slim4 Template

This is a base project for a [Slim4](https://www.slimframework.com/) based site.

## Components
- **[DI Container](./config/container.php)**
    Defines and registers services for Dependency Injection (DI), including the Slim app instance and the template renderer.

- **[Routes](./config/routes.php)**
    Configures the application's routes and defines how requests are processed. 

- **[Actions](./src/Action/)**
    Handles request processing and determines what content to render for each route.

- **[Classes](./src/Core/)**
    Contains backend logic and utility classes for data processing.

- **[Middleware](./src/Middleware/)**
    Middleware processes requests before they reach the app and modifies responses before they are sent.

- **[Templates](./templates/)**
    Provides HTML templates with support for dynamic content rendering via variables.

- **[Public](./public/)**
    Content avalable to all clients, used for assets such as static images, css, and js.
