#!/bin/bash

COMMAND=$1
DEV_HOST=local.tawdcs.net
PORT=$2
PUBLIC_DIR=public

if [[ $PORT == "" ]];
then
    PORT=8080
fi

if [[ $COMMAND == "" ]];
then
    COMMAND=dev
fi


cd $PUBLIC_DIR;

case "$1" in
        dev)
            echo -e "Launch developer server"
            echo -e "DONE"
            cd -
            echo -e "Starting dev server at http://$DEV_HOST:$PORT"
            ./wp-cli.phar server --host=$DEV_HOST --port=$PORT --path=./public 
            ;;
        status)
            ps aux | grep php | grep server
            ;;

        restart)
            echo "No implementation"
            ;;
        *)
            echo $"Usage: $0 {dev|status} {port} example: ./runserver dev"

esac

echo
exit 1
