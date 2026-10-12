<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>لوحة التحكم | إدارة المنشورات</title>
    <!-- استدعاء خط Cairo ليعطي مظهر عربي احترافي جداً -->
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #4f46e5;
            /* لون أزرق نيلي عصري */
            --bg-color: #f8fafc;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
        }

        body {
            font-family: 'Cairo', sans-serif;
            direction: rtl;
            padding: 40px 20px;
            background-color: var(--bg-color);
            color: var(--text-main);
            margin: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        h1 {
            font-size: 24px;
            font-weight: 700;
            margin: 0;
            color: #0f172a;
        }

        .badge {
            background-color: #e0e7ff;
            color: var(--primary-color);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        /* حاوية الجدول لإعطائه حواف دائرية وظل احترافي */
        .table-responsive {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05), 0 2px 4px -2px rgb(0 0 0 / 0.05);
            border: 1px solid var(--border-color);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: right;
        }

        th {
            background-color: #f8fafc;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            padding: 16px 24px;
            border-bottom: 1px solid var(--border-color);
            letter-spacing: 0.5px;
        }

        td {
            padding: 16px 24px;
            font-size: 14px;
            color: #334155;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
        }

        /* تأثير التمرير فوق السطر */
        tr:hover td {
            background-color: #f8fafc;
        }

        /* تمييز السطر الأول بشكل هادئ */
        .active-first td {
            background-color: #f0fdf4 !important;
        }

        .id-cell {
            font-weight: 600;
            color: var(--text-muted);
        }

        .title-cell {
            font-weight: 600;
            color: #0f172a;
        }

        .content-cell {
            color: var(--text-muted);
            max-width: 300px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .author-cell {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background-color: #f1f5f9;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
        }

        /* تنسيق الأزرار الاحترافي */
        .actions-col {
            width: 200px;
        }

        .action-group {
            display: flex;
            gap: 12px;
        }

        .btn-action {
            background-color: #f3f5f3;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            color: #1d385f;
            transition: color 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            border-radius: 15px;
            text-align: center;
            padding: 7px 6px;
            border: none;

        }

        .btn-action:hover,
        .btn-delete:hover {
            color: var(--primary-color);
            background-color: #016e62;
            color: #fff;
            box-shadow: 1px 1px 7px #013e37;
            cursor: pointer;
        }

        .rabit_home {
            background-color: #ece3e3;
            color: #1A444E;
            font-weight: 600;
            font-size: 14px;
            padding: 3px 14px;
            border-radius: 15px;
            cursor: pointer;
            white-space: nowrap;
            flex-shrink: 0;
            transition: ease 0.3s all;
            text-decoration: none;
        }

        .rabit_home:hover {
            background-color: #013e37;
            color: #fff;
            box-shadow: 1px 1px 7px #013e37;

        }

        /* تأثير توهج الحاوية الكلي عند الكتابة والضغط بالداخل */
        .ultra-search-wrapper:focus-within {
            border-color: #6366f1 !important;
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.15) !important;
            transform: translateY(-1px);
        }

        /* هندسة رسم رأس العدسة الدائري بالـ CSS الصافي داخل الدائرة البنفسجية 👇 */
        .lens-drawn-purple::before {
            content: "" !important;
            position: absolute !important;
            width: 12px !important;
            height: 12px !important;
            border: 2px solid #ffffff !important;
            border-radius: 50% !important;
            top: 11px !important;
            left: 11px !important;
            display: block !important;
        }

        /* هندسة رسم مقبض وعصا العدسة المائل بالـ CSS الصافي 👇 */
        .lens-drawn-purple::after {
            content: "" !important;
            position: absolute !important;
            width: 2px !important;
            height: 6px !important;
            background-color: #ffffff !important;
            top: 23px !important;
            left: 23px !important;
            transform: rotate(-45deg) !important;
            display: block !important;
        }

        /* القيد الحديدي الاحترافي لإخفاء السطر المستبعد بقوة الـ !important */
        .post-row.hide-row-premium {
            display: none !important;
            opacity: 0 !important;
            visibility: hidden !important;
            pointer-events: none !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header-section">
            <h1>صندوق المنشورات الحية 📊</h1>
            <div> <a class="rabit_home" href="{{ url('/') }}">Home</a>
                <span class="badge">العدد الإجمالي: {{ $allPost->count() }}</span>
            </div>
        </div>


<!-- START 70% CENTERED ENGLISH PREMIUM SEARCH BAR -->
<div class="outstanding-search-container d-flex justify-content-center align-items-center" style="width: 100% !important; margin: 30px 0 !important; padding: 0 !important; box-sizing: border-box !important; display: flex !important; justify-content: center !important; align-items: center !important;">

    <!-- حاوية الـ 70% المتمركزة بالنص بالظبط مع حشو أبعاد معدل لليسار -->
    <div class="ultra-search-wrapper" style="position: relative !important; width: 90% !important; max-width: 90% !important; display: flex !important; align-items: center !important; background: #ffffff !important; border: 2px solid #e2e8f0 !important; border-radius: 50px !important; padding: 12px 55px 12px 25px !important; transition: all 0.4s ease !important; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03) !important; box-sizing: border-box !important;">

        <!-- حقل الإدخال الإنجليزي - 🛠️ تم تفعيل الـ direction: ltr والكتابة من الشمال مع الـ Placeholder الإنجليزي الفخم 👇 -->
        <input type="text" id="post-search-input" placeholder="Search for posts or authors... (e.g., Refrigerator, Gay)"
               style="width: 100% !important; border: none !important; outline: none !important; font-size: 1.05rem !important; font-weight: 500 !important; color: #1e1b4b !important; background: transparent !important; direction: ltr !important; text-align: left !important; padding-right: 15px !important; padding-left: 0 !important; box-sizing: border-box !important;">

        <!-- الزر الدائري البنفسجي المجهز بالعدسة المرسومة يدوياً ومثبت بدقة متناهية على اليمين 🎯 -->
        <div id="trigger-posts-search" class="ultra-search-btn lens-drawn-purple" style="position: absolute !important; right: 12px !important; top: 50% !important; transform: translateY(-50%) !important; width: 40px !important; height: 40px !important; background: linear-gradient(135deg, #8b5cf6, #6366f1) !important; border-radius: 50% !important; display: flex !important; align-items: center !important; justify-content: center !important; box-shadow: 0 4px 12px rgba(99, 102, 241, 0.35) !important; transition: all 0.3s ease !important; cursor: pointer !important; z-index: 10 !important;">
        </div>

    </div>
</div>
<!-- END 70% CENTERED ENGLISH PREMIUM SEARCH BAR -->

        <!-- END OUTSTANDING PREMIUM SEARCH BAR -->
        <!-- END OUTSTANDING PREMIUM SEARCH BAR -->


        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th class="actions-col">العمليات</th>
                        <th>ID</th>
                        <th>العنوان (Title)</th>
                        <th>المحتوى (Content)</th>
                        <th>الكاتب (Name)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allPost as $post)
                        <!-- 🛠️ التعديل الحاسم: أضفنا كلاس post-row هنا على السطر ليمحيه السكربت بالكامل عند عدم التطابق 👇 -->
                        <tr class="post-row {{ $loop->first ? 'active-first' : '' }}"
                            style="transition: all 0.3s ease;">
                            <!-- عمود أزرار العمليات -->
                            <td class="actions-col">
                                <div class="action-group">
                                    <button href="#" class="btn-action">📝 تعديل</button>
                                    <button href="#" class="btn-action">📋 نسخ</button>

                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @method('delete')
                                        <button onclick="return confirm ('Are you sure?!')" type="submit"
                                            class="btn-action btn-delete">❌ حذف</button>
                                    </form>
                                </div>
                            </td>

                            <!-- عرض البيانات -->
                            <td class="id-cell">{{ $post->id }}</td>

                            <!-- 🛠️ التعديل: أضفنا كلاس post-title لمسك نص العنوان بالسكربت 👇 -->
                            <td class="title-cell post-title">{{ $post->title }}</td>

                            <td class="content-cell">{{ Str::limit($post->content, 60) }}</td>
                            <td>
                                <!-- 🛠️ التعديل: أضفنا كلاس post-author لمسك نص الكاتب بالسكربت 👇 -->
                                <span class="author-cell post-author">
                                    👤 {{ $post->name ?? 'مجهول' }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- 🎯 3. سكربت الجافا سكريبت الصافي (Vanilla JS) المطور لتوجيه النقر والفلترة الحية بحسب البداية غصباً عن الكاش -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var searchInput = document.getElementById('post-search-input');
            var searchBtn = document.getElementById('trigger-posts-search');

            // عند الضغط على الدائرة البنفسجية، ينتقل مؤشر الكتابة للداخل فوراً
            if (searchBtn && searchInput) {
                searchBtn.addEventListener('click', function() {
                    searchInput.focus();
                });
            }

            // سكربت الفلترة الحية المبني على بداية الكلمة (Starts With) غصباً عن الكاش
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    var value = this.value.toLowerCase().trim();
                    var rows = document.querySelectorAll('.post-row');

                    rows.forEach(function(row) {
                        var titleEl = row.querySelector('.post-title');
                        var authorEl = row.querySelector('.post-author');

                        // تنظيف النصوص وفصل أي نقاط تزيين أمامية بالجدول لضمان دقة مطابقة البداية
                        var titleText = titleEl ? titleEl.textContent.toLowerCase().trim().replace(
                            /^\.+/, '') : '';
                        // إزالة رمز الإيموجي 👤 من نص الكاتب ليطابق الاسم الصافي بالظبط بالـ replace
                        var authorText = authorEl ? authorEl.textContent.replace('👤', '')
                            .toLowerCase().trim() : '';

                        // الفحص والفلترة الحية الصارمة تزامناً مع البداية
                        if (titleText.startsWith(value) || authorText.startsWith(value)) {
                            row.classList.remove('hide-row-premium'); // سطر متطابق -> إظهاره
                        } else {
                            row.classList.add(
                            'hide-row-premium'); // سطر مستبعد -> إبادة وإخفاء فوراً ❌
                        }
                    });
                });
            }
        });
    </script>

</body>

</html>
