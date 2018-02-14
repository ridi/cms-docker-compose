.PHONY: build install cms-up cms-down migrate-samples

install:
	composer install
	cp -n -v .env.sample .env || true # Surpress returning error on existing destination.

db-migrate:
	vendor/bin/phinx migrate
	vendor/bin/phinx seed:run

up:
	docker-compose up -d

down:
	docker-compose down

log:
	docker-compose logs --follow
