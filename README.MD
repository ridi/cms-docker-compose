# CMS Docker Compose

A docker-compose environment for RIDI CMS Service.

## Background

This project offers docker images for CMS service development. The docker images include [CMS](https://github.com/ridi/cms) for authentication, [CMS-Admin](https://github.com/ridi/cms-admin) for authorization, database, and haproxy for routing between these services.

If you build a new service for the CMS, it should be bound to the haproxy. The default path and port for your service can be found in `.env.sample`.

## Setup

1. `make install`
1. `make up` will start the docker containers.
1. Wait for several seconds until the conainers startup.
1. `make db-migrate` for sample db migration. If it fails, try again in a few seconds.
1. Run your CMS service app at the port and path described in `.env`.
1. `make down` for shutting down the containers.

## (Optional)HTTPS

Add `docker/haproxy/ssl.merge` into your keychain and make it trusted.
Add `127.0.0.1 admin.ridibooks.com` in /etc/hosts
open https://admin.ridibooks.com in the browser.
