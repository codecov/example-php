# [Codecov](https://codecov.io) PHP Example
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Fcodecov%2Fexample-php.svg?type=shield)](https://app.fossa.com/projects/git%2Bgithub.com%2Fcodecov%2Fexample-php?ref=badge_shield)


## Guide

### Travis Setup

Add to your `.travis.yml` file.
```yml
language: php

script:
    - vendor/bin/phpunit --coverage-clover coverage.xml

after_success:
    - bash <(curl -s https://codecov.io/bash)
```

### Produce Coverage Reports
Collect coverage reports `vendor/bin/phpunit --coverage-clover coverage.xml`, [see here](https://github.com/codecov/example-php/blob/master/.travis.yml#L15)

### FAQ
- Q: Can I use phpunit.xml.dist?<br/>A: Start tracking coverage metrics by adding a coverage logger:
 ```xml
<phpunit>
  ...
  <logging>
        <log type="coverage-clover" target="clover.xml"/>
    </logging>
</phpunit>
```
- Q: I don't see one or more files, why?<br/>A: Codecov will only show files that have lines covered (hit or miss). If your file has no statments it will not show up in Codecov until you add some. Go get em' tiger!

## Caveats
### Private Repo
Repository tokens are required for (a) all private repos, (b) public repos not using Travis-CI, CircleCI or AppVeyor. Find your repository token at Codecov and provide via appending `-t <your upload token>` to you where you upload reports.

## Links
- [Community Boards](https://community.codecov.io)
- [Support](https://codecov.io/support)
- [Documentation](https://docs.codecov.io)


## License 
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Fcodecov%2Fexample-php.svg?type=large)](https://app.fossa.com/projects/git%2Bgithub.com%2Fcodecov%2Fexample-php?ref=badge_large)
