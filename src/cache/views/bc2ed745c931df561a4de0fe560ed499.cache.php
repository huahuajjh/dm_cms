<?php $indexc = 1;  include $this->_include('./base/en-header.html'); ?>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=gf44xN3SGL81vGV7K9GRyx5XKdXBpsie"></script>
<!-- 系统样式及JS -->
    <div class="banner">
        <a class="arrow-left"></a>
        <a class="arrow-right"></a>
        <div class="swiper-container" id="banner">
            <div class="swiper-wrapper">
                <?php $return = $this->_listdata("catid=48 pagesize=999 more=1 cache=36000"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                <div class="swiper-slide"><a href="<?php echo $t['lianjie']; ?>" target="__bark"><img src="<?php echo $t['yingwenbantupian']; ?>"></a></div>
                <?php } } ?>
            </div>
        </div>
    </div>
    <div class="container-body">
        <div class="index-container">
            <h2>ABOUT US<span>企业简介</span></h2>
            <div class="index-container-body">
                <div class="index-container-img">
                    <img src="<?php echo SITE_THEME; ?>image/gs.png">
                </div>
                <div class="index-container-p" style="
    padding-top: 20PX;
">
                    <p style="line-height: 1.75em;color: #000;">&nbsp; &nbsp;Xiamen DaoMei Rubber and Plastic Products Co.,Ltd. is a professional production and processing of PVC foaming board,rubber,mattresses,pvc board,pvc free foam board,pvc crust foam board and other products limited liability company (natural person investment or holding),the company is headquartered in Xiang'an district,Xiamen City,Fujian Province.China,Xinan Billage,wown house.DaoMei,Xiamen DaoMei Rubber and Plastic Produts Co.,Ltd.has a complete and scientific quality managrment system . integrity of the rice US-Rubber & Plastic Products Co.Ltd.in Xiamen,strength and quality  of products recognized by the industry.welcome friends to bisit the Xiamen rice America Rubber and Plastic priducts Co.Ltd.visit,guidance and business negotiations.</p>                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="index-prodicts">
        <img src="<?php echo SITE_THEME; ?>image/index-cp-bg.jpg" alt="">
        <div class="index-prodicts-context">
            <div class="container-body">
                <div class="index-container">
                    <h2>OUR PRODUCTS<span>我们的产品</span></h2>
                </div>
                <div class="index-prodicts-context-btns">
                    <a href="/index.php?c=content&a=list&catid=27" class="index-prodicts-btn index-prodicts-btn-fapao">PVC结皮发泡板</a>
                    <a href="/index.php?c=content&a=list&catid=28" class="index-prodicts-btn index-prodicts-btn-fuhe">PVC复合板</a>
                    <a href="/index.php?c=content&a=list&catid=29" class="index-prodicts-btn index-prodicts-btn-fangshui">UV防水板</a>
                </div>
            </div>
        </div>
    </div>
    <div class="index-container">
        <h2>案例展示<span>THE EXAMPLE</span></h2>
        <div class="example-list">
            <div class="swiper-container" id="example">
                <div class="swiper-wrapper">
                    <?php $i = 0;  $return = $this->_listdata("catid=42 pagesize=20 more=1 cache=36000"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                    <div class="swiper-slide">
                        <a href="/index.php?c=content&a=list&catid=43&infoId=<?php echo $t['id']; ?>" class="example-item" onclick="selectexample(<?php echo $i; ?>);">
                            <img src="<?php echo $t['thumb']; ?>" alt="">
                            <span><?php echo $t['title']; ?></span>
                        </a>
                    </div>
                    <?php $i = $i + 1;  } } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="index-news">
        <div class="index-container">
            <h2>NEWS CENTER<span>新闻中心</span></h2>
        </div>
        <div class="container-body">
            <?php $return = $this->_listdata("catid=24 num=1 more=1 cache=36000 order=id"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
            <a class="index-news-image-info" href="/index.php?c=content&a=show&id=<?php echo $t['id']; ?>">
                <img src="<?php echo $t['thumb']; ?>" alt="">
                <h3><i class="fa fa-caret-right"></i> <?php echo $t['title']; ?></h3>
                <p><?php echo $t['description']; ?></p>
                <span><?php echo date("Y-m-d", $t['updatetime']); ?></span>
            </a>
            <?php } } ?>
            <ul class="index-news-list">
                <?php $return = $this->_listdata("catid=24 num=1,3 more=1 cache=36000 order=id"); extract($return); $count=count($result); if (is_array($result)) { foreach ($result as $key=>$t) { ?>
                <li>
                    <a href="/index.php?c=content&a=show&id=<?php echo $t['id']; ?>">
                        <h3><i class="fa fa-caret-right"></i> <?php echo $t['title']; ?></h3>
                        <p><?php echo $t['description']; ?></p>
                        <span><?php echo date("Y-m-d", $t['updatetime']); ?></span>
                    </a>
                </li>
                <?php } } ?>
            </ul>
            <a href="/index.php?c=content&a=list&catid=24" class="index-news-more">MORE</a>
            <div class="clear"></div>
        </div>
    </div>
    <div class="container-body" id="callme" style="position: relative;">
        <div class="index-container">
            <h2>CONTACT US<span>联系我们</span></h2>
        </div>
        <div class="index-contact">
            <div class="index-contact-left">
                <div class="index-contact-tel">0592-7270378</div>
                <div class="index-contact-phone">18900202069</div>
                <div class="index-contact-mail">2196930998@qq.com</div>
                <div class="index-contact-dz" style="font-size: 15px;">Xiamen Xiang'an district town house Xinan Village DEVElopment Zone</div>
                <div id="allmap" style="width: 500px;height: 240px; margin-left: 60px; margin-top: 20px;"></div>
            </div>
            <div class="index-contact-hr"></div>
            <form method="post" class="index-contact-right" action="/index.php?c=form&a=post&modelid=7&cid=">
                <div class="index-contact-input">
                    <label>Name：</label>
                    <input type="text" name="data[xingming]" maxlength="10">
                    <div class="clear"></div>
                </div>
                <div class="index-contact-input">
                    <label>Phone：</label>
                    <input type="text" name="data[dianhua]" maxlength="11">
                    <div class="clear"></div>
                </div>
                <div class="index-contact-input">
                    <label>Message：</label>
                    <textarea rows="5" name="data[neirong]" maxlength="100"></textarea>
                    <div class="clear"></div>
                </div>
                <button name="submit" type="submit" class="index-contact-btn">Submit</button>
            </form>
            <div class="clear"></div>
        </div>
        <a class="go-top-btn" id="goTop"></a>
    </div>
    <script src="<?php echo SITE_THEME; ?>js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo SITE_THEME; ?>js/idangerous.swiper2.7.6.min.js"></script>
    <script>
        var bannerSwiper = new Swiper('#banner',{
            loop:true,
            resizeReInit : true,
            calculateHeight: true,
            autoplay: 3000
        });
        $('.banner .arrow-left').on('click', function(e){
            e.preventDefault()
            bannerSwiper.swipePrev()
        })
        $('.banner .arrow-right').on('click', function(e){
            e.preventDefault()
            bannerSwiper.swipeNext()
        });
        var exampleSwiper = new Swiper('#example',{
            slidesPerView: 5,
            centeredSlides: true,
            autoplay: 4000,
            loop: true,
            simulateTouch: false
        });
        function selectexample(index) {
            exampleSwiper.swipeTo(index, 300);
        }
        

        // 百度地图API功能
        var map = new BMap.Map("allmap");
        var point = new BMap.Point(118.313839,24.678363);
        var marker = new BMap.Marker(point);  // 创建标注
        map.addOverlay(marker);              // 将标注添加到地图中
        map.centerAndZoom(point, 16);
    </script>
<?php include $this->_include('./base/en-footer.html'); ?>