FROM debian:buster

ARG MAIL_USER
ARG MAIL_PASS
COPY ./conf/main.cf /conf/

RUN apt -y update && \
echo "postfix postfix/mailname string example.com" | debconf-set-selections && \
echo "postfix postfix/main_mailer_type string 'Internet Site'" | debconf-set-selections && \
apt install -y postfix && \
apt -y install rsyslog mailutils libsasl2-2 ca-certificates libsasl2-modules && \
apt -y upgrade

RUN rm /etc/postfix/main.cf && mv /conf/main.cf /etc/postfix/ && \
echo "[smtp.gmail.com]:587    ${MAIL_USER}:${MAIL_PASS}" > /etc/postfix/sasl_passwd && \
chmod 0400 /etc/postfix/sasl_passwd && \
postmap /etc/postfix/sasl_passwd

CMD service rsyslog restart && \
service postfix stop && cp /etc/resolv.conf /var/spool/postfix/etc/resolv.conf &&\
postfix start-fg
