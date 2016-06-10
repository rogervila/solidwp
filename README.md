# WpSolid

a Wordpress subframework dressed as a theme. It uses [Twig](http://twig.sensiolabs.org/) for templates, and the MVC pattern.

## Installation

First, install Wordpress.

1. Go to **Appearence -> Themes** and search for *WpSolid*
2. From your terminal window, go to the theme folder
```shell
$ cd your_site_path/wp-content/themes/wpsolid
```

3. Install the dependencies

```shell
$ composer install
```

## Routes

in `app/routes.php` you can define the app routes that will call Controllers from `app/Controllers` folder.

[code example for routing]

**IMPORTANT: Is not necessary to create a Wp Page for each route, but if you want to use** `wp_nav_menu()`**, then you have to**


## Services, Repositories and Contracts

The idea of WpSolid is to separate all the logic into different directories, in order to make it more maintainable.

Examples that are already on the code: 
- The `/blog` route calls a `BlogController` which calls a `PostRepository` in order to fetch the posts.
- The `/email/contact` route calls a `EmailController` which calls a `MailerContract` interface. This interface is refering to a `WpMailService` (that uses `wp_mail()`), but it can be switched to another service like Mailgun, etc.

## Solid Subthemes

By default, an *example* solid theme is used by WpSolid.

You can either create a new theme, or install it via composer, or install it manually.


### Creating a subtheme

By default, Solid Subthemes are placed at the *subthemes* folder. You can change this value on `app/config.php`
```php
return [

    ...
    
	/**
	 * From the WpSolid theme folder, the subthemes folder locations
	 */
	'subthemes_folder' => 'subthemes',

    ...
];
```

Create a new folder with your theme name, and follow this structure:

[TO DO: folder structure]

The *example* subtheme uses gulp, postcss, stylus and babel, which is a good starter for writing modern front-end content.

Since the *example* subtheme is very simple, I recommend to copy the folder and use it as a boilerplate.

[explain how to upload a theme to packagist, with the post-script command]

### Installing a Subtheme

[explain how to download with composer]

## TO DO

- Make tests
- add form validation with [particle-php/Validator](https://github.com/particle-php/Validator)
- improve router controller callbacks
- implement a service provider for contracts
- add Error Handling methods
- Create a Wiki
- Move from Globals to full OOP
- Make a better sreenshot for the theme
- Make a nice *example* subtheme
