FROM httpd:alpine3.15

RUN apk update
RUN apk install libmarkdown2-dev apache2-dev

WORKDIR /usr/local/apache2
COPY demo.apache.conf /usr/local/apache2/conf/demo.apache.conf
RUN echo "Include /usr/local/apache2/conf/demo.apache.conf" \
>> /usr/local/apache2/conf/httpd.conf
