# .env file parser for PHP

env-file-php-parser is a php library for using a .env file on your php project, composer not required.

## Installation

Clone or download this repository and add the env.class.php file to your project



## Usage

```php
require 'env.class.php'

# declare class
$env = new env(__DIR__);

# or you can use a custom name and directory

$env = new env('home/user','custom.env');

# initialize env file
$env->init();

# get environment data by using getenv();
print getenv('TEST');
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.
