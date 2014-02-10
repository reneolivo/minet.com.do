<?php
	extract( require_model( 'mSingle' ) );

	get_header(); 
?>


<!--CONTENT::[start]-->
    <div id="single_content" class="clearfix">
    	<article>
    		<h1><?php $post->title(); ?></h1>

    		<div class="content">
    			<?php $post->content(); ?>
    		</div>
    	</article>

    	<div class="author">
    		<a href="#">
	    		<figure>
	    			<?php $post->authorAvatar(); ?>
	    		</figure>

	    		<h3><?php $post->authorMeta( 'display_name' ); ?></h3>
	    	</a>

	    	<p><?php $post->authorMeta( 'description' ); ?></p>
    	</div>
    </div>
<!--CONTENT::[end]-->

<?php get_footer(); ?>