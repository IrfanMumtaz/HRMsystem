@extends('layouts.home')
@section('brdCrmbTitle', 'Profile')
@section('brdCrmbLink', 'Dashboard / Profile')
@section('section')
<h2 class="pageHeading">Profile Area</h2>
	
	<div class="dashBody">
		<div class="row marginZero">
			<div class="col-lg-3 col-md-3 col-sm-12 secBody">
				<div class="profileImage">
					<h4>Profile Picture</h4>
					@if($user->profilePic)
						<div class="profile">
							<img src='{{ asset("assets/images/profile/$user->profilePic") }}' class="img-responsive">
						</div>
						
					@else
						<div class="profile">
							<img src='{{ asset("assets/images/profile/default.jpg") }}' class="img-responsive">
						</div>
						
					@endif					
					<div class="form-gorup">
						<form action="profile-pic/update" method="POST" class="form-gorup"  enctype="multipart/form-data">
							<div class="form-gorup marignTB15">
								Profile Picture<input type="file" name="profilePic" id="profilePic" class="form-control-file" accept=".png, jpg, .jpeg">

								Cover Picture<input type="file" name="coverPic" id="coverPic" class="form-control-file" accept=".png, jpg, .jpeg">
							</div>
							<div class="form-gorup marignTB15">
								<input type="hidden" name="_token" value="{{ csrf_token( )}}">
								<input type="submit" name="Update" value="Update" class="btn btn-primary">
							</div>							
						</form>
					</div>
					
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-12 secBody">
				<div class="profileArea">
					<h4>Update Your Profile</h4>
					<div class="form-group">
						<form action="profile/update" method="POST" class="profileForm">
							<div class="form-group col-md-6 col-sm-12">
								<label>Name:</label>
								<input type="text" name="name" class="form-control" value="{{ $user->name }}" readonly="true">
							</div>
							<div class="form-group col-md-6 col-sm-12">
								<label>Phone:</label>
								<input type="text" name="phone" class="form-control" value="{{ $user->phone }}" readonly="true">
							</div>	
							<div class="form-group col-md-6 col-sm-12">
								<label>Email:</label>
								<input type="text" name="email" class="form-control" value="{{ $user->email }}" readonly="true">
							</div>							
							<div class="form-group col-md-6 col-sm-12">
								<label>Facebook Link:</label>
								<input type="text" name="fbLink" class="form-control" value="{{ $user->fbLink }}" readonly="true">
							</div>							
							<div class="form-group col-md-6 col-sm-12">
								<label>Twitter Link:</label>
								<input type="text" name="twLink" class="form-control" value="{{ $user->twLink }}" readonly="true">
							</div>
							<div class="form-group col-md-6 col-sm-12">
								<label>Google+ Link:</label>
								<input type="text" name="gpLink" class="form-control" value="{{ $user->gpLink }}" readonly="true">
							</div>
							<div class="form-group col-md-6 col-sm-12">
								<label>Linkedin Link:</label>
								<input type="text" name="inLink" class="form-control" value="{{ $user->inLink }}" readonly="true">
							</div>
							<div class="form-group col-md-6 col-sm-12">
								<label>Skype Username:</label>
								<input type="text" name="skype" class="form-control" value="{{ $user->skype}}" readonly="true">
							</div>
							<div class="form-group col-md-6 col-sm-12">
								<label>AIM Username:</label>
								<input type="text" name="aim" class="form-control" value="{{ $user->aim }}" readonly="true">
							</div>
							<div class="form-group col-sm-12 ">
								<div id="editProfile" class="btn btn-primary">Edit Profile</div>
								<input type="hidden" name="_token" value="{{ csrf_token()}}">
								<input type="submit" name="updateProfile" value="Update Profile" id="updateProfile" class="btn btn-primary none">
							</div>
						</form>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="profileArea marignTB15">
					<h4>Update Your Password</h4>
					<div class="form-group">
						<form action="password/update" method="POST">
							<div class="form-group">
								<label>Current Password:</label>
								<input type="Password" name="currentPassword" class="form-control" readonly="true">
							</div>
							<div class="form-group">
								<label>New Password:</label>
								<input type="Password" name="newPassword" class="form-control" readonly="true">
							</div>							
							<div class="form-group">
								<label>Confirm Password:</label>
								<input type="Password" name="confirmPassword" class="form-control" readonly="true">
							</div>
							<div class="form-group">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="button" name="updatePassword" value="Update Password" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
           
            
@stop
