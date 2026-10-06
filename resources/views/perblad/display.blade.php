@extends('perblad.layout')

@section('content')
<!-- تم قفل المارجن والبادينج 50 بكسل وتوجيه النص من اليسار لليمين ltr -->
<div class="container mx-auto" style="margin: 50px; padding: 50px; background-color: #ffffff; border-radius: 16px; box-shadow: 0 15px 20px 10px rgba(0, 0, 0, 0.1); direction: ltr; text-align: left;">

    <!-- العنوان الرئيسي بحجم كبير وواضح -->
    <h2 style="font-size: 28px; font-weight: bold; color: #1f2937; margin-bottom: 24px;">
        Thank you! Your data has been received successfully:
    </h2>

    @if (isset($validatedData))
        <!-- قائمة منسقة لليسار بمسافات ممتازة وحجم خط كبير -->
        <ul style="list-style: none; padding: 0; margin: 0;">
            <li style="padding: 16px; margin-bottom: 12px; background-color: #e0eaf5; border: 1px solid #e5e7eb; border-radius: 8px;">
                <strong style="font-size: 20px; color: #2563eb; display: block; margin-bottom: 4px;">Name:</strong>
                <span style="font-size: 18px; color: #374151; font-weight: 500;">{{ $validatedData['name'] }}</span>
            </li>

            <li style="padding: 16px; margin-bottom: 12px; background-color: #e0eaf5; border: 1px solid #e5e7eb; border-radius: 8px;">
                <strong style="font-size: 20px; color: #2563eb; display: block; margin-bottom: 4px;">Phone:</strong>
                <span style="font-size: 18px; color: #374151; font-weight: 500;">{{ $validatedData['phone'] }}</span>
            </li>

            <li style="padding: 16px; margin-bottom: 12px; background-color: #e0eaf5; border: 1px solid #e5e7eb; border-radius: 8px;">
                <strong style="font-size: 20px; color: #2563eb; display: block; margin-bottom: 4px;">Brand:</strong>
                <span style="font-size: 18px; color: #374151; font-weight: 500;">{{ $validatedData['brand'] }}</span>
            </li>

            <li style="padding: 16px; margin-bottom: 12px; background-color: #e0eaf5; border: 1px solid #e5e7eb; border-radius: 8px;">
                <strong style="font-size: 20px; color: #2563eb; display: block; margin-bottom: 4px;">Area:</strong>
                <span style="font-size: 18px; color: #374151; font-weight: 500;">{{ $validatedData['area'] }}</span>
            </li>
            <li style="padding: 16px; margin-bottom: 12px; background-color: #e0eaf5; border: 1px solid #e5e7eb; border-radius: 8px;">
                <strong style="font-size: 20px; color: #2563eb; display: block; margin-bottom: 4px;">Problem:</strong>
                <span style="font-size: 18px; color: #374151; font-weight: 500;">{{ $validatedData['textarea'] }}</span>
            </li>
        </ul>
    @else
        <div style="background-color: #fef3c7; color: #92400e; padding: 16px; border-radius: 8px; font-size: 18px;">
            No data available to display currently.
        </div>
    @endif
</div>
@endsection
