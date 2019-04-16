<article >
	<div id="conceptContainer">

		<div id = "conceptTextContainer" >
			<div id="concept_intro">
				<h2>The Concept</h2>
				<p>"The aim of this project is to produce an app that a sales person can use to plan customer visits, get an update on how the customer's account is doing, and pass information back to the office after a visit for the account of <a href="https://kerridgecs.com">Kerridge Commercial Systems (KCS)</a>"</p>
			</div>
			<div id="illustrations_ft">
				<div class="illustrations_col_ft">
					<div class="features">
						<img src="images/authentication" alt="login_illustration" class="img_illustration_ft"> <p>Personnal account</p>
					</div>

					<div class="features">
						<img src="images/client_list.svg" alt=client_list_illustration class="img_illustration_ft"> <p>Consult the clients list</p>
					</div>
				</div>
				<div class="illustrations_col_ft">
					<div class="features" id="meeting">
						<img src="images/calendar.svg" alt=calendar_illustration class="img_illustration_ft"> <p>Schedule a meeting</p>
					</div>

					<div class="features">
						<img src="images/notes.svg" alt=notes_illustration class="img_illustration_ft"> <p>Take meeting notes</p>
					</div>
				</div>

				<div class="illustrations_col_ft">
					
					<div class="features" id="profile">
						<img src="images/content_digital.svg" alt=client_profile_illustration class="img_illustration_ft"> <p>Consult client profile</p>
					</div>

					<div class="features">
						<img src="images/analyze_data.svg" alt=data_analysis class="img_illustration_ft"> <p>Consult past sales</p>
					</div>
				</div>
			</div>
		</div>

		<div>
			<video width="640" height="480" autoplay loop id="appImg"><source src="images/animation.mp4" type="video/mp4"></video>
			</div>
		</div>

		<script>
			function smoothscroll(){
				$(document).on('click', 'a[href^="#"]', function (event) {
					event.preventDefault();

					$('html, body').animate({
						scrollTop: $($.attr(this, 'href')).offset().top
					}, 500);
				});
			}
		</script>
	</article>