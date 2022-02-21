@font-face{
font-family:HelveticaNeue;
src:url(/fonts/HelveticaNeueCyr-Roman.eot?d09570c30d44ffc8722602f899b651dd?#iefix) format("embedded-opentype"),url(/fonts/HelveticaNeueCyr-Roman.otf?cd2355028bca504c63a432c086eceb52) format("opentype"),url(/fonts/HelveticaNeueCyr-Roman.woff?9bc228fef9438b4c6db3a52c4f5f5227) format("woff"),url(/fonts/HelveticaNeueCyr-Roman.ttf?f6a0ee1e7b4f51cdb05392779e4e0750) format("truetype"),url(/fonts/HelveticaNeueCyr-Roman.svg?03f132369d1d7e26ab40eb234124cf5a#HelveticaNeueCyr-Roman) format("svg");
font-weight:400;
font-style:normal
}
@font-face{
font-family:HelveticaNeue;
src:url(/fonts/HelveticaNeueCyr-Bold.eot?ea9196a4abe7fa9db1ae407627b13028?#iefix) format("embedded-opentype"),url(/fonts/HelveticaNeueCyr-Bold.otf?7ac1c8f0b974a943aa67859c07f86bd2) format("opentype"),url(/fonts/HelveticaNeueCyr-Bold.woff?415666ae13b3f7db46550adb3432ae9b) format("woff"),url(/fonts/HelveticaNeueCyr-Bold.ttf?ac9c3dd2212d9b0849f90ecbd4a4f775) format("truetype"),url(/fonts/HelveticaNeueCyr-Bold.svg?2188f2e5e444109cb8928e1de7954b40#HelveticaNeueCyr-Bold) format("svg");
font-weight:700;
font-style:normal;
}
body{
font-family:HelveticaNeue,Arial,sans-serif;
font-size:1vw;
color:#000;
}
@media (min-width:1280px){
.container{
font-size: 0.833vw;
width: 70%;
}


}
.btn{
border-radius:0
}
.btn-primary{
background-color:#006eb5;
border-color:#006eb5
}
.btn-primary:hover{
background-color:#004877;
border-color:#004877;
}
a:hover{
text-decoration:none;
color:#006eb5;
}
ol,ul{
padding-left:1.25vw
}
.btn-forward{
display: inline-block;
    padding: 0.375vw 2.5vw 0.375vw 0;
    background: url(/files/design/arrow-forward.png) no-repeat 100%;
    color: #000;
    background-position-x: 98%;
	background-size: 1.5vw;
}
.btn-forward:hover{
background-image:url(/files/design/arrow-forward.b.png)
}
.btn-back{
display:inline-block;
padding:0.3125vw 0 0.3125vw 2.083vw;
background:url(/files/design/arrow-back.png) no-repeat 0;
color:#000
}
.btn-back:hover{
background-image:url(/files/design/arrow-back.b.png)
}
.btn-back:hover,.btn-forward:hover{
color:#006eb5;
text-decoration:none
}
.btn-register{
text-transform:uppercase;
font-weight:700;
font-size:1.0416vw;
padding:0.3125vw 1.302vw 0.21vw;
border-radius:1.25vw;
background-color:#006eb5;
border-color:#006eb5;
color:#fff;
}
.btn-register:hover{
color:#fff;
background-color:#004877;
border-color:#004877;
}
.btn-register.red{
background-color:#c20012;
border-color:#c20012;
}
.btn-register.red:hover{
background-color:#970012;
border-color:#970012;
}
.btn-register.green{
background-color:#69a840;
border-color:#69a840;
}
.btn-register.green:hover{
background-color:#437331;
border-color:#437331;
}
.input-rounded{
font-size:1.0416vw;
margin-right:1.0416vw;
cursor:pointer;
}
.input-rounded.thin{
font-weight:400;
}
.input-rounded:last-child{
margin-right:0;
}
.input-rounded input{
display:none;
}
.input-rounded span:before{
    content: "";
    width: 2.25vw;
    height: 2vw;
    border-radius: 1.0625vw;
    margin-right: 1.0416vw;
    display: inline-block;
    vertical-align: middle;
    background: #fff;
    -webkit-box-shadow: 0 0 2.604vw 0.52vw #dcdcdc;
    box-shadow: 0 0 0.64vw 0.2vw #dcdcdc;
}
.input-rounded input:checked+span:before{
background:#fff url(/files/design/check.png) no-repeat 50%
}
.form-input{
width:100%;
height:2.375vw;
border:0;
border-radius:1.1875vw;
margin-bottom:1.875vw;
padding-left:1.25vw;
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 3.125vw 0.625vw #eaeaea
}
textarea.form-input{
height:auto
}
.privacy{
font-weight:400
}
.privacy input{
display:none
}
.privacy input+span{
display:inline-block;
width:2.375vw;
height:2.375vw;
background:#fff;
border-radius:1.1875vw;
vertical-align:middle;
margin-right:0.9375vw;
-webkit-box-shadow:0 0 3.125vw 0.625vw #dcdcdc;
box-shadow:0 0 3.125vw 0.625vw #dcdcdc
}
.privacy input:checked+span{
background:#fff url(/files/design/check.png) no-repeat 50%
}
.mobile-menu{
position:fixed;
top:0;
left:0;
z-index:1050;
width:100%;
padding:0.625vw 0.9375vw;
display:block;
background:#f6f6f6;
color:#000
}
.mobile-menu:focus,.mobile-menu:hover{
color:#000;
text-decoration:none
}
.mobile-holder{
position:fixed;
top:2.5vw;
bottom:0;
left:0;
width:0;
z-index:1050;
outline:0;
overflow:scroll;
-webkit-transition:all .3s ease-out;
transition:all .3s ease-out;
background:#f6f6f6
}
.mobile-holder img{
width:220.5vw;
margin:0.625vw 0 0.625vw 0.9375vw
}
.mobile-holder ul{
padding:0;
margin:0;
list-style:none;
width:237px
}
.mobile-holder ul ul{
padding-left:0.9375vw;
display:none
}
.mobile-holder a{
display:block;
padding:0.5vw 0.75vw 0.5625vw;
border-bottom:1px solid #b1b1b1;
color:#333
}
.mobile-holder .active>a{
font-weight:700
}
.mobile-holder.in{
width:237px
}
.mobile-backdrop{
position:fixed;
top:0;
right:0;
bottom:0;
left:0;
z-index:1040;
background:#000;
opacity:.5;
display:none
}
.mobile-backdrop.in{
display:block
}
.mobile-pad{
height:2.5vw
}
.mobile-toggler{
float:right;
color:#707070;
display:inline-block;
padding:0.5625vw 0.9375vw;
background:#e2e2e2
}

header{
padding:0.9375vw 0;
background:#fff
}
header .head-2{
padding-top: 0.25vw;
}


header .logo img{
    height: auto;
    width: 100%;
    margin-top: -0.8vw;
}

header .lang-switcher{
    text-transform: uppercase;
    font-weight: 700;
    float: right;
    color: #000;
    display: inline-block;
    padding: 0.25vw 0.85vw;
}
header .menu{
float:right;
}
header .menu ul{
padding:0;
margin:0;
}
header .menu>ul>li{
display:inline-block;
}
header .menu>ul>li>.active,header .menu>ul>li>a:hover{
border-bottom:2px solid #000;
text-decoration:none;
}
header .menu a{
display: block;
    padding: 0.26vw 0.208vw;
    margin: 0 0.52vw;
    color: #000;
    white-space: pre;
    font-size: 0.83vw;
}
header .menu .has-children{
position:relative;
}
header .menu .has-children ul{
display:none;
position:absolute;
top:0;
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 3.125vw 0.625vw #eaeaea;
background:#fff;
z-index:2;
min-width:100%;
}
header .menu .has-children ul:before{
content:"";
display:block;
height:2.25vw;
}
header .menu .has-children ul a{
margin:0;
padding:0.375vw 0.75vw;
}
header .menu .has-children ul a:hover{
background:#eaeaea;
text-decoration:none;
}
header .menu .has-children li{
list-style:none;
}
header .menu .has-children:hover>a{
position:relative;
z-index:3;
}
header .menu .has-children:hover ul{
display:block;
}
.page-heading{
padding:1.6vw 0;
}
.page-heading h1{
font-size:2.60vw;
font-weight:700;
margin:1.5625vw 0 1.66vw;
}





.page-heading p{
font-size:1.0416vw;
margin-bottom: 2.6041vw;
}

.page-heading .head-img{
text-align:center;
}

.page-heading .head-img{
display:block;
}
.page-heading .head-img img{
max-width:100%
}
h2{
    font-size: 2.083vw;
    margin: 1.5625vw 0 1.302vw;
}

h2 a{
color:#000;
font-size: 2vw;
}
.table-list td{
padding:1.5625vw;
font-size:0.9375vw;
}

.table-list td:first-child{
    text-align: center;
    vertical-align: top;
    width: 13%;
}

.table-list td:first-child img{
    height: auto !important;
    width: 15vw;
}

.vam{
white-space:nowrap;
}
.vam:before{
content:"";
height:100%
}
.vam .v,.vam:before{
display:inline-block;
vertical-align:middle;
}
.vam .v{
white-space:normal;
}
.sidebar-menu ul{
padding:0;
margin:1.875vw 0;
list-style:none;
}
.sidebar-menu ul li{
margin-bottom:0.625vw;
}
.sidebar-menu ul a{
display:block;
padding: 1.0416vw 1.302vw 1.0416vw 4.5833vw;
font-size:1vw;
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 3.125vw 0.625vw #eaeaea;
background:#fff no-repeat 1.5625vw;
color:#000;
background-size: 2vw;
}
.sidebar-menu ul a:hover{
text-decoration:none;
color:#006eb5;
}
.sidebar-menu ul a.active{
-webkit-box-shadow:none;
box-shadow:none;
background-color:transparent;
}
.sidebar-menu .menu-about{
background-image:url(/files/pages/about/menu-about.png);
}
.sidebar-menu .menu-managing{
background-image:url(/files/pages/about/menu-managing.png);
}
.sidebar-menu .menu-reporting{
background-image:url(/files/pages/about/menu-reporting.png);
}
.sidebar-menu .menu-team{
background-image:url(/files/pages/about/menu-team.png);
}
.sidebar-menu .menu-partners{
background-image:url(/files/pages/about/menu-partners.png);
}
.sidebar-menu .menu-contacts{
background-image:url(/files/pages/about/menu-contacts.png);
}
.sidebar-menu .menu-administration{
background-image:url(/files/pages/camp/menu-administration.png);
}
.sidebar-menu .menu-grants{
background-image:url(/files/pages/camp/menu-grants.png);
}
.sidebar-menu .menu-programme{
background-image:url(/files/pages/camp/menu-program.png);
}
.sidebar-menu .menu-registration{
background-image:url(/files/pages/camp/menu-registration.png);
}
.sidebar-menu .menu-rules{
background-image:url(/files/pages/camp/menu-rules.png);
}
.sidebar-menu .menu-summer-school{
background-image:url(/files/pages/camp/menu-summer-camp.png);
}
.sidebar-menu .menu-award{
background-image:url(/files/pages/award/menu-award.png);
}
.sidebar-menu .menu-timeline{
background-image:url(/files/pages/award/menu-timeline.png);
}
.sidebar-menu .menu-council{
background-image:url(/files/pages/award/menu-council.png);
}
.sidebar-menu .menu-laureates{
background-image:url(/files/pages/award/menu-laureates.png);
}
footer{
background:#f5f5f5;
padding:2vw 0;
}
footer a{
color:#000;
}
footer .foot-1{
float:left;
width:19%;
}
footer .footer-logo{
height:3.3125vw;
}
footer .foot-2{
float:left;
width:26%;
padding-top:0.25vw
}
footer .foot-2 a{
margin:0 1.25vw;
}
footer .foot-3{
float:left;
width:25%;
padding-top:0.625vw;
}
footer .foot-3 a{
margin:0 0.3125vw;
}
footer .foot-4{
float:right;
width:25%;
text-align:right;
padding-top:0.25vw
}
footer .foot-4 a{
margin:0 1.25vw;
display: block;
}
@media (max-width:45vw){
footer .foot-1,footer .foot-2{
float:none;
width:100%;
text-align:center
}
footer .foot-2 a{
margin-left:0
}
footer .foot-3{
width:30%
}
footer .foot-4{
width:70%
}
footer .foot-4 a{
margin-left:0
}

}
@media (min-width:481px) and (max-width:62.5vw){
footer .foot-1,footer .foot-2,footer .foot-3,footer .foot-4{
width:50%;
text-align:center;
min-height:50.25vw
}
footer .foot-2 a,footer .foot-4 a{
margin-left:0
}

}
.home-slider{
-webkit-box-shadow:inset 0 0 3.125vw 0.625vw #f5f5f5;
box-shadow:inset 0 0 3.125vw 0.625vw #f5f5f5;
position:relative;
margin-bottom:1.5625vw
}
.home-slider .owl-item img{
    display: inline-block;
    width: auto;
    height: 13vw;
    float: right;
}
.home-slider .item{
padding:5.25vw 0 2.625vw;
}
.home-slider .item .title{
	    font-size: 2.6042vw;
font-weight:700;
line-height:1.2em;
margin-bottom:1.5625vw
}


.home-slider .item .text{
font-size:1.15vw;
line-height:1.2em;
margin-bottom:3.126vw
}

.home-slider .item .icons{
    position: absolute;
    bottom: 1.875vw;
    width: 45.72%;
}
.home-slider .item .icon{
    padding: 0.635vw 0 0.635vw 6.2%;
    margin: 0 8.18% 0 0;
    background-repeat: no-repeat;
    color: #000;
    display: inline-block;
    font-size: .8208vw;
    background-size: 2vw;
}
.home-slider .item .icon:hover{
text-decoration:none;
color:#006eb5
}
.home-slider .item.dark,.home-slider .item.dark a{
color:#fff !important;
min-height: 0 !important;
}
.home-slider .item.dark a:hover{
color:#d4d4d4
}
.home-slider .owl-dots{
    position: absolute;
    top: 1.8vw;
    right: 3.1vw;
}
.home-slider .owl-dot{
display:inline-block;
width:0.525vw;
height:0.525vw;
border:1px solid #000;
background:#fff;
margin:0 0.156vw
}
.home-slider .owl-dot.active{
background:#f3ce0a
}
.home-event{
padding:1.5625vw;
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 2.604vw 0.52vw #eaeaea;
margin-bottom:1.302vw;
}
.home-event .section-title{
font-weight:700;
margin-top:0
}
.home-event p{
font-size:1.5vw;
}
.home-event .item{
padding:1.875vw 2.3vw;
background:#fff;
color:#000;
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 3.125vw 0.625vw #eaeaea;
display:block
}
.home-event .item:hover{
text-decoration:none;
color:#000
}
.home-event .item .date{
font-weight:700;
font-size:1.25vw;
margin-bottom:2.5vw
}
.home-event .item .type{
font-weight:700;
font-size:1.25vw;
text-align:right;
float:right
}
.home-event .item .title{
font-weight:700;
font-size:1.1458vw;
line-height:1.2em;
margin-bottom:2.8125vw
}
.home-event .item.no .title{
margin:5.625vw 0;
text-align:center
}
.home-event .btn{
font-size:0.8vw;
text-transform:uppercase;
font-weight:700;
padding:0.5625vw 0.75vw 0.375vw
}
.home-event .all{
margin-top: 0;
margin-bottom:0.9375vw;
text-align:right
}
.home-event .all a{
color:#000
}
.home-event .all a img{
    margin-right: 1.5625vw;
    height: 2.5vw;
}
.home-event .all a:hover{
text-decoration:none;
color:#006eb5
}
.home-school{
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 3.125vw 0.625vw #eaeaea;
background:#fff;
background-image:url(/files/Home/SUMMER_SCHOOL_BG_New_mainpage-01.png);
background-repeat:no-repeat;
background-position:100% 0;
background-size: contain;
padding:1.875vw;
margin-bottom:1.5625vw
}
.home-school .section-title{
font-size:1.5vw;
font-weight:700
}
@media (min-width:760.5vw){
.home-school .section-title{
font-size:2vw
}

}
@media (min-width:1200px){
.home-school .section-title{
font-size:2.8125vw
}

}
.home-school p{
font-size:1.041vw;
margin-bottom:2.5vw
}

.home-school .date{
    display: inline-block;
    padding: 0.625vw 0 7px 2.3125vw;
    background: url(/files/Home/calendar-red.svg) no-repeat 0;
    background-size: 2vw;
}


.home-school .link{
    display: inline-block;
    color: #000;
    padding: 0.625vw 0 0.625vw 2.3125vw;
    background: no-repeat 0;
    margin-left: 4%;
    background-size: 2vw;
}

.home-school .link:hover{
text-decoration:none;
color:#006eb5
}
.home-research{
margin-bottom:1.5625vw
}
.home-research .box{
    -webkit-box-shadow: 0 0 3.125vw 0.625vw #eaeaea;
    box-shadow: 0 0 3.125vw 0.625vw #eaeaea;
    padding: 0.9375vw 0.9375vw 11.5625vw;
    position: relative;
    height: auto;
    min-height: 20vw !important;
}

.home-research .box .text{
font-size:1.25vw;
margin-bottom:1.875vw
}

.home-research .ticker{
font-size: 2.5vw;
    position: relative;
    width: calc(100% - 1.875vw);
    -webkit-box-shadow: 0 0 3.125vw 0.625vw #eaeaea;
    box-shadow: 0 0 3.125vw 0.625vw #eaeaea;
}

.home-research .ticker .item{
width: 100%;
    height: 9vw;
    padding: 0 0.625vw 0 7.8125vw;
    background: #fff no-repeat 0;
    font-size: 0.9375vw;
    position: absolute;
    z-index: 1;
    opacity: 0;
    -webkit-transition: all .5s ease-in;
    transition: all .5s ease-in;
    overflow: hidden;
	background-size: 5vw;
	background-position: 1vw !important;
}
.home-research .ticker .item.active{
z-index:20;
opacity:1
}

.home-research .ticker-2 .item{
background-position:1vw
}

.home-award{
margin-bottom:1.5625vw
}
.home-award a{
background:-webkit-gradient(linear,left top,right top,from(#bdad4d),to(#9a881f));
background:linear-gradient(90deg,#bdad4d,#9a881f);
color:#000;
padding:1.875vw;
display:block
}
.home-award a:hover{
text-decoration:none
}
.home-award .pre-title{
margin-bottom:1.5625vw
}
.home-award h2{
line-height:1.2em;
text-transform:uppercase
}
.home-award .text,.home-award h2{
margin-bottom:0.9375vw
}
.home-award .icons{
font-size:1.1875vw
}
.home-award .icons>div{
float:left;
margin-right:2.5vw;
padding:0.5vw 0 0.5vw 3.75vw;
background-repeat:no-repeat
}
.home-award .icon-1{
background-image:url(/files/Home/coinsFlatIcon.svg)
}
.home-award .icon-2{
background-image:url(/files/Home/award-icon-2.png)
}
.home-books{
padding:1px 1.875vw 1.875vw;
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 3.125vw 0.625vw #eaeaea;
margin-bottom:1.5625vw
}
.home-books p{
font-size:0.9375vw;
margin-bottom:1.302vw
}
.home-books img{
float:left;
margin-right:0.9375vw
}
@media (min-width:760.5vw){
.home-books img{
margin-right:3.125vw
}

}
.page-heading.events{
background:#f5f5f5
}
.events-filter .search{
    margin-bottom: 1.875vw;
    position: relative;
    display: inline-block;
    width: 36%;
}
.events-filter .search input{
    width: 100%;
    height: 2vw;
    border-radius: 1.375vw;
    border: 0;
    -webkit-box-shadow: 0 0 3.125vw 0.625vw #eaeaea;
    box-shadow: 0 0 3.125vw 0.625vw #eaeaea;
    padding-left: 5.5%;
}
.events-filter .search span{
width:1.25vw;
height:1.375vw;
background:url(/files/events/search-btn.png) no-repeat;
position:absolute;
top:0.625vw;
right:1.25vw
}
.events-filter .title{
font-size:0.9375vw;
margin-bottom:1.042vw
}
.events-filter .input-type{
margin-right:1.25vw
}
.events-filter .input-type input{
display:none
}
.events-filter .input-type span{
    display: inline-block;
    padding: 0.48vw 1.82vw;
    border-radius: 1vw;
    cursor: pointer;
    font-size: .93vw;
    font-weight: 700;
    opacity: 0.5;
    text-shadow: 0 0 0.625vw #000;
}
.events-filter .input-type input:checked+span{
opacity:1;
text-shadow:none
}
.events-filter .time-holder{
display:-webkit-box;
display:-ms-flexbox;
display:flex
}
.events-filter .time-holder select{
height: 2.5vw;
    width: auto;
    vertical-align: top;
    background: #f5f5f5;
    border: none;
    font-size: .8vw;
}
.events-filter .time-holder select option{
text-align:center;
background:#fff
}
.events-filter .time-holder select:last-child{
    font-size: 1vw;
    width: auto;
}
.events-filter .time-holder .time-from{
margin-right:2.864583vw;
position:relative
}
.events-filter .time-holder .time-from:after{
    content: "";
    position: absolute;
    right: -1.927vw;
    top: 0.9375vw;
    width: 1.04166vw;
    height: 0.2083vw;
    background: #000;
}
.events-grid .item{
display:block;
background-size:cover;
background-position:50%;
color:#000;
height:25vw;
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 3.125vw 0.625vw #eaeaea;
margin-bottom:3.75vw;
padding-top:2.1875vw;
position:relative
}
.events-grid .item:hover{
text-decoration:none
}
.events-grid .item .date{
font-weight:700;
padding:3px 0 0.375vw;
margin-left:0;
background:#fff;
color:#000;
display:inline-block
}
.events-grid .item .type{
float:right;
padding:3px 0.375vw;
margin-right:1.5625vw;
background:#fff
}
.events-grid .item .bottom{
position:absolute;
bottom:0;
left:0;
right:0;
padding:0.9375vw 2.1875vw 1.25vw
}
.events-grid .item.invert{
color:#fff
}
.events-grid .item.invert .bottom{
background:linear-gradient(transparent,rgba(0,0,0,.3) 0.9375vw,rgba(0,0,0,.6))
}
.events-grid .item .title{
font-size:1.25vw;
line-height:1.55vw;
font-weight:700
}
.events-grid .item .title.tiny{
font-size:1vw
}
.events-upcoming .item.no{
height:auto
}
.events-grid .item .type-image{
float:right;
height:40.375vw
}
.events-grid .item .buttons{
margin-top:1.25vw
}
.events-grid .item .btn{
font-size:0.88541vw;
text-transform:uppercase;
font-weight:700;
padding:0.46875vw 0.625vw 0.3125vw
}
.events-grid .icons{
font-size:1.1875vw
}
.events-grid .icons>div{
float:left;
margin:0.9375vw 2.5vw 0 0;
padding:0.375vw 0 0.3125vw 3.75vw;
background-repeat:no-repeat
}
.events-grid .has-photos{
background-image:url(/files/events/icon-photos-b.png)
}
.events-grid .invert .has-photos{
background-image:url(/files/events/icon-photos-w.png)
}
.events-grid .has-stats{
background-image:url(/files/events/icon-stats-b.png)
}
.events-grid .invert .has-stats{
background-image:url(/files/events/icon-stats-w.png)
}
.breadcrumb-parent{
font-size:0.78125vw;
margin-left:2.5vw
}
.breadcrumb-current{
font-size:0.78125vw;
font-weight:700
}
.page-heading.event{
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 3.125vw 0.625vw #eaeaea;
padding:1.5625vw 0;
margin:1.5625vw 0
}
.page-heading.event h1{
margin:1.302vw 0 2.8645vw
}
.page-heading.event .left{
position:relative
}
.page-heading.event .bottom{
position:absolute;
bottom:0;
left:0.9375vw
}
.page-heading.event .date{
font-size:1.25vw;
font-weight:700;
display:inline-block;
margin-right:3.75vw
}
.page-heading.event .type{
font-size:1.0416vw;
display:inline-block;
padding:0.375vw 1.875vw;
border-radius:1.25vw
}
.page-heading.event .btn-register{
margin-right:2.5vw
}
.page-heading.event .date-upcoming{
position:absolute;
top:0;
left:0.9375vw;
color:#006eb7
}
.page-heading.event .itsfree{
display:inline-block;
margin-right:2.5vw
}
.event-data{
padding:3.125vw 0
}
.event-data .photos{
    margin-top: 0;
}
.event-data img{
width:100%;
margin-bottom:1.5625vw
}
.event-data .big-date{
float:right;
font-weight:700;
font-size:1.25vw;
color:#006eb5;
margin-top:1.25vw
}
.stats .item{
padding-left:5vw;
font-size:1.25vw;
background-repeat:no-repeat;
background-position:0;
float:left;
margin-right:2.8125vw
}
@media (width:1360.375vw){
.stats .item{
margin-right:1.375vw
}

}
.stats .num{
font-weight:700
}
.stats .sp{
background-image:url(/files/events/stat-sp.png)
}
.stats .sp .num{
color:#c20012
}
.stats .pa{
background-image:url(/files/events/stat-pa.png)
}
.stats .pa .num{
color:#006eb5
}
.stats .qu{
background-image:url(/files/events/stat-qu.png)
}
.stats .qu .num{
color:#69a840
}
.speakers .item{
background:#f6f6f6;
padding:1.5625vw;
margin-bottom:1.5625vw
}
.speakers .item .name{
font-weight:700;
font-size:0.98958vw;
margin-bottom:0.78125vw
}
.speakers>div:nth-child(4n+1) .name{
color:#c20012
}
.speakers>div:nth-child(4n+2) .name{
color:#006eb5
}
.speakers>div:nth-child(4n+3) .name{
color:#69a840
}
.speakers>div:nth-child(4n+4) .name{
color:#f3ce0a
}
.event-gallery{
padding:3.125vw 0
}
.event-gallery img{
width:100%;
margin-bottom:1.875vw
}
.event-gallery.cropped .row>div:nth-child(n+9){
display:none
}
.event-gallery.cropped .row>div:last-child{
display:block
}
.event-gallery.cropped .row>div:last-child .show_all{
height:23.125vw;
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 3.125vw 0.625vw #eaeaea;
padding-top:10.625vw;
text-align:center;
cursor:pointer;
font-size:1.3125vw;
}
#register{
background:#f6f6f6;
padding:0.625vw 0
}
#register .date{
font-weight:700;
color:#006eb5;
margin-right:3.75vw;
}
#register .date,#register .title{
display:inline-block;
font-size:1.5vw;
}
#register form{
margin-top:2.8125vw;
}
#register .form-sended{
text-align:center;
font-size:1.875vw;
padding:5vw 0;
display:none;
}
.page-heading.research{
background:#69a840;
color:#fff;
}
.page-heading.research .icon{
display:inline-block;
padding:0.625vw 0 0.625vw 3.4vw;
background:no-repeat 0;
background-size:contain;
font-size: 0.83vw;
color:#fff;
margin:0 1.04vw 0.78vw 0;
}
.page-heading.research .icon:hover{
color:#006eb5;
text-decoration:none
}
.research-list{
padding:2.08vw 0 3.125vw;
}
.research-list.bg-gray{
background:#ededed;
}
.research-subheading{
color:#fff;
padding:2.1875vw 0;
}
.research-subheading.bg-blue{
background:#006eb5;
}
.research-subheading.bg-red{
background:#c20012
}
.research-subheading h2{
font-size:2.6vw;
font-weight:700;
}

