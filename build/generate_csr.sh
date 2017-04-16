#!/usr/bin/env bash

openssl genrsa -out tmp/rossedlin.co.uk.key 2048
openssl req -new -sha256 -key tmp/rossedlin.co.uk.key -out tmp/rossedlin.co.uk.csr