FROM debian:buster

COPY ./conf/vsftpd.conf /

RUN apt -y update && \
	apt -y install vsftpd ; \
	apt -y upgrade

EXPOSE 20 21 40001

CMD adduser --disabled-password --gecos "" ${FTP_USER} && \
echo "${FTP_USER}:${FTP_PASS}" | chpasswd && \
echo ${FTP_USER} | tee -a /etc/vsftpd.userlist && \
rm /etc/vsftpd.conf && mv /vsftpd.conf /etc/ && \
mkdir -p /var/run/vsftpd/empty && \
/usr/sbin/vsftpd /etc/vsftpd.conf
