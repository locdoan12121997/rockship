#!/usr/bin/env bash

aws s3 sync 'build/' 's3://rockship.co/' --acl public-read --expires 2592000

aws cloudfront create-invalidation --distribution-id 'EWZX9NT2BRLQX' --paths '/*'