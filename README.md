# contactAppFaker
 Simple Laravel Implementation on Contact App Faker

## How to clone repository:
1. Clone this repository 
    ```
    git clone https://github.com/oujirate/contactAppFaker.git
    ```
3. Open terminal in your code editor and run below command.
4. Install composer
    ```
    composer install
   ```
5. Run `dumpautoload`
    ```
    composer dumpautoload
    ```
6. Copy `.env.example` to create `.env` and config according to your needs.
    ```
    cp .env.example .env
    ```
7. Generate Key
   ```
    php artisan key:generate
   ```
8. Install `npm`
    ```
    npm install
    ```
9. If you use laragon, run project in www->contactAppFaker (put your project in your document root path)
10. Run npm
    ```
    npm run dev
    ```