<?php
// Create id attribute allowing for custom "anchor" value.
		$id = 'contact-block-' . $block['id'];
		if( !empty($block['anchor']) ) {
		    $id = $block['anchor'];
		}

		// Create class attribute allowing for custom "className" and "align" values.
		$className = 'contact-block';
		if( !empty($block['className']) ) {
		    $className .= ' ' . $block['className'];
		}
		if( !empty($block['align']) ) {
		    $className .= ' align' . $block['align'];
		}
		if( $is_preview ) {
		    $className .= ' is-admin';
		}

		$contact_title = get_field('contact_title');
		$contact_desc = get_field('contact_desc');
		$contact_image = get_field('contact_image');
		$contact_background_color = get_field('contact_background_color');
		$shortcode_form = get_field('shortcode_form');

		?>
		<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-color: <?php echo $contact_background_color; ?>">
			<div class="nf-row row">
				<div class="nf-col col-lg-6 offset-lg-1 col-md-12">
					<h3 class="form-title">{{ $contact_title }}</h3>
					<p class="form-description">{{ $contact_desc }}</p>
				</div>
				<div class="nf-col col-lg-6 offset-lg-1 col-md-12">
					<div class="form-contact">
						<?php
							echo do_shortcode($shortcode_form); ?>
					</div>
				</div>
				<div class="nf-col col-lg-5 col-md-12">
					<div class="contact-image">
						<img src="{{ $contact_image }}" alt="image">
					</div>
				</div>
			</div>
		</div>
<?php     