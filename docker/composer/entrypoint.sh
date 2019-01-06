#!/usr/bin/env bash

mkdir -p $HOME/.ssh/
sshkey=`ssh-keyscan github.com 2> /dev/null`
echo $sshkey >> $HOME/.ssh/known_hosts

exec /docker-entrypoint.sh "$@"