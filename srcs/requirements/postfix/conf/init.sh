echo "[smtp.gmail.com]:587    ${MAIL_USER}:${MAIL_PASS}" > /etc/postfix/sasl_passwd
chmod 0400 /etc/postfix/sasl_passwd
postmap /etc/postfix/sasl_passwd
service rsyslog restart
service postfix restart
bash