.research-subheading p{
font-size:1.04vw;
}

.principles{
display:-webkit-box;
display:-ms-flexbox;
display:flex;
-webkit-box-pack:justify;
-ms-flex-pack:justify;
justify-content:space-between;
-webkit-box-orient:horizontal;
-webkit-box-direction:normal;
-ms-flex-flow:row wrap;
flex-flow:row wrap
}

.principles .item{
padding: 0 1.04vw 0 4.6875vw;
    max-width: 21.35vw;
    margin-bottom: 2.08vw;
    background-repeat: no-repeat;
    background-size: 2.5vw;
    background-position-y: center;
    background-color: #fff;
    background-position-x: 6%;
	font-size: 0.83vw;
}


.principles .item .t{
height:5.125vw;
}
.areas .item, .areas.magistral .item{
    width: 100%;
    height: 6.25vw;
    padding: 0.9375vw 1.5625vw 0 6.25vw !important;
    background: #fff no-repeat;
    font-size: 1.04vw;
    display: flex;
    align-items: center;
    background-position-x: 3%;
    background-position-y: 1.5vw;
    margin-bottom: 1.5625vw;
    background-size: 4vw;
}

.page-heading.award{
    background: -webkit-gradient(linear,left top,right top,from(#bdad4d),to(#9a881f));
    background: linear-gradient(90deg,#bdad4d,#9a881f);
    color: #000;
    padding: 1.5625vw;
}
.page-heading.award .pre-title{
margin-bottom:1.5625vw
}
.page-heading.award .title{
font-size:2.08vw !important;
line-height:1.2em;
text-transform:uppercase;
margin-bottom:0.9375vw;
font-weight:700
}


.page-heading.award .text{
margin-bottom:0.9375vw
}
.page-heading.award .icons{
font-size:1.1875vw
}
.page-heading.award .icons>div{
float:left;
margin-right:2.5vw;
padding:0.5vw 0 0.5vw 8%;
background-repeat:no-repeat
}
.page-heading.award .icon-1{
background-image:url(/files/Home/award-icon-1.png)
}
.page-heading.award .icon-2{
background-image:url(/files/Home/award-icon-2.png)
}
@media (max-width:470.5625vw){
.page-heading.award img{
width:13.125vw
}

}
.award-council, .about-team{
font-size: 0.9375vw;
}
.award-council>div:nth-child(3n+1){
clear:left
}
.award-council .item, .about-team .item{
margin-bottom:3.125vw
}
.award-council .item:before, .about-team .item:before{
content:"";
display:block;
width:45%;
height:7px;
background:#bdad4d;
margin-bottom:0.625vw
}
.award-council .item .name, .about-team .item .name{
font-weight:700;
margin-bottom:1.5625vw;
font-size: 0.9375vw;
}
.award-laureates .item, .about-team .item{
margin-bottom:6vw;
}
.award-laureates .item .photo, .about-team .item .photo{
margin-bottom:1.875vw
}
.award-laureates .item .photo img, .about-team .item .photo img{
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 3.125vw 0.625vw #eaeaea
}
.award-laureates .item .year{
color:#bdad4d;
font-weight:700;
font-size:1.875vw;
margin-bottom:1.25vw
}
.award-laureates .item .name{
font-size:1.5vw;
margin-bottom:1.25vw
}
.award-laureates .item .title{
font-weight:700;
font-size:1.25vw;
padding-top:1.875vw
}
.award-laureates .item .link{
display:inline-block;
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 3.125vw 0.625vw #eaeaea;
padding:1.875vw;
color:#000
}
@media (max-width:470.5625vw){
.award-laureates .item .link{
margin-top:1.875vw
}

}
@media (max-width:767px){
.award-laureates .item .link .frame{
margin:auto
}

}
.award-laureates .item .link .button-watch{
background-color:#a49634;
border-radius:1.875vw;
cursor:pointer;
border:none;
font:inherit;
color:#fff;
font-weight:700;
text-align:center;
vertical-align:middle;
line-height:1.875vw;
max-width:13.125vw;
max-height:20.625vw;
margin-top:1.375vw;
padding-top:3px
}
.award-laureates .item .link .link-title{
font-size:1.5vw;
margin-bottom:0.5vw
}
@media (min-width:767px){
.award-laureates .item .link .frame{
left:5vw
}

}
.award-laureates .item .link.row{
margin-top:1.875vw;
margin-left:auto;
margin-right:auto;
display:inline-block
}
.text-large{
font-size:1vw
}
@media (min-width:760.5vw){
.text-large{
font-size:1.25vw
}

}
a.to-laureates{
display: inline-block;
    padding: 1.5625vw !important;
    color: #000;
    width: 16.66vw;
    margin-top: -0.78125vw;
}
.shadowed,.to-laureates{
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 3.125vw 0.625vw #eaeaea
}
.shadowed{
margin:1.875vw 0 3.75vw
}
.page-heading.library{
background:#f4f4f4
}
.page-heading.library .btn-forward{
font-size:1.5vw
}
@media (max-width:470.5625vw){
.page-heading.library .btn-forward{
font-size:0.75vw
}

}
.lib-alert{
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 3.125vw 0.625vw #eaeaea;
padding:1.5625vw;
font-size:1.09375vw;
text-align:center;
margin-bottom:2.60vw
}
.lib-content{
padding:2.60vw 0
}
.lib-text{
width:100%;
max-width:100%;
font-size:0.9375vw
}

.lib-text td{
padding:1.5625vw 0
}

.lib-text td:first-child{
text-align:center;
width:11.25vw
}

.lib-time .times{
margin:1.5625vw 0;
display:-webkit-box;
display:-ms-flexbox;
display:flex;
-webkit-box-orient:horizontal;
-webkit-box-direction:normal;
-ms-flex-flow:row wrap;
flex-flow:row wrap
}
.lib-time .times .day{
width:14.28%;
text-align:center;
font-size:1.041vw;
background:#f3f3f3
}

.lib-time .times .day.dark{
background:#e1e1e1
}
.lib-time .times .day.green{
background:#69a840;
color:#fff
}
.lib-time .times .day .name{
padding:1.875vw 0 1.25vw;
font-weight:700
}
.lib-time .times .day .work{
padding:1.25vw 0 1.875vw
}
.lib-time p{
font-size:0.9375vw
}
.page-heading.about{
background:#f4f4f4
}
.table-partners{
font-size:1.041vw;
}

.table-partners td{
padding:0.3125vw;
width:50%;
vertical-align:top
}

.table-partners td a{
	display: block;
	position: relative;
	float: left;
	width: 100%;
}

.table-partners td a img{
	width: 100%;
}

.table-partners img{
    -webkit-box-shadow: 0 0 0.1vw 0.2vw #eaeaea;
    box-shadow: 0 0 0.1vw 0.2vw #eaeaea;
    max-width: 100%;
}
.UnderLogoText{
	padding-top: .7vw;
    display: block;
    position: relative;
    float: left;
}

.about-list{
margin-top:2.60vw
}
.about-list .item{
display:-webkit-box;
display:-ms-flexbox;
display:flex;
-webkit-box-pack:justify;
-ms-flex-pack:justify;
justify-content:space-between;
-webkit-box-align:center;
-ms-flex-align:center;
align-items:center;
margin-bottom:3.75vw
}
.about-list .item .text{
background: no-repeat 1.302vw;
    padding: 0.2604vw 0 0.2604vw 6.77vw;
    max-width: 65%;
    min-height: 6.25vw;
    background-size: 4vw;
    background-position-y: 0vw;
}

.about-list .item .more{
max-width: 31.875vw;
    padding: 1.875vw;
    -webkit-box-shadow: 0 0 3.125vw 0.625vw #eaeaea;
    box-shadow: 0 0 1vw 0.125vw #eaeaea;
    display: inline-block;
    color: #000;
}

.about-list .item .more:hover{
text-decoration:none
}

.about-list .item:first-child strong{
color:#64a2d9
}
.about-list .item:nth-child(2) strong{
color:#6da623
}
.about-list .item:nth-child(3) strong{
color:#a8252a
}
.about-list .item:nth-child(4) strong{
color:#000
}
.about-list .item:nth-child(5) strong{
color:#2c3f65
}
.about-team .item{
margin-bottom:3.75vw
}
.about-team .item .name{
font-size:1.25vw;
margin:1.5625vw 0 1.25vw
}
.about-team .item .description{
margin-bottom:1.25vw
}
.about-team .item .mail{
font-style:italic
}
.contact-form{
max-width:500px;
margin-bottom:3.125vw
}
.govern-thing .sect{
padding-bottom:3.64vw;
position:relative
}


.govern-thing .sect:before{
    content: "";
    position: absolute;
    width: 0.3645vw;
    left: 1.5625vw;
    top: 8.3vw;
    height: calc(100% - 8.3vw);
    z-index: 1;
}


.govern-thing .sect:last-child:before{
display:none
}
.govern-thing .sect:after{
content:"";
display:table;
clear:both
}
.govern-thing .sect ul{
padding:0;
list-style-type:none
}
.govern-thing .sect ul li{
padding-left:2.60vw;
position:relative
}
.govern-thing .sect ul li:before{
content:"";
width:0.5625vw;
height:0.5625vw;
position:absolute;
left:0.9375vw;
top:0.3125vw
}
.govern-thing .sect-1:before{
background:#c20012
}
.govern-thing .sect-2:before{
background:#d9b600
}
.govern-thing .box{
font-weight:700;
font-size:1.25vw;
background:#fff;
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 3.125vw 0.625vw #eaeaea;
padding:1.5625vw;
width:20.3125vw;
height:8.3vw;
float:left;
}

.govern-thing .sect-2 .box{
padding:2.39583vw 0 0 7.291vw;
background:url(/files/pages/about/2/1.png) no-repeat 2.1875vw
}
.govern-thing .sect-3 .box{
    padding: 2.375vw 0 0 7.5vw;
    background: url(/files/pages/about/2/2.png) no-repeat 2.1875vw;
}
.govern-thing .text{
font-size:0.9375vw;
margin-left:23.4375vw
}

.govern-thing .text .title{
font-size:1.25vw;
margin-bottom:0.78125vw
}

.govern-thing .sect-1 li:first-child:before{
background:#e3101a
}
.govern-thing .sect-1 li:last-child:before{
background:#1096e3
}
.govern-thing .sect-2 li:first-child:before{
background:#f4cd30
}
.govern-thing .sect-2 li:last-child:before{
background:#6fb353
}
.govern-thing .sect-3 li:first-child:before{
background:#e3101a
}
.govern-thing .sect-3 li:last-child:before{
background:#f4cd30
}
.page-heading.camp{
background:#d0d7da;
background-image:url("/files/pages/camp/SUMMER_SCHOOL_BG_-01.png");
background-image:url("/files/pages/camp/SUMMER_SCHOOL_BG_-01.png"),-webkit-gradient(linear,left top,right top,from(#fff),to(#d0d7da));
background-image:url("/files/pages/camp/SUMMER_SCHOOL_BG_-01.png"),linear-gradient(90deg,#fff,#d0d7da);
background-repeat:no-repeat;
background-position:100% 0;
background-size: contain;
}
.page-heading.camp+.container{
background:url("/files/pages/camp/footer.png") no-repeat 100% 100%
}
.page-heading.camp+.container .btn-forward{
margin-bottom:1.875vw
}
@media (min-width:1200px){
.page-heading.camp+.container .btn-forward{
font-size:1.041vw
}

}
.program{
margin:2,604vw 0
}
.program .summary{
padding:0.260vw 0 0 6.51vw;
background:url(/files/pages/camp/2/summary.png) no-repeat 2.8125vw;
height:3.125vw;
margin-bottom:1.25vw;
background-size: 2vw;
}
.program .lessons .item{
padding:1.0416vw 1.302vw;
margin-bottom:1.0416vw;
-webkit-box-shadow:0 0 3.125vw 0.625vw #eaeaea;
box-shadow:0 0 3.125vw 0.625vw #eaeaea;
display:-webkit-box;
display:-ms-flexbox;
display:flex;
-webkit-box-align:center;
-ms-flex-align:center;
align-items:center
}

.program .lessons .item .title{
-webkit-box-flex:1;
-ms-flex:1;
flex:1;
font-size:1.0416vw;
font-weight:700
}

.program .lessons .item .teacher{
-webkit-box-flex:1;
-ms-flex:1;
flex:1;
height:2.604vw;
font-size:0.9375vw;
padding-left:4.6875vw;
background:url(/files/pages/camp/2/teacher.svg) no-repeat 0
}

.teachers{
margin:3.125vw 0
}
.teachers .item{
margin-bottom:3.125vw;
display:-webkit-box;
display:-ms-flexbox;
display:flex
}
@media (max-width:470.5625vw){
.teachers .item{
display:block
}

}
.teachers .item .photo{
	clear: both;
    width: 20%;
    padding-right: 2%;
    float: left;
    padding-top: 1vw;
}

.teachers .item .text{
	width: 80%;
	float: left;
}

.teachers .item .text .name{
font-size:1.875vw;
margin-bottom:1.25vw
}
.camp-form{
margin-bottom:3.125vw
}
.camp-form .in-row{
display:-webkit-box;
display:-ms-flexbox;
display:flex;
margin-bottom:1.875vw
}
.camp-form .in-row div:first-child{
width:50%
}
.camp-form .file-text{
font-size:1.25vw
}

.camp-form .privacy{
margin:1.875vw 0
}
.soviet{
margin:1.875vw -0.9375vw
}
.soviet .item{
margin-bottom:3.125vw;
font-size:1.25vw
}
.soviet .item .name{
font-weight:700;
margin:0.78125vw 0 1.5625vw;
height:auto;
font-size: 1.0416vw;
}

.soviet .description{
	font-size: 1,0416px;
}
.admins{
margin:0;
}
.admins .item{
    margin-bottom: 3.75vw;
    overflow: hidden;
    font-size: 1.0416vw;
    width: 46%;
    float: left;
    margin: 0vw 2% 2vw;
}
.admins .item img{
    float: left;
    margin-right: 50%;
    display: block;
    position: relative;
    width: 50%;
}

.admins .item a{
	font-size: 0.83vw;
	
}

.admins .item .text{
float:left;
padding-top:1.5625vw
}
.admins .item .text .name{
font-weight:700;
margin-bottom:0;
font-size: 1.041vw;
}
.contact-table td{
padding:0.9375vw;
font-size:1vw;
}
.contact-table td:first-child{
text-align:center
}
.big-text{
font-size:2.5vw;
line-height:1.2em;
margin:3.125vw 0
}
@media (max-width:45vw){
.home-slider .col-sm-4{
display:none
}
.home-slider .title{
font-size:1.5vw
}
.home-slider .text{
font-size:1vw
}
.home-event .item .date,.home-event .item .type{
font-size:1.25vw
}
.home-event .item .title{
font-size:1vw
}
.home-research .item .title{
font-size:2vw
}
.home-award .title{
font-size:1.5vw
}
.home-award img{
height:11.25vw
}
.events-filter{
display:none
}
.events-filter .search input{
width:100%
}

.events-filter .input-year input{
width:1.5vw;
height:1.5vw
}
.events-filter .input-year{
font-size:1vw
}
.events-grid .item .title{
font-size:1.25vw
}
.events-grid .icons{
font-size:1.25vw
}
.breadcrumb-current,.breadcrumb-parent,.page-heading.event .date-upcoming{
display:none
}
.page-heading.event .bottom{
position:static;
margin-top:1.25vw
}
.page-heading.event .itsfree{
display:block
}
.event-data .big-date{
float:none;
font-size:1.375vw;
margin-top:0
}
#register .title{
font-size:1.5vw
}
#register .btn-register{
margin-bottom:1.875vw
}

}
@media (min-width:481px) and (max-width:62.5vw){
.home-slider .col-sm-4{
display:none
}
.home-slider .title{
font-size:2vw
}
.section-title{
font-size:2.5vw
}
.home-research .item .title{
font-size:2vw
}
.home-award img{
height:13.125vw
}
.breadcrumb-current,.breadcrumb-parent,.events-heading .col-sm-3,.page-heading.event .date-upcoming{
display:none
}
.page-heading.event .bottom{
position:static;
margin-top:1.25vw
}
.page-heading.event .itsfree{
display:block
}
.event-data .big-date{
float:none;
font-size:1.5vw;
margin-top:0
}
.col-tablet-6{
float:left;
width:50%
}
.col-tablet-hidden{
display:none
}

}
.w-shadow{
-webkit-transition:-webkit-box-shadow .3s ease-in;
transition:-webkit-box-shadow .3s ease-in;
transition:box-shadow .3s ease-in;
transition:box-shadow .3s ease-in,-webkit-box-shadow .3s ease-in
}
.w-shadow:hover{
-webkit-box-shadow:0 0 1px 2px #eaeaea!important;
box-shadow:0 0 1px 2px #eaeaea!important
}


.linkbutton {

    background: #c20012;

    color: #fff;

    font-size: 1.25vw;

    display: inline-block;

    padding: 0.375vw 1.875vw;

    border-radius: 1.25vw;

    cursor: pointer;


}


.linkbutton-link {

      display: none;

  
}


.event-data iframe {
 max-width: 100% !important;
 
}


.news-block {

    display: flex;

    flex-wrap: wrap;


}


.single-news {

    flex: 1 0 21%;
 /* explanation below */
    margin: 0.3125vw;

    display: flex !important;

    flex-direction: column;

    justify-content: left;

    align-items: flex-start;


}


.single-news .link {

    position: absolute;

    bottom: 0.625vw;

    align-self: flex-end;


}

.single-news .date {

    margin-bottom: 1.25vw !important;


}


.news-list {

    display: flex;

    flex-direction: column;

    padding-top: 1.25vw !important;

    height: 60% !important;


}


.news-list .to_post {

    position: absolute;

    bottom: 0.625vw;


}


.news-list .lib-content {

    padding-top: 1.25vw !important;


}


.events-grid.news-part {

    padding-top: 1.875vw !important;


}


.sidebar-menu .menu-summer-school-2018 {

    background-image:url(/files/pages/camp/camp2018.png);

    background-size: 12%;


}


.sidebar-menu .menu-summer-school-2019 {

    background-image:url(/files/pages/camp/camp2019.png);

    background-size: 12%;


}


.modal.book .flex-row {

    display: flex;

    padding: 0;


}


.modal.book .form-input {

    margin-bottom: 0.3125vw;


}


.modal.book .modal-dialog {

    width: 70%;

    height: auto;

    margin: auto;

    padding: 0.625vw;


}


.modal.book .modal-dialog .modal-content {

    background-color: #f4f4f4;

    border-radius: 0 !important;

    box-shadow: none;

    width: 75%;


}


.modal.book .modal-dialog .thumb {

    background: #006eb5;

    width: 25%;

    background-image: url("/img/thumb.png");

    background-position: center center;

    background-repeat: no-repeat;


}


.modal.book .modal-header {

    border-bottom: 0 none;

    padding-left: 3.125vw;

    padding-top: 1.875vw;

    width: 80%;


}


.modal.book .modal-body {

    padding: 3.125vw;


}

.modal.book .modal-footer {

    border-top: 0 none;

    padding-top: 0.625vw;

    padding-bottom: 2.5vw;

    margin-left: 1.875vw;

    margin-right: 1.875vw;


}


.modal.book .modal-title {

    padding-top: 0.625vw;

    padding-left: 0.75vw;

    font-size: 1.5vw;

    text-align: left;

    font-weight: bold;


}


.modal.book .modal-title2 {

    padding-top: 0.9375vw;

    padding-left: 0.75vw;

    padding-bottom: 0.9375vw;

    font-size: 1.5vw;

    text-align: left;

    font-weight: bold;


}

.modal.book .privacy {

    font-size: 1.25vw;
    padding-right: 0.9375vw;


}

.modal ::-webkit-input-placeholder {
 /* Chrome/Opera/Safari */
    font-size: 0.75vw;


}

.modal ::-moz-placeholder {
 /* Firefox 19+ */
    font-size: 0.75vw;


}

.modal :-ms-input-placeholder {
 /* IE 10+ */
    font-size: 0.75vw;


}

.modal :-moz-placeholder {
 /* Firefox 18- */
    font-size: 0.75vw;


}


.library-item {

    text-align: left;

    -webkit-box-shadow: 0 0 3.125vw 0.625vw #eaeaea;

    box-shadow: 0 0 3.125vw 0.625vw #eaeaea;

    font-size: 1.375vw;
    padding-right:4.375vw;

    padding-left: 1.875vw;

    padding-bottom: 1.25vw;


}


.library-item h3 {
    font-size: 0.9375vw;
    font-weight: bold;
}

.library-item p {
    font-size: 0.83vw;
}

.lib-cont {

    display: flex;

    margin-bottom: 3.125vw;


}


.library-item:first-child {

    flex: 1 1 auto;

    margin: 1.875vw;


}

.library-item:last-child {

    flex: 1 1 auto;

    margin: 1.875vw;


}


.library-item button {
    margin-top:1.5625vw;
}

.library-item p {

    margin-top: 0.9375vw;


}


.modal.visit .flex-row {

    display: flex;

    padding: 0;


}


.modal.visit .times {

    text-align: left;


}


.modal.visit .schedule {

    background: crimson;

    width: 35%;

    left: 3px;

    color: whitesmoke;


}


.modal.visit .schedule-container {

    text-align: center;


}


.modal.visit .modal-header {

    border-bottom: 0 none;


}


.modal.visit .modal-footer {

    border-top: 0 none;


}


.modal.visit .modal-dialog .modal-content {

    background-color: #f4f4f4;

    border-radius: 0 !important;

    box-shadow: none;

    width: 75%;

    padding: 0.625vw;


}


.modal.visit .modal-title {

    font-weight: bold;


}


.modal .form-input {

    box-shadow: none;


}


.modal.visit .modal-dialog {

    width: 70%;

    height: auto;

    margin: auto;

    padding: 0.625vw;


}


.modal.visit .schedule-container h3 {

    text-align: left;

    margin-right: 15%;

    margin-left: 15%;

    margin-bottom: 3.125vw;


}


.modal.visit .form-input {

    margin-bottom: 0.5vw;


}


.modal.visit .times .row div:first-child {

    font-weight: bold;


}


.modal.visit .times .row {

    margin-bottom: 0.625vw;


}


.modal.visit .times  {

    margin-left: 15%;

    margin-right: 15%;


}



.ui-timepicker-container.ui-timepicker-standard {

    z-index: 999999999 !important;


}


.modal.sent .flex-row {

    display: flex;

    padding: 0;


}


.modal.sent .modal-header {

    border-bottom: 0 none;

    padding-bottom: 0;


}


.modal.sent .modal-title {

    font-weight: bold !important;


}

.modal.sent .modal-footer {

    border-top: 0 none;


}


.modal.sent .modal-dialog .modal-content {

    height: auto;

    background-color: #fff;

    border-radius: 0 !important;

    box-shadow: none;

    width: 55%;

    padding: 2.8125vw;


}


.modal.sent button.btn.btn-register.green.pull-left {

    margin-top: 2.5vw;

    margin-bottom: 1.25vw;


}


.modal.sent .library-ticket {

    background: #1e427a;

    width: 35%;

    background-image: url("/img/success-books.png");

    background-position: center center;

    background-repeat: no-repeat;

    background-size: 45%;


}


.modal.sent .modal-body {

    padding-top: 0 !important;


}


/* -------------- */

.modal.recommended .flex-row {

    display: flex;

    padding: 0;


}


.modal.recommended .modal-header {

    border-bottom: 0 none;

    padding-bottom: 0;


}


.modal.recommended .modal-title {

    font-weight: bold !important;


}

.modal.recommended .modal-footer {

    border-top: 0 none;


}


.modal.recommended .modal-dialog .modal-content {

    height: auto;

    background-color: #fff;

    border-radius: 0 !important;

    box-shadow: none;

    width: 60%;

    padding: 100px;

    padding-left: 3.125vw;


}


.modal.recommended button.btn.btn-register.blue.pull-left {

    margin-top: 1.25vw;

    margin-bottom: 5vw;


}


.modal.recommended .library-ticket {

    background: #1e427a;

    width: 40%;

    background-image: url("/img/success-books.png");

    background-position: center center;

    background-repeat: no-repeat;

    background-size: 50%;


}


.modal.recommended .modal-body {

    padding-top: 0 !important;


}


/*************************************/

.modal.ticket .flex-row {

    display: flex;

    padding: 0;


}


.modal.ticket .times {

    text-align: left;


}


.modal.ticket .library-ticket {

    background: #3b63ac;

    width: 30%;

    background-image: url("/img/lib-ticket.png");

    background-position: center center;

    background-repeat: no-repeat;

    background-size: 50%;


}


.modal.ticket .modal-header {

    border-bottom: 0 none;


}


.modal.ticket .modal-footer {

    border-top: 0 none;


}


.modal.ticket .modal-dialog .modal-content {

    background-color: #f4f4f4;

    border-radius: 0 !important;

    box-shadow: none;

    width: 70%;

    padding: 0.625vw;


}


.modal.ticket .modal-title {

    font-weight: bold;


}


.modal .form-input {

    box-shadow: none;


}


.modal.ticket .modal-dialog {

    width: 70%;

    height: auto;

    margin: auto;

    padding: 0.625vw;


}


.modal.ticket .schedule-container h3 {

    text-align: left;

    margin-right: 15%;

    margin-left: 15%;

    margin-bottom: 3.125vw;


}


.modal.ticket .form-input {

    margin-bottom: 0.5vw;


}


.error {

    color: firebrick;


}


.info-box {
    display: flex;
margin-bottom: 2.6041vw;

}


.info-box div {

    margin: 0.75vw;


}


.info-box div:first-child img {

    width: 1.1875vw;


}


.info-box img {

    margin-right: 0.5vw;


}


.info-box span {

    top: 2px;

    position: relative;


}

img{
max-width: 100%;
}


.home-slider {
width: 100%;
overflow: hidden;
}
.foot-35 a{
    float: right;
    margin-right: 1.8%;
}

.logobox a{
display: block;
position: relative;
float: left;
width: 100%;
margin: 0;
padding: 0;
}

.item .description{
font-size: 0.83vw;
}


.principles{
display:-webkit-box;
display:-ms-flexbox;
display:flex;
-webkit-box-pack:justify;
-ms-flex-pack:justify;
justify-content:space-between;
-webkit-box-orient:horizontal;
-webkit-box-direction:normal;
-ms-flex-flow:row wrap;
flex-flow:row wrap
}

.icons2 li{
margin-top: 1vw;
width: 100%;
}

.icons2 li span{
font-size: 1.1vw !important;
}

.event .row{
	    display: flex;
    align-items: center;
	
}
.video iframe{
	width: 100%;
	
}

.MembersTable, .MembersTable td{
border-collapse: collapse;
border: 1px solid #eee;
padding: 1vw 2vw;
}
.MembersTable .PersonNameAndPhoto{
width: 40%;
}

.MembersTable .PersonAchivements{
width: 60%;
}
img{
max-width: 100%;
}


.home-slider .item.light, .home-slider .item.light a {
    color: #000;
	min-height: 0 !important;
}

.awardHLogo{
	max-height: 15vw;
	width: auto;
	
}

.home-books div.col-sm-6 div{
	font-size: 0.83vw;
}

.table-list, .table-list p{
	font-size: 0.9375vw;
	
}

.events-type-bg-4-a, .events-type-bg-2-a, .events-type-bg-5-a{
	font-size: 0.9375vw !important;	
    background: #69a840;
    color: #fff !important;
    display: inline-block ;
    padding: 0.46875vw 1.822vw !important;
    border-radius: 1.09375vw !important;
    cursor: pointer;
    font-weight: bold;
}

.home-event h2{
	padding-top: 0;
	margin-top: 0;
}

.page-heading .head-img img{
	max-height: 14vw;
	
}

.award-council .text{
   height: 4em;
   overflow: hidden;
}

.about-team .mail{
	clear: both;
display: block;
position: relative;
float: left;	
}

.MoreButton{
	color: #3877ba;
	cursor: pointer;
	
	margin-top: 0.5vw;
}