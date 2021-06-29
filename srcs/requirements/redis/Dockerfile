FROM debian:buster

COPY ./conf/redis.conf /

RUN apt -y update && \
	apt -y install redis-server vim && \
	apt -y upgrade && \
	rm /etc/redis/redis.conf && mv /redis.conf /etc/redis/redis.conf

CMD service redis-server start && redis-cli MONITOR
