# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter - это небольшой по размеру PHP-фреймворк. 
Больше информации на [официальном сайте](http://codeigniter.com).

Это репозиторий, в котором есть *user_guide*. It has been built from the 
[репозиторий разработчиков](https://github.com/codeigniter4/CodeIgniter4).

**This is pre-release code and should not be used in production sites.**

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/). 


## Важные изменения, связанные с index.php

`index.php` больше не находится в корневой директории! Он перенесён в директорию *public*. Это улучшение безопасности и разделения компонентов.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Внимание!** прочитайте внимательно user_guide, чтобы знать как работает CI4!

## Repository Management

We use Github issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script. 
Problems with it can be raised on our forum, or as issues in the main repository.

## Распространение

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/contributing.md) section in the development repository.

## Системные требования

Внимание! Минимальная версия PHP version 7.2 , с установленными модулями: 

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
