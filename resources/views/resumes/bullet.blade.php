@extends('layouts.resume_layout')

@section('title', 'Bullet')


@section('content')

	<button class="add-section-header btn btn-primary">Add Section Header</button>

	<div id="resume-content" style="min-height:400px; padding: 40px 40px; border:1px solid silver; margin-top:40px;" contenteditable="false">
		
		<h3>Professional Experience</h3>

		<div class="editable" data-type="experience" id="job1">
			<div class="clearfix">
			<h4 class="pull-right">January 2016 to Present</h4>
			<h4 class="pull-left">ABC Company | SAP Consultant</h4>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit sed consequuntur distinctio unde rem. Explicabo at, aut fuga, mollitia dolorum dolore ut culpa repellendus quasi aliquam unde pariatur minus ea?</p>

		</div>

		


		<div class="editable" data-type="experience" id="job2">
			<div class="clearfix">
			<h4 class="pull-left">XYZ Company | SAP Consultant</h4>
			<h4 class="pull-right">January 2016 to Present</h4>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit sed consequuntur distinctio unde rem. Explicabo at, aut fuga, mollitia dolorum dolore ut culpa repellendus quasi aliquam unde pariatur minus ea?</p>

			<ul>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae autem quaerat, magnam, architecto odio perspiciatis magni impedit corrupti, deleniti ipsam veritatis aperiam quas consequuntur ipsa tempora modi. Iure, quis, sequi.</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt ea modi, praesentium asperiores, est dicta excepturi magnam a eius nam sunt quod sapiente. Ratione velit sint, corporis esse? Facilis, autem. </li>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et laborum, consectetur hic officia ratione aut maiores. Omnis consectetur consequuntur aperiam, voluptatum vitae odit placeat doloremque odio animi non, rerum quae. </li>
			</ul>

		</div>

		<div class="editable" data-type="experience" id="job2">
			<div class="clearfix">
			<h4 class="pull-right">January 2016 to Present</h4>
			<h4 class="pull-left">DEF Company | SAP Consultant</h4>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit sed consequuntur distinctio unde rem. Explicabo at, aut fuga, mollitia dolorum dolore ut culpa repellendus quasi aliquam unde pariatur minus ea?</p>

			<ul>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae autem quaerat, magnam, architecto odio perspiciatis magni impedit corrupti, deleniti ipsam veritatis aperiam quas consequuntur ipsa tempora modi. Iure, quis, sequi.</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt ea modi, praesentium asperiores, est dicta excepturi magnam a eius nam sunt quod sapiente. Ratione velit sint, corporis esse? Facilis, autem. </li>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et laborum, consectetur hic officia ratione aut maiores. Omnis consectetur consequuntur aperiam, voluptatum vitae odit placeat doloremque odio animi non, rerum quae. </li>
			</ul>

		</div>


	</div>

	<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Resume Formatting</h4>
	      </div>
	      <div class="modal-body">
	      	<button class="company-add">Company</button>  
	      	<button class="position-add">Position</button> 
	      	<button class="dates-add">Dates</button> 
	      	<button class="content-add">Content</button> 
	      	<hr>
	      	<div class="row">
	      	<div class="original-content col-lg-6"></div>
	      	<div class="form-content col-lg-6">
	      		<h3 id="company"></h3>
	      		<p id="position"></p>
	      		<p id="dates"></p>
	      		<p id="content"></p>
	      	</div>
	      	</div>
	        
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="add-header btn btn-primary">Save changes</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/rangy/1.3.0/rangy-core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rangy/1.3.0/rangy-selectionsaverestore.min.js"></script>

<script>

	function strip(html)
	{
	   var tmp = document.createElement("DIV");
	   tmp.innerHTML = html;
	   return tmp.textContent || tmp.innerText || "";
	}

	$(function(){

		$(document).on('click', '.make-bullets', function(e){
			e.preventDefault();
			var content = strip($('#content').html());

			//content = content.replace(/\./g, '<li>').replace(/\u00a0/g, "");
			content = content.replace(/\n\n/g, '------newline------');
			content = strip(content);
			content = content.replace(/------newline------/g, '<br>').replace(/\u00a0/g, " ");

			//content = content.replace(/\<li\>\<\/li\>/g, '')
			//content = '<ul><li>' + content + '</ul>';

			$('#content').html(content);
		});

	$(document).on('click', '.open-modal', function(e){
		e.preventDefault();
		$('#myModal').modal('show')

	});

	$(document).on('click', '.add-section-header', function(e){
		e.preventDefault();
		$('.modal-body').html('stuff here');
		$('.modal-title').html('Add Section Header');
		$('#myModal').modal('show')

	});

	$(document).on('click', '.add-header', function(e){
		e.preventDefault();
		$('#resume-content').append('<h3 class="editable" id="1234">Section Header <span class="editable" id="123">Frank</span></h3>');
		$('#myModal').modal('hide')

	});

	$(document).on('click', '.editable', function(e){
		e.stopPropagation();
		alert($(this).attr('id'));

	});


	$(document).on('click', '.save-selection', function(e){
		e.preventDefault();
		savedSelection = rangy.saveSelection();
		console.log('saved!');
	});

	$(document).on('click', '.company-add', function(e){
		e.preventDefault();

		var company = rangy.getSelection().toString();

		$('#company').html(company);
	});

	$(document).on('click', '.position-add', function(e){
		e.preventDefault();

		var position = rangy.getSelection().toString();

		$('#position').html(position);
	});

	$(document).on('click', '.dates-add', function(e){
		e.preventDefault();

		var dates = rangy.getSelection().toString();

		$('#dates').html(dates);
	});

	$(document).on('click', '.content-add', function(e){
		e.preventDefault();

		var content = rangy.getSelection().toHtml();

		$('#content').html(content);


	});


	});


</script>
@endsection