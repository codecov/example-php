.PHONY: sniff test vendor

validate:
	pear package-validate

package:
	pear package

update:
	php composer.phar update --dev

vendor:
	php composer.phar install --no-interaction --prefer-source --dev

sniff: vendor
	vendor/bin/phpcs --standard=PSR2 src -n

test: vendor
	vendor/bin/phpunit --coverage-clover=clover.xml
