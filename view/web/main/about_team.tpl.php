<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul id="filters" class="mixitup-controls">
                <!--data-filter后面是部门标签，实现跳转-->
                <li class="filter" data-filter="all">All</li>
                <li class="filter" data-filter="1">秘书处</li>
                <li class="filter" data-filter="2">活动部</li>
                <li class="filter" data-filter="3">宣传部</li>
                <li class="filter" data-filter="4">外联部</li>
                <li class="filter" data-filter="5">财务处</li>
            </ul>
        </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->

<div class="container">
    <div class="row">
        <div class="portfolio-holder" id="Grid">
            <!--mix后面是部门名称，动画用-->

            <? foreach($data['team']['members'] as $member) { ?>
            <div class="portfolio-post col-sm-6 col-md-3 mix <?=$member['catagory_id']?>">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category"><?=$member['catagory']?></span>
                                <h3 class="portfolio-title"><?=$member['name']?></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="images/team/<?=$member['image']?>" title="<?=$member['name']?>">
                                <span class="meta-category"><?=$member['catagory']?></span>
                                <h3 class="portfolio-title"><?=$member['name']?></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="images/team/<?=$member['image']?>" title="<?=$member['name']?>">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <img src="images/team/<?=$member['image']?>" alt="<?=$member['name']?>">
                </div>
            </div>
            <!-- /.col-md-3 -->
            <?}?>
        </div> <!-- /.portfolio-holder -->
    </div> <!-- /.row -->
</div> <!-- /.container -->
