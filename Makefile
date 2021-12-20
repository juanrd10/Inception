
init:
	mkdir -p /Users/juanrodr/App/Volumes_incep/db
	mkdir -p /Users/juanrodr/App/Volumes_incep/wp
	docker-compose -f ./srcs/docker-compose.yml up --build -d

stop:
	docker-compose -f ./srcs/docker-compose.yml down

stop_volumes:
	docker-compose -f ./srcs/docker-compose.yml down --volumes

remove_volumes:
	rm -rf /Users/juanrodr/App/Volumes_incep/db
	rm -rf /Users/juanrodr/App/Volumes_incep/wp
	mkdir -p /Users/juanrodr/App/Volumes_incep/db
	mkdir -p /Users/juanrodr/App/Volumes_incep/wp

info_volumes:
	@echo "DATABASE LS"
	@ls /Users/juanrodr/App/Volumes_incep/db
	@echo "\nWORDPRESS LS"
	@ls /Users/juanrodr/App/Volumes_incep/wp

clean:	remove_volumes
		docker system prune -a
		docker stop $(docker ps -qa); docker rm $(docker ps -qa); docker rmi -f $(docker images -qa); docker volume rm $(docker volume ls -q); docker network rm $(docker network ls -q) 2>/dev/null

