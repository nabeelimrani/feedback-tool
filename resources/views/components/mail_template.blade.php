<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email Template</title>
</head>

<body style="margin: 0; padding: 0; font-family: Arial, sans-serif;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
        <tr>
            <td style="padding: 20px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                    style="border-collapse: collapse;">
                    <tr>
                        <td align="center" style="font-size: 24px; font-weight: bold;">
                            Hello, {{ $data['user'] ?? 'User' }}!
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding: 20px 0 30px 0; font-size: 16px; line-height: 20px;">
                            {{ $data['title'] ?? 'This is a default title.' }}
                        </td>
                    </tr>
                    <!-- Add more rows and cells as needed -->
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
