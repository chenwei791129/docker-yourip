#!/bin/bash
export TAG=$1
docker build --no-cache --rm -t awei/yourip .
docker tag awei/yourip:latest awei/yourip:${TAG}
docker push awei/yourip:latest
docker push awei/yourip:${TAG}