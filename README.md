# ansible 檔案命名規則
https://blog.pichuang.com.tw/20180622-suggestions_to_improve_your_ansible_playbook/

[-v] 吃本地設定檔案(ansible.cfg)
ansible-playbook -i hosts -v playbooks/[xxx.yml]

# create ec2 use ansible (https://www.youtube.com/watch?v=gEX1HbM4KSM)
## auth .boto(http://docs.pythonboto.org/en/latest/boto_config_tut.html)

# Centos 8
## install nginx (https://linuxize.com/post/how-to-install-nginx-on-centos-8/)
```
yum install nginx
systemctl enable nginx
systemctl start nginx

systemctl status nginx
```

## php version 7.2.11 on centos 8
```
dnf info php
```

## nginx laravel setting
https://medium.com/@iven00000000/%E6%96%BCcentos7%E5%AE%89%E8%A3%9D-nginx-php7-php-fpm-laravel5-6-df8631681acf

## composer 
https://symfonycasts.com/screencast/ansible/ansible-composer

## mysql password
https://github.com/bertvv/ansible-role-mariadb/blob/master/tasks/root-password.yml

# demo step
- create ec2 api
- change internal ip on nginx of config on web server
- create ec2 web
- setting ec2 api website db connection on web server 
    create database laravel default character set utf8mb4 collate utf8mb4_unicode_ci;
    
    select * from mysql.user\G;
    
    GRANT ALL PRIVILEGES ON laravel.* TO 'root'@'localhost';
    flush privileges;

    change .env