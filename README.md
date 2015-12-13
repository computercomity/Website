这是计算机协会的官方主页仓库.

网站使用了 LazyPHP, Bootstrap

在 clone 及每次更改路由之后, 请手动

```
php _build.php
```
来生成静态路由.

## 目录说明
 - _lp: LazyPHP 的框架目录,不需要动.
 - assets: 存放所有 CSS, JS, Images, Fonts 等静态资源的地方, 同时也会是 CDN 缓存的来源
 - compiled: 编译的静态路由
 - config: 存放配置文件, 其中 database 已被隐藏, 需要手动将 database_sample 改名为 database.php
 - controller: 业务逻辑
 - docs: 自动生成的文档, 没有卵用……
 - template: 这是一个 Submodule, 存放的是设计好的前端页面
 - vendor: composer 生成的
 - view: 模板文件
   - web: 网页模板
     - main: 各页面的模板, controller_action 的命名方式
     - default.tpl.php: 默认模板
     - footer.tpl.php: 页脚
     - header.tpl.php: 导航栏
     - info.tpl.php: 还没启用, 用作错误页
