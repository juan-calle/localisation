<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

		<div id="pagestrip">
      		<div class="wrap container" role="document">
        		<div class="breadcrumbs">
           		<!-- Breadcrumb -->
           			<a title="Go back to Allen &amp; Heath." href="<?=base_url()?>" class="home">Home</a>
    			</div>
  			</div>
    	</div>
		
		<div id="pageshadow"></div>

		<div id="contentouter" class="contentoutbg">
		 	<div class="wrap container mncont" role="document">	  
		  		<div class="content row">
					<div class="main col-lg-12" role="main">	 
		        		<div class="page-header"><h1>An uncaught Exception was encountered</h1></div>
						<p>Type: <?php echo get_class($exception); ?></p>
						<p>Message: <?php echo $message; ?></p>
						<p>Filename: <?php echo $exception->getFile(); ?></p>
						<p>Line Number: <?php echo $exception->getLine(); ?></p>			      	
					</div><!-- /.main -->
	          	</div><!-- /.content -->
		  	</div><!-- /.wrap -->
		</div><!-- /.contentouter -->

		<div class="clear"></div>






<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

	<p>Backtrace:</p>
	<?php foreach ($exception->getTrace() as $error): ?>

		<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>

			<p style="margin-left:10px">
			File: <?php echo $error['file']; ?><br />
			Line: <?php echo $error['line']; ?><br />
			Function: <?php echo $error['function']; ?>
			</p>
		<?php endif ?>

	<?php endforeach ?>

<?php endif ?>

</div>