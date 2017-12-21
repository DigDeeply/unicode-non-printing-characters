echo "====start php demo===="
export SEARCH_NON_PRINTING=`awk 'BEGIN{str=""}{str=str"\42" $1"\42, "}END{print "["substr(str, 0, length(str)-2)"]"}' characters.txt`
envsubst '${SEARCH_NON_PRINTING}' < template/php.php > demo/php.php
echo "====run php demo===="
php -f demo/php.php
echo "====DONE===="
