<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

 <footer class="site-footer">

	<div class="inner">

		<section class="footer-social">
      
      <a href="<?php $this->options->wlink(); ?>" target="_blank" title="Weibo"><i class="fa fa-2x fa-fw fa-weibo"></i> <span class="hidden">Weibo</span></a>&nbsp;
       
      <a href="<?php $this->options->glink(); ?>" target="_blank" title="GitHub"><i class="fa fa-2x fa-fw fa-github"></i> <span class="hidden">GitHub</span></a>&nbsp;
           
      <a href="/feed/" target="_blank" title="RSS"><i class="fa fa-2x fa-fw fa-rss"></i> <span class="hidden">RSS</span></a>
      
  </section>

		<section class="copyright">&copy; 2017 Theme maker <a href="https://yiyeti.cc">yiyeti</a>. </section>
	</div>
</footer>

<script src="https://yiyeti.oss-cn-shanghai.aliyuncs.com/usr/uploads/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl('img/default.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('img/highlight.min.js'); ?>"></script>

</body>
</html>
<?php if ($this->options->Compress == 'able'): ?>
<?php $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); ?>
<?php endif; ?>