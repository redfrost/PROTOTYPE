<?php
/*
Template Name: 3 Column
*/
?>

<style type="text/css">
#threecolumn .main {
    margin-top: 10px;
    margin-left: 230px;
}

@media (max-width: 979px){
	#threecolumn .main { margin-left: 0px; }
}

	@media (min-width: 980px){
	  
		/* 3 Column */
		#threecolumn {  }
		#threecolumn  .main {
		    border-left: 1px dotted #CCCCCC;
		    border-right: 1px dotted #CCCCCC;
		    padding: 0 20px;
		    float: left;
		    margin-top: 20px;
		    margin-left: 220px;
		}
		
		#threecolumn .sidebar1 { float:left;  margin-left: 0px; position: absolute; width: 200px;}
		#threecolumn .sidebar2 { float:right; margin-left: 0px; width: 200px; }
		
	}


	@media (max-width: 979px) {
		/* 3 Column */
		#threecolumn {  }
		#threecolumn .main {
		    float: left;
		    margin-left: 0;
		    padding: 0;
		    width: 100%;
		}
  
		#threecolumn .sidebar1,#threecolumn .sidebar2 
		{ margin-left: 0px; width: 100%; margin-top:30px; padding-top:20px; display:block; background:; border-top: 1px dotted #ccc; }
				
	}

</style>

<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
