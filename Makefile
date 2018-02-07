.PHONY: build install cms-up cms-down migrate-samples

install:
	composer install
	@if [[ ! -f .env ]]; then \
		cp .env.sample .env; \
	fi

db-migrate:
	vendor/bin/phinx migrate
	vendor/bin/phinx seed:run

up:
	docker-compose up -d

down:
	docker-compose down

log:
	docker-compose logs --follow
