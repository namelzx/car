<?php /*a:3:{s:90:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/deal/insurancelist.html";i:1543146646;s:85:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/public/header.html";i:1543127366;s:85:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/public/footer.html";i:1541487880;}*/ ?>
<!--包含头部文件-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static//admin/hui/static/h-ui/css/H-ui.min.css" />
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="/static//admin/hui/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static//admin/hui/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static//admin/hui/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/static//admin/hui/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static//admin/hui/static/h-ui.admin/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/static//admin/css/common.css" />
  <link rel="stylesheet" type="text/css" href="/static//admin/uploadify/uploadify.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>汽车主后台</title>
<meta name="keywords" content="车之界主后台">
<meta name="description" content="车之界">
</head>
<style>
  .layui-upload-img{
    width: 80px;
    height: 80px;
  }
</style>
<div class="panel-body">
    <table class="table table-border table-bordered table-striped">
        <thead>
        <tr>

            <th>已选保险项</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><code><?php echo htmlentities($vo['name']); ?></code></td>
        </tr>
        <?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
        </tbody>
    </table>
</div>
<!--包含头部文件-->
<script type="text/javascript" src="/static//admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/static//admin/hui/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/static//admin/hui/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="/static//admin/js/common.js"></script>
<script type="text/javascript" src="/static//admin/uploadify/jquery.uploadify.min.js"></script>
<!--<script type="text/javascript" src="/static//admin/js/image.js"></script>-->
<script src="/static//admin/hui/lib/My97DatePicker/WdatePicker.js"></script>
