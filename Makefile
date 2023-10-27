refresh-docker:
	docker container prune -f
	docker-compose build www
	docker-compose up -d
