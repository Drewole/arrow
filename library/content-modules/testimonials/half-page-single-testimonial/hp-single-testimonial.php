<?php
$rows = get_field('career_grid');
if($rows){
	shuffle( $rows )
        $i = 0;
 
	foreach($rows as $row){
		$image = wp_get_attachment_image_src( $row['image'], 'full');
		
		?>
		<a href="<?php echo $row['link']; ?>">
			<img src="<?php echo $image[0]; ?>" alt="<?php echo $image['alt']; ?>" />
		</a>
                  if (++$i == 2) break;
         }
 
	
}

?>