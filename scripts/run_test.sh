# @Author: GeekWho
# @Date:   2018-12-03 01:37:43
# @Last Modified by:   GeekWho
# @Last Modified time: 2018-12-05 22:21:54
DIR=$(cd "$(dirname "$0")";cd ..; pwd)
ROOT=$(cd "$(dirname "$DIR")";cd ..; pwd)
param1=$1
debug=""

phpunit="$DIR/vendor/bin/phpunit"

if [[ ! -f "$phpunit" ]]; then
    phpunit=$(which "phpunit")
fi
if [ -z $phpunit ]; then
    echo '请先安装phpunit'
    exit
fi
# use --debug 展示详细日志
# 使用指定 目录或者文件，就不会读取xml文件配置了
$phpunit -c $DIR/tests/phpunit.xml
