FROM docker.elastic.co/kibana/kibana:8.5.1

ARG KIBANA_SERVER

USER root

RUN apt update
RUN apt install -y bash
RUN apt install -y vim
RUN apt install -y gettext-base

COPY config/kibana.yml /tmp/config/kibana.yml

RUN envsubst < /tmp/config/kibana.yml > /usr/share/kibana/config/kibana.yml

USER kibana