#!/bin/bash

set -e

export TAG=$1

if [ -z "$TAG" ]; then
  TAG="latest"
  echo "No tag provided, using 'latest'."
fi

podman rmi awei/yourip || true
podman buildx build --no-cache --rm -t awei/yourip:${TAG} .
trivy image --exit-on-eol 1 --exit-code 1 awei/yourip:${TAG}
