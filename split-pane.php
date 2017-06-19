	<?php $thisPage="split-pane"; ?>
	<?php include 'includes/meta.php'; ?>
	<?php include 'includes/nav.php'; ?>
	<?php include 'includes/sidebar.php'; ?>
		
		<div id="main-inbox">
			<div id="SplitterContainer" style="height:100%">
				<div id="TopPane">
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
									<td class="from unread" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from unread" title="david@gmail.com" >david@gmail.co.uk</td>
									<td class="subject" >This is the Subject
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
									<td class="from unread" title="me@hotmail.com" >carl@hotmail.com</td>
									<td class="subject" >This is the Subject
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
									<td class="from unread" title="david@gmail.com" >david@gmail.co.uk</td>
									<td class="subject" >This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="me@hotmail.com">carl@hotmail.com</td>
									<td class="subject">This is the Subject
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
									<td class="from read" title="david@gmail.com">david@gmail.co.uk</td>
									<td class="subject">This is the Subject
										<font class="preview">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</font>
									</td>
									<td id="date" class="date dateFormat1" title="Wed, 28 Nov 2012 13:54:15 +0000">3 hours ago</td>
									<td class="attachments">1</td>
									<td class="size">5 KB</td>
								</tr>
							</tbody>
						</table>

					</div><!--END MESSAGES CONTENT-->
				</div><!-- #rightTopPane-->
				<div id="BottomPane">
					<div class="read-message">
						<div class="details-left">
							<h1 class="subject">Adobe has segmented the digital marketing and document services</h1>
							<h2 class="email">info@adobe.com</h2>
							<h3 class="to">To: info@whitestitch.com</h3>
						</div>
						<div class="details-right">
							<h3 class="date">2 November 2012 13:32PM</h3>
						</div>
						<div class="read-tools">
							<ul class="tools">
								<li class="read-replay"><a class="tooltip-bottom" data-placement="bottom" href="#" title="Replay">Replay</a></li>
								<li class="read-replay-all"><a class="tooltip-bottom" data-placement="bottom" href="#" title="Replay all">Replay all</a></li>
								<li class="read-forward"><a class="tooltip-bottom" data-placement="bottom" href="#" title="Forward">Forward</a></li>
								<li class="read-delete"><a class="tooltip-bottom" data-placement="bottom" href="#" title="Delete">Delete</a></li>
								<li class="read-print"><a class="tooltip-bottom" data-placement="bottom" href="#" title="Print">Print</a></li>
								<li class="read-pin"><a class="tooltip-bottom" data-placement="bottom" href="#" title="Pin">Pin</a></li>
							</ul>
							<ul class="text-size">
								<li class="enlarge"><a class="tooltip-bottom" data-placement="bottom" href="#" title="Enlarge">Enlarge</a></li>
								<li class="reduce"><a class="tooltip-bottom" data-placement="bottom" href="#" title="Reduce">Reduce</a></li>
							</ul>
						</div>
						<p>Hi There,<br />
							What’s new in Dreamweaver?<br /></p>
							
							<p><strong>Adobe® Dreamweaver® CS6</strong> web design software provides an intuitive visual interface for making and editing HTML websites and mobile apps. Use new Fluid Grid Layout designed for cross-platform compatibility to create adaptive layouts. Review designs with the enhanced Multiscreen Preview before publishing.</p>
							<p>Join Adobe Creative Cloud™ and get a quicker way to add <strong>audio and video to your HTML5-based websites</strong>. Easy inclusion of animations from Adobe Edge Animate. And an intuitive, <strong>reorganised HTML</strong> Insert panel. These and other new features available now, only through Creative Cloud.</p>
						<div class="quick-replay">
							<a class="quick-replay-btn" href="#">Quick Replay</a>
							<div class="text-area">
								<div id="sample">
							    	<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
							    	//<![CDATA[
							    	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
							    	//]]>
							    	</script>
									<textarea name="area2" style="width: 100%;">
										Some Initial Content was in this textarea
									</textarea>
							    </div>
							</div>
							<a href="#" class="main-btn" title="Replay">Replay</a>
							<a href="#" class="main-btn" title="Replay all">Replay all</a>
							<a href="#" class="main-btn" title="Forward">Forward</a>
							<a href="#" class="main-link" title="Cc-bcc">Cc & Bcc</a>
							<form action="#" id="cc-bcc">
								<ol>
									<li>
										<label for="cc">Cc:</label>
										<input type="text" name="from"/>
									</li>
									<li>
										<label for="Bcc">Bcc:</label>
										<input type="text" name="from"/>
									</li>
								</ol>
							</form>
						</div>
					</div>
				</div><!-- END Bottom Pane-->
			</div><!-- END Splitter Container-->
	
		

			<?php include 'includes/footer.php'; ?>