<?php
// VIDEO in Page-banner. Use [video_url] in custom field.
$videoID = get_post_meta($post->ID, 'video_url', true);
// Check if there is in fact a video URL
if ($videoID) {
	echo '<div class="videoContainer">';
	// Echo the embed code via oEmbed
	echo wp_oembed_get( '' . $videoID ); 
	echo '</div>';
}
?>


<div class="featured-image-box">

	<?php
	   if (is_page()) {

	 	if (is_mobile()) {

		 	 if ( has_post_thumbnail()) {
			   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium');
			   echo '<div class="featured-banner" style="background-image: url(' . $large_image_url[0] . ')" >';
			   echo '</div>';
			 }
			 
 		} else {
 		
 			 if ( has_post_thumbnail()) {
			   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
			   echo '<div class="featured-banner" style="background-image: url(' . $large_image_url[0] . ')" >';
			   echo '</div>';
			 }	
 		}
 
 	} ?>

</div>



 