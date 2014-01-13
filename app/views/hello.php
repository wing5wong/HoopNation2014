<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
	<link rel=stylesheet href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<style>
		h1,h2,h3,h4,h5,h6 {
			font-family: 'Pathway Gothic One', sans-serif;
		}

		h1 {
			font-size: 64px;
		}
		.t-title-hoop {
			color: #F68428;
		}
		.t-title-nation {
			color: #0068B3;
		}

		.toggle + label
		, a.button {
			display: inline-block;
			text-decoration: none;
			background: #ddd;
			color: #444;
			font-size: 12px;
			font-weight: bold;
			text-align: center;
			padding: 10px 0;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			position: relative;
			margin: 0 0 20px;

			width: 100%;

			-webkit-box-shadow: inset 0 -5px 0 rgba(0,0,0,0.3);
			-moz-box-shadow: inset 0 -5px 0 rgba(0,0,0,0.3);
			box-shadow: inset 0 -5px 0 rgba(0,0,0,0.3);
			border: 1px solid rgba(0,0,0,0.1);

			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}
		.button.blue {
			background: #0068B3;
			color: #fff;
		}
		.button.orange {
			background: #F68428;
			color: #fff;
		}
		.button.green {
			background: rgb(0, 189, 103);
			color: #fff;
		}
		.button.black {
			background: #444;
			color: #fff;
		}
		.button.white {
			background: #fff;
			color: #444;
		}
		.button.red {
			background: #f04833;
			color: #fff;
		}

		.toggle:checked + label, a.button:active {
			box-shadow: inset 0 -2px 0 rgba(0,0,0,0.3);
			_box-shadow: inset 0 2px 0 rgba(0,0,0,0.3), inset 0 -1px 0 rgba(0,0,0,0.3)
		}
		a.button:active,
		.toggle:checked + label{
			top: 3px;
			padding-bottom:7px;
			margin-bottom: 23px;
		}


		.toggle
		, .player-toggle{
			display: none;
		}

		.toggle + label{
			transition: all 0.15s;
		}

		.toggle:checked + label{
			/* Do something special with the selected state */
			background: #F68428;
			color: #fff;
		}
		.toggle:not(:checked) + label{
			/* Do something special with the unselected state */
		}

		.toggle + label
		,.player-toggle + label {
			width: 100%
		}
		.player-toggle + label {
			border-radius: 4px;
			font-weight: normal;
			overflow: hidden;
		}
		.player-toggle + label .badge {
			font-weight: normal;
		}

		.player-toggle:checked + label {
			background: #fff;
			box-shadow: 0 -1px 0px 1px rgb(0, 189, 103);
		}

		.player-toggle:checked + label .badge {
			background: rgb(0, 189, 103);
			color: #fff;
		}



		.badge {
			display: inline-block;
			padding: 10px 15px;
			font-size: 14px;
			line-height: inherit;
			border-radius: 0;
			float:right;
			background: #ddd;
			color: #444;
		}


		.player-selector[data-selected] {
			background: #F68428;
			color: #fff;
		}
		.player-selector[data-selected] .badge {
			background: #0068B3;
			color: #fff;
		}

		.list-group-item {
			padding: 0;
		}

		.player-selector-name {
			display: inline-block;
			padding: 10px 15px;
		}

		#team_a .badge {
			border-left:1px solid rgba(0,0,0,0.3);
		}
		#team_b .badge {
			float:left;
			border-right:1px solid rgba(0,0,0,0.3);
		}

		.player-selector {
			margin-bottom: 8px;
		}
		.progress {
			background-color: #ddd;
			box-shadow: inset 0 2px rgba(0,0,0,0.3);
		}


		.player-selector .player-toggle + label {
			padding: 0;
		}
		.player-selector .player-toggle:not(:checked) + label {
			background: #fff;
		}

		.player-selector .player-toggle:checked + label {
			padding: 0;
		}

		.player-selector .progress {
			margin-bottom: 0;
			border-top-left-radius: 0;
			border-top-right-radius:0;
			height: 4px;
		}


		body {
			background-color: #eee;
			background-image: -webkit-gradient(linear, 0 0, 100% 100%, color-stop(.25, rgba(255, 255, 255, .2)), color-stop(.25, transparent), color-stop(.5, transparent), color-stop(.5, rgba(255, 255, 255, .2)), color-stop(.75, rgba(255, 255, 255, .2)), color-stop(.75, transparent), to(transparent));
			background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent);
			background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent);
			background-image: -ms-linear-gradient(-45deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent);
			background-image: -o-linear-gradient(-45deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent);
			background-image: linear-gradient(-45deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent);

			-webkit-background-size: 50px 50px;
			-moz-background-size: 50px 50px;
			background-size: 50px 50px;
		}


		.panel-success {
			border-color: rgb(0, 189, 103);
		}

		.no-gutter > div[class*="col-"] {
			padding: 0;
		}

		.no-gutter > div[class*="col-"] > *{
			padding-left: 30px;
			padding-right: 30px;
		}

	</style>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
