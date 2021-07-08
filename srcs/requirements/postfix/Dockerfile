FROM debian:buster

COPY ./conf/main.cf /conf/
COPY ./conf/init.sh /conf/

RUN apt -y update && \
echo "postfix postfix/mailname string example.com" | debconf-set-selections && \
echo "postfix postfix/main_mailer_type string 'Internet Site'" | debconf-set-selections && \
apt install -y postfix && \
apt -y install rsyslog mailutils libsasl2-2 ca-certificates libsasl2-modules && \
apt -y upgrade

RUN rm /etc/postfix/main.cf && mv /conf/main.cf /etc/postfix/ && \
chmod 777 /conf/init.sh

CMD /conf/init.sh
