<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ config('app.name', 'Arcitect') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind (optional, remove if not using) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- HTMX -->
  <script src="https://unpkg.com/htmx.org@1.9.10"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
  
  @vite('resources/css/app.css')
  @stack('head')
</head>

<body hx-headers='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}'
x-init
:class="{dark:$store.theme.dark}"
>
  <div class="flex flex-col min-h-screen">

    <!-- Header -->
    <header class="site-header">
      <nav>
        <a href="{{ url('/') }}" class="site-title mr-auto">
          Arcitect
        </a>
        <a href="{{ url('/outline') }}">
          Outline Dashboard
        </a>

        {{-- Light & Dark mode button --}}
        <button
          class="ml-4"
          x-on:click="$store.theme.toggle()" 
          x-text="$store.theme.dark ? '☀︎' : '⏾'"
        ></button>

        </button>
      </nav>
    </header>

    <!-- Main content -->
    <main>
      @yield('content') 
    </main>

    <!-- Footer -->
    <footer class="site-footer">
      &copy; {{ date('Y') }} Arcitect. All rights reserved.
    </footer>
  </div>

  @stack('scripts')
</body>
</html>