</head>
<body ontouchstart="">
	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center"><span class="t-title-hoop">Basket</span> <span class="t-title-nation">Ball</span></h1>
				<hr>
			</div>
		</div>



		<div class="row">
			<div class="col-sm-4" id="team_a">
				<div class="row">
					<div class="col-sm-8">
						<h2>Team A</h2>
					</div>
					<div class="col-sm-4 text-right">
						<h2>14</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<h4>Team Fouls</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="progress">
							<div class="progress-bar" style="width: 20%">
								<span class="">1</span>
							</div>

							<div class="progress-bar" style="width: 20%">
								<span class="">2</span>
							</div>

							<div class="progress-bar" style="width: 20%">
								<span class="">3</span>
							</div>

							<div class="progress-bar" style="width: 20%">
								<span class="">4</span>
							</div>

							<div class="progress-bar button orange" style="width: 20%">
								<span class="">5</span>
							</div>
						</div>
					</div>
				</div>



				<div class="row">
					<div class="col-sm-12">
						<div class="player-selector">
							<input type="radio" class="player-toggle" name="selected_player" id="selected_player_1">
							<label for="selected_player_1">
								<div class="row no-gutter">
									<div class="col-sm-10">
										<span class="player-selector-name">Player one</span>
									</div>
									<div class="col-sm-2">
										<span class="badge badge-primary"> #1</span>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="progress">
											<div class="progress-bar progress-bar-info" style="width: 20%">
												<span class="">1</span>
											</div>
											<div class="progress-bar progress-bar-primary" style="width: 20%">
												<span class="">1</span>
											</div>
											<div class="progress-bar progress-bar-success" style="width: 20%">
												<span class="">1</span>
											</div>
											<div class="progress-bar progress-bar-warning" style="width: 20%">
												<span class="">1</span>
											</div>
										</div>
									</div>
								</div>
							</label>

							<input type="radio" class="player-toggle" name="selected_player" id="selected_player_2">
							<label for="selected_player_2">
								<div class="row no-gutter">
									<div class="col-sm-10">
										<span class="player-selector-name">Player one</span>
									</div>
									<div class="col-sm-2">
										<span class="badge badge-primary"> #2</span>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="progress">
											<div class="progress-bar progress-bar-info" style="width: 20%">
												<span class="">1</span>
											</div>
										</div>
									</div>
								</div>
							</label>

							<input type="radio" class="player-toggle" name="selected_player" id="selected_player_3">
							<label for="selected_player_3">
								<div class="row no-gutter">
									<div class="col-sm-10">
										<span class="player-selector-name">Player one</span>
									</div>
									<div class="col-sm-2">
										<span class="badge badge-primary"> #3</span>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="progress">
											<div class="progress-bar progress-bar-info" style="width: 20%">
												<span class="">1</span>
											</div>
											<div class="progress-bar progress-bar-primary" style="width: 20%">
												<span class="">1</span>
											</div>
											<div class="progress-bar progress-bar-success" style="width: 20%">
												<span class="">1</span>
											</div>
											<div class="progress-bar progress-bar-warning" style="width: 20%">
												<span class="">1</span>
											</div>
											<div class="progress-bar progress-bar-danger" style="width: 20%">
												<span class="">1</span>
											</div>
										</div>
									</div>
								</div>
							</label>

							<input type="radio" class="player-toggle" name="selected_player" id="selected_player_4">
							<label for="selected_player_4">
								<div class="row no-gutter">
									<div class="col-sm-10">
										<span class="player-selector-name">Player one</span>
									</div>
									<div class="col-sm-2">
										<span class="badge badge-primary"> #4</span>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="progress">
											<div class="progress-bar progress-bar-info" style="width: 20%">
												<span class="">1</span>
											</div>
										</div>
									</div>
								</div>
							</label>

							<input type="radio" class="player-toggle" name="selected_player" id="selected_player_5">
							<label for="selected_player_5">
								<div class="row no-gutter">
									<div class="col-sm-10">
										<span class="player-selector-name">Player one</span>
									</div>
									<div class="col-sm-2">
										<span class="badge badge-primary">#5</span></div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="progress">
												<div class="progress-bar progress-bar-info" style="width: 20%">
													<span class="">1</span>
												</div>
												<div class="progress-bar progress-bar-primary" style="width: 20%">
													<span class="">1</span>
												</div>
											</div>
										</div>
									</div>
								</label>

								<input type="radio" class="player-toggle" name="selected_player" id="selected_player_6">
								<label for="selected_player_6">
									<div class="row no-gutter">
										<div class="col-sm-10">
											<span class="player-selector-name">Player one</span>
										</div>
										<div class="col-sm-2">
											<span class="badge badge-primary"> #6</span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="progress">
												<div class="progress-bar progress-bar-info" style="width: 20%">
													<span class="">1</span>
												</div>
												<div class="progress-bar progress-bar-primary" style="width: 20%">
													<span class="">1</span>
												</div>
												<div class="progress-bar progress-bar-success" style="width: 20%">
													<span class="">1</span>
												</div>
												<div class="progress-bar progress-bar-warning" style="width: 20%">
													<span class="">1</span>
												</div>
											</div>
										</div>
									</div>
								</label>

								<input type="radio" class="player-toggle" name="selected_player" id="selected_player_7">
								<label for="selected_player_7">
									<div class="row no-gutter">
										<div class="col-sm-10">
											<span class="player-selector-name">Player one</span>
										</div>
										<div class="col-sm-2">
											<span class="badge badge-primary"> #7</span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="progress">
												<div class="progress-bar progress-bar-info" style="width: 20%">
													<span class="">1</span>
												</div>
												<div class="progress-bar progress-bar-primary" style="width: 20%">
													<span class="">1</span>
												</div>
												<div class="progress-bar progress-bar-success" style="width: 20%">
													<span class="">1</span>
												</div>
											</div>
										</div>
									</div>
								</label>

								<input type="radio" class="player-toggle" name="selected_player" id="selected_player_8">
								<label for="selected_player_8">
									<div class="row no-gutter">
										<div class="col-sm-10">
											<span class="player-selector-name">Player one</span>
										</div>
										<div class="col-sm-2">
											<span class="badge badge-primary"> #8</span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="progress">
												<div class="progress-bar progress-bar-info" style="width: 20%">
													<span class="">1</span>
												</div>
												<div class="progress-bar progress-bar-primary" style="width: 20%">
													<span class="">1</span>
												</div>
												<div class="progress-bar progress-bar-success" style="width: 20%">
													<span class="">1</span>
												</div>
												<div class="progress-bar progress-bar-warning" style="width: 20%">
													<span class="">1</span>
												</div>
												<div class="progress-bar progress-bar-danger" style="width: 20%">
													<span class="">1</span>
												</div>
											</div>
										</div>
									</div>
								</label>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-sm-12">
							<h4>Quarter Timeout</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<input type="checkbox" id="team_a_timeout_one" name="toggle" checked class="toggle">
							<label for="team_a_timeout_one">One</label>
						</div>

						<div class="col-sm-3">
							<input type="checkbox" id="team_a_timeout_two" name="toggle" class="toggle">
							<label for="team_a_timeout_two">Two</label>
						</div>

						<div class="col-sm-3">
							<input type="checkbox" id="team_a_timeout_three" name="toggle" class="toggle">
							<label for="team_a_timeout_three">Three</label>
						</div>

						<div class="col-sm-3">
							<input type="checkbox" id="team_a_timeout_four" name="toggle" class="toggle">
							<label for="team_a_timeout_four">Four</label>
						</div>
					</div>
				</div>


				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h4>Current Quarter</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<input type="radio" id="toggle-one" name="toggle" checked class="toggle">
							<label for="toggle-one">One</label>
						</div>

						<div class="col-sm-3">
							<input type="radio" id="toggle-two" name="toggle" class="toggle">
							<label for="toggle-two">Two</label>
						</div>

						<div class="col-sm-3">
							<input type="radio" id="toggle-three" name="toggle" class="toggle">
							<label for="toggle-three">Three</label>
						</div>

						<div class="col-sm-3">
							<input type="radio" id="toggle-four" name="toggle" class="toggle">
							<label for="toggle-four">Four</label>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-success">
								<div class="panel-body">
									Status Message
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<a class="white button">Free Throw Miss</a>
						</div>
						<div class="col-sm-6">
							<a class="green button">Free Throw</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<a class="white button">Two Point Miss</a>
						</div>
						<div class="col-sm-6">
							<a class="green button">Two Point</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<a class="white button">Three Point Miss</a>
						</div>
						<div class="col-sm-6">
							<a class="green button">Three</a>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<a class="blue button">Rebound</a>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4">
							<a class="blue button">Assist</a>
						</div>
						<div class="col-sm-4">
							<a class="blue button">Steal</a>
						</div>
						<div class="col-sm-4">
							<a class="blue button">Block</a>
						</div>
					</div>


					<div class="row">
						<div class="col-sm-4">
							<a class="black button">Personal</a>
						</div>
						<div class="col-sm-4">
							<a class="black button">Technical</a>
						</div>

						<div class="col-sm-4">
							<a class="black button">Disqualifying</a>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<a href="#" class="button red">Undo</a>
						</div>
					</div>
				</div>

				<div class="col-sm-4" id="team_b">
					<div class="row">
						<div class="col-sm-4">
							<h2>124</h2>
						</div>
						<div class="col-sm-8 text-right">
							<h2>Team B</h2>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 text-right">
							<h4>Team Fouls</h4>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="progress">
								<div class="progress-bar" style="width: 20%">
									<span class="">1</span>
								</div>

								<div class="progress-bar" style="width: 20%">
									<span class="">2</span>
								</div>

								<div class="progress-bar button orange" style="width: 20%">
									<span class="">3</span>
								</div>

								<div class="progress-bar" style="width: 20%">
									<span class="">4</span>
								</div>

								<div class="progress-bar" style="width: 20%">
									<span class="">5</span>
								</div>

							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-sm-12">
							<div class="player-selector">
								<input type="radio" class="player-toggle" name="selected_player" id="selected_player_9">
								<label for="selected_player_9">
									<div class="row no-gutter">
										<div class="col-sm-2">
											<span class="badge badge-primary"> #2</span>
										</div>
										<div class="col-sm-10">
											<span class="player-selector-name">Player one</span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="progress">
												<div class="progress-bar progress-bar-info" style="width: 20%">
													<span class="">1</span>
												</div>
												<div class="progress-bar progress-bar-primary" style="width: 20%">
													<span class="">1</span>
												</div>
												<div class="progress-bar progress-bar-success" style="width: 20%">
													<span class="">1</span>
												</div>
												<div class="progress-bar progress-bar-warning" style="width: 20%">
													<span class="">1</span>
												</div>
											</div>
										</div>
									</div>
								</label>

								<input type="radio" class="player-toggle" name="selected_player" id="selected_player_10">
								<label for="selected_player_10">
									<div class="row no-gutter">
										<div class="col-sm-2">
											<span class="badge badge-primary"> #2</span>
										</div>
										<div class="col-sm-10">
											<span class="player-selector-name">Player one</span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="progress">
												<div class="progress-bar progress-bar-info" style="width: 20%">
													<span class="">1</span>
												</div>
											</div>
										</div>
									</div>
								</label>

								<input type="radio" class="player-toggle" name="selected_player" id="selected_player_11">
								<label for="selected_player_11">
									<div class="row no-gutter">
										<div class="col-sm-2">
											<span class="badge badge-primary"> #2</span>
										</div>
										<div class="col-sm-10">
											<span class="player-selector-name">Player one</span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="progress">
												<div class="progress-bar progress-bar-info" style="width: 20%">
													<span class="">1</span>
												</div>
											</div>
										</div>
									</div>
								</label>

								<input type="radio" class="player-toggle" name="selected_player" id="selected_player_12">
								<label for="selected_player_12">
									<div class="row no-gutter">
										<div class="col-sm-2">
											<span class="badge badge-primary"> #2</span>
										</div>
										<div class="col-sm-10">
											<span class="player-selector-name">Player one</span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="progress">
												<div class="progress-bar progress-bar-info" style="width: 20%">
													<span class="">1</span>
												</div>
											</div>
										</div>
									</div>
								</label>

								<input type="radio" class="player-toggle" name="selected_player" id="selected_player_13">
								<label for="selected_player_13">
									<div class="row no-gutter">
										<div class="col-sm-2">
											<span class="badge badge-primary"> #2</span>
										</div>
										<div class="col-sm-10">
											<span class="player-selector-name">Player one</span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="progress">
												<div class="progress-bar progress-bar-info" style="width: 20%">
													<span class="">1</span>
												</div>
											</div>
										</div>
									</div>
								</label>

								<input type="radio" class="player-toggle" name="selected_player" id="selected_player_14">
								<label for="selected_player_14">
									<div class="row no-gutter">
										<div class="col-sm-2">
											<span class="badge badge-primary"> #2</span>
										</div>
										<div class="col-sm-10">
											<span class="player-selector-name">Player one</span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="progress">
												<div class="progress-bar progress-bar-info" style="width: 20%">
													<span class="">1</span>
												</div>
											</div>
										</div>
									</div>
								</label>

								<input type="radio" class="player-toggle" name="selected_player" id="selected_player_15">
								<label for="selected_player_15">
									<div class="row no-gutter">
										<div class="col-sm-2">
											<span class="badge badge-primary"> #2</span>
										</div>
										<div class="col-sm-10">
											<span class="player-selector-name">Player one</span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="progress">
												<div class="progress-bar progress-bar-info" style="width: 20%">
													<span class="">1</span>
												</div>
											</div>
										</div>
									</div>
								</label>

								<input type="radio" class="player-toggle" name="selected_player" id="selected_player_16">
								<label for="selected_player_16">
									<div class="row no-gutter">
										<div class="col-sm-2">
											<span class="badge badge-primary"> #2</span>
										</div>
										<div class="col-sm-10">
											<span class="player-selector-name">Player one</span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="progress">
												<div class="progress-bar progress-bar-info" style="width: 20%">
													<span class="">1</span>
												</div>
											</div>
										</div>
									</div>
								</label>

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-right">
							<h4>Quarter Timeout</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<input type="checkbox" id="team_b_timeout_one" name="toggle" checked class="toggle">
							<label for="team_b_timeout_one">One</label>
						</div>

						<div class="col-sm-3">
							<input type="checkbox" id="team_b_timeout_two" name="toggle" class="toggle">
							<label for="team_b_timeout_two">Two</label>
						</div>

						<div class="col-sm-3">
							<input type="checkbox" id="team_b_timeout_three" name="toggle" class="toggle">
							<label for="team_b_timeout_three">Three</label>
						</div>

						<div class="col-sm-3">
							<input type="checkbox" id="team_b_timeout_four" name="toggle" class="toggle">
							<label for="team_b_timeout_four">Four</label>
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>
	</html>

