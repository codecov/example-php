php -> Codecov.io [![Build Status](https://secure.travis-ci.org/codecov/codecov-php.svg?branch=master)](http://travis-ci.org/codecov/codecov-php) [![codecov.io](https://codecov.io/github/codecov/codecov-php/coverage.svg?branch=master)](https://codecov.io/github/codecov/codecov-php?branch=master)
=======
| [https://codecov.io/][1] | [@codecov][2] | [hello@codecov.io][3] |
| ------------------------ | ------------- | --------------------- |
=======

> This repository serves as an **Example** on how to use codecov uploader for php.

## Usage

> Codecov supports **any clover coverage** export. **No php package needed** to upload results to [codecov.io][1]

# [![travis-org](https://avatars2.githubusercontent.com/u/639823?v=2&s=50)](https://travis-ci.org) Travis C

Add to your `.travis.yml` file.
```yml
before_install:
    - sudo pip install codecov
script: 
    # run your test with this flag below
    - vendor/bin/phpunit --coverage-clover=coverage.xml
after_success: 
    - codecov
```


[1]: https://codecov.io/
[2]: https://twitter.com/codecov
[3]: mailto:hello@codecov.io
