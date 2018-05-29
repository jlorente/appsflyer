Appsflyer SDK
=============
A PHP package to access the Appsflyer API by a comprehensive way.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

With Composer installed, you can then install the extension using the following commands:

```bash
$ php composer.phar require jlorente/appsflyer
```

or add 

```json
...
    "require": {
        "jlorente/appsflyer": "*"
    }
```

to the ```require``` section of your `composer.json` file.

## Configuration

You can set the dev_key and api_token as environment variables or add them later 
on Appsflyer class instantiation.

The names of the environment vars are APPSFLYER_DEV_KEY and APPSFLYER_API_TOKEN.

## Usage

Endpoints calls must done through the Appsflyer class.

If you haven't set the environment variables previously, remember to provide the 
keys on instantiation.

```php
$appsflyer = new Appsflyer($devKey, $apiToken);
$appsflyer->inappevent()->create($data);
```

## Contribution

There is still a lot to do and there are a lot of endpoints to develop, so any 
contribution will be well received.
 
## License 
Copyright &copy; 2018 José Lorente Martín <jose.lorente.martin@gmail.com>.

Licensed under the BSD 3-Clause License. See LICENSE.txt for details.
