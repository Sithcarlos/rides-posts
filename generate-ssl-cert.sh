#!/bin/sh
#Se agrega modificacion para causar que el certificado sea compatible con el api Telegram Bot: https://core.telegram.org/bots/self-signed
ME=$(basename $0)
KEY=/etc/nginx/certs/server.key
CERT=/etc/nginx/certs/server.pem
#ingresar la ip del servidor o en su defecto elegir localhost
#CN=$SSL_DOMAIN
#SAN=$SSL_ALT_NAME
#nuevos parametros
CN=
PAIS=
ESTADO=
CIUDAD=
EMPRESA=

if [ -f $KEY ] && [ -f $CERT ]; then
  echo "$ME: El certificado del servidor ya existe, no se hace algo."
else
  openssl req -newkey rsa:2048 -sha256 -nodes -keyout $KEY \
    -x509 -days 365 -out $CERT -subj "/C=$PAIS/ST=$ESTADO/L=$CIUDAD/O=$EMPRESA/CN=$CN"
  #openssl req -x509 -newkey rsa:2048 -keyout $KEY \
  # -out $CERT -sha256 -days 3650 -nodes -subj "/CN=$CN" -addext "subjectAltName = $SAN"
  echo "$ME: Se ha generado el certificado del servidor."
fi

