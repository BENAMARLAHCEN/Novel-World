<!DOCTYPE html>
<html lang="en">

<body style="font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 5px;">
        <h1 style="text-align: center; color: #333333;">Hello {{ $user->name }},</h1>

        <p style="color: #333333;">Thank you for registering on our platform. Please click the button below to activate your account:</p>

        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('verify-email', $user->verify_token) }}" style="display: inline-block; background-color: #007bff; color: #ffffff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Activate Account</a>
        </div>

        <p style="color: #333333; margin-top: 20px;">Thanks,</p>
        <p style="color: #333333;">{{ config('app.name') }}</p>
    </div>
</body>

</html>
