@extends('layouts.home')
@section('brdCrmbTitle', 'New Order')
@section('brdCrmbLink', 'Dashboard / New Order')
@section('section')
<h2 class="pageHeading">Order Form</h2>
           <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
					<div class="about-head">
						@if (session()->has('message'))
							<div class="alert alert-success">
							  {{session('message')}}
							</div>
						@endif
						
					</div>
					<div class="form-group">
					    <form method="post" action="new-order/store"  enctype="multipart/form-data" >
					    	<div class="form-group">
							    <input type="text" class="form-control none" id="user_email" name="user_email" value="{{ Auth::user()->email }}">
						  	</div>						  	
							<div class="form-group col-md-12 col-sm-12">
								<label for="educationLevel">Writing Services *</label>
								<select class="form-control" id="writingServices" name="writingServices" required="required">
								    <option value="">---</option><option value="Admission Essay">Admission Essay</option><option value="Annotated Bibliography">Annotated Bibliography</option><option value="Argumentative Essays">Argumentative Essays</option><option value="Article Critique">Article Critique</option><option value="Article Review">Article Review</option><option value="Article Writing">Article Writing</option><option value="Assignment">Assignment</option><option value="Biographies">Biographies</option><option value="Book / Movie Review">Book / Movie Review</option><option value="Business Plan">Business Plan</option><option value="Case Study">Case Study</option><option value="Coursework">Coursework</option><option value="Creative Writing">Creative Writing</option><option value="Critical Thinking">Critical Thinking</option><option value="Critical Writing">Critical Writing</option><option value="Database Creation">Database Creation</option><option value="Dissertation">Dissertation</option><option value="Dissertation chapter - Abstract">Dissertation chapter - Abstract</option><option value="Dissertation chapter - Conclusion">Dissertation chapter - Conclusion</option><option value="Dissertation chapter - Discussion">Dissertation chapter - Discussion</option><option value="Dissertation chapter - Hypothesis">Dissertation chapter - Hypothesis</option><option value="Dissertation chapter - Introduction">Dissertation chapter - Introduction</option><option value="Dissertation chapter - Literature review">Dissertation chapter - Literature review</option><option value="Dissertation chapter - Methodology">Dissertation chapter - Methodology</option><option value="Dissertation chapter - Results">Dissertation chapter - Results</option><option value="Dissertation Proposal">Dissertation Proposal</option><option value="Editing">Editing</option><option value="Essay (any type)">Essay (any type)</option><option value="Exam Question">Exam Question</option><option value="Ghost Writing">Ghost Writing</option><option value="Grant Application">Grant Application</option><option value="Lab Report">Lab Report</option><option value="Literature Review">Literature Review</option><option value="Marketing Proposal">Marketing Proposal</option><option value="Memorandum">Memorandum</option><option value="MS Project Assignment">MS Project Assignment</option><option value="Multiple Choice Question">Multiple Choice Question</option><option value="Online Assignment">Online Assignment</option><option value="Portfolio">Portfolio</option><option value="PowerPoint Presentation">PowerPoint Presentation</option><option value="Presentation or Speech">Presentation or Speech</option><option value="Problem Solving">Problem Solving</option><option value="Project">Project</option><option value="Proof Reading">Proof Reading</option><option value="Quantitative Projects">Quantitative Projects</option><option value="Questionnaire Design">Questionnaire Design</option><option value="Reflection Report/Essay">Reflection Report/Essay</option><option value="Reflective Report">Reflective Report</option><option value="Report">Report</option><option value="Research Paper">Research Paper</option><option value="Research Project">Research Project</option><option value="Research Proposal">Research Proposal</option><option value="Research Proposal">Research Proposal</option><option value="Resume Writing">Resume Writing</option><option value="Re-writing">Re-writing</option><option value="Software Development">Software Development</option><option value="Term Paper">Term Paper</option><option value="Thesis">Thesis</option><option value="Thesis / Dissertation chapter">Thesis / Dissertation chapter</option><option value="Thesis Proposal">Thesis Proposal</option><option value="Video Creation">Video Creation</option><option value="Web Content">Web Content</option><option value="Website Design &amp; Development">Website Design &amp; Development</option><option value="Other">Other</option>
								</select>
							</div>
							<div class="form-group col-md-6 col-sm-12">
								<label for="educationLevel">Education Level *</label>
								<select class="form-control" id="educationLevel" name="educationLevel" required="required">
								    <option value="Degree / Undergrad">Degree / Undergraduate</option>
								    <option value="Masters/PostGrad">Master / Post Grade</option>
								    <option value="Ph.D">Ph.D</option>
								</select>
							</div>
							<div class="form-group col-md-6 col-sm-12">
								<label for="serviceLevel">Service Level *</label>
								<select class="form-control" id="serviceLevel" name="serviceLevel">
								    <option value="Platinum">Platinum</option>
								    <option value="Gold">Gold</option>
								    <option value="Silver">Silver</option>
								</select>
							</div>							
							<div class="form-group col-md-12 col-sm-12">
							    <label for="topicTitle">Topic / Title *</label>
							    <textarea class="form-control" cols="8" rows="4" id="topicTitle" name="topicTitle" required="required"></textarea>
						  	</div>
							<div class="form-group col-md-12 col-sm-12">
							    <label for="furtherDetails">Further Details *</label>
							    <textarea class="form-control" cols="8" rows="4" id="furtherDetails" name="furtherDetails" required="required"></textarea>
						  	</div>
							<div class="form-group col-md-12 col-sm-12">
								<label for="fileAttach">File Attachment</label>
								<input type="file" class="form-control-file" id="fileAttach" name="fileAttach">
							</div>
						  	<div class="form-group col-md-6 col-sm-12">
							    <label for="numberOfPages">Number Of Pages *</label>
							    <input type="text" class="form-control" id="numberOfPages" placeholder="One page is equal to 250 words" name="numberOfPages" required="required">
						  	</div>
							<div class="form-group col-md-6 col-sm-12">
								<label for="deadline">Deadline</label>
								<select class="form-control" id="deadline" name="deadline" required="required">
									<option value="6 Hours">6 Hours</option>
									<option value="12 Hours">12 Hours</option>
									<option value="24 Hours">24 Hours</option>
									<option value="48 Hours">48 Hours</option>
									<option value="72 Hours">72 Hours</option>
									<option value="4 Days">4 Days</option>
									<option value="5 Days">5 Days</option>
									<option value="7 Days">7 Days</option>
									<option value="10 Days">10 Days</option>
									<option value="14 Days">14 Days</option>
									<option value="30 Days">30 Days</option>
								</select>
							</div>
						  	<div class="form-group col-md-6 col-sm-12">
							    <label for="pricePerPage">Price Per Page</label>
							    <input type="text" class="form-control" id="pricePerPage" placeholder="Price Per Page" name="pricePerPage" readonly="readonly">
						  	</div>							
						  	<div class="form-group col-md-6 col-sm-12">
							    <label for="totalAmount">Total Amount</label>
							    <input type="text" class="form-control" id="totalAmount" placeholder="Total Amount" name="totalAmount" readonly="readonly">
						  	</div>
						  	<div class="form-group col-md-12 col-sm-12">
						  		<input type="hidden" name="_token" value="{{ csrf_token() }}">
						  		<button type="submit" class="btn btn-primary" name="submitOrder">Submit Order</button>	
						  	</div>						  	
						</form>
						@if (!empty($success))
						    {{ $success }}
						@endif
					</div>
				</div>
           
            
@stop
