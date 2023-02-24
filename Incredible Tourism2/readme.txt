Code With Harry File Structure  :- 

config.php - config with database
login.php  - allow user to login
register.php - allow user to login
welcome.php - if user to able t login redierect him to welcome page
logout.php - allow user to logout
 

Site File Structure : -
\-- phplogin
    |-- register.html
    |-- style.css
    |-- register.php
    |-- activate.php (optional)


register.html — Registration form created with HTML5 and CSS3. As this file doesn't require us to use PHP, we'll save it as plain HTML.
style.css — The stylesheet (CSS3) for our secure registration form.

register.php — Validate form data and insert a new account into the MySQL database.
activate.php — Activate the user's account with a unique code (email based activation).