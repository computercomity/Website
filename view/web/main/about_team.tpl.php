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
            <?php foreach($data['team']['members'] as $member) { ?>
            <div class="portfolio-post col-sm-6 col-md-3 mix <?php=$member['catagory_id'];?>">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category"><?php=$member['catagory'];?></span>
                                <h3 class="portfolio-title"><?php=$member['name'];?></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="images/team/<?php=$member['image'];?>" title="<?php=$member['name'];?>">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="images/team/<?php=$member['image']?>" alt="<?php=$member['name']?>">
                </div>
            </div>
            <!-- /.col-md-3 -->
            <?php}?>
        </div> <!-- /.portfolio-holder -->
    </div> <!-- /.row -->
</div> <!-- /.container -->
