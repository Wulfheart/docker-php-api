#!/bin/sh
docker run --rm \
  -v ${PWD}:/local openapitools/openapi-generator-cli generate \
  -i https://docs.docker.com/engine/api/v1.41.yaml \
  --additional-properties disallowAdditionalPropertiesIfNotPresent=false,invokerPackage=Wulfheart\\Docker \
  -g php \
  -o /local/