# movie-ticket-booking-portal-in-PHP
Movie ticket booking platform made in PHP

This is the platform for booking movie tickets. mainly only two programming languages used in this project. `PHP` used for server side programming and `MySql` for database management. in this project have only two module first one is Admin and second one is User.

### Workflow of the project
 - **Admin**
    1. Admin Log in.
    1. Admin adds movies details.
    1. after that creating shows of the movie.
    
 - **User**
    1. Search for movies.
    1. Check movie show's Avaiblity.
    1. Book the tickets(needs to log in. if user not logged in  then user log in.)
    1. pay amount for the tickets.
    
For payment proccess [Stripe PHP Library](https://github.com/stripe/stripe-php) is used. for accessing `Stripe API` 

 1. go to the [Stripe PHP Library](https://github.com/stripe/stripe-php) github page.
 1. download the zip file.
 1. extract into project file. rename the folder to `stripe` e.g.(movie-ticket-booking-portal-in-PHP/stripe).
 1. copy `require_once('stripe/init.php');` this line paste it into `book_ticket.inc.php` page.
 
 you can able to do payments using of credit and debit cards.
 
 ## Requirements
  - `PHP` version above `5.0`.
  - `Mysql` database.
