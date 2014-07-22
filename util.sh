#!/bin/bash
function server-start
{
    php -S localhost:8000 -t web
}

function init
{
    composer install --prefer-source
}

type $1 &>/dev/null && $1 $2 || echo "command not found"
