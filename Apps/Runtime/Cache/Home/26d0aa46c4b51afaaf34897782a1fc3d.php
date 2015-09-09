<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>index</title>
<link rel="stylesheet" type="text/css" href="__ROOT__/Public/css/css.css" />
  <script src="__ROOT__/Public/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="__ROOT__/Public/js/main.js" type="text/javascript"></script>
</head>
<body id="body">
<div id="head" class="layout"></div>
<div id="bodydiv" class="layout">
<div id="left" class="layout"><ul> <div id="div1" class="menu">
    <li class="main_li" ><a href="<?php echo U('home/ctsm/index');?>">传统算命</a></li>
            <div id="div_li1">
       <li class="second_li"><a  href="<?php echo U('home/ctsm/scbz');?>">生辰八字</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/bzcs');?>">八字测算</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/rglm');?>">日干论命</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/cglm');?>"> 称骨论命</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xmcs');?>">姓名测试</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xmpd');?>">姓命配对</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/sbwr');?>">上辈为人</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xsqy');?>">姓氏起源</a></li>
   </div>
   </div>
</ul>
<ul>
   <div id="div2"  class="menu">
    <li class="main_li"><a href="<?php echo U('home/sxxzxx/index');?>"> 生肖/星座/血型</a></li>
   <div id="div_li2">
       <li class="second_li">星座保健</li>
       <li class="second_li">星座EQ</li>
       <li class="second_li">星座IQ</li>
       <li class="second_li">星座名人</li>
       <li class="second_li">星座失败教训</li>
       <li class="second_li">星座实力</li>
       <li class="second_li">星座5大建议</li>
       <li class="second_li">星座运程</li>
      </div>
      </div>
</ul>
<ul>
       <div id="div3"  class="menu">
    <li class="main_li">抽签/测字/解梦</li>
    <div id="div_li3" >
       <li class="second_li">关帝神签</li>
       <li class="second_li">观音灵签</li>
       <li class="second_li">黄大仙灵签</li>
       <li class="second_li">吕祖灵签</li>
       <li class="second_li">天后灵签</li>
       <li class="second_li">诸葛神算</li>
       <li class="second_li">周公解梦</li>
      </div>
          </div>
</ul>
<ul>
   <div class="menu">
    <li class="main_li">婚姻系数</li>
      </div>
</ul>
<ul>
       <div id="div4"  class="menu" >
    <li class="main_li">恋爱指南</li>
   <div id="div_li4">
       <li class="second_li">星座组合</li>
       <li class="second_li">姓名配对</li>
       <li class="second_li">QQ缘分</li>
       <li class="second_li">生肖血型</li>
       <li class="second_li">姓名五格</li>
      </div>
          </div>
</ul>
<ul>
   <div id="div5"  class="menu" >
    <li class="main_li">民俗预测</li>
   <div id="div_li5">
       <li class="second_li">耳鸣</li>
       <li class="second_li">面热</li>
       <li class="second_li">面热</li>
       <li class="second_li">眼跳</li>
       <li class="second_li">心惊</li>
       <li class="second_li">黄道吉日</li>
       <li class="second_li">QQ/手机号码吉凶</li>
       <li class="second_li" >三世财运</li>
       <li class="second_li">生男生女</li>
       <li class="second_li">指纹</li>
      </div>
      </div>
  </ul></div>
<div id="mid" class="layout">
<script language="javascript">
    <!--
    function checkname()
    {
        while(document.theform.xing.value.indexOf(" ")!=-1){
            document.theform.xing.value=document.theform.xing.value.replace(" ","");
        }
        while(document.theform.xing.value.indexOf("	")!=-1){
            document.theform.xing.value=document.theform.xing.value.replace("	","");
        }
        if (document.theform.xing.value.length < 1 || document.theform.xing.value.length>10)
        {
            alert("错误：姓氏应在1-10个汉字之间！");
            document.theform.xing.focus();
            return (false);
        }
    }
    //-->
</script><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>

    <form method="POST" action="" onSubmit="return checkname();" name="theform"><tr>
        <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top>请输入姓氏：
            <input maxLength="10" type="text" name="xing" size="16" value=<?php echo ($sxing); ?> > <input type="submit" value="开始搜索" style="cursor:hand;" /><input type="hidden" name="act" value="ok" />
        </TD>
    </tr></form>
    </TBODY>
</TABLE><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>
        <TD width="33%" vAlign=top class=ttd style="PADDING-BOTTOM: 8px">姓氏：&nbsp;<strong><?php echo ($sxing); ?></strong></TD>
        <TD width="33%" vAlign=top class=ttd style="PADDING-BOTTOM: 8px">繁体：&nbsp;<strong><?php echo (gbtobig($sxing)); ?></strong></TD>
        <TD class=ttd style="PADDING-BOTTOM: 8px" vAlign=top>拼音：&nbsp;<strong><?php echo (c($sxing)); ?></strong></TD>
    </tr>
    <tr>
        <TD colspan="3" vAlign=top class=new style="PADDING-BOTTOM: 8px"><strong>详细资料:</strong></TD>
    </tr> </tr>
    <tr>
        <TD colspan="3" vAlign=top class=new style="PADDING-BOTTOM: 8px">
            <?php if($intro != ''): echo ($intro); else: ?>系统没有找到此姓的资料！<?php endif; ?></TD>
    </tr>
    </TBODY>
</TABLE></div>
<div id="right" class="layout"></div>
</div>
<div id="foot" class="layout"></div>
</body>
</html>