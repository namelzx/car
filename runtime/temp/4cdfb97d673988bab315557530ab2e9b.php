<?php /*a:4:{s:83:"/Users/jon/Documents/项目汇总/车自主/application/index/view/index/index.html";i:1543469560;s:82:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/css.html";i:1543286450;s:85:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/footer.html";i:1543326325;s:81:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/js.html";i:1541081189;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen"/>
    <!--style-->
    <!--style-->
<link href="/static/index/css/font_138813_d8pljrpjjz6.css?v=1.2.25.51" rel="stylesheet" type="text/css"/>
<link href="/static/index/css/jfshop.css?v=1.2.25.51" rel="stylesheet" type="text/css"/>
<link href="/static/index/css/yy.base.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/wap_reset.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/wap_common.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/wap_main.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/popup.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/select_car.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/yy.ui.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/bp.css?v=3" rel="stylesheet" type="text/css"/>
<link href="/static/index/css/banpen.css?v=2" rel="stylesheet" type="text/css"/>

<link href="/static/index/vant/index.css" rel="stylesheet" type="text/css"/>
<style>
    [v-clock] {
        display: none;
    }

    .ms-controller {
        visibility: visible;
    }

    .us-nav-item {
        width: 33% !important;
    }
    [v-clock] {
        display: none;
    }
</style>
</head>
<body>
<style>
    <!--
    .banner {
        min-height: 150px;
    }

    a {
        -webkit-tap-highlight-color: transparent;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
    }

    -->
</style>
<!--
	作者：m18577610926@163.com
	时间：2018-11-1
	描述：html-template
-->
<style>
    .van-popup {
        width: 300px;
        top: 30%;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        padding-bottom: 20px;
    }

    .van-popup .title {
        height: 50px;
        line-height: 50px;
        border-bottom: 1px solid #f3f3f3;
        padding-left: 10px;
    }

    .van-popup .title .title-name {
        font-size: 15px;
        color: black;
        float: left;
    }

    .van-popup .title-name h1 {
        float: left;
    }

    .van-popup .content dd, .van-popup .content a {
        float: left;

    }

    .van-popup .content dd a {
        font-size: 14px;
        color: #535558;
        padding-top: 10px;
        padding-left: 5px;
    }

    .van-popup .content .a {
        padding-top: 10px;
        padding-left: 10px;
        font-size: 15px;

    }

    .clear {
        clear: both
    }
</style>
<div class="block-content content ms-controller">
    <div class="main" id="app" v-clock>
        <van-popup v-model="vv">

            <div class="title">
                <div class="title-name"><h1>当前城市:</h1> <span :style="styleObject">{{cityname}}</span></div>
            </div>
            <div class="content">
                <div v-for="item in city">
                    <div v-if="item.parent_id==0">
                        <a class="a"> {{item.name}}:</a>
                        <dd v-for="items in city">
                            <a v-if="item.id==items.parent_id" @click="handecity(items)">
                                {{items.name}}
                            </a>
                        </dd>
                    </div>
                    <div class="clear"></div>

                </div>
            </div>
        </van-popup>

        <!--header-->
        <img src="http://static.chezizhu.com/m/images/index_share1.png?v=1.2.25.51" alt=""
             style="width:0px;height:0px;"/>
        <header class="index-header">
            <div class="header-box">
                <div class="absolute-l head-addr" @click="handeCity()">
                    <span class="mr_20">{{cityname}}</span>
                    <figure class="icon-right" style="top:2px;"><i class="iconfont icon-xialajiantou font-s18"></i>
                    </figure>
                </div>
                <div class="head-logo"><img src="/static/index/images/icon-logo.png" class="header-logo"></div>
                <div class="absolute-r">
                    <a class=" head-phone" href="tel:400-0351-465"><span class="mr_35">400-0351-465</span>
                        <figure class="icon-t-phone "><img src="/static/index/images/icon-phone.png" class="w100"></figure>
                    </a>
                </div>
            </div>
        </header>
        <div style="height:50px"></div>

        <van-swipe :autoplay="3000" indicator-color="white">
            <van-swipe-item v-for="(image, index) in banner" :key="index">
                <img :src="image.image"
                     data-src="" width="100%">
            </van-swipe-item>
        </van-swipe>
        <!--菜单title-->
        <div class="bg_white sl-flex" style="padding: 12px 0px;">
            <div class="cell" style="text-align: center;" v-for="item in icos">
                <a style="cursor: pointer;" :href="item.url">
                    <div class="ticon">
                        <img :src="item.images" alt=""/>
                    </div>
                    <div class="font-s15" style="margin-top: 4px;">{{item.name}}</div>
                </a>
            </div>
        </div>
        <!--菜单title-->
        <div class="bycon mt_5 mb_5 relative bg_white">
            <a href="<?php echo url('/index/index/maintenance'); ?>">
                <div class="left ff4500 relative pt_5 pb_5"><img src="/static/index/images/by-icon.png" alt=""/></div>
                <div class="right pr_20">
                    <div class="bydirect">不懂要做什么保养项目,去看看</div>
                </div>
                <i class="iconfont icon-rightArrow-copy absolute-r font-s15 mt_2"></i>
            </a>
        </div>
        <!--服务项目套餐s-->
        <!--<div class="bycontent" id="bycontent">-->
        <!--<div class="relative over border-b bg_white">-->
        <!--<div class="left " style="border-bottom:0px;height:100%;padding-bottom:1px;">-->
        <!--<a href="https://hd.chezizhu.com/wx/fixed/180927164935.htm?mch_key=chezizhu14"><img-->
        <!--src="http://static.chezizhu.com/upload/image/2018/09/20180930162026202628924.jpg" alt=""-->
        <!--width="100%"/>-->
        <!--</a>-->
        <!--</div>-->
        <!--<div class="right absolute-r">-->
        <!--<a href="http://wap.chebaobei.cc/user/buy/package/main.htm">-->
        <!--<img src="http://static.chezizhu.com/image/2018/03/20180301112847_936.jpg" alt="" width="100%"-->
        <!--class="h50 border-b">-->
        <!--</a>-->
        <!--<a href="http://hd.chezizhu.com/wx/fixed/180224142257.htm">-->
        <!--<img src="http://static.chezizhu.com/image/2018/03/20180308152754_567.jpg" alt="" width="100%"-->
        <!--class="h50" style="border-bottom:0px;"/>-->
        <!--</a>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="border-b relative over">-->
        <!--<div class="left fl"><a href="http://hd.chezizhu.com/wx/fixed/180529150258.htm?mch_key=chezizhu14"><img-->
        <!--src="http://static.chezizhu.com/upload/image/2018/07/2018070210021921939038.jpg" alt=""-->
        <!--width="100%"/></a></div>-->
        <!--<div class="right fr">-->
        <!--<a href="http://hd.chezizhu.com/wx/fixed/171228132246.htm">-->
        <!--<img src="http://static.chezizhu.com/image/2017/12/20171206114550_874.jpg" alt="" width="100%"/>-->
        <!--</a>-->
        <!--</div>-->
        <!--<div style="clear:both;"></div>-->
        <!--</div>-->
        <!--</div>-->
        <!--服务项目套餐e-->
        <!--menu-->
        <div style="height:55px;"></div>
        <!--
            作者：lastpring@gmail.com
            时间：2015-08-25
            描述：
        -->
        <div class="us-nav">
    <a href="/" class="us-nav-item" style="text-align:center;">
        <figure class="mt_3">
            <i class="iconfont icon-shouye font-s22"></i>
        </figure>
        <span>首页</span>
    </a>
    <a href="<?php echo url('index/servicer/index'); ?>" class="us-nav-item ">
        <figure class="mt_3">
            <i class="iconfont icon-dianpu font-s22"></i>
        </figure>
        <span>门店导航</span>
    </a>


    <!--<a href="/main.htm#/model/evaluation_list.htm" class="us-nav-item ">-->
        <!--<figure class="mt_3">-->
            <!--<i class="iconfont icon-pingjia font-s22"></i>-->
        <!--</figure>-->
        <!--<span>服务评价</span>-->
        <!--&lt;!&ndash;http://static.chezizhu.com/m/gywm.html?v=1.2.25.51&ndash;&gt;-->
    <!--</a>-->
    <a href="<?php echo url('index/user/index'); ?>" class="us-nav-item ">
        <figure class="mt_3">
            <i class="iconfont icon-30 font-s22"></i>
        </figure>
        <span>个人中心</span>
    </a>

</div>
    </div>
</div>

<!-- html-template end -->
<style type="text/css">
    .us-nav-item {
        width: 25%;
    }

    .font-s8 {
        font-size: 8px !important;
    }

    .two-btn {
        cursor: pointer;
        margin: 5px 13px;
        margin-right: 0px;
        display: block;
        padding-left: 10px;
    }

    .two-btn:first-child {
        border-right: 1px solid #eee;
    }

    .two-btn .ticon1 {
        float: left;
        width: 45px;
        height: 45px;
    }

    .ticon img {
        width: 52px;
        height: 52px;
        margin: auto;
    }
</style>
</body>
</html>



<script src="/static/index/js/jquery.min.js"></script>

<script src="/static/index/vant/vue.min.js"></script>
<script src="/static/index/vant/axios.min.js"></script>
<script src="/static/index/vant/vant.min.js"></script>

<script src="/static/index/common.js"></script>

<script src="/static/index/js/layer.js"></script>
<!--<script src="/static/index/js/avalon.mobile.min.js"></script>-->
<script src="/static/index/js/sl.tool.1.0.js?v=1.2.25.51"></script>
<script src="/static/index/js/sl.location.1.0.js?v=1.2.25.51"></script>
<script src="/static/index/js/TouchSlide.js"></script>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            styleObject: {
                color: '#ff4500',
            },
            message: 'Hello Vue!',
            vv: false,
            images: [
                'http://static.chezizhu.com/upload/image/2018/09/20180930161936193681578.jpg',
                'http://static.chezizhu.com/upload/image/2018/07/20180702085837583709813.jpg',
                'http://static.chezizhu.com/image/2018/02/20180222084643_815.jpg',
                'http://static.chezizhu.com/upload/image/2018/10/20181022092341234160524.jpg',
                'http://static.chezizhu.com/image/2018/02/20180222083826_524.jpg',
            ],
            icos: [
                {
                    name: '保养',
                    images: "http://static.chezizhu.com/upload/image/2018/08/20180829203458345811575.png",
                    url: '/index/maintenance/shop'
                },
                {
                    name: '喷漆',
                    images: "http://static.chezizhu.com/upload/image/2018/08/20180829203534353446615.png",
                    url: '/index/examcar/index'
                },
                {
                    name: '审车',
                    images: "http://static.chezizhu.com/upload/image/2018/08/20180829203551355119301.png",
                    url: '/index/examcar/index'
                },
                {
                    name: '保险',
                    images: "http://static.chezizhu.com/upload/image/2018/08/2018082920360036041522.png",
                    url: '/index/examcar/insure'
                },
                {
                    name: '估价',
                    images: "http://static.chezizhu.com/upload/image/2018/08/2018082920360936979768.png",
                    url: '/index/examcar/usedcar'
                },
            ],
            // banner:[],
            city: [],
            cityname: getCookie('city_name'),
            banner: [],
        },
        created() {
            this.GetCityByList();
            if (this.cityname == null) {
                this.vv = true
            }
        },
        methods: {
            handeCity() {
                this.vv = true
            },
            GetCityByList() {
                axios.get('/index/index/indexdata/').then(res => {
                    this.city = res.data.city
                    this.banner = res.data.banner
                })
            },
            handecity(row) {
                this.cityname = row.name
                setCookie('city_name', row.name)


                var str = JSON.stringify(row);//独享转字符串
                setCookie('city', str)
                var str1 = JSON.parse(str);//字符串转对象
                console.log(str1.id)
                this.vv = false
            }
        }
    })

</script>
<!-- js-template-end -->
