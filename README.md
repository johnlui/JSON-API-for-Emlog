JSON API for Emlog
--

###强大的 JSON 格式的数据输出插件，为 Emlog 而生。

[下载地址](https://github.com/johnlui/JSON-API-for-Emlog/releases)

## API

所有 API 后面务必加上 `?token=koanfoiuh32789gf782bqwiubuyiqwgd`，该值在 `content/plugins/json_api/tinylara/config/routes.php` 中修改。

### 1.获取管理员信息

####*http://ooxx.com/content/plugins/json_api/tinylara/public/admin-info*

返回值：

```json
{
  "nickname": "John·Lui", 
  "photo": "http://blog.io/content/uploadfile/201402/thum-d1241391266636.jpg", 
  "email": "wenhanlv@gmail.com", 
  "description": "Nothing."
}
```

### 2.获取站点信息

####*http://ooxx.com/content/plugins/json_api/tinylara/public/site-info*

返回值：

```json
{
  "blogname": "岁寒", 
  "bloginfo": "岁寒，然后知松柏之后凋也！"
}
```

### 3.从第 0 篇到第 2 篇文章

####*http://ooxx.com/content/plugins/json_api/tinylara/public/articles/from/0/to/2*

返回值：

```json
[
  {
    "gid": 2,
    "title": "Welcome To John·Lui's Personal Blog",
    "date": 1323699410,
    "content": "<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:16px;\">面朝大海，春暖花开</span>",
    "excerpt": "<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:16px;\">面朝大海，春暖花开</span>",
    "alias": "",
    "author": 1,
    "sortid": 4,
    "type": "blog",
    "views": 2129,
    "comnum": 0,
    "attnum": 0,
    "top": "n",
    "sortop": "n",
    "hide": "n",
    "checked": "y",
    "allow_remark": "y",
    "password": "",
    "template": ""
  },
  {
    "gid": 3,
    "title": "告诉你C盘的每一个文件夹都是干嘛的（Win7版）",
    "date": 1313210374,
    "content": "<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">最近看到很多“告诉你C盘的每一个文件夹都是干嘛的”之类的日志，点进去一看，全是XP的！</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">XP已经落伍。如果我没记错的话，XP是微软公司2001年10月25号发布的，十年了啊同志们！</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">去年吧，戴尔出了第一款不支持XP的笔记本！这是创举！其实XP最弱的一点，是其对三核以上CPU支持的严重不足，还是容易卡死，Win7就可以自如地调动各个CPU干活。当然，Win7个人版有时候还是会卡的，比如本地大容量数据转移的时候，由于中断信号全部分配给CPU0，可能会导致CPU0资源耗尽电脑巨卡，而服务器系统2008R2就没有这个问题。</span><br />\r\n&nbsp;<span style=\"font-family:Microsoft YaHei;font-size:14px;\"> </span><span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">扯远了啊，下面马上列出Win7的C盘的各个文件夹。</span> <p><span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">1.PerfLogs</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">perfLogs是win7系统自动生成的日志信息，如磁盘扫描错误信息等，可以删掉但不建议删。那样反而会降低系统速度</span></p>\r\n <p><span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">2.Program Files</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">各种安装程序的栖身之所，里面有Internet Explorer，Microsoft Games等系统自带软件，也有WinRAR等自己安装的应用软件。</span></p>\r\n <p><span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">3.Program Files (x86)</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">如果你的系统是64位的，那C盘里还会有这个文件夹，这里面就是可以再64位系统下运行的32位软件，和Program Files一个性质。</span></p>\r\n <p><span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">4.ProgramData</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">这是个公用的被创建文件夹或文件存放的地方，这些文件夹或文件仅由创建者完整控制。众所周知，Windows是个多用户系统，每个用户的配置文件都存在这里。它在XP时代叫Documents and Settings,Vista和7中叫用户（Users）和ProgramData</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">我不像网上说的那样最好不要删除，我直接说：不要动！那是你使用软件的记录，存各种配置文件的地方，别动就行了。</span></p>\r\n <p><span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">5.Temp</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">临时文件所在之处，里面可以清空，但是你试试，能做到吗？在显示隐藏文件，显示系统文件的情况下，里面还是只有一个TXT。</span></p>\r\n <p><span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">6.Windows</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">这个一般人一看就明白，Windows系统文件所在之处，勿动。</span></p>\r\n <p><span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">7.用户</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">里面通常有Default、UpdatsUser、公用还有一个以你的用户名命名的文件夹。</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">都是用户配置文件，勿动。</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">一般我见到的联想的本用户名都是Lenovo，专卖店严格执行联想总部的命令，他卖出的所有的电脑都是Lenovo-PC。其他牌子的类推之，一般都是这样。</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">不过像我自己做的自己装的这个系统，用户名当然叫JohnLv了！</span></p>\r\n <p><span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">8.其它</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">有的电脑会有Downloads，TDDownloads等，全部为下载目录，建议把里面的文件存到其他盘，删之！</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">有的还会有Nvidia，那是安装N卡驱动时释放文件的文件夹，果断删之！</span></p>\r\n <p align=\"right\"><span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">——吕文翰_</span><span style=\"color:#005eac;\"><span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">JohnLV @USTB</span></span><br />\r\n<span style=\"color:#005eac;\"><span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">lvwenhan.com</span></span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">2011年8月13日12:27:45</span></p>",
    "excerpt": "<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">最近看到很多“告诉你C盘的每一个文件夹都是干嘛的”之类的日志，点进去一看，全是XP的！</span><br />\r\n<span style=\"font-family:Microsoft YaHei;color:#000000;font-size:14px;\">XP已经落伍。如果我没记错的话，XP是微软公司2001年10月25号发布的，十年了啊同志们！</span><br />\r\n<span style=\"font-family:Microsoft YaHei;font-size:14px;\">...</span>",
    "alias": "",
    "author": 1,
    "sortid": 4,
    "type": "blog",
    "views": 2304,
    "comnum": 0,
    "attnum": 0,
    "top": "n",
    "sortop": "n",
    "hide": "n",
    "checked": "y",
    "allow_remark": "y",
    "password": "",
    "template": ""
  }
]
```

### 4. 第 2 篇文章

####*http://ooxx.com/content/plugins/json_api/tinylara/public/articles/2 *

返回值：

```json
{
  "gid": 2,
  "title": "Welcome To John·Lui's Personal Blog",
  "date": 1323699410,
  "content": "面朝大海，春暖花开</span>",
  "excerpt": "面朝大海，春暖花开</span>",
  "alias": "",
  "author": 1,
  "sortid": 4,
  "type": "blog",
  "views": 2129,
  "comnum": 0,
  "attnum": 0,
  "top": "n",
  "sortop": "n",
  "hide": "n",
  "checked": "y",
  "allow_remark": "y",
  "password": "",
  "template": ""
}
```
