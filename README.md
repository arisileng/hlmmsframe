﻿### HLFrame

为二次开发而生，让开发变得更简单。

### 前言

HLFrame项目创建于2017年9月10日，基于Yii2框架开发的应用开发引擎，正在慢慢成长中，目的是为了集成更多的基础功能，不在为相同的基础功能重复制造轮子，开箱即用，让开发变得更加简单。

### 特色

1. 只做基础底层内容，HLFrame不会在上面开发过多的业务内容，满足绝大多数的系统底层开发。
2. 多入口模式，多入口分为 backend(后台)、frontend(PC前端)， wechat(微信)，api(其他接口对接)， 不同的业务,不同的设备,进入不同的入口。
3. 重写机制，框架自带的控制器模型以及第三方的插件和yii2框架内的文件都可以被用户重写,该重写是通过Yii2的classMap机制实现的。
4. 升级最小化干扰， HLFrame可以通过composer进行核心功能的升级，用户只需要通过composer升级 即可。
5. 对接微信公众号，使用了一款优秀的微信非官方SDK Easywechat，系统内已集成了该SDK，调用方式会在HLFrame文档说明，也可直接看其SDK文档进入深入开发。
6. RBAC(权限)管理系统，RBAC和菜单功能的无缝对接，实现无权限的菜单不对用户显示，具体参考权限和菜单添加的规则文档。
7. 插件和模块机制，安装和卸载不会对原来的系统产生影响，具体可参考HLFrame插件模块使用文档。
8. 整合了第三方登录，目前有QQ、微信、微博、GitHub。
9. 整合了第三方支付，目前只有微信支付，后续会接入其它支付。
10. 框架模块支持小程序的开发。

### 官网



### Demo




### 问题反馈



### 特别鸣谢

感谢以下的项目,排名不分先后

Yii：http://www.yiiframework.com/

Bootstrap：http://getbootstrap.com

EasyWechat：https://easywechat.org/

### 版权信息

HLFrame遵循Apache2开源协议发布，并提供免费使用。

本项目包含的第三方源码和二进制文件之版权信息另行标注。

版权所有Copyright © 2017 by HLFrame 

All rights reserved。