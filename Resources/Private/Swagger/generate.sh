#!/usr/bin/env bash

rm -rf ././../../../Classes/Api/*
swagger-codegen generate -i swagger.json -l php --invoker-package Prosoft\\RecruitingApi\\Api --api-package Endpoints --model-package Dto
rsync -r ./SwaggerClient-php/lib/ ././../../../Classes/Api/
rm -rf ./.swagger-codegen/
rm -rf ./SwaggerClient-php/
rm -rf ./.swagger-codegen-ignore
