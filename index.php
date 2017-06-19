	<?php $thisPage="full-pane"; ?>
	<?php include 'includes/meta.php'; ?>
	<?php include 'includes/nav.php'; ?>
	<?php include 'includes/sidebar.php'; ?>
		<div class="outer-center" id="shell-main-content">
			<div class="middle-center">
				<div class="inner-center">Inner Center</div>
				<div class="ui-layout-north">Inner North</div>
			</div>
		</div>
		<div id="main-inbox">
			<div id="messages-header">
				<table class="messages">
					<thead>
						<tr>
							<th class="unread-message"> </th>
							<th class="checkBox"> 
								<input type="checkbox" id="a2" name="cc" />
					            <label for="a2"><span></span></label>
							</th>
							<th class="from">From</th>
							<th class="subject">Subject</th>
							<th class="date desc">Date</th>
							<th class="attachments">
								<img alt="Attachment" src="img/attachment-icon.png">
							</th>
							<th class="size">Size</th>
						</tr>
					</thead>
				</table>
			</div>
			
			<div id="messages-content">	
				<table class="messages">
					<tbody>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="unread-messsage-icon"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a3" name="cc" />
					            <label for="a3"><span></span></label>
							</td>
							<td class="from unread" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="unread-messsage-icon"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a4" name="cc" />
					            <label for="a4"><span></span></label>
							</td>
							<td class="from unread" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="unread-messsage-icon"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a5" name="cc" />
					            <label for="a5"><span></span></label>
							</td>
							<td class="from unread" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="unread-messsage-icon"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a6" name="cc" />
					            <label for="a6"><span></span></label>
							</td>
							<td class="from unread" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a7" name="cc" />
					            <label for="a7"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a8" name="cc" />
					            <label for="a8"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a9" name="cc" />
					            <label for="a9"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a10" name="cc" />
					            <label for="a10"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a11" name="cc" />
					            <label for="a11"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a12" name="cc" />
					            <label for="a12"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a13" name="cc" />
					            <label for="a13"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a14" name="cc" />
					            <label for="a14"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a15" name="cc" />
					            <label for="a15"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a16" name="cc" />
					            <label for="a16"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a17" name="cc" />
					            <label for="a17"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a18" name="cc" />
					            <label for="a18"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a19" name="cc" />
					            <label for="a19"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a20" name="cc" />
					            <label for="a20"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a21" name="cc" />
					            <label for="a21"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a22" name="cc" />
					            <label for="a22"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a23" name="cc" />
					            <label for="a23"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a24" name="cc" />
					            <label for="a24"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a25" name="cc" />
					            <label for="a25"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a26" name="cc" />
					            <label for="a26"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a27" name="cc" />
					            <label for="a27"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a28" name="cc" />
					            <label for="a28"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a29" name="cc" />
					            <label for="a29"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a30" name="cc" />
					            <label for="a30"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a31" name="cc" />
					            <label for="a31"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a32" name="cc" />
					            <label for="a32"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a33" name="cc" />
					            <label for="a33"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a34" name="cc" />
					            <label for="a34"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a35" name="cc" />
					            <label for="a35"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a36" name="cc" />
					            <label for="a36"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a37" name="cc" />
					            <label for="a37"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a38" name="cc" />
					            <label for="a38"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a37" name="cc" />
					            <label for="a37"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a38" name="cc" />
					            <label for="a38"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a37" name="cc" />
					            <label for="a37"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a38" name="cc" />
					            <label for="a38"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a37" name="cc" />
					            <label for="a37"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a38" name="cc" />
					            <label for="a38"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a37" name="cc" />
					            <label for="a37"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a38" name="cc" />
					            <label for="a38"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a37" name="cc" />
					            <label for="a37"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a38" name="cc" />
					            <label for="a38"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="white-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a37" name="cc" />
					            <label for="a37"><span></span></label>
							</td>
							<td class="from read" title="me@hotmail.com" onclick="window.location='read.php'">carl@hotmail.com</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
						<tr class="gray-bg">
							<td class="unread-message">
								<span class="read"></span>
							</td>
							<td class="checkBox">
								<input type="checkbox" id="a38" name="cc" />
					            <label for="a38"><span></span></label>
							</td>
							<td class="from read" title="david@gmail.com" onclick="window.location='read.php'">david@gmail.co.uk</td>
							<td class="subject" onclick="window.location='read.php'">This is the Subject
								<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
							</td>
							<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
							<td class="attachments">1</td>
							<td class="size">5 KB</td>
						</tr>
					</tbody>
				</table>
				
			</div><!--END MESSAGES CONTENT-->
			
			<?php include 'includes/footer.php'; ?>