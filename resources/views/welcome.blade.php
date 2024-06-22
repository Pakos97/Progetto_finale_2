<x-layout>
<x-header
title="the aulab post"
/>

@if (session('message'))

    <div class="alert alert-success">{{ session('message') }}</div>
    
@endif

</x-layout>