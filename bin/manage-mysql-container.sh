#!/bin/bash

function getContainerHealth {
    docker inspect --format "{{json .State.Health.Status }}" $1
}

function waitContainer {
    echo -e "\x1B[1;35mWaiting mysql container to be ready.\x1B[0m"
    while STATUS=$(getContainerHealth $1); [ ${STATUS} != "\"healthy\"" ]; do
	if [ ${STATUS} == "\"unhealthy\"" ]; then
	    echo "Failed!"
	    exit -1
	fi
	printf .
	lf=$'\n'
	sleep 0.5
    done
    printf "$lf"
}

function import_database {
    cat backup.sql | docker exec -i mysql /usr/bin/mysql -u root --password=root hackathon
}

function import {
    echo -e "\x1B[0;32mLaunching Mysql container.\x1B[0m"
    docker run -p 3306:3306 --name mysql -e MYSQL_ROOT_PASSWORD=root -e MYSQL_ROOT_HOST=172.17.0.1 -d mysql/mysql-server
    waitContainer mysql
    import_database
    docker exec -it mysql mysql -u root --password=root --execute "GRANT ALL ON *.* to root@'%' IDENTIFIED BY 'root';"
    echo -e "\x1B[0;32mMysql container is ready!\x1B[0m"
}

function help {
    echo -e "\x1B[0;32mMysql container manager: List of available commands\x1B[0m"
    echo -n -e "\n"

    echo -e "\x1B[33mUsage:\x1B[0m"
    echo -e "\t$(basename $0) [COMMAND]"

    echo -n -e "\n"
    echo -e "\x1B[33mContainer:\x1B[0m"
    echo -e "\x1B[0;32m  import: import latest mysql container with backup.sql database.\x1B[0m"
    echo -e "\x1B[0;32m  reimport: remove mysql container and rebuild latest mysql container with backup.sql database.\x1B[0m"

    echo -n -e "\n"
    echo -e "\x1B[33mDatabase:\x1B[0m"
    echo -e "\x1B[0;32m  import_database: import latest backup.sql database.\x1B[0m"
    echo -e "\x1B[0;32m  export_database: export database to backup.sql\x1B[0m"
}


if [ "$1" == "import" ]
then
    import

elif [ "$1" == "reimport" ]
then
    echo -e "\x1B[0;32mRemove running mysql container.\x1B[0m"
    docker rm mysql -f
    import

elif [ "$1" == "import_database" ]
then
    import_database

elif [ "$1" == "export_database" ]
then
    echo -e "\x1B[0;32mSaving mysql database.\x1B[0m"
    docker exec mysql /usr/bin/mysqldump -u root --password=root hackathon > backup.sql

elif [ "$1" == "help" ]
then
    help
else
    help
fi