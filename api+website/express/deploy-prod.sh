cd "$(dirname "$0")"
source ../scripts.env

npx tsup

rsync -e "ssh -i $KEYPATH" \
    -avz ./dist/ package.json node@$HOST:~/prod \
    --exclude='node_modules/' \
    --exclude='.git/' \
    --exclude='*.log' \
    --exclude='*.env' \
    --exclude='.DS_Store'

scp -i $KEYPATH prod.env node@$HOST:~/prod/.env
ssh -i $KEYPATH node@$HOST 'cd ~/prod && npm install --omit=dev'
ssh -i $KEYPATH node@$HOST 'cd ~/prod && pm2 stop backend.prod'
ssh -i $KEYPATH node@$HOST 'cd ~/prod && pm2 start index.js --name backend.prod'
