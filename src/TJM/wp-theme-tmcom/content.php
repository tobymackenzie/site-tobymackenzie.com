<?php
/*=====
Content template: Renders the main content area when no more specific content templates exist.  TJMBase uses this template for all content types (eg 'index', 'single', 'archive', 'page', and 'search') except 'none'.
=====*/


//=====debug
if(WP_DEBUG){
?>
<!--Debug:
	@Template tmweb/content.php
-->
<?php
}

//=====content
$thumbnail = (is_single() ? get_the_post_thumbnail() : null);
$title = get_the_title();
$permalinkTitle = ($title ?: TMWebWPTheme::getPostTitle(get_the_ID()));

$postType = TMWebWPTheme::getPostType();
?>
<article <?php post_class("post post-default post-" . get_the_ID() . " h-entry mainItem"); ?> id="post-<?php the_ID(); ?>">
<?php
if($title || $thumbnail){
?>
	<header class="postHeader">
<?php
	if($thumbnail){
?>
		<div class="postHeaderMedia"><?=$thumbnail?></div>
<?php
	}
	if($title){
		if(is_page() || is_single()){
?>
		<h1 class="postHeading p-name"><?=$title?></h1>
<?php
		}else{
?>
		<h2 class="postHeading p-name"><a class="postHeadingAction u-url" href="<?php the_permalink(); ?>"><?=$title?></a></h2>
<?php
		}
	}
?>
	</header>
<?php
}
?>
	<header class="postMeta">
		<div class="postMetaMain">
<?php
if(!is_page()){
?>
			<?php if(!$title){ ?><h2 class="postHeading"><a class="permalink u-url" href="<?=get_the_permalink()?>" title="<?=esc_attr(sprintf(__('Post "%s"', 'tmweb'), $permalinkTitle))?>" rel="bookmark"><?php } ?>
				<time class="dt-published postTime" datetime="<?php the_time('Y-m-d G:i') ?>" pubdate="pubdate"><?php the_time('F jS, Y \a\t H:i') ?></time>
			<?php if(!$title){ ?></a></h2><?php } ?>
<?php
	$tagTerms = [];
	if(!is_category()){
		$categories = get_the_category();
		if($categories){
			$tagTerms = $categories;
		}
	}
	$tags = get_the_tags();
	if($tags){
		$tagTerms = array_merge($tagTerms, $tags);
	}
	if($tagTerms){
?>
			<div class="postTags">
				<?=__('in', 'tmweb')?>
				<ul class="postTagsList">
<?php
		foreach($tagTerms as $tag){
?>
					<li class="postTag"><a class="postTagAction p-category" href="<?=esc_url(get_tag_link($tag))?>" rel="tag"><?=$tag->name?></a></li>
<?php
		}
?>
				</ul>
			</div>
<?php
	}
}
?>
		</div>
<?php
if(is_single()){
?>
		<?php edit_post_link(__('Edit post', 'tmweb'), '<span class="editActionWrap">', '</span>'); ?>
<?php
}
if(is_single()){ ?>
		<div><a class="postPermalink permalink u-url" href="<?=get_the_permalink()?>" title="<?=esc_attr(sprintf(__('Permalink to %s', 'tmweb'), $permalinkTitle))?>" rel="bookmark"><?php _e('Permalink', 'tmweb'); ?></a></div>
<?php
}
//-! old theme had post type as link (`/type/{type}/`)
?>
	</header>
<?php

//--Output post content.  Excerpt for search results, full content for everything else.
if(is_search()){
?>
	<div class="postContent p-summary"><?php the_excerpt(); ?></div>
<?php }else{ ?>
	<div class="postContent e-content">
		<?php the_content(__('Continue reading', 'tmweb') . '<span class="sro"> post "' . $permalinkTitle . '"</span>'); ?>
		<?php wp_link_pages(Array(
			'after'=> '</div>'
			,'before'=> '<div class="pageLinks">' . __('Pages:', 'tmweb')
		)); ?>
	</div>
<?php } ?>
	<hr />
</article>
<?php
if($postType === 'single' || $postType === 'page'){
	comments_template('', true);
}
