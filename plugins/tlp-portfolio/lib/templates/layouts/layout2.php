<?php
$imgHtml = null;
if ( $img ) {
	$imgHtml = sprintf( '<div class="tlp-portfolio-thum tlp-item %s">
                <img class="img-responsive" src="%s" title="%s">
                <div class="tlp-overlay">
                    <p class="link-icon">
                        <a class="tlp-zoom" href="%s"><i class="fa fa-search-plus"></i></a>
                        %s
                   </p>
                </div>
            </div>', $image_area, $img, $title, $imgFull,
		$link ?
			sprintf( '<a href="%s"%s><i class="fa fa-external-link"></i></a>', $item_link, $link_target ? " target='{$link_target}'" :
				null )
			: null );
}
?>
<div class="<?php echo esc_attr( $grid ) ?>">
    <div class="tlp-portfolio-item rt-row">
		<?php echo $imgHtml ?>
		<?php echo sprintf( '<div class="tlp-content2 %s">
                                    <div class="tlp-content-holder">
                                        %s
                                        <div class="tlp-portfolio-sd">%s</div>
                                    </div>
                                  </div>',
			$content_area,
			$link ?
				sprintf( '<h3><a href="%s"%s>%s</a></h3>', $item_link, $link_target ? " target='{$link_target}'" : null, $title ) :
				sprintf( '<h3>%s</h3>', $title ),
			$short_d
		); ?>
    </div>
</div>