<!-- Login form -->
<form class="col-md-6" action="#" method="post">
	<div class="card mb-0  login-card">
		<div class="card-body">
			<div class="text-center mb-3">
				<a href="<?php echo base_url() ?>">
					<div class=" p-picture"></div>
				</a>
				<h5 class="mb-0" style="color:black">Create account test</h5>
				<span class="d-block text-muted"
					  style="color:black">Please enter the information below</span>
			</div>

			<?php get_msg(); ?>
			<div class="row">
				<!-- <div class="col-md-6">
					<div class="form-group">
						<label class=" control-label">Referer ID</label>
						<input type="text" id="referrer_id" name="referer" class="form-control empty"
							   placeholder="Referer ID" value="<?= urlencode($data['referer']) ?>" required>
					</div>
				</div> -->
<!--				 <div class="col-md-6"> 
					<div class="form-group">
						<label class=" control-label">Referer Name</label>-->
<!--						<span id="referrer_name"></span>-->
<!--						<input type="text" id="referrer_name"  class="form-control empty"
							   placeholder="Referer ID"  readonly required>
					</div>
				</div>>-->
<!--				<div class="col-md-6">
					<div class="form-group">
						<label class=" control-label">Referer Mobile</label>-->
<!--						<span id="referrer_mobile"></span>-->
<!--						<input type="text" id="referrer_mobile"  class="form-control empty"
							   placeholder="Referer ID" readonly required>
					</div>
				</div>-->
				<div class="col-md-6">
					<div class="form-group">
						<label class=" control-label">Member Tree</label><code>*</code>
						<br>
						<div class="form-check d-inline">
							<label class="form-check-label">
								<input type="radio" name="on_side" value="0" checked class="form-input-styled required" data-fouc>Left
							</label>
						</div>
						&nbsp;
						<div class="form-check d-inline">
							<label class="form-check-label">
								<input type="radio" name="on_side" value="1" class="form-input-styled" data-fouc>Right
							</label>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class=" control-label">Full Name<code>*</code></label>
						<div>
							<select name="name_title" id="txttenuretype" class="form-control loan-object col-sm-3" style="float: left;" required onchange="callonchange()" />
								<option value="">Title</option>
								<option value="Mr">Mr</option>
								<option value="Shri">Shri</option>
								<option value="Ms">Ms</option>
								<option value="Mrs">Mrs</option>
							</select>
							<input type="text" id="m_name" name="name" class="form-control empty col-sm-9 required"
							placeholder="" minlength="3" maxlength="30" required>
						</div>
						<span id="divor_m_name" style="color:red;"></span>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label class=" control-label">Gender</label><code>*</code>
						<br>
						<div class="form-check d-inline">
							<label class="form-check-label">
								<input type="radio" name="gender" value="0" checked class="form-input-styled required"
									   data-fouc>
								Male
							</label>
						</div>
						&nbsp;
						<div class="form-check d-inline">
							<label class="form-check-label">
								<input type="radio" name="gender" value="1" class="form-input-styled" data-fouc>
								Female
							</label>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class=" control-label">SURNAME<code>*</code></label>
						<div>
							<select name="father_title" id="txttenuretype" class="form-control loan-object col-sm-3" style="float: left;" required onchange="callonchange()" />
								<option value="">Title</option>
								<option value="Mr">Mr</option>
								<option value="Shri">Shri</option>
							</select>
							<input type="text" id="f_name" name="father" class="form-control empty col-sm-9 required"
							placeholder="" minlength="3" maxlength="30" required>
						</div>
						<span id="divor_f_name" style="color:red;"></span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class=" control-label">Date of Birth</label>
						<input type="text" id="m_dob" name="dob"
							   class="form-control empty daterange-single  required">
						<span id="dob_error" style="color:red;"></span>
					</div>
				</div>


				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label">Email address</label><code>*</code>
						<input type="email" id="email" name="email"
							   class="form-control empty user-existance-validation required"
							   required="" placeholder="example@calcun.com">
						<span id="email_error" style="color:red;"></span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class=" control-label">Mobile</label><code>*</code>
						<div>
							<input type="text" name="country_code" id="country_code" class="form-control loan-object col-sm-3" style="float: left;" value="+389" readonly />
							<input type="text" id="m_mobile_no" name="mobile"
							class="form-control empty user-existance-validation required col-sm-9"
						
							placeholder="70222333" minlength="8" maxlength="8">
						</div>
						<span id="mobile_error" style="color:red;"></span>
					</div>
				</div>
				<!-- <div class="col-md-6">
					<div class="form-group">
						<label class=" control-label">State</label>
						<select class="form-control form-control-select2 select2-hidden-accessible"
								id="dropdown-state" name="state" tabindex="-1"
								aria-hidden="true">
							<option value="">Select State</option>
						</select>
						<span id="divaor_m_state" style="color:red;"></span>
					</div>
				</div> -->

				<!-- <div class="col-md-6">
					<div class="form-group">
						<label class=" control-label">City</label>
						<select class="form-control form-control-select2 select2-hidden-accessible"
								id="dropdown-city" name="city" tabindex="-1"
								aria-hidden="true">
							<option value="">Select City</option>
						</select>
						<span id="divor_m_city" style="color:red;"></span>
					</div>
				</div> -->
				<div class="col-md-6">
					<div class="form-group">
						<label class=" control-label">Address</label><code>*</code>
						<textarea name="address" minlength="5" maxlength="50"
								  class="form-control empty required" required></textarea>
						<span id="divor_m_pay" style="color:red;"></span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class=" control-label">Comfy ID Number</label><code>*</code>
						<input type="number" id="aadhar" name="aadhar_no"
							   class="form-control empty user-existance-validation required"
							   required="" placeholder="499118665246">
						<span id="email_error" style="color:red;"></span>
					</div>
				</div>

			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block">Proceed <i
						class="icon-circle-right2 ml-2"></i></button>
			</div>
			<div class="form-group text-center">
				<a href="<?= URL_LOGIN ?>" class="ml-auto">Already have an
					account?</a>
			</div>
			<?PHP include "powered.php"; ?>
		</div>
	</div>

</form>
<!-- /login form -->

