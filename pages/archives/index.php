<? include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php'); ?>
<? $title = "Archives"; ?>
<? $section = "archives"; ?>
<? inc('partial','head') ?>
<? inc('partial','banner') ?>
<? inc('partial','menu') ?>

	<main class="main" role="main">
		<section class="index">
			<header class="preface">
				<h1 class="preface_title">Archives</h1>
			</header><!--/.preface-->

<?		  inc('partial','section-year') ?>
<?		  inc('partial','section-year') ?>
<?		  inc('partial','section-year') ?>
<?		  inc('partial','section-year') ?>
<?		  inc('partial','section-year') ?>
<?		  inc('partial','section-year') ?>
<?		  inc('partial','section-year') ?>
<?		  inc('partial','section-year') ?>
<?		  inc('partial','section-year') ?>
		</section><!--/.index-->
	</main><!--/@main-->

<?  inc('partial','navigation') ?>
<?  inc('partial','contentinfo') ?>
<?  inc('partial','foot') ?>