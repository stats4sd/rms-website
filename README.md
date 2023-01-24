# Setup Dev Environment

```
git clone git@github.com:stats4sd/rms-website.git

# open the new folder in your editor of choice, e.g:
code rms-website

# create database, e.g:
mysql -u root -e "create database rms_site"

## create .env file
cp .env.example .env

### Update .env details
# - database details
# - Microsoft Graph link details, copied from https://start.1password.com/open/i?a=GU6EGTXV6NGPRBL53GGTGB5VVE&v=z3awyb4rnfhgjijhus2roocfty&i=3qgwiil2lzfw7d5el7gd22f5ny&h=stats4sd.1password.com

## install packages and do Laravel setup things
composer install
php artisan key:generate

npm install

## migrate database and run seeder
php artisan migrate --seed

```

**NOTE**: This site uses Vite to compile CSS and JS assets, instead of Laravel Mix. This means that:
 - `npm run dev` is now the same as `npm run watch`.
 - If you try to load the site locally without running `npm run dev`, you'll get a "Vite manifest not found" error.  

To start working on the front-end, run `npm run dev` in a new terminal tab, then you can open the site (e.g. http://rms-website.test)
