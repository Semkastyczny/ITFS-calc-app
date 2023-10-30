refresh-docker:
	docker stop itfs_www_1 
	docker container prune -f
	docker-compose build www
	docker-compose up -d
