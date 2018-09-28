<?php 

/** Template Name: Marketplace Page
 * description: List liquor license for sale
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<div class="wrap">

			<div class="contact-header">
				<h1>MARKETPLACE</h1>
				<h3>Below are the liquor licenses we currently have for sale. Our goal is to give you the best value and make your experience buying or selling a liquor license as seamless and stress-free as possible.<br><br>If you have questions or wish to inquire about a license, please <a style="font-weight:bold; color: black;" href="<?php echo get_page_link(14); ?>">get in touch with us</a> or email us at <a style="color:black; font-weight: bold;" href="mailto:dnewcomb@LLAUSA.com">dnewcomb@LLAUSA.com</a></h3>
				<br><br>
			</div>

			<div class="col-sm-12 marketplace">

				<script type="text/javascript">window.define = undefined;</script>
				<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
				<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.5/iframeResizer.js"></script>

				<iframe id="bbs" src="https://www.bizbuysell.com/brokerdirectory/Profile/ViewAllListings.aspx?J=b&I=35047&m_dmr=1" onload="$(window).scrollTop(0);"></iframe>

				<script type="text/javascript">
					try { iFrameResize({},'#bbs'); } catch(e) {}

				</script>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>