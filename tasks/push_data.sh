#!/bin/bash

# Move to the data directory
cd public/assets/data/

# Determine where to push
if [ "$1" == 'stage' ]; then
    bucket='dev.apps.statesman.com'
elif [ "$1" == 'prod' ]; then
    bucket='apps.statesman.com'
else
    echo 'Specify stage or prod';
    cd ../../../
    exit 1
fi

# Run the push s3-parallel-put command with $bucket variable
../../../s3-parallel-put/s3-parallel-put --bucket=$bucket \
--bucket_region=us-west-2 --prefix=news/tx-school-accountability-ratings/assets/data/ \
--header="Cache-control:max-age=20" --insecure --grant=public-read .
