@isset($type)
    @switch($type)

        @case('info')
            <div class="alert alert-info alert-dismissible fade show">
            @break
        @case('danger')
        <div class="alert alert-danger alert-dismissible fade show">
            @break
        @case('success')
        
        <div class="alert alert-success alert-dismissible fade show">

        @break
        @default
            <div class="alert-default bg-grey-lightest border-r-4 border-grey text-grey-dark p-4" role="alert">
    @endswitch
@endisset
@if(!isset($type))
    <div class="alert-default bg-grey-lightest border-r-4 border-grey text-grey-dark p-4" role="alert">
@endisset
<button type="button" class="close" data-dismiss="alert">×</button>            
    <p>{{ $content }}</p>
</div>
