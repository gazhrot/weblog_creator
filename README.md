# weblog_creator
a school projet to make personnal blog

# how to install it
- Clone this repository

`git clone https://github.com/gazhrot/weblog_creator.git`

`composer update`






APP_ENV=local
APP_DEBUG=true
APP_KEY=base64:+VBHUIrcrUynlzsWEKd7lMwYtVdR4txjaMfiKwHIWs0=
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=weblog
DB_USERNAME=root
DB_PASSWORD=

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
