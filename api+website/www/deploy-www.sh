cd "$(dirname "$0")"
source ../scripts.env

rsync \
    -e "ssh -i $KEYPATH" \
    -avz ./ node@$HOST:/var/www/html \
    --exclude='deploy-www.sh'

