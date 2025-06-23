<?php get_header("2"); ?>
<style>
	header {
		margin: 0 auto;
	}

	h1.single_title {
		color: #364e96;/*文字色*/
		padding: 0.5em 0;/*上下の余白*/
		border-top: solid 3px #364e96;/*上線*/
		border-bottom: solid 3px #364e96;/*下線*/
	}

	h1.my_h1 {
		position: relative;
		background: #dfefff;
		box-shadow: 0px 0px 0px 5px #dfefff;
		border: dashed 2px white;
		padding: 0.2em 0.5em;
		color: #454545;
	}

	h1.my_h1:after {
		position: absolute;
		content: '';
		left: -7px;
		top: -7px;
		border-width: 0 0 15px 15px;
		border-style: solid;
		border-color: #fff #fff #a8d4ff;
		box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.15);
	}
	h2 {
		padding: 0.5em;/*文字周りの余白*/
		color: #494949;/*文字色*/
		background: #fffaf4;/*背景色*/
		border-left: solid 5px #ffaf58;/*左線（実線 太さ 色）*/
	}
	h3 {
		padding: 0.4em 0.5em;/*文字の上下 左右の余白*/
		color: #494949;/*文字色*/
		background: #f4f4f4;/*背景色*/
		border-left: solid 5px #7db4e6;/*左線*/
		border-bottom: solid 3px #d7d7d7;/*下線*/
	}
	h4 {
		position: relative;/*相対位置*/
		line-height: 1.4;/*行高*/
		display: inline-block;
	}

	h4:before, h4:after {
		position: relative;
		font-family: "Font Awesome 5 Free";
		font-weight: 900;
		display: inline-block;
		font-size: 1.0em;
		color: #ff6a6a;
	}
	h4:before {
		content:"\f053";/*アイコン種類*/
		padding-right: 0.5em
	}
	h4:after {
		content:"\f054";/*アイコン種類*/
		padding-left: 0.5em
	}
	h5 {
		/*線の種類（二重線）太さ 色*/
		border-bottom: double 5px #FFC778;
	}

	ul.my_ul{
		margin: 1em 0;
		list-style-type: disc;
	}
	ol{
		margin: 1em 0;
		list-style-type: decimal;
	}
	ul.my_ul, ol {
		background: #fcfcfc;/*背景色*/
		padding: 0.5em 0.5em 0.5em 2em;/*ボックス内の余白*/
		border: solid 3px gray;/*線の種類 太さ 色*/
	}

	ul.my_ul li, ol li {
		line-height: 1.5; /*文の行高*/
		padding: 0.5em 0; /*前後の文との余白*/
	}
	table{
		width: 100%;
		border-spacing: 0;
	}

	table th{
		border-bottom: solid 2px #fb5144;
		padding: 10px 0;
	}

	table td{
		border-bottom: solid 2px #ddd;
		text-align: center;
		padding: 10px 0;
	}

	/*以下class名link_buttonのデザイン*/
	.single_content a {
		font-weight: bold;/*太字に*/
		text-decoration: none;/*下線消す*/
		background: skyblue;/*背景を水色に*/
		color:white;/*文字を白に*/
		padding:5px 10px;/*内側の余白*/
		border-radius: 20px;/*角を丸くする*/
		font-family: 'Avenir','Arial';/*フォントをいい感じに*/
		color: #fff;
	}
	/*以下カーソルを当てたとき*/
	.single_content a:hover {
		background: silver;/*背景色をシルバーに*/
		text-decoration: none;/*下線を消す*/
	}

	/*以下訪問済みのデザイン*/
	.single_content a:visited {
		color: #fff;/*文字をグレイに*/
	}
</style>
<div class="wrapper shingle_wrapper" style="max-width:1200px; margin: 0 auto; padding: 0 5% 5%;">
    <main class="main_contents">
    <?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>
        <h1 class="single_title"><?php the_title(); ?></h1>
            <?php if(has_post_thumbnail()) : ?>
            <div class="single_thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <?php endif; ?>
        <div class="single_content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
    </main>
</div>

<?php get_footer("2"); ?>