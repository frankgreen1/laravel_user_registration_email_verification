Hello {{ $email_data['name']}}
<br><br>
welcome to my website
<br><br>

please click the link below to verify your email and activate your account!
<br><br>

<a href="http://localhost/laravelMailer/blog/public/verify?code={{ $email_data['verification_code']}}">Click here</a>
<br><br>
thank you!
<br>
Franklin Uche
