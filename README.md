-News Project
A PHP-based web application for managing news articles and categories, complete with user authentication and administrative controls.

-Features:
* Add, update, and delete news articles
* Categorize news items
* View active and deleted news
* User account creation and login system
* Admin dashboard for managing content

Authentication
- Users can create accounts via create-account.php.
- Login is handled through loginpage.php and login_logic.php.


 Admin Functions
- Add news: add_news.php, add_news_logic.php
- Update news: update_news.php, logic_update_news.php
- Delete news: delete_news.php
- View deleted news: view_deleted_news.php
- Manage categories: add_category.php, logic-add-cate.php, view_categotry.php

tech stack:
-Backend:PHP 8.1 + MySQLi
-Web Server: Apache (via Docker)
-Database: MySQL
-Containerization: Docker
-Version Control: Git + GitHub

*How to build and run using Docker?
-to build the docker image: docker build -t news-app .
-Run the container: docker run -d -p 8080:80 --name news-container news-app

*How to stop the container and clean up?
-To stop the running container: docker stop news-container
-To remove the container: docker rm news-container
-To remove the image: docker rmi news-app

*Configuration notes:
port:apache runs in port 80 inside the container and  8080 on your host.
- Working Directory: /var/www/html

* How to Test the App
- open your browser and write: http://localhost:8080
Example:
add_news.php :  Add a new article
view_news.php:  View all articles

*Clone the Repository:
git clone https://github.com/Mayar-ashraf8/News-project.git

*URL (my project is alive on):
https://news-project-7.onrender.com

















