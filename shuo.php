<?php
/**
* 说说
*
* @package custom
*/
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main"><!--说说列表结束-->
<br>
<div class="badge badge-success"><!--说说数量纸条-->
  所有: <span class="badge badge-light"><?php $this->commentsNum('没有说说', '1条说说了', '%d 条说说了'); ?></span>
  <span class="sr-only">unread messages</span>
</div>

</br><!--说说数量纸条结束-->
<br>
<div id="comment_list"><!--说说列表-->

    <?php $this->comments()->to($comments); ?>

        <?php while($comments->next()): ?>

	<div id="<?php $comments->theId(); ?>" class="alert alert-warning" role="alert">

	    <div class="comment_data">

                <?php echo $comments->sequence(); ?>. 
                
                on <?php $comments->date('F jS, Y'); ?> at <?php $comments->date('h:i a'); ?>
            </div>
	    <div class="comment_body"><?php $comments->content(); ?></div>
	</div>
	<?php endwhile; ?>
</div>  
<!--说说列表结束-->



<?php if($this->user->hasLogin()): ?><!--游客隐藏发表框-->

<div id="comments">
  
  <?php $this->comments()->to($comments); ?>
 
    <?php if($this->allow('comment')): ?>
      <div id="<?php $this->respondId(); ?>" class="respond">
          <h3 id="response"><?php _e('发一个说说...'); ?></h3>
    	      <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
    		      <p>
                <label for="textarea" class="required"><?php _e('请输入'); ?>
                </label>
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
              </p>
    		      <p>
                <button type="submit" class="submit"><?php _e('发表'); ?></button>
              </p>
    	      </form>
      </div>
    <?php else: ?>
      <h3><?php _e('说说已关闭'); ?></h3>
    <?php endif; ?>
</div>

<?php endif ; ?><!--游客隐藏发表框-->

</div><!--内容布局-->
  <?php $this->need('footer.php'); ?>

