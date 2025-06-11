cd "$(dirname "$0")"
source ../scripts.env
source ./sandbox.env

ssh -i $KEYPATH node@$HOST "fuser -k $PORT/tcp || true"
ssh -i $KEYPATH node@$HOST "cd ~/sandbox && npx nodemon index.js"