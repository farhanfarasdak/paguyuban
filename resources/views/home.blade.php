@extends('layout.master')

@section('content')
    <div class = "centered">
        <!--
        <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
            magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
            quis nostrud exerci tation ullamcorper suscipit lobortis nisl
            ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
            dolor in hendrerit in vulputate velit esse molestie consequat,
            vel illum dolore eu feugiat nulla facilisis at vero eros et
            accumsan et iusto odio dignissim qui blandit praesent luptatum
            zzril delenit augue duis dolore te feugait nulla facilisi.
            Nam liber tempor cum soluta nobis eleifend option congue
            nihil imperdiet doming id quod mazim placerat facer possim
            assum. Typi non habent claritatem insitam; est usus legentis
            in iis qui facit eorum claritatem. Investigationes
            demonstraverunt lectores legere me lius quod ii legunt saepius.
            Claritas est etiam processus dynamicus, qui sequitur mutationem
            consuetudium lectorum. Mirum est notare quam littera gothica,
            quam nunc putamus parum claram, anteposuerit litterarum formas
            humanitatis per seacula quarta decima et quinta decima. Eodem
            modo typi, qui nunc nobis videntur parum clari, fiant sollemnes
            in futurum.
        </p>
        <ul>
            @for($i = 0; $i<5; $i++)
                @if($i % 2 ==0)
                    <li>Menu {{ $i+1 }}</li>
                @endif
            @endfor
        </ul>
        -->
        <a href="{{route('niceaction' ,['action'=>'Greet'])}}">Greet</a>
        <a href="{{route('niceaction' ,['action'=>'Hug'])}}">Hug</a>
        <a href="{{route('niceaction' ,['action'=>'Kiss'])}}">Kiss</a>
        <br>
        <br>
        @if (count($errors)>0)
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('benice')}}" method="post">
            <label for="select-action">I want to...</label>
            <select id="select-action" name="action">
                <option value="greet">Greet</option>
                <option value="hug">Hug</option>
                <option value="kiss">Kiss</option>
            </select>
            <input type="text" name="name"/>
            <button type = "submit">Do a nice action!</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token"/>
        </form>
    </div>
@endsection
