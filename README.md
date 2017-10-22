<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<h1 align="center">Laravel 5.5 Multiple-Auth Packages</h1>

From Original Repository [trojan302](https://github.com/trojan302/laravel-multiple-auth)

### Requirement*
- PHP >= 7.0.0
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

### Also Need*
- npm (Node Packages Manager)
- composer (PHP)

### What Are Includes
- Auth Multiple Level User [ **USER** and **ADMINISTRATOR** ]
- **Bootstrap 4 Beta Version**
- jQuery, Popper.js
- Font Awesome 4 **[cdn]**

### Download Packages

<p align="center"><img src="https://image.ibb.co/naoPOw/download_via_git.png" alt="download_via_git" border="0"></p>

	@fcodexxx ⇒ (htdocs) git clone https://github.com/darkterminal/laravel-multiple-auth.git project-laravel

### Install Packages
<p align="center"><img src="https://image.ibb.co/f4d2Ab/install_using_composer.png" alt="install_using_composer" border="0"></p>

    @fcodexxx ⇒ (htdocs) cd project-laravel
    @fcodexxx ⇒ (project-laravel) composer install
    @fcodexxx ⇒ (project-laravel) php artisan package:discover
    @fcodexxx ⇒ (project-laravel) subl .

If Sublime Text Editor or Your favorite text editor is open then duplicate file `.env.example` to `.env`

<p align="center"><img src="https://image.ibb.co/hfkkwG/duplicate_env_file.png" alt="duplicate_env_file" border="0"></p>

then generate unique key for laravel application using artisan command line

	@fcodexxx ⇒ (project-laravel) php artisan key:generate

Now your `.env` file look like this

<p align="center"><img src="https://image.ibb.co/kdaeOw/generate_key_for_application.png" alt="generate_key_for_application" border="0"></p>

### Install Front End using Bootstrap 4 Beta

- First  Remove Frontend scaffolding using artisan command line
	
		@fcodexxx ⇒ (project-laravel) php artisan preset none

- Make sure you have jQuery in **devDependencies** on `package.json`

<p align="center"><img src="https://image.ibb.co/dnHe6G/install_dev_dependecies.png" alt="install_dev_dependecies" border="0"></p>

- If jQuery have been included in `packages.json` file, then install packages this command line
	
		@fcodexxx ⇒ (project-laravel) npm install

- After installing packages have done, then make sure you have this line in file `resources/assets/sass/app.scss`

		/*  @import Bootstrap 4 Beta and Custom Partials */
		
		@import "custom";
		@import "node_modules/bootstrap/scss/bootstrap";

		/*  Enjoy using SCSS */

<p align="center"><img src="https://image.ibb.co/fRFffb/import_stylesheet.png" alt="import_stylesheet" border="0"></p>

- If you have done with that, the next step is a compile preset Front End scaffolding using this command

		@fcodexxx ⇒ (project-laravel) npm run dev

the result like this

<p align="center"><img src="https://image.ibb.co/izvtYw/compile_stylesheet.png" alt="compile_stylesheet" border="0"></p>

- Congratulation you have successfully installing Laravel 5.5 and Bootstrap 4 Beta!

### Activated Multi-Auth

- Change databse in `.env` file

	    DB_CONNECTION=mysql
	    DB_HOST=127.0.0.1
	    DB_PORT=3306
	    DB_DATABASE=laravel-auth
	    DB_USERNAME=root
	    DB_PASSWORD=

Username and Password must be following your database credential, in this case `DB_USERNAME` is `root` and `DB_PASSWORD` is none.

- Change Mail Driver in `.env` file to Provide Password Reset

	    MAIL_DRIVER=log
	    MAIL_HOST=smtp.mailtrap.io
	    MAIL_PORT=2525
	    MAIL_USERNAME=null
	    MAIL_PASSWORD=null
	    MAIL_ENCRYPTION=null

By Default mail driver is `smtp`, replace using `log` file laravel 5.5 storage

- Create Database in MySQL Server or Phpmyadmin

	    CREATE DATABASE laravel-auth

- The push migration table to server, using this command line

	    @fcodexxx ⇒ (project-laravel) php artisan migrate

Database structure look like this

<p align="center"><img src="https://image.ibb.co/gXnOYw/image.png" alt="image" border="0"></p>

- After successfully migrate database you can add user and admin credentials using `tinker`

		@fcodexxx ⇒ (project-laravel) php artisan tinker
	    Psy Shell v0.8.11 (PHP 7.0.23-1+ubuntu17.04.1+deb.sury.org+1 — cli) by Justin Hileman
	    >>> $user = new App\User();
	    => App\User {#739}
	    >>> $user->name = 'fscodexxx'
	    => "fscodexxx"
	    >>> $user->email = 'fscodexxx@email.com'
	    => "fscodexxx@email.com"
	    >>> $user->password = bcrypt('fscodexxx')
	    => "$2y$10$UbdRJsbQhlHS3gqjLmBTueZIM2ZkzKTiJX9WP3hNxJFdQ6foR11IS"
	    >>> $user->save()
	    => true
	    >>>

Make sure you have been created user, using this command

    @fcodexxx ⇒ (project-laravel) php artisan tinker
    Psy Shell v0.8.11 (PHP 7.0.23-1+ubuntu17.04.1+deb.sury.org+1 — cli) by Justin Hileman
    >>> $user = new App\User();
    => App\User {#739}
    >>> $user->all();
    => Illuminate\Database\Eloquent\Collection {#745
        all: [
        App\User {#746
            id: 1,
            name: "fscodexxx",
            email: "fscodexxx@email.com",
            created_at: "2017-10-04 16:55:26",
            updated_at: "2017-10-04 16:55:26",
        },
        ],
    }
    >>>

`users` table look like this

<p align="center"><img src="https://image.ibb.co/gu0o0b/image.png" alt="image" border="0"></p>

- Create admin creadential
		
		@fcodexxx ⇒ (project-laravel) php artisan tinker
	    Psy Shell v0.8.11 (PHP 7.0.23-1+ubuntu17.04.1+deb.sury.org+1 — cli) by Justin Hileman
		>>> $admin = new App\Admin();
		=> App\Admin {#739}
		>>> $admin->name = 'administrator'
		=> "administrator"
		>>> $admin->email = 'admin@email.com'
		=> "admin@email.com"
		>>> $admin->password = bcrypt('adminpassword')
		=> "$2y$10$stWyra3Ie.QRRbJO7o6RoOE4sbDTS5kafFw3UBWgP8lD.szZZGzDa"
		>>> $admin->save();
		=> true

Make sure you have been created admin, using this command

	@fcodexxx ⇒ (project-laravel) php artisan tinker
    Psy Shell v0.8.11 (PHP 7.0.23-1+ubuntu17.04.1+deb.sury.org+1 — cli) by Justin Hileman
	>>> $admin->all();
	=> Illuminate\Database\Eloquent\Collection {#752
	     all: [
	       App\Admin {#753
		       id: 1,
		       name: "administrator",
		       email: "admin@email.com",
		       created_at: "2017-10-04 17:07:09",
		       updated_at: "2017-10-04 17:07:09",
	       },
	     ],
	   }
	>>>

`admins` table look like this

<p align="center"><img src="https://image.ibb.co/dvgT0b/image.png" alt="image" border="0"></p>

### Create vHost in XAMPP or LAMPP (Linux/Ubuntu)

- Enable virtual hosts by editing httpd.conf, if it is not enabled already. Once you enable it you can skip this step next time.

		sudo gedit /opt/lampp/etc/httpd.conf
		
Find `#Include etc/extra/httpd-vhosts.conf` and remove the `#` to un-comment this line

	Include etc/extra/httpd-vhosts.conf

- Add new virtual host by opening the `httpd-vhosts.conf` file

		sudo gedit /opt/lampp/etc/extra/httpd-vhosts.conf

Usually, by default there are two virtual hosts in this file. You can edit one or create new one by copy-pasting one of them. The required entries are `DocumentRoot` and `ServerName`

	<VirtualHost *:80>
		ServerAdmin your_email@domain_name.com
		DocumentRoot /opt/lampp/htdocs/laravel-project
		ServerName laravel-project.dev
		ServerAlias www.laravel-project.dev
		ErrorLog logs/laravel-project.dev-error_log
		CustomLog logs/laravel-project.dev-access_log common
	</VirtualHost>
	
- Next, you will need to tell Xampp server where to find the address you added above:

		sudo gedit /etc/hosts

Add the following line:

	127.0.0.1 laravel-project.dev

- Restart xampp server by doing

		sudo /opt/lampp/lampp restart
		
- Type http://laravel-project.dev or http://www.laravel-project.dev in browser’s address bar and it should work.

Welcome Page Laravel 5.5 with Bootstrap 4 Beta

<p align="center"><img src="https://image.ibb.co/gF7XAb/image.png" alt="image" border="0"></p>

### Developing Prosess

If you have successfully installing Laravel 5.5 and Bootstrap 4 Beta. Then you want to developing your project using `stylesheet` and `javascript`, you must run this command to watch every changed in your `app.scss` and `app.js` file.

	@fcodexxx ⇒ (project-laravel) npm run watch

or

	@fcodexxx ⇒ (project-laravel) npm run watch-poll

### Thanks to

- Youtube Channel : [WeeeWork](https://www.youtube.com/channel/UC5xgusHHscTDAHxcxq6Dwdg)
- Tip in Laracats Forum by JCOBB : [Tip: Using Bootstrap 4.0.0 beta with Laravel 5.5](https://laracasts.com/discuss/channels/tips/tip-using-bootstrap-400-beta-with-laravel-55)

### Troubleshooting

- Open Issues
- Email in [Betta Dev Indonesia](mailto:bettadevindonesia@gmail.com)
