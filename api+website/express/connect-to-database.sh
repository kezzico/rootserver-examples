cd "$(dirname "$0")"
source ../scripts.env
source $1

ssh -i $KEYPATH -t node@$HOST "mysql -u $DB_USER --password=$DB_PASSWORD -D $DB_SCHEMA"
