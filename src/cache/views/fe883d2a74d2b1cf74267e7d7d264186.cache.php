<?php $indexc = 2;  include $this->_include('./base/cn-header.html'); ?>
    <img src="<?php echo SITE_THEME; ?>image/top-img1.jpg" class="top-bg">
    <div class="top-child-menu">
        <div class="container-body">
            <a href="/index.php?c=content&a=list&catid=39" class="top-child-menu-btn active">公司介绍</a>
            <a href="/index.php?c=content&a=list&catid=40" class="top-child-menu-btn">公司荣誉</a>
            <a href="/index.php?c=content&a=list&catid=41" class="top-child-menu-btn">产品应用</a>
            <div class="clear"></div>
        </div>
    </div>
    <div class="container-body">
        <h2 class="container-title">公司介绍</h2>
        <div class="container-context">
            <?php echo $cats[39][content]; ?>
        </div>
    </div>
<?php include $this->_include('./base/cn-footer.html'); ?>