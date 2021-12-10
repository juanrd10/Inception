
init:
	docker-compose -f ./srcs/docker-compose.yml up --build -d

stop:
	docker-compose -f ./srcs/docker-compose.yml down

stop_volumes:
	docker-compose -f ./srcs/docker-compose.yml down --volumes

remove_volumes:
	rm -rf /Users/juanrodriguez/App/Volumes_incep/db
	rm -rf /Users/juanrodriguez/App/Volumes_incep/wp
	mkdir /Users/juanrodriguez/App/Volumes_incep/db
	mkdir /Users/juanrodriguez/App/Volumes_incep/wp
