<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-main text-center']) }}>
    {{ $slot }}
</button>
