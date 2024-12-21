<a href="{{ $href }}" {{ $attributes->merge(['class' => 'text-white no-underline hover:text-pink-400 hover:scale-120 hover:font-bold transition transform duration-300']) }}>
    {{--
        - text-white: Establece el color del texto como blanco.
        - no-underline: Elimina el subrayado del enlace.
        - hover:text-pink-400: Cambia el color del texto a rosa cuando el usuario pasa el ratón sobre el enlace.
        - hover:scale-120: Aumenta el tamaño del enlace al 120% cuando se pasa el ratón sobre él.
        - hover:font-bold: Hace que el texto se ponga en negrita cuando se pasa el ratón.
        - transition: Aplica una transición suave a los efectos de hover.
        - transform: Permite aplicar transformaciones, como escala o desplazamiento.
        - duration-300: Define la duración de la transición en 300 milisegundos.
    --}}
    {{ $slot }}
</a>
