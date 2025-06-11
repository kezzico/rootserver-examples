cd "$(dirname "$0")"
source ../scripts.env

npx tsup

rsync -e "ssh -i $KEYPATH" \
    -avz ./dist/ ./src/keys/ package.json node@$HOST:~/sandbox \
    --exclude='node_modules/' \
    --exclude='.git/' \
    --exclude='*.log' \
    --exclude='*.env' \
    --exclude='.DS_Store'

ssh -i $KEYPATH node@$HOST "cd sandbox && npm install"
scp -i $KEYPATH sandbox.env node@$HOST:~/sandbox/.env
