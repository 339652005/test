<!-- <!DOCTYPE HTML>
<html>
<head> 
<meta charset="utf-8"> 
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
[if lt IE 9]>
<script type="text/javascript" src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
<script type="text/javascript" src="http://libs.useso.com/js/respond.js/1.4.2/respond.min.js"></script>
<script type="text/javascript" src="http://cdn.bootcss.com/css3pie/2.0beta1/PIE_IE678.js"></script>
<![endif]
<link type="text/css" rel="stylesheet" href="css/H-ui.css"/>
<link type="text/css" rel="stylesheet" href="css/H-ui.admin.css"/>
<link type="text/css" rel="stylesheet" href="font/font-awesome.min.css"/>
[if IE 7]>
<link href="http://www.bootcss.com/p/font-awesome/assets/css/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]
<title>修改密码</title>
</head> -->
@extends('layouts.admin')
@section('content')
<body>
<div class="pd-20">
        <!-- 修改失败的提示 -->
            @if(session('msg'))
                <p>{{session('msg')}}</p>
            @endif
  <form class="Huiform" action="{{url('seller/taocan/'.$taocan->taocan_id)}}" method="post">
    <table class="table">
      <tbody>
        <tr>

        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
         
      <tr>
            <th width="100" class="text-r"><span class="c-red">*</span> 套餐名称：</th>
            <td><input type="text" style="width:200px" class="input-text" value="{{ $taocan ->taocan_name }}" placeholder="请输入用户名" id="user-name" name="taocan_name" datatype="*2-16" nullmsg="分类名不能为空"></td>
          </tr>
<!-- 
          <tr>
            <th width="100" class="text-r"><span class="c-red">*</span> 套餐价格：</th>
            <td>￥ <input type="text" style="width:200px" class="input-text" value="{{-- $taocan ->taocan_price --}}" placeholder="请输入用户名" id="user-name" name="taocan_price" datatype="*2-16" nullmsg="分类名不能为空"> 元</td>
          </tr>    
           -->

           
        <tr>
          <th></th>
          
          <td><button class="btn btn-success radius" type="submit"><i class="icon-ok"></i> 确定</button></td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
<script type="text/javascript" src="http://cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script> 
<script type="text/javascript" src="js/H-ui.js"></script> 
<script type="text/javascript" src="js/H-ui.admin.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F080836300300be57b7f34f4b3e97d911' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
<!-- </html> -->
@endsection