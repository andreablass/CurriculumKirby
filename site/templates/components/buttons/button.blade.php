<a {{ $attributes->class([
    'bg-gray-800',            // Fondo gris predeterminado
    'text-white',             // Texto blanco
    'font-semibold',          // Fuente semi-negrita
    'py-2',                   // Relleno vertical
    'px-4',                   // Relleno horizontal
    'rounded-lg',             // Bordes redondeados
    'transition',             // Transición
    'duration-300',           // Duración de la transición
    'ease-in-out',            // Efecto de transición
    'hover:bg-pink-700',      // Color de fondo en hover
    'focus:outline-none',     // Elimina borde de enfoque
    'focus:ring-2',           // Añade anillo de enfoque
    'active:bg-gray-800',     // Fondo gris cuando el enlace es presionado
    'active:text-white',       // Texto blanco cuando el enlace es presionado
    'rounded-full'
]) }}>
    {{ $slot }}
</a>
