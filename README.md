This is a laravel project.<br />
Please use 'composer update --no-scripts' in the command line in the project's root folder to update the vendor folders.<br />
Please create an env file (by copy/pasting 'env.example' and renaming the new file as '.env') in the root folder<br />
Then use 'php artisan key:generate' in the command to generate the APP_KEY.<br />
This uses Mailtrap to capture Contact Us emails. Update your .env file with your own Mailtrap login details when testing the contact form.<br />
Run 'php artisan config:cache' in the command line to then clear the cache.<br />
Use 'php artisan serve' in the command line in the root folder to run the server.<br />
Then visit 'localhost:8000' in your browser to view the project.<br /><br />


NOTE: If there's an issue with sending a contact form then just close the server and run 'php artisan config:cache' one last time.
