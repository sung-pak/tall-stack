- use sqlite for testing
//  create the database file: 
touch /Users/my-name/Documents/tall-stack/database/database.sqlite

// inside .env file make sure of full path to db file created
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE="/Users/my-name/Documents/tall-stack/database/database.sqlite"
DB_USERNAME=root
DB_PASSWORD=

// create db tables
php artisan migrate

register
  user: admin
  pass: admin123
  email: admin@aol.com
  pass: abcd1234