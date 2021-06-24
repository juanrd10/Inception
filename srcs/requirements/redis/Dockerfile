FROM debian:buster

RUN apt -y update && \
	apt -y install redis-server vim && \
	apt -y upgrade

EXPOSE 6379

CMD bash
