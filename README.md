![TIM截图20170908145839.png](https://i.loli.net/2017/09/08/59b23fcc55cb3.png)
<!-- more -->
# 项目介绍
官网: http://lsuplus.top/

项目仓库: https://github.com/Robinson28years/lsuplusclub

emmmm,因为我们俱乐部第一版的官网比较难看，然后当初各功能耦合的太紧了，后期不好改动，所以在去年寒假的时候我就开始尝试重构了，结果因为寒假前半段时间分给了 python 和 机器学习，所以后来俱乐部官网的 2.0 版就重构到一半没继续下去了，然后上学期比赛又太多，所以一直没时间去完善他，结果就是 俱乐部官网 2.0 只把首页和论坛完成了。今年暑假听说 laravel 5.5 LTS 版要出，所以我是打算用 laravel 5.5 重构官网的。奈何。。。。官方跳票，说好的七月下旬发布，结果八月中旬还没发，我预感如果再不开工，可能这一版又只能重构一半。所以最终决定开工！用 laravel 5.5 dev版本，到时候再升级。历时17天，终于在9月1号凌晨发布了3.0版。

---
# 项目架构
## Laravel 5.5
采用这个版本是因为他是最新的长久支持版，官方维护这个版本两年。而且还加了蛮多的新功能的(虽然我好像没怎么用到).
## Vue 2.x
因为 Vue 是语义化版本号，所以就不用具体到后面的版本号了。用 Vue 是考虑到这个框架学起来比较简单，下届的同学也方便修改 ，而且自己也用这个框架开发了一些应用了，所以打算用它。
## RESTful API
后端开的接口基本都是 RESTful API 标准的，这样的统一接口机制方便前端的同学和移动端的同学开发(虽然现在这版前端是我在开发,但以后应该还会让其他同学再开发一版)。然后我也把接口文档都写了出来，方便以后的同学进行开发。
## 前后端分离
这样的话主要是和后端开发解耦，各司其职，后端只负责开接口，前端拿接口，然后开发页面，效率可以高不少。然后下一届的俱乐部同学如果觉得我做的页面难看，可以只开发前端,然后把我的替换掉就行。

---
# 项目坑点
## JWT
首先就是这个 JWT ,这次又好好缕了一下源码，大致的了解了各方法的实现方法。然后因为 laravel 5.5 太新了，所以 jwt 1.0@dev版装不了，然后我还是用了熟悉的稳定版。
大致就是中间件拦截，然后检查header里有没有带token信息。放这个token的话是登录之后放置。我设定2小时过期，一周内可刷新。所以我只要每次进首页的时候给他们刷新一下token就行了。除非他们一周没进首页。要不然就不用重新登录了。
然后用 jwt 这个方案也是为了方便以后开发移动端的同学，因为现在大多是用这个解决方案。
本来想用 laravel 自带的 oauth 扩展的，结果发现还是有差别的。
```php
public function handle($request, Closure $next)
{
    if (! $token = $this->auth->setRequest($request)->getToken()) {
//            return $this->respond('tymon.jwt.absent', 'token_not_provided', 400);
        return response()->json(['code'=>50013,'error' => 'token没提供']);
    }

    try {
        $user = $this->auth->authenticate($token);
    } catch (TokenExpiredException $e) {
//            return $this->respond('tymon.jwt.expired', 'token_expired', $e->getStatusCode(), [$e]);
        return response()->json(['code'=>50011,'error' => 'token过期.']);
    } catch (JWTException $e) {
//            return $this->respond('tymon.jwt.invalid', 'token_invalid', $e->getStatusCode(), [$e]);
        return response()->json(['code'=>50012,'error' => 'token无效']);
    }

    if (! $user) {
        return $this->respond('tymon.jwt.user_not_found', 'user_not_found', 404);
        return response()->json(['code'=>50014,'error' => '用户没找到']);
    }

    $this->events->fire('tymon.jwt.valid', $user);

    return $next($request);
}
```
引入了一个包，中间件的写法就是上面那样子。
## 其他坑点
大多是前端方面的，后端这里还是蛮好写的，😂后端开接口的时间和前端做页面的时间是 1 : 3。

---
# 页面展示
## 首页(除了题图)
![](http://osabfc0f3.bkt.clouddn.com/markdown-img-paste-20170908160847790.png)
![](http://osabfc0f3.bkt.clouddn.com/markdown-img-paste-20170908160917502.png)
## 登录注册
![](http://osabfc0f3.bkt.clouddn.com/markdown-img-paste-20170908161138433.png)
## 论坛
![](http://osabfc0f3.bkt.clouddn.com/markdown-img-paste-20170908161036407.png)
![](http://osabfc0f3.bkt.clouddn.com/markdown-img-paste-2017090816105539.png)
## 图书馆
![](http://osabfc0f3.bkt.clouddn.com/markdown-img-paste-20170908161210931.png)
![](http://osabfc0f3.bkt.clouddn.com/markdown-img-paste-20170908161223395.png)
## 活动
![](http://osabfc0f3.bkt.clouddn.com/markdown-img-paste-20170908161252344.png)
## 后台
![](http://osabfc0f3.bkt.clouddn.com/markdown-img-paste-20170908161417552.png)
# 项目历时
![](http://osabfc0f3.bkt.clouddn.com/markdown-img-paste-20170908161626114.png)

从2017年8月16日到2017年9月1日，17天时间，算是完整的重构了一遍，除了兴趣小组模块和一些错误返回码没补全，其他接口基本就成型了。

天天敲代码的日子，怎么说呢，充实，但也蛮累的，9月1号结束的时候我的背还很酸。
# 后记
暂时就写这么多了，到时候记起什么了再补点好了。
