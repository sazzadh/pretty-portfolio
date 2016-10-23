<?php
/*
	Class of Pretty HTML Content (PHC)(phc)
*/

class PHC_HTML{
	
	public $URL;
	public $DRI;
	
	function __construct(){
		$path_dir = trailingslashit(str_replace('\\','/',dirname(__FILE__)));
		$path_abs = trailingslashit(str_replace('\\','/',ABSPATH));
		
		$this->URL = site_url(str_replace( $path_abs, '', $path_dir ));
		$this->DRI = $path_dir;
		
		add_action('wp_enqueue_scripts', array($this, 'script'));
	}
	
	function script(){
		wp_enqueue_style('phc', $this->URL.'/phc.css');
		wp_enqueue_script('phc',  $this->URL.'phc.js' , array('jquery'), '', true);
	}
	
	function convert_color_code_to_css($code){
		
	}
	
	/*
		Banner 1
	=========================================================================*/
	function banner_1($atts = NULL, $content = NULL ){
		extract(shortcode_atts(array(
			'image' => NULL,
			'link' => NULL,
			'title' => NULL,
			'des' => NULL,
			'more_text' => 'Read More',
			'css_class' => NULL,
			'css_id' => NULL,
			'mask_color' => 'rgba(115,146,184, 0.7)',
			'button_color' => 't:#fff/bg:#000/b:#000',
		), $atts));
		
		$output = NULL;
	   
		ob_start();
	   	?>
        <div class="phc_banner1">
        	<div class="phc_banner1_in">
            	<img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
                <div class="phc_banner1_mask" style="background-color:<?php echo $mask_color; ?>;"></div>
                <div class="phc_banner1_content">
					<?php if($title): ?><h4 class="phc_banner1_title"><?php echo $title; ?></h4><?php endif; ?>
					<?php if($des): ?><p class="phc_banner1_des"><?php echo $des; ?></p><?php endif; ?>
                    <?php if($link): ?>
                    	<a href="<?php echo $link; ?>" class="phc_banner1_more phc_btn" style=" <?php echo $this->convert_color_code_to_css($button_color); ?>">
							<?php echo $more_text; ?>
                        </a>
					<?php endif; ?>
				</div>
            </div>
        </div>
        <?php
		$output .= ob_get_contents();
		ob_end_clean();
	
		return $output;	
	}
	
}