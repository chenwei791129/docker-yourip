ARG BASE_IMAGE=php
ARG IMAGE_VERSION=8.1.16-alpine3.17
FROM ${BASE_IMAGE}:${IMAGE_VERSION}

WORKDIR /app
COPY yourip.php ./

EXPOSE 10080

CMD ["php", "-S", "0.0.0.0:10080", "yourip.php"]
