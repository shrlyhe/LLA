<?php 

/** Template Name: Marketplace Page
 * description: List liquor license for sale
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<div class="contact-header">
			<h1>MARKETPLACE</h1>
			<h2>Aenean vel elementum leo. Sed sapien nunc, pretium commodo pellentesque congue, volutpat quis elit. Praesent aliquam odio sed nisi commodo, dignissim luctus dui vestibulum. Ut ut enim quis est convallis pulvinar vitae et felis. Proin vulputate enim quis purus placerat maximus. Aliquam bibendum turpis eget augue interdum vulputate. Quisque ornare nunc lacus, quis tristique odio porttitor quis. Curabitur consectetur at ipsum sed placerat.</h2>
		</div>

		<div class="col-sm-12 marketplace">

			<script type="text/javascript">window.define = undefined;</script>
			<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.5/iframeResizer.js"></script>

			<iframe id="bbs" src="https://www.bizbuysell.com/brokerdirectory/Profile/ViewAllListings.aspx?J=b&I=35047&m_dmr=1" marginwidth="0" marginheight="0" scrolling="no" style="border-style:none;width:100%;" onload="$(window).scrollTop(0);"></iframe>

			<script type="text/javascript">
				try { iFrameResize({},'#bbs'); } catch(e) {}

			</script>

		</div>
	</div>
</div>

<?php get_footer(); ?>