<?php 
/**
 * Testimonial Slider
 * Author: Toby Taylor
 * Date: Sept 21, 2018
 */
$testimonials = array(
	array(
		'id' => 1, 
		'name' => 'Person 1', 
		'info' => 'Recruiter, IBM', 
		'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, praesentium.", 
		'image' => 'person_image1.jpg'
	),
	array(
		'id' => 2, 
		'name' => 'Person 2', 
		'info' => 'Human Resources, Company Two', 
		'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, praesentium.", 
		'image' => 'person_image2.jpg'
	),
	array(
		'id' => 3, 
		'name' => 'Person 3', 
		'info' => 'Recruiting Manager, Company Three', 
		'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, praesentium.", 
		'image' => 'person_image3.jpg'
	),
);

?>

<div class="testimonials">
	
	<div class="wrapper">
		
		<h1>TESTIMONIALS</h1>

		<?php foreach ($testimonials as $review) : ?>

			<div class="testimonials-inner" id="tab_<?=$review['id']?>" style="display:none">
				
				<div class="ti-text">
					<?=$review['body']?>
					<div class="t-open-quote">
						<img src="<?=base_url()?>images/open-quote.png" alt="" />
					</div>

					<div class="t-close-quote">
						<img src="<?=base_url()?>images/close-quote.png" alt="" />
					</div>
				</div>

				<div class="ti-image">
					<img src="<?=base_url()?>images/<?=$review['image']?>" alt="" />
				</div>

				<div class="ti-name"><?=$review['name']?></div>

				<div class="ti-position"><?=$review['info']?></div>

				<div class="ti-navigation">
					<?php foreach ($testimonials as $dot) : ?>
						<i class="fa <?php if ($review['id'] == $dot['id']) echo "fa-circle"; else echo "fa-circle-thin"; ?> aria-hidden="true" onclick="showTab(<?=$dot['id']?>)"></i>
					<?php endforeach; ?>
				</div>

			</div>

		<?php endforeach;?>

	</div>

</div>


<script>
	
	var tabIndex = 1;
	function showTab(n)
	{
		var numTabs = $(".testimonials-inner").length;
		if (n > numTabs) {
			n = 1;
		}
		$(".testimonials-inner").hide();
		$("#tab_" + n).show();
		tabIndex = n;
	}

	function plusTabs(n) {
	    showTab(tabIndex += n);
	}

	window.setInterval(function(){
		plusTabs(+1)
	}, 20000);

	// show first tab on page load
	showTab(1); 

</script>