<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إيميل ترحيب — {{ $userName }}!</title>
    <!--[if mso]>
<noscript>
<xml>
<o:OfficeDocumentSettings>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
</noscript>
<![endif]-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;900&family=Tajawal:wght@400;500;700&display=swap');

        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
            border: 0;
            outline: none;
            text-decoration: none;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100% !important;
            height: 100% !important;
            background-color: #0E1B2B;
        }

        a {
            color: inherit;
        }

        .email-wrapper {
            width: 100%;
            background-color: #0E1B2B;
            padding: 40px 0;
        }

        .seal {
            width: 74px;
            height: 74px;
            border-radius: 50%;
            background: radial-gradient(circle at 35% 30%, #F3D98A, #C9A227 55%, #8C6E15 100%);
            box-shadow: 0 0 0 4px rgba(201, 162, 39, 0.18), 0 8px 20px rgba(0, 0, 0, 0.35);
        }

        .headline {
            font-family: 'Cairo', Tahoma, Arial, sans-serif;
            font-weight: 900;
            color: #F7F3E9;
            letter-spacing: 0;
        }

        .body-text {
            font-family: 'Tajawal', Tahoma, Arial, sans-serif;
            color: #2B2B2B;
            line-height: 1.9;
        }

        .cta-btn {
            font-family: 'Cairo', Tahoma, Arial, sans-serif;
            font-weight: 700;
            display: inline-block;
            background: linear-gradient(135deg, #D9B44A 0%, #B9862A 100%);
            color: #0E1B2B !important;
            padding: 16px 46px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 16px;
            letter-spacing: .3px;
            box-shadow: 0 10px 24px rgba(185, 134, 42, 0.35);
        }

        .divider {
            height: 1px;
            background: linear-gradient(90deg, rgba(201, 162, 39, 0) 0%, rgba(201, 162, 39, 0.55) 50%, rgba(201, 162, 39, 0) 100%);
        }

        .footer-text {
            font-family: 'Tajawal', Tahoma, Arial, sans-serif;
            color: #9AA5B4;
            line-height: 1.8;
        }

        @media only screen and (max-width: 600px) {
            .container {
                width: 100% !important;
            }

            .px {
                padding-left: 22px !important;
                padding-right: 22px !important;
            }

            .headline-size {
                font-size: 28px !important;
                line-height: 1.4 !important;
            }

            .stack {
                display: block !important;
                width: 100% !important;
                text-align: center !important;
            }
        }
    </style>
</head>

<body>
    <div class="email-wrapper">
        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td align="center">

                    <table role="presentation" class="container" width="600" cellpadding="0" cellspacing="0"
                        border="0" style="width:600px; max-width:600px;">

                        <!-- ===== Header / Hero ===== -->
                        <tr>
                            <td style="background: linear-gradient(160deg, #0E1B2B 0%, #16283F 60%, #1B2E44 100%); border-radius: 18px 18px 0 0; padding: 46px 40px 40px 40px;"
                                class="px" align="center">

                                <table role="presentation" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td align="center" style="padding-bottom:22px;">
                                            <div class="seal"
                                                style="width:74px;height:74px;border-radius:50%;background:radial-gradient(circle at 35% 30%, #F3D98A, #C9A227 55%, #8C6E15 100%);box-shadow:0 0 0 4px rgba(201,162,39,0.18), 0 8px 20px rgba(0,0,0,0.35);">
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                                <div class="footer-text"
                                    style="font-size:12px; letter-spacing:3px; text-transform:uppercase; color:#C9A227; margin-bottom:14px; font-family:'Tajawal',Tahoma,Arial,sans-serif;">
                                    عضوية جديدة
                                </div>

                                <h1 class="headline headline-size"
                                    style="font-size:34px; margin:0; font-family:'Cairo',Tahoma,Arial,sans-serif;">
                                    أهلاً بك، {{ $userName }}!
                                </h1>

                                <p class="footer-text"
                                    style="font-size:15px; margin:14px 0 0 0; color:#B9C2D0; font-family:'Tajawal',Tahoma,Arial,sans-serif;">
                                    حسابك جاهز، ونحن سعداء بانضمامك إلينا
                                </p>
                            </td>
                        </tr>

                        <!-- ===== Body ===== -->
                        <tr>
                            <td style="background:#FBF9F4; padding: 44px 44px 10px 44px;" class="px">
                                <p class="body-text" style="font-size:16px; margin:0 0 22px 0;">
                                    عزيزنا <strong style="color:#0E1B2B;">{{ $userName }}!</strong>،
                                </p>
                                <p class="body-text" style="font-size:16px; margin:0 0 22px 0;">
                                    يسعدنا انضمامك إلى مجتمعنا. تم إنشاء حسابك بنجاح، وأصبح بإمكانك الآن الوصول إلى كافة
                                    الخدمات والمزايا المخصّصة لأعضائنا. نحرص دائمًا على تقديم تجربة استثنائية تليق بثقتك
                                    بنا.
                                </p>

                                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                                    style="margin: 8px 0 30px 0;">
                                    <tr>
                                        <td
                                            style="background:#F1EADA; border-radius:10px; padding: 22px 24px; border-right:4px solid #C9A227;">
                                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                                border="0">
                                                <tr>
                                                    <td class="body-text"
                                                        style="font-size:14px; color:#6B5B2A; padding-bottom:6px; font-family:'Tajawal',Tahoma,Arial,sans-serif;">
                                                        البريد الإلكتروني المسجَّل</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:16px; font-weight:700; color:#0E1B2B; font-family:'Cairo',Tahoma,Arial,sans-serif;"
                                                        dir="ltr" align="right">
                                                        {{ $userEmail }}
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>

                                <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                    border="0">
                                    <tr>
                                        <td align="center" style="padding: 6px 0 34px 0;">
                                            <a href="#" class="cta-btn">تفعيل الحساب الآن</a>
                                        </td>
                                    </tr>
                                </table>

                                <div class="divider"
                                    style="height:1px; background:linear-gradient(90deg, rgba(201,162,39,0) 0%, rgba(201,162,39,0.55) 50%, rgba(201,162,39,0) 100%); margin-bottom: 30px;">
                                </div>

                                <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                    border="0">
                                    <tr>
                                        <td width="33%" class="stack" align="center" style="padding-bottom:20px;">
                                            <div
                                                style="font-family:'Cairo',Tahoma,Arial,sans-serif; font-weight:900; font-size:20px; color:#0E1B2B;">
                                                01</div>
                                            <div class="body-text"
                                                style="font-size:13px; color:#5A5A5A; margin-top:6px;">أكمل ملفك الشخصي
                                            </div>
                                        </td>
                                        <td width="33%" class="stack" align="center" style="padding-bottom:20px;">
                                            <div
                                                style="font-family:'Cairo',Tahoma,Arial,sans-serif; font-weight:900; font-size:20px; color:#0E1B2B;">
                                                02</div>
                                            <div class="body-text"
                                                style="font-size:13px; color:#5A5A5A; margin-top:6px;">استكشف الخدمات
                                            </div>
                                        </td>
                                        <td width="33%" class="stack" align="center" style="padding-bottom:20px;">
                                            <div
                                                style="font-family:'Cairo',Tahoma,Arial,sans-serif; font-weight:900; font-size:20px; color:#0E1B2B;">
                                                03</div>
                                            <div class="body-text"
                                                style="font-size:13px; color:#5A5A5A; margin-top:6px;">تواصل مع الدعم
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- ===== Signature line ===== -->
                        <tr>
                            <td style="background:#FBF9F4; padding: 6px 44px 40px 44px;" class="px">
                                <p class="body-text" style="font-size:15px; margin:0; color:#4A4A4A;">
                                    مع خالص التقدير،<br>
                                    <strong style="color:#0E1B2B; font-family:'Cairo',Tahoma,Arial,sans-serif;">فريق
                                        العمل</strong>
                                </p>
                            </td>
                        </tr>

                        <!-- ===== Footer ===== -->
                        <tr>
                            <td style="background:#0E1B2B; border-radius:0 0 18px 18px; padding: 30px 40px;"
                                class="px" align="center">
                                <p class="footer-text" style="font-size:12px; margin:0 0 10px 0;">
                                    وصلتك هذه الرسالة لأنه تم إنشاء حساب جديد باسم {{ $userName }}!.
                                </p>
                                <p class="footer-text" style="font-size:12px; margin:0;">
                                    © 2026 جميع الحقوق محفوظة
                                </p>
                            </td>
                        </tr>

                    </table>

                </td>
            </tr>
        </table>
    </div>
</body>

</html>
