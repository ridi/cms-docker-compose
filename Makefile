.PHONY: build install cms-up cms-down migrate-samples

install:
	composer install

db-migrate:
	vendor/bin/phinx migrate
	vendor/bin/phinx seed:run

cms-up:
	docker-compose up

cms-down:
	docker-compose down
