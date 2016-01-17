#################
Simple Task Board
#################

- Version: 2.2.2
- Author: Oscar Dias
- Website: http://oscardias.com

***********
Description
***********

A simple task board to help managing software projects. It lets you create multiple users
and associate them with different projects. Inside each project you can create multiple
tasks.

It is developed in PHP and uses the CodeIgniter Framework. Since version 2.0 it also uses Twitter Bootstrap.

************
Installation
************

Create the database using db/create.sql, place the files in your server and update the following:

- application/config/config.php: update $config['base_url'] with your url.
- application/config/database.php: update your database information.
- .htaccess in your root folder: update /task_board/index.php with your URL.
- enable mod_rewrite in your Apache server.

Run <server>/install (replace <server> with your localhost or domain/folder).

If you have any problems let me know.

************
Next updates
************

I plan to update some portions of this application in the following months. Currently these are the features to be developed:

- Github integration: get commit messages and sync issues (if possible).
- Pagination: paginate tasks in the dashboard and the list of users.
- Send emails: When a task is associated with a different user and Periodic email notifying used about his tasks
- ... if you have any ideas, let me know ...