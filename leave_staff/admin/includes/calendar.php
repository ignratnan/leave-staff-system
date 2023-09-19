<div class="mobile-menu-overlay"></div>

<div class="main-container"  style="background-color: #DCD7C9;">
	<div class="pd-ltr-20">

		<!--@Page Title-->	
		<div class="pd-20 pb-0">
			<h2 class="text-blue h4">CALENDAR</h2>
		</div>
		<hr style="border-width: 2px;">
		<!--#Page Title-->

		<div class="p-2 pt-3 pb-4 mb-3" style="background-color: #F0F0F0;">
			<div style="display: inline;">
				<?php 
					$date = date('D, d M Y');
					$day = date('D', strtotime($date));
					$dayNum = date('d', strtotime($date));
					$month = date('M', strtotime($date));
					$year = date('Y', strtotime($date));
					$kabisat = $year%4;

					$startDate = '1'.'-'.$month.'-'.$year;
					$startDay = date('D', strtotime($startDate));

					//@Start day
					if ($startDay == 'Sun') {
						$emptyCol = 0;
					} elseif ($startDay == 'Mon') {
						$emptyCol = 1;
					} elseif ($startDay == 'Tue') {
						$emptyCol = 2;
					} elseif ($startDay == 'Wed') {
						$emptyCol = 3;
					} elseif ($startDay == 'Thu') {
						$emptyCol = 4;
					} elseif ($startDay == 'Fri') {
						$emptyCol = 5;
					} elseif ($startDay == 'Sat') {
						$emptyCol = 6;
					}
					//#Start day

					//@Day
					if ($day == 'Sun') {
						$dayNow = 'Sunday';
					} elseif ($day == 'Mon') {
						$dayNow = 'Monday';
					} elseif ($day == 'Tue') {
						$dayNow = 'Tuesday';
					} elseif ($day == 'Wed') {
						$dayNow = 'Wednesday';
					} elseif ($day == 'Thu') {
						$dayNow = 'Thursday';
					} elseif ($day == 'Fri') {
						$dayNow = 'Friday';
					} elseif ($day == 'Sat') {
						$dayNow = 'Saturday';
					}
					//#Day

					//$Month
					if ($month == 'Jan') {
						$monthNow = 'January';
						$monthNum = 1;
					} elseif ($month == 'Feb') {
						$monthNow = 'February';
						$monthNum = 2;
					} elseif ($month == 'Mar') {
						$monthNow = 'March';
						$monthNum = 3;
					} elseif ($month == 'Apr') {
						$monthNow = 'April';
						$monthNum = 4;
					} elseif ($month == 'May') {
						$monthNow = 'May';
						$monthNum = 5;
					} elseif ($month == 'Jun') {
						$monthNow = 'June';
						$monthNum = 6;
					} elseif ($month == 'July') {
						$monthNow = 'Jul';
						$monthNum = 7;
					} elseif ($month == 'Aug') {
						$monthNow = 'August';
						$monthNum = 8;
					} elseif ($month == 'Sep') {
						$monthNow = 'September';
						$monthNum = 9;
					} elseif ($month == 'Oct') {
						$monthNow = 'October';
						$monthNum = 10;
					} elseif ($month == 'Nov') {
						$monthNow = 'November';
						$monthNum = 11;
					} elseif ($month == 'Dec') {
						$monthNow = 'December';
						$monthNum = 12;
					}


					//#Month

					//@Total days in one month
					if ($month == 'Jan' OR $month == 'Mar' OR $month == 'May' OR $month == 'Jul' OR $month == 'Aug' OR $month == 'Oct' OR $month == 'Dec') {
						$totalDays = 31;
					} elseif ($month == 'Apr' OR $month == 'Jun' OR $month == 'Sep' OR $month == 'Nov') {
						$totalDays = 30;
					} elseif ($month == 'Feb' AND $kabisat == 0) {
						$totalDays = 29;
					} elseif ($month == 'Feb' AND $kabisat != 0) {
						$totalDays = 28;
					} else {
						$totalDays = 0;
					}
					//#Total days in one month

				?>

				<table id="table" style="background-color: ; margin-bottom: 10px;">
					<tr style="">
						<td  colspan="2" style="width: 950px; vertical-align: top; text-align: right; background-color: #555555; padding: 10px; font-size: 12; color: #F0F0F0">
							<div style="color: #F0F0F0; font-size: 14px; font-family: helvetica;">
								<?php echo $dayNow.', '.$dayNum.' '.$monthNow.' '.$year; ?><br/>
							</div>
						</td>
					</tr>
					<tr style="height: 50px;">
						<th colspan="" style="color: #F0F0F0; background-color: #222222; padding-top: 20px; padding-bottom: 20px; width: 700px; height: 35px; padding: 5px; text-align: center; font-size: 16px;">
							<?php
								$aYear = $year;
								$bYear = $year-1;
								$cYear = $year+1;
							?>

							<div id="<?php echo 'month'.$bYear; ?>" style="display: none;">
							<?php
								echo $bYear;
								for ($cusNum=1; $cusNum<=12; $cusNum++) {
								//@Month Name
								if ($cusNum == 1) {
									$cusMonth = 'Jan';
									$cusMonthName = 'January';
								}elseif ($cusNum == 2) {
									$cusMonth = 'Feb';
									$cusMonthName = 'February';
								}elseif ($cusNum == 3) {
									$cusMonth = 'Mar';
									$cusMonthName = 'March';
								}elseif ($cusNum == 4) {
									$cusMonth = 'Apr';
									$cusMonthName = 'April';
								}elseif ($cusNum == 5) {
									$cusMonth = 'May';
									$cusMonthName = 'May';
								}elseif ($cusNum == 6) {
									$cusMonth = 'Jun';
									$cusMonthName = 'June';
								}elseif ($cusNum == 7) {
									$cusMonth = 'Jul';
									$cusMonthName = 'July';
								}elseif ($cusNum == 8) {
									$cusMonth = 'Aug';
									$cusMonthName= 'August';
								}elseif ($cusNum == 9) {
									$cusMonth = 'Sep';
									$cusMonthName = 'September';
								}elseif ($cusNum == 10) {
									$cusMonth = 'Oct';
									$cusMonthName = 'October';
								}elseif ($cusNum == 11) {
									$cusMonth = 'Nov';
									$cusMonthName = 'November';
								}elseif ($cusNum == 12) {
									$cusMonth = 'Dec';
									$cusMonthName = 'December';
								}
								//#Month Name
							?>

								<?php if ($month == $cusMonth AND $bYear == $year) { ?>
										<button id="<?php echo 'b'.$cusNum.$cusMonth; ?>" style="width: 40px; vertical-align: top; background-color: #0070DD;">
											<?php echo $cusMonth; ?>
										</button>
								<?php }else { ?>
										<button id="<?php echo 'b'.$cusNum.$cusMonth; ?>" style="width: 40px;" onclick="
										
										<?php 
											for ($moCoNu=1; $moCoNu<=12; $moCoNu++) {
												if ($moCoNu == 1) {
													$moCoNa = 'Jan';
													$moCoNaName = 'January';
												}elseif ($moCoNu == 2) {
													$moCoNa = 'Feb';
													$moCoNaName = 'February';
												}elseif ($moCoNu == 3) {
													$moCoNa = 'Mar';
													$moCoNaName = 'March';
												}elseif ($moCoNu == 4) {
													$moCoNa = 'Apr';
													$moCoNaName = 'April';
												}elseif ($moCoNu == 5) {
													$moCoNa = 'May';
													$moCoNaName = 'May';
												}elseif ($moCoNu == 6) {
													$moCoNa = 'Jun';
													$moCoNaName = 'June';
												}elseif ($moCoNu == 7) {
													$moCoNa = 'Jul';
													$moCoNaName = 'July';
												}elseif ($moCoNu == 8) {
													$moCoNa = 'Aug';
													$moCoNaName= 'August';
												}elseif ($moCoNu == 9) {
													$moCoNa = 'Sep';
													$moCoNaName = 'September';
												}elseif ($moCoNu == 10) {
													$moCoNa = 'Oct';
													$moCoNaName = 'October';
												}elseif ($moCoNu == 11) {
													$moCoNa = 'Nov';
													$moCoNaName = 'November';
												}elseif ($moCoNu == 12) {
													$moCoNa = 'Dec';
													$moCoNaName = 'December';
												}
										?>
										document.getElementById('<?php echo 'table'.$moCoNa.$bYear.$moCoNu; ?>').style.display='none';
										document.getElementById('<?php echo 'b'.$moCoNu.$moCoNa; ?>').style.backgroundColor='#F0F0F0';
										<?php
											}
										?>
										document.getElementById('<?php echo 'table'.$cusMonth.$bYear.$cusNum; ?>').style.display='inline';
										document.getElementById('<?php echo 'b'.$cusNum.$cusMonth; ?>').style.backgroundColor='#0070DD';
										">
											<?php echo $cusMonth; ?>	
										</button>
								<?php } ?>

							<?php } ?>
							</div>

							<div id="<?php echo 'month'.$aYear; ?>" style="display: inline;">
							<?php
								echo $aYear;
								for ($cusNum=1; $cusNum<=12; $cusNum++) {
								//@Month Name
								if ($cusNum == 1) {
									$cusMonth = 'Jan';
									$cusMonthName = 'January';
								}elseif ($cusNum == 2) {
									$cusMonth = 'Feb';
									$cusMonthName = 'February';
								}elseif ($cusNum == 3) {
									$cusMonth = 'Mar';
									$cusMonthName = 'March';
								}elseif ($cusNum == 4) {
									$cusMonth = 'Apr';
									$cusMonthName = 'April';
								}elseif ($cusNum == 5) {
									$cusMonth = 'May';
									$cusMonthName = 'May';
								}elseif ($cusNum == 6) {
									$cusMonth = 'Jun';
									$cusMonthName = 'June';
								}elseif ($cusNum == 7) {
									$cusMonth = 'Jul';
									$cusMonthName = 'July';
								}elseif ($cusNum == 8) {
									$cusMonth = 'Aug';
									$cusMonthName= 'August';
								}elseif ($cusNum == 9) {
									$cusMonth = 'Sep';
									$cusMonthName = 'September';
								}elseif ($cusNum == 10) {
									$cusMonth = 'Oct';
									$cusMonthName = 'October';
								}elseif ($cusNum == 11) {
									$cusMonth = 'Nov';
									$cusMonthName = 'November';
								}elseif ($cusNum == 12) {
									$cusMonth = 'Dec';
									$cusMonthName = 'December';
								}
								//#Month Name
							?>

								<?php if ($month == $cusMonth AND $aYear == $year) { ?>
										<button id="<?php echo 'a'.$cusNum.$cusMonth; ?>" style="width: 40px; vertical-align: top; background-color: #0070DD;" onclick="
										<?php 
											for ($moCoNu=1; $moCoNu<=12; $moCoNu++) {
												if ($moCoNu == 1) {
													$moCoNa = 'Jan';
													$moCoNaName = 'January';
												}elseif ($moCoNu == 2) {
													$moCoNa = 'Feb';
													$moCoNaName = 'February';
												}elseif ($moCoNu == 3) {
													$moCoNa = 'Mar';
													$moCoNaName = 'March';
												}elseif ($moCoNu == 4) {
													$moCoNa = 'Apr';
													$moCoNaName = 'April';
												}elseif ($moCoNu == 5) {
													$moCoNa = 'May';
													$moCoNaName = 'May';
												}elseif ($moCoNu == 6) {
													$moCoNa = 'Jun';
													$moCoNaName = 'June';
												}elseif ($moCoNu == 7) {
													$moCoNa = 'Jul';
													$moCoNaName = 'July';
												}elseif ($moCoNu == 8) {
													$moCoNa = 'Aug';
													$moCoNaName= 'August';
												}elseif ($moCoNu == 9) {
													$moCoNa = 'Sep';
													$moCoNaName = 'September';
												}elseif ($moCoNu == 10) {
													$moCoNa = 'Oct';
													$moCoNaName = 'October';
												}elseif ($moCoNu == 11) {
													$moCoNa = 'Nov';
													$moCoNaName = 'November';
												}elseif ($moCoNu == 12) {
													$moCoNa = 'Dec';
													$moCoNaName = 'December';
												}
										?>
										document.getElementById('<?php echo 'table'.$moCoNa.$aYear.$moCoNu; ?>').style.display='none';
										document.getElementById('<?php echo 'a'.$moCoNu.$moCoNa; ?>').style.backgroundColor='#F0F0F0';
										<?php
											}
										?>
										document.getElementById('<?php echo 'table'.$cusMonth.$aYear.$cusNum; ?>').style.display='inline';
										document.getElementById('<?php echo 'a'.$cusNum.$cusMonth; ?>').style.backgroundColor='#0070DD';
										">
											<?php echo $cusMonth; ?>
										</button>
								<?php }else { ?>
										<button id="<?php echo 'a'.$cusNum.$cusMonth; ?>" style="width: 40px;" onclick="
										<?php 
											for ($moCoNu=1; $moCoNu<=12; $moCoNu++) {
												if ($moCoNu == 1) {
													$moCoNa = 'Jan';
													$moCoNaName = 'January';
												}elseif ($moCoNu == 2) {
													$moCoNa = 'Feb';
													$moCoNaName = 'February';
												}elseif ($moCoNu == 3) {
													$moCoNa = 'Mar';
													$moCoNaName = 'March';
												}elseif ($moCoNu == 4) {
													$moCoNa = 'Apr';
													$moCoNaName = 'April';
												}elseif ($moCoNu == 5) {
													$moCoNa = 'May';
													$moCoNaName = 'May';
												}elseif ($moCoNu == 6) {
													$moCoNa = 'Jun';
													$moCoNaName = 'June';
												}elseif ($moCoNu == 7) {
													$moCoNa = 'Jul';
													$moCoNaName = 'July';
												}elseif ($moCoNu == 8) {
													$moCoNa = 'Aug';
													$moCoNaName= 'August';
												}elseif ($moCoNu == 9) {
													$moCoNa = 'Sep';
													$moCoNaName = 'September';
												}elseif ($moCoNu == 10) {
													$moCoNa = 'Oct';
													$moCoNaName = 'October';
												}elseif ($moCoNu == 11) {
													$moCoNa = 'Nov';
													$moCoNaName = 'November';
												}elseif ($moCoNu == 12) {
													$moCoNa = 'Dec';
													$moCoNaName = 'December';
												}
										?>
										document.getElementById('<?php echo 'table'.$moCoNa.$aYear.$moCoNu; ?>').style.display='none';
										document.getElementById('<?php echo 'a'.$moCoNu.$moCoNa; ?>').style.backgroundColor='#F0F0F0';
										<?php
											}
										?>
										document.getElementById('<?php echo 'table'.$cusMonth.$aYear.$cusNum; ?>').style.display='inline';
										document.getElementById('<?php echo 'a'.$cusNum.$cusMonth; ?>').style.backgroundColor='#0070DD';
										">
											<?php echo $cusMonth; ?>
										</button>
								<?php } ?>

							<?php } ?>
							</div>

							<div id="<?php echo 'month'.$cYear; ?>" style="display: none;">
							<?php
								echo $cYear;
								for ($cusNum=1; $cusNum<=12; $cusNum++) {
								//@Month Name
								if ($cusNum == 1) {
									$cusMonth = 'Jan';
									$cusMonthName = 'January';
								}elseif ($cusNum == 2) {
									$cusMonth = 'Feb';
									$cusMonthName = 'February';
								}elseif ($cusNum == 3) {
									$cusMonth = 'Mar';
									$cusMonthName = 'March';
								}elseif ($cusNum == 4) {
									$cusMonth = 'Apr';
									$cusMonthName = 'April';
								}elseif ($cusNum == 5) {
									$cusMonth = 'May';
									$cusMonthName = 'May';
								}elseif ($cusNum == 6) {
									$cusMonth = 'Jun';
									$cusMonthName = 'June';
								}elseif ($cusNum == 7) {
									$cusMonth = 'Jul';
									$cusMonthName = 'July';
								}elseif ($cusNum == 8) {
									$cusMonth = 'Aug';
									$cusMonthName= 'August';
								}elseif ($cusNum == 9) {
									$cusMonth = 'Sep';
									$cusMonthName = 'September';
								}elseif ($cusNum == 10) {
									$cusMonth = 'Oct';
									$cusMonthName = 'October';
								}elseif ($cusNum == 11) {
									$cusMonth = 'Nov';
									$cusMonthName = 'November';
								}elseif ($cusNum == 12) {
									$cusMonth = 'Dec';
									$cusMonthName = 'December';
								}
								//#Month Name
							?>

								<?php if ($month == $cusMonth AND $cYear == $year) { ?>
										<button id="<?php echo 'c'.$cusNum.$cusMonth; ?>" style="width: 40px; vertical-align: top; background-color: #0070DD;"><?php echo $cusMonth; ?></button>
								<?php }else { ?>
										<button id="<?php echo 'c'.$cusNum.$cusMonth; ?>" style="width: 40px;" onclick="
										<?php 
											for ($moCoNu=1; $moCoNu<=12; $moCoNu++) {
												if ($moCoNu == 1) {
													$moCoNa = 'Jan';
													$moCoNaName = 'January';
												}elseif ($moCoNu == 2) {
													$moCoNa = 'Feb';
													$moCoNaName = 'February';
												}elseif ($moCoNu == 3) {
													$moCoNa = 'Mar';
													$moCoNaName = 'March';
												}elseif ($moCoNu == 4) {
													$moCoNa = 'Apr';
													$moCoNaName = 'April';
												}elseif ($moCoNu == 5) {
													$moCoNa = 'May';
													$moCoNaName = 'May';
												}elseif ($moCoNu == 6) {
													$moCoNa = 'Jun';
													$moCoNaName = 'June';
												}elseif ($moCoNu == 7) {
													$moCoNa = 'Jul';
													$moCoNaName = 'July';
												}elseif ($moCoNu == 8) {
													$moCoNa = 'Aug';
													$moCoNaName= 'August';
												}elseif ($moCoNu == 9) {
													$moCoNa = 'Sep';
													$moCoNaName = 'September';
												}elseif ($moCoNu == 10) {
													$moCoNa = 'Oct';
													$moCoNaName = 'October';
												}elseif ($moCoNu == 11) {
													$moCoNa = 'Nov';
													$moCoNaName = 'November';
												}elseif ($moCoNu == 12) {
													$moCoNa = 'Dec';
													$moCoNaName = 'December';
												}
										?>
										document.getElementById('<?php echo 'table'.$moCoNa.$cYear.$moCoNu; ?>').style.display='none';
										document.getElementById('<?php echo 'c'.$moCoNu.$moCoNa; ?>').style.backgroundColor='#F0F0F0';
										<?php
											}
										?>
										document.getElementById('<?php echo 'table'.$cusMonth.$cYear.$cusNum; ?>').style.display='inline';
										document.getElementById('<?php echo 'c'.$cusNum.$cusMonth; ?>').style.backgroundColor='#0070DD';
										">
											<?php echo $cusMonth; ?>
										</button>
								<?php } ?>

							<?php } ?>
							</div>

						</th>
						<th style="color: #F0F0F0; background-color: #222222; padding-top: 20px; padding-bottom: 20px; width: 250px; height: 35px; padding: 5px; text-align: center; font-size: 16px;">
							<?php
								$aYear = $year;
								$bYear = $year-1;
								$cYear = $year+1;
							?>
									<button id="<?php echo 'b'.$bYear; ?>" style="width: 60px; background-color: #F0F0F0;" onclick="
										<?php
											for ($moCoNu=1; $moCoNu<=12; $moCoNu++) {
												if ($moCoNu == 1) {
													$moCoNa = 'Jan';
													$moCoNaName = 'January';
												}elseif ($moCoNu == 2) {
													$moCoNa = 'Feb';
													$moCoNaName = 'February';
												}elseif ($moCoNu == 3) {
													$moCoNa = 'Mar';
													$moCoNaName = 'March';
												}elseif ($moCoNu == 4) {
													$moCoNa = 'Apr';
													$moCoNaName = 'April';
												}elseif ($moCoNu == 5) {
													$moCoNa = 'May';
													$moCoNaName = 'May';
												}elseif ($moCoNu == 6) {
													$moCoNa = 'Jun';
													$moCoNaName = 'June';
												}elseif ($moCoNu == 7) {
													$moCoNa = 'Jul';
													$moCoNaName = 'July';
												}elseif ($moCoNu == 8) {
													$moCoNa = 'Aug';
													$moCoNaName= 'August';
												}elseif ($moCoNu == 9) {
													$moCoNa = 'Sep';
													$moCoNaName = 'September';
												}elseif ($moCoNu == 10) {
													$moCoNa = 'Oct';
													$moCoNaName = 'October';
												}elseif ($moCoNu == 11) {
													$moCoNa = 'Nov';
													$moCoNaName = 'November';
												}elseif ($moCoNu == 12) {
													$moCoNa = 'Dec';
													$moCoNaName = 'December';
												}
										?>
										document.getElementById('<?php echo 'table'.$moCoNa.$bYear.$moCoNu; ?>').style.display='none';
										document.getElementById('<?php echo 'table'.$moCoNa.$aYear.$moCoNu; ?>').style.display='none';
										document.getElementById('<?php echo 'table'.$moCoNa.$cYear.$moCoNu; ?>').style.display='none';
										document.getElementById('<?php echo 'b'.$moCoNu.$moCoNa; ?>').style.backgroundColor='#F0F0F0';
										document.getElementById('<?php echo 'a'.$moCoNu.$moCoNa; ?>').style.backgroundColor='#F0F0F0';
										document.getElementById('<?php echo 'c'.$moCoNu.$moCoNa; ?>').style.backgroundColor='#F0F0F0';
										<?php } ?>
										document.getElementById('<?php echo 'tableDec'.$bYear.'12'; ?>').style.display='inline';
										document.getElementById('<?php echo 'month'.$bYear; ?>').style.display='inline'; 
										document.getElementById('<?php echo 'month'.$aYear; ?>').style.display='none'; 
										document.getElementById('<?php echo 'month'.$cYear; ?>').style.display='none';
										document.getElementById('<?php echo 'b12Dec'; ?>').style.backgroundColor='#0070DD';
										document.getElementById('<?php echo 'b'.$bYear; ?>').style.backgroundColor='#0070DD';
										document.getElementById('<?php echo 'a'.$aYear; ?>').style.backgroundColor='#F0F0F0';
										document.getElementById('<?php echo 'c'.$cYear; ?>').style.backgroundColor='#F0F0F0';
										">
										<?php echo $bYear; ?>
									</button>
									<button id="<?php echo 'a'.$aYear; ?>" style="width: 60px; background-color: #0070DD;" onclick="
										<?php
											for ($moCoNu=1; $moCoNu<=12; $moCoNu++) {
												if ($moCoNu == 1) {
													$moCoNa = 'Jan';
													$moCoNaName = 'January';
												}elseif ($moCoNu == 2) {
													$moCoNa = 'Feb';
													$moCoNaName = 'February';
												}elseif ($moCoNu == 3) {
													$moCoNa = 'Mar';
													$moCoNaName = 'March';
												}elseif ($moCoNu == 4) {
													$moCoNa = 'Apr';
													$moCoNaName = 'April';
												}elseif ($moCoNu == 5) {
													$moCoNa = 'May';
													$moCoNaName = 'May';
												}elseif ($moCoNu == 6) {
													$moCoNa = 'Jun';
													$moCoNaName = 'June';
												}elseif ($moCoNu == 7) {
													$moCoNa = 'Jul';
													$moCoNaName = 'July';
												}elseif ($moCoNu == 8) {
													$moCoNa = 'Aug';
													$moCoNaName= 'August';
												}elseif ($moCoNu == 9) {
													$moCoNa = 'Sep';
													$moCoNaName = 'September';
												}elseif ($moCoNu == 10) {
													$moCoNa = 'Oct';
													$moCoNaName = 'October';
												}elseif ($moCoNu == 11) {
													$moCoNa = 'Nov';
													$moCoNaName = 'November';
												}elseif ($moCoNu == 12) {
													$moCoNa = 'Dec';
													$moCoNaName = 'December';
												}
										?>
										document.getElementById('<?php echo 'table'.$moCoNa.$bYear.$moCoNu; ?>').style.display='none';
										document.getElementById('<?php echo 'table'.$moCoNa.$aYear.$moCoNu; ?>').style.display='none';
										document.getElementById('<?php echo 'table'.$moCoNa.$cYear.$moCoNu; ?>').style.display='none';
										document.getElementById('<?php echo 'b'.$moCoNu.$moCoNa; ?>').style.backgroundColor='#F0F0F0';
										document.getElementById('<?php echo 'a'.$moCoNu.$moCoNa; ?>').style.backgroundColor='#F0F0F0';
										document.getElementById('<?php echo 'c'.$moCoNu.$moCoNa; ?>').style.backgroundColor='#F0F0F0';
										<?php } ?>
										document.getElementById('<?php echo 'table'.$month.$year.$monthNum; ?>').style.display='inline';
										document.getElementById('<?php echo 'month'.$bYear; ?>').style.display='none'; 
										document.getElementById('<?php echo 'month'.$aYear; ?>').style.display='inline'; 
										document.getElementById('<?php echo 'month'.$cYear; ?>').style.display='none';
										document.getElementById('<?php echo 'a'.$monthNum.$month; ?>').style.backgroundColor='#0070DD';
										document.getElementById('<?php echo 'b'.$bYear; ?>').style.backgroundColor='#F0F0F0';
										document.getElementById('<?php echo 'a'.$aYear; ?>').style.backgroundColor='#0070DD';
										document.getElementById('<?php echo 'c'.$cYear; ?>').style.backgroundColor='#F0F0F0';
										">	
										<?php echo $aYear; ?>		
									</button>
									<button id="<?php echo 'c'.$cYear; ?>" style="width: 60px; background-color: #F0F0F0;" onclick="
										<?php
											for ($moCoNu=1; $moCoNu<=12; $moCoNu++) {
												if ($moCoNu == 1) {
													$moCoNa = 'Jan';
													$moCoNaName = 'January';
												}elseif ($moCoNu == 2) {
													$moCoNa = 'Feb';
													$moCoNaName = 'February';
												}elseif ($moCoNu == 3) {
													$moCoNa = 'Mar';
													$moCoNaName = 'March';
												}elseif ($moCoNu == 4) {
													$moCoNa = 'Apr';
													$moCoNaName = 'April';
												}elseif ($moCoNu == 5) {
													$moCoNa = 'May';
													$moCoNaName = 'May';
												}elseif ($moCoNu == 6) {
													$moCoNa = 'Jun';
													$moCoNaName = 'June';
												}elseif ($moCoNu == 7) {
													$moCoNa = 'Jul';
													$moCoNaName = 'July';
												}elseif ($moCoNu == 8) {
													$moCoNa = 'Aug';
													$moCoNaName= 'August';
												}elseif ($moCoNu == 9) {
													$moCoNa = 'Sep';
													$moCoNaName = 'September';
												}elseif ($moCoNu == 10) {
													$moCoNa = 'Oct';
													$moCoNaName = 'October';
												}elseif ($moCoNu == 11) {
													$moCoNa = 'Nov';
													$moCoNaName = 'November';
												}elseif ($moCoNu == 12) {
													$moCoNa = 'Dec';
													$moCoNaName = 'December';
												}
										?>
										document.getElementById('<?php echo 'table'.$moCoNa.$bYear.$moCoNu; ?>').style.display='none';
										document.getElementById('<?php echo 'table'.$moCoNa.$aYear.$moCoNu; ?>').style.display='none';
										document.getElementById('<?php echo 'table'.$moCoNa.$cYear.$moCoNu; ?>').style.display='none';
										document.getElementById('<?php echo 'b'.$moCoNu.$moCoNa; ?>').style.backgroundColor='#F0F0F0';
										document.getElementById('<?php echo 'a'.$moCoNu.$moCoNa; ?>').style.backgroundColor='#F0F0F0';
										document.getElementById('<?php echo 'c'.$moCoNu.$moCoNa; ?>').style.backgroundColor='#F0F0F0';
										<?php } ?>
										document.getElementById('<?php echo 'tableJan'.$cYear.'1'; ?>').style.display='inline';
										document.getElementById('<?php echo 'month'.$bYear; ?>').style.display='none'; 
										document.getElementById('<?php echo 'month'.$aYear; ?>').style.display='none'; 
										document.getElementById('<?php echo 'month'.$cYear; ?>').style.display='inline';
										document.getElementById('<?php echo 'c1Jan'; ?>').style.backgroundColor='#0070DD';
										document.getElementById('<?php echo 'b'.$bYear; ?>').style.backgroundColor='#F0F0F0';
										document.getElementById('<?php echo 'a'.$aYear; ?>').style.backgroundColor='#F0F0F0';
										document.getElementById('<?php echo 'c'.$cYear; ?>').style.backgroundColor='#0070DD';
										">
										<?php echo $cYear; ?>
									</button>
						</th>
					</tr>
				</table>


				<?php
					for($bNum=1; $bNum <= 12; $bNum++) {
				?>
				<?php
					$bYear = $year-1;
					$bKabisat = $bYear%4;

					//@Month Name
					if ($bNum == 1) {
						$bMonth = 'Jan';
						$bMonthName = 'January';
					}elseif ($bNum == 2) {
						$bMonth = 'Feb';
						$bMonthName = 'February';
					}elseif ($bNum == 3) {
						$bMonth = 'Mar';
						$bMonthName = 'March';
					}elseif ($bNum == 4) {
						$bMonth = 'Apr';
						$bMonthName = 'April';
					}elseif ($bNum == 5) {
						$bMonth = 'May';
						$bMonthName = 'May';
					}elseif ($bNum == 6) {
						$bMonth = 'Jun';
						$bMonthName = 'June';
					}elseif ($bNum == 7) {
						$bMonth = 'Jul';
						$bMonthName = 'July';
					}elseif ($bNum == 8) {
						$bMonth = 'Aug';
						$bMonthName= 'August';
					}elseif ($bNum == 9) {
						$bMonth = 'Sep';
						$bMonthName = 'September';
					}elseif ($bNum == 10) {
						$bMonth = 'Oct';
						$bMonthName = 'October';
					}elseif ($bNum == 11) {
						$bMonth = 'Nov';
						$bMonthName = 'November';
					}elseif ($bNum == 12) {
						$bMonth = 'Dec';
						$bMonthName = 'December';
					}
					//#Month Name

					//@Total days in one month
					if ($bMonth == 'Jan' OR $bMonth == 'Mar' OR $bMonth == 'May' OR $bMonth == 'Jul' OR $bMonth == 'Aug' OR $bMonth == 'Oct' OR $bMonth == 'Dec') {
						$bTotalDays = 31;
					} elseif ($bMonth == 'Apr' OR $bMonth == 'Jun' OR $bMonth == 'Sep' OR $bMonth == 'Nov') {
						$bTotalDays = 30;
					} elseif ($bMonth == 'Feb' AND $bKabisat == 0) {
						$bTotalDays = 29;
					} elseif ($bMonth == 'Feb' AND $bKabisat != 0) {
						$bTotalDays = 28;
					} else {
						$bTotalDays = 0;
					}
					//#Total days in one month

					$bStartDate = "1"."-".$bMonth."-".$bYear;
					$bStartDay = date('D', strtotime($bStartDate));

					//@Start day
					if ($bStartDay == 'Sun') {
						$bEmptyCol = 0;
						$bEmptyCol3 = 0;
					} elseif ($bStartDay == 'Mon') {
						$bEmptyCol = 1;
						$bEmptyCol3 = 1;
					} elseif ($bStartDay == 'Tue') {
						$bEmptyCol = 2;
						$bEmptyCol3 = 2;
					} elseif ($bStartDay == 'Wed') {
						$bEmptyCol = 3;
						$bEmptyCol3 = 3;
					} elseif ($bStartDay == 'Thu') {
						$bEmptyCol = 4;
						$bEmptyCol3 = 4;
					} elseif ($bStartDay == 'Fri') {
						$bEmptyCol = 5;
						$bEmptyCol3 = 5;
					} elseif ($bStartDay == 'Sat') {
						$bEmptyCol = 6;
						$bEmptyCol3 = 6;
					}
					//#Start day

					$bEndDate = $bTotalDays."-".$bMonth."-".$bYear;
					$bEndDay = date('D', strtotime($bEndDate));

					//@End day
					if ($bEndDay == 'Sun') {
						$bEmptyCol2 = 6;
					} elseif ($bEndDay == 'Mon') {
						$bEmptyCol2 = 5;
					} elseif ($bEndDay == 'Tue') {
						$bEmptyCol2 = 4;
					} elseif ($bEndDay == 'Wed') {
						$bEmptyCol2 = 3;
					} elseif ($bEndDay == 'Thu') {
						$bEmptyCol2 = 2;
					} elseif ($bEndDay == 'Fri') {
						$bEmptyCol2 = 1;
					} elseif ($bEndDay == 'Sat') {
						$bEmptyCol2 = 0;
					}
					//#End day

					//@Day
					/*
					if ($day == 'Sun') {
						$dayNow = 'Sunday';
					} elseif ($day == 'Mon') {
						$dayNow = 'Monday';
					} elseif ($day == 'Tue') {
						$dayNow = 'Tuesday';
					} elseif ($day == 'Wed') {
						$dayNow = 'Wednesday';
					} elseif ($day == 'Thu') {
						$dayNow = 'Thursday';
					} elseif ($day == 'Fri') {
						$dayNow = 'Friday';
					} elseif ($day == 'Sat') {
						$dayNow = 'Saturday';
					}
					*/
					//#Day

				?>

				<table id="<?php echo 'table'.$bMonth.$bYear.$bNum; ?>" style="background-color: #222222; margin-bottom: 10px; display: none;">
					<tr style="background-color: #222222;">
						<th colspan="8" style="text-align: right; color: #F0F0F0; padding: 5px;"><?php echo $bMonthName." ".$bYear; ?></th>
					</tr>				
					<tr style="background-color: #222222;">
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Sunday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Monday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Tuesday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Wednesday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Thursday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Friday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Saturday</th>
						<td rowspan="8" style="width: 250px; vertical-align: top; background-color: #555555; padding: 5px; font-size: 12; color: #F0F0F0">
							On leave:

							<?php 								
								$limLowDate= "1"."-".$bMonth."-".$bYear;
								$limHighDate= $bTotalDays."-".$bMonth."-".$bYear;

								$limLow= strtotime($limLowDate);
								$limHigh= strtotime($limHighDate);

								for ($i = 1; $i <= $bTotalDays; $i++) {
							?>
									<div id="<?php echo 'onLeave'.$bYear.$bMonth.$i; ?>" style="color: #F0F0F0; font-size: 14px; font-family: helvetica; display: none;">

							<?php
									$countDate =  $i."-".$bMonth."-".$bYear;
									$valCountDate = strtotime($countDate);

									echo $countDate."<br>";

									$sql = "SELECT * FROM tblleaves";
									$query = mysqli_query($conn, $sql);
									while ($row= mysqli_fetch_array($query)) {
										$fromDate = $row['fromDate'];
										$toDate = $row['toDate'];
										$empName =$row['empName'];

										$valFromDate = strtotime($fromDate);
										$valToDate = strtotime($toDate);

										if ($valFromDate <= $valCountDate AND $valToDate >= $valCountDate){
											echo $empName."<br>";
										}
									}
							?>
									</div>
							<?php
								}
							?>

						</td>
					</tr>

					<!--@Calendar number-->
					<?php	$numberDays = 1; ?>
					<?php while ($numberDays <= $bTotalDays) {?>
					<tr style="background-color: #222222;">
						<?php if ($bEmptyCol > 0) { ?>
						<td colspan="<?php echo $bEmptyCol; ?>" style="height: 80px;"></td>
						<?php } ?>

						<?php
							$rowDay = 1 + $bEmptyCol;
							while ($rowDay <= 7 AND $numberDays <= $bTotalDays) {
						?>
						<td style="height: 80px; text-align: center;">
							<?php if ($numberDays == $dayNum AND $bMonth == $month AND $year == $bYear) { ?>
								<div>
									<button id="<?php echo 'day'.$bYear.$bMonth.$numberDays; ?>" style="width: 40px; height: 40px; display: inline-block; font-family: helvetica; font-size: 24px; font-weight: 600; color: #F0F0F0; background-color: #0070DD; border-color: #0070DD;" onclick="

										<?php
											for ($i=1; $i <= $bTotalDays; $i++) {
										?>
												document.getElementById('<?php echo 'onLeave'.$bYear.$bMonth.$i; ?>').style.display='none';
										<?php
											} 
										?>

										document.getElementById('<?php echo 'onLeave'.$bYear.$bMonth.$numberDays; ?>').style.display='inline'; 

										<?php
											for ($i=1; $i <= $bTotalDays; $i++) {
										?>
												document.getElementById('<?php echo 'day'.$bYear.$bMonth.$i; ?>').style.borderColor='#222222';
										<?php
											} 
										?>

										document.getElementById('<?php echo 'day'.$bYear.$bMonth.$numberDays; ?>').style.borderColor='#0070DD';">
										<?php echo $numberDays; ?>
									</button>
								</div>
							<?php } else { ?>
								<div>

									<button id="<?php echo 'day'.$bYear.$bMonth.$numberDays; ?>" style="width: 40px; height: 40px; display: inline-block; font-family: helvetica; font-size: 24px; font-weight: 600; color: #F0F0F0; background-color: #222222; border-color: #222222;" onclick="

										<?php
											for ($i=1; $i <= $bTotalDays; $i++) {
										?>
												document.getElementById('<?php echo 'onLeave'.$bYear.$bMonth.$i; ?>').style.display='none';
										<?php
											} 
										?>

										document.getElementById('<?php echo 'onLeave'.$bYear.$bMonth.$numberDays; ?>').style.display='inline';
										
										<?php
											for ($i=1; $i <= $bTotalDays; $i++) {
										?>
												document.getElementById('<?php echo 'day'.$bYear.$bMonth.$i; ?>').style.borderColor='#222222';
										<?php
											} 
										?>

										document.getElementById('<?php echo 'day'.$bYear.$bMonth.$numberDays; ?>').style.borderColor='#0070DD';

										">
										<?php echo $numberDays; ?>		
									</button>
								</div>
							<?php } ?>
						</td>

						<?php
							if ($bEmptyCol2 > 0 AND $numberDays == $bTotalDays) {
						?>
							<td colspan="<?php echo $bEmptyCol2; ?>" style="height: 80px;"></td>
						<?php
							}
						?>

						<?php
							$numberDays++; $rowDay++; }
							$bEmptyCol = 0;
						?>

					</tr>
					<?php } ?>

					<tr style="background-color: #222222;">
						<td colspan="7">

						</td>
					</tr>
					<!--#Calendar number-->
				</table>

				<?php } ?>

				<?php
					for($aNum=1; $aNum <= 12; $aNum++) {
				?>
				<?php
					$aYear = $year;
					$aKabisat = $aYear%4;

					//@Month Name
					if ($aNum == 1) {
						$aMonth = 'Jan';
						$aMonthName = 'January';
					}elseif ($aNum == 2) {
						$aMonth = 'Feb';
						$aMonthName = 'February';
					}elseif ($aNum == 3) {
						$aMonth = 'Mar';
						$aMonthName = 'March';
					}elseif ($aNum == 4) {
						$aMonth = 'Apr';
						$aMonthName = 'April';
					}elseif ($aNum == 5) {
						$aMonth = 'May';
						$aMonthName = 'May';
					}elseif ($aNum == 6) {
						$aMonth = 'Jun';
						$aMonthName = 'June';
					}elseif ($aNum == 7) {
						$aMonth = 'Jul';
						$aMonthName = 'July';
					}elseif ($aNum == 8) {
						$aMonth = 'Aug';
						$aMonthName= 'August';
					}elseif ($aNum == 9) {
						$aMonth = 'Sep';
						$aMonthName = 'September';
					}elseif ($aNum == 10) {
						$aMonth = 'Oct';
						$aMonthName = 'October';
					}elseif ($aNum == 11) {
						$aMonth = 'Nov';
						$aMonthName = 'November';
					}elseif ($aNum == 12) {
						$aMonth = 'Dec';
						$aMonthName = 'December';
					}
					//#Month Name

					//@Total days in one month
					if ($aMonth == 'Jan' OR $aMonth == 'Mar' OR $aMonth == 'May' OR $aMonth == 'Jul' OR $aMonth == 'Aug' OR $aMonth == 'Oct' OR $aMonth == 'Dec') {
						$aTotalDays = 31;
					} elseif ($aMonth == 'Apr' OR $aMonth == 'Jun' OR $aMonth == 'Sep' OR $aMonth == 'Nov') {
						$aTotalDays = 30;
					} elseif ($aMonth == 'Feb' AND $aKabisat == 0) {
						$aTotalDays = 29;
					} elseif ($aMonth == 'Feb' AND $aKabisat != 0) {
						$aTotalDays = 28;
					} else {
						$aTotalDays = 0;
					}
					//#Total days in one month

					$aStartDate = "1"."-".$aMonth."-".$aYear;
					$aStartDay = date('D', strtotime($aStartDate));

					//@Start day
					if ($aStartDay == 'Sun') {
						$aEmptyCol = 0;
					} elseif ($aStartDay == 'Mon') {
						$aEmptyCol = 1;
					} elseif ($aStartDay == 'Tue') {
						$aEmptyCol = 2;
					} elseif ($aStartDay == 'Wed') {
						$aEmptyCol = 3;
					} elseif ($aStartDay == 'Thu') {
						$aEmptyCol = 4;
					} elseif ($aStartDay == 'Fri') {
						$aEmptyCol = 5;
					} elseif ($aStartDay == 'Sat') {
						$aEmptyCol = 6;
					}
					//#Start day

					$aEndDate = $aTotalDays."-".$aMonth."-".$aYear;
					$aEndDay = date('D', strtotime($aEndDate));

					//@End day
					if ($aEndDay == 'Sun') {
						$aEmptyCol2 = 6;
					} elseif ($aEndDay == 'Mon') {
						$aEmptyCol2 = 5;
					} elseif ($aEndDay == 'Tue') {
						$aEmptyCol2 = 4;
					} elseif ($aEndDay == 'Wed') {
						$aEmptyCol2 = 3;
					} elseif ($aEndDay == 'Thu') {
						$aEmptyCol2 = 2;
					} elseif ($aEndDay == 'Fri') {
						$aEmptyCol2 = 1;
					} elseif ($aEndDay == 'Sat') {
						$aEmptyCol2 = 0;
					}
					//#End day

					//@Day
					/*
					if ($day == 'Sun') {
						$dayNow = 'Sunday';
					} elseif ($day == 'Mon') {
						$dayNow = 'Monday';
					} elseif ($day == 'Tue') {
						$dayNow = 'Tuesday';
					} elseif ($day == 'Wed') {
						$dayNow = 'Wednesday';
					} elseif ($day == 'Thu') {
						$dayNow = 'Thursday';
					} elseif ($day == 'Fri') {
						$dayNow = 'Friday';
					} elseif ($day == 'Sat') {
						$dayNow = 'Saturday';
					}
					*/
					//#Day

				?>

				<?php 
					if ($aMonth == $month) {
				?>
				<table id="<?php echo 'table'.$aMonth.$aYear.$aNum; ?>" style="background-color: #222222; margin-bottom: 10px; display: inline;">
				<?php 
					} else {
				?>
				<table id="<?php echo 'table'.$aMonth.$aYear.$aNum; ?>" style="background-color: #222222; margin-bottom: 10px; display: none;">
				<?php
					}
				?>

					<tr style="background-color: #222222;">
						<th colspan="8" style="text-align: right; color: #F0F0F0; padding: 5px;"><?php echo $aMonthName." ".$aYear; ?></th>
					</tr>				
					<tr style="background-color: #222222;">
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Sunday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Monday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Tuesday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Wednesday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Thursday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Friday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Saturday</th>
						<td rowspan="8" style="width: 250px; vertical-align: top; background-color: #555555; padding: 5px; font-size: 12; color: #F0F0F0">
							On leave:

							<?php 								
								$limLowDate= "1"."-".$aMonth."-".$aYear;
								$limHighDate= $aTotalDays."-".$aMonth."-".$aYear;

								$limLow= strtotime($limLowDate);
								$limHigh= strtotime($limHighDate);

								for ($i = 1; $i <= $aTotalDays; $i++) {
							?>
									<div id="<?php echo 'onLeave'.$aYear.$aMonth.$i; ?>" style="color: #F0F0F0; font-size: 14px; font-family: helvetica; display: none;">

							<?php
									$countDate =  $i."-".$aMonth."-".$aYear;
									$valCountDate = strtotime($countDate);

									echo $countDate."<br>";

									$sql = "SELECT * FROM tblleaves WHERE leaveStatus='1'";
									$query = mysqli_query($conn, $sql);
									while ($row= mysqli_fetch_array($query)) {
										$fromDate = $row['fromDate'];
										$toDate = $row['toDate'];
										$empName =$row['empName'];

										$valFromDate = strtotime($fromDate);
										$valToDate = strtotime($toDate);

										if ($valFromDate <= $valCountDate AND $valToDate >= $valCountDate){
											echo $empName."<br>";
										}
									}
							?>
									</div>
							<?php
								}
							?>

						</td>
					</tr>

					<!--@Calendar number-->
					<?php	$numberDays = 1; ?>
					<?php while ($numberDays <= $aTotalDays) {?>
					<tr style="background-color: #222222;">
						<?php if ($aEmptyCol > 0) { ?>
						<td colspan="<?php echo $aEmptyCol; ?>" style="height: 80px;"></td>
						<?php } ?>

						<?php
							$rowDay = 1 + $aEmptyCol;
							while ($rowDay <= 7 AND $numberDays <= $aTotalDays) {
						?>
						<td style="height: 80px; text-align: center;">
							
							<?php 								
									$countDate =  $numberDays."-".$aMonth."-".$aYear;
									$valCountDate = strtotime($countDate);

									$sql = "SELECT * FROM tblleaves WHERE leaveStatus='1'";
									$query = mysqli_query($conn, $sql);
									$emLeCo = 0;
									while ($row= mysqli_fetch_array($query)) {
										$fromDate = $row['fromDate'];
										$toDate = $row['toDate'];
										$empName =$row['empName'];

										$valFromDate = strtotime($fromDate);
										$valToDate = strtotime($toDate);

										if ($valFromDate <= $valCountDate AND $valToDate >= $valCountDate){
											$emLeCo++;
										}
									}
							?>

							<?php if ($emLeCo > 0) { ?>
								<div style="width: 20px; height: 20px; display: inline-block; font-size: 12px; font-weight: 700; background-color: #F0F0F0; color: #222222;">
									<?php echo $emLeCo; ?>
								</div>
							<?php } else { ?>
								<div style="width: 20px; height: 20px; display: inline-block; font-size: 12px; font-weight: 700; background-color: #222222; color: #222222;">
									<?php echo $emLeCo; ?>
								</div>
							<?php } ?>

							<?php if ($numberDays == $dayNum AND $aMonth == $month AND $year == $aYear) { ?>
								<div>
									<button id="<?php echo 'day'.$aYear.$aMonth.$numberDays; ?>" style="width: 40px; height: 40px; display: inline-block; font-family: helvetica; font-size: 24px; font-weight: 600; color: #F0F0F0; background-color: #0070DD; border-color: #0070DD;" onclick="

										<?php
											for ($i=1; $i <= $aTotalDays; $i++) {
										?>
												document.getElementById('<?php echo 'onLeave'.$aYear.$aMonth.$i; ?>').style.display='none';
										<?php
											} 
										?>

										document.getElementById('<?php echo 'onLeave'.$aYear.$aMonth.$numberDays; ?>').style.display='inline'; 

										<?php
											for ($i=1; $i <= $aTotalDays; $i++) {
										?>
												document.getElementById('<?php echo 'day'.$aYear.$aMonth.$i; ?>').style.borderColor='#222222';
										<?php
											} 
										?>

										document.getElementById('<?php echo 'day'.$aYear.$aMonth.$numberDays; ?>').style.borderColor='#0070DD';">
										<?php echo $numberDays; ?>
									</button>
								</div>
							<?php } else { ?>
								<div>

									<button id="<?php echo 'day'.$aYear.$aMonth.$numberDays; ?>" style="width: 40px; height: 40px; display: inline-block; font-family: helvetica; font-size: 24px; font-weight: 600; color: #F0F0F0; background-color: #222222; border-color: #222222;" onclick="

										<?php
											for ($i=1; $i <= $aTotalDays; $i++) {
										?>
												document.getElementById('<?php echo 'onLeave'.$aYear.$aMonth.$i; ?>').style.display='none';
										<?php
											} 
										?>

										document.getElementById('<?php echo 'onLeave'.$aYear.$aMonth.$numberDays; ?>').style.display='inline';
										
										<?php
											for ($i=1; $i <= $aTotalDays; $i++) {
										?>
												document.getElementById('<?php echo 'day'.$aYear.$aMonth.$i; ?>').style.borderColor='#222222';
										<?php
											} 
										?>

										document.getElementById('<?php echo 'day'.$aYear.$aMonth.$numberDays; ?>').style.borderColor='#0070DD';

										">
										<?php echo $numberDays; ?>		
									</button>
								</div>
							<?php } ?>
						</td>

						<?php
							if ($aEmptyCol2 > 0 AND $numberDays == $aTotalDays) {
						?>
							<td colspan="<?php echo $aEmptyCol2; ?>" style="height: 80px;"></td>
						<?php
							}
						?>

						<?php
							$numberDays++; $rowDay++; }
							$aEmptyCol = 0;
						?>

					</tr>
					<?php } ?>
					<tr style="background-color: #222222;">
						<td colspan="7">-</td>
					</tr>
					<!--#Calendar number-->
				</table>

				<?php } ?>

				<?php
					for($cNum=1; $cNum <= 12; $cNum++) {
				?>
				<?php
					$cYear = $year+1;
					$cKabisat = $cYear%4;

					//@Month Name
					if ($cNum == 1) {
						$cMonth = 'Jan';
						$cMonthName = 'January';
					}elseif ($cNum == 2) {
						$cMonth = 'Feb';
						$cMonthName = 'February';
					}elseif ($cNum == 3) {
						$cMonth = 'Mar';
						$cMonthName = 'March';
					}elseif ($cNum == 4) {
						$cMonth = 'Apr';
						$cMonthName = 'April';
					}elseif ($cNum == 5) {
						$cMonth = 'May';
						$cMonthName = 'May';
					}elseif ($cNum == 6) {
						$cMonth = 'Jun';
						$cMonthName = 'June';
					}elseif ($cNum == 7) {
						$cMonth = 'Jul';
						$cMonthName = 'July';
					}elseif ($cNum == 8) {
						$cMonth = 'Aug';
						$cMonthName= 'August';
					}elseif ($cNum == 9) {
						$cMonth = 'Sep';
						$cMonthName = 'September';
					}elseif ($cNum == 10) {
						$cMonth = 'Oct';
						$cMonthName = 'October';
					}elseif ($cNum == 11) {
						$cMonth = 'Nov';
						$cMonthName = 'November';
					}elseif ($cNum == 12) {
						$cMonth = 'Dec';
						$cMonthName = 'December';
					}
					//#Month Name

					//@Total days in one month
					if ($cMonth == 'Jan' OR $cMonth == 'Mar' OR $cMonth == 'May' OR $cMonth == 'Jul' OR $cMonth == 'Aug' OR $cMonth == 'Oct' OR $cMonth == 'Dec') {
						$cTotalDays = 31;
					} elseif ($cMonth == 'Apr' OR $cMonth == 'Jun' OR $cMonth == 'Sep' OR $cMonth == 'Nov') {
						$cTotalDays = 30;
					} elseif ($cMonth == 'Feb' AND $cKabisat == 0) {
						$cTotalDays = 29;
					} elseif ($cMonth == 'Feb' AND $cKabisat != 0) {
						$cTotalDays = 28;
					} else {
						$cTotalDays = 0;
					}
					//#Total days in one month

					$cStartDate = "1"."-".$cMonth."-".$cYear;
					$cStartDay = date('D', strtotime($cStartDate));

					//@Start day
					if ($cStartDay == 'Sun') {
						$cEmptyCol = 0;
					} elseif ($cStartDay == 'Mon') {
						$cEmptyCol = 1;
					} elseif ($cStartDay == 'Tue') {
						$cEmptyCol = 2;
					} elseif ($cStartDay == 'Wed') {
						$cEmptyCol = 3;
					} elseif ($cStartDay == 'Thu') {
						$cEmptyCol = 4;
					} elseif ($cStartDay == 'Fri') {
						$cEmptyCol = 5;
					} elseif ($cStartDay == 'Sat') {
						$cEmptyCol = 6;
					}
					//#Start day

					$cEndDate = $cTotalDays."-".$cMonth."-".$cYear;
					$cEndDay = date('D', strtotime($cEndDate));

					//@End day
					if ($cEndDay == 'Sun') {
						$cEmptyCol2 = 6;
					} elseif ($cEndDay == 'Mon') {
						$cEmptyCol2 = 5;
					} elseif ($cEndDay == 'Tue') {
						$cEmptyCol2 = 4;
					} elseif ($cEndDay == 'Wed') {
						$cEmptyCol2 = 3;
					} elseif ($cEndDay == 'Thu') {
						$cEmptyCol2 = 2;
					} elseif ($cEndDay == 'Fri') {
						$cEmptyCol2 = 1;
					} elseif ($cEndDay == 'Sat') {
						$cEmptyCol2 = 0;
					}
					//#End day

					//@Day
					/*
					if ($day == 'Sun') {
						$dayNow = 'Sunday';
					} elseif ($day == 'Mon') {
						$dayNow = 'Monday';
					} elseif ($day == 'Tue') {
						$dayNow = 'Tuesday';
					} elseif ($day == 'Wed') {
						$dayNow = 'Wednesday';
					} elseif ($day == 'Thu') {
						$dayNow = 'Thursday';
					} elseif ($day == 'Fri') {
						$dayNow = 'Friday';
					} elseif ($day == 'Sat') {
						$dayNow = 'Saturday';
					}
					*/
					//#Day

				?>

				<table id="<?php echo 'table'.$cMonth.$cYear.$cNum; ?>" style="background-color: #222222; margin-bottom: 10px; display: none;">
					<tr style="background-color: #222222;">
						<th colspan="8" style="text-align: right; color: #F0F0F0; padding: 5px;"><?php echo $cMonthName." ".$cYear; ?></th>
					</tr>				
					<tr style="background-color: #222222;">
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Sunday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Monday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Tuesday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Wednesday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Thursday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Friday</th>
						<th style="color: #F0F0F0; padding-top: 20px; padding-bottom: 20px; width: 100px; height: 35px; padding: 5px; text-align: center; font-size: 14px;">Saturday</th>
						<td rowspan="8" style="width: 250px; vertical-align: top; background-color: #555555; padding: 5px; font-size: 12; color: #F0F0F0">
							On leave:

							<?php 								
								$limLowDate= "1"."-".$cMonth."-".$cYear;
								$limHighDate= $cTotalDays."-".$cMonth."-".$cYear;

								$limLow= strtotime($limLowDate);
								$limHigh= strtotime($limHighDate);

								for ($i = 1; $i <= $cTotalDays; $i++) {
							?>
									<div id="<?php echo 'onLeave'.$cYear.$cMonth.$i; ?>" style="color: #F0F0F0; font-size: 14px; font-family: helvetica; display: none;">

							<?php
									$countDate =  $i."-".$cMonth."-".$cYear;
									$valCountDate = strtotime($countDate);

									echo $countDate."<br>";

									$sql = "SELECT * FROM tblleaves";
									$query = mysqli_query($conn, $sql);
									while ($row= mysqli_fetch_array($query)) {
										$fromDate = $row['fromDate'];
										$toDate = $row['toDate'];
										$empName =$row['empName'];

										$valFromDate = strtotime($fromDate);
										$valToDate = strtotime($toDate);

										if ($valFromDate <= $valCountDate AND $valToDate >= $valCountDate){
											echo $empName."<br>";
										}
									}
							?>
									</div>
							<?php
								}
							?>

						</td>
					</tr>

					<!--@Calendar number-->
					<?php	$numberDays = 1; ?>
					<?php while ($numberDays <= $cTotalDays) {?>
					<tr style="background-color: #222222;">
						<?php if ($cEmptyCol > 0) { ?>
						<td colspan="<?php echo $cEmptyCol; ?>" style="height: 80px;"></td>
						<?php } ?>

						<?php
							$rowDay = 1 + $cEmptyCol;
							while ($rowDay <= 7 AND $numberDays <= $cTotalDays) {
						?>
						<td style="height: 80px; text-align: center;">
							<?php if ($numberDays == $dayNum AND $cMonth == $month AND $year == $cYear) { ?>
								<div>
									<button id="<?php echo 'day'.$cYear.$cMonth.$numberDays; ?>" style="width: 40px; height: 40px; display: inline-block; font-family: helvetica; font-size: 24px; font-weight: 600; color: #F0F0F0; background-color: #0070DD; border-color: #0070DD;" onclick="

										<?php
											for ($i=1; $i <= $cTotalDays; $i++) {
										?>
												document.getElementById('<?php echo 'onLeave'.$cYear.$cMonth.$i; ?>').style.display='none';
										<?php
											} 
										?>

										document.getElementById('<?php echo 'onLeave'.$cYear.$cMonth.$numberDays; ?>').style.display='inline'; 

										<?php
											for ($i=1; $i <= $cTotalDays; $i++) {
										?>
												document.getElementById('<?php echo 'day'.$cYear.$cMonth.$i; ?>').style.borderColor='#222222';
										<?php
											} 
										?>

										document.getElementById('<?php echo 'day'.$cYear.$cMonth.$numberDays; ?>').style.borderColor='#0070DD';">
										<?php echo $numberDays; ?>
									</button>
								</div>
							<?php } else { ?>
								<div>

									<button id="<?php echo 'day'.$cYear.$cMonth.$numberDays; ?>" style="width: 40px; height: 40px; display: inline-block; font-family: helvetica; font-size: 24px; font-weight: 600; color: #F0F0F0; background-color: #222222; border-color: #222222;" onclick="

										<?php
											for ($i=1; $i <= $cTotalDays; $i++) {
										?>
												document.getElementById('<?php echo 'onLeave'.$cYear.$cMonth.$i; ?>').style.display='none';
										<?php
											} 
										?>

										document.getElementById('<?php echo 'onLeave'.$cYear.$cMonth.$numberDays; ?>').style.display='inline';
										
										<?php
											for ($i=1; $i <= $cTotalDays; $i++) {
										?>
												document.getElementById('<?php echo 'day'.$cYear.$cMonth.$i; ?>').style.borderColor='#222222';
										<?php
											} 
										?>

										document.getElementById('<?php echo 'day'.$cYear.$cMonth.$numberDays; ?>').style.borderColor='#0070DD';

										">
										<?php echo $numberDays; ?>		
									</button>
								</div>
							<?php } ?>
						</td>

						<?php
							if ($cEmptyCol2 > 0 AND $numberDays == $cTotalDays) {
						?>
							<td colspan="<?php echo $cEmptyCol2; ?>" style="height: 80px;"></td>
						<?php
							}
						?>

						<?php
							$numberDays++; $rowDay++; }
							$cEmptyCol = 0;
						?>

					</tr>
					<?php } ?>
					<tr style="background-color: #222222;">
						<td colspan="7">-</td>
					</tr>
					<!--#Calendar number-->
				</table>

				<?php } ?>
			</div>
		</div>
	</div>
</div>