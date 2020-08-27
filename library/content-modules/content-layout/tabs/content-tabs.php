
<div class="tabs-container">
    <h2><?php the_field('productTab_main_title');?></h2>
    <ul class="tabs" role="tablist">

    <?php $i = 0;?>
    <?php if (have_rows('productTab_add')): while (have_rows('productTab_add')): the_row();?>

		        <li>
		            <input type="radio" name="tabs" id="tab<?php echo $i; ?>" checked />
		            <label for="tab<?php echo $i; ?>"
		                role="tab"
		                aria-controls="panel<?php echo $i; ?>"
		                tabindex="0"><?php the_sub_field('productTab_label')?></label>
		            <div id="tab-content<?php echo $i; ?>"
		                class="tab-content"
		                role="tabpanel"
		                aria-labelledby="description">
		                <div class="product-main-image">
		                    <?php
        $mainImage = get_sub_field('productTab_main_image');
        ?>
		                    <a data-lity href="<?php echo esc_url($mainImage['url']); ?>">
		                        <img src="<?php echo esc_url($mainImage['sizes']['product-gallery-image']); ?>" alt="<?php echo esc_attr($mainImage['alt']); ?>" />
		                    </a>
		                </div>
		                <div class="product-gallery">
		                    <?php
        $images = get_sub_field('productTab_gallery');
        $size = 'product-gallery-image'; // (thumbnail, medium, large, full or custom size)
        if ($images): ?>
		                        <ul>
		                            <?php foreach ($images as $image): ?>
		                                <li>
		                                    <a data-lity class="gallery-item" href="<?php echo esc_url($image['url']); ?>">
		                                        <img src="<?php echo esc_url($image['sizes']['product-gallery-thumb']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		                                    </a>
		                                </li>
		                            <?php endforeach;?>
	                        </ul>
	                    <?php endif;?>
                </div>

                <div class="product-content">
                    <h3><?php the_sub_field('productTab_section_title');?></h3>
                    <?php the_sub_field('productTab_content');?>
                </div>



            </div>
            <?php $i++;?>
        </li>

    <?php endwhile;endif;?>

    </ul>
</div>
<script>

    let radiobtn = document.getElementById("tab0");
    radiobtn.checked = true;
//This needs work
    function tallestContainer(selector,targetSelector) {
	    let target = document.querySelectorAll(targetSelector || '.tabs-container',
        let selector = selector || '.tab-content',
	        query = document.querySelectorAll(selector),
	        elements = query.length,
	        max = 0;
	    if (elements) {
	        while (elements--) {
	            var element = query[elements];
	            if (element.offsetHeight > max) {
	                max = element.offsetHeight;
	            }
                return max;
	        }
            let offset = max + 100;

	    }
        target.style.height = `${offset}px`;
	}

	    window.addEventListener('resize', tallestContainer);
	    window.addEventListener('load', tallestContainer);



</script>
<script src="https://kit.fontawesome.com/56a7cebe29.js" crossorigin="anonymous"></script>