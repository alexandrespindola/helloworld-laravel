@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <h1 class="bg-yellow-400 text-blue-700 text-4xl">Services</h1>
    <div class="flex flex-row flex-wrap">
        @component('components.card')
            @slot('title', 'Service 1')
            @slot('content')
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos blanditiis tenetur
                unde suscipit, quam beatae rerum inventore consectetur, neque doloribus, cupiditate
                numquam dignissimos laborum fugiat deleniti? Eum quasi quidem quibusdam.
            @endslot
        @endcomponent

        @component('components.card')
            @slot('title', 'Service 2')

            @slot('content')
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            @endslot
        @endcomponent

        @component('components.card')
            @slot('title', 'Service 3')

            @slot('content')
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
            @endslot
        @endcomponent


    </div>
@endsection
