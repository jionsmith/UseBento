<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Email Template</title>
	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; -webkit-text-size-adjust:none; display:block; border:0px; background:#ffffff }
		a { color:#222222; text-decoration:none }

		/* Mobile styles */
		@media only screen and (max-device-width: 480px) {
			div[class="h2"] { font-size:14px; }
		}
	</style>
</head>
<body class="body" style="padding:0 !important; margin:0 !important; -webkit-text-size-adjust:none; display:block; border:0px; background:#ffffff">

<table width="100%" border="0" cellspacing="10" cellpadding="0">
	<tr>
		<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="1" bgcolor="#eaeaea">
				<tr>
					<td>
						<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eaf2fa">
							<tr>
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="5"></td>
								<td class="text" style="color:#222222; font-family:Arial; font-size:12px; line-height:16px; text-align:left">
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

									<strong>Full name</strong>
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

								</td><!-- /.text -->
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="5"></td>
							</tr>
						</table>
						<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
							<tr>
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="35"></td>
								<td class="text" style="color:#222222; font-family:Arial; font-size:12px; line-height:16px; text-align:left">
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>
									<?php echo $field_name; ?>
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

								</td><!-- /.text -->
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="5"></td>
							</tr>
						</table>

						<!-- Email Table -->
						<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eaf2fa">
							<tr>
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="5"></td>
								<td class="text" style="color:#222222; font-family:Arial; font-size:12px; line-height:16px; text-align:left">
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

									<strong>E-mail:</strong>
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

								</td><!-- /.text -->
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="5"></td>
							</tr>
						</table>
						<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
							<tr>
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="35"></td>
								<td class="text" style="color:#222222; font-family:Arial; font-size:12px; line-height:16px; text-align:left">
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

									<a href="mailto:<?php echo $email; ?>" target="_blank" class="link" style="color:#222222; text-decoration:none"><span class="link" style="color:#222222; text-decoration:none"><?php echo $field_email; ?></span></a>
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

								</td><!-- /.text -->
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="5"></td>
							</tr>
						</table>

						<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eaf2fa">
							<tr>
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="5"></td>
								<td class="text" style="color:#222222; font-family:Arial; font-size:12px; line-height:16px; text-align:left">
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

									<strong>Portfolio URL:</strong>
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

								</td><!-- /.text -->
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="5"></td>
							</tr>
						</table>
						<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
							<tr>
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="35"></td>
								<td class="text" style="color:#222222; font-family:Arial; font-size:12px; line-height:16px; text-align:left">
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>
									<?php echo $field_portfolio; ?>
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

								</td><!-- /.text -->
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="5"></td>
							</tr>
						</table>

						<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eaf2fa">
							<tr>
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="5"></td>
								<td class="text" style="color:#222222; font-family:Arial; font-size:12px; line-height:16px; text-align:left">
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

									<strong>Dribbble URL:</strong>
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

								</td><!-- /.text -->
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="5"></td>
							</tr>
						</table>
						<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
							<tr>
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="35"></td>
								<td class="text" style="color:#222222; font-family:Arial; font-size:12px; line-height:16px; text-align:left">
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>
									<?php echo $field_dribble; ?>
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

								</td><!-- /.text -->
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="5"></td>
							</tr>
						</table>

						<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eaf2fa">
							<tr>
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="5"></td>
								<td class="text" style="color:#222222; font-family:Arial; font-size:12px; line-height:16px; text-align:left">
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

									<strong>Behance URL:</strong>
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

								</td><!-- /.text -->
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="5"></td>
							</tr>
						</table>
						<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
							<tr>
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="35"></td>
								<td class="text" style="color:#222222; font-family:Arial; font-size:12px; line-height:16px; text-align:left">
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>
									<?php echo $field_behance; ?>
									<div style="font-size:0pt; line-height:0pt; height:5px"><img src="images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>

								</td><!-- /.text -->
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="5"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</body>
</html>
