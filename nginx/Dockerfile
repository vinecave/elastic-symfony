FROM nginx:1.23

ARG NGINX_SYMFONY_SERVER_NAME
ARG KIBANA_PORT
ARG KIBANA_DOMAIN

LABEL maintainer="Vincent Composieux <vincent.composieux@gmail.com>"

RUN mkdir -p /etc/nginx/templates \
    mkdir -p /tmp/nginx

USER root

RUN apt update
RUN apt install -y bash
RUN apt install -y vim

COPY nginx.conf /etc/nginx/
COPY templates/* /etc/nginx/templates/
COPY html/index.html.template /tmp/nginx/

RUN envsubst < /tmp/nginx/index.html.template > /usr/share/nginx/html/index.html; \
    rm -fR /tmp/nginx

CMD ["nginx"]

EXPOSE 80
EXPOSE 443
