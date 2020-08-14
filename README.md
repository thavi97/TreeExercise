This is a laravel project.
Please use 'composer update --no-scripts' in the project's root folder to update the vendor folders.
Please create an env file (by copy/pasting 'env.example' and renaming the new file as '.env')
Then use 'php artisan key:generate' to generate the APP_KEY.
This uses Mailtrap to capture Contact Us emails. Update your .env file with your own Mailtrap login details when testing the contact form.
Run 'php artisan config:cache' to then clear the cache.
Use 'php artisan serve' in the root folder to run the server.
Then visit 'localhost:8000' in your browser to view the project.


NOTE: If there's an issue with sending a contact form then just close the server and run 'php artisan config:cache' one last time.
