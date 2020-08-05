.PHONY: sniff test vendor

validate:
	pear package-validate

package:
	pear package

update:
	php composer.phar update

vendor:
	php composer.phar install --no-interaction --prefer-source

test: vendor
	vendor/bin/phpunit --coverage-clover coverage.xml
