<?php /*a:3:{s:87:"/Users/jon/Documents/项目汇总/车自主/application/index/view/examcar/usedcar.html";i:1543075383;s:82:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/css.html";i:1541004298;s:81:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/js.html";i:1541081189;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen"/>
    <meta charset="UTF-8">
    
<!--style-->
<link href="/static/index/css/font_138813_d8pljrpjjz6.css?v=1.2.25.51" rel="stylesheet" type="text/css" />
<link href="/static/index/css/jfshop.css?v=1.2.25.51" rel="stylesheet" type="text/css" />
<link href="/static/index/css/yy.base.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/wap_reset.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/wap_common.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/wap_main.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/popup.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/select_car.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/yy.ui.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/bp.css?v=3" rel="stylesheet" type="text/css" />
<link href="/static/index/css/banpen.css?v=2" rel="stylesheet" type="text/css" />

<link href="/static/index/vant/index.css" rel="stylesheet" type="text/css" />
<style>
    [v-clock] { display: none; }
    .ms-controller{
        visibility: visible;
    }
</style>
    <link rel="stylesheet" href="/static/index/css/icheck-bootstrap.css">
</head>
<body>

<div class="content" id="app">
    <div>
    </div>
    <div class="block"><!--each873752311436:start-->
        <div data-include-loaded="loaded" data-include-rendered="rendered"><!--ms-include-->
            <div class="block-content" sign="bd_usedcar_index" avalonctrl="bd_usedcar_index">
                <!--
                    作者：894468157@qq.com
                    时间：2016-10-12
                    描述：二手车评估
                -->
                <div class="usedcarin">
                    <!--header-->
                    <div class="row">
                        <div class="block-header">
                            <div class="top">
                                <div class="top-l">
                                    <a class="top-l-btn"><span><i
                                            class="iconfont icon-arrow-left"></i>&nbsp;返回</span></a>
                                </div>
                                <div class="top-c">
                                    二手车估价
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--header end-->
                    <div class="mains">

                        <div class="title relative border-t">
                            <div class="absolute-l"><i class="iconfont icon-chexing"></i> 当前车型：</div>
                            <div class="right relative">
                                <div class=" chexing">
                                    <div class="chexingww">{{temp.car_name}}</div>
                                </div>
                                <a href="<?php echo url('index/examcar/choose'); ?>">
                                    <div class="absolute-r bg_white">
                                        <i class="iconfont icon-svg27"></i> 更换
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--ms-if-->
                        <div class="title relative border-t">
                            <div class="absolute-l"><i class="iconfont icon-licheng1"></i> 行驶里程：</div>
                            <div class="right relative">
                                <input type="tel" v-model="temp.mileage" placeholder="请填写车辆行驶公里数" maxlength="6">
                                <div class="absolute-r">
                                    公里
                                </div>
                            </div>
                        </div>
                        <div class="title relative border-t">
                            <div class="absolute-l"><i class="iconfont icon-icon"></i> 变速箱：</div>
                            <div class="right relative">
                                <select v-model="temp.transmission" class="co333">
                                    <option value="">请选择变速箱</option>
                                    <option value="自动">自动</option>
                                    <option value="手动">手动</option>

                                </select>
                            </div>
                        </div>
                        <div class="title relative border-t">
                            <div class="absolute-l"><i class="iconfont icon-icon"></i> 车身颜色：</div>
                            <div class="right relative">
                                <select v-model="temp.color" class="co333">
                                    <option value="">请选择车身颜色</option>
                                    <option value="黑色">黑色</option>
                                    <option value="白色">白色</option>
                                    <option value="银色">银色</option>
                                    <option value="红色">红色</option>
                                    <option value="黄色">黄色</option>
                                    <option value="香槟色">香槟色</option>
                                    <option value="绿色">绿色</option>
                                    <option value="藏青色">藏青色</option>
                                </select>
                            </div>
                        </div>
                        <div class="title relative border-t">
                            <div class="absolute-l"><i class="iconfont icon-ershouchegujia"></i> 评估机构：</div>
                            <div class="right">
                                <select v-model="temp.institutions" id="" class="co333">
                                    <option value="">请选择评估机构</option>
                                    <option value="龙城好车">龙城好车</option>
                                </select>
                            </div>

                        </div>
                        <div class="title relative border-t">
                            <div class="absolute-l"><i class="iconfont icon-yonghu"></i> 预约用户：</div>
                            <div class="right relative">
                                <input type="text" v-model="temp.name" placeholder="请输入联系人姓名" maxlength="5">
                                <div class="absolute-r">
                                    先生/女士
                                </div>
                            </div>
                        </div>
                        <div class="title relative border-t">
                            <div class="absolute-l"><i class="iconfont icon-contact"></i> 联系方式：</div>
                            <!--ms-if-->
                            <div class="right relative">
                                <input type="tel" v-model="temp.phone" placeholder="请输入手机号码" maxlength="11">

                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <a @click="PostDataAdd">
                        <div class="footerbtn">
                            预约评估
                        </div>
                    </a>
                </div>
                <div style="height:20px;"></div>
            </div>

        </div>
    </div>
</div>
</body>

<script src="/static/index/js/jquery.min.js"></script>

<script src="/static/index/vant/vue.min.js"></script>
<script src="/static/index/vant/axios.min.js"></script>
<script src="/static/index/vant/vant.min.js"></script>

<script src="/static/index/common.js"></script>

<script>
    var app = new Vue({

        el: "#app",
        data() {
            return {
                temp: {
                    car_name: getCookie('usedcar_name'),//汽车名称
                    mileage: undefined,//行驶里程
                    transmission: "",//变速箱
                    color: "",//车身颜色
                    institutions: "",//评估机构
                    name: "",//评估用户
                    phone: "",//联系电话
                }
            }
        },
        created() {
            console.log(getCookie('usedcar_name'));
        },
        methods: {
            PostDataAdd() {
                var data = this.temp;
                var _this = this;
                if (data.car_name.length < 1 || data.mileage == undefined || data.transmission.length < 1 || data.color.length < 1 || data.institutions.length < 1 || data.name.length < 1 || data.phone.length < 1) {
                    _this.$toast('请检查是否填写相关信息');
                    return false;
                }
                axios.post('/index/examcar/PostUsedcarByData',data).then(res=>{
                    console.log(res)
                    _this.$toast(res.data.msg);
                })
            }
        }
    })
</script>
</html>