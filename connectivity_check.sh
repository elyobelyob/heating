#!/bin/sh
# Demonstrated for fun by guys at ihaveapc.com
# Ping a standard website with output suppressed, if ping completes then display success else failure

echo "Checking internet connectivity..."
ping -c 5 192.168.1.112>>/dev/null

if [ $? -eq  0 ]
then
	echo "Able to reach internet, yay! "
	echo $(date)
else
	echo " Not able to check internet connectivity! "
	echo $(date)
	/usr/bin/php /usr/share/nginx/www/heating/control2drayton.php
fi
