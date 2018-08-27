FROM nginx:alpine

ADD ./makeconfig.sh makeconfig.sh

RUN chmod +x /makeconfig.sh

ENTRYPOINT sh /makeconfig.sh \
        && nginx -g 'daemon off;'
