#!/bin/bash

if [ $# -ne 1 ]; then
    echo "Usage: $0 [bit.ly URL]"
    exit 1
fi

curl -s -I $1 | grep "Location: " | cut -d" " -f2