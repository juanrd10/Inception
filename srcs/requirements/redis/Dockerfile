FROM debian:buster

RUN apt -y update && \
	apt -y install redis-server && \
	apt -y upgrade

CMD service redis-server start && redis-cli MONITOR
