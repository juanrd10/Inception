
init:
	mkdir -p /home/juanrodr/data/db
	mkdir -p /home/juanrodr/data/wp
	docker-compose -f ./srcs/docker-compose.yml up --build -d

stop:
	docker-compose -f ./srcs/docker-compose.yml down

stop_volumes:
	docker-compose -f ./srcs/docker-compose.yml down --volumes

remove_volumes:
	rm -rf /home/juanrodr/data
	mkdir -p /home/juanrodr/data/db
	mkdir -p /home/juanrodr/data/wp

info_volumes:
	@echo "DATABASE LS"
	@ls /home/juanrodr/data/db
	@echo "\nWORDPRESS LS"
	@ls /home/juanrodr/data/wp

clean:	remove_volumes
		docker system prune -a
		docker stop $(docker ps -qa); docker rm $(docker ps -qa); docker rmi -f $(docker images -qa); docker volume rm $(docker volume ls -q); docker network rm $(docker network ls -q) 2>/dev/null

