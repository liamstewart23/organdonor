# Organ Donor Website

This website is for our marketing campaign - raising awareness for organ donation.

# Setup for Development

Install db from db/becauseadonor.sql file.

Edit Config file.

```
admin/phpscripts/config.php
```
Install Sass

See: http://sass-lang.com/install

Move to root folder of site.

Run the following commands in terminal

These commands will watch scss files for updates and compress to app.css and no-js.css on save.

```
sass --watch css/site/scss/main.scss:css/site/app.css --style compressed
```

```
sass --watch css/site/scss/nojs.scss:css/site/no-js.css --style compressed
```

```
sass --watch admin/css/scss/main.scss:admin/css/app.css --style compressed
```

```
sass --watch admin/css/scss/nojs.scss:admin/css/no-js.css --style compressed
```
# Credit

https://github.com/liamstewart23/organdonor/blob/master/humans.txt
