<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
   <main class="content" role="main">
    
<article class="post">

    <header>
               
        <!--<div class="post-meta tags">
          
        <?php _e('tags in：'); ?>
        
        <?php $this->tags('  ', true, '暂无标签'); ?>        
          
        </div>-->

        <h1 class="post-title"><?php $this->title() ?></h1>

        <div class="post-meta">

        <time datetime="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?></time>

        </div>

    </header>

    <section class="post-content">

        <?php $this->content(); ?>

    </section>

    
    
    <section class="share">

    <p class="backtotop"><a data-scroll href="#site-head"><i class="fa fa-lg fa-fw fa-angle-double-up"></i></a><a data-scroll class="backtotoptext" href="#site-head"> Back to top</a></p>


    <p class="info prompt">Share</p>

    <a href="http://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>&amp;appkey=<?php $this->options->title();?>/&amp;title=<?php $this->title() ?>&amp;" title="Share on Weibo"
        onclick="window.open(this.href, 'weibo-share', 'width=550,height=235');return false;">
        <i class="fa fa-2x fa-fw fa-weibo"></i> <span class="hidden">weibo</span>
    </a>

    <a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&amp;title=<?php $this->title() ?>&amp;site=<?php $this->options->title();?>/&amp;" title="Share on Qzone"
        onclick="window.open(this.href, 'qzone-share','width=580,height=296');return false;">
        <i class="fa fa-2x fa-fw fa-star" style="margin-left: -8px"></i> <span class="hidden">qzone</span>
    </a>

    <a href="https://plus.google.com/share?url=<?php $this->permalink() ?>" title="Share on Google+"
       onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">
        <i class="fa fa-2x fa-fw  fa-google" style="margin-left: -8px"></i> <span class="hidden">Google+</span>
    </a>

</section>

    <footer class="post-footer">
        <section class="author">
    <div class="authorimage" style="background: url(<?php $this->options->logoUrl(); ?>)"></div>
    <p class="attr">AUTHOR</p>
    <h4><?php $this->author->screenName(); ?></h4>
    <p class="bio"> About author <?php $this->options->gyw(); ?></p>
</section>

    </footer>
    
</article>

    </main>
<?php $this->need('footer.php'); ?>