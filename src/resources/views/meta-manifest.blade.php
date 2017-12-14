        <!-- Chrome for Android theme color -->
        <meta name="theme-color" content="{{ $theme_color }}">

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="{{ $display == 'standalone' ? 'yes' : 'no' }}">
        <meta name="application-name" content="{{ $short_name }}">
        <link rel="icon" sizes="{{ data_get(end($icons), 'sizes') }}" href="{{ data_get(end($icons), 'src') }}">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="{{ $display == 'standalone' ? 'yes' : 'no' }}">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="{{ $short_name }}">
        <link rel="apple-touch-icon" href="{{ data_get(end($icons), 'src') }}">

        <!-- Tile for Win8 -->
        <meta name="msapplication-TileColor" content="{{ $background_color }}">
        <meta name="msapplication-TileImage" content="{{ data_get(end($icons), 'src') }}">
