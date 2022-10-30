<p align="center"><a href="https://github.com/free-time-ltd/homemanager-be" target="_blank"><img src="https://raw.githubusercontent.com/free-time-ltd/homemanager-be/main/resources/assets/images/repo-logo.png" width="400" alt="Home Manager Logo"></a></p>

## About Home Manager

Home Manager is an open-source web project based on the Laravel PHP Framework. It helps house managers manage their objects, track payments, repairs, maintenance etc. It allows tenants to subscribe, track and monitor what has been done by their home manager, report issues and get contact information about other tenants. 

To begin, clone this repository, run the migrations and seed the database and it you should be able to proceed for now.

## Running the project locally

```bash
$ ./vendor/bin/sail up -d
$ ./vendor/bin/sail artisan migrate --seed
```

