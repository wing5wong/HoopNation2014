<!doctype html>
<html lang="en" ng-app="hoopnation">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
	<link rel=stylesheet href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/styles.css">
	<script data-require="angular.js@1.2.x" src="http://code.angularjs.org/1.2.8/angular.js" data-semver="1.2.8"></script>
	<script src="/js/app.js"></script>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
</head>
<body ontouchstart="" ng-controller="MainCtrl">

	<div class="sidebar">
		<div class="logo-wrapper">
			<img src="http://static.wixstatic.com/media/48e828_3b02e319629e21727558c00768f16d91.png_srz_895_180_75_22_0.50_1.20_0.00_png_srz" alt="HoopNation Logo" style="max-width:100%">
		</div>

		<ul class="list-group">
			<li class="list-group-item">
				<a>Tournaments</a>
				<ul class="list-group">
					<li class="list-group-item"><a>2012</a></li>
					<li class="list-group-item"><a>2013</a></li>
					<li class="list-group-item"><a>2014</a></li>
				</ul>

			</li>
			<li class="list-group-item"><a>Teams</a></li>
			<li class="list-group-item"><a>Players</a></li>
			<li class="list-group-item"><a>Matches</a></li>
		</ul>
	</div>

	<div class="hidden-xs">
		<div class="main">
			<div class="full-width container">
				<div class="row">
					<div class="col-sm-4">
						<div class="row">
							<div class="col-sm-10">
								<div class="row">
									<div class="col-sm-12">
										<h2>Team A</h2>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="progress">
											<div class="progress-bar progress-bar-info" style="width: 20%">
												<span class="">1</span>
											</div>

											<div class="progress-bar progress-bar-primary" style="width: 20%">
												<span class="">2</span>
											</div>

											<div class="progress-bar progress-bar-success" style="width: 20%">
												<span class="">3</span>
											</div>

											<div class="progress-bar progress-bar-warning" style="width: 20%">
												<span class="">4</span>
											</div>

											<div class="progress-bar progress-bar-danger" style="width: 20%">
												<span class="">5</span>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-2 text-right">
								<h1>14</h1>
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
					</div>

					<div class="col-sm-4">
						<div class="row">
							<div class="col-sm-2">
								<h1>14</h1>
							</div>
							<div class="col-sm-10">
								<div class="row">
									<div class="col-sm-12">
										<h2 style="white-space: nowrap;text-overflow:ellipsis;overflow:hidden">West CoastWest Coast Wocka Flocka Flaps</h2>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="progress">
											<div class="progress-bar progress-bar-info" style="width: 20%">
												<span class="">1</span>
											</div>

											<div class="progress-bar progress-bar-primary" style="width: 20%">
												<span class="">2</span>
											</div>

											<div class="progress-bar progress-bar-success" style="width: 20%">
												<span class="">3</span>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4" id="team_a">

						<div class="row">
							<div class="col-sm-12">
								<div class="player-selector">
									<input type="radio" class="player-toggle" name="selected_player" id="selected_player_1">
									<label for="selected_player_1">
										<div class="row">
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
										<div class="row">
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
										<div class="row">
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
										<div class="row">
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
										<div class="row">
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
											<div class="row">
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
											<div class="row">
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
											<div class="row">
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

										<input type="radio" class="player-toggle" name="selected_player" id="selected_player_10">
										<label for="selected_player_10">
											<div class="row">
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

										<input type="radio" class="player-toggle" name="selected_player" id="selected_player_9">
										<label for="selected_player_9">
											<div class="row">
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
								<div class="col-sm-12">
									<div class="player-selector">
										<input type="radio" class="player-toggle" name="selected_player" id="selected_player_9">
										<label for="selected_player_9">
											<div class="row">
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
											<div class="row">
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
											<div class="row">
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
											<div class="row">
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
											<div class="row">
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
											<div class="row">
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
											<div class="row">
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
											<div class="row">
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
			</div>
		</div>

	</body>
	</html>

