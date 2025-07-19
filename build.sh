#!/bin/bash

set -e

export TAG=$1
podman rmi awei/yourip || true
podman buildx build --no-cache --rm -t awei/yourip .
