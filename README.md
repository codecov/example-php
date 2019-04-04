[Codecov][1] PHP Example
========================

1. Collect coverage reports `vendor/bin/phpunit --coverage-clover=coverage.xml`, [see here][2]
2. Call `bash <(curl -s https://codecov.io/bash)` at the end of your CI build, [see here][3]
  - [Learn how to include your upload repository token][4]

> Contact Codecov support team for help :thumbsup: https://codecov.io/support

# Requirements

- php xdebug extension

# Frequently Asked Questions

#### ❔Using phpunit.xml.dist?
Start tracking coverage metrics by adding a coverage logger:

```xml
<phpunit>
  ...
  <logging>
        <log type="coverage-clover" target="clover.xml"/>
    </logging>
</phpunit>
```

#### ❔I don't see one or more files?

Codecov will only show files that have lines covered (hit or miss). If your file has no statments it will not show up in Codecov until you add some. Go get em' tiger!

We are happy to help if you have any questions. Please contact email our Support at [support@codecov.io](mailto:support@codecov.io)


[1]: https://codecov.io/
[2]: https://github.com/codecov/example-php/blob/master/.travis.yml#L15
[3]: https://github.com/codecov/example-php/blob/master/.travis.yml#L18
[4]: http://docs.codecov.io/docs/about-the-codecov-bash-uploader#section-upload-token
