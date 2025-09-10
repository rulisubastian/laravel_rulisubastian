@props(['type' => 'hospital', 'width' => 32, 'height' => 32, 'class' => ''])

@if($type === 'hospital')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
         width="{{ $width }}" height="{{ $height }}"
         fill="none" stroke="#0d6efd" stroke-width="1.6"
         stroke-linecap="round" stroke-linejoin="round"
         class="{{ $class }}">
        <!-- building -->
        <rect x="2.5" y="5" width="19" height="16" rx="1.2" ry="1.2" fill="#fff" stroke="#0d6efd"/>
        <!-- door -->
        <rect x="10" y="13.2" width="4" height="7.5" rx="0.6" ry="0.6" fill="#0d6efd" stroke="none"/>
        <!-- windows -->
        <rect x="4.5" y="7.2" width="3.2" height="2.6" rx="0.4" fill="#0d6efd" opacity="0.15"/>
        <rect x="8.4" y="7.2" width="3.2" height="2.6" rx="0.4" fill="#0d6efd" opacity="0.15"/>
        <rect x="12.3" y="7.2" width="3.2" height="2.6" rx="0.4" fill="#0d6efd" opacity="0.15"/>
        <rect x="16.2" y="7.2" width="3.2" height="2.6" rx="0.4" fill="#0d6efd" opacity="0.15"/>
        <!-- roof line -->
        <path d="M2.5 8.8 H21.5" stroke="#0d6efd" stroke-width="0.9" />
        <!-- plus sign -->
        <rect x="10.6" y="3.2" width="2.8" height="4.4" rx="0.3" fill="#0d6efd"/>
        <rect x="9.0" y="4.6" width="6.4" height="2.8" rx="0.3" fill="#0d6efd"/>
    </svg>
@elseif($type === 'patient')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
         width="{{ $width }}" height="{{ $height }}"
         fill="none" stroke="#198754" stroke-width="1.6"
         stroke-linecap="round" stroke-linejoin="round"
         class="{{ $class }}">
        <!-- head -->
        <circle cx="12" cy="6.2" r="2.2" fill="#fff" stroke="#198754" />
        <!-- shoulders / body -->
        <path d="M5 20c0-3.5 3.1-6 7-6s7 2.5 7 6" fill="#fff" stroke="#198754"/>
        <!-- torso -->
        <path d="M7.5 12.5c1-1.8 3-2.6 4.5-2.6s3.5.8 4.5 2.6" fill="#fff" stroke="#198754"/>
        <!-- heart -->
        <path d="M12 14.2c-.6-.8-1.9-1.4-2.6-.7-.7.7-.6 1.8.1 2.5.6.6 2.1 1.9 2.5 2.2.4-.3 1.9-1.6 2.5-2.2.7-.7.8-1.8.1-2.5-.7-.7-2 0-2.6.7z" fill="#dc3545" stroke="none" opacity="0.95"/>
    </svg>
@endif
