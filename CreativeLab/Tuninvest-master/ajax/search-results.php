<?php sleep(1);?>
<div class="project-short larger">
	<div class="top-project-info">
		<div class="content-info-short clearfix">
			<a href="#" class="thumb-img">
				<img src="images/ex/th-292x204-3.jpg" alt="$TITLE">
			</a>
			<div class="wrap-short-detail">
				<h3 class="rs acticle-title"><a class="be-fc-orange" href="#">LYK and Bear #1: No Food Deed Unpunished</a></h3>
				<p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">Ray Sumser</a> in <span class="fw-b fc-gray">New York, NY</span></p>
				<p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>

			</div>
			<p class="rs clearfix comment-view">
				<a href="#" class="fc-gray be-fc-orange">75 comments</a>
				<span class="sep">|</span>
				<a href="#" class="fc-gray be-fc-orange">378 views</a>
			</p>
		</div>
	</div><!--end: .top-project-info -->
	<div class="bottom-project-info clearfix">
		<div class="project-progress sys_circle_progress" data-percent="<?php print rand(10, 100);?>">
			<div class="sys_holder_sector"></div>
		</div>
		<div class="group-fee clearfix">
			<div class="fee-item">
				<p class="rs lbl">Bankers</p>
				<span class="val"><?php print rand(90, 400);?></span>
			</div>
			<div class="sep"></div>
			<div class="fee-item">
				<p class="rs lbl">Pledged</p>
				<span class="val">$38,000</span>
			</div>
			<div class="sep"></div>
			<div class="fee-item">
				<p class="rs lbl">Days Left</p>
				<span class="val"><?php print rand(0, 10);?></span>
			</div>
		</div>
		<a class="btn btn-red btn-buck-project" href="#">Buck this project</a>
		<div class="clear"></div>
	</div>
</div><!--end: project-short item -->
<div class="project-short larger">
	<div class="top-project-info">
		<div class="content-info-short clearfix">
			<a href="#" class="thumb-img">
				<img src="images/ex/th-292x204-4.jpg" alt="$TITLE">
			</a>
			<div class="wrap-short-detail">
				<h3 class="rs acticle-title"><a class="be-fc-orange" href="#">LYK and Bear #1: No Food Deed Unpunished</a></h3>
				<p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">Ray Sumser</a> in <span class="fw-b fc-gray">New York, NY</span></p>
				<p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>

			</div>
			<p class="rs clearfix comment-view">
				<a href="#" class="fc-gray be-fc-orange">75 comments</a>
				<span class="sep">|</span>
				<a href="#" class="fc-gray be-fc-orange">378 views</a>
			</p>
		</div>
	</div><!--end: .top-project-info -->
	<div class="bottom-project-info clearfix">
		<div class="project-progress sys_circle_progress" data-percent="<?php print rand(20, 100);?>">
			<div class="sys_holder_sector"></div>
		</div>
		<div class="group-fee clearfix">
			<div class="fee-item">
				<p class="rs lbl">Bankers</p>
				<span class="val"><?php print rand(90, 400);?></span>
			</div>
			<div class="sep"></div>
			<div class="fee-item">
				<p class="rs lbl">Pledged</p>
				<span class="val">$38,000</span>
			</div>
			<div class="sep"></div>
			<div class="fee-item">
				<p class="rs lbl">Days Left</p>
				<span class="val"><?php print rand(0, 10);?></span>
			</div>
		</div>
		<a class="btn btn-red btn-buck-project" href="#">Buck this project</a>
		<div class="clear"></div>
	</div>
</div><!--end: project-short item -->
<script>
$(function () {
    var values = [];
    $(".sys_circle_progress").each(function () {
		if (!$(this).find('.sys_holder_sector').text()) {
			var getDonePercent = parseInt($(this).attr("data-percent"));
			var getPendingPercent = 100 - getDonePercent;
			if(getPendingPercent==0){
				values[0] = getDonePercent;
			}else{
				values[0] = getPendingPercent;
				values[1]=getDonePercent;
			}
			Raphael($(this).find(".sys_holder_sector")[0], 78, 78).pieChart(39, 39, 39, values, "#cecece");
			$(this).append('<span class="val-progress">' + $(this).attr("data-percent") + '%</span>');
		}
    });
});
</script>