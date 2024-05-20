<h1 style="color: #333; font-family: Arial, sans-serif; font-size: 24px; font-weight: bold; margin-bottom: 20px;">Forget Password Email</h1>
   
<p style="color: #333; font-family: Arial, sans-serif; font-size: 16px; margin-bottom: 10px;">Hello,</p>

<p style="color: #333; font-family: Arial, sans-serif; font-size: 16px; margin-bottom: 10px;">We received a request to reset your password. If you did not make this request, please ignore this email.</p>

<p style="color: #333; font-family: Arial, sans-serif; font-size: 16px; margin-bottom: 10px;">To reset your password, click on the link below:</p>

<a href="{{ route('reset-password.form', $token) }}" style="display: inline-block; background-color: #007bff; color: #fff; text-decoration: none; padding: 10px 20px; font-family: Arial, sans-serif; font-size: 16px; border-radius: 4px; margin-bottom: 10px;">Reset Password</a>

<p style="color: #333; font-family: Arial, sans-serif; font-size: 16px; margin-bottom: 10px;">If you're having trouble clicking the link, you can copy and paste the following URL into your browser:</p>

<p style="color: #333; font-family: Arial, sans-serif; font-size: 16px; margin-bottom: 10px;">{{ route('reset-password.form', $token) }}</p>

<p style="color: #333; font-family: Arial, sans-serif; font-size: 16px; margin-bottom: 10px;">Thank you,</p>
<p style="color: #333; font-family: Arial, sans-serif; font-size: 16px; margin-bottom: 10px;">The Novel World Team</p>
