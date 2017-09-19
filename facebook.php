<!DOCTYPE html>
<html>
<head>
	<title>Facebook LogIn/LogUp</title>
	<!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/register.css" rel="stylesheet">
</head>
<body>
	<div class="header">
		<div class="container">
				<a href="" class="logo">
					<img width="17%"  style="margin-top: 25px;" src="<?php echo base_url(); ?>images/facebook-white.png">
				</a>
			<div class="login-form">
				<form method="post" action="register_success/successfull">
					<table class="form-content"> 
						<tr>
							<td class="padding-up padding-back">Email or Phone</td>
							<td class="padding-up padding-front padding-back">Password</td>
						</tr>
						<tr>
							<td class="padding-up padding-back">
								<input style="color: #000000;" type="email" class="mail" name="email" id="login-mail">
							</td>
							<td class="padding-up padding-front padding-back">
								<input style="color: #000000;" type="password" class="password" name="password" id="login-password">
							</td>
							<td class="padding-up padding-front">
								<input class="bttn" type="submit" name="submit" value="Log In">
							</td>
						</tr>
						<tr>
							<tbody>
								<td class="padding-up padding-back"></td>
								<td class="padding-up padding-front">
									<a style="color:#9cb4d8;" href="">Forgotten accont?</a>
								</td>
								<td class="padding-up"></td>
							</tbody>	
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<div class="register-area">
		<div class="container">
			<div class="left-content">
				<div class="content-one">
					Facebook helps you connect and share with the people in your life.
				</div>
				<img class="img" src="<?php echo base_url(); ?>images/graf.png">
			</div>	
			<div class="reight-content">
				<div class="reight-content-one">
					<div class="content-two">
						Create an account
					</div>
					<div class="content-three">
						It's free and always will be.
					</div>
				</div>	
				<div>
					<div class="register-form">
						<div class="reight-content-two">
							<form method="post" action="register/storedetails">
								<div class="full-name form-inline">
									<div class="form-group">
									    <input type="text" class="form-control input-content" id="firstname" name="firstname" placeholder="First name" title="Pleace fill your firstname" pattern="[A-Za-z]{3,20}" required>
									 </div>
									 <div class="form-group">
									    <input type="text" class="form-control input-content" id="surname" name="surname" placeholder="Surname" title="Pleace fill your surname" pattern="[A-Za-z]{1,20}" required>
									 </div>
								</div>
								<div class="number">
									<div class="form-group">
									    <input type="email" class="form-control input-two" id="email" name="email" placeholder="Email address" title="Pleace fill your email" pattern="[A-Za-z0-9._]{2,30}[@]{1}[a-z0-9.]{2,30}[.]{1}[a-z]{2,4}" required>
									 </div>
									 <div class="form-group">
									    <input type="password" class="form-control input-three" id="password" name="password" placeholder="New password" title="Pleace fill your required password" pattern="[0-9A-Za-z]{8,12}" required>
									</div>
								</div>
								<div class="reight-content-three">
									<div class="content-four">Birthday</div>
									<div>
										<span>
											<select aria-label="Day" name="day" id="day" title="Day" class="date-of-birth">
												<option value="0">Day</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30" selected="1">30</option>
												<option value="31">31</option>
											</select>
											<select aria-label="Month" name="month" id="month" title="Month" class="date-of-birth">
												<option value="0">Month</option>
												<option value="1">Jan</option>
												<option value="2">Feb</option>
												<option value="3">Mar</option>
												<option value="4">Apr</option>
												<option value="5" selected="1">May</option>
												<option value="6">Jun</option>
												<option value="7">Jul</option>
												<option value="8">Aug</option>
												<option value="9">Sept</option>
												<option value="10">Oct</option>
												<option value="11">Nov</option>
												<option value="12">Dec</option>
											</select>
											<select aria-label="Year" name="year" id="year" title="Year" class="date-of-birth">
												<option value="0">Year</option>
												<option value="2017">2017</option>
												<option value="2016">2016</option>
												<option value="2015">2015</option>
												<option value="2014">2014</option>
												<option value="2013">2013</option>
												<option value="2012">2012</option>
												<option value="2011">2011</option>
												<option value="2010">2010</option>
												<option value="2009">2009</option>
												<option value="2008">2008</option>
												<option value="2007">2007</option>
												<option value="2006">2006</option>
												<option value="2005">2005</option>
												<option value="2004">2004</option>
												<option value="2003">2003</option>
												<option value="2002">2002</option>
												<option value="2001">2001</option>
												<option value="2000">2000</option>
												<option value="1999">1999</option>
												<option value="1998">1998</option>
												<option value="1997">1997</option>
												<option value="1996" selected="1">1996</option>
												<option value="1995">1995</option>
											</select>
										</span>
										<a class="birth-information" id="birthday-help" href="#" title="Click for more information" rel="async" role="button">Why do I need to provide my date of birth?</a>
									</div>	
								</div>
								<div class="reight-content-four">
									<div class="select-gender">
										<span>
											<input type="radio" id="gender" name="gender" value="Female" id="">
											<label class="gender-option" for="">Female</label>
										</span>
										<span>
											<input type="radio" name="gender" id="gender" value="Male" id="">
											<label class="gender-option" for="">Male</label>
										</span>
									</div>
								</div>
								<div class="reight-content-five">
									<p class="terms-conditions">
										By clicking Create an account, you agree to our Terms and confirm that you have read our <a href="">Data Policy</a> , including our Cookie Use Policy. You may receive SMS message notifications from Facebook and can opt out at any time.
									</p>
								</div>
								<div class="submit">
									<input type="submit" class="btn btn-success btn-submit" name="submit" id="submit" value="Create an account">
								</div>
							</form>
						</div>	
					</div>
				</div>
				<div class="reight-content-six">
					<div>
						<p><a href="">Create a Page</a> for a celebrity, band or business.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pagefooter">
		<div class="container">
			<div class="languages">
				<ul>
					<li>
						English (UK)
					</li>
					<li>
						<a href="#" title="Kannada">Kannada</a>
					</li>
					<li>
						<a href="#" title="Tamil">Tamil</a>
					</li>
					<li>
						<a href="#" title="Telugu">Telugu</a>
					</li>
					<li>
						<a href="#" title="Hindi">Hindi</a>
					</li>
					<li>
						<a href="#" title="Malayalam">Malayalam</a>
					</li>
					<li>
						<a href="#" title="more"><button>+</button></a>
					</li>
				</ul>
			</div>
			<div class="footer-row"></div>
			<div class="page-info">
				<table class="info-table" cellpadding="0" cellspacing="0">
					<tr>
						<td class="page1">
						<a href="">Sign Up</a>
						</td>
						<td class="page2"><a href="">Log In</a></td>
						<td class="page3"><a href="">Messenger</a></td>
						<td class="page4"><a href="">Facebook Lite</a></td>
						<td class="page5"><a href="">Mobile</a></td>
						<td class="page6"><a href="">Find Friends</a></td>
						<td class="page7"><a href="">People</a></td>
						<td class="page8"><a href="">Pages</a></td>
						<td class="page9"><a href="">Places</a></td>
						<td class="page10"><a href="">Games</a></td>
						<td class="page11"><a href="">Locations</a></td>
					</tr>
					<tr>
						<td class="page12"><a href="">Celebrities</a></td>
						<td class="page13"><a href="">Marketplace</a></td>
						<td class="page14"><a href="">Groups</a></td>
						<td class="page15"><a href="">Recipes</a></td>
						<td class="page16"><a href="">Sports</a></td>
						<td class="page17"><a href="">Moments</a></td>
						<td class="page18"><a href="">Instagram</a></td>
						<td class="page19"><a href="">About</a></td>
						<td class="page20"><a href="">Premium privacy policy</a></td>
						<td class="page21"><a href="">Standard privacy policy</a></td>
						<td class="page22"><a href="">Cookies</a></td>
					</tr>
					<tr>
						<td class="page23"><a href="">Acceptable Use Policy</a></td>
						<td class="page24"><a href="">Standard Terms of Service</a></td>
						<td class="page25"><a href="">Help</a></td>
					</tr>
				</table>
			</div>
			<div class="copyright">
				<span>Facebook @ 2017</span>
			</div>
		</div>
	</div>
</body>
</html>