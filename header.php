<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>


<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

<!-- MDUI CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"
  integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw"
  crossorigin="anonymous"
/>

<!-- MDUI JavaScript -->
<script
  src="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/js/mdui.min.js"
  integrity="sha384-gCMZcshYKOGRX9r6wbDrvF+TcCCswSHFucUzUPwka+Gr+uHgjlYvkABr95TCOz3A"
  crossorigin="anonymous"
>
</script>






    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="//cdnjscn.b0.upaiyun.com/libs/normalize/2.1.3/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body class="mdui-drawer-body-right">
  <!-- 顶栏 -->
  <div class="mdui-appbar">
  <div class="mdui-toolbar mdui-color-theme">
    <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#left-drawer', swipe: true}"><i class="mdui-icon material-icons">menu</i></span>
    <a href="<?php $this->options->siteUrl(); ?>" class="mdui-typo-headline"><?php $this->options->title() ?></a>


    
    <div class="mdui-toolbar-spacer"></div>

<span class="mdui-btn mdui-btn-icon"><a href="https://www.dnxrzl.com/index.php/18.html"><i class="mdui-icon material-icons">sms</i></a></span>


    <!-- 搜索 -->
    <div class="mdui-textfield mdui-textfield-expandable mdui-float-right">
  <button class="mdui-textfield-icon mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">search</i></button>

<form method="post" action="">
  <input type="text" name="s" class="text mdui-textfield-input" size="32" />
</form>

  <button class="mdui-textfield-close mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">close</i></button>
   </div>
  </div>
</div>
<!-- 抽屉 -->
<div class="mdui-drawer" id="left-drawer">

<div class="">
  <div class="mdui-card-media">
    <img src="<?php $this->options->tui() ?>"/>
    <div class="mdui-card-media-covered mdui-card-media-covered-transparent">
      <div class="mdui-card-primary">
        <div class="mdui-card-primary-title"><?php $this->options->p() ?></div>
        <div class="mdui-card-primary-subtitle"><?php $this->options->description() ?></div>
      </div>
    </div>
  </div>
  
</div>


<ul class="clearfix mdui-list" mdui-collapse="{accordion: true}" id="nav_menu">
    <a href="<?php $this->options->siteUrl(); ?>"><li class="mdui-list-item mdui-ripple">首页</li></a>

    <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<a href="{permalink}"><li class="mdui-list-item mdui-ripple">{title}</li></a>'); ?>


<li class="mdui-divider"></li><!-- 抽屉分隔 -->    

<li class="mdui-collapse-item">
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
      <!-- 可在这加列表图标 -->    
      <div class="mdui-list-item-content">按月归档</div>
      <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
    </div>
    <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
               ->parse('<a href="{permalink}"><li class="mdui-list-item mdui-ripple">{date}</li></a>'); ?>
      
    </ul>
  </li>

</ul><!-- 第一个ul -->    


</div><!-- 抽屉注释下 -->    









<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->



<div id="body">
    <div class="container">
        <div class="row">

    
    
