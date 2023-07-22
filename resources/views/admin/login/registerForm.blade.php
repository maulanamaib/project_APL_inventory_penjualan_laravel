@extends('admin.layout.layout')

@section('content')
    <div class="wrapper fadeInDown">

        <!-- Icon -->
{{--        <div class="fadeIn first">--}}
{{--            <h2>Register</h2>--}}
{{--        </div>--}}

        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Login Form -->
            <form action="{{route('adm.newRes')}}" method="post">
                @csrf
                @if($errors->all())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                <input type="text" id="login" class="fadeIn second mt-4" name="name" placeholder="name">
                <input type="text" id="email" class="fadeIn third" name="email" placeholder="email">
                <input type="password" id="password" class="fadeIn third" lang="8" name="password" placeholder="password">
                <input type="tel" id="telephone" class="fadeIn third" name="telephone" placeholder="Number">

                <input type="submit" class="fadeIn fourth" value="Cadastrar">
            </form>

            <div id="formFooter">
                Already have an account?
                <a class="underlineHover" href="{{route('adm.login')}}"> Click here</a>
            </div>

        </div>
    </div>
@endsection
