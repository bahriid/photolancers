<style>
    html, body {
        padding: 0;
        margin: 0;
    }

    .email-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .email-button:hover {
        background-color: #0056b3;
    }
</style>
<div
    style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7; padding-bottom:80px">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
           style="border-collapse:collapse;margin:0 auto; padding:0; max-width:800px">
        <tbody>
        <tr>
            <td align="center" valign="center" style="text-align:center; padding: 40px">
                <h2>Your account is now {{$user->status == 'active' ? 'ACTIVATED' : 'CLOSED'}}</h2>
            </td>
        </tr>
        <tr>
            <td align="center" valign="center" style="text-align: center;">
                <div
                    style="text-align:center; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                    <div style="font-size: 17px;text-align: center;">
                        <strong>
                            @if($user->status == 'active')
                                Your Account is now active, you can now login to your account
                                <br>
                                <br>
                                <button class="email-button">Login</button>
                                <br>
                            @else
                                Your Account is rejected, you can create another account or contact us
                            @endif
                        </strong>
                    </div>

                    <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>
                    <div style="padding-bottom: 10px">
                        Mail generated automatically at {{ now()->format('d F Y H:i:s') }}
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
