<!DOCTYPE HTML>
<!-- Mahin Khan -->
<html> <!-- I am a parent -->
	<head> <!-- Child of html tag -->
		<?php
			$conn = new PDO("mysql:hostname=localhost;dbname=mahindatabase", "root", "");
			
			function getDatabaseResults($cmd, $arrayType = PDO::FETCH_NUM)
				{
					global $conn;
					
					$result = $conn->prepare($cmd);
					$result->execute();

					return $result->fetchAll($arrayType);
				}
				
			function getPlayerChance($player)
			{
				$cmd = "SELECT `Scoring Chance` FROM `playersdata` WHERE `Name` = '$player'";
				$data = getDatabaseResults($cmd);

				return ($data[0][0]);
			}
			//echo getPlayerChance('Costa');
			//if(getPlayerChance(Costa) == 30)
			//{
			//	echo "hi";
			//}
		?>
		<title> 
			Soccer Match Simulation
		</title>
		<style>
		#head
			{
				text-align:center;
				border-radius:5px;
				color:white;
				border-style:solid;
				background-color:#DC143C;
				padding-right:10px;
				padding-left:10px;
			}
			
			div.bkgn
			{
				position:fixed;
				top:0px;
				left:0px;
				width:100%;
				height:100%;
	
				z-index:-1;
			}
		
			div.bkgn > img
			{
				width:100%;
				height:100%;
				opacity:0.7
			}
		
			.info
			{
				text-align:center;
				border:2px solid black;
				border-radius:100px;
				background-color:white;
				opacity: 0.9;
				color:black;
			}		
		</style> <!-- CSS goes in here -->
		
		<script src = "utilities.js"></script>
		
		<script>
			function initialize()
			{
				clubs = document.getElementById("teams");
				scoreboard = document.getElementById("score");
				stats = document.getElementById("matchSummary");
				
				//clubs.innerHTML = soc;
				
				//getRandomInteger(0, 100);
				
				//scoreboard.innerHTML = socpts;
			}
		</script> <!-- Javascript goes in here -->
	</head>
	<body>
		<div class = "bkgn">
			<img src = "images/fifa16mar.jpg" />
		</div>
		<div class = "info">
			<?php	
					/*if(!isset($_POST['playerTeam']))
					{
						echo "Enter your team.";
					}
					else
					{
						if($_POST['playerTeam'] == "ChelseaFC")
						{
							echo "Your Team:" . " " . "Chelsea FC";
						}
						else
						{
							if($_POST['playerTeam'] == "BorussiaM")
							{
								echo "Your Team:" . " " . "Borussia Monchengladbach";
							}
							else
							{
								if($_POST['playerTeam'] == "SeattleSounders")
								{
									echo "Your Team:" . " " . "Seattle Sounders";
								}
							}
						}
					}*/
					
					if(!isset($_POST['playerTeam']))
					{
						echo "Enter your team.";
					}
					else
					{
						if($_POST['playerTeam'] == "ChelseaFC" && $_POST['oppTeam'] == "ChelseaFC")
						{
							echo "The same teams can't compete against each other";
						}
						else
						{
							if($_POST['playerTeam'] == "BorussiaM" && $_POST['oppTeam'] == "BorussiaM")
							{
								echo "The same teams can't compete against each other";
							}
							else
							{
								if($_POST['playerTeam'] == "SeattleSounders" && $_POST['oppTeam'] ==  "SeattleSounders")
								{
									echo "The same teams can't compete against each other";
								}
								else
								{
									if($_POST['playerTeam'] == "ChelseaFC" && $_POST['oppTeam'] ==  "BorussiaM")
									{
										echo "Chelsea(You) vs Borussia Monchengladbach";
									}
									else
									{
										if($_POST['playerTeam'] == "ChelseaFC" && $_POST['oppTeam'] ==  "SeattleSounders")
										{
											echo "Chelsea(You) vs Seattle Sounders";
										}
										else
										{
											if($_POST['playerTeam'] == "BorussiaM" && $_POST['oppTeam'] ==  "ChelseaFC")
											{
												echo "Borussia Monchengladbach(You) vs Chelsea";
											}
											else
											{
												if($_POST['playerTeam'] == "BorussiaM" && $_POST['oppTeam'] ==  "SeattleSounders")
												{
													echo "Borussia Monchengladbach(You) vs Seattle Sounders";
												}
												else
												{
													if($_POST['playerTeam'] == "SeattleSounders" && $_POST['oppTeam'] ==  "ChelseaFC")
													{					
														echo "Seattle Sounders(You) vs Chelsea";
													}
													else
													{
														if($_POST['playerTeam'] == "SeattleSounders" && $_POST['oppTeam'] ==  "BorussiaM")
														{						
															echo "Seattle Sounders(You) vs Borussia Monchengladbach";
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
			?>
		</div>
		
		<div class = "info">
			<?php
				$yourGoals = 0;
				$oppGoals = 0;
				
				if($_POST['playerTeam'] ==  "ChelseaFC" && $_POST['oppTeam'] == "ChelseaFC")
				{
					return;
				}
				
				if($_POST['playerTeam'] ==  "BorussiaM" && $_POST['oppTeam'] == "BorussiaM")
				{
					return;
				}
				
				if($_POST['playerTeam'] ==  "SeattleSounders" && $_POST['oppTeam'] == "SeattleSounders")
				{
					return;
				}
				
				if($_POST['playerTeam'] == "ChelseaFC")
				{
					for($i = 0; $i < 5; $i++)
					{
						$randnum = rand(0,200);
						if($randnum <= getPlayerChance('Costa'))
						{
							$yourGoals++;
							echo "<br />" . "Costa scores!";
						}
						
						if($randnum > getPlayerChance('Costa') && $randnum <= getPlayerChance('Remy'))
						{
							$yourGoals++;
							echo "Remy scores!";
						}
						
						if($randnum > getPlayerChance('Pato') && $randnum <= getPlayerChance('Hazard'))
						{
							$yourGoals++;
							echo "Hazard scores!";
						}
						
						if($randnum > getPlayerChance('Hazard') && $randnum <= getPlayerChance('Matic'))
						{
							$yourGoals++;
							echo "Matic scores!";
						}
						
						if($randnum > getPlayerChance('Matic') && $randnum <= getPlayerChance('Oscar'))
						{
							$yourGoals++;
							echo "Oscar scores!";
						}
						
						if($randnum > getPlayerChance('Oscar') && $randnum <= getPlayerChance('Willian'))
						{
							$yourGoals++;
							echo "Willian scores!";
						}
						
						if($randnum > getPlayerChance('Willian') && $randnum <= getPlayerChance('Cahill'))
						{
							$yourGoals++;
							echo "Cahill scores!";
						}
						
						if($randnum > getPlayerChance('Cahill') && $randnum <= getPlayerChance('Zouma'))
						{
							$yourGoals++;
							echo "Zouma scores!";
						}
						
						if($randnum > getPlayerChance('Zouma') && $randnum <= getPlayerChance('Baba'))
						{
							$yourGoals++;
							echo "Baba scores!";
						}
						
						if($randnum > getPlayerChance('Baba') && $randnum <= getPlayerChance('Miazga'))
						{
							$yourGoals++;
							echo "Miazga scores!";
						}
					}
				}
				
				if($_POST['playerTeam'] == "BorussiaM")
				{
					for($i = 0; $i < 5; $i++)
					{
						$randnum = rand(0,200);
						if($randnum <= getPlayerChance('Raffael'))
						{
							$yourGoals++;
							echo "Raffael scores!";
						}
						
						if($randnum > getPlayerChance('Raffael') && $randnum <= getPlayerChance('Stindl'))
						{
							$yourGoals++;
							echo "Stindl scores!";
						}
						
						if($randnum > getPlayerChance('Drmic') && $randnum <= getPlayerChance('Xhaka'))
						{
							$yourGoals++;
							echo "Xhaka scores!";
						}
						
						if($randnum > getPlayerChance('Xhaka') && $randnum <= getPlayerChance('Traore'))
						{
							$yourGoals++;
							echo "Traore scores!";
						}
						
						if($randnum > getPlayerChance('Traore') && $randnum <= getPlayerChance('Johnson'))
						{
							$yourGoals++;
							echo "Johnson scores!";
						}
						
						if($randnum > getPlayerChance('Johnson') && $randnum <= getPlayerChance('Hofmann'))
						{
							$yourGoals++;
							echo "Hofmann scores!";
						}
						
						if($randnum > getPlayerChance('Hofmann') && $randnum <= getPlayerChance('Stranzl'))
						{
							$yourGoals++;
							echo "Stranzl scores!";
						}
						
						if($randnum > getPlayerChance('Stranzl') && $randnum <= getPlayerChance('Jantschke'))
						{
							$yourGoals++;
							echo "Jantschke scores!";
						}
						
						if($randnum > getPlayerChance('Jantschke') && $randnum <= getPlayerChance('Wendt'))
						{
							$yourGoals++;
							echo "Wendt scores!";
						}
						
						if($randnum > getPlayerChance('Wendt') && $randnum <= getPlayerChance('Korb'))
						{
							$yourGoals++;
							echo "Korb scores!";
						}
					}
				}
				
				if($_POST['playerTeam'] == "SeattleSounders")
				{
					for($i = 0; $i < 5; $i++)
					{
						$randnum = rand(0,200);
						if($randnum <= getPlayerChance('Dempsey'))
						{
							$yourGoals++;
							echo "Dempsey scores!";
						}
						
						if($randnum > getPlayerChance('Dempsey') && $randnum <= getPlayerChance('Valdez'))
						{
							$yourGoals++;
							echo "Valdez scores!";
						}
						
						if($randnum > getPlayerChance('Pappa') && $randnum <= getPlayerChance('Neagle'))
						{
							$yourGoals++;
							echo "Neagle scores!";
						}
						
						if($randnum > getPlayerChance('Neagle') && $randnum <= getPlayerChance('Alonso'))
						{
							$yourGoals++;
							echo "Alonso scores!";
						}
						
						if($randnum > getPlayerChance('Alonso') && $randnum <= getPlayerChance('Pineda'))
						{
							$yourGoals++;
							echo "Pineda scores!";
						}
						
						if($randnum > getPlayerChance('Pineda') && $randnum <= getPlayerChance('Rose'))
						{
							$yourGoals++;
							echo "Rose scores!";
						}
						
						if($randnum > getPlayerChance('Rose') && $randnum <= getPlayerChance('Mears'))
						{
							$yourGoals++;
							echo "Mears scores!";
						}
						
						if($randnum > getPlayerChance('Mears') && $randnum <= getPlayerChance('Evans'))
						{
							$yourGoals++;
							echo "Evans scores!";
						}
						
						if($randnum > getPlayerChance('Evans') && $randnum <= getPlayerChance('Jones'))
						{
							$yourGoals++;
							echo "Jones scores!";
						}
						
						if($randnum > getPlayerChance('Jones') && $randnum <= getPlayerChance('Remick'))
						{
							$yourGoals++;
							echo "Remick scores!";
						}
					}
				}
				
				if($_POST['oppTeam'] == "ChelseaFC")
				{
					for($i = 0; $i < 5; $i++)
					{
						$randnum = rand(0,200);
						if($randnum <= getPlayerChance('Costa'))
						{
							$oppGoals++;
							echo "Costa scores!";
						}
						
						if($randnum > getPlayerChance('Costa') && $randnum <= getPlayerChance('Remy'))
						{
							$oppGoals++;
							echo "Remy scores!";
						}
						
						if($randnum > getPlayerChance('Pato') && $randnum <= getPlayerChance('Hazard'))
						{
							$oppGoals++;
							echo "Hazard scores!";
						}
						
						if($randnum > getPlayerChance('Hazard') && $randnum <= getPlayerChance('Matic'))
						{
							$oppGoals++;
							echo "Matic scores!";
						}
						
						if($randnum > getPlayerChance('Matic') && $randnum <= getPlayerChance('Oscar'))
						{
							$oppGoals++;
							echo "Oscar scores!";
						}
						
						if($randnum > getPlayerChance('Oscar') && $randnum <= getPlayerChance('Willian'))
						{
							$oppGoals++;
							echo "Willian scores!";
						}
						
						if($randnum > getPlayerChance('Willian') && $randnum <= getPlayerChance('Cahill'))
						{
							$oppGoals++;
							echo "Cahill scores!";
						}
						
						if($randnum > getPlayerChance('Cahill') && $randnum <= getPlayerChance('Zouma'))
						{
							$oppGoals++;
							echo "Zouma scores!";
						}
						
						if($randnum > getPlayerChance('Zouma') && $randnum <= getPlayerChance('Baba'))
						{
							$oppGoals++;
							echo "Baba scores!";
						}
						
						if($randnum > getPlayerChance('Baba') && $randnum <= getPlayerChance('Miazga'))
						{
							$oppGoals++;
							echo "Miazga scores!";
						}
					}
				}
				
				if($_POST['oppTeam'] == "BorussiaM")
				{
					for($i = 0; $i < 5; $i++)
					{
						$randnum = rand(0,200);
						if($randnum <= getPlayerChance('Raffael'))
						{
							$oppGoals++;
							echo "Raffael scores!";
						}
						
						if($randnum > getPlayerChance('Raffael') && $randnum <= getPlayerChance('Stindl'))
						{
							$oppGoals++;
							echo "Stindl scores!";
						}
						
						if($randnum > getPlayerChance('Drmic') && $randnum <= getPlayerChance('Xhaka'))
						{
							$oppGoals++;
							echo "Xhaka scores!";
						}
						
						if($randnum > getPlayerChance('Xhaka') && $randnum <= getPlayerChance('Traore'))
						{
							$oppGoals++;
							echo "Traore scores!";
						}
						
						if($randnum > getPlayerChance('Traore') && $randnum <= getPlayerChance('Johnson'))
						{
							$oppGoals++;
							echo "Johnson scores!";
						}
						
						if($randnum > getPlayerChance('Johnson') && $randnum <= getPlayerChance('Hofmann'))
						{
							$oppGoals++;
							echo "Hofmann scores!";
						}
						
						if($randnum > getPlayerChance('Hofmann') && $randnum <= getPlayerChance('Stranzl'))
						{
							$oppGoals++;
							echo "Stranzl scores!";
						}
						
						if($randnum > getPlayerChance('Stranzl') && $randnum <= getPlayerChance('Jantschke'))
						{
							$oppGoals++;
							echo "Jantschke scores!";
						}
						
						if($randnum > getPlayerChance('Jantschke') && $randnum <= getPlayerChance('Wendt'))
						{
							$oppGoals++;
							echo "Wendt scores!";
						}
						
						if($randnum > getPlayerChance('Wendt') && $randnum <= getPlayerChance('Korb'))
						{
							$oppGoals++;
							echo "Korb scores!";
						}
					}
				}
				
				if($_POST['oppTeam'] == "SeattleSounders")
				{
					for($i = 0; $i < 5; $i++)
					{
						$randnum = rand(0,200);
						if($randnum <= getPlayerChance('Dempsey'))
						{
							$oppGoals++;
							echo "Dempsey scores!";
						}
						
						if($randnum > getPlayerChance('Dempsey') && $randnum <= getPlayerChance('Valdez'))
						{
							$oppGoals++;
							echo "Valdez scores!";
						}
						
						if($randnum > getPlayerChance('Pappa') && $randnum <= getPlayerChance('Neagle'))
						{
							$oppGoals++;
							echo "Neagle scores!";
						}
						
						if($randnum > getPlayerChance('Neagle') && $randnum <= getPlayerChance('Alonso'))
						{
							$oppGoals++;
							echo "Alonso scores!";
						}
						
						if($randnum > getPlayerChance('Alonso') && $randnum <= getPlayerChance('Pineda'))
						{
							$oppGoals++;
							echo "Pineda scores!";
						}
						
						if($randnum > getPlayerChance('Pineda') && $randnum <= getPlayerChance('Rose'))
						{
							$oppGoals++;
							echo "Rose scores!";
						}
						
						if($randnum > getPlayerChance('Rose') && $randnum <= getPlayerChance('Mears'))
						{
							$oppGoals++;
							echo "Mears scores!";
						}
						
						if($randnum > getPlayerChance('Mears') && $randnum <= getPlayerChance('Evans'))
						{
							$oppGoals++;
							echo "Evans scores!";
						}
						
						if($randnum > getPlayerChance('Evans') && $randnum <= getPlayerChance('Jones'))
						{
							$oppGoals++;
							echo "Jones scores!";
						}
						
						if($randnum > getPlayerChance('Jones') && $randnum <= getPlayerChance('Remick'))
						{
							$oppGoals++;
							echo "Remick scores!";
						}
					}
				}
				
			?>
		</div>
		
		<div class = "info">
			<?php
				if($_POST['playerTeam'] == "ChelseaFC")
				{
					echo "Chelsea FC:" . " " . $yourGoals; 
				}
				if($_POST['playerTeam'] == "BorussiaM")
				{
					echo "Borussia Monchengladbach:" . " " . $yourGoals; 
				}
				if($_POST['playerTeam'] == "SeattleSounders")
				{
					echo "Seattle Sounders:" . " " . $yourGoals; 
				}
				
				if($_POST['oppTeam'] == "ChelseaFC")
				{
					echo nl2br("\n Chelsea FC: $oppGoals");
				}
				if($_POST['oppTeam'] == "BorussiaM")
				{
					echo nl2br("\n Borussia Monchengladbach: $oppGoals");
				}
				if($_POST['oppTeam'] == "SeattleSounders")
				{
					echo nl2br("\n Seattle Sounders: $oppGoals");
				}
				
			?>
		</div>
		<a href = "index.html">Play another match.</a>
	</body>
</html>