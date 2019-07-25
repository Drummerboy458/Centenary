if  ! [ -x "$(command -v php)" ]; then
  echo 'Error: php is not installed.' >&2
  exit 1
else
   echo 'php is avaliable.'>&2
fi

if ! [ -x "$(command -v mysql)" ]; then
  echo 'Error: mysql is not installed.' >&2
  exit 1
else
  echo 'mysql is avaliable.'>&2
fi

user=""
password=""
email=""

if ! [ -n "$1" ]; then
  echo  'Error: please enter your mysql user.' >&2
  exit 1
else
  user=$1
  echo mysql user:  $user
fi

if ! [ -n "$2" ]; then
  echo  'Error: please enter your mysql password.' >&2
  exit 1
else
  password=$2
  echo mysql password:  $password
fi

if ! [ -n "$3" ]; then
  echo  'Error: please enter your email.' >&2
  exit 1
else
  email=$3
  echo your email:  $email
fi


MYDIR=`dirname $0`
dir=$MYDIR/data/install.sql

cat $dir | mysql -u ${user} -p"${password}"

if [ $? -ne 0 ]; then
  exit 1
else
  echo 'import db celebration' >&2
fi

php init
echo 'init yii2'

echo 'configure main-local.php'
(
cat << EOF
<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=celebration',
            'username' => '${user}',
            'password' => '${password}',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => false,
            'transport' => [ 
                'class' => 'Swift_SmtpTransport', 
                'host' => 'smtp.163.com', 
                'username' => 'lxm666nk@163.com', 
                'password' => '89243098li', 
                'port' => '25', 
                'encryption' => 'tls', 
            ], 
            'messageConfig'=>[
                'charset'=>'UTF-8',
                'from'=>['lxm666nk@163.com'=>'nk100']
            ],
        ],
    ],
];
EOF
) > $MYDIR/common/config/main-local.php


# mail params
(
cat << EOF
<?php
return [
    'adminEmail' => '${email}',
    'supportEmail' => '${email}',
    'user.passwordResetTokenExpire' => 3600,
];
EOF
) > $MYDIR/common/config/params.php


echo 'configure common/config/params.php for email'