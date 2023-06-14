<!-- Just some background component -->

<!-- By adding $attributes->merge we'll be able to add more class in some other place that use this component
and merge with our base class that defined in this component -->
<div {{ $attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6']) }}>
    <!-- Use this variable $slot if we want to wrap this component around other components -->
    {{ $slot }}
</div>