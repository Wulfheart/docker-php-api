#!/bin/sh
docker run --rm \
  -v ${PWD}:/local openapitools/openapi-generator-cli generate \
  -i https://docs.docker.com/engine/api/v1.41.yaml \
  --user \"$(id -u):$(id -g)\" \
  --additional-properties disallowAdditionalPropertiesIfNotPresent=false,invokerPackage=Wulfheart\\docker-api
  -g php \
  -o /local/