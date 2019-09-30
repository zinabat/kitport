# KitPort
A customizable content management system for blogs and 
portfolios. A CMS without the fluff, built with Laravel.

## Installation
Change the ```.env.example``` file and add a 32-bit application key. Add database information.
```bash
composer install 
php artisan migrate
php artisan serve
```
Verify the application is being served correctly at the URI specified in the .env file.

A setup page should be displayed. This page allows a one-time setup of a super-administrative user.

## Notes
* Sound of its own making - Robert Morris
* didactic function
* relationship between images 
* urban planning, objectivity docs

## Tasks to Complete
1. Build content management system
    1. Auth - Login/Logout
        1. Admin setup page
    2. Posts - CRUD
        1. WYSIWYG
        2. Image uploads
    3. Pages - CRUD
        1. Landing page
        2. View posts by date
        3. About
        4. Contact
        5. Site Map
    4. Image management - CRUD
        1. folders
        2. crop tool
    5. Styles - CRUD ?
        1. automatic create from CSS file upload
        2. content for stylesheet is in file, not database
        3. style is associated with a database entry
2. Write articles
    1. At least 10 topics, all detailing the process
    2. At least 5 should have interactive javascript
3. Create 10-15 responsive, accessible designs
    1. Added in 1.e., associated with pages and/or posts
    2. Each hand drawn first
    3. Each should have a mockup
    4. Original graphical images created per design
        1. Ink
        2. Watercolour
        3. Digital
    5. Implementation must be easy to read on any screen, accessible via WIA-ARIA standards
4. Brand documentation
    1. Should be a page
    2. Logo, color scheme, font
    3. Creative voice, audience