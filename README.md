# Organ Donor Website

This website is for our marketing campaign - raising awareness for organ donation.

# Setup for development

Pull the repo.

Install db from db file.

Edit Config file.
```
route to config/connect file here
```
Install Sass

```
gem install sass
```

Confirm Sass Install

```
sass -v
```

Move to root folder of site. Run the following to watch scss files for change to compress to app.css and no-js.css

```
sass --watch css/site/scss/main.scss:css/site/app.css --style compressed
```

```
sass --watch css/site/scss/nojs.scss:css/site/no-js.css --style compressed
```