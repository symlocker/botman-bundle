The bundle integrates BotMan library into Symfony framework

# Bundle status
Bundle is now on development station

# Requirements

Symfony 4.3, php 7.1+


# Installation

Bundle installation via composer:
- you have to provide repository for composer 
so add following code to composer.json in section "repositories"

```code
{
       "name": "symlocker/botman-bundle",
       "type": "vcs",
       "url": "https://github.com/symlocker/botman-bundle"
}
```

- composer.json "require" section have to contain bundle name
```code
"symlocker/botman-bundle": "dev-master" 
```

- finally update composer requirements
```console
composer update
```