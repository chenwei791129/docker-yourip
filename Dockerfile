ARG BASE_IMAGE=php
ARG IMAGE_VERSION=8.2.6-alpine3.18
FROM ${BASE_IMAGE}:${IMAGE_VERSION}

WORKDIR /app
COPY yourip.php ./

EXPOSE 10080

CMD ["php", "-S", "0.0.0.0:10080", "yourip.php"]
