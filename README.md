# playbook-nginx-apache

## about

nginxをreverse proxyにして apache(php)*2 でベンチマーク取ったりするためのサンプル的な物です。

## init

    vagrant up
    vagrant ssh manager
    $ sudo rpm -ivh http://ftp.riken.jp/Linux/fedora/epel/6/i386/epel-release-6-8.noarch.rpm
    $ sudo yum install ansible
    $ cd /vagrant/ansible
    $ ansible -si ./hosts ./playbook.yml


## network

    manager 192.168.33.20
    nginx 192.168.33.25
        web1 192.168.33.21
        web2 192.168.33.22

## web1,2

 * installed httpd2, php5.3, gmond
 * http://web[12]/hostname.php
 * http://web[12]/sleep.php
   * /sleep.php?n=2 2 sec sleep
   * /sleep.php?n=4&r=1 1~4sec random sleep

## manager

 * installed gmetad

## nginx

 * installed nginx & reverse proxy to web server setting
