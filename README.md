Phemoji
====================

[![Latest Stable Version](https://img.shields.io/packagist/v/Stichoza/phemoji.svg)](https://packagist.org/packages/stichoza/phemoji) [![Total Downloads](https://img.shields.io/packagist/dt/Stichoza/phemoji.svg)](https://packagist.org/packages/stichoza/phemoji) [![Downloads Month](https://img.shields.io/packagist/dm/Stichoza/phemoji.svg)](https://packagist.org/packages/stichoza/phemoji)

Emojis in PHP :elephant:

Have you ever envied Swift having possibility to [use emojis](http://www.globalnerdy.com/2014/06/03/swift-fun-fact-1-you-can-use-emoji-characters-in-variable-constant-function-and-class-names/) in code? Well, you can use it in PHP too. I mean, it was possible for years. *&#42;Shots fired&#42;* :collision: :gun:

## Installation

Install this package via [Composer](https://getcomposer.org/).

```
composer require stichoza/phemoji
```

## Usage

### Getting Started

After you have installed the package, you can just call `Phemoji::init()` and you're good to go!

```php
\Stichoza\Phemoji\Phemoji::init();
```

**or**

```php
namespace App\Http\Controlers\Blabla;

// ...

use Stichoza\Phemoji\Phemoji;

// ...

Phemoji::init();
```

> **Note:** This will define some constants and functions in global scope. Once called it will be available everywhere. If you're using any PHP framework, it would be more convinient if you call this method somewhere in middleware or routes or any other place you prefer.

### Use of emojis

I have not written full docs yet. You can read the source code and you'll get everything what's going on here.

Example:

|   With Phemoji    |      Equivalent PHP         |
|-------------------|-----------------------------|
| :pencil2:(:capital_abcd:("Hello World!")); | `printf(strtoupper("Hello World!"));` |
| :page_facing_up:("file.txt"); | `file_get_contents("file.txt");` |
| :date:('Y-m-d', :alarm_clock:() + :slot_machine:(1000, 2000)); | `date('Y-m-d', time() + rand(1000, 2000));` |
| :poop:(:bomb:('a', 'Katana!!!')); | `var_dump(explode('a', 'Katana!!!'));` |
| $x = :+1:; | `$x = true;` |

And so on. Take a look at full list in the source of [Phemoji.php](https://github.com/Stichoza/phemoji/blob/master/src/Stichoza/Phemoji/Phemoji.php)

## Disclaimer

This package is created just for fun. I am not responsible if any emoji from this package will burn your house to the ground or murder your cute little kitten. Btw, if it ever kills a cat, notify me and I'll remove this repo from Github. I mean Octocat is also a cat.
