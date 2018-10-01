<?php 

/** Template Name: About Page
 * description: About page for LLA
 */
get_header(); ?>

<div class="container">
	<div class="row">
		<div class="wrap">
		<div class="col-sm-12 marketplace-button-resources">
			<h1><a href="<?php echo get_page_link(46); ?>">CLICK HERE TO SEE OUR CURRENT LISTINGS</a></h1>

		</div>

			<div class="col-sm-12 about-header">
				<h1>WHO WE ARE</h1>
			</div>

			<div class="col-sm-10 about-overview">
				<h3> Liquor License Advisor has earned a reputation for integrity and results throughout the industry because of the high level of professional, personalized service and attention to detail which we deliver to every client.  We thrive on complex liquor license challenges where our creativity and strategic problem-solving skills can be used to facilitate a solution and ultimately a successful transaction.  Our clients depend on us to be the driving force on projects from the outset until the project is completed.  
				<br><br>Our long-standing relationships with a nationwide network of corporate licensing managers, liquor license attorneys, landlords, lenders, restaurant and liquor store owners, developed over more than two decades, allow us to be effective wherever you need us—Massachusetts, New Jersey, Pennsylvania, Florida or anywhere in the US.   
				<br><br>We’ve refined our process to make liquor licensing even easier for you so that you can take care of what’s most important to you.  We routinely share our extensive knowledge base with attorneys who may not be familiar with the specifics of liquor licensing, work with franchise developers to secure licenses that match their timelines and lease obligations and offer consultations to corporate restaurant partners on market considerations before they ever break ground.   Whether you are buying, selling or just need to learn more about licensing, Liquor License Advisors will help you get the results you are looking for. 
				<br><br>We take pride in our ability to employ creative solutions when necessary, keep deals together and maintain a level of calm throughout even the most challenging transaction.
				<br><br>To learn more about our general offerings and specialized services for attorneys, licensing coordinators, liquor store owners, franchise developers, food and beverage establishment owners, lenders, and more, <a href="<?php echo get_page_link( get_page_by_title( SERVICES )->ID ); ?>" style="font-weight:bold; color: black;">CLICK HERE</a>.</h3>
			</div>

			<div class="col-sm-2 about-service">
				<h2>WHO YOU ARE</h2>
				<ul>
 <!--  <a href="<?php echo get_page_link(55); ?>" ><button type="button" class="get-started-button">LENDERS</button></a> -->

					<h3><li><a href="<?php echo get_page_link(21); ?>" style="color:black"><button type="button" class="get-started-button-about">License Attorney</button></a></li></h3>
					<h3><li><a href="<?php echo get_page_link(23); ?>" style="color:black"><button type="button" class="get-started-button-about">License Professional</button></a></li></h3>
					<h3><li><a href="<?php echo get_page_link(27); ?>" style="color:black"><button type="button" class="get-started-button-about">Franchise Developer</button></a></li></h3>
				<!-- 	<h3><li><a href="<?php echo get_page_link(); ?>" style="color:black">Landlord</a></li></h3> -->
					<h3><li><a href="<?php echo get_page_link(55); ?>" style="color:black"><button type="button" class="get-started-button-about">Lender</button></a></li></h3>
					<h3><li><a href="<?php echo get_page_link(29); ?>" style="color:black"><button type="button" class="get-started-button-about">Liquor Store Owner</button></a></li></h3>
					<h3><li><a href="<?php echo get_page_link(53); ?>" style="color:black"><button type="button" class="get-started-button-about">Restaurant Owner</button></a></li></h3>
					
				</ul>
			</div>
			<div class="col-sm-12 about-header-members">
				<h1>We're Proud Members Of...</h1>
			</div>

				<img id="company-logos-members" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos-about-page.png"/>  


			<!-- PEOPLE SECTION -->
			<div class="about-awards col-sm-12">
				<h1 class="about-header-meet">MEET THE TEAM</h1>
			</div>
			<div class="about-category col-sm-12">
				<img id="about-team-pics" src="<?php echo get_stylesheet_directory_uri(); ?>/images/about-dan.jpg"/>
				<h3 id="people-name" style="color: #891b1b;">Dan Newcomb</h3>
				<h2 style="color: #891b1b;"><a href="mailto:dnewcomb@llausa.com" style="color: #891b1b;">dnewcomb@llausa.com</a></h2>
				<h2><i style="color: #891b1b;">Founder, CEO</i></h2><br>
				<h2>Dan is the founder of Liquor License Advisor. He’s advised the nation’s most prominent restaurant, hotel and retail brands for over 15 years, working alongside clients as well as attorneys, lenders, and development teams to deliver results with timeliness and integrity. His work in the world of liquor licensing isn’t limited to brokering, either. Dan readily consults many of the largest food and beverage customers in the country on topics such as market research, real estate zoning, and licensing legislation changes.<br><br>In addition to an earned reputation for meeting licensing needs with professional and personalized service, Dan loves tackling complex assignments that involve enthusiasm and thinking innovatively to problem-solve. He’s dialed into everything you need to make licensing simple, and looks forward to helping people think bigger about the future.
				</h2>	
			</div>


			<div class="about-category col-sm-4">
				<img id="about-team-pics" src="<?php echo get_stylesheet_directory_uri(); ?>/images/about-ben.jpg"/>
				<h3 id="people-name" style="color: #891b1b;"><b>Ben Jerrom</b></h3>
				<h2 style="color: #891b1b;"><a style="color: #891b1b;" href="mailto:bjerrom@llausa.com">bjerrom@llausa.com</a></h2>
				<h2><i style="color: #891b1b;">Partner, Advisor</i></h2><br>
				<h2>Ben brings diverse experiences to the Liquor License Advisor team, making him well-equipped to handle all major aspects of liquor license brokering in addition to being well-versed in the food and beverage industry. <br><br>In fact, Ben worked his way up, serving in restaurants while learning the ins and outs of the industry. Later, he was part of a real estate law firm before joining international law firm Baker & McKenzie LLP. <br><br>In 2016, Ben joined Liquor License Advisor, and helped expand LLA’s presence in New Jersey and Pennsylvania. He’s especially invested in building relationships with business owners and local attorneys, as well as consulting clients on the value of their licenses to help expedite the process and ensure efficiency and timeliness. Ben’s hands-on work in the food and beverage industry coupled with his time in the legal field give him a unique skill set that makes license transfers seamless for every party involved. </h2>
			</div>

			<div class="about-category col-sm-4" id="team-last">
				<img id="about-team-pics" src="<?php echo get_stylesheet_directory_uri(); ?>/images/about-becky.jpg"/>
				<h3 id="people-name" style="color: #891b1b;"><b>Becky Smith</b></h3>
				<h2 style="color: #891b1b;"><a style="color: #891b1b;" href="mailto:bsmith@llausa.com">bsmith@llausa.com</a></h2>
				<h2><i style="color: #891b1b;">Operations Manager & Executive Assistant</i></h2><br>
				<h2 >Becky’s skills in managing financial and business operations throughout her career add an extra layer of timeliness, attention to detail, and creative problem-solving to the Liquor License Advisor team. She supervised a closing team of one of the nation’s top 30 lenders, and she supported a managing attorney and owner of a boutique law firm serving Fortune 500 clients in real estate, foreclosure and bankruptcy matters. <br><br>At LLA, Becky facilitates successful closing and consulting projects for over 200 clients, and she’s committed to delivering exceptional results to clients and attorneys with value-added service. 
				</h2>
			</div>

			<!-- CLIENTS SECTION -->
			<div class="about-awards col-sm-12">
				<h1 id="about-header-representative">REPRESENTATIVE CLIENTS</h1>
			</div>
			<div class="about-category col-sm-4" id="offpremise-licensing">
				<h3><u>Off Premise Licensing</u></h3>
				<ul>
					<li>Total Wine</li>
					<li>Liquor Barn</li>
					<li>Stop & Shop</li>
					<li>Roche Bros</li>
					<li>Star Market</li>
					<li>Wegman's</li>
					<li>7-Eleven</li>
					<li>BJ’s Wholesale Club®</li>
					<li>Trader Joe’s</li>
				</ul>
			</div>

			<div class="about-category col-sm-4" id="onpremise-licensing">
				<h3><u>On Premise Licensing</u></h3>
				<ul style="columns: 3;">
				<li>Nordstroms</li>
				<li>Dave & Buster’s</li>
				<li>Bar Louie®</li>
				<li>Chili’s</li>
				<li>Bertucci’s</li>
				<li>Morton’sTM Steakhouse</li>
				<li>Landry's</li>
				<li>Darden Restaurant Group</li>
				<li>Bloomin Brands</li>
				<li>Sbarro</li>
				<li>Applebee's</li>
				<li>Legal Seafoods</li>
				<li>Shake Shack</li>
				<li>Wahlburgers</li>
				<li>Lyon's Group</li>
				<li>Big Night Entertainment</li>
				<li>Not Your Average Joe's</li>
				<li>TGI Fridays</li>
				<li>Smith & Wollensky</li>
				<li>Uno Chicago Grill</li>
				<li>American Airlines Admiral's Club</li>
				<li>Delta Airlines Sky Club</li>
				<li>United Airlines</li>
				<li>US Airways</li>
				<li>HMS Host</li>
				<li>Boston Uiniversity</li>
				<li>Renaissance</li>
				<li>Marriott</li>
				<li>Hilton</li>
				<li>Westmont Hotels</li>
				<li>Pyramid Group</li>
				<li>APCV Boston Hotel</li>
				<li>Restoration Hardware</li>
			</ul>

		</div>

		<div class="about-category col-sm-4" id="valuation-licensing">
			<h3><b><u>Liquor License Valuation and Consulting</u><b></h3>
			<ul>
				<li>Century Bank</li>
				<li>Citizens Bank</li>
				<li>Santander</li>
				<li>Northern Bank</li>
				<li>Haverhill Bank</li>
				<li>Eastern Bank</li>
				<li>Salem Five</li>
				<li>Abington Bank</li>
				<li>Cooperative Bank</li>
			</div>
		</div>

		<div class="get-in-touch">
			<div class="about-awards col-sm-12" id="">
				<h1 class="about-header-meet">GET IN TOUCH</h1>
				<h2>If you have initial questions about <a style="font-weight:bold; color: black;"href="<?php echo get_page_link(8); ?>">our services</a> or <a style="font-weight:bold; color: black;"href="<?php echo get_page_link(46); ?>">current listings</a>, we'd love to hear from you.</h2>
			</div>
			

			<div class="col-sm-12 about-contact-box">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1> CONTACT US </h1>

					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>
</div>

</div>
</div>



<?php get_footer(); ?>
