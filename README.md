基于FastAdmin开发的CMS管理系统
# 学习笔记
## 安装
git克隆FastAdmin,进入目录

下载前端插件依赖包 bower install
> 如果没安装bower需要先安装，
> npm install bower -g



下载PHP依赖包
composer install

> 如果遇到问题：
overtrue/wechat 4.2.11 requires ext-fileinfo * -> the requested PHP extension fileinfo is missing from your system.
因为缺少 php_fileinfo 这个扩展，打开即可
