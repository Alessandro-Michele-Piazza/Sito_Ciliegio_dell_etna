<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuovo contatto</title>
</head>
<body style="margin:0;padding:0;background-color:#f4f4f4;font-family:Arial,Helvetica,sans-serif;color:#1f2937;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f4f4;">
        <tr>
            <td align="center" style="padding:24px 12px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:640px;background-color:#ffffff;border-radius:10px;overflow:hidden;">
                    <tr>
                        <td style="background-color:#31493c;color:#ffffff;padding:24px 28px;">
                            <h1 style="margin:0;font-size:22px;line-height:1.3;">Nuovo messaggio dal sito</h1>
                            <p style="margin:6px 0 0;font-size:14px;opacity:0.9;">Il Ciliegio dell'Etna</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:24px 28px;">
                            <p style="margin:0 0 16px;font-size:16px;">Ecco i dettagli del contatto:</p>

                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #e5e7eb;border-radius:8px;overflow:hidden;">
                                <tr>
                                    <td style="padding:12px 16px;background-color:#f9fafb;width:140px;font-weight:bold;">Nome</td>
                                    <td style="padding:12px 16px;">{{ $name }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px 16px;background-color:#f9fafb;width:140px;font-weight:bold;">Email</td>
                                    <td style="padding:12px 16px;">{{ $email }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px 16px;background-color:#f9fafb;width:140px;font-weight:bold;">Oggetto</td>
                                    <td style="padding:12px 16px;">{{ $subject }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px 16px;background-color:#f9fafb;width:140px;font-weight:bold;">CV allegato</td>
                                    <td style="padding:12px 16px;">{{ $hasCv ? 'Si' : 'No' }}</td>
                                </tr>
                            </table>

                            <h2 style="margin:20px 0 8px;font-size:16px;">Messaggio</h2>
                            <div style="margin:0;padding:14px 16px;background-color:#f9fafb;border:1px solid #e5e7eb;border-radius:8px;white-space:pre-line;">
                                {{ $messageText }}
                            </div>

                            <p style="margin:20px 0 0;font-size:13px;color:#6b7280;">Rispondi direttamente a questa email per contattare il mittente.</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#f3f4f6;padding:14px 28px;font-size:12px;color:#6b7280;">
                            Messaggio automatico generato dal modulo contatti.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
