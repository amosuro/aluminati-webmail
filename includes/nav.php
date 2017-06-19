	<div id="header">
		<div id="logo-shell">
			<h1 class="logo"><a href="#" title="Webmail"><img src="img/logo.png" alt="Webmail"></a></h1>
		</div>
		<ul class="primary-nav">
			<li class="mail active">
				<a class="tooltip-bottom" data-placement="bottom" href="#" title="Your Mail">Mail</a>
			</li>
			<li class="contacts">
				<a class="tooltip-bottom" data-placement="bottom" href="#" title="Contact">Contact</a>
			</li>
			<li class="account">
				<a class="tooltip-bottom" data-placement="bottom" href="#" title="My account">My Account</a>
			</li>
			<li class="calendar">
				<a class="tooltip-bottom" data-placement="bottom" href="#" title="Calendar">Calendar</a>
			</li>
			<li class="setting">
				<a class="tooltip-bottom" data-placement="bottom" href="#" title="Setting">Setting</a>
			</li>
		</ul>
		<ul class="primary-nav right">
			<li class="chat">
				<a class="tooltip-bottom" data-placement="bottom" href="#" title="Chat">Chat</a>
			</li>
			<li class="help">
				<a class="tooltip-bottom" data-placement="bottom" href="#" title="Help">help</a>
			</li>
			<li class="sign-out">
				<a href="#" title="Sign Out">Sign Out</a>
			</li>
		</ul>
	</div><!--END MAIN NAV-->
	<div id="actions">
		<div id="refresh">
			<a class="refresh-btn">Refresh</a>
		</div>
		<ul id="actions-nav">
			<!-- <li class="write active"><a href="#" title="Write">Write</a></li>-->
			<li class="write"><a href="compose.php" title="Write">Write</a></li>
			<li class="replay"><a href="#" title="Replay">Replay</a></li>
			<li class="forward"><a href="#" title="Forward">Forward</a></li>
			<li class="delete"><a href="#" title="Delete">Delete</a></li>
			<li class="junk"><a href="#" title="Junk">Junk</a></li>
			<li class="dropdown">
				<a href="#" title="Move to" class="dropdown-toggle" data-toggle="dropdown">Move to</a>
				<ul class="dropdown-menu">
					<li><a href="#" title="Inbox">Inbox</a></li>
					<li><a href="#" title="Draft">Draft</a></li>
					<li><a href="#" title="Sent">Sent</a></li>
					<li><a href="#" title="junk">junk</a></li>
					<li><a href="#" title="Deleted">Deleted</a></li>
					<li class="last"><a href="#" title="New Folder">New Folder</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">More</a>
				<ul class="dropdown-menu">
					<li><a href="#" title="Mark unread">Mark unread</a></li>
					<li><a href="#" title="Mark read">Mark read</a></li>
					<li><a href="#" title="Pin mail">Pin mail</a></li>
					<li><a href="#" title="Print">Print</a></li>
				</ul>
			</li>
		</ul>
		<div id="actions-nav-right">
			<div class="search">
				<a class="search-dropdown" data-placement="bottom" rel="popover" href="#">Advance Search</a>
				<div id="advance-search" class="hide">
					<form action="#" method="post" id="advance-search-form">
						<fieldset>
							<legend><h3>Advance Search</h3></legend>
							<ol>
								<li>
									<label for="where">Where</label>
									<div class="styled-select">
										<select>
											<option>All Mail</option>
											<option>Inbox</option>
											<option id="test">Draft</option>
											<option>Sent</option>
											<option>Junk</option>
											<option>Trash</option>
											<option>Deleted</option>
											<option>Searches</option>
											<h3>Folders</h3>
											<option>Sport</option>
											<option>To Do</option>
										</select>
									</div>
								</li>
								<li>
									<label for="date">Date</label>
									<div class="styled-select">
										<select>
											<option>Up to 1 month old</option>
											<option>Up to 3 month old</option>
											<option>Up to 6 month old</option>
											<option>Up to 9 month old</option>
											<option>Up to 1 year old</option>
											<option>Up to 2 year old</option>
										</select>
									</div>
								</li>
								<li>
									<label for="from">From</label>
									<input type="text" name="from"/>
								</li>
								<li>
									<label for="to">To</label>
									<input type="text" name="to"/>
								</li>
								<li>
									<label for="subject">Subject</label>
									<input type="text" name="subject"/>
								</li>
								<li>
									<label for="keywords">Keywords</label>
									<input type="text" name="subject" />
								</li>
								<li> 
									<input type="checkbox" id="a1" name="cc" />
						            <label for="a1"><span></span>Has Attachment</label>
								</li>
							</ol>
							<button class="search-submit" type="submit"><span>Submit form</span></button>
							<button type="close-btn" class="close" data-dismiss="clickover">&times;</button>
						</fieldset>
					</form>
				</div>
				<input class="search-bar" type="search" autosave="unique" placeholder="Search..." name="s" results="5">
				<button class="search-btn">Search</button>
			</div>
			<div id="inbox-view">
				<ul>
					<li class="two-pane-view" <?php if ($thisPage=="two-pane") echo " id=\"active\""; ?>><a href="two-pane.php" title="Two pane view">Two pane view</a></li>
					<li class="split-pane-view" <?php if ($thisPage=="split-pane") echo " id=\"active\""; ?>><a href="split-pane.php" title="Split pane view">Split pane view</a></li>
					<li class="full-pane-view" <?php if ($thisPage=="full-pane") echo " id=\"active\""; ?>><a href="index.php" title="Full pane view">Full pane view</a></li>
				</ul>
			</div>
		</div>
	</div><!--END ACTIONS NAV-->