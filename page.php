<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <main class="content" role="main">
    
<article class="post">

    <header>
        
        <h1 class="post-title"><?php $this->title() ?></h1>
        <div class="post-meta">
            <time datetime="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?></time>
        </div>
    </header>

    <section class="post-content">       

<?php $this->content(); ?>

    </section>
 
</article>

    </main>

<?php $this->need('footer.php'); ?>