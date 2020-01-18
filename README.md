# Intergers to English words

Algorithm to conver integer numbers to English text words.

### Prerequisites

There are few ways to run tests:

1. You have PHP >=7.1.0 and composer installed locally on your machine

2. Using configured docker-compose file.

### Running tests With PHP locally

1. Open up your favorite terminal and clone this repository.

1. CD into repo directory and run these commands:

```
composer install
```

```
phpunit
```

After that you should see tests results output on screen.

### With docker-compose

Another way, if you have docker on your machine installed is using configured docker-compose file which serves two images php and composer.

Run these commands in project's directory:

```
docker-compose up 
```

you can use -d command to run this task in background

After container is downloaded and running. Execute into php container:

```
docker-compose exec php bash 
```

From there you can directly call PHPUnit which is installed by composer container.

```
php ./vendor/bin/phpunit
```


