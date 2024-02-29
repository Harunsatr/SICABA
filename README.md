# SICABA - Sistem Informasi Cathering Bu Aini
<p>Hi everyone ! <br>
This is our project repository about SICABA <br>
Hope u happy to used it</p>

### Tech in This Project

![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white) ![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white) ![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E) ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) ![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white) ![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white) ![NodeJS](https://img.shields.io/badge/node.js-6DA55F?style=for-the-badge&logo=node.js&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)


<!-- Proudly created with GPRM ( https://gprm.itsvg.in ) -->
### Prerequisites
Before you begin, ensure you have met the following requirements :

* [Git](https://git-scm.com/downloads "Download Git") must be installed on your operating system.

### Clone Repository
To run in the locally, run this command on your git bash to clone this repo :
```bash
git clone https://github.com/Harunsatr/SICABA.git
```

### Change Directory
Change the directory to the project :
```bash
cd sicaba-projects
```

### Install the Composer
To run in the locally, run this command on your git bash to clone this repo :
```bash
composer install
```

### Install Node Package Manager Dependencies
Before run this command make sure u downloaded NodeJs from this link :
<br>
* [NodeJs](https://nodejs.org/en "Download NodeJs")
<br>

Install Node Package Manager Dependencies :
```bash
npm install
```

### Configure Database in ur .env File :
```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sicaba-projects
DB_USERNAME=root
DB_PASSWORD=
```
### Migrate ur Database in the Terminal :
```bash
php artisan migrate
```

### Run the NPM Dependencies in the terminal :
```bash
npm run dev
```

### Open in the Other Terminal and Run this Command to Run the Project:
```bash
php artisan serve
```
