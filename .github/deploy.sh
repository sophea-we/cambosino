#!/bin/bash

REPO_DIR="/home/admin/web/cambosino.com/public_html"

if [ -d "$REPO_DIR/.git" ]; then
    echo "Pulling changes..."
    cd $REPO_DIR && git pull origin main --rebase
else
    echo "Clone repository"
    cd ${REPO_DIR} && git clone git@github.com:sophea-we/wordpress-ci-cd.git .
fi
