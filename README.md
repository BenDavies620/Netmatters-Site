# Netmatters Website Recreation

A training project built as part of the Netmatters Scion Coalition Scheme. The aim was to recreate the appearance and responsive behaviour of the Netmatters website, then extend it with JavaScript functionality and a PHP contact form.

## Features

- Responsive homepage with service cards, news articles and partner logos
- Navigation dropdowns and a slide-out mobile menu
- Banner slider and logo carousels
- Sticky header that responds to scroll direction
- Cookie preference prompt using local storage
- Contact page with office information and an enquiry form
- Client-side and server-side form validation
- Database storage for valid enquiries
- Form values retained when validation fails
- Success message and redirect after a successful submission

## Technologies

- HTML
- CSS and Sass
- JavaScript and jQuery
- Slick Carousel
- PHP
- MySQL
- PDO
- Git and GitHub

## What I learnt

This project helped me translate an existing design into a responsive website and improve its accuracy through testing and peer feedback.

Adding the contact form introduced server-side processing, database integration and prepared statements. I also practised validating user input, escaping values when displaying them in HTML and using sessions to show a success message after a redirect.

## Running locally

The PHP version requires a local PHP environment and a MySQL database.

1. Download or clone this repository.
2. Configure your local web server to serve the project.
3. Create a database and the `enquiries` table required by the contact form.
4. Configure the database connection using your local credentials.
5. Open the site through your local server.

Database credentials should remain outside version control. GitHub Pages cannot run the PHP functionality.

## Credits

The original design, branding and supplied content belong to Netmatters and their respective owners. This recreation was produced for educational purposes and is not the official Netmatters website.
