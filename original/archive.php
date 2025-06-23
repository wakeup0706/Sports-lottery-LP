<?php get_header("2"); ?>
<style>

	header {
		margin: 0 auto;
	}

	h1.archive-title {
		width: 100%;
		margin-bottom: 15px;
		color: #505050;/*文字色*/
		padding: 0.5em;/*文字周りの余白*/
		display: inline-block;/*おまじない*/
		line-height: 1.3;/*行高*/
		background: #dbebf8;/*背景色*/
		vertical-align: middle;
		border-radius: 25px 0px 0px 25px;/*左側の角を丸く*/
	}

	h1.archive-title:before {
		content: '●';
		color: white;
		margin-right: 8px;
	}

	.postRow {
		padding: 15px;
		color: #6594e0;/*文字色*/
		/*線の種類（点線）2px 線色*/
		border-bottom: dashed 2px #6594e0;
	}
	.postRow p {
		color: #605f5f;
	}

</style>
<div class="arcive-container" style="max-width:1200px; margin: 0 auto; padding: 0 5% 5%;">

	<!-- タイトルを出力 -->
	<h1 class="archive-title">一覧</h1>

	<div>
		<div class="list-box">
			<ul>
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$the_query = new WP_Query( array(
				'post_status'    => 'publish',
				'post_type'      => 'post', // ページの種類（例、page、post、カスタム投稿タイプ）
				'paged'          => $paged,
				'posts_per_page' => 5, // 表示件数
				'orderby'        => 'date',
				'order'          => 'DESC'
			) );
			if ($the_query->have_posts()) :
				while ($the_query->have_posts()) : $the_query->the_post();
				?>
					<div class="postRow">
						<a href="<?php the_permalink(); ?>">
							<h2><?php the_title(); ?></h2>
							<p class="blog_description"><?php the_excerpt(); ?></p>
						</a>
					</div>
				<?php
				endwhile;
				?>
				<div  class="pagination" style="justify-content: flex-end;"><?php wp_pagenavi(array('query' => $the_query)); ?></div>
			<?php
			else:
				echo '<div>記事はありません。</div>';
			endif;
			?>
			</ul>
		</div>
	</div>
	<?php wp_reset_postdata(); ?>
</div>
<?php get_footer("2"); ?>