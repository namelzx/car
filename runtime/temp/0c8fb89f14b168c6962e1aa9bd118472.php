<?php /*a:3:{s:88:"/Users/jon/Documents/项目汇总/车自主/application/index/view/maintenance/shop.html";i:1542806105;s:82:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/css.html";i:1541004298;s:81:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/js.html";i:1541081189;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0050)https://m.chezizhu.com/main.htm#/apot/services.htm -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="renderer" content="webkit">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="chezizhu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>保养下单</title>

    
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

    
<script src="/static/index/js/jquery.min.js"></script>

<script src="/static/index/vant/vue.min.js"></script>
<script src="/static/index/vant/axios.min.js"></script>
<script src="/static/index/vant/vant.min.js"></script>

<script src="/static/index/common.js"></script>

    <link rel="stylesheet" href="/static/index/css/icheck-bootstrap.css">


    <style>
        .o-title-box {
            font-size: 1.6rem;
            background-color: #FFF;
            overflow: hidden;
        }
        .btn-noselect {
            background-image: url(/static/index/images/btn-circle.png);
        }

        [class*="icheck-"] {
            min-height: 22px;
            margin-top: 12px !important;
            margin-bottom: 6px !important;
            padding-left: 12px;
            width: 9%;
            float: left;
        }

        .o-footer-l {
            font-size: 20px;
            overflow: hidden;
            position: relative;
            padding: 0 10px;
            margin-right: 120px;
            height: 52px;
            line-height: 52px;
        }
    </style>
</head>

<body class="" avalonctrl="czz">
<div>
    <div class="header"></div>
    <div class="content" id="app">
        <div>
        </div>
        <div class="block-content" sign="page_apot_c" avalonctrl="page_apot_c">
            <div class="row">
                <div class="block-header">
                    <div class="top">
                        <div class="top-l">
                            <a class="top-l-btn" href="/">
                                <span><i class="iconfont icon-arrow-left"></i>&nbsp;返回</span>
                            </a>
                        </div>
                        <div class="top-c">
                            选择门店
                        </div>
                    </div>
                </div>
            </div>
            <!--联系信息-->
            <div class="row">
                <!--title-->
                <div class="block-title o-title-box ">
                    <div class="o-title-box-top_left relative">
                        <figure class="icon-left"><img src="/static/index/images/icon-person.png" class="w100"></figure>
                        <span class="ml_20">&nbsp;联系信息</span>
                    </div>

                </div>
                <div class="block-content contact_content">
                    <div class="row pb_10">
                        <div class="border text">
                            <figure class="icon-name-info "><img src="/static/index/images//icon-people.png" class=""
                                                                 style="width:60%; padding-top:5px"></figure>
                            <input type="text" class="ml_25" v-model="orderinfo.name" placeholder="点击输入姓名"
                                   maxlength="4">
                        </div>

                        <div class="right">&nbsp;先生/女士</div>
                    </div>
                    <div class="row">
                        <div class=" text border">
                            <figure class="icon-name-info "><img src="/static/index/images//icon_ml.png" class=""
                                                                 style="width:60%; padding-top:5px"></figure>
                            <input type="tel" class="ml_25" v-model="orderinfo.phone" placeholder="点击输入手机号"
                                   maxlength="11">
                        </div>
                    </div>
                </div>
            </div>
            <!--门店选择-->
            <div class="row" id="servicer_list">
                <div class="block-title o-title-box border-t">
                    <div class="o-title-box-top_left relative ">
                        <figure class="icon-left pt_1"><img src="/static/index/images//icon-add-se.png" class="w100">
                        </figure>
                        <span class="ml_20">&nbsp;门店选择</span>
                        <!--<label><input type="checkbox" class="addr-checkbox" id="ckjl"><span class="ml_35 bg-sign">查看距离&nbsp;</span></label>-->
                    </div>

                </div>
                <div class="block-content address">
                    <div class="addressbox">
                        <!-- 加载服务商 -->


                        <!--repeat335871475479:start-->
                        <div class="item over relative" v-for="(items,index) in list">
                            <div class="radio icheck-success">
                                <input type="radio" :id="index" name="success" v-model="orderinfo.bis_id"
                                       :value="items.id">
                                <label :for="index"></label>
                            </div>
                            <div class="rowsbox-door-m">
                                <div class="block-title no-padding">{{items.name}} <!--ms-if--> <!--ms-if-->
                                </div>
                                <div class="rowsbox-door-address">{{items.api_address}}</div>
                            </div>
                            <!--ms-if-->
                        </div><!--repeat335871475479-->

                        <!--ms-if-->
                    </div>
                </div>
            </div>
            <!--ms-if-->
            <!--footer-->
            <div style="height:72px"></div>
            <div class="row">
                <div class="o-footer-box ">
                    <div class="o-footer-l">
                        <!--总额：<span>81</span>元-->
                        <!--ms-if--> <!--ms-if-->
                    </div>
                    <div class="o-footer-r mt_18 mr_10 ">
                        <button class="mb_10" @click="handelnext">下一步</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer"></div>
</div>
<!--ms-if-->
</body>
<script>
    var app = new Vue({
        el: "#app",
        data: {
            orderinfo: {},
            radio: '1',
            check: 0,
            list: [],
            todos: [],
            city: {}
        },
        created() {

            this.GetCityByList();
        },
        methods: {
            selectSort(item) {
                item.show = !item.show;
            },
            GetCityByList() {
                var acity = getCookie('city');
                this.city = JSON.parse(acity)
                axios.get('/index/maintenance/cityCity/city_id=' + this.city.id,).then(res => {

                    this.list = res.data
                    console.log(res.data)

                })
            },
            HandeCheck(item, index) {

                for (var i = 0; i < this.todos.length; i++) {
                    if (this.todos[i].id == item.id) {
                        this.todos.splice(i, 1);
                    }
                }
                if (item.status == 0) {
                    item.status = true
                    this.check += 1;
                    this.todos.push(item)
                } else {
                    this.check -= 1;
                    item.status = false
                }
                console.log(this.todos)
            },
            handelnext() {
                var _this = this;
                if (this.orderinfo.bis_id == undefined) {
                    // alert('请选择门店');
                    _this.$toast('请选择门店');
                    return false
                }
                if (this.orderinfo.name == undefined) {
                    // alert('请选择门店');
                    _this.$toast('请输入用户名');
                    return false
                }
                if (this.orderinfo.phone == undefined) {
                    // alert('请选择门店');
                    _this.$toast('请输入手机号码');
                    return false
                }
                var str = JSON.stringify(this.orderinfo);//独享转字符串
                setCookie('shop_info', str)//存当前用户选择门店和基本信息
                window.location.href = "<?php echo url('Maintenance/index'); ?>"
            }
        },
    })
</script>
</html>