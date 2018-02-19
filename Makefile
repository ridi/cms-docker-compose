.PHONY: build install cms-up cms-down migrate-samples

install:
	composer install
	cp -n -v .env.sample .env || true # Surpress returning error on existing destination.

db-migrate:
	vendor/bin/phinx migrate
	vendor/bin/phinx seed:run

up:
	docker-compose -f docker-compose.yml -f docker-compose.db.yml up -d

down:
	docker-compose  -f docker-compose.yml -f docker-compose.db.yml down

log:
	docker-compose logs --follow
