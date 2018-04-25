# ko-php-benchmark

This module is for benchmarking PHP code to determine how long a particular procedure takes to run.

## Install
```php
composer require ko/php-benchmark
```

## Usage

### Class Object
Return the `Benchmark` class object of how long a procedure took to run.
```php
  $mark = new \KO\Benchmark\Benchmark();

  sleep(3); // Some task that takes time to run
  
  echo $mark->calc();
```

### Human Readable String
Return a human readable string of how long a procedure took to run.
```php
  $mark = new \KO\Benchmark\Benchmark();

  sleep(3); // Some task that takes time to run

  echo $mark->calc()->toString();
```

### Array
Return an `Array` of how long a procedure took to run.
```php
  $mark = new \KO\Benchmark\Benchmark();

  sleep(3); // Some task that takes time to run

  var_dump( $mark->calc()->toArray() );
```
