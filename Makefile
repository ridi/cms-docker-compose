.PHONY: build install cms-up cms-down migrate-samples

install:
	composer install
	cp -n .env.sample .env;

db-migrate:
	vendor/bin/phinx migrate
	vendor/bin/phinx seed:run

up:
	docker-compose up -d

down:
	docker-compose down

log:
	docker-compose logs --follow
