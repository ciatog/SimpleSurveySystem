@extends("Master")

@section("content")
	<div class="alert alert-info">Please fill in our survey.</div>

	<form role="form" action="survey" method="post">
		<div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control" placeholder="Name" name="name" required>
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" placeholder="Email" name="email" required>
		</div>

		<div class="form-group">
			<label>Postal/Zip Code</label>
			<input type="text" class="form-control" placeholder="Postal/Zip Code" name="zip_code" required>
		</div>

		@foreach ($questions as $question)
			@if (!empty($question->title))
				<div class="form-group">
					<label>{{ $question->title }}</label>

					@if ($question->isFreeForm())
						{{ Form::textarea("question_1_answer", "", ["class" => "form-control", "required" => ""]); }}
					@elseif ($question->isMultipleChoice())
						{{ Form::select("question_2_answer", $question->parseChoices(), null, ["class" => "form-control"]); }}
					@elseif ($question->isYesNo())
						<div class="radio">
							<label>
								{{ Form::radio("question_3_answer", "Yes", true); }}
								Yes
							</label>
						</div>
						<div class="radio">
							<label>
								{{ Form::radio("question_3_answer", "No", false); }}
								No
							</label>
						</div>
					@endif
				</div>
			@endif
		@endforeach

		<button type="submit" class="btn btn-primary pull-right">Submit Survey</button>
	</form>
@stop
