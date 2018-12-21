
.PHONY : help build composer tests logs

.DEFAULT_GOAL := help

help: ## Show this help
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "  \033[36m%-30s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

build: ## build the docker image
	docker build -t amadeus-ws-client ./docker

composer: ## run composer install in docker container
	docker run --rm --interactive --tty -v "${PWD}":/app -v ~/.ssh/:/root/.ssh -w /app composer install --ignore-platform-reqs

tests: ## run phpunit tests in docker container
	docker run -it --rm --name amadeus-ws-client -v "${PWD}":/app -w /app amadeus-ws-client /app/vendor/bin/phpunit

logs: ## watch logs
	docker logs -f amadeus-ws-client
