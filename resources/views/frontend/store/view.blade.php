@extends('layouts.app')
@section('content')
<div>
 <livewire:frontend.store.view :category="$category" :product="$product"/>
</div>
@endsection
