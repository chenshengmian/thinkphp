# Admin
基于ThinkPHP6.0+AdminLTE3.2的后台管理系统。TP5.1版本[点击这里](https://github.com/yupoxiong/BearAdmin/tree/thinkphp5.1), TP5.0版本[点击这里](https://github.com/yupoxiong/BearAdmin/tree/thinkphp5.0)


开发管理员创建成功.
用户名:develop_admin
密码:Jhsp2wmhE5
超级管理员创建成功.
用户名:super_admin
密码:gAzNXoIGNc

 [开发文档](https://www.kancloud.cn/codebear/admin_tp6) |
  [在线DEMO](https://demo.bearadmin.com/) |  [DEMO源码](https://github.com/yupoxiong/bearadmin-demo) 

## 安装步骤
### clone 项目到本地
- github地址
```
https://github.com/chenshengmian/thinkphp.git
```
### 安装项目依赖
在项目根目录运行扩展安装命令
```
composer install
```
### 创建数据库
使用navicat工具或命令创建数据库，注意编码必须为`utf8mb4`格式，例如：
~~~sql
create database `数据库名` default character set utf8mb4 collate utf8mb4_unicode_ci;
~~~
### 修改环境变量文件
更改 `.env` 文件内的数据库配置选项，参考如下：
```ini
[DATABASE]
TYPE=mysql
HOSTNAME=127.0.0.1
DATABASE=数据库名称
USERNAME=数据库用户名
PASSWORD=数据库密码
HOSTPORT=3306
CHARSET=utf8mb4
DEBUG=false
```
### 运行数据库迁移命令
```shell
php think migrate:run
``` 
**注意事项**

运行迁移命令的时候会生成2个用户，开发管理员（`develop_admin`），超级管理（`super_admin`），为了防止部分开发者安全意识薄弱，上线后不修改默认超级管理员账号密码，导致后台被入侵，所以当前版本后台密码会随机生成，在运行迁移命令的时候命令行中会显示生成的密码，请自行复制使用。

### 配置Web根目录URL重写
将`public`目录配置为web根目录，然后配置URL重写规则，具体可参考 [ThinkPHP6.0完全开发手册](https://www.kancloud.cn/manual/thinkphp6_0/1037488) URL访问模块

### 访问后台
访问`/admin`，默认开发管理员的账号为`develop_admin`，超级管理员的账号为`super_admin`，**对应密码查看迁移命令行输出内容**。

### 重置管理员密码
```shell
php think reset:admin_password
``` 

## 其他说明
本项目采用大量的开源代码，包括ThinkPHP，AdminLTE等等。

:stuck_out_tongue::bear::heart:
