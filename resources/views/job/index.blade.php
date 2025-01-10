<X-layout>
    @foreach ($jobs as $job)
    <div>
        {{ $job->title }}
    </div>
        
    @endforeach
</X-layout>