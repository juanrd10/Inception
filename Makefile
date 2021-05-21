
init:
	docker build ./srcs/requirements/nginx/ -t nginx_incept
	docker build ./srcs/requirements/mariadb/ -t mariadb_incept
	docker build ./srcs/requirements/wordpress/ -t wordpress_incept
	docker-compose -f ./srcs/docker-compose.yml up -d

stop:
	docker-compose -f ./srcs/docker-compose.yml down
