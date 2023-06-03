#!/bin/bash
export TAG=$1
podman build --no-cache --rm -t awei/yourip .
podman tag awei/yourip:latest awei/yourip:${TAG}
podman push awei/yourip:latest
podman push awei/yourip:${TAG}
