# Chris McCluskey - Personal Site

[![Circle CI](https://circleci.com/gh/chrismccluskey/chris.mccluskey.us/tree/master.svg?style=svg)](https://circleci.com/gh/chrismccluskey/chris.mccluskey.us/tree/master)

## Installation

Clone this repo.
Create a database and user with create, alter, drop, select and insert privileges.

```
cd chris.mccluskey.us
cp .env.example .env
```

Edit the ``.env`` file to include database information.

```
composer install
php artisan key:generate
php artisan migrate:refresh --seed
```

## Developer Installation

Follow steps for Installation, plus:

```
npm install
```
