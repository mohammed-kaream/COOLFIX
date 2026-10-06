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
                        <tr class="{{ $loop->first ? 'active-first' : '' }}">
                            <!-- عمود أزرار العمليات -->
                            <td class="actions-col">
                                <div class="action-group">
                                    <button href="#" class="btn-action">📝 تعديل</button>
                                    <button href="#" class="btn-action">📋 نسخ</button>

                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @method('delete')
                                        <button onclick="return confirm ('Are you sure?!')" type="submit"
                                            class="btn-action btn-delete">❌
                                            حذف</button>
                                    </form>

                                </div>
                            </td>

                            <!-- عرض البيانات -->
                            <td class="id-cell">{{ $post->id }}</td>
                            <td class="title-cell">{{ $post->title }}</td>
                            <td class="content-cell">{{ Str::limit($post->content, 60) }}</td>
                            <td>
                                <span class="author-cell">
                                    👤 {{ $post->name ?? 'مجهول' }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
