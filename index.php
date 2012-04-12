<?php get_header();?>
<div class="container-content-little">
	<div class="content-left"> </div>
	<div class="content-right"> 
		<p style="color:#E10005; font-weight:bold; font-size:18px;"> فهرست موضوعات</p>
	</div>
</div>
<div class="container-content">
	<div class="content-opacity"></div>
	<div class="content-orginal">
		
		
		<?php if(have_posts()){while(have_posts()){ the_post();?>
		<div class="post">
			<h1 class="h1-post"><?php the_title();?></h1>
			<p><?php the_content(__("(more ...)"));?></p>
		</div>
		<?php }}else{_e("Sorry, no posts matched your criteria.");} ?>
	</div>
</div>
<?php get_footer();?>
