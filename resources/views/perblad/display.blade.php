@extends('perblad.layout')
@section('title', 'Display Data | COOLFIX Company')
@section('content')
    <!-- تم قفل المارجن والبادينج 50 بكسل وتوجيه النص من اليسار لليمين ltr -->
    <div class="container mx-auto"
        style="margin: 50px; padding: 50px; background-color: #ffffff; border-radius: 16px; box-shadow: 0 15px 20px 10px rgba(0, 0, 0, 0.1); direction: ltr; text-align: left;">

        <!-- العنوان الرئيسي بحجم كبير وواضح -->
        <h2 style="font-size: 28px; font-weight: bold; color: #1f2937; margin-bottom: 24px;">
            Thank you! Your data has been received successfully:
        </h2>

        @if (session()->has('client_data'))
            <!-- قائمة منسقة لليسار بمسافات ممتازة وحجم خط كبير -->
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li
                    style="padding: 16px; margin-bottom: 12px; background-color: #e0eaf5; border: 1px solid #e5e7eb; border-radius: 8px;">
                    <strong style="font-size: 20px; color: #2563eb; display: block; margin-bottom: 4px;">Name:</strong>
                    <span style="font-size: 18px; color: #374151; font-weight: 500;">{{ session('client_data')['name'] }}
                    </span>
                </li>

                <li
                    style="padding: 16px; margin-bottom: 12px; background-color: #e0eaf5; border: 1px solid #e5e7eb; border-radius: 8px;">
                    <strong style="font-size: 20px; color: #2563eb; display: block; margin-bottom: 4px;">Phone:</strong>
                    <span
                        style="font-size: 18px; color: #374151; font-weight: 500;">{{ session('client_data')['phone'] }}</span>
                </li>

                <li
                    style="padding: 16px; margin-bottom: 12px; background-color: #e0eaf5; border: 1px solid #e5e7eb; border-radius: 8px;">
                    <strong style="font-size: 20px; color: #2563eb; display: block; margin-bottom: 4px;">Brand:</strong>
                    <span
                        style="font-size: 18px; color: #374151; font-weight: 500;">{{ session('client_data')['brand'] }}</span>
                </li>

                <li
                    style="padding: 16px; margin-bottom: 12px; background-color: #e0eaf5; border: 1px solid #e5e7eb; border-radius: 8px;">
                    <strong style="font-size: 20px; color: #2563eb; display: block; margin-bottom: 4px;">Area:</strong>
                    <span
                        style="font-size: 18px; color: #374151; font-weight: 500;">{{ session('client_data')['area'] }}</span>
                </li>
                <li
                    style="padding: 16px; margin-bottom: 12px; background-color: #e0eaf5; border: 1px solid #e5e7eb; border-radius: 8px;">
                    <strong style="font-size: 20px; color: #2563eb; display: block; margin-bottom: 4px;">Problem:</strong>
                    <span
                        style="font-size: 18px; color: #374151; font-weight: 500;">{{ session('client_data')['Describe'] ?? 'No description' }}</span>
                </li>
            </ul>
        @else
            <div style="background-color: #fef3c7; color: #92400e; padding: 16px; border-radius: 8px; font-size: 18px;">
                No data available to display currently.
            </div>
        @endif
        <!-- تم تصحيح علامات الاقتباس وإغلاق الأوسمة البرمجية بشكل سليم هنا لمنع عطل الاستضافة -->
        <form action="{{ route('contact') }}" method="GET" style="margin-top: 24px;">
            <button
                style="background-color: #2563eb; color: white; border: none; padding: 12px 30px; border-radius: 8px; cursor: pointer; font-size: 16px; font-weight: 600;"
                type="submit" class="cta">
                <span>Back</span>
            </button>
        </form>

    </div>
@endsection
