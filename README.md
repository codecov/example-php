

# [Codecov][1] PHP Example

## Guide
### Travis Setup

Add to your `.travis.yml` file.
```yml
language: php

script:
    - vendor/bin/phpunit --coverage-clover=coverage.xml

after_success:
    - bash <(curl -s https://codecov.io/bash)
```
### Produce Coverage Reports
Collect coverage reports `vendor/bin/phpunit --coverage-clover=coverage.xml`, [see here][2]

## Caveats
### Private Repos
Add to your `.travis.yml` file.
```yml
after_success:
  - bash <(curl -s https://codecov.io/bash) -t uuid-repo-token
```
## Support
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
### Contact
- Intercom (in-app messanger)
- Email: support@codecov.io
- Slack: slack.codecov.io
- [gh/codecov/support](https://github.com/codecov/support)

1. More documentation at https://docs.codecov.io
2. Configure codecov through the `codecov.yml`  https://docs.codecov.io/docs/codecov-yaml



[1]: https://codecov.io/
[2]: https://github.com/codecov/example-php/blob/master/.travis.yml#L15
[3]: https://github.com/codecov/example-php/blob/master/.travis.yml#L18
[4]: https://github.com/codecov/codecov-python
