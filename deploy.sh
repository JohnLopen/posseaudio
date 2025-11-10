#!/bin/sh

rsync \
--exclude .git \
--exclude .env \
-og \
--chmod=Du=rwx,Dgo=rx,Fu=rw,Fog=r \
--verbose --recursive --update \
-e "ssh -i /Users/macmini4/Projects/mike_glenn/posseaudio/id_rsa" \
./ ec2-user@54.174.163.178:/home/ec2-user/posseaudio.com

# --exclude config/database.php \
# --exclude .htaccess \