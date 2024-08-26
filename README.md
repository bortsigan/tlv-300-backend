# Backend for TLV-300

## Setup
```bash
# clone the repo
https://github.com/bortsigan/tlv-300-backend.git

# go to your project
cd tlv-300-backend

# copy .env.example
cp .env.example .env

# 
# create an account from from https://whois.whoisxmlapi.com/ and get the provided api key
# for example
WHOIS_API_KEY=at_xxxxxxxxx

# install packages
composer install 

# or
composer install --ignore-platform-reqs


# add APP_KEY
php artisan key:generate

# clear the config
php artisan config:clear

```

## Run Development
```bash
# run local and use the server URL that Laravel started to your frontend tlv-300
php artisan serve

# for example
http://127.0.0.1:8000

```