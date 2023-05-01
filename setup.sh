#!/usr/bin/env bash

INITIALIZED="INITIALIZED"
if [ ! -e /$INITIALIZED ]; then
    # Wait until mysql service running
    while ! nc -q 1 localhost 3306 </dev/null; do sleep 5; done

    touch /$INITIALIZED
    sh /init.sh
fi
